<div class="page">
      <div class="page-content"> 

    <div class="panel panel-danger gradient01">   
        <div class="panel-heading">
            <h3 class="panel-title">Especialidades</h3>
            </div>
            <br>
			<div class="panel-body">
				<!-- inicia card body-->
				<div class="row">
                     <div class="col-12">
                         <button class="btn btn-success float-right"  data-toggle="modal"
                             data-target="#modalEspecial"><i class="icon   wb-add-file white" aria-hidden="true"></i>Nuevo</button>
                     </div>
				 </div>

				 <div class="toast"  style="display: none;" id="toastersuccess" name="toastersuccess" aria-live="polite"    		data-plugin="toastr"
                      
                      data-container-id="toast-top-right" data-position-class="toast-top-right"
                      data-icon-class="toast-just-text toast-success toast-shadow"
                      role="alert">
                      <div class="toast toast-just-text toast-shadow toast-success">
                        <button type="button" class="toast-close-button" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <div class="toast-message">							
                          </div>
                      </div>
					</div>
					
					
				<div class="row my-3">
					<div class="col-12">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>#</th>
                                    <th>Abreviacion</th>
									<th>Nombre</th>
									<th>Descripcion</th>
									<th>Status</th>
									<th>Creación</th>
                                    <th>Modificación</th>								
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

			<div class="modal fade" tabindex="-1" role="dialog" id="modalEspecial">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="titleModal">Registro de Especialidad</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>            
             <div class="col-lg-12">
             <form autocomplete="off" id="formEspecial">            
         <!-- End Panel Static Labels -->                                      
                 <div class="panel panel-danger ">
                     <div class="panel-heading">
                         <h3 class="panel-title">Especialidad</h3>
                     </div>
                     <div class="panel-body container-fluid border">
                         
                             <br>
                             <div class="col-lg-12">
                             <div class="row">
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="text" class="form-control" id="code" name="code" placeholder="" />
                                 <label class="floating-label">Abreviacion</label> 
                             </div>
                             </div>
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="text" class="form-control" id="nameSpecialty" name="nameSpecialty" placeholder="" />
                                 <label class="floating-label">Nombre Especialidad</label> 
                             </div>                             
                             </div>
                             <div class="col-md-4">                             
                             <div class="form-group">
								<label for="exampleFormControlTextarea1">Descripcion</label>
								<textarea class="form-control rounded-0" id="description" name="description" rows="7"></textarea>
								</div>
                             </div> 
                             </div> 
                             </div>                             
                            
                                              
                        </div>
                 </div>
            
        
     </div>     
     <div class="modal-footer">
        <button type="button"  data-dismiss="modal" class="btn btn-warning">Cancel</button>
        <button type="submit" class="btn btn-success">Save</button>         
        </form>
     </div>
     

    

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
									 <div id="nombreEspecialidad"> </div>
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
	


 
 <script type="text/javascript">
		$(function() {
			var _action = "new"; //new,uptdate,read,delete
			let _table =$('.table').DataTable({
				"ajax" : {
					"url" : "http://localhost/MSC_services/index.php/speciality/Api/speciality",
					"dataSrc" : "data"
                },              
				"columns" : [
					{"data" : "idSpecialty", "defaultContent" : ""},
                    {"data" : "code", "defaultContent" : ""},
                    {"data" : "nameSpecialty", "defaultContent" : ""},
                    {"data" : "description", "defaultContent" : ""},                    
                    {"data" : "statusSpecialty", "defaultContent" : ""},
                    {"data" : "creationDateSpecialty", "defaultContent" : ""},
                    {"data" : "lastModSpecialty", "defaultContent" : ""},                                     
					{"data" : null, "defaultContent" : "<div class='btn-group'><button class='btn btn-primary btn-sm mx-2 btn-custom-action' data-action='update'  title='Actualizar'><i class='icon wb-wrench white' aria-hidden='true'></button><button class='btn btn-warning btn-sm btn-custom-action2' data-action='status' title='Cambiar Status'><i class='icon wb-user-circle white' aria-hidden='true' ></button></div>"}
				], 
				"columnDefs" : [
					{"orderable" : false, "width" : "10%", "targets": -1}
				]
			});

            $(document).find('#fkUsers_cli').each(function(){
				$.ajax({
					"url":"http://localhost/tickets2_services/index.php/usuarios_cli/api/usersCli",
					"method":"get",
					"success": function(response){
						if (response.status=="success"){
							$.each(response.data,function(key,value){
								$('#fkUsers_cli').append('<option value="'+value.users_cliId+'">'+value.users_cliExt+'</option>');
							});
						}
					},
					"error":function(xh,err,thro){
						console.info(xh);
					}
				});
			});

			$(document).on('submit','#formEspecial',function(event){
				event.preventDefault();
				limpiarCampos('formEspecial');
				var permiteEnviar = false;
				var uri="http://localhost/MSC_services/index.php/speciality/Api/speciality";
				var method ="get";
				switch(_action){
					case 'new':
						permiteEnviar = true;
						var uri="http://localhost/MSC_services/index.php/speciality/Api/speciality";
						method="post";
						break;
					case 'update':
						permiteEnviar = true;
						var uri="http://localhost/MSC_services/index.php/speciality/Api/speciality/id/"+$(document).find('#idSpecialty').val();
						method="put";
                        break;
                    case 'consulta':
						permiteEnviar = false;
						var uri="http://localhost/MSC_services/index.php/speciality/Api/speciality/id/"+$(document).find('#idSpecialty').val();
						method="get";
						break;					
					case 'default':
						permiteEnviar = false;
						break;
				}
				if(permiteEnviar){
					$.ajax({
					"url" : uri,
					"method" : method,
					"data" : $('#formEspecial').serialize(),
					"success" : function(response){
						if (response.status=="success") {
							
							var mensaje = response.message;
							$('#toastersuccess').prop("data-message", mensaje);
							$('#toastersuccess').click();	

							_table.ajax.reload();
							$('#modalEspecial').modal('hide');
                            $(".modal-backdrop").remove();
						}else if(response.status=="error"){


							$.each(response.validations,function(key,message){								
								//console.info(key+":"+message);
								$(document).find('#formEspecial').find('#'+key).addClass('is-invalid');
								$(document).find('#formEspecial').find('#'+key).closest('.form-group').append('<div class="invalid-feedback">'+message+'</div>');
							});
						}else{

						}
					},
					"error" : function(xh,err,thro){
						console.info(xh);
					}
				});

				}
				
			});

			$('.table tbody').on('click','.btn-custom-action',function(){							

				var row = $(this).closest('tr');
				var data = _table.row(row).data();
				_action = $(this).attr('data-action');				
				$.ajax({
					"url":"http://localhost/MSC_services/index.php/speciality/Api/speciality/id/"+data.idSpecialty,
					"method":"get",
					"success":function(response){
						if(response.status=="success"){
							$('#modalEspecial').modal('show');
							$.each(response.data,function(key,value){
								$('#formEspecial').find('#'+key).val(value);                                 
                                $('#'+key).append('<option value="'+value+'">'+value+'</option>');                              
							});							
							$('#formstatus').append('<input type="text" id="idSpecialty" name="idSpecialty" value="'+data.idSpecialty+'"/>');
                           
						}
					},
					"error":function(xh,err,thro){
						console.info(xh);
					}
					
				});
				switch(_action){
					case 'update':
					$(document).find('#titleModal').text('Actualizar Registro');
					$(document).find('#titleSubmit').text('Actualizar');  
                    $('#formEspecial').find('input').each(function(){
                       $(this).removeClass('empty');
                    });
                    /*$(document).find('input,select').on('change',function(){     
                        alert(1);                  
                        $('#formEspecial').each('input,select',function(){
                            alert(1);
                            $(this).removeClass('empty');
                        });
                     });*/			                
						break;

					case 'delete':
					$(document).find('#titleModal').text('Borrar Ticket');
					$(document).find('#titleSubmit').text('Borrar');
					$(document).find('#formEspecial').find('input,select,textarea').each(function(){				
						$(this).prop('disabled','disabled');						
					});
						break;

					default:

						break;

					}
			});

			$('.table tbody').on('click','.btn-custom-action2',function(){
				var row = $(this).closest('tr');
				var data = _table.row(row).data();
				_action = $(this).attr('data-action');				
				$.ajax({
					"url":"http://localhost/MSC_services/index.php/speciality/Api/speciality/id/"+data.idSpecialty,
					"method":"get",
					"success":function(response){
						if(response.status=="success"){
							$('#modalstatus').modal('show');							
							$('#formstatus').append('<input type="hidden" id="idSpecialty" name="idSpecialty" value="'+data.idSpecialty+'"/>');
							if(data.statusSpecialty == 'Active'){
								$(document).find('#nombreEspecialidad').append('<h4 id="ns">Esta seguro que desea "desactivar" la especialidad : ('+data.nameSpecialty+')</h4>');					
								$('#formstatus').append('<input type="hidden" id="statusSpecialty" name="statusSpecialty" value="Inactive"/>');								
							}else{
								$(document).find('#nombreEspecialidad').append('<h4 id="ns">Esta seguro que desea "activar" la especialidad : ('+data.nameSpecialty+')</h4>');					
								$('#formstatus').append('<input type="hidden" id="statusSpecialty" name="statusSpecialty" value="Active"/>');
							}
						}
					},
					"error":function(xh,err,thro){
						console.info(xh);
					}
					
				});
				$(document).on('submit','#formstatus',function(event){
					event.preventDefault();
					$.ajax({
					"url":"http://localhost/MSC_services/index.php/speciality/Api/specialitystatus/id/"+data.idSpecialty,
					"method":"put",
					"data" : $('#formstatus').serialize(),
					"success" : function(response){
						if (response.status=="success") {
							_table.ajax.reload();
							$('#modalstatus').modal('hide');
                            $(".modal-backdrop").remove();
						}else if(response.status=="error"){
							$.each(response.validations,function(key,message){
								//console.info(key+":"+message);								
							});
						}else{
						}
					},
					"error" : function(xh,err,thro){
						console.info(xh);
					}
				});
				});
				
			});

			$('#modalstatus').on('hidden.bs.modal',function(){
				$(document).find('#formstatus').each(function(){						
				$(document).find('#idSpecialty').remove();	
				$(document).find('#ns').remove();				
					});
				});

			
				

			$('#modalEspecial').on('hidden.bs.modal',function(){
				$(document).find('#formEspecial').find('input').each(function(){
				$(this).removeClass('is-invalid');
				$(this).closest('.form-group').find('.invalid-feedback').remove();
				$(this).val('');
				$(document).find('#idSpecialty').remove();
				_action = "new";
				$(document).find('#titleModal').text('Registrar Persona');
				$(document).find('#titleSubmit').text('Guardar');
				$(document).find('#formEspecial').find('input,select,textarea').each(function(){
			//$(document).find('#formClientes').find('input','select','textArea').each(function(){
				$(this).prop('disabled','');

					});
				});

			});
		});		

		function limpiarCampos(idForm){
			$(document).find('#'+idForm).find('input,select').each(function(){
				$(this).removeClass('is-invalid');
				$(this).closest('.form-group').find('.invalid-feedback').remove();
			});            
           
		}
            
	</script>        