<style>
  /* RANGE SLIDER STYLES */
  .range-checkbox {
    clear: left;
    float: left;
    margin: 13px 10px 10px;
  }

  .range-label {
    float: left;
    display: block;
    width: 80px;
    margin: 10px;
    cursor: pointer;
  }

  .range-slider {
    float: left;
    margin: 10px;
  }

  .range-time {
    width: 100px;
    float: left;
    margin: 10px;
  }

  .range-day-disabled {
    opacity: .5;
  }

  .range-day .ui-slider-range {
    background: #00A000;
  }

  .range-day .ui-slider-handle {
    cursor: w-resize !important;
  }

  .range-day-disabled .ui-slider-range {
    background: #fff;
  }

  .range-day-disabled .ui-slider-handle {
    cursor: default !important;
    background: none !important;
    border: none !important;
  }

  .range-values {
    position: relative;
    display: block;
    height: 20px;
    overflow: hidden;
    margin: 10px 0 10px;
  }

  .range-values span {
    position: absolute;
    border-left: 1px solid grey;
    padding-left: 5px
  }

  .range-values span.r-0 {
    left: 0
  }

  .range-values span.r-3 {
    left: 12.5%
  }

  .range-values span.r-6 {
    left: 25%
  }

  .range-values span.r-9 {
    left: 37.5%
  }

  .range-values span.r-12 {
    left: 50%
  }

  .range-values span.r-15 {
    left: 62.5%
  }

  .range-values span.r-18 {
    left: 75%
  }

  .range-values span.r-21 {
    left: 87.5%
  }

  .range-values span.r-24 {
    left: 100%;
    margin-left: -1px;
  }

  /* RESULT DATA STYLES */
  #schedule {
    width: 500px;
    background: #eee;
    margin-top: 20px;
  }

  #schedule th {
    text-align: left;
    border-bottom: 1px solid grey;
  }

  #schedule th,
  #schedule td {
    padding: 5px;
  }

  /************ PARAMS ************/
  body {}

  .range-slider,
  .range-values {
    width: 400px;
  }

  .range-values,
  #schedule,
  h1 {
    margin-left: 143px;
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
  <div class="modal-dialog modal-lg" role="document">
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
                    <div class="range-head">
                      <div class="range-values">
                        <span class="r-0">0:00</span>
                        <span class="r-3">3:00</span>
                        <span class="r-6">6:00</span>
                        <span class="r-9">9:00</span>
                        <span class="r-12">12:00</span>
                        <span class="r-15">15:00</span>
                        <span class="r-18">18:00</span>
                        <span class="r-21">21:00</span>
                        <span class="r-24">24:00</span>
                      </div>
                    </div>

                    <div class="range-day" id="range-day-1" data-day="1">
                      <input type="checkbox" name="day-1" id="day-1" value="1" class="range-checkbox" checked>
                      <label for="day-1" class="range-label">Lunes:</label>
                      <div id="range-slider-1" class="range-slider"></div>
                      <span id="range-time-1" class="range-time"></span>
                    </div>

                    <div class="range-day" id="range-day-2" data-day="2">
                      <input type="checkbox" name="day-2" id="day-2" value="1" class="range-checkbox" checked>
                      <label for="day-2" class="range-label">Martes:</label>
                      <div id="range-slider-2" class="range-slider"></div>
                      <span id="range-time-2" class="range-time"></span>
                    </div>

                    <div class="range-day" id="range-day-3" data-day="3">
                      <input type="checkbox" name="day-3" id="day-3" value="1" class="range-checkbox" checked>
                      <label for="day-3" class="range-label">Miercoles:</label>
                      <div id="range-slider-3" class="range-slider"></div>
                      <span id="range-time-3" class="range-time"></span>
                    </div>

                    <div class="range-day" id="range-day-4" data-day="4">
                      <input type="checkbox" name="day-4" id="day-4" value="1" class="range-checkbox" checked>
                      <label for="day-4" class="range-label">Jueves:</label>
                      <div id="range-slider-4" class="range-slider"></div>
                      <span id="range-time-4" class="range-time"></span>
                    </div>

                    <div class="range-day" id="range-day-5" data-day="5">
                      <input type="checkbox" name="day-5" id="day-5" value="1" class="range-checkbox" checked>
                      <label for="day-5" class="range-label">Viernes:</label>
                      <div id="range-slider-5" class="range-slider"></div>
                      <span id="range-time-5" class="range-time"></span>
                    </div>

                    <div class="range-day" id="range-day-6" data-day="6">
                      <input type="checkbox" name="day-6" id="day-6" value="1" class="range-checkbox" checked>
                      <label for="day-6" class="range-label">Sabado:</label>
                      <div id="range-slider-6" class="range-slider"></div>
                      <span id="range-time-6" class="range-time"></span>
                    </div>

                    <div class="range-day" id="range-day-7" data-day="7">
                      <input type="checkbox" name="day-7" id="day-7" value="1" class="range-checkbox" checked>
                      <label for="day-7" class="range-label">Domingos:</label>
                      <div id="range-slider-7" class="range-slider"></div>
                      <span id="range-time-7" class="range-time"></span>
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
              <h3 class="panel-title">Configurar</h3>
            </div>
            <div class="panel-body container-fluid border">
              <div id="formscheduleupdate">

                  <br>

                <div class="col-lg-12">
                  <div class="row">                  

                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="lunescheck" checked>
                      <label class="form-check-label" for="Lunes">Lunes</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes" name="lunes" placeholder="" />
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
                      <label class="form-check-label" for="Martes">Martes</label>

                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes" name="lunes" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes1" name="lunes1" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="miercolescheck" checked>
                      <label class="form-check-label" for="Miercoles">Miercoles</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes" name="lunes" placeholder="" />
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
                      <input type="checkbox" class="form-check-input" id="juevescheck" checked>
                      <label class="form-check-label" for="Jueves">Jueves</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes" name="lunes" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes1" name="lunes1" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="viernescheck" checked>
                      <label class="form-check-label" for="viernes">Viernes</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes" name="lunes" placeholder="" />
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
                      <input type="checkbox" class="form-check-input" id="sabadocheck" checked>
                      <label class="form-check-label" for="sabado">Sabado</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes" name="lunes" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes1" name="lunes1" placeholder="" />
                        <label class="label">Salida</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3">
                      <input type="checkbox" class="form-check-input" id="domingocheck" checked>
                      <label class="form-check-label" for="domingo">Domingo</label>
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes" name="lunes" placeholder="" />
                        <label class="label">Entrada</label>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group form-material floating" data-plugin="formMaterial">
                        <input type="time" class="form-control" id="lunes1" name="lunes1" placeholder="" />
                        <label class="label">Salida</label>
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


<script>
  var rangeTimes = [];
  $(".range-slider").slider({
    range: true,
    min: 0,
    max: 1440,
    values: [540, 1080],
    step: 30,
    slide: slideTime,
  });

  function slideTime(event, ui) {
    if (event && event.target) {
      var $rangeslider = $(event.target);
      var $rangeday = $rangeslider.closest(".range-day");
      var rangeday_d = parseInt($rangeday.data('day'));
      var $rangecheck = $rangeday.find(":checkbox");
      var $rangetime = $rangeslider.next(".range-time");
    }

    if ($rangecheck.is(':checked')) {
      $rangeday.removeClass('range-day-disabled');
      $rangeslider.slider('enable');

      if (ui !== undefined) {
        var val0 = ui.values[0],
          val1 = ui.values[1];
      } else {
        var val0 = $rangeslider.slider('values', 0),
          val1 = $rangeslider.slider('values', 1);
      }

      var minutes0 = parseInt(val0 % 60, 10),
        hours0 = parseInt(val0 / 60 % 24, 10),
        minutes1 = parseInt(val1 % 60, 10),
        hours1 = parseInt(val1 / 60 % 24, 10);
      if (hours1 == 0) hours1 = 24;

      rangeTimes[rangeday_d] = [getTime(hours0, minutes0), getTime(hours1, minutes1)];

      $rangetime.text(rangeTimes[rangeday_d][0] + ' - ' + rangeTimes[rangeday_d][1]);

    } else {

      $rangeday.addClass('range-day-disabled');
      $rangeslider.slider('disable');

      rangeTimes[rangeday_d] = [];

      $rangetime.text('00:00-00:00');

    }
  }


  function getTime(hours, minutes) {
    var time = null;
    minutes = minutes + "";
    if (minutes.length == 1) {
      minutes = "0" + minutes;
    }
    return hours + ":" + minutes;
  }

  $('.range-checkbox').on('change', function () {
    var $rangecheck = $(this);
    var $rangeslider = $rangecheck.closest('.range-day').find('.range-slider');
    slideTime({
      target: $rangeslider
    });
  });

  $("#Submit").on('click');

  slideTime({
    target: $('#range-slider-1')
  });
  slideTime({
    target: $('#range-slider-2')
  });
  slideTime({
    target: $('#range-slider-3')
  });
  slideTime({
    target: $('#range-slider-4')
  });
  slideTime({
    target: $('#range-slider-5')
  });
  slideTime({
    target: $('#range-slider-6')
  });
  slideTime({
    target: $('#range-slider-7')
  });


  $(function () {

    var _action = "new"; //new,uptdate,read,delete
    let _table = $('.table').DataTable({
      "ajax": {
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
          "data": null,
          "defaultContent": "<div class='btn-group'><button class='btn btn-primary btn-sm mx-2 btn-custom-action' data-action='update'  title='Actualizar'><i class='icon wb-wrench white' aria-hidden='true'></button><button class='btn btn-warning btn-sm btn-custom-action' data-action='delete' title='Cambiar Status'><i class='icon wb-user-circle white' aria-hidden='true' ></button></div>"
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

    $(document).on('submit', '#formhorarios', function (event) {
      event.preventDefault();
      var range1 = $("#range-time-1").html();
      var range2 = $("#range-time-2").html();
      var range3 = $("#range-time-3").html();
      var range4 = $("#range-time-4").html();
      var range5 = $("#range-time-5").html();
      var range6 = $("#range-time-6").html();
      var range7 = $("#range-time-7").html();

      $('#formschedule').append('<input type="text"name="lunes"id="lunes"value="' + range1 +
        '"/><input type="text"name="martes"id="martes"value="' + range2 +
        '"/><input type="text"name="miercoles"id="miercoles"value="' + range3 +
        '"/><input type="text"name="jueves"id="jueves"value="' + range4 +
        '"/><input type="text"name="viernes"id="viernes"value="' + range5 +
        '"/><input type="text"name="sabado"id="sabado"value="' + range6 +
        '"/><input type="text"name="domingo"id="domingo"value="' + range7 + '"/>');

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
            if (response.status == "success") {

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

    $('.table tbody').on('click', '.btn-custom-action', function () {
      var row = $(this).closest('tr');
      var data = _table.row(row).data();
      _action = $(this).attr('data-action');
      $.ajax({
        "url": "http://localhost/MSC_services/index.php/schedule/api/schedule/id/" + data.idschedule,
        "method": "get",
        "success": function (response) {
          if (response.status == "success") {
            $('#modalupdatehorarios').modal('show');
            $.each(response.data, function (key, value) {
              $('#formscheduleupdate').find('#' + key).val(value);
              $('#' + key).append('<option value="' + value + '">' + value + '</option>');
            });
            $('#formupdatehorarios').append('<input type="hidden" id="idschedule" value="' + data
              .idschedule + '"/>');



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
          /*$(document).find('input,select').on('change',function(){     
              alert(1);                  
              $('#formhorarios').each('input,select',function(){
                  alert(1);
                  $(this).removeClass('empty');
              });
           });*/
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

    $('#modalhorarios').on('hidden.bs.modal', function () {
      $(document).find('#formhorarios').find('input').each(function () {
        $(this).removeClass('is-invalid');
        $(this).closest('.form-group').find('.invalid-feedback').remove();
        $(this).val('');
        $(document).find('#id').remove();
        _action = "new";
        $(document).find('#titleModal').text('Registrar Persona');
        $(document).find('#titleSubmit').text('Guardar');
        $(document).find('#formhorarios').find('input,select').each(function () {
          //$(document).find('#formClientes').find('input','select','textArea').each(function(){
          $(this).prop('disabled', '');

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

  /*
  $(document).on('submit','#formhorarios',function(){
    event.preventDefault();
    var range1 =  $("#range-time-1").html();  
    var range2 =  $("#range-time-2").html();  
    var range3 =  $("#range-time-3").html();  
    var range4 =  $("#range-time-4").html();  
    var range5 =  $("#range-time-5").html();  
    var range6 =  $("#range-time-6").html();  
    var range7 =  $("#range-time-7").html();  
      
    $('#formschedule').append('<input type="text"name="lunes"id="lunes"value="'+range1+'"/><input type="text"name="martes"id="martes"value="'+range2+'"/><input type="text"name="miercoles"id="miercoles"value="'+range3+'"/><input type="text"name="jueves"id="jueves"value="'+range4+'"/><input type="text"name="viernes"id="viernes"value="'+range5+'"/><input type="text"name="sabado"id="sabado"value="'+range6+'"/><input type="text"name="domingo"id="domingo"value="'+range7+'"/>');

      
      var $1start = range1.split("-")[0];
      var $1end = range1.split("-")[1];
      $('#formschedule').append('<input type="text"name="day-1-start"id="day-1-start"value="'+$1start+'"/><input type="text"name="day-1-end" id="day-1-end"value="'+$1end+'"/>');

      var $2start = range2.split("-")[0];
      var $2end = range2.split("-")[1];
      $('#formschedule').append('<input type="text"name="day-2-start"id="day-2-start"value="'+$2start+'"/><input type="text"name="day-2-end" id="day-2-end"value="'+$2end+'"/>');

      var $3start = range3.split("-")[0];
      var $3end = range3.split("-")[1];

      $('#formschedule').append('<input type="text"name="day-3-start"id="day-3-start"value="'+$3start+'"/><input type="text" name="day-3-end"id="day-3-end"value="'+$3end+'"/>');

      var $4start = range4.split("-")[0];
      var $4end = range4.split("-")[1];

      $('#formschedule').append('<input type="text"name="day-4-start"id="day-4-start"value="'+$4start+'"/><input type="text" name="day-4-end"id="day-4-end"value="'+$4end+'"/>');

      var $5start = range5.split("-")[0];
      var $5end = range5.split("-")[1];

      $('#formschedule').append('<input type="text"name="day-5-start"id="day-5-start"value="'+$5start+'"/><input type="text"name="day-5-end" id="day-5-end"value="'+$5end+'"/>');

      var $6start = range6.split("-")[0];
      var $6end = range6.split("-")[1];

      $('#formschedule').append('<input type="text"name="day-6-start"id="day-6-start"value="'+$6start+'"/><input type="text"name="day-6-end" id="day-6-end"value="'+$6end+'"/>');

      var $7start = range7.split("-")[0];
      var $7end = range7.split("-")[1];

      $('#formschedule').append('<input type="text"name="day-7-start"id="day-7-start"value="'+$7start+'"/><input type="text"name="day-7-end" id="day-7-end"value="'+$7end+'"/>');
      


      //$('#formschedule').empty();
          
  });
      */

  var choice_combo = document.getElementById('Empleado');
  choice_combo.onchange = function () {
    document.getElementById("rangos").style.display = 'block';
  }
</script>