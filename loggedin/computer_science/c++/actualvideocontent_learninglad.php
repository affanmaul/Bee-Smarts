<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../java/accordionstyle.css">
<link rel="stylesheet" href="../../../style.css">
<title>BeeSmarts</title>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../../../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="../../profile.php" name="profile">Profile</a>
               <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>

  <?php
      $lien="";
      $nom_vid="";
      $chapitre="";
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '1':
            $lien="https://www.youtube.com/embed/3MI5_Ha5DqE";
            $nom_vid="Belajar Mendeskripsikan";
            $chapitre="0";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/AygXKX8rgb8";
            $nom_vid="Memahami dan Mencipta Cerita Fantasi";
            $chapitre="0";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/EF-IK2W1HA8";
            $nom_vid="Mewariskan Budaya Melalui Teks Prosedur";
            $chapitre="0";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/88LwQsyYLpM";
            $nom_vid="Menyimak Ilmu dalam Laporan Hasil Observasi ";
            $chapitre="0";
            break;
          default:
            # code...
            break;
        }
      }
   ?>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../all_courses.php" style="color:white;">Kursus</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_c++_learninglad.php" style="color:white;">Bahasa Indonesia</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;"><?php echo $nom_vid ?></li>
  </ol>
</nav>


<div class="video_accordian_container">
    <div class="row">
        <div class="col-md-8">
          <!-- The actual video content -->
          <div class="iframe-container">
            <iframe width="950" height="550" src="<?php echo isset($lien)?$lien:''; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-4">
          <!-- The lessons within the same chapter  -->
          <?php
            if (isset($chapitre)){
              switch ($chapitre) {
                case '0':
                  echo '<!-- Détails chapitre 0 -->
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Kelas 7 Semester 1
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_learninglad.php?video=1">&#10170  Belajar Mendeskripsikan</a><br>
                        <a href="actualvideocontent_learninglad.php?video=2">&#10170  Memahami dan Mencipta Cerita Fantasi</a><br>
                        <a href="actualvideocontent_learninglad.php?video=3">&#10170  Mewariskan Budaya Melalui Teks Prosedur</a><br>
                        <a href="actualvideocontent_learninglad.php?video=4">&#10170  Menyibak Ilmu dalam Laporan Hasil Observasi </a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                default:
                  // code...
                  break;
              }
            }
           ?>
        </div>
    </div>
</div>

<?php require "../../../footer.php" ?>
