<div>
  
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">USUARIO</th>
            <th scope="col">ID LIBRO</th>
            <th scope="col">FECHA PRESTAMO</th>
            <th scope="col">FECHA DEVOLUCIÓN</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($prestamos as $tableitem)
            <tr>
              <th scope="row">{{$tableitem->id}}</th>
              <th>{{$tableitem->id_usuario}}</th>
              <td>{{$tableitem->id_libro}} </td>
              <td>{{$tableitem->fecha_prestamo}}</td>
              <td>{{$tableitem->fecha_devolucion}}</td>
            </tr>  
            @endforeach
          </tr>        
          
        </tbody>
      </table></div>
