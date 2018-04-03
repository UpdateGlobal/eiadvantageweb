    <!-- Sidebar -->
    <aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
      <header class="sidebar-header">
        <span class="logo">
          <a href="metatags.php">
            <img src="assets/img/logo_update.png" alt="logo">
          </a>
        </span>
        <span class="sidebar-toggle-fold"></span>
      </header>

      <nav class="sidebar-navigation">
        <ul class="menu">

          <li class="menu-category">Sitio web</li>

          <li class="menu-item <?php echo ($menu == "inicio" ? "active" : "")?>">
            <a class="menu-link <?php echo ($menu == "inicio" ? "open" : "")?>" href="#">
              <span class="icon fa fa-home"></span>
              <span class="title">Inicio</span>
              <span class="arrow"></span>
            </a>

            <ul class="menu-submenu" <?php echo ($menu == "inicio" ? "style='display:block;'" : "")?> >
              <li class="menu-item">
                <a class="menu-link" href="metatags.php">
                  <span class="dot"></span>
                  <span class="title">Metatags</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="banners.php">
                  <span class="dot"></span>
                  <span class="title">Banners</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="carrusel.php">
                  <span class="dot"></span>
                  <span class="title">Clientes</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="contenidos-inicio.php">
                  <span class="dot"></span>
                  <span class="title">Contenidos</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item <?php echo ($menu == "nosotros" ? "active" : "")?>">
            <a class="menu-link" href="nosotros.php">
              <span class="icon fa fa-info"></span>
              <span class="title">Nosotros</span>
            </a>
          </li>

          <li class="menu-item <?php echo ($menu == "testimonios" ? "active" : "")?>">
            <a class="menu-link" href="testimonios.php">
              <span class="icon fa fa-comments-o"></span>
              <span class="title">Testimonios</span>
            </a>
          </li>

          <li class="menu-item <?php echo ($menu == "inteligencia" ? "active" : "")?>">
            <a class="menu-link" href="inteligencia.php">
              <span class="icon fa fa-heart"></span>
              <span class="title">Inteligencia Emocional</span>
            </a>
          </li>

          <li class="menu-item <?php echo ($menu == "casos" ? "active" : "")?>">
            <a class="menu-link" href="casos.php">
              <span class="icon fa fa-cubes"></span>
              <span class="title">Casos de Estudio</span>
            </a>
          </li>

          <li class="menu-item <?php echo ($menu == "programas" ? "active" : "")?>">
            <a class="menu-link" href="programas.php">
              <span class="icon fa fa-cogs"></span>
              <span class="title">Programas</span>
            </a>
          </li>

          <li class="menu-item <?php echo ($menu == "evaluaciones" ? "active" : "")?>">
            <a class="menu-link" <?php echo ($menu == "evaluaciones" ? "open" : "") ?> href="#">
              <span class="icon fa fa-file-text"></span>
              <span class="title">Evaluaciones</span>
              <span class="arrow"></span>
            </a>
            <ul class="menu-submenu" <?php echo ($menu == "evaluaciones" ? "style='display:block;'" : "")?> >
              <li class="menu-item">
                <a class="menu-link" href="evaluaciones.php">
                  <span class="dot"></span>
                  <span class="title">Principal</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="trabajo.php">
                  <span class="dot"></span>
                  <span class="title">Compromiso Trabajadores</span>
                </a>
              </li>

            </ul>
          </li>

          <li class="menu-item <?php echo ($menu == "partner" ? "active" : "")?>">
            <a class="menu-link <?php echo ($menu == "partner" ? "open" : "") ?>" href="#">
              <span class="icon fa fa-user"></span>
              <span class="title">Partners</span>
              <span class="arrow"></span>
            </a>

            <ul class="menu-submenu" <?php echo ($menu == "partner" ? "style='display:block;'" : "")?> >
              <li class="menu-item">
                <a class="menu-link" href="partner-principal.php">
                  <span class="dot"></span>
                  <span class="title">Principal</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="partner.php">
                  <span class="dot"></span>
                  <span class="title">Mensajes</span>
                </a>
              </li>

            </ul>
          </li>

          <li class="menu-item <?php echo ($menu == "certificaciones" ? "active" : "")?>">
            <a class="menu-link <?php echo ($menu == "certificaciones" ? "open" : "") ?>" href="#">
              <span class="icon fa fa-graduation-cap"></span>
              <span class="title">Certificaciones</span>
              <span class="arrow"></span>
            </a>

            <ul class="menu-submenu" <?php echo ($menu == "certificaciones" ? "style='display:block;'" : "")?>>
              
              <li class="menu-item">
                <a class="menu-link" href="certificaciones-principal.php">
                  <span class="dot"></span>
                  <span class="title">Principal</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="certificaciones.php">
                  <span class="dot"></span>
                  <span class="title">Proximas Certificaciones</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="inscripciones.php">
                  <span class="dot"></span>
                  <span class="title">Inscripciones</span>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="menu-category">Blog</li>
          
          <li class="menu-item <?php echo ($menu == "noticias" ? "active" : "")?>">
            <a class="menu-link <?php echo ($menu == "noticias" ? "open" : "") ?>" href="#">
              <span class="icon fa fa-newspaper-o"></span>
              <span class="title">Blog</span>
              <span class="arrow"></span>
            </a>

            <ul class="menu-submenu" <?php echo ($menu == "noticias" ? "style='display:block;'" : "")?> >
              <li class="menu-item">
                <a class="menu-link" href="noticias-categorias.php">
                  <span class="dot"></span>
                  <span class="title">Categorias</span>
                </a>
              </li>

              <li class="menu-item">
                <a class="menu-link" href="noticias.php">
                  <span class="dot"></span>
                  <span class="title">Blog</span>
                </a>
              </li>

            </ul>
          </li>

          <li class="menu-category">Contacto</li>

          <li class="menu-item <?php echo ($menu == "contacto" ? "active" : "")?>">
            <a class="menu-link <?php echo ($menu == "contacto" ? "open" : "") ?>" href="#">
              <span class="icon fa fa-map-o"></span>
              <span class="title">Contacto</span>
              <span class="arrow"></span>
            </a>

            <ul class="menu-submenu" <?php echo ($menu == "contacto" ? "style='display:block;'" : "")?>>
              <li class="menu-item">
                <a class="menu-link" href="contacto.php">
                  <span class="dot"></span>
                  <span class="title">Contacto</span>
                </a>
              </li>
              <li class="menu-item">
                <a class="menu-link" href="mensajes.php">
                  <span class="dot"></span>
                  <span class="title">Mensajes</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="menu-item <?php echo ($menu == "social" ? "active" : "")?>">
            <a class="menu-link" href="sociales.php">
              <span class="icon fa fa-share-alt"></span>
              <span class="title">Redes Sociales</span>
            </a>
          </li>

        </ul>
      </nav>

    </aside>
    <!-- END Sidebar -->