<?php

    /* Database 연결 */
    $host = 'mysql:host=localhost;dbname=Yoo';
    $user = 'Yoo';
    $password = '1234';
    $conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    /* Data 조회를 위한 Query 작성 */
    $stmt = $conn->prepare('SELECT * FROM board');
    /* Query 실행 */
    $stmt->execute();
    /* 조회한 Data를 배열(Array) 형태로 모두 저장 */
    $list = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>자유 게시판</title>
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
      <section class = "basesection container">
      <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>제목</th>
          <th>작성자</th>
          <th>작성일</th>
        </tr>
      </thead>
      <tbody>

          <?php
foreach($list as $item){
          ?>
          <tr>

            <th scope="row"><?php echo $item['id']?></th>
            <td><a href="http://localhost/homepageMaking/board_detail.php?id=<?php echo $item['id'] ?>">
              <?php echo $item['title']?>
            </a></td>
            <td><?php echo $item['author']?></td>
            <td><?php echo $item['timestamp']?></td>

          </tr>
            <?php }   ?>
      </tbody>
      </table>
      <a class="btn btn-default"style = "margin-left:940px;" href="http://localhost/homepageMaking/board_write.php" role="button">글 쓰기</a>
<nav>
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
    </section>

    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
