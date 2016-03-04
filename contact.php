
<?php
  require_once('feed.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Clap Cognac - Contact</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
    .trans-card{
        background-color: rgba(255, 255, 255, 0.79);
    }

    .post img{
      width:80%;
      display:block;
      margin:0 auto 0;
    }

    .video-container{
      margin-bottom:20px;
    }

    .icon{
      display:inline-block;
      width:28px;
      height: 26px;
      background-image: url(/img/follow/icons.png);
      margin-left: 5px;
    }

    .icon.fb{
      background-position: -37px 0;
    }

    .icon.ig{
      background-position: -74px 0;
    }

    .icon.sc{
      background-position: -112px 0;
    }

    .icon.twitter{
      background-position: 0px 0;
    }

    .icon.yt{
      background-position: -193px 0;
    }

  </style>
</head>
<body>
  <nav class="black" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="/" class="brand-logo">CLAP COGNAC</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#buy">Buy #BLTN</a></li>
        <li><a href="#stream">Stream #BLTN</a></li>
        <li><a href="/contact.php">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#buy">Buy #BLTN</a></li>
        <li><a href="#stream">Stream #BLTN</a></li>
        <li><a href="/contact.php">Contact</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <div class="row center">
            <br />
              <br />
              <br />
              <br />
          <div class=" col s12 m4 offset-m4">
            <div class="card trans-card">
              <div class="card-content">
                <span class="card-title">Contact</span>
                <p>
                 For booking and info contact<br />
                 <a href="mailto:clapclap60@gmail.com">clapclap60@gmail.com</a>
              </p>
             </div>
            </div>
          </div>

          <div class=" col s12 m4 offset-m4">
            <div class="card trans-card">
              <div class="card-content">
                <p>
                <a href="http://facebook.com/clapcognac" class="icon fb" target="_blank"></a>
                <a href="http://instagram.com/claption" class="icon ig" target="_blank"></a>
                <a href="http://twitter.com/claption" class="icon twitter" target="_blank"></a>
                <a href="https://soundcloud.com/claption" class="icon sc" target="_blank"></a>
                <a href="https://www.youtube.com/user/claption" class="icon yt" target="_blank"></a>
              </p>
             </div>
            </div>
          </div>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="img/bg-cover-bltn.jpg" alt="Clap COgnac Better Late Than Never Available NOW!"></div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
