<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    
    <title>admin | MedSCope</title>
    
    <link rel="apple-touch-icon" href="<?=base_url('src/classic/mmenu/assets/images/apple-touch-icon.png');?>">
    <link rel="shortcut icon" href="<?=base_url('src/classic/mmenu/assets/images/favicon.ico');?>">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?=base_url('src/classic/global/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('src/classic/global/css/bootstrap-extend.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('src/classic/mmenu/assets/css/site.min.css');?>">
  
    <!-- Plugins -->
    <link rel="stylesheet" href="<?=base_url('src/classic/global/vendor/animsition/animsition.css');?>">
    <link rel="stylesheet" href="<?=base_url('src/classic/global/vendor/asscrollable/asScrollable.css');?>">
    <link rel="stylesheet" href="<?=base_url('src/classic/global/vendor/switchery/switchery.css');?>">
    <link rel="stylesheet" href="<?=base_url('src/classic/global/vendor/intro-js/introjs.css');?>">
    <link rel="stylesheet" href="<?=base_url('src/classic/global/vendor/slidepanel/slidePanel.css');?>">
    <link rel="stylesheet" href="<?=base_url('src/classic/global/vendor/jquery-mmenu/jquery-mmenu.css');?>">
    <link rel="stylesheet" href="<?=base_url('src/classic/global/vendor/flag-icon-css/flag-icon.css');?>">
        <link rel="stylesheet" href="<?=base_url('src/classic/mmenu/assets/examples/css/pages/user.css');?>">
    
    
       
        

        
        
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="<?=base_url('src/classic/global/fonts/web-icons/web-icons.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('src/classic/global/fonts/brand-icons/brand-icons.min.css');?>">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    
    <!--[if lt IE 9]>
    <script src="../../../global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    
    <!--[if lt IE 10]>
    <script src="../../../global/vendor/media-match/media.match.min.js"></script>
    <script src="../../../global/vendor/respond/respond.min.js"></script>
    <![endif]-->
    
    <!-- Scripts -->
    <script src="<?=base_url('src/classic/global/vendor/breakpoints/breakpoints.js');?>"></script>
    
    
    <script>
      Breakpoints();
    </script>
    <style>
    .page {background-color: #dfdfdf;} 
    .modal-footer {background-color: #21292e;}    
    .panel-body {
    background:#FFFFFF;}

    .gradient01 {
  padding: 1rem;
  border-width: 5px;
  border-style: solid;
  border-image: 
    linear-gradient(
      to bottom, 
      green, 
      rgba(0, 0, 0, 0)
    ) 1 100%;
}

th {
  text-align: center;  
  }


/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

    </style>
  </head>
  <body class="animsition site-navbar-small page-user">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <nav class="site-navbar navbar  navbar-fixed-top navbar-mega" role="navigation">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
          data-toggle="menubar">
          <span class="sr-only">Toggle navigation</span>
          <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
          <img class="navbar-brand-logo" src="" title="">
          <span class="navbar-brand-text hidden-xs-down"></span>
        </div>
        <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-search"
          data-toggle="collapse">
          <span class="sr-only">Toggle Search</span>
          <i class="icon wb-search" aria-hidden="true"></i>
        </button>
      </div>
    
      <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse  navbar-collapse-toolbar" id="site-navbar-collapse">
          <!-- Navbar Toolbar -->
          <ul class="nav navbar-toolbar">
            <li class="nav-item hidden-float" id="toggleMenubar">
              <a class="nav-link" data-toggle="menubar" href="#" role="button">
                <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
              </a>
            </li>
            <li class="nav-item hidden-sm-down" id="toggleFullscreen">
              <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                <span class="sr-only">Toggle fullscreen</span>
              </a>
            </li>
            <li class="nav-item hidden-float">
              <a class="nav-link icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                role="button">
                <span class="sr-only">Toggle Search</span>
              </a>
            </li>
            <li class="nav-item dropdown dropdown-fw dropdown-mega">
              <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade"
                role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
              <div class="dropdown-menu" role="menu">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-md-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu m-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/animation.html">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/buttons.html">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/colors.html">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/dropdowns.html">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/icons.html">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/lightbox.html">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu m-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/modals.html">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/panel-structure.html">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../structure/overlay.html">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/tooltip-popover.html ">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../advanced/scrollable.html">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                                href="../uikit/typography.html">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5>Media
                        <span class="badge badge-pill badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail m-0" href="javascript:void(0)">
                            <img class="w-full" src="../../../global/photos/placeholder.png" alt="..." />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-4">
                      <h5 class="mb-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                        role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                              aria-expanded="false" aria-controls="siteMegaCollapseOne">
                              Collapsible Group Item #1
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                            role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque accusamus
                              clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                              data-parent="#siteMegaAccordion" aria-expanded="false"
                              aria-controls="siteMegaCollapseTwo">
                              Collapsible Group Item #2
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                            role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur mortis
                              animus adoptionem, bello statuat expediunt naturales.
                            </div>
                          </div>
                        </div>
    
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                              data-parent="#siteMegaAccordion" aria-expanded="false"
                              aria-controls="siteMegaCollapseThree">
                              Collapsible Group Item #3
                            </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                            role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <!-- End Navbar Toolbar -->
    
          <!-- Navbar Toolbar Right -->
          <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">            
            <li class="nav-item dropdown">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
                data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="../../../global/portraits/5.jpg" alt="...">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
                <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="<?=base_url('index.php/Login/logout');?>" role="menuitem"><i class="icon wb-power"  aria-hidden="true"></i> Logout</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications"
                aria-expanded="false" data-animation="scale-up" role="button">
                <i class="icon wb-bell" aria-hidden="true"></i>
                <!--<span class="badge badge-pill badge-danger up">5</span>-->
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header">
                  <h5>NOTIFICATIONS</h5>
                  <span class="badge badge-round badge-danger">New 5</span>
                </div>
    
                <div class="list-group">
                  <div data-role="container">
                    <div data-role="content">
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">A new order has been placed</h6>
                            <time class="media-meta" datetime="2018-06-12T20:50:48+08:00">5 hours ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Completed the task</h6>
                            <time class="media-meta" datetime="2018-06-11T18:29:20+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Settings updated</h6>
                            <time class="media-meta" datetime="2018-06-11T14:05:00+08:00">2 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Event started</h6>
                            <time class="media-meta" datetime="2018-06-10T13:50:18+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">Message received</h6>
                            <time class="media-meta" datetime="2018-06-10T12:34:48+08:00">3 days ago</time>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer">
                  <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon wb-settings" aria-hidden="true"></i>
                  </a>
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
                </div>
              </div>
            </li>                   
          </ul>
          <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    
        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
          <form role="search">
            <div class="form-group">
              <div class="input-search">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="site-search" placeholder="Search...">
                <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                  data-toggle="collapse" aria-label="Close"></button>
              </div>
            </div>
          </form>
        </div>
        <!-- End Site Navbar Seach -->
      </div>
    </nav>    <div class="site-menubar">
      <ul class="site-menu">
        <li class="site-menu-item has-sub">
          <a href="javascript:;">
                  <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                  <span class="site-menu-title">Altas</span>
                          <span class="site-menu-arrow"></span>
              </a>
          <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="<?=base_url('index.php/alta');?>">
                <span class="site-menu-title">Empleados</span>
              </a>
            </li>            
            <li class="site-menu-item">
              <a class="animsition-link" href="<?=base_url('index.php/alta');?>">
                <span class="site-menu-title">Especialidades</span>
              </a>
            </li>
          </ul>
        </li>                                          
        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
                  <i class="site-menu-icon wb-library" aria-hidden="true"></i>
                  <span class="site-menu-title">Calendario</span>
                          <span class="site-menu-arrow"></span>
              </a>
          <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="../forms/general.html">
                <span class="site-menu-title">Horarios</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../forms/material.html">
                <span class="site-menu-title">Fechas no Atencion</span>
              </a>
            </li>
            
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <span class="site-menu-title">Editors</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/editor-summernote.html">
                    <span class="site-menu-title">Summernote</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/editor-markdown.html">
                    <span class="site-menu-title">Markdown</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/editor-ace.html">
                    <span class="site-menu-title">Ace Editor</span>
                  </a>
                </li>
              </ul>
            </li>            
          </ul>
        </li>
        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
                  <i class="site-menu-icon wb-table" aria-hidden="true"></i>
                  <span class="site-menu-title">Gestiones</span>
                          <span class="site-menu-arrow"></span>
              </a>
          <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="../tables/basic.html">
                <span class="site-menu-title">Especialidades</span>
              </a>
            </li>            
            <li class="site-menu-item">
              <a class="animsition-link" href="../tables/jqtabledit.html">
                <span class="site-menu-title">Jquery Tabledit</span>
                <div class="site-menu-label">
                  <span class="badge badge badge-info badge-round">new</span>
                </div>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../tables/table-dragger.html">
                <span class="site-menu-title">Table Dragger</span>
                <div class="site-menu-label">
                  <span class="badge badge badge-warning badge-round">new</span>
                </div>
              </a>
            </li>
          </ul>
        </li>
        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
                  <i class="site-menu-icon wb-pie-chart" aria-hidden="true"></i>
                  <span class="site-menu-title">Reportes</span>
                          <span class="site-menu-arrow"></span>
              </a>
          <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="../charts/chartjs.html">
                <span class="site-menu-title">Chart.js</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../charts/gauges.html">
                <span class="site-menu-title">Gauges</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../charts/flot.html">
                <span class="site-menu-title">Flot</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../charts/peity.html">
                <span class="site-menu-title">Peity</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../charts/sparkline.html">
                <span class="site-menu-title">Sparkline</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../charts/morris.html">
                <span class="site-menu-title">Morris</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../charts/chartist.html">
                <span class="site-menu-title">Chartist.js</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../charts/rickshaw.html">
                <span class="site-menu-title">Rickshaw</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../charts/pie-progress.html">
                <span class="site-menu-title">Pie Progress</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../charts/c3.html">
                <span class="site-menu-title">C3</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)">
                  <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                  <span class="site-menu-title">Apps</span>
                          <span class="site-menu-arrow"></span>
              </a>
          <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/contacts/contacts.html">
                <span class="site-menu-title">Contacts</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/calendar/calendar.html">
                <span class="site-menu-title">Calendar</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/notebook/notebook.html">
                <span class="site-menu-title">Notebook</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/taskboard/taskboard.html">
                <span class="site-menu-title">Taskboard</span>
              </a>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <span class="site-menu-title">Documents</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/documents/articles.html">
                    <span class="site-menu-title">Articles</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/documents/categories.html">
                    <span class="site-menu-title">Categories</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/documents/article.html">
                    <span class="site-menu-title">Article</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/forum/forum.html">
                <span class="site-menu-title">Forum</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/message/message.html">
                <span class="site-menu-title">Message</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/projects/projects.html">
                <span class="site-menu-title">Projects</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/mailbox/mailbox.html">
                <span class="site-menu-title">Mailbox</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/media/overview.html">
                <span class="site-menu-title">Media</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/work/work.html">
                <span class="site-menu-title">Work</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/location/location.html">
                <span class="site-menu-title">Location</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="../apps/travel/travel.html">
                <span class="site-menu-title">Travel</span>
                <div class="site-menu-label">
                  <span class="badge badge-info badge-round">new</span>
                </div>
              </a>
            </li>
          </ul>
        </li>
      </ul></div>    <div class="site-gridmenu">
      <div>
        <div>
          <ul>
          <li>
              <a href="<?=base_url('index.php//home');?>">
                <i class="icon wb-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href="../apps/mailbox/mailbox.html">
                <i class="icon wb-envelope"></i>
                <span>Mailbox</span>
              </a>
            </li>
            <li>
              <a href="../apps/calendar/calendar.html">
                <i class="icon wb-calendar"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="../apps/contacts/contacts.html">
                <i class="icon wb-user"></i>
                <span>Contacts</span>
              </a>
            </li>
            <li>
              <a href="../apps/media/overview.html">
                <i class="icon wb-camera"></i>
                <span>Media</span>
              </a>
            </li>
            <li>
              <a href="../apps/documents/categories.html">
                <i class="icon wb-order"></i>
                <span>Documents</span>
              </a>
            </li>
            <li>
              <a href="../apps/projects/projects.html">
                <i class="icon wb-image"></i>
                <span>Project</span>
              </a>
            </li>
            <li>
              <a href="../apps/forum/forum.html">
                <i class="icon wb-chat-group"></i>
                <span>Forum</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
