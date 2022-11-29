    <h5>Nombre</h5>
    <input type="text" name="nombre" value="{{ isset($hotel->nombre) ? $hotel->nombre : "" }}">
    <br>
    <h5>Teléfono</h5>
    <input type="number" name="telefono" min="1" maxlength="10" value="{{ isset($hotel->telefono) ? $hotel->telefono : "" }}">
    <br>
    <h5>Calle</h5>
    <input type="text" name="calle" value="{{ isset($hotel->calle) ? $hotel->calle : "" }}">
    <br>
    <h5>Colonia</h5>
    <input type="text" name="colonia" value="{{ isset($hotel->colonia) ? $hotel->colonia : "" }}">
    <br>
    <h5>Código postal</h5>
    <input type="number" name="cp" min="1" maxlength="5" value="{{ isset($hotel->cp) ? $hotel->cp : "" }}">
    <br>
    <h5>Ciudad</h5>
    <input type="text" name="ciudad" value="{{ isset($hotel->ciudad) ? $hotel->ciudad : "" }}">
    <br>
    <h5>Estado</h5>
    <input type="text" name="estado" value="{{ isset($hotel->estado) ? $hotel->estado : "" }}">
    <br>
    <h5>País</h5>
    <input type="text" name="pais" value="{{ isset($hotel->pais) ? $hotel->pais : "" }}">
    <br>
    <h5>Número de plazas</h5>
    <input type="number" name="numeroPlazas" min="0" value="{{ isset($hotel->numeroPlazas) ? $hotel->numeroPlazas : "" }}">
    <input type="hidden" name="id" value="{{ isset($hotel->id) ? $hotel->id : "" }}">
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-secondary" href="{{ url('hotel/') }}">Cancelar</a>
        <input class="btn btn-primary" type="submit" value="Aceptar">
    </div>
    