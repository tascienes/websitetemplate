
<!DOCTYPE html>
<html>
<head>
  <title>BAİBÜ İHA</title>
  <link href="css/animated-slider.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/imagehover.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" />
  <link href="css/animated-slider.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>

  <link rel="stylesheet/less" type="text/css" href="css/styles.less" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>


</head>
<body>
  <div class="mobil-menu">
    <script>
    <!--
    function display() {
      var x =  document.getElementById('menu-start');

      var y = document.getElementById('menu-icon');
      y.classList.toggle("fa-times");
      if(x.style.display == "block"){
        x.style.display="none";
      }
      else{
        x.style.display="block";
      }
    }


    //-->
    </script>
    <i id="menu-icon" onclick="display()" class="but fas fa-bars"></i>


  </div>
  <nav id="menu-start" class="menu" style="background-color:#3c3c3c;">
    <ol>
      <li class="menu-item"><a class="menu-link" href="index.php">Anasayfa</a></li>
      <li class="menu-item"><a class="menu-link" href="index.php#about">Hakkımızda</a></li>
      <li class="menu-item"><a class="menu-link" href="gallery.php">Galeri</a></li>
      <!--	<li class="menu-item"><a class="menu-link" href="#0">Projeler</a></li> -->
      <li class="menu-item">
        <a class="menu-link" href="index.php#team">Ekip</a>
      </li>
      <li class="menu-item">
        <a class="menu-link" href="#">Sponsorlar</a>
        <ol class="sub-menu">
          <li class="menu-item"><a class="menu-link" href="sponsor.php">2017 Sponsorlar</a></li>
          <li class="menu-item"><a class="menu-link" href="#0">2018 Sponsorlar</a></li>
          <li class="menu-item"><a class="menu-link" href="#0">2019 Sponsorlar</a></li>
        </ol>
      </li>
      <li class="menu-item"><a class="menu-link" href="duyurular.php">Duyurular</a></li>
      <li class="menu-item"><a class="menu-link" href="#contact">İletişim</a></li>
    </ol>
  </nav>
