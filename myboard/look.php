<? 
    session_start();
    include "dbClass.php";
    include "lib.php";
?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
  
    <title> 여진이의 게시판 </title>
    
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

    <!-- PUANG IMG -->
    <link href="assets/img/puangfire.png" rel="shortcut icon" />
 
  
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
  <? 

    $query2 = "select * from members where user_id=? ";
    $result = $db->query($query2,$_SESSION['isLoginId'])->fetchAll();

  ?> 

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
                <form action="search.php" method="post">
                 <div class="input-group" >
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                       <i class="mdi mdi-magnify"></i>
                    </button>            
                  <input type="text" name="search" id="search-input" class="form-control" placeholder=" search "
                    autofocus autocomplete="off">
                  </div>
                  <div id="search-results-container">
                    <ul id="search-results"></ul>
                  </div>
                </form>
              </div>


              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                    <form action="index.php">
                        <button type="submit" name="home" class="btn btn-flat"> go to home </button>
                    </form>

                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <?foreach($result as $data){ ?>
                      <span class="d-none d-lg-inline-block"> <?=$data['name']?> <?}?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <div class="d-inline-block">
                        <?foreach($result as $data){ ?>
                          <?=$data['name']?> <?}?> <small class="pt-1"><?=$_SESSION['isLoginId']?></small>
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
                        <a href="logOut.php"> <i class="mdi mdi-logout"></i> Log Out </a>
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
				<h2> 글 </h2>
			</div>
            <?php
                $idx = $_GET['idx'];
                $query = "select * from post where idx='$idx' ";
                $post = mysqli_query($connect,$query);

                while( $data = mysqli_fetch_array($post)) {?>
			<div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlInput1"> Title </label>
                        <p type="text" class="form-control" name="title"> <?=$data['title']?> </p>
                </div>
                <div class="form-group">
                    <? 
                        if(!$data['cont_pwd']){?> 
                        <button type="button" class="btn btn-primary">Public</a>
                    <? }else{ ?> 
                        <button type="button" class="btn btn-primary">Secret</a>
                        <div id=Secret> </div>
                    <? }?>
                    
                </div>

					<div class="form-group">    
						<p type="text" style="color: #495057; border: 1px solid #e6e9f1; border-radius: 0.25rem; padding: 0.59rem 1rem;" name="content" id="exampleFormControlTextarea1"> <?=nl2br($data['content'])?> </p>
					</div>

					<div class="form-group">
            <p>  파일 </p>
						<p class="file"> <a href="upload/<?=$data['filename']?>" download> <?=$data['filename'];?> </a> </p>
					</div>
                      
            <form action="index.php">
					<div class="form-footer pt-4 pt-5 mt-4 border-top">
						<button type="submit" class="btn btn-primary btn-default">OK</button>
						<a class="btn btn-secondary btn-default" href="index.php">Cancel</a>
					</div>
                    </form>
                    <?}?>

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

<script>
  function public(){
    Secret.innerHTML ="";
  }
  function secret() {
  Secret.innerHTML = "<br> <input type=password class=border border-light name=cont_pwd id=cont_pwd placeholder= 비밀번호 >" ;
  }
</script>
