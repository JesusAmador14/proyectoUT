<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-col-red">
            <form id="formDeleteStudent" action="{{ route('students.destroy', ':USER_ID') }}" method="DELETE">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title" id="smallModalLabel">Eliminando</h4>
                </div>
                <div class="modal-body">
                    <p>¿Desea eliminar este registro?</p>
                    <div class="modal-footer">
                        <button type="button" id="deleteFormStudent" class="btn btn-link waves-effect">Eliminar</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cancelar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>