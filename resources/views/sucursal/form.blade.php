    <h5>Nombre</h5>
    <input class="form-control" type="text" name="nombre" value="{{ isset($sucursal->nombre) ? $sucursal->nombre : "" }}">
    <br>
    <h5>Teléfono</h5>
    <input class="form-control" type="number" name="telefono" min="1" maxlength="10" value="{{ isset($sucursal->telefono) ? $sucursal->telefono : "" }}">
    <br>
    <h5>Calle</h5>
    <input class="form-control" type="text" name="calle" value="{{ isset($sucursal->calle) ? $sucursal->calle : "" }}">
    <br>
    <h5>Colonia</h5>
    <input class="form-control" type="text" name="colonia" value="{{ isset($sucursal->colonia) ? $sucursal->colonia : "" }}">
    <br>
    <h5>CP</h5>
    <input class="form-control" type="text" name="cp" maxlength="5" value="{{ isset($sucursal->cp) ? $sucursal->cp : "" }}">
    <br>
    <h5>Número plazas</h5>
    <input class="form-control" type="number" name="numeroPlazas" min="0" value="{{ isset($sucursal->numeroPlazas) ? $sucursal->numeroPlazas : "" }}">
    <br>
    <input type="hidden" name="id" value="{{ isset($sucursal->id) ? $sucursal->id : "" }}">
    <div class="d-grid gap-2">
    <a class="btn btn-secondary" href="{{ url('sucursal/') }}">Cancelar</a>    
    <input class="btn btn-primary" type="submit" value="Aceptar">
    </div>