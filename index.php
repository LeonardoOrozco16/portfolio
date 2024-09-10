<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css?V=<?php echo rand(0,9999)?>">
    <title>Portfolio - Leo</title>
</head>
<body>
    <header id="header">
    </header>
    <main id="content-section" class="container-fluid">
      <div class="row universalframe">
        <aside id="profile-col" class="col-12 col-md-4 col-lg-4">
          <div id="profile-wrapp" class="content-col position-sticky top-0">
              <div id="pic-wrapp">
              <figure>
                <div class="logo-kuma">
                  <?php include("assets/img/kuma-test.svg"); ?>
                </div>
              </figure>
              </div>
              <h2><span class="name-strong">Leonardo</span> Orozco</h2>
              <h3>Full Stack Developer</h3>
              
              <ul class="rrss-icons">
                <li><a href="#"><span class="rrss-icon github-icon"><?php include("assets/img/icons/rrss/github.svg"); ?></span></a></li>
                <li><a href="#"><span class="rrss-icon linkedin-icon"><?php include("assets/img/icons/rrss/linkedin-box-fill.svg"); ?></span></a></li>
                <li><a href="#"><span class="rrss-icon instagram-icon"><?php include("assets/img/icons/rrss/instagram-line.svg"); ?></span></a></li>
              </ul>

              <span class="neon-btn green"><span class="pill">Disponible para trabajar</span></span>
              <a href="#" class="pill cv-btn"> Descargar CV </a>
          </div>
        </aside>
        <section id="inner-content" class="col-12 col-md-8 col-lg-8">
          <header class="section-head position-sticky top-0">
                <nav class="navbar navbar-expand-lg navbar-icons-nav">
                  <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="menu navbar-nav me-auto mb-2 mb-lg-0" >
                      <li class="nav-item"><a class="nav-link" href="#"><span class="icon home-icon"><?php include("assets/img/icons/home.svg"); ?></span><span>Inicio</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#"><span class="icon about-icon"><?php include("assets/img/icons/about.svg"); ?></span><span>Acerca de mi</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#"><span class="icon experience-icon"><?php include("assets/img/icons/experience.svg"); ?></span><span>Experiencia</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#"><span class="icon knowledge-icon"><?php include("assets/img/icons/knowledge.svg"); ?></span><span>Conocimientos</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#"><span class="icon proyects-icon"><?php include("assets/img/icons/skills.svg"); ?></span><span>Proyectos</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="#"><span class="icon learning-icon"><?php include("assets/img/icons/learning.svg"); ?></span><span>Aprendiendo sobre</span></a></li>
                    </ul> 
                    </div>
                  </div>
                </nav>
          </header>
          <main class="content-col">
            <section id="about" class="content-block">
              <header>
                <h1>Acerca <span>de</span></h1>
              </header>
              <main>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed iusto est omnis praesentium ad dignissimos unde, rerum voluptatem earum commodi rem ex! Quod consequatur explicabo, perspiciatis distinctio iusto enim!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed iusto est omnis praesentium ad dignissimos unde, rerum voluptatem earum commodi rem ex! Quod consequatur explicabo, perspiciatis distinctio iusto enim!</p>
              </main>
            </section>
            <section id="experience" class="content-block">
              <header>
                <h1>Experiencia <span>Laboral</span></h1>
              </header>
              <main class="timeline-wrapp">
                <div class="timeline-block">
                  <div class="timeline-heading">
                    <h2 class="timeline-title">Producciones 5 Sentidos</h2>
                    <h3>Frontend Developer</h3>
                    <span class="timeline-period">2009-2017<span/>
                  </div>
                  <div class="timeline-content">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam illum consequatur, voluptate tenetur perferendis ad quis sed. Amet id quidem dolore est eius odio libero tempora in laboriosam incidunt. In?</p>
                  </div>
                </div>
                <div class="timeline-block">
                  <div class="timeline-heading">
                    <h2 class="timeline-title">Praxis Creativa</h2>
                    <h3>Full Stack</h3>
                    <span class="timeline-period">2017 - 2023<span/>
                  </div>
                  <div class="timeline-content">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam illum consequatur, voluptate tenetur perferendis ad quis sed. Amet id quidem dolore est eius odio libero tempora in laboriosam incidunt. In?</p>
                  </div>
                </div>
                <div class="timeline-block">
                  <div class="timeline-heading">
                    <h2 class="timeline-title">Web Studio Digital</h2>
                    <h3>Full Stack</h3>
                    <span class="timeline-period">2023 - 2024<span/>
                  </div>
                  <div class="timeline-content">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam illum consequatur, voluptate tenetur perferendis ad quis sed. Amet id quidem dolore est eius odio libero tempora in laboriosam incidunt. In?</p>
                  </div>
                </div>
              </main>
            </section>
            <section id="skills" class="content-block">
              <header>
                <h1>Conocimientos <span>Adquiridos</span></h1>
              </header>
              <main>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed iusto est omnis praesentium ad dignissimos unde, rerum voluptatem earum commodi rem ex! Quod consequatur explicabo, perspiciatis distinctio iusto enim!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed iusto est omnis praesentium ad dignissimos unde, rerum voluptatem earum commodi rem ex! Quod consequatur explicabo, perspiciatis distinctio iusto enim!</p>
              </main>
            </section>
            <section id="proyects" class="content-block">
              <header>
                <h1>Proyectos <span>Realizados</span></h1>
              </header>
              <main>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed iusto est omnis praesentium ad dignissimos unde, rerum voluptatem earum commodi rem ex! Quod consequatur explicabo, perspiciatis distinctio iusto enim!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed iusto est omnis praesentium ad dignissimos unde, rerum voluptatem earum commodi rem ex! Quod consequatur explicabo, perspiciatis distinctio iusto enim!</p>
                <div id="proyects-wrapp" class="container">
                  <div class="row">
                    <!-- item -->
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <!-- / item-->
                     <!-- item -->
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <!-- / item-->
                     <!-- item -->
                    <div class="col">
                      <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    </div>
                    <!-- / item-->
                  </div>
                </div>
              </main>
            </section>
            <section id="currently_learing" class="content-block">
              <header>
                <h1>Actualmente  <span>Aprendiendo</span></h1>
              </header>
              <main>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed iusto est omnis praesentium ad dignissimos unde, rerum voluptatem earum commodi rem ex! Quod consequatur explicabo, perspiciatis distinctio iusto enim!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, sed iusto est omnis praesentium ad dignissimos unde, rerum voluptatem earum commodi rem ex! Quod consequatur explicabo, perspiciatis distinctio iusto enim!</p>
              </main>
            </section>
          </main>
        </section>
      </div>
    </main>
    <footer id="footer-section"></footer>
    <div id="light-dark-switch">
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="visualTheme">
        <label class="form-check-label" for="visualTheme"></label>
      </div>
    </div>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/github.js"></script>
</body>
</html>