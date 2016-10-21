<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>FAQ</title>
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
      <br>
      <section class="container">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">아이디</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="아이디를 입력하세요">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">암호</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="암호">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">내용</label>
    <textarea class="form-control" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">파일 업로드</label>
    <input type="file" id="exampleInputFile">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> 장애여부
    </label>
  </div>
  <a class="btn btn-default" href="http://localhost/homepageMaking/FreeList.php" role="button">Link</a>
</form>
    </section>
    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
