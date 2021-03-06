
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

    .post .col{
      text-align: center;
      text-align: -webkit-center;
    }

    .post .col:nth-child(even) {
        background: #FBFBFB;
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

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75064555-1', 'auto');
    ga('send', 'pageview');

  </script>
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
                <span class="card-title">Album available now!</span>
                <p>

                <a href="https://amzn.com/B01C9GKY0S" id="" class="" target="_blank"><img src="img/brands/amz.png" width="40"></a>
                <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwiHz5qWyKDLAhVDGB4KHX9jAG0QFggcMAA&url=https%3A%2F%2Fopen.spotify.com%2Falbum%2F31AEW7d1MKi0VqTqgWc74r&usg=AFQjCNGV1KhSVaO9bsMFzHjF8876i2gkcQ&sig2=SmFl70BlOk1bkqF8cBd-hQ&bvm=bv.115339255,d.dmo" id="" class="" target="_blank"><img src="img/brands/spotify-logo.png" width="40"></a>
                <a href="http://tidal.com/album/57775132" id="" class="" target="_blank"><img src="img/brands/tidal.png" width="40"></a>
                <a href="http://itunes.apple.com/album/id1089807711" id="" class="" target="_blank"><img src="img/brands/apple-music-app-icon.png" width="40"></a>
                <br />
                <a href="https://itunes.apple.com/mn/album/better-late-than-never/id1089807711" id="" class="" target="_blank"><img src="img/brands/badge_itunes-lrg.png" height="40"></a>

                <a href="https://play.google.com/store/music/album/Clap_Cognac_Better_Late_Than_Never?id=Bmhvsivs6mnmwrhpxylplz7qbui" id="" class="" target="_blank"><img src="img/brands/google-play-badge.png" height="40"></a>
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


  <div class="container">
    <div class="section">
      <div class="row center-align">
        <div class="col s12">
          <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/fRBmB4tJi10?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="video-container">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/qU1Oczw3yvA?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
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
          <a href="https://itunes.apple.com/mn/album/better-late-than-never/id1089807711" id="" class="" target="_blank"><img src="img/brands/badge_itunes-lrg.png" height="40"></a>
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
          <a href="http://tidal.com/album/57775132" id="" class="" target="_blank"><img src="img/brands/tidal.png" width="40"></a> <a href="http://itunes.apple.com/album/id1089807711" id="" class="" target="_blank"><img src="img/brands/apple-music-app-icon.png" width="40"></a>
          <a href="https://play.google.com/store/music/album/Clap_Cognac_Better_Late_Than_Never?id=Bmhvsivs6mnmwrhpxylplz7qbui" id="" class="" target="_blank"><img src="img/brands/google-play-badge.png" height="40"></a>
          <br /><br />
        </div>
      </div>

    </div>
  </div>

  <div id="stream" class="container">
    
    <div class="section">
      <div class="row">
        <div class="col s12 m6 post">
        
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
        <div class="col s12 m6">
            <a class="twitter-timeline" href="https://twitter.com/Claption" data-height="600" data-widget-id="704865762322862080">Tweets by @Claption</a>
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
