    <h5>Nombre</h5>
    <input class="form-control" type="text" name="nombre" value="{{ isset($cliente->nombre) ? $cliente->nombre : "" }}">
    <br>
    <h5>Apellido Paterno</h5>
    <input class="form-control" type="text" name="apellidoPaterno" value="{{ isset($cliente->apellidoPaterno) ? $cliente->apellidoPaterno : "" }}">
    <br>
    <h5>Apellido Materno</h5>
    <input class="form-control" type="text" name="apellidoMaterno" value="{{ isset($cliente->apellidoMaterno) ? $cliente->apellidoMaterno : "" }}">
    <br>
    <h5>Teléfono</h5>
    <input class="form-control" type="number" name="telefono" min="1" maxlength="10" value="{{ isset($cliente->telefono) ? $cliente->telefono : "" }}">
    <br>
    <h5>Calle</h5>
    <input class="form-control" type="text" name="calle" value="{{ isset($cliente->calle) ? $cliente->calle : "" }}">
    <br>
    <h5>Colonia</h5>
    <input class="form-control" type="text" name="colonia" value="{{ isset($cliente->colonia) ? $cliente->colonia : "" }}">
    <br>
    <h5>CP</h5>
    <input class="form-control" type="text" name="cp" maxlength="5" value="{{ isset($cliente->cp) ? $cliente->cp : "" }}">
    <br>
    <h5>Id Hotel</h5>
    <input class="form-control" type="number" min="1" name="idHotel" value="{{ isset($cliente->idHotel) ? $cliente->idHotel : "" }}">
    <br>
    <h5>Régimen hotel</h5>
    <input class="form-control" type="text" name="regimenHotel" value="{{ isset($cliente->regimenHotel) ? $cliente->regimenHotel : "" }}">
    <br>
    <h5>Id Sucursal</h5>
    <input class="form-control" type="number" min="1" name="idSucursal" value="{{ isset($cliente->idSucursal) ? $cliente->idSucursal : "" }}">
    <br>
    <h5>Id Vuelo</h5>
    <input class="form-control" type="number" min="1" name="idVuelo" value="{{ isset($cliente->idVuelo) ? $cliente->idVuelo : "" }}">
    <br>
    <h5>Clase Vuelo</h5>
    <input class="form-control" type="text" name="claseVuelo" value="{{ isset($cliente->claseVuelo) ? $cliente->claseVuelo : "" }}">
    <br>
    <input type="hidden" name="id" value="{{ isset($cliente->id) ? $cliente->id : "" }}">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-secondary" href="{{ url('cliente/') }}">Cancelar</a>
        <input class="btn btn-primary" type="submit" value="Aceptar">
    </div>