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
                                <li><a class="dropdown-item" href="profile.php"> 프로필 수정 </a></li>
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

    <div class="content-wrapper">
        <div class="content">
            <div class="bg-white border rounded">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-xl-3" style="background-color: #b5c7ed;">
                        <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                            <div class="card text-center widget-profile px-0 border-0" style="background-color: #b5c7ed;">
                                <div class="card-img mx-auto rounded-circle">
                                    <img src="assets/img/user/u6.jpg" alt="user image">
                                </div>

                                <div class="card-body">
                                    <h4 class="py-2 text-white">Albrecht Straub</h4>
                                    <p class="text-white">Albrecht.straub@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col-lg-8 col-xl-9" >
                    <div class="profile-content-right profile-right-spacing py-5">
                        <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">Timeline</a>
                            </li>

                        </ul>

                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">   
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>