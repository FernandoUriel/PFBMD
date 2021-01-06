
<!--Perfil -->

<div class="container-fluid mt-5 pt-4">
        <div class="row">
          <div class="sideMenu col-sm-5 col-md-2">
            <div class="nav flex-column nav-tabs" aria-orientation="vertical">
              <img src="plugins/imgs/avatar.png" alt="" class="ad-PP" />
              <h4 class="centered mt-3 dash-text2">Nombre o nombres</h4>
              <h4 class="centered mt-3 dash-text2">Apellido Paterno</h4>
              <h4 class="centered mt-3 dash-text2">Apellido Materno</h4>
              <h4 class="centered mt-3 dash-text2">Nombre de Usuario</h4>
              <h4 class="centered mt-3 dash-text2">Tipo de usuario</h4>
              <h3 class="centered mt-3 dash-text3">correodeprueba@gmail.com</h3>
            </div>
          </div>
          <div class="col-lg-9">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  id="home-tab"
                  data-toggle="tab"
                  href="#home"
                  role="tab"
                  aria-controls="home"
                  aria-selected="true"
                  >Datos</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="profile-tab"
                  data-toggle="tab"
                  href="#profile"
                  role="tab"
                  aria-controls="profile"
                  aria-selected="false"
                  >Seguridad</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  id="contact-tab"
                  data-toggle="tab"
                  href="#contact"
                  role="tab"
                  aria-controls="contact"
                  aria-selected="false"
                  >Foto</a
                >
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="home"
                role="tabpanel"
                aria-labelledby="home-tab"
              >
                <h4 class="text-left mt-3">Datos del usuario</h4>
                <form action="" class="mt-3 d-block">
                  <label class="d-inline-block" for="nombres">Nombre/s</label>
                  <input
                    type="text"
                    name="nombres"
                    value="Nombre del usuario"
                    id="nombinp"
                    disabled
                  />
                  <button
                    class="btn-light border-dark"
                    id="btnName"
                    type="button"
                  >
                    Modificar
                  </button>
                  <input
                    type="submit"
                    class="btn btn-success"
                    value="Cambiar"
                  />
                </form>
                <form action="" class="mt-3 d-block">
                  <label class="d-inline-block" for="apellidoP">Apellido</label>
                  <input
                    type="text"
                    name="apellidoP"
                    value="Apellido Paterno"
                    id="apePin"
                    disabled
                  />
                  <button
                    class="btn btn-light border-dark"
                    id="btnApP"
                    type="button"
                  >
                    Modificar
                  </button>
                  <input
                    type="submit"
                    class="btn btn-success"
                    value="Cambiar"
                  />
                </form>
                <form action="" class="mt-3">
                  <label for="apellidoM">Apellido</label>
                  <input
                    type="text"
                    name="apellidoM"
                    value="Apellido Materno"
                    id="apeMin"
                    disabled
                  />
                  <button
                    class="btn btn-light border-dark"
                    id="btnApM"
                    type="button"
                  >
                    Modificar
                  </button>
                  <input
                    type="submit"
                    class="btn btn-success"
                    value="Cambiar"
                  />
                </form>
                <form action="" class="mt-3">
                  <label for="correo">Correo</label>
                  <input
                    type="text"
                    name="correo"
                    value="correoprueba@gmail.com"
                    id="mailin"
                    disabled
                  />
                  <button
                    class="btn btn-light border-dark"
                    id="btnmail"
                    type="button"
                  >
                    Modificar
                  </button>
                  <input
                    type="submit"
                    class="btn btn-success"
                    value="Cambiar"
                  />
                </form>
                <form action="" class="mt-3">
                  <label for="username">Username</label>
                  <input
                    type="text"
                    name="username"
                    value="User name"
                    id="userin"
                    disabled
                  />
                  <button
                    class="btn btn-light border-dark"
                    id="btnUsN"
                    type="button"
                  >
                    Modificar
                  </button>
                  <input
                    type="submit"
                    class="btn btn-success"
                    value="Cambiar"
                  />
                </form>
                <form action="" class="mt-3">
                  <label for="telefono">Telefono</label>
                  <input
                    type="text"
                    name="telefono"
                    value="0123456789"
                    id="telin"
                    disabled
                  />
                  <button
                    class="btn btn-light border-dark"
                    id="btnTel"
                    type="button"
                  >
                    Modificar
                  </button>
                  <input
                    type="submit"
                    class="btn btn-success"
                    value="Cambiar"
                  />
                </form>
              </div>
              <div
                class="tab-pane fade"
                id="profile"
                role="tabpanel"
                aria-labelledby="profile-tab"
              >
                <div class="text-centered">
                  <h3 class="text-centered mt-3">Cambiar contraseña</h3>
                  <form action="">
                    <div class="mt-3">
                      <label for="contra">Contraseña</label>
                      <input
                        type="password"
                        name="contra"
                        placeholder="contraseña"
                        id="pass1"
                      />
                    </div>
                    <div class="mt-3">
                      <label for="contra22">Confirmar</label>
                      <input
                        type="password"
                        name="contra22"
                        placeholder="contraseña"
                        id="pass2"
                      />
                      <div class="form-group align-items-center">
                        <span class="align-bottom" id="message"></span>
                      </div>
                    </div>
                    <input
                      type="submit"
                      id="btnReg"
                      class="btn btn-success"
                      value="Cambiar contraseña"
                    />
                  </form>
                </div>
                <div class="container"></div>
              </div>
              <div
                class="tab-pane fade"
                id="contact"
                role="tabpanel"
                aria-labelledby="contact-tab"
              >
                <h3 class="text-centered mt-3">Cambiar la foto de perfil</h3>
                <div class="text-centered">
                  <form action="" class="mt-3">
                    <div class="form-group">
                      <label for="exampleFormControlFile1"
                        >Seleccione el archivo</label
                      >
                      <input
                        type="file"
                        class="form-control-file"
                        id="exampleFormControlFile1"
                      />
                    </div>
                    <input
                      type="submit"
                      class="btn btn-success"
                      value="Cambiar foto"
                    />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Perfil Fin -->