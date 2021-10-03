<?php

namespace App\Http\Livewire\Admin\User;

use App\User;
use App\Traits\SortBy;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersList extends Component
{
    use WithPagination, SortBy;
    protected $paginationTheme = 'bootstrap';
    protected $listeners       = ['deleteUser'];
    protected $queryString     = [
        'search' => ['except' => ''],
        'page',
    ];
    public $perPage        = 10;
    public $search         = '';
    public $orderBy        = 'id';
    public $orderAsc       = true;
    public $status         = 'activo';
    public $user_id        = '';
    public $rol        = '';
    public $findrole        = '';
    public $roles        = [];
    public $editMode       = false;
    public $creatingMode   = false;
    // VARIABLES DE USUARIO
    public $names, $email, $username;
    public function render()
    {
        $this->roles = Role::whereNotIn('name', ['super-admin'])->select('name', 'description')->get();
        $users = User::notSuperAdmin()
            ->search($this->search)
            ->findRole($this->findrole)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
        return view('livewire.admin.user.users-list', compact('users'));
    }
    public function createUser()
    {
        $this->validate([
            'names'   => 'required',
            'email'    => 'required|unique:users,email|email',
            'rol'         => 'required',
            'username'         => 'required|unique:users,username',
        ], [
            'names.required'   => 'No has agregado el nombre del usuario',
            'username.required'    => 'No has agregado el nick del usuario',
            'username.unique'      => 'Este usuario ya se encuentra registrado',
            'email.required'     => 'No has agregado el correo',
            'email.email'        => 'Agrega un correo valido',
            'email.unique'       => 'Este correo ya se encuentra en uso',
            'rol.required'         => 'No has selecionado un rol',
        ]);
        // $clave = Str::random(10); // PRODUCTION
        $clave              = 12345678; //LOCAL
        $user               = new User;
        $user->names      = $this->names;
        $user->username     = $this->username;
        $user->email        = $this->email;
        $user->status       = $this->status == 'activo' ? 'activo' : 'inactivo';
        $user->password     = Hash::make($clave);
        $user->save();
        $user->assignRole($this->rol);
        $this->resetInput();
        $this->alert(
            'success',
            'Usuario Registrado Correctamente',
            [
                'modal' => '#userModal'
            ]
        );
    }
    public function editUser(User $user)
    {
        $this->user_id  = $user->id;
        $this->names    = $user->names;
        $this->username = $user->username;
        $this->email    = $user->email;
        $this->status   = $user->status;
        $this->editMode = true;
        $this->rol      = $user->roles[0]->name;
    }
    public function updateUser()
    {
        $this->validate([
            'names'   => 'required',
            'email'    => 'required|unique:users,email,' . $this->user_id,
            'rol'         => 'required',
            'username'         => 'required|unique:users,username,' . $this->user_id,
        ], [
            'names.required'   => 'No has agregado el nombre del usuario',
            'username.required'    => 'No has agregado el nick del usuario',
            'username.unique'      => 'Este usuario ya se encuentra registrado',
            'email.required'     => 'No has agregado el correo',
            'email.email'        => 'Agrega un correo valido',
            'email.unique'       => 'Este correo ya se encuentra en uso',
            'rol.required'         => 'No has selecionado un rol',
        ]);
        $user           = User::find($this->user_id);
        $user->names      = $this->names;
        $user->username     = $this->username;
        $user->email        = $this->email;
        $user->status       = $this->status == 'activo' ? 'activo' : 'inactivo';
        $user->save();
        $user->syncRoles([$this->rol]);
        $this->resetInput();
        $this->alert(
            'info',
            'Usuario Actualizado Correctamente',
            [
                'modal' => '#userModal'
            ]
        );
    }
    public function deleteUser(User $user)
    {
        $user->delete();
        $this->alert(
            'info',
            'Usuario Eliminado Correctamente',
            [
                'modal' => '#userModal'
            ]
        );
    }
    public function resetInput()
    {
        $this->reset([
            'names', 'username', 'email', 'status', 'editMode', 'rol'
        ]);
    }
}
