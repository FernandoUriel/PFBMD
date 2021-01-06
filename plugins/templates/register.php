    <!-- Registro -->
    
       <div class="container register rounded">
         <div class="row">
           <div class="col-2 register-left">
             <img src="<?php echo SERVERURL?>/plugins/imgs/Logo.png" class="img-r" alt="" />
             <h3 class="m-t-2">Bienvenido</h3>
             <p class="m-t-2">
               Unete a 8bits y mantente al corriente de la ultimas noticias o
               forma parte de la familia de 8bits
             </p>
           </div>
           <div class="col-10 register-right">
             <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
               <li class="nav-item">
                 <a
                   class="nav-link active b-1"
                   id="home-tab"
                   data-toggle="tab"
                   href="#home"
                   role="tab"
                   aria-controls="home"
                   aria-selected="true"
                   >Reportero</a
                 >
               </li>
               <li class="nav-item">
                 <a
                   class="nav-link b-1"
                   id="profile-tab"
                   data-toggle="tab"
                   href="#profile"
                   role="tab"
                   aria-controls="profile"
                   aria-selected="false"
                   >Usuario</a
                 >
               </li>
             </ul>
             <div class="tab-content" id="myTabContent">
               <!-- Empieza la seccion de registarse como reportero -->
               <div
                 class="tab-pane fade show active"
                 id="home"
                 role="tabpanel"
                 aria-labelledby="home-tab"
               >
                 <h3 class="text-center h-reg">Registrarse como reportero</h3>
                 <form action="<?php echo SERVERURL?>controllers/usersControllers.php" method="POST" enctype="multipart/form-data">
                 <div class="row register-form">
                   <!-- Inputs izquierdos -->
               
                  <input type="hidden" name="action" value="registro-r">
                   <div class="col-lg-6">
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Nombre/s"
                         name="nombre-r"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Apellido Paterno"
                         name="apePaterno-r"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Apellido Materno"
                         name="apeMaterno-r"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="password"
                         placeholder="Contraseña"
                         name="contra-r"
                         id="pass1"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="password"
                         placeholder="Confirmar Contraseña"
                         id="pass2"
                       />
                     </div>
                   </div>
                   <!-- Inputs derechos -->
                   <div class="col-6">
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Nick name"
                         name="nickname-r"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Telefono(opcional)"
                         name="telefono-r"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Correo"
                         name="correo-r"
                       />
                     </div>
                     <div class="custom-file  form-control-sm">
                       <input
                         type="file"
                         class="custom-file-input"
                         name="img-r"
                         accept=".jpg, .png, .bmp, .gif"
                         id="customFileLang"
                         lang="es"
                       />
                       <label class="custom-file-label" for="customFileLang"
                         >Seleccionar Archivo</label
                       >
                     </div>
                     <div class="form-group align-items-center">
                       <span class="align-bottom" id="message"></span>
                     </div>
                   </div>

                   <div class="row">
                     <input
                       type="submit"
                       class="btn btn-registrarse"
                       value="Registrarse"
                       id="btnReg"
                     />
                   </div>
                   
                 </div>
               </div>
              </form>
               <!-- Termina registro como reportero -->
               <!-- Inicia registro como Usuario -->
               <div
                 class="tab-pane fade show"
                 id="profile"
                 role="tabpanel"
                 aria-labelledby="profile-tab"
               >
                 <h3 class="text-center h-reg">Registrarse como usuario</h3>
                 <form action="<?php echo SERVERURL?>controllers/usersControllers.php" method="POST" enctype="multipart/form-data">
                 <div class="row register-form">
                   <!-- inputs izquierdos -->
                
                   <input type="hidden" name="action" value="registro-u">
                   <div class="col-6">
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Nombre/s"
                         name="nombre-u"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Apellido Paterno"
                         name="apePaterno-u"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Apellido Materno"
                         name="apeMaterno-u"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="password"
                         placeholder="Contraseña"
                         name="contra-u"
                         id="pass3"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="password"
                         placeholder="Confirmar contraseña"
                         id="pass4"
                       />
                     </div>
                   </div>
                   <!-- inputs derechos -->
                   <div class="col-lg-6">
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Nick name"
                         name="nickname-u"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Telefono(opcional)"
                         name="telefono-u"
                       />
                     </div>
                     <div class="form-group">
                       <input
                         type="text"
                         placeholder="Correo"
                         name="correo-u"
                       />
                     </div>
                     <div class="custom-file  form-control-sm">
                      <input
                        type="file"
                        class="custom-file-input"
                        name="img-u"
                        accept=".jpg, .png, .bmp, .gif"
                        id="customFileLang"
                        lang="es"
                      />
                      <label class="custom-file-label" for="customFileLang"
                        >Seleccionar Archivo</label
                      >
                    </div>
                     <div class="form-group">
                       <span id="message2"></span>
                     </div>
                   </div>
                   <div class="row">
                     <input
                       type="submit"
                       class="btn btn-registrarse"
                       value="Registrarse"
                     />
                   </div>
                  
                 </div>
               </div>
              </form>
               <!-- Termina registro de usuario -->
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Registro Fin -->