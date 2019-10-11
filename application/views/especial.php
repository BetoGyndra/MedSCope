<div class="page">
      <div class="page-content"> 

    <div class="panel panel-primary">   
        <div class="panel-heading">
            <h3 class="panel-title">Especialidades</h3>
            </div>
            <br>
			<div class="panel-body">
				<!-- inicia card body-->
				<div class="row">
					<div class="col-12">
						<button class="btn btn-primary float-right" data-toggle="modal" data-target="#modalEspecial">Nuevo</button>
					</div>
				</div>
				<div class="row my-3">
					<div class="col-12">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Nombre</th>
                                    <th>Medicos</th>
                                    <th>Fecha de creacion</th>								
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
							        <th>Cardiologo</th>
                                     <th>2</th>
                                     <th>11/11/2019</th>                                   
                                     <th>
                                     <button>actualizar</button>
                                     <button>Status</button>
                                     </th>
							</tbody>
						</table>
					</div>
				</div>
				<!-- termina card body-->
			</div>
        </div>       
                                                
            </div>
            </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="modalEspecial">
	  <div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title">Registro de Especialidad</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
          <div class="col-lg-12">
          <div class="form-group form-material row" data-plugin="formMaterial">
                                    <div class="col-md-12">
                                    <label class="form-control-label" for="nameSpecialty">Nombre</label>
                                    <input type="text" class="form-control" id="nameSpecialty" name="nameSpecialty" placeholder=""
                                    />
                                </div>                                                                                              
                                </div>  
          </div>
          <div class="modal-footer">
            <button>save</button>
          </div>
	    </div>
	  </div>
	</div>
           