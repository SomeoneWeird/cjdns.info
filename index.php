<?php
  $url  = "http://vps.someoneweird.net:3000/";
  $str  = file_get_contents($url);
  $tmp = json_decode($str);
  $tmp = $tmp[0];

  $tmp1 = $tmp->nodecount;
  $tmp->nodecount = $tmp->online;
  $tmp->online = $tmp1;
?>


<!DOCTYPE html>
<HTML>
<HEAD>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="lol.css" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/cjdns.js"></script>
<script src="assets/js/google-code-prettify/prettify.js"></script>
<script src="assets/js/bootstrap-scrollspy.js"></script>

<link href="assets/css/docs.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 0px;
        padding-bottom: 500px;
      }
      .banner {
        -moz-box-shadow: -10px -10px -5px #888;
        -webkit-box-shadow: -10px -10px -5px #888;
        box-shadow: -10px -10px -5px #888;
      }
    </style>


<script type="text/javascript">

  $(function () { prettyPrint() })
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28848913-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>


</HEAD>




<body>


 <div class="topbar" data-scrollspy="scrollspy">
      <div class="fill">
        <div class="container">
          <a href="#" onClick="goToByScroll('overview');" class="brand">CJDNS<sup><span class="label success">beta</span></sup></a>
          <ul class="nav">
            <li><a href="#home" onClick="goToByScroll('overview');">Home</a></li>
            <li><a href="#install" onClick="goToByScroll('install');">Installation</a></li>
            <li><a href="#config" onClick="goToByScroll('config');">Configuration</a></li>
            <li><a href="#trouble" onClick="goToByScroll('trouble');">Troubleshooting</a></li>
            <li><a href="#other" onClick="goToByScroll('other');">Other</a></li>
            <li><a href="#nodes" onClick="goToByScroll('nodes');">Node Count: <b><?=$tmp->nodecount?></b></a></li>
            <li><a href="#nodes" onClick="goToByScroll('nodes');">Nodes Online: <b><?=$tmp->online?></b></a></li>
          </ul>
          <a href="http://hyperboria.net" class="brand">Hyperboria<sup><span class="label success">beta</span></sup></a>
        </div>
      </div>

    </div>

    <header class="jumbotron" id="overview">
      <div id="banner" class="inner" style="background-image: url(assets/img/back1.png);">

          <div class="row showgrid">

              <center>
                  <br /><br /><br /><br />
                  <img src="assets/img/cjdnslogofinal.png" alt="">
                  
              </center>

          </div>

          <div class="row showgrid">

              <center>
                  <br /><br /><br />
                  <font size=30>&#8220;</font><font size=5>A System Is Only Secure When Nobody Has Total Control</font><font size=30>&#8221;</font>
                  <br /><br /><br />
              </center>

          </div>
        


      </div>
    </header>

    <br /><br />

    <div class="container">

          <br /><br /><br />

          <!-- Example row of columns -->
          <div class="row">
            <div class="span-one-third">
              <h2>Installation</h2>
              <p>Need help with installation of cjdns? Click here.</p>
              <br />
              <p><a href="#" class="btn primary" onClick="goToByScroll('install');">Install Section</a></p>
            </div>
            <div class="span-one-third">
              <h2>Configuration</h2>
               <p>Installed, but can't configure it? Click here!</p>
               <br />
              <p><a href="#" class="btn primary" onClick="goToByScroll('config');">Config Section</a></p>
           </div>
            <div class="span-one-third">
              <h2>Troubleshooting</h2>
              <p>Oops. Something gone wrong and can't figure it out? Click here!</p>
              <p><a href="#" class="btn primary" onClick="goToByScroll('trouble');">Trouble Section</a></p>
            </div>
          </div>
          <br />
          <br />
          <!--<div class="row">
            <div class="alert-message info">
              <center>This website is far from being finished, please check back soon!</center>
            </div>
          </div> 
          -->

    </div> <!-- /container -->

    <br /><br />

    <br /><br /><br />

<section id="install">

    <div class="container">

                  <div class="page-header">
                      <h1>Installation <b><a href="https://github.com/cjdelisle/cjdns/" class="btn primary">CJDNS</a> <a href="https://github.com/libevent/libevent" class="btn primary">LibEvent</a></b></h1>
                  </div>


          <div class="row showgrid">
          
                <div class="span8 offset1">
                        <h3>LibEvent</h3>
                </div>

                <div class="span15 offset2">
                      <br />
                      <code>wget latest version from http://libevent.org/</code><br />
                      <code>tar xvf filename from above command.. libevent</code><br />
                      <code>cd libevent</code><br />
                      <code>./configure</code><br />
                      <code>make</code><br />
                      <span class="label warning">Run the following command as root (or use sudo).</span><br />
                      <code>make install</code>
                      <br /><br />

                </div>
                     
                <br /><br /><br />

               <div class="span8 offset1">
                        <h3>CJDNS</h3>
               </div>
                
              

               <div class="span15 offset2">
                      <br />
                      <code>git clone git://github.com/cjdelisle/cjdns.git</code><br />
                      <code>cd cjdns</code><br />
                      <code>mkdir build</code><br />
                      <code>cd build</code><br />
                      <code>export Log_LEVEL=DEBUG</code><br />
                      <code>cmake ..</code><br />
                      <code>make</code><br />
                      <code>make test</code><br />
                     
               </div>
                
          </div>

    </div> <!-- /container -->

</section> <!-- install -->


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


<section id="config">

    <div class="container">

                  <div class="page-header">
                      <h1>Configuration <small style="color: gray;"> Setting up CJDNS (Running OpenVZ? Scroll down to troubleshooting)</small></h1>
                  </div>


          <div class="row showgrid">
               <div class="span12 offset1">
                  <h3>Your System (#1)</h3>
                </div>

                              

              <div class="span12 offset2">
                      <br />
                      <code>useradd cjdns</code><br />
                      <code>/sbin/ip tuntap add mode tun user cjdns</code><br />
                      <code>/sbin/ip tuntap list | grep `id -u cjdns`</code><br />
                      <span class="label success">Take note of what "tun" device the above command outputs.</span><br /><br /><br />
                     
               </div>
          </div>

          <div class="row showgrid">

                <div class="span13 offset1">
                        <h3>CJDNS (#2)</h3>
                </div>

                <div class="span12 offset2">
                      <br />
                      <code>./cjdroute --genconf > cjdroute.conf</code><br />
                      <span class="label success">edit cjdroute.conf - set tunDevice to the 'tun' from above</span><br />
                      <code>./cjdroute --getcmds &lt; cjdroute.conf | sudo bash</code><br /> 
                      <span class="label success">Add the commands from ./cjdroute --getcmds &lt; cjdroute.conf to /etc/rc.local</span><br />
                      <br />

                      <div class="alert-message info">
                          <center>Before starting cjdns, you need to get info from people so you can actually connect to the network! Drop by <b>#cjdns</b> on <b>EfNet.</b></center>
                      </div>
                      <code>sudo -u cjdns ./cjdroute &lt; cjdroute.conf</code><br />

                </div>
                
          </div>

    </div> <!-- /container -->

</section> <!-- config -->


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


<section id="trouble">

    <div class="container">

                  <div class="page-header">
                      <h1>Troubleshooting <small><font style="color: gray;">your cjdns installation.</font></small></h1>
                  </div>


          <div class="row showgrid">
               <div class="span9 offset1">
                        <h3>Object "tuntap" is unknown, try "ip help".</h3><br />
               </div>

          </div>

          <div class="row showgrid">

            <div class="span12 offset2">
                
                This error happens when you have an outdated `ip` version.<br /><br />
                Download a newer version from <a href="http://ircerr.bt-chat.com/cjdns/ip.tar.gz"><big>here</big></a>.<br /><br />
                Place the newer IP binary in <code>/usr/local/bin</code><br /><br />

                <div class="alert-message warning">
                    <p><strong>Dont</strong> replace your systems version of IP with the one you just downloaded!</p>
                </div>

            </div>

          </div>


          <div class="row showgrid">
               <div class="span9 offset1">
                        <h3>OpenVZ</h3><br />
               </div>

          </div>

          <div class="row showgrid">

            <div class="span9 offset2">
                
                Sometimes CJDNS will fail to start properly on a system thats using OpenVZ (as a guest).<br />
                Instead of starting CJDNS the normal way, use <br />
                <code>
                   sudo su -c "./cjdroute &lt; /etc/cjdroute.conf & ./cjdroute --getcmds &lt; ./cjdroute.conf | bash"
                </code>

            </div>

          </div>





    </div> <!-- /container -->

</section> <!-- trouble -->

<br /><br /><br /><br /><br /><br /><br />

<section id="other">

    <div class="container">




                  <div class="page-header">
                      <h1>Other</h1>
                  </div>


          <div class="row showgrid">
          
               <div class="span12 offset1">

                        <h3>CjDNS Links:</h3>

                </div>
          </div>

           <div class="row showgrid">

              <div class="span9 offset2">
                  
                  <a href="http://[fc38:4c2c:1a8f:3981:f2e7:c2b9:6870:6e84]/cjdns.html">ircerr's CJDNS page.</a><br />
                  <a href="http://[fc5d:baa5:61fc:6ffd:9554:67f0:e290:7535]">Mikey_'s NodeInfo</a><br />
                  <a href="http://[fcd5:c432:affb:7e77:a754:74e0:5e98:12d3]">Mikey_'s Git Repo</a><br />
                  <a href="http://[fcfc:a07e:a3d2:4b2:ef7d:f1f7:d830:7a2f]:8100/coasttocoast">MaLaCoiD's CoasttoCoast Radio Station</a><br />
                  IRC Connections:<br />
                    <a href="irc://irc.inet.tele.dk:6667/cjdns">IRC Client</a><br />
                    <a href="http://chat.efnet.org/">IRC Webchat</a><small> -- Choose a nickname, and put #cjdns in the channels box.</small>
                  


              </div>

            </div>


    </div> <!-- /container -->

</section> <!-- other -->


<section id="nodes">

    <div class="container">

                  <div class="page-header">
                      <h1>Nodes</h1>
                  </div>

    <table class="bordered-table">
        <thead>
          <tr>
            <th>#</th>
            <th>IP</th>
            <th>Nick</th>
            <th>Ports</th>
          </tr>
        </thead>
        <tbody>

        <?php 

          $i = 0;
          
          if(is_numeric($_GET['nodeindex'])) {
            $i = $_GET['nodeindex'];
          }
          

          while($i<($_GET['nodeindex']+10)) {
          
                $e = $tmp->addresses[$i];

                $ports = "N/A";
                $addr = $e->addr;
                $nick = $e->nick;
                $i++;
                echo("
                <tr>
                  <td>".$i."</td>
                  <td>".$addr."</td>");
                if(strlen($nick)>1) {
                  echo("<td>".$nick."</td>");
                } else {
                  echo("<td>N/A</td>");
                }
                
                echo("<td>".$ports."</td></tr>");

          }

        ?>

        </tbody>
      </table>


      <?php 

      if(is_numeric($_GET['nodeindex'])) {
        $active = $_GET['nodeindex']/10;
      } else 
        $active = 0;

      $num = count($tmp->addresses)/10;

      echo("<center><div class='pagination'> <ul>"); //start

      if($active==0) {
          echo("<li class='prev disabled'><a href='#nodes'>&larr; Previous</a></li>");
      } else {
          echo("<li class='prev'><a href='?nodeindex=".(($active-1)*10)."#nodes'>&larr; Previous</a></li>");
      }




      for($e = 0; $e < $num; $e++) {
        
      

          if($e==$active) {
            
                  echo("<li class='active'><a href='#nodes'>".$e."</a></li>");

          } elseif($e<19) {
                  
                  echo("<li><a href='?nodeindex=".($e*10)."#nodes'>".$e."</a></li>");
          }


      }

      if($active==substr($num*10,0,strlen($num*10)-1)) {
        echo("<li class='prev disabled'><a href='#nodes'>&rarr; Next</a></li>");
      } else {
        echo("<li class='prev'><a href='?nodeindex=".(($active+1)*10)."#nodes'>&rarr; Next</a></li>");
      }

      echo("</ul></div></center>");

      ?>



    </div> <!-- /container -->

</section> <!-- nodes -->

</body>
</HTML>