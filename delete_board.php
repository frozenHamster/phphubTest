<? php
$title = $_GET['title'];
$content = $_GET['content'];
$author = $_GET['author'];
    /* Database 연결 */
    $host = 'mysql:host=localhost;dbname=yoo';
    $user = 'Yoo';
    $password = '1234';
    $conn = new PDO($host, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    /* Data 조회를 위한 Query 작성 */
    $stmt = $conn->prepare('DELETE FROM board WHERE id='.$id);
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
     <title>글 삭제</title>
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


 <section class ="container"style =margin-top:80px;>
<h1>삭제 되었습니다.</h1>
<a href="./FreeList.php" class = "btn btn-primary">완료</i></a>
 </section>

   <script src="./lib/jquery-3.1.1.min.js"></script>
   <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
   <script src="./js/script.js"></script>
 </body>
 </html>
