<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Laboratorio de Automatización</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="index.php" style="font-family: Dosis, sans-serif;color:white; text-align: center;font-weight: bold;font-style: normal;font-size: 34px;line-height: 24px;letter-spacing: 9px;">LABREMAUT</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <!--<input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>-->
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-check-fill" viewBox="0 0 20 20"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                <li>
                  <a class="dropdown-item" href="#">Salir</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                DASHBOARD
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-card-checklist"></i></span>
                <span>Página principal</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>

            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Interface
              </div>
            </li>

            
            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"><i class="bi bi-display"></i></span>
                <span>Laboratorios</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">



                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-cloud-plus-fill"></i
                      ></span>
                      <span>Añadir Laboratorio</span>
                      
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-exclamation-triangle"></i
                      ></span>
                      <span>Editar Laboratorio</span>
                      
                    </a>
                  </li>
                </ul>

                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="laboratory.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-list-check"></i
                      ></span>
                      <span>Información</span>
                      
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            




            <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts2"
              >
                <span class="me-2"><i class="bi bi-person-fill"></i></span>
                <span>Docentes</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts2">



                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="docregister.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-person-plus-fill"></i
                      ></span>
                      <span>Añadir Docentes</span>
                      
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-exclamation-triangle"></i
                      ></span>
                      <span>Editar Docentes</span>
                      
                    </a>
                  </li>
                </ul>

                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="listd.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-list-check"></i
                      ></span>
                      <span>Listado de Docentes</span>
                      
                    </a>
                  </li>
                </ul>
              </div>
            </li>


        <li>
              <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts3"
              >
                <span class="me-2"><i class="bi bi-people-fill"></i></span>
                <span>Estudiantes</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts3">



                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="stregister.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-person-plus-fill"></i
                      ></span>
                      <span>Añadir estudiantes</span>
                      
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-exclamation-triangle"></i
                      ></span>
                      <span>Editar estudiantes</span>
                      
                    </a>
                  </li>
                </ul>

                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="lists.php" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-list-check"></i
                      ></span>
                      <span>Listado de estudiantes</span>
                      
                    </a>
                  </li>
                </ul>
              </div>
            </li>


            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Pages</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Estadísticas</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tablas</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Listado de docentes</h4>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card">
              <div class="card-header">
                <span><i class="bi bi-table me-2"></i></span> Listado
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                  >
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Correo institucional</th>
                        <th>Password</th>
                        <th>ID</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>XXXIEI BASYU</td>
                        <td>000000</td>
                        <td>00000000000</td>
                        <td>000000000</td>
                        <td>9</td>
                      </tr> 
                      <tr>
                        <td>PPPL OOOP</td>
                        <td>000000</td>
                        <td>00000000000</td>
                        <td>000000000</td>
                        <td>7</td>
                      </tr> 
                      <tr>
                        <td>SSSSDRB MNNN</td>
                        <td>000000</td>
                        <td>00000000000</td>
                        <td>000000000</td>
                        <td>8</td>
                      </tr> 
                      <tr>
                        <td>GTRE BNNNN</td>
                        <td>000000</td>
                        <td>00000000000</td>
                        <td>000000000</td>
                        <td>5</td>
                      </tr> 
                      <tr>
                        <td>HDDDD EER</td>
                        <td>000000</td>
                        <td>00000000000</td>
                        <td>000000000</td>
                        <td>4</td>
                      </tr> 
                      <tr>
                        <td>WERTTTT RRR</td>
                        <td>000000</td>
                        <td>00000000000</td>
                        <td>000000000</td>
                        <td>3</td>
                      </tr> 
                      <tr>
                        <td>Donna Snider</td>
                        <td>000000</td>
                        <td>00000000000</td>
                        <td>000000000</td>
                        <td>1</td>
                      </tr> 
            </tbody>
            

                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>