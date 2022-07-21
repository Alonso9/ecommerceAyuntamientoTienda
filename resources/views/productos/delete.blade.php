<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$productos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eleminar registro de vendedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Deseas borrar el registro del Producto {{$productos->nombre}} del vendedor {{$vendedor->nombre}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
          <a href="{{route('producto.destroy',$productos->id)}}" class="btn btn-outline-danger">Eleminar</a>
        </div>
      </div>
    </div>
  </div>