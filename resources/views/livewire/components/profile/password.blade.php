<div>
    <h2 class="text-center font-weight-bold text-danger">CAMBIAR CONTRASEÑA</h2>
    <div class="form-row">
        <div class="form-group col-lg-6">
            <label for="" class="col-form-label font-weight-bold text-dark">Contraseña Nueva</label>
            <input wire:model.defer="password" type="password"
                class="form-control @error('password') is-invalid @enderror" value="">
            @error('password')
                <p class="error-message text-danger font-weight-bold">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group col-lg-6">
            <label for="" class="col-form-label font-weight-bold text-dark">Repetir Contraseña</label>
            <input wire:model.defer="password_confirmation" type="password"
                class="form-control @error('password_confirmation') is-invalid @enderror" value="">
            @error('password_confirmation')
                <p class="error-message text-danger font-weight-bold">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="row justify-content-center">
        <a href="" class="btn btn-danger" wire:click.prevent="cambiarPassword">Cambiar Contraseña</a>
    </div>
</div>
