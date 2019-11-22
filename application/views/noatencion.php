 <!-- Page -->
<div class="page">
     <div class="page-content">
         <div class="panel panel-warning gradient01">
         <div class="panel-heading">
            <h3 class="panel-title">Fechas de no atencion</h3>
            </div>
            <br>
             <div class="panel-body">

             <!-- Site Action -->
    <div class="site-action" data-plugin="actionBtn">
      <button type="button" data-toggle="modal" data-target="#modalnoatencion" class="site-action-toggle btn-raised btn btn-success btn-floating">
        <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>        
      </button>
    </div>
    <!-- End Site Action -->

    <div class="row my-3">
					<div class="col-12">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>#</th>
                                     <th>Dia</th>								
                                     <th>Motivo</th>
                                     <th>Desde</th>																						
									<th>Options</th>                  
								</tr>
							</thead>
							<tbody>							       
							</tbody>
						</table>
					</div>
				</div>

    </div>
    </div>
    </div>
    </div>
    </div>
    

    <div class="modal fade" tabindex="-1" role="dialog" id="modalnoatencion">
     <div class="modal-dialog modal-md" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="titleModal">No atencion</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>            
             <div class="col-lg-12">
             <form autocomplete="off" id="formnoatencion">            
         <!-- End Panel Static Labels -->                                                       
         <div class="panel panel-success ">
                     <div class="panel-heading">
                         <h3 class="panel-title">Fecha nueva</h3>
                     </div>
                     <div class="panel-body container-fluid border">
                         
                             <br>
                             <div class="col-lg-12">
                             <div class="row">
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="date" class="form-control" id="RFC" name="RFC" placeholder="" />
                                 <label class="label">Dia</label> 
                             </div>
                             </div>
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="text" class="form-control" id="noSecure" name="noSecure" placeholder="" />
                                 <label class="floating-label">Motivo</label> 
                             </div>                             
                             </div>
                             <div class="col-md-4">                             
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="time" class="form-control" id="noSecure" name="noSecure" placeholder="" />
                                 <label class="label">Desde</label> 
                             </div>   

                             </div> 
                             </div> 
                             </div>                             
                            
                                              
                        </div>
                 </div>                                 
			</div>     
			<div class="modal-footer">
            <button type="button"  data-dismiss="modal" class="btn btn-warning">Cancel</button>
            <button type="submit" class="btn btn-success">Guardar</button> 
			</form>
			</div>
		</div>
	</div>
</div>

<script>
            $('#modalnoatencion').on('shown.bs.modal',function(){
				$(document).find('#formnoatencion').find('input').each(function(){
                    $(this).removeClass('empty');
				});

            });
                        
</script> 