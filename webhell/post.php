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

    <div class="content-wrapper" style="padding-left:5rem; padding-right:5rem; background-color: #b5c7ed;" >
        <div class="content">		
            <div class="card card-default">
			    <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1"> TITLE </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="제목을 입력하세요. ">
                        </div>
                        <div class="form-group">
                            <div class="dropdown">
                                <div class="d-flex my-2 justify-content-between">
                                            </label>
                                </div>

                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Public / Secret
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Public</a></li>
                                    <li><a class="dropdown-item" href="#">Secret</a></li>
                                </ul>
                                <div class="d-flex my-2 justify-content-between">
                                        </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="15"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="d-flex my-2 justify-content-between">
                                        </label>
                            </div>
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

</body>
</html>