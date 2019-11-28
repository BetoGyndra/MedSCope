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
    <div class="panel panel-warning gradient01">
      <div class="panel-heading">
        <h3 class="panel-title">Configuracion de horarios</h3>
      </div>
      <br>
      <div class="panel-body">
        <!-- Site Action -->

        <div class="row">
          <div class="col-12">

            <button class="btn btn-success float-right" data-toggle="modal" data-target="#modalhorarios"><i
                class="icon  wb-calendar white" aria-hidden="true"></i>Nuevo</button>
          </div>
        </div>
        <!-- End Site Action -->

        <div id="divtoast">

        </div>
      </div>


      <div class="row my-3">
        <div class="col-12">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Empleado</th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sabado</th>
                <th>Domingo</th>
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


<div class="modal fade" tabindex="-1" role="dialog" id="modalhorarios">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="titleModal">Horarios</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="col-lg-12">
        <form autocomplete="off" id="formhorarios">
          <!-- End Panel Static Labels -->
          <div class="panel panel-success ">
            <div class="panel-heading">
              <h3 class="panel-title">Configurar</h3>
            </div>
            <div class="panel-body container-fluid border">
              <div id="formschedule">
              <div id="formhorariosappend"></div>
                <br>
                <div class="col-lg-6">
                  <div class="form-group form-material floating" data-plugin="formMaterial">
                    <label class="form-control-label" for="Empleado">Empleado</label>
                    <select class="form-control" id="Empleado" name="Empleado">
                      <option selected disabled>Seleccione</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="row">
                  </div>

                  <div id="rangos" style="display: none;">
                  <div class="col-lg-12">
                  <div class="row">                  

                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="lunescheck" name="lunescheck" checked>
                      <label class="form-check-label color1" for="Lunes">Lunes</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes0" name="lunes" placeholder="" />                   
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes1" name="lunes1" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>                    
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="martescheck" checked>
                      <label class="form-check-label color2" for="Martes">Martes</label>

                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="martes0" name="martes" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="martes1" name="martes1" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="miercolescheck" checked>
                      <label class="form-check-label color3" for="Miercoles">Miercoles</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="miercoles0" name="miercoles" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="miercoles1" name="miercoles1" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>                    
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="juevescheck" checked>
                      <label class="form-check-label color4" for="Jueves">Jueves</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="jueves0" name="jueves" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="jueves1" name="jueves1" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="viernescheck" checked>
                      <label class="form-check-label color5" for="viernes">Viernes</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="viernes0" name="viernes" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="viernes1" name="viernes1" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>            
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="sabadocheck" checked>
                      <label class="form-check-label color6" for="sabado">Sabado</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="sabado0" name="sabado" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="sabado1" name="sabado1" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="domingocheck" checked>
                      <label class="form-check-label color7" for="domingo">Domingo</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="domingo0" name="domingo" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="domingo1" name="domingo1" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>
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
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="modalupdatehorarios">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Actualizar Horarios</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="col-lg-12">
        <form autocomplete="off" id="formupdatehorarios">
          <!-- End Panel Static Labels -->
          <div class="panel panel-success ">
            <div class="panel-heading">              
              <div id="empleadodivtitle"></div>
            </div>
            <div class="panel-body container-fluid border">
              <div id="formscheduleupdate">
                  <br>
                <div class="col-lg-12">
                  <div class="row">                  
                  
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="lunescheckupdate" name="lunescheckupdate" checked>
                      <label class="form-check-label color1" for="Lunes">Lunes</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes2" name="lunes2" placeholder=""/>
                   
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes3" name="lunes3" placeholder=""/>
                        <label class="label">Salida</label>
                      </div>
                    </div>                    
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="martescheckupdate" checked>
                      <label class="form-check-label color2" for="Martes">Martes</label>

                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="martes2" name="martes2" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="martes3" name="martes3" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="miercolescheckupdate" checked>
                      <label class="form-check-label color3" for="Miercoles">Miercoles</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="miercoles2" name="miercoles2" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="miercoles3" name="miercoles3" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>                    
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="juevescheckupdate" checked>
                      <label class="form-check-label color4" for="Jueves">Jueves</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="jueves2" name="jueves2" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="jueves3" name="jueves3" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="viernescheckupdate" checked>
                      <label class="form-check-label color5" for="viernes">Viernes</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="viernes2" name="viernes2" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="viernes3" name="viernes3" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>            
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="sabadocheckupdate" checked>
                      <label class="form-check-label color6" for="sabado">Sabado</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="sabado2" name="sabado2" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="sabado3" name="sabado3" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="domingocheckupdate" checked>
                      <label class="form-check-label color7" for="domingo">Domingo</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="domingo2" name="domingo2" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="domingo3" name="domingo3" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
      </div> 
      <div id="formupdatehorariosappend"></div>     
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button>
        <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?=base_url('resources/js/jquery.js');?>"></script>
	<script src="<?=base_url('resources/js/popper.js');?>"></script>
	<script src="<?=base_url('resources/js/bootstrap.js');?>"></script>
	
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


<script type="text/javascript">
//$('.clockpicker').clockpicker();
$(function() {
			var _action = "new";//new,uptdate,read,delete
			let _table =$('.table').DataTable({
				"ajax" : {
        "url": "http://localhost/MSC_services/index.php/schedule/Api/scheduleV",
        "dataSrc": "data"
      },
      "columns": [{
          "data": "idSchedule",
          "defaultContent": ""
        },
        {
          "data": "namePerson",
          "defaultContent": ""
        },
        {
          "data": "lunes",
          "defaultContent": ""
        },
        {
          "data": "martes",
          "defaultContent": ""
        },
        {
          "data": "miercoles",
          "defaultContent": ""
        },
        {
          "data": "jueves",
          "defaultContent": ""
        },
        {
          "data": "viernes",
          "defaultContent": ""
        },
        {
          "data": "sabado",
          "defaultContent": ""
        },
        {
          "data": "domingo",
          "defaultContent": ""
        },
        {
          "data": "statusSchedule",
          "defaultContent": ""
        },
        {
          "data": null,
          "defaultContent": "<div class='btn-group'><button class='btn btn-primary btn-sm mx-2 btn-custom-action'data-action='update'title='Actualizar'><i class='icon wb-wrench white'aria-hidden='true'></button><button class='btn btn-warning btn-sm btn-custom-action2' data-action='status' title='Cambiar Status'><i class='icon wb-user-circle white' aria-hidden='true' ></button></div>"
        }
      ],
      "columnDefs": [{
        "orderable": false,
        "width": "10%",
        "targets": -1
      }]
    });
    //llenado de comboboxa
    $(document).find('#Empleado').each(function () {
      $.ajax({
        "url": "http://localhost/MSC_services/index.php/Alta/Api/employeeV",
        "method": "get",
        "success": function (response) {
          if (response.status == "success") {
            $.each(response.data, function (key, value) {
              $('#Empleado').append('<option value="' + value.idPerson + '">' + value.namePerson +
                ' ' + value.lastnamePerson + '</option>');
            });
          }
        },
        "error": function (xh, err, thro) {
          console.info(xh);
        }
      });
    });

    $(document).on('submit','#formhorarios', function (event) {
      event.preventDefault();     
      var lunes = $("#lunes0").val()+'-'+$("#lunes1").val();
      var martes = $("#martes0").val()+'-'+$("#martes1").val();
      var miercoles = $("#miercoles0").val()+'-'+$("#miercoles1").val();
      var jueves = $("#jueves0").val()+'-'+$("#jueves").val();
      var viernes = $("#viernes0").val()+'-'+$("#viernes1").val();
      var sabado = $("#sabado0").val()+'-'+$("#sabado1").val();
      var domingo = $("#domingo0").val()+'-'+$("#domingo1").val(); 
      $('#formhorariosappend').append('<div id="formhorariosappend2"><input type="hidden"name="lunes"id="lunes"value="'+lunes+'"/><input type="hidden"name="martes"id="martes"value="'+martes+'"/><input type="hidden"name="miercoles"id="miercoles"value="'+miercoles+'"/><input type="hidden"name="jueves"id="jueves"value="'+jueves+'"/><input type="hidden"name="viernes"id="viernes"value="'+viernes+'"/><input type="hidden"name="sabado"id="sabado"value="'+sabado+'"/><input type="hidden"name="domingo"id="domingo"value="'+domingo+'"/></div>');      
      limpiarCampos('formhorarios');
      var permiteEnviar = false;
      var uri = "http://localhost/MSC_services/index.php/schedule/api/schedule";
      var method = "get";
      switch (_action) {
        case 'new':
          permiteEnviar = true;
          var uri = "http://localhost/MSC_services/index.php/schedule/api/schedule";
          method = "post";
          break;
        case 'update':
          permiteEnviar = true;
          var uri = "http://localhost/MSC_services/index.php/schedule/api/schedule/id/" + $(document).find(
            '#idSchedule').val();
          method = "put";
          break;
        case 'consulta':
          permiteEnviar = false;
          var uri = "http://localhost/MSC_services/index.php/schedule/api/schedule/id/" + $(document).find(
            '#idSchedule').val();
          method = "get";
          break;
        case 'default':
          permiteEnviar = false;
          break;
      }
      if (permiteEnviar) {
        $.ajax({
          "url": uri,
          "method": method,
          "data": $('#formhorarios').serialize(),
          "success": function (response) {
            if (response.status == "success"){
              var mensaje = response.message;
              $(document).find('#divtoast').append(
                '<div class="toast"style="display:none"id="toastersuccess"name="toastersuccess"data-message="' +
                mensaje +
                '"aria-live="polite"data-plugin="toastr"data-container-id="toast-top-right"data-position-class="toast-top-right"data-icon-class="toast-just-text toast-success toast-shadow"role="alert"><div class="toast toast-just-text toast-shadow toast-success"><button type="button"class="toast-close-button"aria-label="Close"><span aria-hidden="true">×</span></button><div class="toast-message"></div></div></div>'
                );

              $('#toastersuccess').click();
              _table.ajax.reload();
              $('#modalhorarios').modal('hide');
              $(".modal-backdrop").remove();
            } else if (response.status == "error") {
              $.each(response.validations, function (key, message) {
                //console.info(key+":"+message);
                $(document).find('#formhorarios').find('#' + key).addClass('is-invalid');
                $(document).find('#formhorarios').find('#' + key).closest('.form-group').append(
                  '<div class="invalid-feedback">' + message + '</div>');
              });
            } else {

            }
          },
          "error": function (xh, err, thro) {
            console.info(xh);
          }
        });
      }
    });

    $(document).on('submit','#formupdatehorarios', function (event) {
      event.preventDefault();       
      var lunes = $("#lunes2").val()+'-'+$("#lunes3").val();
      var martes = $("#martes2").val()+'-'+$("#martes3").val();
      var miercoles = $("#miercoles2").val()+'-'+$("#miercoles3").val();
      var jueves = $("#jueves2").val()+'-'+$("#jueves3").val();
      var viernes = $("#viernes2").val()+'-'+$("#viernes3").val();
      var sabado = $("#sabado2").val()+'-'+$("#sabado3").val();
      var domingo = $("#domingo2").val()+'-'+$("#domingo3").val();       
      $('#formupdatehorarios').append('<input type="hidden"name="uplunes"id="uplunes"value="'+lunes+'"/><input type="hidden"name="upmartes"id="upmartes"value="'+martes+'"/><input type="hidden"name="upmiercoles"id="upmiercoles"value="'+miercoles+'"/><input type="hidden"name="upjueves"id="upjueves"value="'+jueves+'"/><input type="hidden"name="upviernes"id="upviernes"value="'+viernes+'"/><input type="hidden"name="upsabado"id="upsabado"value="'+sabado+'"/><input type="hidden"name="updomingo"id="updomingo"value="'+domingo+'"/>');
      limpiarCampos('formupdatehorarios');
      var permiteEnviar = false;
      var uri = "http://localhost/MSC_services/index.php/schedule/api/schedule";
      var method = "get";
      switch (_action) {
        case 'new':
          permiteEnviar = true;
          var uri = "http://localhost/MSC_services/index.php/schedule/api/schedule";
          method = "post";
          break;
        case 'update':
          permiteEnviar = true;
          var uri = "http://localhost/MSC_services/index.php/schedule/api/schedule/id/" + $(document).find(
            '#idSchedule').val();
          method = "put";
          break;
        case 'consulta':
          permiteEnviar = false;
          var uri = "http://localhost/MSC_services/index.php/schedule/api/schedule/id/" + $(document).find(
            '#idSchedule').val();
          method = "get";
          break;
        case 'default':
          permiteEnviar = false;
          break;
      }
      if (permiteEnviar) {
        $.ajax({
          "url": uri,
          "method": method,
          "data": $('#formupdatehorarios').serialize(),
          "success": function (response) {
            if (response.status == "success"){
              var mensaje = response.message;
              $(document).find('#divtoast').append(
                '<div class="toast"style="display:none"id="toastersuccess"name="toastersuccess"data-message="' +
                mensaje +
                '"aria-live="polite"data-plugin="toastr"data-container-id="toast-top-right"data-position-class="toast-top-right"data-icon-class="toast-just-text toast-success toast-shadow"role="alert"><div class="toast toast-just-text toast-shadow toast-success"><button type="button"class="toast-close-button"aria-label="Close"><span aria-hidden="true">×</span></button><div class="toast-message"></div></div></div>'
                );

              $('#toastersuccess').click();
              _table.ajax.reload();
              $('#modalupdatehorarios').modal('hide');
              $(".modal-backdrop").remove();
            } else if (response.status == "error") {
              $.each(response.validations, function (key, message) {
                //console.info(key+":"+message);
                $(document).find('#formupdatehorarios').find('#' + key).addClass('is-invalid');
                $(document).find('#formupdatehorarios').find('#' + key).closest('.form-group').append(
                  '<div class="invalid-feedback">' + message + '</div>');
              });
            } else {
            }
          },
          "error": function (xh, err, thro) {
            console.info(xh);
          }
        });
      }
    });

    $('.table tbody').on('click', '.btn-custom-action', function () {
      var row = $(this).closest('tr');
      var data = _table.row(row).data();
      _action = $(this).attr('data-action');
      $.ajax({
        "url": "http://localhost/MSC_services/index.php/schedule/api/schedule/id/"+data.idSchedule,
        "method": "get",
        "success": function (response) {
          if (response.status == "success") {
            $('#modalupdatehorarios').modal('show');
            $.each(response.data, function (key, value) {
              $('#formupdatehorarios').find('#' + key).val(value);
              $('#'+key).append('<option value="'+value+'">'+value+'</option>');
            });            
            $('#empleadodivtitle').append('<h3 class="panel-title"id="removethistitle">Empleado: '+data.namePerson+'</h3>');         
            $('#formupdatehorarios').append('<input type="hidden"id="idSchedule"name="idSchedule"value="'+data.idSchedule+'"/>');
            $('#formupdatehorarios').append('<input type="hidden"id="Empleadoupdate"name="Empleadoupdate"value="'+data.fkEmployee+'"/>');
          }
        },
        "error": function (xh, err, thro) {
          console.info(xh);
        }
      });
      switch (_action) {
        case 'update':
          $(document).find('#titleModal').text('Actualizar Registro');
          $(document).find('#titleSubmit').text('Actualizar');
          $('#formhorarios').find('input').each(function () {
            $(this).removeClass('empty');
          });          
          break;

        case 'delete':
          $(document).find('#titleModal').text('Borrar Ticket');
          $(document).find('#titleSubmit').text('Borrar');
          $(document).find('#formTickets').find('input,select').each(function () {
            $(this).prop('disabled', 'disabled');
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
					"url": "http://localhost/MSC_services/index.php/schedule/api/schedule/id/"+data.idSchedule,
					"method":"get",
					"success":function(response){
						if(response.status=="success"){
							$('#modalstatus').modal('show');							
							$('#formstatus').append('<input type="hidden" id="idSchedule" name="idSchedule" value="'+data.idSchedule+'"/>');
							if(data.statusSchedule == 'Active'){
								$(document).find('#nombreSchedule').append('<h4 id="ns">Esta seguro que desea "desactivar" el horario de : ('+data.namePerson+' '+data.lastnamePerson+')</h4>');					
								$('#formstatus').append('<input type="hidden" id="statusSchedule" name="statusSchedule" value="Inactive"/>');								
							}else{
								$(document).find('#nombreSchedule').append('<h4 id="ns">Esta seguro que desea "activar" el horario de : ('+data.namePerson+' '+data.lastnamePerson+')</h4>');					
								$('#formstatus').append('<input type="hidden" id="statusSchedule" name="statusSchedule" value="Active"/>');
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
            "url": "http://localhost/MSC_services/index.php/schedule/api/schedulestatus/id/"+$(document).find('#idSchedule').val(),
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
				$(document).find('#idSchedule').remove();	
				$(document).find('#ns').remove();				
					});
				});



    $('#modalhorarios').on('hidden.bs.modal', function () {
      $(document).find('#formhorarios').find('input').each(function () {
        $(this).removeClass('is-invalid');
        $(this).closest('.form-group').find('.invalid-feedback').remove();
        $(this).val('');
        //$(document).find('#id').remove();
        $(document).find('#formhorariosappend').remove();
        _action = "new";        
        
        $(document).find('#titleModal').text('Registrar Horario');
        $(document).find('#titleSubmit').text('Guardar');
        $(document).find('#formhorarios').find('input,select').each(function () {
          //$(document).find('#formClientes').find('input','select','textArea').each(function(){
          $(this).prop('disabled', '');
          $(this).prop('checked', true);          
        });
        $("#Empleado").val($("#Empleado option:first").val());
      });
    });

    $('#modalupdatehorarios').on('hidden.bs.modal', function () {
      $(document).find('#formupdatehorarios').find('input').each(function () {
        $(this).removeClass('is-invalid');
        $(this).closest('.form-group').find('.invalid-feedback').remove();
        $(this).val('');
        $(document).find('#idSchedule').remove();        
        $(document).find('#Empleadoupdate').remove();        
        _action = "new";
        $(document).find('#removethistitle').remove();
        $(document).find('#titleModal').text('Registrar Horario');
        $(document).find('#titleSubmit').text('Guardar');
        $(document).find('#formupdatehorarios').find("input[type='checkbox']").each(function () {
          //$(document).find('#formClientes').find('input','select','textArea').each(function(){
          $(this).prop('disabled', '');          
          $(this).prop('checked', true);           
        });        
      });
    });


  });
  
  


  function limpiarCampos(idForm) {
    $(document).find('#' + idForm).find('input,select').each(function () {
      $(this).removeClass('is-invalid');
      $(this).closest('.form-group').find('.invalid-feedback').remove();
    });

  }

  

   
$(document).ready(function(){          
        $('#lunescheck').click(function(){
            if($(this).is(":checked")){              
            $(document).find('#formhorarios').find('#lunes0,#lunes1').each(function () {
            $(this).prop('readonly', '');
            
          });            
            }
            else if ($(this).is(":not(:checked)")){
              $(document).find('#formhorarios').find('#lunes0,#lunes1').each(function () {
            $(this).prop('readonly', 'readonly');
            $(this).val("00:00:00");                      
           
          });        
            }
        });

        $('#martescheck').click(function(){
            if($(this).is(":checked")){              
            $(document).find('#formhorarios').find('#martes0,#martes1').each(function () {
            $(this).prop('readonly', '');
          });            
            }
            else if ($(this).is(":not(:checked)")){
              $(document).find('#formhorarios').find('#martes0,#martes1').each(function () {
            $(this).prop('readonly', 'readonly');
            $(this).val("00:00:00");              
            
          
          });        
            }
        });

        $('#miercolescheck').click(function(){
            if($(this).is(":checked")){              
            $(document).find('#formhorarios').find('#miercoles0,#miercoles1').each(function () {
            $(this).prop('readonly', '');
          });            
            }
            else if ($(this).is(":not(:checked)")){
              $(document).find('#formhorarios').find('#miercoles0,#miercoles1').each(function () {
            $(this).prop('readonly', 'readonly');
            $(this).val("00:00:00");      
            
            
          });        
            }
        });

        $('#juevescheck').click(function(){
            if($(this).is(":checked")){              
            $(document).find('#formhorarios').find('#jueves0,#jueves1').each(function () {
            $(this).prop('readonly', '');
          });            
            }
            else if ($(this).is(":not(:checked)")){
              $(document).find('#formhorarios').find('#jueves0,#jueves1').each(function () {
            $(this).prop('readonly', 'readonly');
            $(this).val("00:00:00");                
            
       
          });        
            }
        });

        $('#viernescheck').click(function(){
            if($(this).is(":checked")){              
            $(document).find('#formhorarios').find('#viernes0,#viernes1').each(function () {
            $(this).prop('readonly', '');
          });            
            }
            else if ($(this).is(":not(:checked)")){
              $(document).find('#formhorarios').find('#viernes0,#viernes1').each(function () {
            $(this).prop('readonly', 'readonly');
            $(this).val("00:00:00");                      
            
          });        
            }
        });

        $('#sabadocheck').click(function(){
            if($(this).is(":checked")){              
            $(document).find('#formhorarios').find('#sabado0,#sabado1').each(function () {
            $(this).prop('readonly', '');
          });            
            }
            else if ($(this).is(":not(:checked)")){
              $(document).find('#formhorarios').find('#sabado0,#sabado1').each(function () {
            $(this).prop('readonly', 'readonly');   
            $(this).val("00:00:00");
                          
          });        
            }
        });

        $('#domingocheck').click(function(){
            if($(this).is(":checked")){              
            $(document).find('#formhorarios').find('#domingo0,#domingo1').each(function () {
            $(this).prop('readonly', '');
          });            
            }
            else if ($(this).is(":not(:checked)")){
              $(document).find('#formhorarios').find('#domingo0,#domingo1').each(function () {
            $(this).prop('readonly', 'readonly'); 
            $(this).val("00:00:00");
                                 
          });        
            }
        });
    });

   
    $(document).ready(function(){          
          $('#lunescheckupdate').click(function(){
              if($(this).is(":checked")){              
              $(document).find('#formupdatehorarios').find('#lunes2,#lunes3').each(function () {
              $(this).prop('readonly', '');
            });            
              }
              else if ($(this).is(":not(:checked)")){
                $(document).find('#formupdatehorarios').find('#lunes2,#lunes3').each(function () {
              $(this).prop('readonly', 'readonly');
              $(this).val("00:00:00");
             
            });        
              }
          });
  
          $('#martescheckupdate').click(function(){
              if($(this).is(":checked")){              
              $(document).find('#formupdatehorarios').find('#martes2,#martes3').each(function () {
              $(this).prop('readonly', '');
            });            
              }
              else if ($(this).is(":not(:checked)")){
                $(document).find('#formupdatehorarios').find('#martes2,#martes3').each(function () {
              $(this).prop('readonly', 'readonly');
              $(this).val("00:00:00");
              
            
            });        
              }
          });
  
          $('#miercolescheckupdate').click(function(){
              if($(this).is(":checked")){              
              $(document).find('#formupdatehorarios').find('#miercoles2,#miercoles3').each(function () {
              $(this).prop('readonly', '');
            });            
              }
              else if ($(this).is(":not(:checked)")){
                $(document).find('#formupdatehorarios').find('#miercoles2,#miercoles3').each(function () {
              $(this).prop('readonly', 'readonly');
              $(this).val("00:00:00");
              
              
            });        
              }
          });
  
          $('#juevescheckupdate').click(function(){
              if($(this).is(":checked")){              
              $(document).find('#formupdatehorarios').find('#jueves2,#jueves3').each(function () {
              $(this).prop('readonly', '');
            });            
              }
              else if ($(this).is(":not(:checked)")){
                $(document).find('#formupdatehorarios').find('#jueves2,#jueves3').each(function () {
              $(this).prop('readonly', 'readonly');
              $(this).val("00:00:00");
              
         
            });        
              }
          });
  
          $('#viernescheckupdate').click(function(){
              if($(this).is(":checked")){              
              $(document).find('#formupdatehorarios').find('#viernes2,#viernes3').each(function () {
              $(this).prop('readonly', '');
            });            
              }
              else if ($(this).is(":not(:checked)")){
                $(document).find('#formupdatehorarios').find('#viernes2,#viernes3').each(function () {
              $(this).prop('readonly', 'readonly');
              $(this).val("00:00:00");                                        
              
            });        
              }
          });
  
          $('#sabadocheckupdate').click(function(){
              if($(this).is(":checked")){              
              $(document).find('#formupdatehorarios').find('#sabado2,#sabado3').each(function () {
              $(this).prop('readonly', '');
            });            
              }
              else if ($(this).is(":not(:checked)")){
                $(document).find('#formupdatehorarios').find('#sabado2,#sabado3').each(function () {
              $(this).prop('readonly', 'readonly');                        
              $(this).val("00:00:00");              
            });        
              }
          });
  
          $('#domingocheckupdate').click(function(){
              if($(this).is(":checked")){              
              $(document).find('#formupdatehorarios').find('#domingo2,#domingo3').each(function () {
              $(this).prop('readonly', '');
            });            
              }
              else if ($(this).is(":not(:checked)")){
                $(document).find('#formupdatehorarios').find('#domingo2,#domingo3').each(function () {
              $(this).prop('readonly', 'readonly');  
              $(this).val("00:00:00");
                                 
            });        
              }
          });
      });
  
  var choice_combo = document.getElementById('Empleado');
  choice_combo.onchange = function () {
    document.getElementById("rangos").style.display = 'block';
  }  
</script>