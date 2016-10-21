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
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      가장 많이 하는 질문
      </button>
      <div class="collapse" id="collapseExample">
        <div class="well">
        <div class="panel-group" id="manyQ" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="manyQone">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#manyQ" href="#manyCQone" aria-expanded="false" aria-controls="manyCQone">
                사이트 탈퇴 하는법
              </a>
            </h4>
          </div>
          <div id="manyCQone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="manyQone">
            <div class="panel-body">
              사랑합니다 고객님 탈퇴 못하십니다.
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="manyQtwo">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#manyQ" href="#manyCQtwo" aria-expanded="false" aria-controls="manyCtwo">
                운영자 욕하려면 어디로 전화해야하나요
              </a>
            </h4>
          </div>
          <div id="manyCQtwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="manyCtwo">
            <div class="panel-body">
              010-6500-6479 로 전화주세요~.
            </div>
          </div>
        </div>

        </div>
        </div>
      </div>
      <br>
    <br>
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          광고 막는법
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        사랑합니다 고객님 광고 는 저희 수입이기때문에 그냥보세요~.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          영화 정보 자세하게 보는법
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
그런거 없읍니다 고객님~.
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          1:1질문 하는법
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      개인사정은 신경 안씁니다 고생하세요~.
        </div>
    </div>
  </div>
</div>
    </section>
    <script src="./lib/jquery-3.1.1.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
