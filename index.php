
<?php
  require_once('feed.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Clap Cognac - Better Late Than Never</title>

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

  </style>
</head>
<body>
  <nav class="black" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">CLAP COGNAC</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#buy">Buy #BLTN</a></li>
        <li><a href="#stream">Stream #BLTN</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#buy">Buy #BLTN</a></li>
        <li><a href="#stream">Stream #BLTN</a></li>
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
                <span class="card-title">Album available now!</span>
                <p>
                <a href="https://amzn.com/B01C9GKY0S" id="" class="" target="_blank"><img src="img/brands/amz.png" width="40"></a>
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwiHz5qWyKDLAhVDGB4KHX9jAG0QFggcMAA&url=https%3A%2F%2Fopen.spotify.com%2Falbum%2F31AEW7d1MKi0VqTqgWc74r&usg=AFQjCNGV1KhSVaO9bsMFzHjF8876i2gkcQ&sig2=SmFl70BlOk1bkqF8cBd-hQ&bvm=bv.115339255,d.dmo" id="" class="" target="_blank"><img src="img/brands/spotify-logo.png" width="40"></a>
                <a href="http://tidal.com/album/57775132" id="" class="" target="_blank"><img src="img/brands/tidal.png" width="40"></a>
                <a href="https://play.google.com/store/music/album/Clap_Cognac_Better_Late_Than_Never?id=Bmhvsivs6mnmwrhpxylplz7qbui" id="" class="" target="_blank"><img src="img/brands/google-play-badge.png" height="40"></a>
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


  <div class="container">
    <div class="section">
      <div class="row center-align">
        <div class="col s12">
          <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/ZkHVU-la-GE?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <div class="col s12">
            <h5 class="header col s12 light"></h5>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/bg-bg-bltn.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div id="buy" class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m4 center-align">
          <h5 class="header col s12 light">Buy the album</h5>
          <p>Love the album?<br /> Then buy the album!</p>
          <a href="https://amzn.com/B01C9GKY0S" id="" class="" target="_blank"><img src="img/brands/amz.png" width="40"></a>
          <a href="https://play.google.com/store/music/album/Clap_Cognac_Better_Late_Than_Never?id=Bmhvsivs6mnmwrhpxylplz7qbui" id="" class="" target="_blank"><img src="img/brands/google-play-badge.png" height="40"></a>
          <br /><br />
        </div>
        <div class="col s12 m4 center-align">
          <img src="img/cover.png" class="responsive-img" />
        </div>
        <div class="col s12 m4 center-align">
          <h5 class="header col s12 light">Stream the album</h5>
          <p>Listen over and over again...</p>
          <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwiHz5qWyKDLAhVDGB4KHX9jAG0QFggcMAA&url=https%3A%2F%2Fopen.spotify.com%2Falbum%2F31AEW7d1MKi0VqTqgWc74r&usg=AFQjCNGV1KhSVaO9bsMFzHjF8876i2gkcQ&sig2=SmFl70BlOk1bkqF8cBd-hQ&bvm=bv.115339255,d.dmo" id="" class="" target="_blank"><img src="img/brands/spotify-logo.png" width="40"></a>
          <a href="http://tidal.com/album/57775132" id="" class="" target="_blank"><img src="img/brands/tidal.png" width="40"></a>
          <a href="https://play.google.com/store/music/album/Clap_Cognac_Better_Late_Than_Never?id=Bmhvsivs6mnmwrhpxylplz7qbui" id="" class="" target="_blank"><img src="img/brands/google-play-badge.png" height="40"></a>
          <br /><br />
        </div>
      </div>

    </div>
  </div>

  <div id="stream" class="container">
    
    <div class="section">
      <div class="row">
        <div class="col s12 m8 post">
        
        <?php
          foreach ($feed->items as $item){ 
            $hasIframe = strpos($item['description'], "<iframe");
          ?>
            <div class="col s12">
              <h5 class="header light"><?=$item['title']?></h5>
              <?php if($hasIframe !== false){ ?> <div class="video-container"> <?php } ?>
              <?=$item['description']?>
              <?php if($hasIframe !== false){ ?> </div> <?php } ?>
              <div class="divider"></div>
            </div>
      <?php
          }
        ?>
        </div>
        <div class="col s12 m4">
            <a class="twitter-timeline" href="https://twitter.com/Claption" data-widget-id="704865762322862080">Tweets by @Claption</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
      </div>

    </div>
  </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
