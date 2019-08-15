<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<form id="formEditTool" action="{{ route('tools.update', ':USER_ID') }}" method="PUT">
			@csrf
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">Actualizar herramienta</h4>
				</div>
				<div class="modal-body">
					<div class="form-group form-float">
						<div class="form-line">
							<input type="number" name="quantity" pattern="^\d+$" max="10000" required class="form-control">
							<label class="form-label">Cantidad</label>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" id="editFormTool" class="btn btn-success waves-effect">
							<i class="material-icons">create</i><span>Actualizar</span>
						</button>
						<button type="button" class="btn waves-effect" data-dismiss="modal">
							<i class="material-icons">clear</i><span>Cancelar</span>
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>