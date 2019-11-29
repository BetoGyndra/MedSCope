<style>
 
  .color1{
    color: #2980B9; 
  }
  .color2{
    color: #9B59B6; 
  }
  .color3{
    color: #F1C40F; 
  }
  .color4{
    color: #E67E22; 
  }
  .color5{
    color: #EC7063; 
  }
  .color6{
    color: #17A589; 
  }
  .color7{
    color: #34495E ; 
  }
  .color8{
    color: #ff0000 ; 
  }
</style>
<!-- Page -->
<div class="page">
  <div class="page-content">
    <div class="panel panel-primary gradient01">
      <div class="panel-heading">
        <h3 class="panel-title">Agendar cita</h3>
      </div>
      <br>
      <div class="panel-body">
        <!-- Site Action -->

        <div class="row">
          <div class="col-12">

            <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalcitas"><i
                class="icon  wb-calendar white" aria-hidden="true"></i>Nuevo</button>
          </div>
        </div>
        <!-- End Site Action -->

        <div id="divtoast">

        </div>
      </div>


      <div class="row">
        <div class="col-12">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Paciente</th>
                <th>Medico</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Nota</th>                
                <th>status</th>
                <th>Options</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
      <!-- termina card body-->
    </div>
  </div>

</div>
</div>
</div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="modalcitas">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="titleModal">Configurar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="col-lg-12">
        <form autocomplete="off" id="formcitas">
          <!-- End Panel Static Labels -->
          <div class="panel panel-success ">
            <div class="panel-heading">
              <h3 class="panel-title">Nueva Cita</h3>
            </div>
            <div class="panel-body container-fluid border">
              
                <br>
                <div class="col-md-12">
                <div class="row">
                <div class="col-lg-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <label class="form-control-label" for="Empleado">Paciente</label>
                    <select class="form-control" id="idPatient" name="idPatient">
                      <option selected disabled>Seleccione</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <label class="form-control-label" for="Empleado">Medico</label>
                    <select class="form-control" id="idMedic" name="idMedic">
                      <option selected disabled>Seleccione</option>
                    </select>
                  </div>
                </div>
                </div>
                

                <div class="row">
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="date" class="form-control" id="fecha" name="fecha" placeholder="" />
                                 <label class="label">Fecha</label> 
                             </div>
                             </div>
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="time" class="form-control" id="desde" name="desde" placeholder="" />
                                 <label class="label">Hora</label> 
                             </div>                
                             </div>
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="text" class="form-control" id="motivo" name="motivo" placeholder="" />
                                 <label class="floating-label">Motivo</label> 
                             </div>                                                             
                             </div> 
                             </div> 
                             </div>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>
        <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" tabindex="-1" role="dialog" id="modalcitas2">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="titleModal">Horarios</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="col-lg-12">
        <form autocomplete="off" id="formcitas">
          <!-- End Panel Static Labels -->
          <div class="panel panel-success ">
            <div class="panel-heading">
              <h3 class="panel-title">Configurar</h3>
            </div>
            <div class="panel-body container-fluid border">
              
                <br>
                <div class="col-lg-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <label class="form-control-label" for="Empleado">Empleado</label>
                    <select class="form-control" id="Empleado" name="Empleado">
                      <option selected disabled>Seleccione</option>
                    </select>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>
        <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>
    </div>
  </div>


<div class="modal fade" tabindex="-1" role="dialog" id="modalstatus">
     <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="titleModal">Cambiar status</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>            
             <div class="col-lg-12">
             <form autocomplete="off" id="formstatus">            
         <!-- End Panel Static Labels -->                                                       
                     <div class="panel-body container-fluid border">  
						                                                  
                             <div class="col-lg-12">							 
									 <div id="nombreSchedule"> </div>
								 <div class="row">
									 
								<div class="col-lg-6">
								<button type="button"  data-dismiss="modal" class="btn btn-warning">No</button>
								</div>
								<div class="col-lg-6">
								<button type="submit" class="btn btn-success">Si</button>  
								</div>                                      						
							 </div>   
							 </div>                                                                                                    
                        </div>                                   
			</div>     
			<div class="modal-footer">
					
			</form>
			</div>
		</div>
	</div>
</div> 

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="<?=base_url('resources/js/jquery.js');?>"></script>
	<script src="<?=base_url('resources/js/popper.js');?>"></script>
	<script src="<?=base_url('resources/js/bootstrap.js');?>"></script>
	
    

