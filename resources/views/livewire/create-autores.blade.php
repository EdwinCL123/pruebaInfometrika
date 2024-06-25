<div>
    
  

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenterA">
        Registrar Autor
    </button>
    
    
    
    <!-- Modal -->
    <div class="modal fade show" id="exampleModalCenterA" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" wire:model="nombre_autor"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa">
                    <small id="emailHelp" class="form-text text-muted"></small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">pais</label>
                    <input type="text" class="form-control" wire:model="pais_autor"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa">
                    <small id="emailHelp" class="form-text text-muted"></small>
                  </div>  
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">fecha fallecimiento</label>
                    <input type="date" class="form-control" wire:model="fallecimiento_autor"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa">
                    <small id="emailHelp" class="form-text text-muted"></small>
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
    