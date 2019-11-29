    <!-- Page -->
    <div class="page">
      <div class="page-content">
        <!-- Panel -->  
        <div class="col-md-12">
        <div class="row">
        <div class="col-md-4">
        
        <div class="row">
            <!-- Card -->
            <div class="card card-block p-20 bg-blue-600">
              <div class="card-watermark darker font-size-80 m-15"><i class="icon wb-clipboard" aria-hidden="true"></i></div>
              <div class="counter counter-md counter-inverse text-left">
                <div class="counter-number-group">
                  <span class="counter-number">25</span>
                  <span class="counter-number-related text-capitalize">Citas</span>
                </div>
                <div class="counter-label text-capitalize">Pendientes</div>
              </div>
            </div>
            <!-- End Card -->
          </div>

          <div class="row">
            <!-- Card -->
            <div class="card card-block p-20 bg-yellow-600">
              <div class="card-watermark darker font-size-80 m-15"><i class="icon  wb-user" aria-hidden="true"></i></div>
              <div class="counter counter-md counter-inverse text-left">
                <div class="counter-number-group">
                  <span class="counter-number">42</span>
                  <span class="counter-number-related text-capitalize">Medicos</span>
                </div>
                <div class="counter-label text-capitalize">Disponibles</div>
              </div>
            </div>
            <!-- End Card -->
          </div>

          <div class="row">
            <!-- Card -->
            <div class="card card-block p-20 bg-green-600">
              <div class="card-watermark darker font-size-80 m-15"><i class="icon wb-users" aria-hidden="true"></i></div>
              <div class="counter counter-md counter-inverse text-left">
                <div class="counter-number-group">
                  <span class="counter-number">72</span>
                  <span class="counter-number-related text-capitalize">Pacientes</span>
                </div>
                <div class="counter-label text-capitalize">Registrados</div>
              </div>
            </div>
            <!-- End Card -->
          </div>

          <div class="row">
            <!-- Card  -->
            <div class="card card-block p-20 bg-purple-600">
              <div class="card-watermark lighter font-size-60 m-15"><i class="icon  wb-add-file" aria-hidden="true"></i></div>
              <div class="counter counter-md counter-inverse text-left">
                <div class="counter-number-wrap font-size-30">
                  <span class="counter-number">1025</span>
                  <span class="counter-number-related text-capitalize">Recetas</span>
                </div>
                <div class="counter-label text-capitalize">surtidas</div>
              </div>
            </div>
            <!-- End Card -->           
        <!-- End Panel -->
      </div>
      </div>
        <div class="col-md-8">
          
        <div class="panel panel-success">
        <div class="panel-heading">
        
            <h3 class="panel-title">Asistencia Recepcion <i class=" wb-bell float-right"></i></h3>
            
        </div>
        
        <div class="panel-body container-fluid border">
        <div class="row">
					<div class="col-12">
						<table class="table">
							<thead>
								<tr>
                  <th>Cita</th>								
                  <th>Paciente</th>
                  <th>Medico</th>
                  <th>Fecha</th>                                     									                   
									<th>Hora</th>                 
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
        </div> 
      </div>
    
    <!-- End Page -->
    <script src="<?=base_url('resources/js/jquery.js');?>"></script>
	<script src="<?=base_url('resources/js/popper.js');?>"></script>
	<script src="<?=base_url('resources/js/bootstrap.js');?>"></script>


    <script type="text/javascript">
		$(function() {           
			let _table =$('.table').DataTable({ 
            "searching": false,                
            "info": false,        
            "lengthChange": false,
            "paging":   false,      
				"ajax" : {
					"url" : "http://localhost/MSC_services/index.php/noatencion/api/noatencionV",
					"dataSrc" : "data"
                },              
				"columns" : [				          	
                    {"data" : "fecha", "defaultContent" : ""},
				          	{"data" : "nameSpecialty", "defaultContent" : ""},
                    {"data" : "motivo", "defaultContent" : ""},
                    {"data" : "desde", "defaultContent" : ""}, 
                    {"data" : "desde", "defaultContent" : ""},                                 
				], 
				"columnDefs" : [
					{"orderable" : false, "width" : "10%", "targets": -1}
				]
        
			});
    });		
    
      </script>