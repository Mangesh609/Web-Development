<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Admin DashBoard</title>
  <!-- FAVICON -->
  <link rel="icon" href="icon.png" sizes="32x32">
  <!--Font CDN-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Tinos&display=swap" rel="stylesheet">
  <!-- CSS CDN-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <!-- JavaScript CDN -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <!--External css-->
  <link rel="stylesheet" href="style.css">
  <?php
      $con = new mysqli("localhost","root","","blewminds");
      $sql = "delete from feedbacks where FEEDBACK='';";
      $res = $con->query($sql);
      $sql = "select * from feedbacks;";
      $res = $con->query($sql);
      $tot = mysqli_num_rows($res);
     
        ?>
</head>

<body>
  <!--Nav-Bar-->

  <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: rgb(17, 17, 17);height: 70px;">
    <div class="container-fluid" style="background-color: rgb(17, 17, 17);">

      <span style="margin-right: 40%;">
        <a href="admin_dashboard.html"><img
            src="https://www.blewminds.com/wp-content/uploads/2021/03/cropped-cropped-Blewmind-logo.png" alt="Logo"
            height="60px" width="100%"></a>
      </span>

      <!--Toogle Bar for Small Devices-->

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item"> <a href="add_faculty.html" class="nav-link">Add Faculty/Team Member</a></li>
          <li class="nav-item"> <a href="admin_dashboard.php" class="nav-link">Assign Faculty/Team member</a> </li>
          <li class="nav-item"> <a href="index.html" class="nav-link">Log Out</a> </li>
      </div>
    </div>
  </nav>
  <section class="dashboard">
    <h1>Admin Dashboard</h1>
  </section>
  <!--Actual Content-->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 id="heading">Feedbacks will be shown here</h2>
      </div>
      <?php
      if($tot == 0){
        echo'<div class="card" style="height:auto;width:90%;padding:1%;margin:1%;">';

        echo '<h5 id="feed">No Feedbacks found</h5>';

        echo'</div>';
      }
       else{
         while( $data = $res->fetch_assoc())
        {
        echo'<div class="card" style="height:auto;width:90%;padding:1%;margin:1%;">';

        echo '<h5 style="color:	#E43D40;font-weight:bold;">'.$data['FIRSTNAME']." ".$data['LASTNAME'].'</h5>';
        echo '<p style="font-size:13px;color:blue;">'.$data['EMAIL-ID'].'</p>';
        echo'<h5 style="color:	#E43D40;font-weight:bold;">Feedback</h5>';
        echo '<p id="feed">'.$data['FEEDBACK'].'</p>';

        echo'</div>';
        }
      } 
      ?>
      <div class="col-lg-12" id="divimg">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2800">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
              aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img
                src="data:image/png;base64,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"
                class="d-block w-100" alt="Image not found">
            </div>
            <div class="carousel-item">
              <img src="image.png" class="d-block w-100" alt="Image not found">
            </div>
            <div class="carousel-item">
              <img src="https://thetycoonmedia.com/wp-content/uploads/2020/10/Untitled-design-38.png"
                class="d-block w-100" alt="image not found">
            </div>
            <div class="carousel-item">
              <img
                src="data:image/jpeg;base64,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"
                class="d-block w-100" alt="Image not found">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </div>
  </div>



</body>

</html>