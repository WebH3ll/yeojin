<?php 

    $search = $_POST['search'];
    if($search == ""){
      Header("Location: index.php");
    }
    
    
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
  
    <title> Search </title>
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
    <!-- PLUGINS CSS STYLE -->
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
    <link href='assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>
    
    
    <!-- PUANG IMG -->
    <link href="assets/img/puangfire.png" rel="shortcut icon" />
  
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

  <? 
    $query = "select * from post where user_id=? ";
    $list = $db->query($query,$_SESSION['isLoginId'])->fetchAll();

    $query2 = "select * from members where user_id=? ";
    $result = $db->query($query2,$_SESSION['isLoginId'])->fetchAll();

  ?> 

  <? if(!isset($_SESSION['isLoginId'])) {
        Header("Location: sign-in.php"); 
      }else{ ?>
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
                  <input type="text" name="search" id="search-input" class="form-control" placeholder="<?=$search?> "
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
                    <button type="submit" class="btn btn-flat"> go to home </button>
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
                  <div class="row">

                  <? 
                    $query = "select * from post order by regdate desc"; 
                    $result = mysqli_query($connect,$query);                                 

                    while( $data = mysqli_fetch_array($result)) { 
                        if(preg_match("/{$search}/i", $data['title'])){ ?> 
                            <div class="col-xl-3 col-sm-6">
                                <div class="card card-mini mb-4">
                                <div class="card-body">
                                    <h2 class="mb-1"> <?=$data['title']?> </h2>
                                    <p> <?=$data['user_id']?> </p>
                                    <p> <?=$data['regdate']?> </p>
                                    <br> 
                                    <? if($_SESSION['isLoginId'] == 'admin@admin.com') { ?>
                                    <button type="button" class="btn btn-light" onclick="admin_look('<?=$data['idx']?>')"> 보기 </a>
                                    <? }else{?> 
                                    <button type="button" class="btn btn-light" onclick="chk_pwd('<?=$data['idx']?>', '<?=$data['cont_pwd']?>')"> 보기 </a>
                                    <? } ?>
                                </div>
                                </div>
                            </div>
                        <? }                 
                     } ?>
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

    <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet">
<script src="assets/options/optionswitcher.js"></script> 
</body>
</html>

  <? }?> 
  <script>
    function chk_pwd(idx, pwd)
    {
      if(!pwd)
      {
        window.location="look.php?idx="+idx;
      }
      else
      {
        var in_pwd=prompt("비밀글입니다. 비밀번호를 입력하세요. ");

        if(pwd == in_pwd){
           window.location="look.php?idx="+idx; }
        else{
          alert("비밀번호가 틀렸습다. ");
        }
      }
    }

    function admin_look(idx)
    {
        window.location="look.php?idx="+idx;

    }
  </script>

    