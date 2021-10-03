<div>
    <h2 class="text-center font-weight-bold text-danger">DATOS PERSONALES</h2>
    <div class="form-row">
        <div class="form-group col-lg-8">
            <label for="" class="col-form-label text-dark font-weight-bold">Nombres</label>
            <input type="text" disabled class="form-control text-dark" value="{{ $user->names }}">
        </div>
        <div class="form-group col-lg-4">
            <label for="" class="col-form-label text-dark font-weight-bold">Usuario</label>
            <input type="text" class="form-control text-dark" disabled value="{{ $user->username }}">
        </div>
        <div class="form-group col-lg-6">
            <label for="" class="col-form-label text-dark font-weight-bold">Correo</label>
            <input type="text" class="form-control text-dark" disabled value="{{ $user->email }}">
        </div>
        <div class="form-group col-lg-6">
            <label for="" class="col-form-label text-dark font-weight-bold">Telefono</label>
            <input type="number" class="form-control text-dark" min="0" wire:model.defer="phone">
        </div>
    </div>
    <div class="row justify-content-lg-center p-1">
        <a href="" class="btn btn-danger" wire:click.prevent="updateData">ACTUALIZAR DATOS</a>
    </div>
</div>
