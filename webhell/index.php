<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 여진이의 게시판 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <header id="header">
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand"> 😊여진이의 게시판😊 </a>
            <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        
                    </ul>       
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </form>
 
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Link
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="profile.php"> 프로필 </a></li>
                                <li><a class="dropdown-item" href="timeline.php"> 타임라인 </a></li>
                                <li><a class="dropdown-item" href="post.php"> 글쓰기 </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="index.php">Log out</a></li>
                            </ul>
                            </li>
                    </ul>   
            </div>
        </div>
        </nav>
    </header>

    <div class="content-wrapper" style="background-color: #b5c7ed;">
        <div style="padding: 2rem">		
            <div class="row">
                <? 
                    for($i=0;$i<10;$i++){ ?>
                        <div class="col-xl-3 col-sm-6">
                          <div class="card card-mini mb-4">
                            <div class="card-body">
                              <h2 class="mb-1"> TITLE </h2>
                              <p> username </p>
                              <p> regdate </p>
                              <br>
                              <form action="look.php">
                                  <button type="submit" class="btn btn-sm" style="background-color: #b5c7ed;"> 보기 </button>
                              </form>
                            </div>
                          </div>
                        </div>
                      <? } ?>
            </div>
        </div>
    </div>




</body>
</html>