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

                <div class="col-lg-8 col-xl-9">
                    <div class="profile-content-right profile-right-spacing py-5">
                        <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">            
                            <li class="nav-item">
                                <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                            </li>
                        </ul>
                        
                            <div class="tab-pane fade show active " id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form action="editProfile.php" method="post">
                                        <div class="form-group row mb-6">
                                        <label for="coverImage" class="col-sm-4 col-lg-2 col-form-label">User Image</label>
                                        <div class="col-sm-8 col-lg-10">
                                            <div class="custom-file mb-1">
                                            <input type="file" class="custom-file-input" id="coverImage" required>
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
    </div>
</div>


</body>
</html>