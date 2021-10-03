<div>
    @include('livewire.admin.user.modales.usermodal')
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#userModal"><i
            class="fas fa-user-plus"></i>
        Agregar Usuario
    </button>
    <div class="card">
        <div class="card-body">
            <div class="row mb-4 justify-content-between">
                <div class="col-lg-4 col-12 pb-lg-0 pb-1 form-inline">
                    Por Pagina: &nbsp;
                    <select wire:model="perPage" class="form-control form-control-sm">
                        <option>10</option>
                        <option>15</option>
                        <option>25</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <input wire:model="search" class="form-control" type="text" placeholder="Buscar Usuario...">
                </div>
            </div>
            <div class="row table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-center ">
                                <a class="text-primary" wire:click.prevent="sortBy('names')" role="button" href="#">
                                    Nombres
                                    @include('includes._sort-icon', ['field' => 'names'])
                                </a>
                            </th>
                            <th class="px-4 py-2 text-center ">
                                <a class="text-primary" wire:click.prevent="sortBy('username')" role="button"
                                    href="#">
                                    Usuario
                                    @include('includes._sort-icon', ['field' => 'username'])
                                </a>
                            </th>
                            <th class="px-4 py-2 text-center ">
                                <a class="text-primary" wire:click.prevent="sortBy('email')" role="button" href="#">
                                    Email
                                    @include('includes._sort-icon', ['field' => 'email'])
                                </a>
                            </th>
                            <th class="px-4 py-2 text-center ">
                                <a class="text-primary" wire:click.prevent="sortBy('status')" role="button" href="#">
                                    Estado
                                    @include('includes._sort-icon', ['field' => 'status'])
                                </a>
                            </th>
                            <th class="px-4 py-2 text-center" colspan="2">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->isNotEmpty())
                            @foreach ($users as $user)
                                <tr>
                                    <td class="p-1 text-center  text-dark">{{ $user->names }}</td>
                                    <td class="p-1 text-center  text-dark">{{ $user->username }}</td>
                                    <td class="p-1 text-center  text-dark">{{ $user->email }}</td>
                                    <td class="p-1 text-center  text-dark">
                                        <span style="cursor: pointer;"
                                            wire:click.prevent="estadochange('{{ $user->id }}')"
                                            class="badge {{ simpleStatus($user->status) }}">{{ $user->status }}</span>
                                    </td>
                                    <td class="p-1 text-center" width="25">
                                        <a class="btn btn-sm btn-warning text-dark" data-toggle="modal"
                                            data-target="#userModal" wire:click.prevent="editUser({{ $user->id }})">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <td class="p-1 text-center" width="25">
                                        <a class="btn btn-sm btn-danger text-dark"
                                            wire:click.prevent="$emit('manipularRegistro','Seguro que deseas eliminar este Registro?','Si, Eliminar','deleteUser', {{ $user->id }})">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="10">
                                    <p class="text-center">No hay resultado para la busqueda
                                        <strong>{{ $search }}</strong> en la pagina
                                        <strong>{{ $page }}</strong> al mostrar <strong>{{ $perPage }}
                                        </strong> por pagina
                                    </p>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col">
                    {{ $users->links() }}
                </div>
                <div class="col text-right text-muted">
                    Mostrar {{ $users->firstItem() }} a {{ $users->lastItem() }} de
                    {{ $users->total() }} registros
                </div>
            </div>
        </div>
    </div>

</div>
