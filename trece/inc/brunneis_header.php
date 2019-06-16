<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" dir="<?=$conf["site"]["langs"][LANG]["direction"];?>"
  lang="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>" itemscope itemtype="http://schema.org/LocalBusiness">
<!--<![endif]-->

<head prefix="og: http://ogp.me/ns#">
  <title><?=$conf["meta"]["title"][LANG];?></title>
  <link rel="canonical" href="<?=$conf["site"]["fullpath"];?>" />
  <base href="<?=REALPATH;?>" target="_self" />
  <meta charset="<?=$conf["site"]["charset"];?>" />
  <meta http-equiv="X-UA-Compatible" content="<?=$conf["site"]["x_ua_compatible"];?>" />
  <meta name="viewport" content="<?=$conf["site"]["viewport"];?>" />
  <meta name="lang" content="<?=$conf["site"]["langs"][LANG]["culture-name1"];?>" />
  <meta name="generator" content="<?=$conf["site"]["generator"];?>" />
  <meta name="robots" content="<?=$conf["site"]["robots"];?>" />
  <meta name="date" content="<?=$conf["meta"]["datetime"];?>" />
  <meta name="description" content="<?=$lCustom["og_description"][LANG];?>" />


  <!-- OG -->
  <meta property="fb:app_id" content="<?=$conf["contact"]["fb_app_id"];?>" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="<?=$conf["site"]["fullpath"];?>" />
  <meta property="og:title" content="<?=$conf["meta"]["title"][LANG];?>" />
  <meta property="og:image" content="<?=$conf["meta"]["image"]["file"];?>" /><!-- 1200x630 px -->
  <meta property="og:description" content="<?=$conf["meta"]["description"][LANG];?>" />
  <meta property="og:image:alt" content="<?=$conf["meta"]["image"]["description"][LANG];?>" />
  <meta property="og:site_name" content="<?=$conf["meta"]["name"][LANG];?>" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?=$conf["meta"]["title"][LANG];?>">
  <meta name="twitter:image:alt" content="<?=$conf["meta"]["image"]["description"][LANG];?>">
  <meta name="twitter:site" content="<?=$conf["contact"]["twitter"];?>">

  <!-- Favicon https://favicon-generator.org -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"
    href="<?=REALPATH.$conf["dir"]["images"];?>favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/favicon-16x16.png">
  <link rel="manifest" href="<?=REALPATH.$conf["dir"]["images"];?>favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#2c56dd">
  <meta name="msapplication-TileImage" content="<?=REALPATH.$conf["dir"]["images"];?>favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#2c56dd">

  <!-- Font Awesome -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/<?=$conf["version"]["fontawesome"];?>/css/all.min.css">


  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet" type="text/css">

  <!-- Custom CSS -->

  <link rel="stylesheet" type="text/css" media="screen"
    href="<?=REALPATH.$conf["dir"]["styles"].$conf["trece"]["theme"];?>_style.php">
  <?=isset($customCSS)?$customCSS:"";?>


  <!-- https://cdnjs.com/libraries/github-markdown-css -->
  <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/2.10.0/github-markdown.min.css"
          integrity="sha256-Ndk1ry+oGNFEaXt4kxlW/SYLbxat1O0DhaDd+lob0SY="
          crossorigin="anonymous"
  />

</head>



<?php $logo = "PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiID8+DQo8IURPQ1RZUEUgc3ZnIFBVQkxJQyAiLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9HcmFwaGljcy9TVkcvMS4xL0RURC9zdmcxMS5kdGQiPg0KPHN2ZyB3aWR0aD0iNTAwcHQiIGhlaWdodD0iNzBwdCIgdmlld0JveD0iMCAwIDUwMCA3MCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPg0KPGcgaWQ9IiNmZmZmZmZmZiI+DQo8cGF0aCBmaWxsPSIjZmZmZmZmIiBvcGFjaXR5PSIxLjAwIiBkPSIgTSAwLjAwIDAuMDAgTCAxMC4wMCAwLjAwIEMgMTAuMDAgNi42NyAxMC4wMCAxMy4zMyAxMC4wMCAyMC4wMCBDIDI2LjY3IDIwLjAwIDQzLjMzIDIwLjAwIDYwLjAwIDIwLjAwIEMgNjAuMDAgMzYuNjcgNjAuMDAgNTMuMzMgNjAuMDAgNzAuMDAgTCAwLjAwIDcwLjAwIEwgMC4wMCAwLjAwIE0gMTAuMDAgMzAuMDAgQyAxMC4wMCA0MC4wMCAxMC4wMCA1MC4wMCAxMC4wMCA2MC4wMCBDIDIzLjMzIDYwLjAwIDM2LjY3IDYwLjAwIDUwLjAwIDYwLjAwIEMgNTAuMDAgNTAuMDAgNTAuMDAgNDAuMDAgNTAuMDAgMzAuMDAgQyAzNi42NyAzMC4wMCAyMy4zMyAzMC4wMCAxMC4wMCAzMC4wMCBaIiAvPg0KPHBhdGggZmlsbD0iI2ZmZmZmZiIgb3BhY2l0eT0iMS4wMCIgZD0iIE0gNzAuMDAgMjAuMDAgQyA5MC4wMCAyMC4wMCAxMTAuMDAgMjAuMDAgMTMwLjAwIDIwLjAwIEMgMTMwLjAwIDIyLjUwIDEzMC4wMCAyNy41MCAxMzAuMDAgMzAuMDAgQyAxMTMuMzMgMzAuMDAgOTYuNjcgMzAuMDAgODAuMDAgMzAuMDAgQyA4MC4wMCA0My4zMyA4MC4wMCA1Ni42NyA4MC4wMCA3MC4wMCBMIDcwLjAwIDcwLjAwIEMgNzAuMDAgNTMuMzMgNzAuMDAgMzYuNjcgNzAuMDAgMjAuMDAgWiIgLz4NCjxwYXRoIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjEuMDAiIGQ9IiBNIDE0MC4wMCAyMC4wMCBDIDE0Mi41MCAyMC4wMCAxNDcuNTAgMjAuMDAgMTUwLjAwIDIwLjAwIEMgMTUwLjAwIDMzLjMzIDE1MC4wMCA0Ni42NyAxNTAuMDAgNjAuMDAgQyAxNjMuMzMgNjAuMDAgMTc2LjY2IDYwLjAwIDE5MC4wMCA2MC4wMCBDIDE5MC4wMCA0Ni42NyAxOTAuMDAgMzMuMzMgMTkwLjAwIDIwLjAwIEMgMTkyLjUwIDIwLjAwIDE5Ny41MCAyMC4wMCAyMDAuMDAgMjAuMDAgQyAyMDAuMDAgMzYuNjcgMjAwLjAwIDUzLjMzIDIwMC4wMCA3MC4wMCBMIDE0MC4wMCA3MC4wMCBDIDE0MC4wMCA1My4zMyAxNDAuMDAgMzYuNjcgMTQwLjAwIDIwLjAwIFoiIC8+DQo8cGF0aCBmaWxsPSIjZmZmZmZmIiBvcGFjaXR5PSIxLjAwIiBkPSIgTSAyMTAuMDAgMjAuMDAgQyAyMzAuMDAgMjAuMDAgMjUwLjAwIDIwLjAwIDI3MC4wMCAyMC4wMCBDIDI3MC4wMCAzNi42NyAyNzAuMDAgNTMuMzMgMjcwLjAwIDcwLjAwIEwgMjYwLjAwIDcwLjAwIEMgMjYwLjAwIDU2LjY3IDI2MC4wMCA0My4zMyAyNjAuMDAgMzAuMDAgQyAyNDYuNjYgMzAuMDAgMjMzLjMzIDMwLjAwIDIyMC4wMCAzMC4wMCBDIDIyMC4wMCA0My4zMyAyMjAuMDAgNTYuNjcgMjIwLjAwIDcwLjAwIEwgMjEwLjAwIDcwLjAwIEMgMjEwLjAwIDUzLjMzIDIxMC4wMCAzNi42NyAyMTAuMDAgMjAuMDAgWiIgLz4NCjxwYXRoIGZpbGw9IiNmZmZmZmYiIG9wYWNpdHk9IjEuMDAiIGQ9IiBNIDI4MC4wMCAyMC4wMCBDIDMwMC4wMCAyMC4wMCAzMjAuMDAgMjAuMDAgMzQwLjAwIDIwLjAwIEMgMzQwLjAwIDM2LjY3IDM0MC4wMCA1My4zMyAzNDAuMDAgNzAuMDAgTCAzMzAuMDAgNzAuMDAgQyAzMzAuMDAgNTYuNjcgMzMwLjAwIDQzLjMzIDMzMC4wMCAzMC4wMCBDIDMxNi42NiAzMC4wMCAzMDMuMzMgMzAuMDAgMjkwLjAwIDMwLjAwIEMgMjkwLjAwIDQzLjMzIDI5MC4wMCA1Ni42NyAyOTAuMDAgNzAuMDAgTCAyODAuMDAgNzAuMDAgQyAyODAuMDAgNTMuMzMgMjgwLjAwIDM2LjY3IDI4MC4wMCAyMC4wMCBaIiAvPg0KPHBhdGggZmlsbD0iI2ZmZmZmZiIgb3BhY2l0eT0iMS4wMCIgZD0iIE0gMzUwLjAwIDIwLjAwIEMgMzcwLjMzIDIwLjAwIDM5MC42NiAyMC4wMCA0MTEuMDAgMjAuMDAgQyA0MTEuMDAgMzAuMDAgNDExLjAwIDQwLjAwIDQxMS4wMCA1MC4wMCBDIDM5NC4wMCA1MC4wMCAzNzcuMDAgNTAuMDAgMzYwLjAwIDUwLjAwIEMgMzYwLjAwIDUyLjUwIDM2MC4wMCA1Ny41MCAzNjAuMDAgNjAuMDAgQyAzNzcuMDAgNjAuMDAgMzk0LjAwIDYwLjAwIDQxMS4wMCA2MC4wMCBDIDQxMS4wMSA2My4zMyA0MTAuOTcgNjYuNjYgNDExLjAwIDcwLjAwIEwgMzUwLjAwIDcwLjAwIEMgMzUwLjAwIDUzLjMzIDM1MC4wMCAzNi42NyAzNTAuMDAgMjAuMDAgTSAzNjAuMDAgMzAuMDAgQyAzNjAuMDAgMzIuNTAgMzYwLjAwIDM3LjUwIDM2MC4wMCA0MC4wMCBDIDM3My4zMyA0MC4wMCAzODYuNjYgNDAuMDAgNDAwLjAwIDQwLjAwIEMgNDAwLjAwIDM3LjUwIDQwMC4wMCAzMi41MCA0MDAuMDAgMzAuMDAgQyAzODYuNjYgMzAuMDAgMzczLjMzIDMwLjAwIDM2MC4wMCAzMC4wMCBaIiAvPg0KPHBhdGggZmlsbD0iI2ZmZmZmZiIgb3BhY2l0eT0iMS4wMCIgZD0iIE0gNDIwLjAwIDIwLjAwIEMgNDIyLjc1IDIwLjAwIDQyOC4yNSAyMC4wMCA0MzEuMDAgMjAuMDAgQyA0MzEuMDAgMzYuNjcgNDMxLjAwIDUzLjMzIDQzMS4wMCA3MC4wMCBMIDQyMC4wMCA3MC4wMCBDIDQyMC4wMCA1My4zMyA0MjAuMDAgMzYuNjcgNDIwLjAwIDIwLjAwIFoiIC8+DQo8cGF0aCBmaWxsPSIjZmZmZmZmIiBvcGFjaXR5PSIxLjAwIiBkPSIgTSA0NDAuMDAgMjAuMDAgQyA0NjAuMDAgMjAuMDAgNDgwLjAwIDIwLjAwIDUwMC4wMCAyMC4wMCBMIDUwMC4wMCAzMC4wMCBDIDQ4My4zMyAzMC4wMCA0NjYuNjYgMzAuMDAgNDUwLjAwIDMwLjAwIEMgNDUwLjAwIDMyLjUwIDQ1MC4wMCAzNy41MCA0NTAuMDAgNDAuMDAgQyA0NjYuNjYgNDAuMDAgNDgzLjMzIDQwLjAwIDUwMC4wMCA0MC4wMCBMIDUwMC4wMCA3MC4wMCBMIDQ0MC4wMCA3MC4wMCBDIDQ0MC4wMSA2Ni42NyA0MzkuOTcgNjMuMzMgNDQwLjAwIDYwLjAwIEMgNDU2LjY2IDYwLjAwIDQ3My4zMyA2MC4wMCA0OTAuMDAgNjAuMDAgQyA0OTAuMDAgNTcuNTAgNDkwLjAwIDUyLjUwIDQ5MC4wMCA1MC4wMCBDIDQ3My4zMyA1MC4wMCA0NTYuNjYgNTAuMDAgNDQwLjAwIDUwLjAwIEMgNDM5Ljk5IDQwLjAwIDQzOS45OSAzMC4wMCA0NDAuMDAgMjAuMDAgWiIgLz4NCjwvZz4NCjwvc3ZnPg0K"; ?>

<body>

  <header>

    <div id="header">

      <div class="brand">
        <a href="<?=$conf["site"]["realpathLang"];?>">
          <?php /*Blogue*/ ?>
          <img src="data:image/svg+xml;base64,<?=$logo;?>" alt="<?=$conf["site"]["title"][$conf["site"]["lang"]];?>"
            class="img-responsive">
        </a>
      </div>

      <?php if(count($conf["site"]["langs"])>1) : ?>
      <div class="languages">
        <?php $i=1; foreach($conf["site"]["langs"] as $language) : ?>
        <a href="<?=$conf["site"]["realpath"].$language["url-name"];?>"
          <?=$language["ref-name"]==LANG?" class=\"active\"":"";?>><?=strtoupper($language["ref-name"]);?></a><?=$i<count($conf["site"]["langs"])?"":"";?>
        <?php $i++;?>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <aside class="social-links">
        <ul>
          <li><a title="Comment with Disqus" href="<?=$conf["site"]["fullpath"];?>#disqus_thread"><i
                class="far fa-comment"></i></a></li>
          <li><a title="Share on Twitter"
              href="https://twitter.com/share?url=<?=$conf["site"]["fullpath"];?>&text=<?=$conf["meta"]["title"][LANG];?>. <?=$conf["meta"]["description"][LANG];?> (<?=$conf["contact"]["twitter"];?>)"
              target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a title="Share on Facebook"
              href="https://www.facebook.com/sharer/sharer.php?u=<?=$conf["site"]["fullpath"];?>" target="_blank"><i
                class="fab fa-facebook"></i></a></li>
          <ul>
      </aside>

    </div>

  </header>

    <div id="author_box">
      <div id="author_description">
        <div id="author_avatar"><img src="https://pbs.twimg.com/profile_images/1137405163319255043/KNxqCEWR_400x400.png" /></div>
        <h1>Rodrigo Martínez Castaño</h1>
        <h2>Blockchain • Big Data • Information Retrieval</h2>
        <p>
        Blockchain Architect and Co-founder of Blockchain.gal<br>
        Big Data & Information Retrieval PhD Student
        </p>
        <p>
        <a href="https://twitter.com/brunn3is" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.linkedin.com/in/brunneis" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://scholar.google.es/citations?user=LDGO-2EAAAAJ" target="_blank"><i class="fas fa-graduation-cap"></i></a>
        </p>
      </div>
    </div>

  <nav>
  </nav>

  <article>