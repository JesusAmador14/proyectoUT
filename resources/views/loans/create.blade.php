<div class="modal fade" id="createModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="/students" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Registrar nuevo estudiante</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="name" pattern="^\p{L}+(?: \p{L}+)*$" required maxlength="50" class="form-control">
                            <label class="form-label">Nombre</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="surname" pattern="^\p{L}+(?: \p{L}+)*$" required maxlength="50" class="form-control">
                            <label class="form-label">Apellidos</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="control_number" required maxlength="50" class="form-control">
                            <label class="form-label">Número de control</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" name="professor" pattern="^\p{L}+(?: \p{L}+)*$" required maxlength="50" class="form-control">
                            <label class="form-label">Maestro</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-float">
                            <select name="grade" class="form-control">
                                <option value="">-- Grado --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" name="group" class="form-control">
                                <label class="form-label">Grupo</label>
                            </div>
                        </div>
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
        </form>
    </div>
</div>