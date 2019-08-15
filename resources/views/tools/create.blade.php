<div class="modal fade" id="createModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<form action="tools" method="POST">
			@csrf
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="defaultModalLabel">Registrar nueva herramienta</h4>
				</div>
				<div class="modal-body">
					<div class="form-group form-float">
						<div class="form-line">
							<input type="text" name="name" pattern="^\p{L}+(?: \p{L}+)*$" required maxlength="50" class="form-control">
							<label class="form-label">Nombre de Herramienta</label>
						</div>
					</div>
					<div class="form-group form-float">
						<div class="form-line">
							<input type="number" name="quantity" pattern="^\d+$" max="10000" required class="form-control">
							<label class="form-label"></label>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success waves-effect">
							<i class="material-icons">create</i><span>Dar de alta</span>
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