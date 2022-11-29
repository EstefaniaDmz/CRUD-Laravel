    <h5>Fecha</h5>
    <input class="form-control" type="text" name="fecha" value="{{ isset($vuelo->fecha) ? $vuelo->fecha : "" }}">
    <br>
    <h5>Hora</h5>
    <input class="form-control" type="text" name="hora" value="{{ isset($vuelo->hora) ? $vuelo->hora : "" }}">
    <br>
    <h5>Ciudad origen</h5>
    <input class="form-control" type="text" name="ciudadOrigen" value="{{ isset($vuelo->ciudadOrigen) ? $vuelo->ciudadOrigen : "" }}">
    <br>
    <h5>Estado origen</h5>
    <input class="form-control" type="text" name="estadoOrigen" value="{{ isset($vuelo->estadoOrigen) ? $vuelo->estadoOrigen : "" }}">
    <br>
    <h5>País origen</h5>
    <input class="form-control" type="text" name="paisOrigen" value="{{ isset($vuelo->paisOrigen) ? $vuelo->paisOrigen : "" }}">
    <br>
    <h5>Ciudad destino</h5>
    <input class="form-control" type="text" name="ciudadDestino" value="{{ isset($vuelo->ciudadDestino) ? $vuelo->ciudadDestino : "" }}">
    <br>
    <h5>Estado destino</h5>
    <input class="form-control" type="text" name="estadoDestino" value="{{ isset($vuelo->estadoDestino) ? $vuelo->estadoDestino : "" }}">
    <br>
    <h5>País destino</h5>
    <input class="form-control" type="text" name="paisDestino" value="{{ isset($vuelo->paisDestino) ? $vuelo->paisDestino : "" }}">
    <br>
    <h5>Número plazas</h5>
    <input class="form-control" type="number" name="numeroPlazas" min="0" value="{{ isset($vuelo->numeroPlazas) ? $vuelo->numeroPlazas : "" }}">
    <br>
    <input type="hidden" name="id" value="{{ isset($vuelo->id) ? $vuelo->id : "" }}">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-secondary" href="{{ url('vuelo/') }}">Cancelar</a>
        <input class="btn btn-primary" type="submit" value="Aceptar">
    </div>