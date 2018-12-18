<!DOCTYPE html>
<html lang="es" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" class="">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

      <script type="text/javascript" async="" src="extra/cs.js.download"></script><script src="extra/1483047915331997" async=""></script><script async="" src="extra/fbevents.js.download"></script><script type="text/javascript" async="" src="extra/uwt.js.download"></script><script type="text/javascript" async="" src="extra/hotjar-444446.js.download"></script><script type="text/javascript" async="" src="extra/analytics.js.download"></script><script type="text/javascript" async="" src="extra/ec.js.download"></script><script type="text/javascript" async="" src="extra/linkid.js.download"></script><script type="text/javascript" async="" src="extra/sp-analytics.ca732ea32848c43b0be5.js.download"></script><script type="text/javascript" async="" src="extra/js"></script><script async="" src="extra/gtm.js.download"></script><script async="" src="extra/analytics.js.download"></script><script src="extra/jquery-2.1.3.min.54d8fc28194be468622f.js.download"></script>
      
      <style>.async-hide { opacity: 0 !important}</style>
       
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="Spotify es un servicio de música digital que te da acceso a millones de canciones.">
      <meta name="keywords" content="Spotify, música, online, en linea, escuchar, streaming, reproducir, digital, álbum, playlist">

      <meta property="fb:app_id" content="174829003346">
      <meta property="og:title" content="Música para todos.">
      <meta property="og:type" content="website">
      <meta property="og:url" content="#">
      <meta property="og:image" content="img/banner2.png">
      <meta property="og:image:secure_url" content="img/banner2.png">
      <meta property="og:description" content="Spotify es toda la música que necesitarás.">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="Música para todos.">
      <meta name="twitter:image" content="img/twitter_card-default.jpg">
      <meta name="twitter:description" content="Spotify es toda la música que necesitarás.">
                
      <title>Canjea tu código - Spotify</title>

      <link rel="icon" href="img/logo_obscuro.png">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/logo.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/logo4.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/logo2.png">
      <link rel="apple-touch-icon-precomposed" href="img/logo3.png">
    
      <link rel="canonical" href="#">
      <link rel="stylesheet" href="css/spotify-d9a2deabab.css">
      <link rel="stylesheet" href="css/redeem-embed.6b0cedac184c2f27772b.css">
      <link rel="stylesheet" href="css/mensaje_error.css">
 
      <script src="extra/tracking.download.0a5d990a048e858d07ff.js.download"></script>
           
      <script async="" src="extra/hotjar-444446.js(1).download"></script>
      <script async="" src="extra/modules-9cac31d617713ef2768f017542280bf6.js.download"></script>
      <style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style>

      <script>
        function quitar(){
          document.getElementById("negro").style.display="none";
          document.getElementById("dialogo").style.display="none";
          window.location="canjear.php";
        }
      </script>

  </head>

  <body class=" m-hn l-es page-account-profile is-loggedin  reboot ">

        <?php
            include_once("class/conexion_copy.php");
            session_start();
            $conexion = new Conexion();
            $conexion->establecerConexion();//solo para establecer conexion y que no de el warning
        ?>   
                                          
        <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
              <symbol id="spotify-logo" viewBox="0 0 827.79999 248.275">
                    <g transform="matrix(1.25 0 0 -1.25 0 248.28)">
                          <g transform="scale(.1)">
                              <path d="m1580.6 1105.8c-320.13 190.11-848.16 207.59-1153.8 114.84-49.078-14.89-100.97 12.82-115.84 61.89-14.872 49.1 12.8 100.96 61.914 115.88 350.8 106.49 933.97 85.91 1302.5-132.85 44.14-26.2 58.62-83.21 32.45-127.28-26.18-44.14-83.24-58.69-127.27-32.48zm-10.5-281.56c-22.46-36.449-70.11-47.867-106.51-25.5-266.88 164.05-673.86 211.58-989.6 115.73-40.945-12.367-84.191 10.722-96.629 51.582-12.339 40.949 10.754 84.119 51.629 96.569 360.7 109.45 809.1 56.44 1115.6-131.94 36.4-22.41 47.86-70.078 25.48-106.44zm-121.5-270.43c-17.84-29.258-55.95-38.43-85.1-20.598-233.22 142.54-526.75 174.73-872.45 95.758-33.312-7.629-66.511 13.25-74.109 46.551-7.633 33.312 13.164 66.511 46.555 74.109 378.3 86.48 702.8 49.269 964.57-110.69 29.19-17.832 38.38-55.953 20.53-85.132zm-455.48 1432.4c-548.48 0-993.12-444.6-993.12-993.06 0-548.53 444.64-993.14 993.12-993.14 548.5 0 993.12 444.61 993.12 993.14 0 548.47-444.62 993.1-993.12 993.1"></path>
                              <path d="m2701.9 1069.4c-171.46 40.89-202 69.59-202 129.88 0 56.99 53.64 95.31 133.41 95.31 77.32 0 153.98-29.11 234.37-89.05 2.44-1.81 5.48-2.54 8.48-2.06 3 0.45 5.66 2.09 7.41 4.57l83.73 118.03c3.44 4.86 2.5 11.56-2.13 15.27-95.67 76.77-203.4 114.09-329.32 114.09-185.15 0-314.46-111.1-314.46-270.08 0-170.48 111.55-230.83 304.33-277.43 164.08-37.789 191.78-69.449 191.78-126.07 0-62.719-56-101.71-146.11-101.71-100.09 0-181.73 33.719-273.06 112.8-2.27 1.953-5.37 2.851-8.24 2.679-3.02-0.25-5.78-1.648-7.71-3.957l-93.87-111.72c-3.94-4.641-3.44-11.559 1.11-15.578 106.26-94.86 236.94-144.97 377.97-144.97 199.51 0 328.42 109.02 328.42 277.74 0 142.59-85.19 221.45-294.11 272.26"></path>
                              <path d="m3592.2 878.31c0-120.4-74.17-204.42-180.36-204.42-105 0-184.19 87.839-184.19 204.42 0 116.57 79.19 204.42 184.19 204.42 104.48 0 180.36-85.949 180.36-204.42zm-144.83 360.22c-86.47 0-157.4-34.06-215.9-103.85v78.56c0 6.19-5.03 11.25-11.22 11.25h-153.53c-6.2 0-11.22-5.06-11.22-11.25v-872.86c0-6.199 5.02-11.25 11.22-11.25h153.53c6.19 0 11.22 5.051 11.22 11.25v275.52c58.51-65.66 129.45-97.726 215.9-97.726 160.69 0 323.34 123.69 323.34 360.14 0 236.5-162.65 360.22-323.34 360.22"></path>
                              <path d="m4187.7 672.63c-110.07 0-193.05 88.43-193.05 205.68 0 117.75 80.11 203.19 190.51 203.19 110.77 0 194.31-88.43 194.31-205.76 0-117.72-80.65-203.11-191.77-203.11zm0 565.9c-206.94 0-369.05-159.34-369.05-362.79 0-201.24 161-358.9 366.51-358.9 207.66 0 370.27 158.8 370.27 361.47 0 202-161.49 360.22-367.73 360.22"></path>
                              <path d="m4997.3 1224.5h-168.95v172.74c0 6.2-5.01 11.25-11.21 11.25h-153.52c-6.21 0-11.26-5.05-11.26-11.25v-172.74h-73.83c-6.18 0-11.18-5.06-11.18-11.25v-131.95c0-6.2 5-11.25 11.18-11.25h73.83v-341.45c0-137.98 68.67-207.94 204.12-207.94 55.07 0 100.77 11.372 143.83 35.801 3.5 1.949 5.68 5.723 5.68 9.731v125.66c0 3.871-2.03 7.531-5.34 9.57-3.35 2.102-7.51 2.199-10.93 0.5-29.58-14.879-58.18-21.738-90.13-21.738-49.26 0-71.24 22.359-71.24 72.488v317.38h168.95c6.21 0 11.21 5.05 11.21 11.25v131.95c0 6.19-5 11.25-11.21 11.25"></path>
                              <path d="m5586 1223.8v21.22c0 62.41 23.92 90.24 77.6 90.24 32.01 0 57.72-6.36 86.52-15.96 3.54-1.12 7.24-0.56 10.12 1.56 2.96 2.12 4.64 5.53 4.64 9.13v129.38c0 4.95-3.18 9.33-7.94 10.78-30.42 9.05-69.33 18.34-127.61 18.34-141.82 0-216.77-79.86-216.77-230.86v-32.49h-73.76c-6.19 0-11.27-5.05-11.27-11.25v-132.62c0-6.2 5.08-11.25 11.27-11.25h73.76v-526.66c0-6.199 5-11.25 11.19-11.25h153.54c6.2 0 11.25 5.051 11.25 11.25v526.66h143.35l219.59-526.52c-24.93-55.329-49.44-66.329-82.91-66.329-27.05 0-55.53 8.071-84.65 24.008-2.75 1.5-5.99 1.762-8.95 0.84-2.93-1.027-5.4-3.207-6.64-6.059l-52.04-114.17c-2.48-5.387-0.36-11.727 4.83-14.528 54.33-29.422 103.37-41.98 163.98-41.98 113.37 0 176.03 52.808 231.28 194.89l266.36 688.3c1.34 3.46 0.94 7.37-1.18 10.44-2.11 3.05-5.51 4.89-9.24 4.89h-159.83c-4.78 0-9.07-3.04-10.63-7.54l-164-467.82-179.3 468.02c-1.64 4.35-5.83 7.23-10.49 7.23h-262.28"></path>
                              <path d="m5244.7 1224.5h-153.54c-6.2 0-11.25-5.06-11.25-11.25v-669.86c0-6.199 5.05-11.25 11.25-11.25h153.54c6.19 0 11.25 5.051 11.25 11.25v669.86c0 6.19-5.06 11.25-11.25 11.25"></path>
                              <path d="m5168.7 1529.5c-60.82 0-110.19-49.24-110.19-110.06 0-60.87 49.37-110.16 110.19-110.16 60.8 0 110.11 49.29 110.11 110.16 0 60.82-49.31 110.06-110.11 110.06"></path>
                              <path d="m6520.1 1157.9h-28.14v-35.88h28.14c14.04 0 22.42 6.87 22.42 17.95 0 11.67-8.38 17.93-22.42 17.93zm18.23-51.18 30.57-42.79h-25.77l-27.51 39.25h-23.66v-39.25h-21.57v113.42h50.58c26.34 0 43.68-13.48 43.68-36.18 0-18.59-10.74-29.95-26.32-34.45zm-23.95 108.37c-55.35 0-97.23-43.99-97.23-97.87 0-53.84 41.58-97.25 96.66-97.25 55.33 0 97.25 43.96 97.25 97.87 0 53.84-41.61 97.25-96.68 97.25zm-0.57-205.93c-60.76 0-108.05 48.8-108.05 108.06 0 59.27 47.9 108.62 108.62 108.62 60.76 0 108.04-48.79 108.04-108 0-59.27-47.86-108.68-108.61-108.68"></path>
                          </g>
                    </g>
              </symbol>
              <symbol id="facebook-icon" viewBox="0 0 448 448">
                    <path d="m119.75 242.25v-74h63.75v-54.5q0-46.5 26-72.125t69.25-25.625q36.75 0 57 3v66h-39.25q-21.5 0-29 9t-7.5 27v47.25h73.25l-9.75 74h-63.5v189.75h-76.5v-189.75h-63.75z"></path>
              </symbol>
              <symbol id="twitter-icon" viewBox="0 0 448 448">
                    <path d="m27 347.75q8.75 1 19.5 1 56.25 0 100.25-34.5-26.25-0.5-47-16.125t-28.5-39.875q8.25 1.25 15.25 1.25 10.75 0 21.25-2.75-28-5.75-46.375-27.875t-18.375-51.375v-1q17 9.5 36.5 10.25-16.5-11-26.25-28.75t-9.75-38.5q0-22 11-40.75 30.25 37.25 73.625 59.625t92.875 24.875q-2-9.5-2-18.5 0-33.5 23.625-57.125t57.125-23.625q35 0 59 25.5 27.25-5.25 51.25-19.5-9.25 28.75-35.5 44.5 23.25-2.5 46.5-12.5-16.75 24.5-40.5 41.75 0.25 3.5 0.25 10.5 0 32.5-9.5 64.875t-28.875 62.125-46.125 52.625-64.5 36.5-80.75 13.625q-67.75 0-124-36.25z"></path>
              </symbol>
              <symbol id="instagram-icon" viewBox="0 0 448 448">
                    <path d="M224,40.376 C283.808,40.376 290.901333,40.6 314.533333,41.6826667 C375.237333,44.4453333 403.592,73.248 406.354667,133.504 C407.437333,157.117333 407.642667,164.210667 407.642667,224.018667 C407.642667,283.845333 407.418667,290.92 406.354667,314.533333 C403.573333,374.733333 375.293333,403.592 314.533333,406.354667 C290.901333,407.437333 283.845333,407.661333 224,407.661333 C164.192,407.661333 157.098667,407.437333 133.485333,406.354667 C72.632,403.573333 44.4266667,374.64 41.664,314.514667 C40.5813333,290.901333 40.3573333,283.826667 40.3573333,224 C40.3573333,164.192 40.6,157.117333 41.664,133.485333 C44.4453333,73.248 72.7253333,44.4266667 133.485333,41.664 C157.117333,40.6 164.192,40.376 224,40.376 L224,40.376 Z M224,-1.57772181e-30 C163.165333,-1.57772181e-30 155.549333,0.261333333 131.656,1.344 C50.3066667,5.07733333 5.096,50.2133333 1.36266667,131.637333 C0.261333333,155.549333 -9.06682137e-15,163.165333 -9.06682137e-15,224 C-9.06682137e-15,284.834667 0.261333333,292.469333 1.344,316.362667 C5.07733333,397.712 50.2133333,442.922667 131.637333,446.656 C155.549333,447.738667 163.165333,448 224,448 C284.834667,448 292.469333,447.738667 316.362667,446.656 C397.637333,442.922667 442.96,397.786667 446.637333,316.362667 C447.738667,292.469333 448,284.834667 448,224 C448,163.165333 447.738667,155.549333 446.656,131.656 C442.997333,50.3813333 397.805333,5.096 316.381333,1.36266667 C292.469333,0.261333333 284.834667,-9.06682137e-15 224,-9.06682137e-15 L224,-1.57772181e-30 Z M224,108.976 C160.477333,108.976 108.976,160.477333 108.976,224 C108.976,287.522667 160.477333,339.042667 224,339.042667 C287.522667,339.042667 339.024,287.541333 339.024,224 C339.024,160.477333 287.522667,108.976 224,108.976 Z M224,298.666667 C182.765333,298.666667 149.333333,265.253333 149.333333,224 C149.333333,182.765333 182.765333,149.333333 224,149.333333 C265.234667,149.333333 298.666667,182.765333 298.666667,224 C298.666667,265.253333 265.234667,298.666667 224,298.666667 Z M343.578667,77.56 C328.72,77.56 316.68,89.6 316.68,104.44 C316.68,119.28 328.72,131.32 343.578667,131.32 C358.418667,131.32 370.44,119.28 370.44,104.44 C370.44,89.6 358.418667,77.56 343.578667,77.56 Z"></path>
              </symbol>
              <symbol id="user-icon" viewBox="0 0 1024 1024">
                    <path d="m730.06 679.64q-45.377 53.444-101.84 83.443t-120 29.999q-64.032 0-120.75-30.503t-102.6-84.451q-40.335 13.109-77.645 29.747t-53.948 26.722l-17.142 10.084q-29.747 19.159-51.175 57.729t-21.428 73.107 25.461 59.242 60.754 24.705h716.95q35.293 0 60.754-24.705t25.461-59.242-21.428-72.603-51.679-57.225q-6.554-4.033-18.907-10.84t-51.427-24.453-79.409-30.755zm-221.84 25.72q-34.285 0-67.561-14.873t-60.754-40.335-51.175-60.502-40.083-75.124-25.461-84.451-9.075-87.728q0-64.032 19.915-116.22t54.452-85.964 80.67-51.931 99.072-18.151 99.072 18.151 80.67 51.931 54.452 85.964 19.915 116.22q0 65.04-20.167 130.58t-53.948 116.72-81.426 83.443-98.568 32.268z"></path>
              </symbol>
              <symbol id="chevron-down" viewBox="0 0 1024 1024">
                    <path class="path1" d="M476.455 806.696l-381.164-381.164q-14.621-14.621-14.621-35.293t14.621-34.789 35.293-14.117 34.789 14.117l342.846 343.35 349.4-349.4q14.621-14.117 35.293-14.117t34.789 14.117 14.117 34.789-14.117 34.789l-381.164 381.164q-19.159 19.159-38.318 19.159t-31.764-12.605z"></path>
              </symbol>
              <symbol id="scroll-down" viewBox="643.5 386 22.1 21.9">
                    <path d="M665.6,396.3c0,0.3-0.1,0.7-0.4,0.9l-9.8,10.4c-0.5,0.5-1.3,0.5-1.7,0l-9.8-10.4c-0.5-0.5-0.5-1.3,0-1.8
                                    s1.3-0.5,1.7,0l8.9,9.5l8.9-9.5c0.5-0.5,1.3-0.5,1.7,0C665.5,395.6,665.6,396,665.6,396.3z">
                        <path d="M665.6,387.3c0,0.3-0.1,0.7-0.4,0.9l-9.8,10.4c-0.5,0.5-1.3,0.5-1.7,0l-9.8-10.4c-0.5-0.5-0.5-1.3,0-1.8
                                      s1.3-0.5,1.7,0l8.9,9.5l8.9-9.5c0.5-0.5,1.3-0.5,1.7,0C665.5,386.6,665.6,387,665.6,387.3z">
                        </path>
                    </path>
              </symbol>
        </svg>
                                                 
        <header id="js-navbar" class="navbar navbar-default navbar-static-top " role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="sidepanel" data-target="#navbar-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>        
                        <ul class="nav">
                            <li class="dropdown">
                                <a href="#" class="user-link dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown">      
                                  <div class="user-icon-container img-circle navbar-user-img">
                                    <svg class="user-icon">
                                      <use xlink:href="#user-icon">
                                    </use></svg>
                                  </div>
                                </a>
                                <a href="#" class="user-link hidden-md hidden-lg" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;account&quot;}">        
                                  <div class="user-icon-container img-circle navbar-user-img">
                                    <svg class="user-icon">
                                      <use xlink:href="#user-icon">
                                    </use></svg>
                                  </div>
                                </a>
                                <?php
                                  if(!isset($_SESSION['codigo_usuario'])){
                                                         
                                  }
                                  else{
                                    echo '<ul class="dropdown-menu dropdown-menu-right">';
                                      echo '<li>';
                                        echo '<a href="vista_general_cuenta.php">Cuenta</a>';
                                      echo '</li>';
                                      echo '<li>';
                                        echo '<a href="php/session_cerrar.php">Cerrar Sesión</a>';
                                      echo '</li>';
                                    echo '</ul>';
                                  }
                                ?>
                            </li>
                        </ul>
                        <a href="#" class="user-link hidden">      
                            <div class="user-icon-container img-circle navbar-user-img">
                              <svg class="user-icon">
                                  <use xlink:href="#user-icon">
                                  </use>
                              </svg>
                            </div>    
                        </a>
                        <a class="navbar-brand" href="index.html" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;spotify-logo&quot;}">
                            <span class="navbar-logo">Spotify</span>
                        </a>
                    </div>
                    <nav class="collapse navbar-collapse" id="navbar-nav" role="navigation">          
                        <ul class="nav navbar-nav navbar-right nav-main">  
                            
                            <li class="alternate sidepanel-item-small hidden-md ">
                              <a href="#" id="nav-link-upgrade" data-ga-category="menu" data-ga-action="upgrade">
                                Mejora tu cuenta
                              </a>
                            </li>
                            <?php
                              if(!isset($_SESSION['codigo_usuario'])){
                                                       
                              }
                              else{
                                echo '<li class="alternate sidepanel-item-small hidden-md hidden-lg ">';
                                  echo '<a href="vista_general_cuenta.php" id="nav-link-account" data-ga-category="menu" data-ga-action="account" style="animation-delay: 85ms;">';
                                    echo 'Cuenta';
                                  echo '</a>';
                                echo '</li>';
                                echo '<li class="alternate sidepanel-item-small hidden-md hidden-lg ">';
                                  echo '<a href="php/session_cerrar.php" id="nav-link-log-out" data-ga-category="menu" data-ga-action="log-out" style="animation-delay: 102ms;">';
                                    echo 'Cerrar Sesión';
                                  echo'</a>';
                                echo '</li>';
                              }
                            ?>
                            <li class="dropdown alternate hidden-sidepanel">
                                <a href="#" class="user-link dropdown-toggle" data-toggle="dropdown">    
                                  <div class="user-icon-container img-circle navbar-user-img">
                                    <svg class="user-icon">
                                      <use xlink:href="#user-icon">
                                      </use>
                                    </svg>
                                  </div>
                                  <span class="user-text">Perfil</span>
                                  <svg class="svg-chevron-down">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chevron-down"></use>
                                  </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="alternate sidepanel-item-small visible-md-block ">
                                      <a href="#" id="nav-link-upgrade" data-ga-category="menu" data-ga-action="upgrade">
                                        Mejora tu cuenta
                                      </a>
                                    </li>
                                    <?php
                                      if(!isset($_SESSION['codigo_usuario'])){
                                                       
                                      }
                                      else{
                                        echo'<li>';
                                          echo '<a href="vista_general_cuenta.php">Cuenta</a>';
                                        echo '</li>';
                                        echo '<li>';
                                          echo '<a href="php/session_cerrar.php">Cerrar Sesión</a>';
                                        echo '</li>';
                                      }
                                    ?>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
        </header>    

        <div class="wrap">
            <div class="content-main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                            <div class="message-panel error-message with-icon hidden" data-form-field-messages="">
                              <div class="icon">
                                <svg viewBox="0 0 24 24">
                                  <circle cx="12" cy="12" r="9.5" stroke="currentColor" fill="none"></circle>
                                  <line x1="12" y1="17" x2="12" y2="10" stroke="currentColor"></line>
                                  <circle cx="12" cy="7.35" r=".35" stroke="currentColor" fill="none"></circle>
                                </svg>
                              </div>
                              <ul class="form-message-list"></ul>
                            </div>
                            <div class="embeddable-checkout">
                              <div class="panel panel-redeem" data-redeem-panel="">
                                <div class="message-panel hidden" data-transactional-messages="">
                                </div>
                                <div class="message-panel error-message with-icon hidden" data-form-field-messages="">
                                    <div class="icon">
                                      <svg viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="9.5" stroke="currentColor" fill="none"></circle>
                                        <line x1="12" y1="17" x2="12" y2="10" stroke="currentColor"></line>
                                        <circle cx="12" cy="7.35" r=".35" stroke="currentColor" fill="none"></circle>
                                      </svg>
                                    </div>
                                    <ul class="form-message-list"></ul>
                                </div>
                                <div data-redeem-form-container="">
                                  <?php
                                    if(!isset($_SESSION['codigo_usuario'])){
                                        echo '<br><br><br>No has iniciado session, <a href="iniciar_seccion.html">Inicia session</a> para canjear el codigo de tu tarjeta de regalo de spotify premium.<br><br>';
                                    }
                                    else{
                                        $codigo_usuario = $_SESSION['codigo_usuario'];
                                        $conexion->establecerConexion();

                                        
                                        echo'<form method="post" action="ajax_procesar_php/acciones_tarjeta_regalo.php" autocomplete="off">';
                                            echo'<h2>Canjea tu código</h2>';
                                            echo'<p>Ingresa el PIN que aparece al dorso de tu tarjeta de regalo o el código premium que figura en el recibo de la tienda.</p>';
                                            echo'<div class="form-group">';
                                                echo'<label for="redeem_code_token" class="required">Ingresa tu código premium</label>';
                                                echo'<input type="text" id="redeem_code_token" name="txt-codigo" required="required" class="form-control" maxlength="12" placeholder="Tarjeta de 12 digitos">';
                                            echo'</div>';
                                            echo'<div>';
                                              echo'<div class="submit-button">';
                                                echo'<button type="submit" name="btn-canjear" class="btn btn-green">
                                                    Ingresar código';
                                                echo'</button>';
                                              echo'</div>';
                                            echo'</div>';
                                        echo'</form>';
                                    }
                                  ?>
                                </div>
                                <script src="extra/redeem-embed.c0b7c10524217d728f71.js.download"></script>
                              </div>
                            </div>
                        </div>
                        <?php
                          if(!isset($_SESSION['codigo_usuario'])){}
                          else{
                              echo'<div class="col-sm-6 col-sm-offset-3 text-center redeem-use-different-method">
                                  <a href="#">¿Deseas utilizar otra opción de pago?</a>
                              </div>';
                          }
                        ?>
                    </div>
                </div>
            </div>
        </div>

                
        <script src="extra/spweb-site.min.72b2316e28705b8d5374.js.download"></script>                   
        <script src="extra/account.f667211bcca065c9362a.js.download"></script>                  
        <script async="" src="extra/vt-150.js.download"></script>
                          
        <iframe height="0" width="0" style="display: none; visibility: hidden;" src="extra/activityi.html"></iframe>
        <script type="text/javascript" id="cidsyncjs" src="extra/sync.min.js.download"></script>
                          
        <div id="ttdUniversalPixelTag1dfda5e8d7794c54abf4a4ce7c009256" style="display:none">
              <script type="text/javascript" id="" src="extra/up_loader.1.1.0.js.download"></script>
        </div>
        
        <iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;" src="extra/rcj-da10bd4908deb9e19dfde013ec3fe4ff.html"></iframe>
        <iframe id="universal_pixel" allowtransparency="true" height="0" width="0" style="display:none;" src="extra/up.html"></iframe>
        <script src="extra/adsct" type="text/javascript"></script>
        <script src="extra/adsct" type="text/javascript"></script>
        <script src="extra/adsct(1)" type="text/javascript"></script>

        <?php
            if (isset($_GET["id"]) && !empty($_GET["id"])) {
              if ($_GET["id"]=="correcto") {
                echo '<div onclick="quitar()" id="negro"></div>';
                echo '<div id="dialogo">';
                  echo '<p>Codigo ingresado exitosamente...</p>';
                echo '</div>';
              }
              elseif($_GET["id"]=="incorrecto"){
                echo '<div onclick="quitar()" id="negro"></div>';
                echo '<div id="dialogo">';
                  echo '<p>Codigo de targeta de regalo incorrecto, por favor ingrese uno valido</p>';
                echo '</div>';
              }
            }
        ?>

  </body>
</html>
<?php
  if(!isset($_SESSION['codigo_usuario'])){
                                                                         
  }
  else{
    $conexion->cerrarConexion();
  } 
?>