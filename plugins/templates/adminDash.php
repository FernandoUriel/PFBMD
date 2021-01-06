<!-- Admin menu -->
    <div class="container-fluid mt-4 pt-5">
        <div class="row">
          <div class="sideMenu col-sm-3 col-md-2">
            <div class="nav flex-column nav-tabs" aria-orientation="vertical">
              <img src="<?php echo SERVERURL; ?>plugins/imgs/Admin.png" alt="" class="ad-PP" />
              <p class="dash-text2 dash-item2">Administrador</p>
              <a
                href="#aprobar"
                id="aprobar-tab"
                class="nav-link active dash-text dash-item"
                data-toggle="tab"
                aria-controls="aprobar"
                aria-selected="true"
                role="tab"
                ><i class="fas fa-user-check"></i> Aprobar</a
              >
              <a
                href="#reporteros"
                id="reporteros-tab"
                class="nav-link dash-text dash-item"
                data-toggle="tab"
                aria-controls="reporteros"
                aria-selected="false"
                role="tab"
                ><i class="fas fa-camera-retro"></i> Reporteros</a
              >
              <a
                href="#secciones"
                id="secciones-tab"
                class="nav-link dash-text dash-item"
                data-toggle="tab"
                aria-controls="secciones"
                aria-selected="false"
                role="tab"
                ><i class="fas fa-list-alt"></i> Secciones</a
              >
              <a
                href="#noticias"
                id="noticias-tab"
                class="nav-link dash-text dash-item"
                data-toggle="tab"
                aria-controls="noticias"
                aria-selected="false"
                role="tab"
                ><i class="fas fa-newspaper"></i> Noticias</a
              >
              <a
                href="#orden"
                id="orden-tab"
                class="nav-link dash-text dash-item"
                data-toggle="tab"
                aria-controls="orden"
                aria-selected="false"
                role="tab"
                ><i class="fas fa-sort-amount-down-alt"></i> Orden</a
              >
            </div>
          </div>

          <div class="col-lg-9">
            <div class="tab-content col-12" id="MytabContent">
              <div
                class="tab-pane fade show active"
                id="aprobar"
                role="tabpanel"
                aria-labelledby="aprobar-tab"
              >
                <div class="d-flex ml-5">
                  <div class="col-4 m-4">
                    <div class="card">
                      <div class="card-body text-center">
                        <img
                          src="plugins/imgs/reportera.jpg"
                          class="img-r-acc"
                          alt=""
                        />
                        <p>Nick name</p>
                        <p>Nombre de usuario</p>
                        <p>Apellido paterno</p>
                        <p>Apellido Materno</p>
                        <p>correo_numero@gmail.com</p>
                        <p>Telefono: 0123 456 789</p>
                        <button class="btn btn-success">Aceptar</button>
                        <button class="btn btn-danger">Declinar</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 m-4">
                    <div class="card">
                      <div class="card-body text-center">
                        <img
                          src="plugins/imgs/reportera.jpg"
                          class="img-r-acc"
                          alt=""
                        />
                        <p>Nick name</p>
                        <p>Nombre de usuario</p>
                        <p>Apellido paterno</p>
                        <p>Apellido Materno</p>
                        <p>correo_numero@gmail.com</p>
                        <p>Telefono: 0123 456 789</p>
                        <button class="btn btn-success">Aceptar</button>
                        <button class="btn btn-danger">Declinar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="d-flex ml-5">
                  <div class="col-4 m-4">
                    <div class="card">
                      <div class="card-body text-center">
                        <img
                          src="plugins/imgs/reportera.jpg"
                          class="img-r-acc"
                          alt=""
                        />
                        <p>Nick name</p>
                        <p>Nombre de usuario</p>
                        <p>Apellido paterno</p>
                        <p>Apellido Materno</p>
                        <p>correo_numero@gmail.com</p>
                        <p>Telefono: 0123 456 789</p>
                        <button class="btn btn-success">Aceptar</button>
                        <button class="btn btn-danger">Declinar</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-4 m-4">
                    <div class="card">
                      <div class="card-body text-center">
                        <img
                          src="plugins/imgs/reportera.jpg"
                          class="img-r-acc"
                          alt=""
                        />
                        <p>Nick name</p>
                        <p>Nombre de usuario</p>
                        <p>Apellido paterno</p>
                        <p>Apellido Materno</p>
                        <p>correo_numero@gmail.com</p>
                        <p>Telefono: 0123 456 789</p>
                        <button class="btn btn-success">Aceptar</button>
                        <button class="btn btn-danger">Declinar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="reporteros"
                role="tabpanel"
                aria-labelledby="reporteros-tab"
              >
                <h3 class="text-center mt-4">Lista de reporteros</h3>
                <table class="table mt-5">
                  <thead class="thead-dark">
                    <tr>
                      <th class="" scope="col">Foto</th>
                      <th class="" scope="col">Nombre</th>
                      <th class="" scope="col">Apellidos</th>
                      <th class="" scope="col">Correo</th>
                      <th class="" scope="col">Telefono</th>
                      <th class="d-none">ID</th>
                      <th class="" scope="col">Borrar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Empieza el primero -->
                    <tr>
                      <th scope="row">
                        <img
                          src="plugins/imgs/reportera.jpg"
                          class="img-r-l"
                          alt=""
                        />
                      </th>
                      <td class="align-middle">Nombre de Usuario</td>
                      <td class="align-middle">Apellido Apellido</td>
                      <td class="align-middle">correo_prueba@gmail.com</td>
                      <td class="align-middle">0123 456 789</td>

                      <form action="">
                        <td class="d-none" name="id-del">id</td>
                        <td class="align-middle">
                          <input
                            type="submit"
                            class="btn btn-danger"
                            value="Eliminar"
                          />
                        </td>
                      </form>
                    </tr>
                    <!-- Empieza el segundo -->
                    <tr>
                      <th scope="row">
                        <img
                          src="plugins/imgs/reportera.jpg"
                          class="img-r-l"
                          alt=""
                        />
                      </th>
                      <td class="align-middle">Nombre de Usuario</td>
                      <td class="align-middle">Apellido Apellido</td>
                      <td class="align-middle">correo_prueba@gmail.com</td>
                      <td class="align-middle">0123 456 789</td>

                      <form action="">
                        <td class="d-none" name="id-del">id</td>
                        <td class="align-middle">
                          <input
                            type="submit"
                            class="btn btn-danger"
                            value="Eliminar"
                          />
                        </td>
                      </form>
                    </tr>
                    <!-- Empieza el tercero -->
                    <tr>
                      <th scope="row">
                        <img
                          src="plugins/imgs/reportera.jpg"
                          class="img-r-l"
                          alt=""
                        />
                      </th>
                      <td class="align-middle">Nombre de Usuario</td>
                      <td class="align-middle">Apellido Apellido</td>
                      <td class="align-middle">correo_prueba@gmail.com</td>
                      <td class="align-middle">0123 456 789</td>

                      <form action="">
                        <td class="d-none" name="id-del">id</td>
                        <td class="align-middle">
                          <input
                            type="submit"
                            class="btn btn-danger"
                            value="Eliminar"
                          />
                        </td>
                      </form>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- Empieza el cuarto -->
              <div
                class="tab-pane fade"
                id="secciones"
                role="tabpanel"
                aria-labelledby="secciones-tab"
              >
                <form action="">
                  <div class="text-center seccion-d rounded mt-4">
                    <h4 class="text-center mt-4 text-light">
                      Agregar una sección
                    </h4>
                    <div class="d-flex">
                      <input
                        class="mt-1 m-4 i-admin"
                        type="text"
                        placeholder="Nombre de la seccion"
                      />
                    </div>
                    <div class="d-flex">
                      <input
                        type="submit"
                        value="Agregar sección"
                        class="btn btn-success mt-2 mb-4 ml-4 i-admin"
                      />
                    </div>
                  </div>
                </form>
                <td class="d-flex mt-5">
                  <table class="table mt-5">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Nombre de la seccion</th>
                        <th scope="col">Color</th>
                        <th scope="col" class="d-none">id seccion</th>
                        <th scope="col">Guardar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Seccion 1</th>
                        <form action="">
                          <td class="d-none">id seccion</td>
                          <td class="">
                            <select
                              class="custom-select s-s-admin"
                              name="color-seccion"
                              id=""
                            >
                              <option selected>Escoja el color</option>
                              <option
                                class="c-p-m"
                                value="morado"
                                style="background-color: purple;"
                                >Morado</option
                              >
                              <option class="c-p-v" value="verde">Verde</option>
                              <option class="c-p-a" value="azul">Azul</option>
                              <option class="c-p-n" value="naranja"
                                >Naranja</option
                              >
                              <option class="c-p-c" value="cafe">Cafe</option>
                              <option class="c-p-g" value="gris">Gris</option>
                            </select>
                          </td>
                          <td>
                            <input
                              type="submit"
                              class="btn btn-success"
                              value="Guardar"
                            />
                          </td>
                        </form>
                      </tr>
                      <tr>
                        <th scope="row">Seccion 1</th>
                        <form action="">
                          <td class="d-none">id seccion</td>
                          <td class="">
                            <select
                              class="custom-select s-s-admin"
                              name="color-seccion"
                              id=""
                            >
                              <option selected>Escoja el color</option>
                              <option class="c-p-m" value="morado"
                                >Morado</option
                              >
                              <option class="c-p-v" value="verde">Verde</option>
                              <option class="c-p-a" value="azul">Azul</option>
                              <option class="c-p-n" value="naranja"
                                >Naranja</option
                              >
                              <option class="c-p-c" value="cafe">Cafe</option>
                              <option class="c-p-g" value="gris">Gris</option>
                            </select>
                          </td>
                          <td>
                            <input
                              type="submit"
                              class="btn btn-success"
                              value="Guardar"
                            />
                          </td>
                        </form>
                      </tr>
                      <tr>
                        <th scope="row">Seccion 1</th>
                        <form action="">
                          <td class="d-none">id seccion</td>
                          <td class="">
                            <select
                              class="custom-select s-s-admin"
                              name="color-seccion"
                              id=""
                            >
                              <option selected>Escoja el color</option>
                              <option class="c-p-m" value="morado"
                                >Morado</option
                              >
                              <option class="c-p-v" value="verde">Verde</option>
                              <option class="c-p-a" value="azul">Azul</option>
                              <option class="c-p-n" value="naranja"
                                >Naranja</option
                              >
                              <option class="c-p-c" value="cafe">Cafe</option>
                              <option class="c-p-g" value="gris">Gris</option>
                            </select>
                          </td>
                          <td>
                            <input
                              type="submit"
                              class="btn btn-success"
                              value="Guardar"
                            />
                          </td>
                        </form>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </div>
              <!-- Comienza quinto -->
              <div
                class="tab-pane fade"
                id="noticias"
                role="tabpanel"
                aria-labelledby="secciones-tab"
              >
                <h3 class="text-center mt-4 mb-4">Aprobar noticias</h3>
                <td class="d-flex mt-5">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Titulo</th>
                        <th scope="col">Reportero</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Seccion</th>
                        <th scope="col">Ir a noticia</th>
                        <th>Aprobar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Titulo de la noticia</th>
                        <td>Nombre Apellido</td>
                        <td>20-05-2020</td>
                        <td>Nombre seccion</td>
                        <td>
                          <a href="noticia.html" target="_blank"
                            >Ir a noticia</a
                          >
                        </td>
                        <td class="d-none" name="id-del">id</td>
                        <td>
                          <a href="" class="btn btn-success"
                            ><i class="fas fa-check-circle"></i
                          ></a>
                          <a href="" class="btn btn-danger"
                            ><i class="fas fa-times-circle"></i
                          ></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Titulo de la noticia</th>
                        <td>Nombre Apellido</td>
                        <td>20-05-2020</td>
                        <td>Nombre seccion</td>
                        <td>
                          <a href="noticia.html" target="_blank"
                            >Ir a noticia</a
                          >
                        </td>
                        <td class="d-none" name="id-del">id</td>
                        <td>
                          <a href="" class="btn btn-success"
                            ><i class="fas fa-check-circle"></i
                          ></a>
                          <a href="" class="btn btn-danger"
                            ><i class="fas fa-times-circle"></i
                          ></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Titulo de la noticia</th>
                        <td>Nombre Apellido</td>
                        <td>20-05-2020</td>
                        <td>Nombre seccion</td>
                        <td>
                          <a href="noticia.html" target="_blank"
                            >Ir a noticia</a
                          >
                        </td>
                        <td class="d-none" name="id-del">id</td>
                        <td>
                          <a href="" class="btn btn-success"
                            ><i class="fas fa-check-circle"></i
                          ></a>
                          <a href="" class="btn btn-danger"
                            ><i class="fas fa-times-circle"></i
                          ></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">Titulo de la noticia</th>
                        <td>Nombre Apellido</td>
                        <td>20-05-2020</td>
                        <td>Nombre seccion</td>
                        <td>
                          <a href="noticia.html" target="_blank"
                            >Ir a noticia</a
                          >
                        </td>
                        <td class="d-none" name="id-del">id</td>
                        <td>
                          <a href="" class="btn btn-success"
                            ><i class="fas fa-check-circle"></i
                          ></a>
                          <a href="" class="btn btn-danger"
                            ><i class="fas fa-times-circle"></i
                          ></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </div>
              <!-- Comienza sexto -->
              <div
                class="tab-pane fade"
                id="orden"
                role="tabpanel"
                aria-labelledby="secciones-tab"
              >
                <h3 class="text-center mt-4 mb-4">Ordenar Secciones</h3>
                <div class="container">
                  <form action="">
                    <div class="form-check mb-4">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="ordenSecciones"
                        id="opcionOrden1"
                        checked
                        value="ordenSec1"
                      />
                      <label class="form-check-label" for="opcionOrden1"
                        >Orden Alfabetico</label
                      >
                    </div>
                    <div class="form-check mb-4">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="ordenSecciones"
                        id="opcionOrden2"
                        value="ordenSec2"
                      />
                      <label class="form-check-label" for="opcionOrden2"
                        >Orden por reciente</label
                      >
                    </div>
                    <div class="form-check mb-4">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="ordenSecciones"
                        id="opcionOrden3"
                        value="ordenSec3"
                      />
                      <label class="form-check-label" for="opcionOrden3"
                        >Orden alfabetico por color</label
                      >
                    </div>
                    <div class="form-check mb-4">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="ordenSecciones"
                        id="opcionOrden4"
                        value="ordenSec4"
                      />
                      <label class="form-check-labe4" for="opcionOrden4"
                        >Orden Alfabetico inverso</label
                      >
                    </div>

                    <div class="form-check mb-4">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="ordenSecciones"
                        id="opcionOrden5"
                        value="ordenSec5"
                      />
                      <label class="form-check-label" for="opcionOrden5"
                        >Orden alfabetico por color inverso</label
                      >
                    </div>
                    <input
                      class="btn btn-success"
                      type="submit"
                      value="Ordenar"
                    />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin admin menu -->

      
      