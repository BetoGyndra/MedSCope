<style>
/* RANGE SLIDER STYLES */
.range-checkbox { clear:left; float:left; margin:13px 10px 10px; }
.range-label { float:left; display:block; width:80px; margin:10px; cursor: pointer; }
.range-slider { float:left; margin:10px; }
.range-time { width:100px; float:left; margin:10px; }
.range-day-disabled { opacity:.5; }
.range-day .ui-slider-range { background: #00A000; }
.range-day .ui-slider-handle { cursor:w-resize !important; }
.range-day-disabled .ui-slider-range { background: #fff; }
.range-day-disabled .ui-slider-handle { cursor:default !important; background:none !important; border:none !important; }
.range-values { position:relative; display:block; height:20px; overflow:hidden; margin:10px 0 10px; }
.range-values span { position: absolute; border-left: 1px solid grey; padding-left:5px }
.range-values span.r-0 { left:0 }
.range-values span.r-3 { left:12.5% }
.range-values span.r-6 { left:25% }
.range-values span.r-9 { left:37.5% }
.range-values span.r-12 { left:50% }
.range-values span.r-15 { left:62.5% }
.range-values span.r-18 { left:75% }
.range-values span.r-21 { left:87.5% }
.range-values span.r-24 { left:100%;margin-left:-1px; }

/* RESULT DATA STYLES */
#schedule { width: 500px; background:#eee; margin-top:20px; }
#schedule th { text-align: left;border-bottom:1px solid grey; }
#schedule th,#schedule td { padding:5px; }

/************ PARAMS ************/
body {
  
}
.range-slider,.range-values {
  width: 400px;
}
.range-values,#schedule,h1 {
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
    <div class="site-action" data-plugin="actionBtn">
      <button type="button" data-toggle="modal" data-target="#modalhorarios" class="site-action-toggle btn-raised btn btn-success btn-floating">
        <i class="front-icon wb-plus animation-scale-up" aria-hidden="true"></i>
        <i class="back-icon wb-trash animation-scale-up" aria-hidden="true"></i>
      </button>
    </div>
    <!-- End Site Action -->          	             
  <br>
  
  
  <div class="toast"  style="display: none;" id="toastersuccess" name="toastersuccess" aria-live="polite"   data-plugin="toastr"
                      
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
                                    <th>Nombre</th>
									<th>Apellido</th>
                                    <th>Tipo de empleado</th>
                                    <th>Horario</th>
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
                         
                             <br>
                             <div class="col-lg-6">
                             <div class="form-group form-material floating" data-plugin="formMaterial">
                             <label class="form-control-label" for="Empleado">Empleado</label>
                                <select class="form-control" id="Empleado" name="Empleado">
                                    <option selected disabled>Seleccione</option>
                                    <option value="medico">medico</option>                    
                                </select>
                             </div>
                             </div>
                             <div class="col-lg-12">
                             <div class="row">

                            

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


                            <div id="formschedule">
                            <input type="text" name="day-1-start" id="day-1-start"/>
                            <input type="text" name="day-1-end" id="day-1-end"/>
                            <input type="text" name="day-2-start" id="day-2-start"/>
                            <input type="text" name="day-2-end" id="day-2-end"/>
                            <input type="text" name="day-3-start" id="day-3-start"/>
                            <input type="text" name="day-3-end" id="day-3-end"/>
                            <input type="text" name="day-4-start" id="day-4-start"/>
                            <input type="text" name="day-4-end" id="day-4-end"/>
                            <input type="text" name="day-5-start" id="day-5-start"/>
                            <input type="text" name="day-5-end" id="day-5-end"/>
                            <input type="text" name="day-6-start" id="day-6-start"/>
                            <input type="text" name="day-6-end" id="day-6-end"/>
                            <input type="text" name="day-7-start" id="day-7-start"/>
                            <input type="text" name="day-7-end" id="day-7-end"/>
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
var rangeTimes = [];
$(".range-slider").slider({
	range: true,
    min: 0,
    max: 1440,
    values: [540, 1080],
    step:30,
    slide: slideTime,    
	});

	function slideTime(event, ui){
    if (event && event.target) {
      var $rangeslider = $(event.target);
      var $rangeday = $rangeslider.closest(".range-day");
      var rangeday_d = parseInt($rangeday.data('day'));
      var $rangecheck = $rangeday.find(":checkbox");
      var $rangetime = $rangeslider.next(".range-time");
    }
    
    if ($rangecheck.is(':checked')) {
      $rangeday.removeClass('range-day-disabled');
      // $rangeslider.slider('enable');
      
      if (ui!==undefined) {
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
      if (hours1==0) hours1=24;
      
		  rangeTimes[rangeday_d] = [getTime(hours0, minutes0),getTime(hours1, minutes1)];
        
      $rangetime.text(rangeTimes[rangeday_d][0] + ' - ' + rangeTimes[rangeday_d][1]);
      
    } else {
     
      $rangeday.addClass('range-day-disabled');
      $rangeslider.slider('disable');
      
      rangeTimes[rangeday_d] = [];
      
      $rangetime.text('Closed');
      
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

  $('.range-checkbox').on('change', function(){
    var $rangecheck = $(this);
    var $rangeslider = $rangecheck.closest('.range-day').find('.range-slider');
    slideTime({target:$rangeslider});
   
  });

	$("#Submit").on('click');

slideTime({target:$('#range-slider-1')});
slideTime({target:$('#range-slider-2')});
slideTime({target:$('#range-slider-3')});
slideTime({target:$('#range-slider-4')});
slideTime({target:$('#range-slider-5')});
slideTime({target:$('#range-slider-6')});
slideTime({target:$('#range-slider-7')}); 


$(document).on('submit','#formhorarios',function(){
  var $range1 =  $("#range-time-1").html();  
  var $range2 =  $("#range-time-2").html();  
  var $range3 =  $("#range-time-3").html();  
  var $range4 =  $("#range-time-4").html();  
  var $range5 =  $("#range-time-5").html();  
  var $range6 =  $("#range-time-6").html();  
  var $range7 =  $("#range-time-7").html();  
    
});

      var choice_combo = document.getElementById('Empleado');
        choice_combo.onchange = function() {            
                document.getElementById("rangos").style.display = 'block';                
        }    
</script>


