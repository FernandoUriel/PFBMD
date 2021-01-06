<!-- Carrusel -->
    <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active">
            <img src="<?php echo SERVERURL?>/plugins/imgs/C-Royale.jpg" alt="" class="c-item-1" />
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">First Slide</h2>
              <p class="lead">This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item">
            <img src="<?php echo SERVERURL?>/plugins/imgs/League.jpg" alt="" class="c-item-1" />
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Second Slide</h2>
              <p class="lead">This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item">
            <img
              src="<?php echo SERVERURL?>/plugins/imgs/smash-ultimate.png"
              alt=""
              class="c-item-1"
            />
            <div class="carousel-caption d-none d-md-block">
              <h2 class="display-4">Third Slide</h2>
              <p class="lead">This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Carrusel Fin -->

      <!-- Noticias -->
      <div class="container cont1 col-lg-12">
        <div class="row">
          <div class="container col-lg-7 mt-6">
            <h2 class="text-left ml-5 h2-l">Ultimas noticias</h2>
            <!-- 1ra Carta -->
            <div class="row m-3">
              <div class="col-lg-12">
                <div class="media border border-dark rounded">
                  <img
                    src="<?php echo SERVERURL?>/plugins/imgs/Noticias.jpg"
                    class="align-self-center img-c1 m-3"
                    alt="..."
                  />
                  <div class="media-body col-lg-8 m-3">
                    <a href="<?php echo SERVERURL;?>/new"
                      ><h5 class="card-title">Titulo</h5></a
                    >
                    <a href="#"><h5 class="m-t">categoria</h5></a>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                    scelerisque ante sollicitudin. Cras purus odio, vestibulum
                    in vulputate at, tempus viverra turpis. Fusce condimentum
                    nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                    in faucibus.
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin -->
            <!-- 2da Carta -->
            <div class="row m-3">
              <div class="col-lg-12">
                <div class="media border border-dark rounded">
                  <img
                    src="<?php echo SERVERURL?>/plugins/imgs/Noticias.jpg"
                    class="align-self-center img-c1 m-3"
                    alt="..."
                  />
                  <div class="media-body col-lg-8 m-3">
                    <a href="<?php echo SERVERURL;?>/new"
                      ><h5 class="card-title">Titulo</h5></a
                    >
                    <a href="#"><h5 class="m-t">categoria</h5></a>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                    scelerisque ante sollicitudin. Cras purus odio, vestibulum
                    in vulputate at, tempus viverra turpis. Fusce condimentum
                    nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                    in faucibus.
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin -->
            <!-- 3ra Carta -->
            <div class="row m-3 mb-4">
              <div class="col-lg-12">
                <div class="media border border-dark rounded">
                  <img
                    src="<?php echo SERVERURL?>/plugins/imgs/Noticias.jpg"
                    class="align-self-center img-c1 m-3"
                    alt="..."
                  />
                  <div class="media-body col-lg-8 m-3">
                    <a href="<?php echo SERVERURL;?>/new"
                      ><h5 class="card-title">Titulo</h5></a
                    >
                    <a href="#"><h5 class="m-t">categoria</h5></a>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                    scelerisque ante sollicitudin. Cras purus odio, vestibulum
                    in vulputate at, tempus viverra turpis. Fusce condimentum
                    nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                    in faucibus.
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Fin -->
            <hr class="border-dark m-3" />
            <!-- Fin de Media -->

            <!-- Media 2 -->
            <h2 class="mt-4 h2-l">Ultimas noticias</h2>
            <div class="row">
              <!-- Noticia 1 -->
              <div class="card-group m-3">
                <div class="card border-dark">
                  <img
                    class="card-img-top"
                    src="<?php echo SERVERURL?>/plugins/imgs/Noticias.jpg"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <a href=""> <h5 class="card-title">Card title</h5></a>
                    <p class="card-text">
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
                <div class="card border-dark">
                  <img
                    class="card-img-top"
                    src="<?php echo SERVERURL?>/plugins/imgs/Noticias.jpg"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <a href=""> <h5 class="card-title">Card title</h5></a>
                    <p class="card-text">
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
                <div class="card border-dark">
                  <img
                    class="card-img-top"
                    src="<?php echo SERVERURL?>/plugins/imgs/Noticias.jpg"
                    alt="Card image cap"
                  />
                  <div class="card-body">
                    <a href=""> <h5 class="card-title">Card title</h5></a>
                    <p class="card-text">
                      This is a wider card with supporting text below as a
                      natural lead-in to additional content. This content is a
                      little bit longer.
                    </p>
                    <p class="card-text">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Noticia 1 Fin -->
            </div>
            <!-- Media 2 Fin -->
          </div>

          <div class="container col-lg-5">
            <h2 class="ml-5 h2-l">Ultimas noticias</h2>
            <!-- Card 1 -->
            <div class="container col-sm-6 m-1">
              <div class="card border-dark">
                <img
                  src="<?php echo SERVERURL?>/plugins/imgs/Noticias.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <a href=""> <h5 class="card-title">Card title</h5></a>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                  <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </p>
                </div>
              </div>
            </div>
            <!-- Fin -->
            <!-- Card 2 -->
            <div class="container col-sm-6 m-1">
              <div class="card border-dark">
                <img
                  src="<?php echo SERVERURL?>/plugins/imgs/Noticias.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <a href=""> <h5 class="card-title">Card title</h5></a>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                  <p>
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </p>
                </div>
              </div>
            </div>
            <!-- Fin -->
            <!-- Card 3 -->
            <div class="container col-sm-6 m-1">
              <div class="card border-dark">
                <img
                  src="<?php echo SERVERURL?>/plugins/imgs/Noticias.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <a href=""> <h5 class="card-title">Card title</h5></a>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                  <p class="card-text">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </p>
                </div>
              </div>
            </div>
            <!-- Fin -->
            <!-- Card 4 -->
          </div>
        </div>
      </div>
