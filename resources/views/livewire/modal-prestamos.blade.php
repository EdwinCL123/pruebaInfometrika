<div>
    
  

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Registrar prestamo
</button>



<!-- Modal -->
<div class="modal fade show" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form wire:submit.prevent="submit" >

        <div class="modal-body">  

            <div class="form-group">
              <label for="exampleInputEmail1">Usuario ID</label>
              {{-- <select wire:model="id_usuario" class="form-control">
                @foreach($usuarios as $usuario)
                <option value="{{$usuario->id}}">{{$usuario->nombre_usuario}}</option>
                @endforeach
              </select> --}}
              <input type="number"  class="form-control"  wire:model="id_usuario" id="exampleInputPassword1" placeholder="Ingresa">

              Nota: este campo debe ser selector pero no me alcanzó el tiempo :(
                

              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Libro ID</label>
              {{-- <select wire:model="id_libro" class="form-control">
                @foreach($libros as $libro)
                <option value="{{$libro->id}}">{{$libro->titulo}}</option>
                @endforeach
              </select> --}}

              <input type="text"  class="form-control"  wire:model="id_libro" id="exampleInputPassword1" placeholder="Ingresa">
              Nota: este campo debe ser selector pero no me alcanzó el tiempo :(
              

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Fecha prestamo</label>
              <input type="date"  class="form-control"  wire:model="fecha_prestamo" id="exampleInputPassword1" placeholder="Ingresa">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Fecha devolución</label>
              <input type="date"  class="form-control"  wire:model="fecha_devolucion" id="exampleInputPassword1" placeholder="Ingresa">
            </div>            
       
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>


</div>
