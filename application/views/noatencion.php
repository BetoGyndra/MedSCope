 
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
         <div class="panel panel-success gradient01">
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

    <div class="row">
					<div class="col-11">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>#</th>
                                     <th>Fecha</th>
                                     <th>Area</th>                                     									 
                                     <th>Motivo</th>
									 <th>Inicio</th>	
                                     <th>Creacion</th>
									 <th>Status</th>
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
        
		<div id="divtoast">
				 
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
					 <div class="col-lg-6">
					 <br>
					 <div id="noatentiondivtitle"></div>	
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <label class="form-control-label" for="nameSpecialty">nameSpecialty</label>
                    <select class="form-control" id="nameSpecialty" name="nameSpecialty">
                      <option selected disabled>Seleccione</option>
                    </select>
                  </div>
                </div>
                             <br>
							 <div id="blockform" style="display: none" >
                             <div class="col-lg-12">
                             <div class="row">
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="date" class="form-control" id="fecha" name="fecha" placeholder="" />
                                 <label class="label">Fecha</label> 
                             </div>
                             </div>
                             <div class="col-md-4">
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="text" class="form-control" id="motivo" name="motivo" placeholder="" />
                                 <label class="floating-label">Motivo</label> 
                             </div>                             
                             </div>
                             <div class="col-md-4">                             
                             <div class="form-group form-material floating" data-plugin="formMaterial">                                 
                                 <input type="time" class="form-control" id="desde" name="desde" placeholder="" />
                                 <label class="label">Desde</label> 
                             </div>   

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
									 <div id="nombreNoatencion"> </div>
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

<script src="<?=base_url('resources/js/jquery.js');?>"></script>
	<script src="<?=base_url('resources/js/popper.js');?>"></script>
	<script src="<?=base_url('resources/js/bootstrap.js');?>"></script>

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
					"searching": false,                
					"info": false,        
					"lengthChange": false,
					"paging":   false,  
					"url" : "http://localhost/MSC_services/index.php/noatencion/api/noatencionV",
					"dataSrc" : "data"
                },              
				"columns" : [
					{"data" : "idNoAtention", "defaultContent" : ""},
                    {"data" : "fecha", "defaultContent" : ""},
					{"data" : "nameSpecialty", "defaultContent" : ""},
                    {"data" : "motivo", "defaultContent" : ""},
                    {"data" : "desde", "defaultContent" : ""},                    
                    {"data" : "creationdate", "defaultContent" : ""},
                    {"data" : "statusNoAtention", "defaultContent" : ""},                                                            
					{"data" : null, "defaultContent" : "<div class='btn-group'><button class='btn btn-primary btn-sm mx-2 btn-custom-action' data-action='update'  title='Actualizar'><i class='icon wb-wrench white' aria-hidden='true'></button><button class='btn btn-warning btn-sm btn-custom-action2' data-action='delete' title='Cambiar Status'><i class='icon wb-user-circle white' aria-hidden='true' ></button></div>"}
				], 
				"columnDefs" : [
					{"orderable" : false, "width" : "10%", "targets": -1}
				]
			});

            $(document).find('#nameSpecialty').each(function () {
				$.ajax({
					"url": "http://localhost/MSC_services/index.php/speciality/Api/speciality",
					"method": "get",
					"success": function (response) {
					if (response.status == "success") {
						$.each(response.data, function (key, value) {
						$('#nameSpecialty').append('<option value="'+value.idSpecialty+'">'+value.code+'-'+value.nameSpecialty+'</option>');
						});
					}
					},
					"error": function (xh, err, thro) {
					console.info(xh);
					}
				});
			});

			$(document).on('submit','#formnoatencion',function(event){
				event.preventDefault();
				limpiarCampos('formnoatencion');
				var permiteEnviar = false;
				var uri="http://localhost/MSC_services/index.php/noatencion/api/noatencion";
				var method ="get";
				switch(_action){
					case 'new':
						permiteEnviar = true;
						var uri="http://localhost/MSC_services/index.php/noatencion/api/noatencion";
						method="post";
						break;
					case 'update':
						permiteEnviar = true;
						var uri="http://localhost/MSC_services/index.php/noatencion/api/noatencion/id/"+$(document).find('#idNoAtention').val()+"/id2/"+$(document).find('#idSpecialNoAtention').val();
						method="put";
                        break;
                    case 'consulta':
						permiteEnviar = false;
						var uri="http://localhost/MSC_services/index.php/noatencion/api/noatencion/id/"+$(document).find('#idNoAtention').val();
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
					"data" : $('#formnoatencion').serialize(),
					"success" : function(response){
						if (response.status=="success") {
                            var mensaje = response.message;														
						$(document).find('#divtoast').append('<div class="toast"style="display:none"id="toastersuccess"name="toastersuccess"data-message="'+mensaje+'"aria-live="polite"data-plugin="toastr"data-container-id="toast-top-right"data-position-class="toast-top-right"data-icon-class="toast-just-text toast-success toast-shadow"role="alert"><div class="toast toast-just-text toast-shadow toast-success"><button type="button"class="toast-close-button"aria-label="Close"><span aria-hidden="true">×</span></button><div class="toast-message"></div></div></div>');
						$('#toastersuccess').click();	
							_table.ajax.reload();
							$('#modalnoatencion').modal('hide');
                            $(".modal-backdrop").remove();
						}else if(response.status=="error"){
							$.each(response.validations,function(key,message){
								//console.info(key+":"+message);
								$(document).find('#formnoatencion').find('#'+key).addClass('is-invalid');
								$(document).find('#formnoatencion').find('#'+key).closest('.form-group').append('<div class="invalid-feedback">'+message+'</div>');
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
					"url":"http://localhost/MSC_services/index.php/noatencion/api/noatencionV/id/"+data.idNoAtention,
					"method":"get",
					"success":function(response){
						if(response.status=="success"){
							$('#modalnoatencion').modal('show');
							$.each(response.data,function(key,value){
								$('#formnoatencion').find('#'+key).val(value);                                 
                                $('#'+key).append('<option value="'+value+'">'+value+'</option>');                              
							});
							$('#formnoatencion').append('<input type="hidden"id="idNoAtention"name="id"value="'+data.idNoAtention+'"/>');
							$('#formnoatencion').append('<input type="hidden"id="idSpecialNoAtention"name="id2"value="'+data.idSpecialNoAtention+'"/>');
							$('#noatentiondivtitle').append('<h5 class="color7"id="removethistitle">Especialidad seleccionada: '+data.code+'-'+data.nameSpecialty+'</h5>');     
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
                    $('#formnoatencion').find('input').each(function(){
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

			$('#modalnoatencion').on('hidden.bs.modal',function(){
				$(document).find('#formnoatencion').find('input').each(function(){
				$(this).removeClass('is-invalid');
				$(this).closest('.form-group').find('.invalid-feedback').remove();
				$(this).val('');
				$(document).find('#idNoAtention').remove();
				$(document).find('#idSpecialNoAtention').remove();
				$(document).find('#removethistitle').remove();											
				_action = "new";
				$(document).find('#titleModal').text('Registrar Fecha');
				$(document).find('#titleSubmit').text('Guardar');
				$(document).find('#formnoatencion').find('input,select').each(function(){
			//$(document).find('#formClientes').find('input','select','textArea').each(function(){
				$(this).prop('disabled','');

					});
				});

			});

			$('.table tbody').on('click','.btn-custom-action2',function(){
				var row = $(this).closest('tr');
				var data = _table.row(row).data();
				_action = $(this).attr('data-action');				
				$.ajax({
					"url":"http://localhost/MSC_services/index.php/noatencion/api/noatencionV/id/"+data.idNoAtention,
					"method":"get",
					"success":function(response){
						if(response.status=="success"){
							$('#modalstatus').modal('show');							
							$('#formstatus').append('<input type="hidden" id="idNoAtention" name="idNoAtention" value="'+data.idNoAtention+'"/>');
							if(data.statusNoAtention == 'Active'){
								$(document).find('#nombreNoatencion').append('<h4 id="ns">Esta seguro que desea "desactivar" esta fecha para : ('+data.code+'-'+data.nameSpecialty+')</h4>');					
								$('#formstatus').append('<input type="hidden" id="statusNoAtention" name="statusNoAtention" value="Inactive"/>');								
							}else{
								$(document).find('#nombreNoatencion').append('<h4 id="ns">Esta seguro que desea "activar" esta fecha : ('+data.code+'-'+data.nameSpecialty+')</h4>');					
								$('#formstatus').append('<input type="hidden" id="statusNoAtention" name="statusNoAtention" value="Active"/>');
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
           			 "url":"http://localhost/MSC_services/index.php/noatencion/api/noatencionstatus/id/"+$(document).find('#idNoAtention').val(),
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
				$(document).find('#idNoAtention').remove();
				$(document).find('#statusNoAtention').remove();
				$(document).find('#ns').remove();				
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
        
		$('#nameSpecialty option').each(function() {
    	if($(this).is(':selected')){        
         document.getElementById("blockform").style.display = 'block';                               
            }
		});		
          
	</script>