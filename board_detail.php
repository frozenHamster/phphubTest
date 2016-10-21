<?php
$id = $_GET['id'];
    /* Database 연결 */
    $host = 'mysql:host=localhost;dbname=yoo';
    $user = 'Yoo';
    $password = '1234';
    $conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    $stmt = $conn->prepare('SELECT * FROM board WHERE id='.$id);
    $stmt->execute();
    $item = $stmt->fetchAll();


    $stmtt = $conn->prepare('SELECT * FROM board_board WHERE board_id='.$id.' ORDER BY id DESC');
    $stmtt->execute();
    $boards = $stmtt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Over Watch</title>

    <!-- Bootstrap -->
    <link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./lib/font-awesome/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

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

    <section class="container"style ="padding-top:100px;">
      <table class="table table-striped table-hover table-condensed">
        <thead>
          <tr>
            <th width="10%">
              <p>제목</p>
            </th>
            <th width="90%">
              <p><?php echo $item[0]['title']?></p>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>내용</td>
            <td>
              <p><?php echo $item[0]['content'] ?></p>
              <br><br><br><br><br><br><br><br><br><br>
            </td>
          </tr>
          <tr>
            <td>작성자</td>
            <td><?php echo $item[0]['author']?></td>
          </tr>
          <tr>
            <td>작성일</td>
            <td><?php echo $item[0]['timestamp']?></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2">
              <a href="#" class="btn btn-danger pull-right" data-toggle="modal" data-target="#remove_board"><i class="fa fa-trash"></i> 삭제</a>
              <a href="./board_updata.php?id=<?php echo $item[0]['id']?>" class="btn btn-warning pull-right"><i class="fa fa-pencil"></i> 수정</a>
              <a href="./FreeList.php" class="btn btn-success pull-right"><i class="fa fa-list" aria-hidden="true"></i> 목록</a>
            </td>
          </tr>
        </tfoot>
      </table>
<h1 class ="">댓글</h1><br>
<form class="form-inline">
  <div class="form-group">
    <label for="exampleInputName">작성자</label>
    <input type="text" class="form-control" id="exampleInputName" placeholder="작성">
  </div>
  <div class="form-group">
    <label for="exampleInputcontent">내용</label>
    <input type="email" class="form-control" id="exampleInputcontent" placeholder="글내용">
  </div>
  <button type="submit" class="btn btn-success">전송</button>
</form>


<div class="">
  <table class = "table-bordered com-sm-12" style="text-align:center;border-color: #000;">
    <thead>
      <tr>
        <td>작성자</td>
        <td>내용</td>
        <td>작성일</td>
      </tr>
    </thead>
    <tbody>
      <?php if(count($boards)>0){ ?>
        <?php foreach ($boards as $board_item) {  ?>
          <tr>
            <td><?php $board_item['board_title']?> </td>
            <td><?php $board_item['board_content']?> </td>
            <td><?php $board_item['board_timestamp']?> </td>
          </tr>
          <?php }        ?>
        <?php } else {   ?>
            <tr>
              <td colspan="3">글이 없습니다</td>
          </tr>
      <?php } ?>
    </tbody>
  </table>
<div>



    <div class="modal fade" id="remove_board" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">게시물 삭제</h4>
          </div>
          <div class="modal-body">
            <p>정말 삭제하시겠습니까?</p>
          </div>
          <div class="modal-footer">
            <form class="" action="./delete_board.php" method="get">
              <input type="hidden" name="id" value="<?php echo $item[0]['id'] ?>">
              <button type="button" class="btn btn-default" data-dismiss="modal">취소</button>
              <button type="submit" class="btn btn-danger">삭제</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
