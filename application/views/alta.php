 <!-- Page -->
 <div class="page">
     <div class="page-content">

         <div class="panel panel-primary">
         <div class="panel-heading">
            <h3 class="panel-title">Alta de usuarios</h3>
            </div>
            <br>
             <div class="panel-body">
                 <!-- inicia card body-->
                 <div class="row">
                     <div class="col-12">
                         <button class="btn btn-primary float-right" data-toggle="modal"
                             data-target="#modalClientes">Nuevo</button>
                     </div>
                 </div>
                 <div class="row my-3">
                     <div class="col-12">
                         <table class="table table-striped table-bordered">
                             <thead>
                                 <tr>
                                     <th>Nombre</th>
                                     <th>Correo</th>
                                     <th>Genero</th>
                                     <th>Telefono</th>
                                     <th>Options</th>
                                 </tr>
                             </thead>
                             <tbody>
                                    <th>joselo</th>
                                     <th>a@a.com</th>
                                     <th>Masculino</th>
                                     <th>4429191911</th>
                                     <th>
                                     <button>actualizar</button>
                                     <button>Status</button>
                                     </th>
                             </tbody>
                         </table>
                     </div>
                 </div>
                 <!-- termina card body-->
             </div>
         </div>

     </div>
 </div>

 <div class="modal fade" tabindex="-1" role="dialog" id="modalClientes">
     <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Registro de Usuario</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="col-lg-12">
             <div class="row">                              
                     <div class="col-md-3">
                         <!-- Panel Static Labels -->
                         <div class="panel panel-info">
                             <div class="panel-heading">
                                 <h3 class="panel-title">Informacion usuario</h3>
                             </div>
                             <div class="panel-body container-fluid border">
                                 <form autocomplete="off">
                                     <br>
                                     <div class="form-group form-material floating" data-plugin="formMaterial">        <input type="email" class="form-control" id="emailUser" name="emailUser"
                                             placeholder="" />
                                     <label class="floating-label">Email</label>
                                     </div>
<!--
                                     <div class="form-group form-material floating" data-plugin="formMaterial">
                                         <label class="form-control-label" for="inputEmail">Password</label>
                                         <input type="password" class="form-control" id="passUser" name="passUser"
                                             placeholder="" />
                                     </div>
                                     <div class="form-group form-material" data-plugin="formMaterial">
                                         <label class="form-control-label" for="inputPassword">Repeat Password</label>
                                         <input type="password" class="form-control" id="RpassUser" name="RpassUser"
                                             placeholder="" />
                                     </div>
-->
                                     <div class="form-group form-material floating" data-plugin="formMaterial">
                                         <label class="form-control-label" for="select">Tipo de usuario</label>
                                         <select class="form-control" id="typeUser" name="typeUser">
                                             <option selected disabled>Seleccione</option>
                                             <option>Medico</option>
                                             <option>Recepcionista</option>
                                             <option>Cobranza</option>
                                         </select>
                                     </div>
                                 </form>
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
                                 <form autocomplete="off">
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="form-group form-material floating row" data-plugin="formMaterial">
                                                 <div class="col-md-6">                                                     
                                                     <input type="text" class="form-control" id="namePerson"
                                                         name="namePerson" placeholder="" />
                                                    <label class="floating-label">Name</label>    
                                                 </div>
                                                 <div class="col-md-6">  
                                                     <input type="text" class="form-control" id="lastnamePerson"
                                                         name="lastnamePerson" placeholder="" />
                                                         <label class="floating-label">Lastname</label> 
                                                 </div>
                                             </div>
                                             <div class="form-group form-material floating row" data-plugin="formMaterial">
                                                 <div class="col-md-6"> 
                                                     <input type="text" class="form-control" id="namePerson"
                                                         name="namePerson" placeholder="" />
                                                         <label class="floating-label">Lastname</label> 
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-control-label" for="Birtdate">Birtdate</label>
                                                     <input type="date" class="form-control" id="birtdate"
                                                         name="birtdate" placeholder="" />
                                                 </div>
                                             </div>
                                             <div class="form-group form-material floating row" data-plugin="formMaterial">
                                                 <div class="col-md-6">
                                                     <input type="text" class="form-control" id="namePerson"
                                                         name="namePerson" placeholder="" />
                                                         <label class="floating-label">Lastname</label> 
                                                 </div>
                                                 <div class="col-md-6">
                                                     <label class="form-control-label" for="Genero">Genero</label>
                                                     <select class="form-control" id="genre" name="genre">
                                                         <option selected disabled>Seleccione</option>
                                                         <option>Masculino</option>
                                                         <option>Femenino</option>
                                                     </select>

                                                 </div>
                                             </div>
                                             <div class="form-group form-material floating row" data-plugin="formMaterial">
                                                 <div class="col-md-6">
                                                     <input type="text" class="form-control" id="CURP" name="CURP"
                                                         placeholder="" />
                                                         <label class="floating-label">CURP</label> 
                                                 </div>
                                                 <div class="col-md-6">
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
                                             <div class="form-group form-material floating row" data-plugin="formMaterial">
                                                 <div class="col-md-6">
                                                     <input type="text" class="form-control" id="phonePerson"
                                                         name="phonePerson" placeholder="" />
                                                         <label class="floating-label">Telefono</label> 
                                                 </div>
                                                 <div class="col-md-6">
                                                 </div>
                                             </div>
                                 </form>
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
                         <form autocomplete="off">
                             <br>
                             <div class="form-group form-material floating" data-plugin="formMaterial">
                                 
                                 <input type="text" class="form-control" id="street" name="street" placeholder="" />
                                 <label class="floating-label">Calle</label> 
                             </div>                             

                             <div class="form-group form-material floating row" data-plugin="formMaterial">
                                 <div class="col-md-6">                                     
                                     <input type="text" class="form-control" id="numberInt" name="numberInt"
                                         placeholder="" />
                                    <label class="floating-label">Numero Interior</label> 
                                 </div>
                                 <div class="col-md-6">
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
                             <div class="form-group form-material floating row" data-plugin="formMaterial">
                                 <div class="col-md-6">                                     
                                     <input type="text" class="form-control" id="postalCode" name="postalCode"
                                         placeholder="" />
                                         <label class="floating-label">Codigo Postal</label>
                                 </div>
                                 <div class="col-md-6">
                                 </div>
                             </div>
                     </div>
                     </form>
                 </div>
             </div>
         </div>
         <!-- End Panel Static Labels -->
     </div>
     <div class="modal-footer">
         <button>save</button>
     </div>

 </div>
 </div>
 </div>