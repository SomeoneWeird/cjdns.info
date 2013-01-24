<?php
// locale
$locale = "en_US"; // default locale
$domain = "messages"; // name of file with translations
if (isset($_GET['lang'])) {
    $locale = $_GET['lang'];
    setcookie('lang', $_GET['lang'], 1640995200);
}
elseif (isset($_COOKIE['lang'])) {
    $locale = $_COOKIE['lang'];
}
setlocale(LC_ALL, $locale);
putenv("LC_ALL=".$locale);
bindtextdomain($domain, "./locale");
bind_textdomain_codeset($domain,'UTF-8');
textdomain($domain);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CJDNS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="github.com/dansup">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
		  body {
			padding-top: 80px;
		  }
	     .navbar-inner {
			padding: 10px;
          }
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">CJDNS</a>
          <div class="nav-collapse">
            <ul class="nav">
             <li class="active"><a href="./"><?=_("Home")?></a></li>
             <li><a href="https://github.com/cjdelisle/cjdns/blob/master/README.md"><?=_("About")?></a></li>
			 <li><a target="_blank" href="http://chat.efnet.org:9090/?channels=%23cjdns&Login=Login"><?=_("Chat")?></a></li>
			 <li><a href="http://en.wikipedia.org/wiki/cjdns"><?=_("Wiki")?></a></li>
             <li><a href="https://github.com/cjdelisle/cjdns/blob/master/rfcs/Whitepaper.md"><?=_("Whitepaper")?></a></li>
            </ul>
            <ul class="nav pull-right">
              <li><a href="?lang=en_US">English</a></li>
              <li><a href="?lang=ru_RU">Русский</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="hero-unit">
        <h1>cjdns</h1><br />
        <p><b>cjdns</b> <?=_('is a routing engine designed for security, scalability, speed and ease of use. The dream: You type <code>./cjdroute</code> and give it an interface which connects another node and it gives you an ipv6 address generated from a public encryption key and a virtual network card (TUN device) which you can use to send packets to anyone in the cjdns network to which you are connected.')?></p>
      </div>
      <div class="row">
        <div class="span4">
          <h2><?=_("Install")?></h2>
           <p><b>cjdns</b> <?=_("has been ported to")?> <a href="https://wiki.projectmeshnet.org/CJD%27s_Network_Suite#Build.2C_Installation.2C_and_Configuration"><?=_("several")?></a> <?=_("platforms, and is quite easy to install.")?></p>
          <p><a class="btn" href="https://wiki.projectmeshnet.org/Getting_started#Install_it"><?=_("View install guide")?> &raquo;</a></p>
        </div>
        <div class="span4">
          <h2><?=_("Configure")?></h2>
           <p><b>cjdns</b> <?=_("only requires one simple modification, peering info. Update cjdroute.conf with public peers until you can locate a trusted one.")?> </p>
          <p><a class="btn" href="https://wiki.projectmeshnet.org/Public_peers"><?=_("View public peers")?> &raquo;</a></p>
       </div>
        <div class="span4">
          <h2><?=_("Contribute")?></h2>
          <p><b>cjdns</b> <?=_("is in early Alpha stage. Contributors welcome.")?></p>
          <p><a class="btn" href="https://github.com/cjdelisle/cjdns/"><?=_("View github repo")?> &raquo;</a></p>
        </div>
      </div>
      <hr>
      <footer></footer>
    </div>
    </body>
</html>
