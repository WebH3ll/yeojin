<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
  
    <title>User Profile - Sleek Admin Dashboard Template</title>
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
    
    <link href='assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>
    
    
    
    
    
    
    
    
    

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />
  
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
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

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
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <form action="/myboard/index.php">
                      <button type="submit" name="home" class="btn btn-flat"> go to home </button>
                  </form>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
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
                      </li>
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





<div class="bg-white border rounded">
  <div class="row no-gutters">
    <div class="col-lg-4 col-xl-3">
      <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
        <div class="card text-center widget-profile px-0 border-0">
          <div class="card-img mx-auto rounded-circle">
            <img src="assets/img/user/u6.jpg" alt="user image">
          </div>

          <div class="card-body">
            <h4 class="py-2 text-dark">Albrecht Straub</h4>
            <p>Albrecht.straub@gmail.com</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-8 col-xl-9">
      <div class="profile-content-right profile-right-spacing py-5">
        <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">Timeline</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
          </li>
        </ul>

        <div class="tab-content px-3 px-xl-5" id="myTabContent">
          <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
            
          <?php
            for($i=0;$i<10;$i++){?> 

              <div class="media mt-5 profile-timeline-media timeline-media-spacing">
              <div class="media-body">
                <span class="float-right">5 mins ago</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua. ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
              </div>
            </div>

          <?
            }
          ?>   
          </div>


          <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="tab-pane-content mt-5">
              <form>
                <div class="form-group row mb-6">
                  <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
                  <div class="col-sm-8 col-lg-10">
                    <div class="custom-file mb-1">
                      <input type="file" class="custom-file-input" id="coverImage" required>
                      <label class="custom-file-label" for="coverImage">Choose file...</label>
                      <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="firstName"> Name </label>
                      <input type="text" class="form-control" id="firstName" value="Albrecht">
                    </div>
                  </div>
                </div>

                <div class="form-group mb-4">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" value="albrecht.straub@gmail.com">
                </div>

                <div class="form-group mb-4">
                  <label for="oldPassword">Old password</label>
                  <input type="password" class="form-control" id="oldPassword">
                </div>

                <div class="form-group mb-4">
                  <label for="newPassword">New password</label>
                  <input type="password" class="form-control" id="newPassword">
                </div>

                <div class="form-group mb-4">
                  <label for="conPassword">Confirm password</label>
                  <input type="password" class="form-control" id="conPassword">
                </div>

                <div class="d-flex justify-content-end mt-5">
                  <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
                </div>
              </form>
            </div>
          </div>
        </div>







        
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
 
    
    

    
    

    
    
    

    <script src='assets/plugins/daterangepicker/moment.min.js'></script>
    <script src='assets/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='assets/js/date-range.js'></script>

    

    
    
    
    

    

    

    
    
    

    
    

    

    <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet">
<script src="assets/options/optionswitcher.js"></script>
</body>
</html>

