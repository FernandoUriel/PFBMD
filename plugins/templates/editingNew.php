
<!-- Escribir noticia -->
   <div class="container container2">
        <div class="col-lg-12">
          <div class="row">
            <h2>Editar noticia</h2>
          </div>
          <form action="">
            <div class="form-row">
              <h4 class="text-secondary">Ubicación</h4>
            </div>
            <div class="form-group form-row">
              <input
                type="text"
                class="col-10"
                placeholder="Colonia"
                name="colonia-n"
                required
              />
            </div>
            <div class="form-group form-row">
              <input
                type="text"
                class="col-10"
                placeholder="Ciudad"
                name="ciudad-n"
                required
              />
            </div>
            <div class="form-group form-row">
              <input
                type="text"
                class="col-10"
                placeholder="Pais"
                name="pais-n"
                required
              />
            </div>
            <div class="form-row">
              <h4 class="text-secondary">Fecha</h4>
            </div>
            <div class="form-group form-row">
              <input
                type="text"
                class="col-6"
                placeholder="Hora de acontecimiento formato: 24hrs"
                name="hora-n"
                required
              />
            </div>
            <div class="form-group form-row">
              <input
                type="text"
                class="col-6"
                placeholder="Fecha de acontecimiento formato: yyyy-mm-dd"
                name="fecha-n"
                required
              />
            </div>
            <div class="form-row">
              <h4 class="text-secondary">Noticia</h4>
            </div>
            <div class="form-group form-row">
              <input
                type="text"
                class="col-10"
                placeholder="Titulo"
                name="titulo-n"
              />
            </div>
            <div class="form-row">
              <h6 class="text-secondary">
                Secciones (sección o secciones a la/s que pertenece esta
                noticia)
              </h6>
            </div>
            <div class="form-group form-row">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="defaultCheck1"
                />
                <label class="form-check-label" for="defaultCheck1">
                  PS4
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="defaultCheck1"
                />
                <label class="form-check-label" for="defaultCheck1">
                  Xbox
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="defaultCheck1"
                />
                <label class="form-check-label" for="defaultCheck1">
                  PC
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="checkbox"
                  value=""
                  id="defaultCheck1"
                />
                <label class="form-check-label" for="defaultCheck1">
                  Switch
                </label>
              </div>
            </div>
            <div class="form-group form-row">
              <input
                type="text"
                class="col-10"
                placeholder="Descripcion"
                name="descripcion-n"
                required
              />
            </div>
            <div class="form-group form-row">
              <textarea name="" id="" cols="82" rows="10" required></textarea>
            </div>
            <div class="form-group form-row">
              <input
                type="text"
                class="col-10"
                name="noticia-n"
                id=""
                placeholder="Palabras claves, debe ser separado por espacios"
                required
              />
            </div>
            <div class="form-row">
              <h6 class="text-secondary">¿Es tu noticia urgente?</h6>
            </div>
            <div class="form-check form-row">
              <input
                class="form-check-input"
                type="radio"
                name="siRadio"
                id="siRadio"
                value="option1"
                checked
              />
              <label class="form-check-label" for="siRadio">
                Si
              </label>
            </div>
            <div class="form-check form-row">
              <input
                class="form-check-input"
                type="radio"
                name="noRadio"
                id="noRadio"
                value="option2"
              />
              <label class="form-check-label" for="noRadio">
                No
              </label>
            </div>
            <div class="form-row space-b"></div>
            <div class="form-row">
              <h6 class="text-secondary">Añade imagenes a la noticia</h6>
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1" class="text-secondary"
                >Imagen 1</label
              >
              <input
                type="file"
                class="form-control-file"
                id="exampleFormControlFile1"
                name="img1-n"
                required
              />
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile2" class="text-secondary"
                >Imagen 2(opcional)</label
              >
              <input
                type="file"
                class="form-control-file"
                name="img2-n"
                id="exampleFormControlFile2"
              />
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile3" class="text-secondary"
                >Imagen 3(opcional)</label
              >
              <input
                type="file"
                class="form-control-file"
                name="img3-n"
                id="exampleFormControlFile3"
              />
            </div>
            <div class="form-row space-b"></div>
            <div class="form-row">
              <h6 class="text-secondary">Añade un video(opcional)</h6>
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile3" class="text-secondary"
                >Video(opcional)</label
              >
              <input
                type="file"
                class="form-control-file"
                name="vid-n"
                id="exampleFormControlFile3"
              />
            </div>
            <div class="form-row">
              <input type="submit" value="Subir noticia" class="btn btn-Log" />
            </div>
          </form>
        </div>
      </div>
      <!-- Fin Escribir noticia -->