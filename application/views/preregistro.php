 <!-- Page -->
 <div class="page">
     <div class="page-content">
         <div class="panel panel-success gradient01">
         <div class="panel-heading">
            <h3 class="panel-title">Pre-Registro Pacientes</h3>
            </div>
            <br>
             <div class="panel-body">
                 <!-- inicia card body-->
                 <div class="row">
                     <div class="col-12">
                         
                         <button class="btn btn-primary float-right"  data-toggle="modal"
                             data-target="#modalpreregistro"><i class="icon  wb-user-add white" aria-hidden="true"></i>Nuevo</button>
                     </div>
                 </div>
                 
				<div id="divtoast">
				 
                 </div>
                 <div class="row my-3">
                     <div class="col-12">
                         <table class="table table-striped table-bordered" id="table" >
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Nombre</th>
                                     <th>Apellido</th>                                                                         
                                     <th>Correo</th>          
                                     <th>Telefono</th>                                                                          
                                     <th>preregistro</th>
                                     <th>Status</th>                             
                                     <th>Info</th>
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
 
 <div class="modal fade" tabindex="-1" role="dialog" id="modalpreregistro">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="titleModal">Pre-Registro Paciente</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>            
             <div class="col-lg-12">
             <form autocomplete="off" id="formpreregistro">
             <div class="row">                              
                     <div class="col-md-3">
                         <!-- Panel Static Labels -->                         
                         <div class="panel panel-info">
                             <div class="panel-heading">
                                 <h3 class="panel-title">Informacion usuario</h3>
                                 <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                             </div>
                             <div class="panel-body container-fluid border">
                                 
                                     <br>
                                     <div class="form-group form-material floating" data-plugin="formMaterial">        <input type="email" class="form-control" id="emailUser" name="emailUser"
                                             placeholder="" />
                                     <label class="floating-label">Email</label>
                                     </div>                                     

                                     <div class="form-group form-material floating" data-plugin="formMaterial">                              
                                         <input type="password" class="form-control" id="passUser" name="passUser"
                                             placeholder="" />
                                             <label class="floating-label">Password</label>
                                     </div>
                                     <div class="form-group form-material floating" data-plugin="formMaterial">
                                         <input type="password" class="form-control" id="RpassUser" name="RpassUser"
                                             placeholder="" />
                                             <label class="floating-label">Repetir Password</label>
                                     </div>
                                     <div class="form-group form-material floating" data-plugin="formMaterial">
                                         <input type="hidden" class="form-control" id="typeUser" name="typeUser" value="Patient"/>                                             
                                     </div>                                                                                                          
                             </div>
                         </div>
                     </div>
                     <!-- End Panel Static Labels -->
                     <!-- Panel Static Labels -->
                     <div class="col-md-5">
                         <div class="panel panel-success">                         
                             <div class="panel-heading">                             
                                 <h3 class="panel-title">Informacion Personal</h3>    
                             </div>
                             <div class="panel-body container-fluid border">                             
                                 <br>
                                 
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="form-material floating row" data-plugin="formMaterial">                                              
                                                 <div class="col-md-6 form-group">                                                  
                                                     <input type="text" class="form-control" id="namePerson"
                                                         name="namePerson" placeholder="" />
                                                    <label class="floating-label">Nombre</label>    
                                                 </div>
                                                 
                                                 <div class="col-md-6 form-group">  
                                                     <input type="text" class="form-control" id="lastnamePerson"
                                                         name="lastnamePerson" placeholder="" />
                                                         <label class="floating-label">Apellido</label> 
                                                 </div>
                                             </div>
                                             <div class="form-material floating row" data-plugin="formMaterial">
                                                 <div class="col-md-6 form-group"> 
                                                     <input type="text" class="form-control" id="phonePerson"
                                                         name="phonePerson" placeholder="" />
                                                         <label class="floating-label">Telefono</label> 
                                                 </div>
                                                 <div class="col-md-6 form-group">
                                                     <label class="form-control-label" for="Birtdate">Nacimiento</label>
                                                     <input type="date" class="form-control" id="birtdate"
                                                         name="birtdate" placeholder="" />
                                                 </div>
                                             </div>
                                             <div class="form-material floating row" data-plugin="formMaterial">
                                                 <div class="col-md-6 form-group">
                                                     <input type="text" class="form-control" id="age"
                                                         name="age" placeholder="" />
                                                         <label class="floating-label">Edad</label> 
                                                 </div>
                                                 <div class="col-md-6 form-group">
                                                     <label class="form-control-label" for="Genero">Genero</label>
                                                     <select class="form-control" id="genre" name="genre" id="name="genre"">
                                                         <option selected disabled>Seleccione</option>
                                                         <option value="Male">Masculino</option>
                                                         <option value="Female">Femenino</option>
                                                     </select>

                                                 </div>
                                             </div>
                                             <div class="form-material floating row" data-plugin="formMaterial">
                                                 <div class="col-md-6 form-group">
                                                     <input type="text" class="form-control" id="CURP" name="CURP"
                                                         placeholder="" />
                                                         <label class="floating-label">CURP</label> 
                                                 </div>
                                                 <div class="col-md-6 form-group">
                                                     <label class="form-control-label" for="EstadoCivil">Estado
                                                         Civil</label>
                                                     <select class="form-control" id="civilStatus" name="civilStatus">
                                                         <option selected disabled>Seleccione</option>
                                                         <option value="Married">Casado</option>
                                                         <option value="Single">Soltero</option>
                                                         <option value="Divorced">Divorciado</option>
                                                         <option value="widowed">Viudo</option>
                                                     </select>
                                                 </div>
                                             </div>                                            
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- End Panel Static Labels -->
             <!-- Panel Static Labels -->
             <div class="col-md-4">
                 <div class="panel panel-warning">
                     <div class="panel-heading">
                         <h3 class="panel-title">Domicilio usuario</h3>
                     </div>
                     <div class="panel-body container-fluid border">
                         
                             <br>
                             <div class="form-group form-material floating" data-plugin="formMaterial">
                                 
                                 <input type="text" class="form-control" id="street" name="street" placeholder="" />
                                 <label class="floating-label">Calle</label> 
                             </div>

                              <div class="form-group form-material floating" data-plugin="formMaterial">
                                 
                                 <input type="text" class="form-control" id="neighborhood" name="neighborhood" placeholder="" />
                                 <label class="floating-label">Colonia</label> 
                             </div>                                
 
                             <div class="form-group form-material floating row" data-plugin="formMaterial">
                                 <div class="col-md-6 form-group">                                     
                                     <input type="text" class="form-control" id="numberInt" name="numberInt"
                                         placeholder="" />
                                    <label class="floating-label">Numero Interior</label> 
                                 </div>
                                 <div class="col-md-6 form-group">
                                     <input type="text" class="form-control" id="numberExt" name="numberExt"
                                         placeholder="" />
                                         <label class="floating-label">Numero Exterior</label> 
                                 </div>
                             </div>
                             <div class="form-group form-material floating" data-plugin="formMaterial">
                                 <input type="text" class="form-control" id="state" name="state" placeholder="" />
                                 <label class="floating-label">Estado</label>
                             </div>                             
                             <div class="form-group form-material floating" data-plugin="formMaterial">
                                 <input type="text" class="form-control" id="townShip" name="townShip"
                                     placeholder="" />
                                     <label class="floating-label">Municipio</label>
                             </div>
                             <div class="form-material floating row" data-plugin="formMaterial">
                                 <div class="col-md-6 form-group">                                     
                                     <input type="text" class="form-control" id="postalCode" name="postalCode"
                                         placeholder="" />
                                         <label class="floating-label">Codigo Postal</label>
                                 </div>
                                 <div class="col-md-6">
                                 </div>
                             </div>
                     </div>
                     
                 </div>
             </div>             
         </div>
         <!-- End Panel Static Labels -->                                              
     </div>     
     <div class="modal-footer">
        <button type="button"  data-dismiss="modal" class="btn btn-warning">Cancel</button>
        <button type="submit" class="btn btn-success">Save</button>         
        </form>
     </div>

 </div>
 </div>
 </div>


 <div class="modal fade" tabindex="-1" role="dialog" id="modaldatosmedicos">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="titleModal">Datos Medicos</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>            
             <div class="col-lg-12">
             <form autocomplete="off" id="formdatosmedicos">
                                        
         
                 <div class="panel panel-dark ">
                     <div class="panel-heading">
                         <h3 class="panel-title">Datos Medicos</h3>
                     </div>
                     <div class="panel-body container-fluid border">
                         
                             <br>
                             <div class="col-lg-12">
                             <div class="row">
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="text" class="form-control" id="weight" name="weight" placeholder="" />
                                 <label class="floating-label">Peso</label> 
                             </div>
                             </div>
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="text" class="form-control" id="height" name="height" placeholder="" />
                                 <label class="floating-label">Altura</label> 
                             </div>                             
                             </div>
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="text" class="form-control" id="temperature" name="temperature" placeholder="" />
                                 <label class="floating-label">Temperatura</label> 
                             </div>                                                         
                             </div> 
                             </div> 
                             </div> 
                             <div class="col-lg-12">
                             <div class="row">
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="text" class="form-control" id="bloodPressure" name="bloodPressure" placeholder="" />
                                 <label class="floating-label">Presion Sanguinea</label> 
                             </div>
                             </div>
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="text" class="form-control" id="respiratoryRate" name="respiratoryRate" placeholder="" />
                                 <label class="floating-label">Frecuencia Respiratoria</label> 
                             </div>                             
                             </div>
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="text" class="form-control" id="pulseRate" name="pulseRate" placeholder="" />
                                 <label class="floating-label">Pulso</label> 
                             </div>                                                         
                             </div>
                            </div>

                        <hr>
                         <br>
                         <h4>Datos previos</h4>
                            <table class="table table-striped table-bordered" id="table2">
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Peso</th>
                                     <th>Altura</th>                                                                         
                                     <th>Temperatura</th>          
                                     <th>Presion Sanguinea</th>                        
                                     <th>Frec. Respiratoria</th>
                                     <th>Pulso</th>                             
                                     <th>Fecha</th>                                     
                                 </tr>
                             </thead>
                             <tbody>                                                                
                             </tbody>
                         </table>     

                             </div>                                                   
                        </div>                        
                 </div>
            
        
     </div>     
     <div class="modal-footer">
        <button type="button"  data-dismiss="modal" class="btn btn-warning">Cancel</button>
        <button type="submit" class="btn btn-success" id="btnsave" style="display: block">Save</button>         
        </form>
     </div>
 </div>
 </div>
 </div>

 <div class="modal fade" tabindex="-1" role="dialog" id="modalinfo">
     <div class="modal-dialog modal-md" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title" id="titleModal">Informacion usuario</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>            
             <div class="col-lg-12">             
                                                           
                         <!-- Panel Static Labels -->                         
                         <div class="panel panel-info">
                             <div class="panel-heading">
                                 <h3 class="panel-title">Datos Completos</h3>
                                 <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                             </div>
                             <div class="panel-body container-fluid border" id="datos">                                                          

                             </div>
                         </div>    
                                                                               
        
     </div>     
     <div class="modal-footer">
        <button type="button"  data-dismiss="modal" class="btn btn-warning">Cancel</button>
               
        
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
									 <div id="nombrePerson"> </div>
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
			var _action = "new";//new,uptdate,read,delete
			let _table =$('#table').DataTable({
                "info": false, 
				"ajax" : {
					"url" : "http://localhost/MSC_services/index.php/preregistro/api/preregistroV",
					"dataSrc" : "data"
                },              
				"columns" : [
					{"data" : "idPerson", "defaultContent" : ""},
                    {"data" : "namePerson", "defaultContent" : ""},
                    {"data" : "lastnamePerson", "defaultContent" : ""},                                      
                    {"data" : "emailUser", "defaultContent" : ""},
                    {"data" : "phonePerson", "defaultContent" : ""},                                         
                    {"data" : "creationDatePerson", "defaultContent" : ""},
                    {"data" : "statusPerson", "defaultContent" : ""},
                    {"data" : null, "defaultContent" : "<div class='btn-group'><button class='btn btn-info btn-sm btn-custom-action4' data-action='consulta'title='Mas datos'><i class='icon  wb-order white' aria-hidden='true'></button><button class='btn btn-success btn-sm btn-custom-action5'data-action='datosM'title='Datos Clinicos'><i class='icon wb-add-file white'aria-hidden='true'></button></div>"},
					{"data" : null, "defaultContent" : "<div class='btn-group'><button class='btn btn-primary btn-sm mx-2 btn-custom-action' data-action='update'  title='Actualizar'><i class='icon wb-wrench white' aria-hidden='true'></button><button class='btn btn-warning btn-sm btn-custom-action2' data-action='status' title='Cambiar Status'><i class='icon wb-user-circle white' aria-hidden='true'></button></div>"}
				], 
				"columnDefs" : [
					{"orderable" : false, "width" : "10%", "targets": -1}
				]
			});

           

			$(document).on('submit','#formpreregistro',function(event){
				event.preventDefault();
				limpiarCampos('formpreregistro');
				var permiteEnviar = false;
				var uri="http://localhost/MSC_services/index.php/preregistro/api/preregistroV";
				var method ="get";
				switch(_action){
					case 'new':
						permiteEnviar = true;
						var uri="http://localhost/MSC_services/index.php/preregistro/api/preregistro";
						method="post";
						break;
					case 'update':
						permiteEnviar = true;
						var uri="http://localhost/MSC_services/index.php/preregistro/Api2/preregistro/id/"+$(document).find('#idPerson').val()+"/id1/"+$(document).find('#idUser').val()+"/id2/"+$(document).find('#idAddress').val()+"/id3/"+$(document).find('#idPatient').val();
						method="put";
                        break;
                    case 'consulta':
						permiteEnviar = false;
						var uri="http://localhost/MSC_services/index.php/preregistro/api/preregistroV/id/"+$(document).find('#idPerson').val();
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
					"data" : $('#formpreregistro').serialize(),
					"success" : function(response){
						if (response.status=="success") {
                            var mensaje = response.message;														
						$(document).find('#divtoast').append('<div class="toast"style="display:none"id="toastersuccess"name="toastersuccess"data-message="'+mensaje+'"aria-live="polite"data-plugin="toastr"data-container-id="toast-top-right"data-position-class="toast-top-right"data-icon-class="toast-just-text toast-success toast-shadow"role="alert"><div class="toast toast-just-text toast-shadow toast-success"><button type="button"class="toast-close-button"aria-label="Close"><span aria-hidden="true">×</span></button><div class="toast-message"></div></div></div>');
						$('#toastersuccess').click();	
							_table.ajax.reload();
							$('#modalpreregistro').modal('hide');
                            $(".modal-backdrop").remove();
						}else if(response.status=="error"){
							$.each(response.validations,function(key,message){
								//console.info(key+":"+message);
								$(document).find('#formpreregistro').find('#'+key).addClass('is-invalid');
								$(document).find('#formpreregistro').find('#'+key).closest('.form-group').append('<div class="invalid-feedback">'+message+'</div>');
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

			$('#table tbody').on('click','.btn-custom-action',function(){
				var row = $(this).closest('tr');
				var data = _table.row(row).data();
				_action = $(this).attr('data-action');				
				$.ajax({
					"url":"http://localhost/MSC_services/index.php/preregistro/api/preregistroV/id/"+data.idPerson,
					"method":"get",
					"success":function(response){
						if(response.status=="success"){
							$('#modalpreregistro').modal('show');
							$.each(response.data,function(key,value){
								$('#formpreregistro').find('#'+key).val(value);                                 
                                $('#'+key).append('<option value="'+value+'">'+value+'</option>');                              
							});
							$('#formpreregistro').append('<input type="hidden" id="idPerson" value="'+data.idPerson+'"/>');
                            $('#formpreregistro').append('<input type="hidden" id="idUser" value="'+data.idUser+'"/>');
                            $('#formpreregistro').append('<input type="hidden" id="idAddress" value="'+data.idAddress+'"/>');
                            $('#formpreregistro').append('<input type="hidden" id="idPatient" value="'+data.idPatient+'"/>');
                                                       
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
                    $('#formpreregistro').find('input').each(function(){
                       $(this).removeClass('empty');
                    });                    		                
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

            $('#table tbody').on('click','.btn-custom-action4',function(){
				var row = $(this).closest('tr');
				var data = _table.row(row).data();
				_action = $(this).attr('data-action');				
				$.ajax({
					"url":"http://localhost/MSC_services/index.php/preregistro/api/preregistroV/id/"+data.idPerson,
					"method":"get",
					"success":function(response){
						if(response.status=="success"){
							$('#modalinfo').modal('show');
                            $(document).find('#datos').append('<div id="datosappend"><br><h5>Datos Personales</h5><br><label>Nombre: '+data.namePerson+' '+data.lastnamePerson+'</label><br><label>Genero: '+data.genre+'</label><br></label><label>Fecha de Nacimiento: '+data.birtdate+'</label><br><label>Curp: '+data.CURP+'</label><br><label>Estado Civil: '+data.civilStatus+'</label><br><label>Telefono: '+data.phonePerson+'</label><h5>Datos Usuario</h5><br><label>Correo: '+data.emailUser+'</label><br><label>Tipo Usuario: '+data.typeUser+'</label><br><label>Status: '+data.statusPerson+'</label><h5>Dirección</h5><br><label>Calle: '+data.street+'</label><br><label>Numero Interior: '+data.numberInt+'</label><br><label>Numero Exterior: '+data.numberExt+'</label><br><label>Colonia: '+data.neighborhood+'</label><br><label>Codigo Postal: '+data.postalCode+'</label><br><label>Estado: '+data.state+'</label><br><label>Municipio: '+data.townShip+'</label><br><label>Fecha De preregistro: '+data.creationDatePerson+'</label><br><label>Ultima Modificación: '+data.lastModPerson+'</label></div>');						
						}
					},
					"error":function(xh,err,thro){
						console.info(xh);
					}
					
				});
				
			});

            $('#modalinfo').on('hidden.bs.modal',function(){
				$(document).find('#datos').each(function(){				
				$(document).find('#datosappend').remove();				
					});
				});

			


			$('#modalpreregistro').on('hidden.bs.modal',function(){
				$(document).find('#formpreregistro').find('input').each(function(){
				$(this).removeClass('is-invalid');
				$(this).closest('.form-group').find('.invalid-feedback').remove();
				$(this).val('');
				$(document).find('#idPerson').remove();
                $(document).find('#idUser').remove();
                $(document).find('#idAddress').remove();
                $(document).find('#idPatient').remove();
				_action = "new";
				$(document).find('#titleModal').text('Registrar Persona');
				$(document).find('#titleSubmit').text('Guardar');
				$(document).find('#formpreregistro').find('input,select').each(function(){
			//$(document).find('#formClientes').find('input','select','textArea').each(function(){
				$(this).prop('disabled','');

					});
				});

			});



            $('#table tbody').on('click','.btn-custom-action2',function(){
				var row = $(this).closest('tr');
				var data = _table.row(row).data();
				_action = $(this).attr('data-action');				
				$.ajax({
					"url":"http://localhost/MSC_services/index.php/preregistro/api/preregistroV/id/"+data.idPerson,
					"method":"get",
					"success":function(response){
						if(response.status=="success"){
							$('#modalstatus').modal('show');							
							$('#formstatus').append('<input type="hidden" id="idPerson" name="idPerson" value="'+data.idPerson+'"/>');
							if(data.statusPerson == 'Active'){
								$(document).find('#nombrePerson').append('<h4 id="ns">Esta seguro que desea "desactivar" a este paciente : '+data.namePerson+' '+data.lastnamePerson+'</h4>');					
								$('#formstatus').append('<input type="hidden" id="statusPerson" name="statusPerson" value="Inactive"/>');								
							}else{
								$(document).find('#nombrePerson').append('<h4 id="ns">Esta seguro que desea "activar" a este paciente: '+data.namePerson+' '+data.lastnamePerson+'</h4>');					
								$('#formstatus').append('<input type="hidden" id="statusPerson" name="statusPerson" value="Active"/>');
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
                        "url":"http://localhost/MSC_services/index.php/preregistro/api/preregistrostatus/id/"+$(document).find('#idPerson').val(),
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
				$(document).find('#idPerson').remove();
				$(document).find('#statusPerson').remove();
				$(document).find('#ns').remove();				
					});
				});



                $('#table tbody').on('click','.btn-custom-action5',function(){
				var row = $(this).closest('tr');
				var data = _table.row(row).data();											       
                $('#modaldatosmedicos').modal('show');
                $('#formdatosmedicos').append('<input type="hidden" id="idPatient" name="idPatient" value="'+data.idPatient+'"/>');                                
                 let _table2 =$('#table2').DataTable({ 
                        "info": false, 
                        "destroy" : true,
                        "scrollY": "200px",                       
                        "scrollCollapse": true,
                        "paging": false,  
                        "cache": false,            
                        "ajax" : {   
                        "url": 'http://localhost/MSC_services/index.php/preregistro/api/preregistroDMV',
                        
                        "fnServerParams": function(d) {
                            d = "/id/"+data.idPerson
                        }                               
                        },                            
                        "data" : "data",                               
                        "columns" : [
                        {"data" : "idClinicHistory", "defaultContent" : ""},
                        {"data" : "weight", "defaultContent" : ""},
                        {"data" : "height", "defaultContent" : ""},                                      
                        {"data" : "temperature", "defaultContent" : ""},
                        {"data" : "bloodPressure", "defaultContent" : ""},                                         
                        {"data" : "respiratoryRate", "defaultContent" : ""},
                        {"data" : "pulseRate", "defaultContent" : ""},
                        {"data" : "creationDate", "defaultContent" : ""}
                    ], 
                    "columnDefs" : [
                        {"orderable" : false, "width" : "10%", "targets": -1}
                    ]
                });
                                                        

				$(document).on('submit','#formdatosmedicos',function(event){
                    limpiarCampos('formdatosmedicos');
					event.preventDefault();
					$.ajax({
                        "url":"http://localhost/MSC_services/index.php/preregistro/Api2/preregistroDM",
					"method":"post",
					"data" : $('#formdatosmedicos').serialize(),
					"success" : function(response){
						if (response.status=="success") {
                            var mensaje = response.message;	
                            $(document).find('#divtoast').append('<div class="toast"style="display:none"id="toastersuccess"name="toastersuccess"data-message="'+mensaje+'"aria-live="polite"data-plugin="toastr"data-container-id="toast-top-right"data-position-class="toast-top-right"data-icon-class="toast-just-text toast-success toast-shadow"role="alert"><div class="toast toast-just-text toast-shadow toast-success"><button type="button"class="toast-close-button"aria-label="Close"><span aria-hidden="true">×</span></button><div class="toast-message"></div></div></div>');
						$('#toastersuccess').click();
                        document.getElementById("btnsave").style.display = 'none'; 
                        
							_table2.ajax.reload();							
						}else if(response.status=="error"){
							$.each(response.validations,function(key,message){								
								$(document).find('#formdatosmedicos').find('#'+key).addClass('is-invalid');
								$(document).find('#formdatosmedicos').find('#'+key).closest('.form-group').append('<div class="invalid-feedback">'+message+'</div>');
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
               				  
				  $('#modaldatosmedicos').on('hidden.bs.modal',function(){
				$(document).find('#formdatosmedicos').each(function(){                 		
				$(document).find('#idPatient').remove();
                document.getElementById("btnsave").style.display = 'block';                 						
					});
                $(document).find('#formdatosmedicos').find('input').each(function(){
				$(this).removeClass('is-invalid');
				$(this).closest('.form-group').find('.invalid-feedback').remove();
				$(this).val('');								
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