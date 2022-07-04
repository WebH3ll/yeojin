<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
  
    <title>Ecommerce - Sleek Admin Dashboard Template</title>
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
    <link href='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>
    
    

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />
  
    <!-- FAVICON -->
    <link href="assets/img/favicon.png" rel="shortcut icon" />
  
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="assets/plugins/nprogress/nprogress.js"></script>
  </head>

  <body class="header-fixed sidebar-dark header-light" id="body">
    <!-- <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script> -->

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
          <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">
          
          <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <form action="/myboard/search.html" method="get">
                 <div class="input-group" >
                    <button type="button" name="search" id="search-btn" class="btn btn-flat">
                       <i class="mdi mdi-magnify"></i>
                    </button>            
                  <input type="text" name="query" id="search-input" class="form-control" placeholder=" search "
                    autofocus autocomplete="off">
                  </div>
                  <div id="search-results-container">
                    <ul id="search-results"></ul>
                  </div>
                </form>
              </div>


              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                    <form action="/myboard/index.php">
                        <button type="button" name="home" class="btn btn-flat"> go to home </button>
                    </form>

                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <!-- <img src="assets/img/user/user.png" class="user-image" alt="User Image" /> -->
                      <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <!-- <img src="assets/img/user/user.png" class="img-circle" alt="User Image" /> -->
                        <div class="d-inline-block">
                          Abdus Salam <small class="pt-1">iamabdus@gmail.com</small>
                        </div>
                      </li>

                      <li>
                        <a href="user-profile.php">
                          <i class="mdi mdi-account"></i> 프로필
                        </a>
                      </li>
                      <li class="right-sidebar-in">
                        <a href="post.php"> <i class="mdi mdi-settings"></i> 글쓰기 </a>
                      <li class="dropdown-footer">
                        <a href="index.php"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>
          </header>

          
          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
            <div class="content">		
                  <!-- Top Statistics -->
                  <div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2> Post </h2>
			</div>

			<div class="card-body">
				<form>
                    <div class="form-group">
						<label for="exampleFormControlInput1"> TITLE </label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="제목을 입력하세요. ">
					</div>
                    <div class="form-group">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                Public/Secret
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Public</a>
                                <a class="dropdown-item" href="#">Secret</a>
                            </div>
                        </div>
                    </div>

					<div class="form-group">
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="15"></textarea>
					</div>

					<div class="form-group">
						<label for="exampleFormControlFile1"> Add File</label>
						<input type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>

					<div class="form-footer pt-4 pt-5 mt-4 border-top">
						<button type="submit" class="btn btn-primary btn-default">Submit</button>
						<button type="submit" class="btn btn-secondary btn-default">Cancel</button>
					</div>
				</form>
			</div>
		</div>
                    </div>
                  </div>





      </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
    
    
    <!-- Footer -->
    <footer class="footer mt-auto">
      <div class="copyright bg-white">
        <p>
          Copyright &copy; <span id="copy-year"></span> a template by <a class="text-primary" href="https://themefisher.com" target="_blank">Themefisher</a>.
        </p>
      </div>
      <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
      </script>
    </footer>

    </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
 
    <script src='assets/plugins/charts/Chart.min.js'></script>
    <script src='assets/js/chart.js'></script>

    
    

    <script src='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
    <script src='assets/js/vector-map.js'></script>

    <script src='assets/plugins/daterangepicker/moment.min.js'></script>
    <script src='assets/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='assets/js/date-range.js'></script>


    <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet">
<script src="assets/options/optionswitcher.js"></script>
</body>
</html>

