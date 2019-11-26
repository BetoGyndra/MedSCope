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



<script type="text/javascript">
		$(function() {
			var _action = "new";//new,uptdate,read,delete
			let _table =$('.table').DataTable({
				"ajax" : {
					"url" : "http://localhost/MSC_services/index.php/noatencion/api/noatencion",
					"dataSrc" : "data"
                },              
				"columns" : [
					{"data" : "idNo", "defaultContent" : ""},
                    {"data" : "namePerson", "defaultContent" : ""},
                    {"data" : "lastnamePerson", "defaultContent" : ""},
                    {"data" : "genre", "defaultContent" : ""},                    
                    {"data" : "emailUser", "defaultContent" : ""},
                    {"data" : "phonePerson", "defaultContent" : ""},
                    {"data" : "typeUser", "defaultContent" : ""},
                    {"data" : "creationDatePerson", "defaultContent" : ""},
                    {"data" : "lastModPerson", "defaultContent" : ""},
                    {"data" : null, "defaultContent" : "<button class='btn btn-info btn-sm mx-2 btn-custom-action' data-action='consulta' title='Mas datos'><i class='icon  wb-order white' aria-hidden='true'></button>"},
					{"data" : null, "defaultContent" : "<div class='btn-group'><button class='btn btn-primary btn-sm mx-2 btn-custom-action' data-action='update'  title='Actualizar'><i class='icon wb-wrench white' aria-hidden='true'></button><button class='btn btn-warning btn-sm btn-custom-action' data-action='delete' title='Cambiar Status'><i class='icon wb-user-circle white' aria-hidden='true' ></button></div>"}
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

			$(document).on('submit','#formAlta',function(event){
				event.preventDefault();
				limpiarCampos('formAlta');
				var permiteEnviar = false;
				var uri="http://localhost/MSC_services/index.php/Alta/api/altaV";
				var method ="get";
				switch(_action){
					case 'new':
						permiteEnviar = true;
						var uri="http://localhost/MSC_services/index.php/Alta/api/alta";
						method="post";
						break;
					case 'update':
						permiteEnviar = true;
						var uri="http://localhost/MSC_services/index.php/Alta/api/altaV/id/"+$(document).find('#idPerson').val();
						method="put";
                        break;
                    case 'consulta':
						permiteEnviar = false;
						var uri="http://localhost/MSC_services/index.php/Alta/api/altaV/id/"+$(document).find('#idPerson').val();
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
					"data" : $('#formAlta').serialize(),
					"success" : function(response){
						if (response.status=="success") {
                            var mensaje = response.message;														
						$(document).find('#divtoast').append('<div class="toast"style="display:none"id="toastersuccess"name="toastersuccess"data-message="'+mensaje+'"aria-live="polite"data-plugin="toastr"data-container-id="toast-top-right"data-position-class="toast-top-right"data-icon-class="toast-just-text toast-success toast-shadow"role="alert"><div class="toast toast-just-text toast-shadow toast-success"><button type="button"class="toast-close-button"aria-label="Close"><span aria-hidden="true">×</span></button><div class="toast-message"></div></div></div>');
						$('#toastersuccess').click();	
							_table.ajax.reload();
							$('#modalAlta').modal('hide');
                            $(".modal-backdrop").remove();
						}else if(response.status=="error"){
							$.each(response.validations,function(key,message){
								//console.info(key+":"+message);
								$(document).find('#formAlta').find('#'+key).addClass('is-invalid');
								$(document).find('#formAlta').find('#'+key).closest('.form-group').append('<div class="invalid-feedback">'+message+'</div>');
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
					"url":"http://localhost/MSC_services/index.php/Alta/api/alta/id/"+data.idPerson,
					"method":"get",
					"success":function(response){
						if(response.status=="success"){
							$('#modalAlta').modal('show');
							$.each(response.data,function(key,value){
								$('#formAlta').find('#'+key).val(value);                                 
                                $('#'+key).append('<option value="'+value+'">'+value+'</option>');                              
							});
							$('#formAlta').append('<input type="hidden" id="idPerson" value="'+data.idPerson+'"/>');
                                                       
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
                    $('#formAlta').find('input').each(function(){
                       $(this).removeClass('empty');
                    });
                    /*$(document).find('input,select').on('change',function(){     
                        alert(1);                  
                        $('#formAlta').each('input,select',function(){
                            alert(1);
                            $(this).removeClass('empty');
                        });
                     });*/			                
						break;

					case 'delete':
					$(document).find('#titleModal').text('Borrar Ticket');
					$(document).find('#titleSubmit').text('Borrar');
					$(document).find('#formTickets').find('input,select').each(function(){				
						$(this).prop('disabled','disabled');						
					});
						break;

					default:

						break;

					}
			});

			$('#modalAlta').on('hidden.bs.modal',function(){
				$(document).find('#formAlta').find('input').each(function(){
				$(this).removeClass('is-invalid');
				$(this).closest('.form-group').find('.invalid-feedback').remove();
				$(this).val('');
				$(document).find('#id').remove();
				_action = "new";
				$(document).find('#titleModal').text('Registrar Persona');
				$(document).find('#titleSubmit').text('Guardar');
				$(document).find('#formAlta').find('input,select').each(function(){
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
        //codigo para hacer dinamico el combo box dependiendo el tipo de usuario;
        var choice_combo = document.getElementById('typeUser');
        choice_combo.onchange = function() {
            switch (this.value) {
            case 'Medic':
                document.getElementById("medicinput").style.display = 'block';                
                break;
            case 'Receptionist':
            document.getElementById("medicinput").style.display = 'none';                
            break;
            case 'Collection':
            document.getElementById("medicinput").style.display = 'none';                
            break;           
            default:
                document.getElementById("medicinput").style.display = 'none';
            }
        }      
	</script>