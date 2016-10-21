<?php
$id = $_GET['id'];
    /* Database 연결 */
    $host = 'mysql:host=localhost;dbname=yoo';
    $user = 'Yoo';
    $password = '1234';
    $conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    /* Data 조회를 위한 Query 작성 */
    $stmt = $conn->prepare('SELECT * FROM board WHERE id='.$id);
    /* Query 실행 */
    $stmt->execute();
    /* 조회한 Data를 배열(Array) 형태로 모두 저장 */
    $item = $stmt->fetchAll();
    // print_r($item);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>글 작성</title>
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

<section class="container" style ="margin-top:80px;">
  <form class="form-horizontal" action="http://localhost/homepageMaking/updata_board.php" method="get">
  <div class="form-group">
    <label for="inputTitle" class="col-sm-2 control-label">제목</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputTitle" name="title" placeholder="제목" value="<?php echo $item[0]['title'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="content" class="col-sm-2 control-label">내용</label>
    <div class="col-sm-10">
      <textarea  class="form-control" id="content" name = "content"rows="5"><?php echo $item[0]['content'] ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputauthor" class="col-sm-2 control-label">작성자</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputauthor"name="author" placeholder="작성자" value="<?php echo $item[0]['author'] ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputtimestamp" class="col-sm-2 control-label">작성일</label>
    <div class="col-sm-10">
      <p id= "timestamp"><?php echo $item[0]['timestamp'] ?>  </p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-warning">  <a href="./updata_board.php">수정</a></button>

        <a href="./FreeList.php" class="btn btn-success pull-right"><i class="fa fa-list" aria-hidden="true"></i> 목록</a>
    </div>
  </div>
<input type="hidden" name="id" value="<?php echo $item[0]['id']?>">
</form>
</section>


  <script src="./lib/jquery-3.1.1.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>
