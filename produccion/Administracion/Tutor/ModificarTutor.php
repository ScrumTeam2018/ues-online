<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../../../public/images/unnamed.png" type="image/ico" />

    <title>Ues-Online | Administracion</title>

    <!-- Bootstrap -->
    <link href="../../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../../build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><img src="../../../public/images/logo2.png"/><span> Sede Cojutepeque</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info 
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../public/images/descarga.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>John Doe</h2>
              </div>
            </div>
          /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i>Falcutad <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Dashboard</a></li>
                      <li><a href="#">Dashboard2</a></li>
                      <li><a href="#">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Asignatura<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">General Elements</a></li>
                      <li><a href="#">Media Gallery</a></li>
                      <li><a href="#">Typography</a></li>
                      <li><a href="#">Icons</a></li>
                      <li><a href="#">Glyphicons</a></li>
                      <li><a href="#">Widgets</a></li>
                      <li><a href="#">Invoice</a></li>
                      <li><a href="#">Inbox</a></li>
                      <li><a href="#">Calendar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i>Plan de Estudio<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Tables</a></li>
                      <li><a href="#">Table Dynamic</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Estadisticas<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Chart JS</a></li>
                      <li><a href="#">Chart JS2</a></li>
                      <li><a href="#">Moris JS</a></li>
                      <li><a href="#">ECharts</a></li>
                      <li><a href="#">Other Charts</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>Documentacion<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Fixed Sidebar</a></li>
                      <li><a href="#">Fixed Footer</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons 
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../../public/images/user.png" alt="">Monterrosa
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Mi Perfil</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i>Cerrar Session</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <!-- Define la cantidad de notificaciones -->
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="../../../public/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../../../public/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../../../public/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="../../../public/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content Panel de Trabajo -->
        <div class="right_col" role="main">
        
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <h3><strong>Recursos Humanos</strong></h3>
                <br>
              </div>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>Modificar Datos del Personal</small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cargo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Tutor</option>
                            <option>Técnico</option>
                          </select>
                        </div>
                        </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="code-name">Codigo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="code-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="Codigo Tutor" Disabled>
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dui-name">Dui <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="dui-name" name="dui-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="123456-7" Disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nit-name">Nit <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nit-name" name="nit-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="1234-67891-12-3" Disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre de la Persona" Disabled>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="Apellido de la Persona" Disabled>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado Civil</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Soltero</option>
                            <option>Casado</option>
                            <option>Viudo/a</option>
                            <option>Divorciado/a</option>
                            <option>Estudiante</option>
                          </select>
                        </div>
                        </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Especialidad</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <select class="form-control">
                            <option>Licenciado en Matematica</option>
                            <option>Licenciado en Lenguaje</option>
                            <option>Licenciado en Sociales</option>
                            <option>Licenciado en Ciencia</option>
                            <option>Licenciado en Agricultura</option>
                          </select>
                        </div>
                        <button class="btn btn-round btn-success" type="button"><i class=" fa fa-plus">Agregar</i></button>
                      </div>
                     
                     
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contacto</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <button class="btn btn-round btn-default" type="button"><i class=" fa fa-phone"> Telefono</i></button>
						  <button class="btn btn-round btn-default" type="reset"><i class=" fa fa-envelope-o"> E-Mail</i></button>
                          
                         
                        </div>
                      </div>
                     
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-4 col-xs-12">Genero</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="radio">
                            <label>
                              <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios" Disabled> Masculino
                            </label>
                          </div>

                          <div class="radio">
                            <label>
                              <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios" Disabled> Femenino
                            </label>
                            </label>
                          </div>
                        </div>
                      </div>
                    
                      
                    <div class="ln_solid"></div>
                      <div class="form-group" align="right">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-round btn-primary" type="button"><i class=" fa fa-save"> Guardar</i></button>
						  <button class="btn btn-round btn-default" type="reset"><i class=" fa fa-ban"> Cancelar</i></button>
                        </div>
                      </div>
                 
                    </form>
                  </div>
                </div>
              </div>
            </div>
           

<?php  ?>
        </div>
        <!-- /page content -->

        
      </div>
    </div>
    <!-- footer content -->
    <footer>
          <div class="pull-right">
          <img src="../../../public/images/minerva-sf.png" width="20" height="20"/> Universidad de El Salvador 2018.
          </div>
          <div class="clearfix"></div>
        </footer>
</div>
        <!-- /footer content -->

    <!-- jQuery -->
    <script src="../../../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../../../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../../../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../../../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../../../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../../../vendors/Flot/jquery.flot.js"></script>
    <script src="../../../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../../../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../../../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../../../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../../../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../../../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../../../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../../../vendors/moment/min/moment.min.js"></script>
    <script src="../../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../../../build/js/custom.min.js"></script>
	
  </body>
</html>
