<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MAIN</title>
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./lib/fontasome/css/font-awesome.min.css">
  </head>
  <body class ="MainBackColor">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://localhost/homepageMaking/index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
              <li><a href="http://localhost/homepageMaking/introduce.php">소개</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">영화 목록 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="http://localhost/homepageMaking/MovieList/Rapunzel.php">라푼젤</a></li>
                  <li><a href="http://localhost/homepageMaking/MovieList/Frozen.php">겨울 왕국</a></li>
                </ul>
              </li>
              <li><a href="http://localhost/homepageMaking/FreeList.php">자유 게시판</a></li>
              <li><a href="http://localhost/homepageMaking/FAQ.php">FAQ</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <br>
      <br>
      <section class="container">
  <sections class=" MainSlide">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="http://localhost/homepageMaking/introduce.php">
      <img src="./nimage/disney_logo_main.jpg" alt="Logo" >
      <div class="carousel-caption">
        월트 디즈니
      </div>
      </a>
    </div>
    <div class="item">
      <a href="http://localhost/homepageMaking/MovieList/Rapunzel.php">
      <img src="./nimage/Rapunzel_logo.jpg" alt="..."  >
      <div class="carousel-caption">
        라푼젤
      </div>
      </a>
    </div>
    <div class="item">
      <a href="http://localhost/homepageMaking/MovieList/Frozen.php">
      <img src="./nimage/Frozen_logo.jpg" alt="...">
      <div class="carousel-caption">
        겨울왕국
      </div>
    </a>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">이전</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">다음</span>
  </a>
</div>
</sections>
</section>


    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
