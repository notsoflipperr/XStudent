<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Student Dashboard</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />

  <!-- MDB -->
  <?php
    session_start();
    include("php_files/connection.php");
    
    $usn = $_SESSION["username"];

    $sql = "select * from student where usn = '$usn'";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result) == 1){
      $details = $result->fetch_assoc();
      $sem = $details["sem"];
    }

    $sql = "select subName, faculty_name, sub from subjects,faculty where subjects.faculty_id = faculty.faculty_id and sem=$sem";
    $subresult = mysqli_query($conn,$sql);
    
    $sql = "select * from attendance where usn = '$usn'";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result) == 1){
      $attn = $result->fetch_assoc();
    }

    $sql = "select * from cie where usn = '$usn'";
    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result) == 1){
      $cie = $result->fetch_assoc();
    }
  ?>  
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript">

  let details = <?php echo json_encode($details) ?>;
  let attn = <?php echo json_encode($attn) ?>;
  let marks = <?php echo json_encode($cie) ?>;
  let subDetails = [];
    subDetails = (<?php
                      $sub = $subresult->fetch_all();
                        echo json_encode($sub);
                      
                    ?>);
  
  let subss = {};
  
  for(i = 0; i < subDetails.length;i++){
    subss[subDetails[i][2]] = subDetails[i][1];
  }
  console.log(details,attn,marks, subDetails, subss);
  function loadData(){
    document.getElementById("usn").innerHTML = details["usn"];
    document.getElementById("sname").innerHTML = details["name"];
    document.getElementById("branch").innerHTML = details["branch"];
    document.getElementById("sem").innerHTML = details["sem"];

    var attns = document.getElementsByName("attn");
    attns.forEach((a) => {
      a.innerHTML = attn[a.id];
    });
    
    var markss = document.getElementsByName("cie");
    markss.forEach((a) => {
      a.innerHTML = marks[a.id];
    });
    
    var fac = document.getElementsByName("fa");
    i = 0;
    fac.forEach((a) => {
      a.innerHTML = subss[a.id];
    });
  }
    </script>
</head>

<body onload="loadData()">
  <!-- Start your project here-->

  <div id="preview" class="preview">
    <div style="display: none;"></div>
    <div><div data-draggable="true" style="position: relative;" draggable="false" class="">
      <!----><!---->
      <section draggable="false" class="overflow-hidden pt-0" data-v-271253ee="">
        <section class="" style="padding-bottom: 1px;"> 
          <!-- Navbar --> 
          <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-2"> 
            <!-- Container wrapper --> 
            <div class="container-fluid"> 
              <div class="d-flex"> 
                <!-- Toggle button --> 
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button> 
                <!-- Navbar brand --> 
                <a class="navbar-brand ms-3" draggable="false"> 
                <i class="far fa-bookmark text-primary" aria-controls="#picker-editor"></i> </a> </div> 
                <!-- Collapsible wrapper --> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                  <!-- Left links --> 
                  <ul class="navbar-nav me-auto mb-2 ms-2 ps-1 ms-lg-0 ps-lg-0 mb-lg-0"> 
                    <li class="nav-item"> 
                      <a class="nav-link" href="" aria-controls="#picker-editor" draggable="false">Student Dashboard</a> </li> 
                      <li class="nav-item"> 
                        <a class="nav-link" href="" aria-controls="#picker-editor" draggable="false"></a> </li> 
                        <li class="nav-item"> <a class="nav-link" href="" aria-controls="#picker-editor" draggable="false"></a> </li> </ul> <!-- Left links --> </div> 

                        <!-- Collapsible wrapper --> <!-- Right elements --> 
                        <div class="d-flex align-items-center"> 
                          <button type="button" class="btn btn-link px-3 mb-1 me-2" aria-controls="#picker-editor" style="">Teacher</button> <button type="button" class="btn btn-primary mb-1 me-lg-3" aria-controls="#picker-editor">Student</button> 
                        </div> 
                        <!-- Right elements --> </div> <!-- Container wrapper --> </nav> <!-- Navbar --> </section></section><!----></div>

                        <div data-draggable="true" class="" style="position: relative;" draggable="false">
                          <!----><!----><section draggable="false" class="container pt-5" data-v-271253ee="">
                            <section class="mb-10 text-center"> 
                              <h2 class="fw-bold mb-5" id="sname">AKIF</h2> 
                              
                                  <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" alt="avatar" style="width: 150px; height: 150px;" aria-controls="#picker-editor" draggable="false"> <div class="row d-flex justify-content-center"> 
                                    <div class="col-lg-8"> 
                            
                                      <h5 class="mb-3" id="usn">1NT20CS015</h5>

                                      <p id="branch">Computer Science &amp; Engineering</p> 
                                      <p id="sem">Semester : IV</p> 
                                       </div> </div>
                                       <!----><!----><section draggable="false" class="container pt-5" data-v-271253ee="">
                                                    <section class="mb-10 text-center"> 
                                                      <style> hr.divider-vertical { position: absolute; right: 0; top: 0; width: 1px; background-image: linear-gradient( 180deg, transparent, hsl(0, 0%, 40%), transparent ); background-color: transparent; height: 100%; } </style> 
                                                      <div class="row"> 
                                                        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 position-relative"> 
                                                          <i class="fas fa-cubes fa-3x text-primary mb-4" aria-controls="#picker-editor"></i> 
                                                          <h5 class="text-primary fw-bold mb-3">Engineering Mathematics - IV</h5> 
                                                          <h6 class="fw-normal mb-0" name="fa" id="EM4">Dr. Padmavati R</h6>
                                                          <br><h6 class="fw-normal mb-0">Attendance</h6> <h5 class="text-primary fw-bold mb-1" name="attn" id="EM4">75</h5><br>
                                                          <h6 class="fw-normal mb-0">CIE</h6> <h5 class="text-primary fw-bold mb-3" name="cie" id="EM4">46</h5>
                                                          <br><button type="button" class="btn btn-link px-3 mb-1 me-2" aria-controls="#picker-editor" style="">Explore</button>
                                                          <hr class="divider-vertical d-none d-md-block"> </div> 
                                                          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 position-relative"> 
                                                            <i class="fas fa-layer-group fa-3x text-primary mb-4" aria-controls="#picker-editor"></i> 
                                                            <h5 class="text-primary fw-bold mb-3">Design &amp; Analysis of Algorithms</h5> 
                                                            <h6 class="fw-normal mb-0" name="fa" id="DAA">Dr. Sujatha Joshi</h6>
                                                            <br><h6 class="fw-normal mb-0">Attendance</h6> <h5 class="text-primary fw-bold mb-1" name="attn" id="DAA">75</h5><br>
                                                          <h6 class="fw-normal mb-0">CIE</h6> <h5 class="text-primary fw-bold mb-3" name="cie" id="DAA">46</h5> 
                                                            <br><button type="button" class="btn btn-link px-3 mb-1 me-2" aria-controls="#picker-editor" style="">Explore</button>
                                                            <hr class="divider-vertical d-none d-lg-block"> </div> 
                                                            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 position-relative"> 
                                                              <i class="fas fa-image fa-3x text-primary mb-4" aria-controls="#picker-editor"></i>
                                                               <h5 class="text-primary fw-bold mb-3">Database Management Systems</h5> 
                                                               <h6 class="fw-normal mb-0" name="fa" id="DBMS">Ms. Mamatha Mane</h6>
                                                               <br><h6 class="fw-normal mb-0">Attendance</h6> <h5 class="text-primary fw-bold mb-1" name="attn" id="DBMS">75</h5><br>
                                                                    <h6 class="fw-normal mb-0">CIE</h6> <h5 class="text-primary fw-bold mb-3" name="cie" id="DBMS">46</h5>
                                                               <br><button type="button" class="btn btn-link px-3 mb-1 me-2" aria-controls="#picker-editor" style="">Explore</button>
                                                                <hr class="divider-vertical d-none d-md-block"> </div> 
                                                               <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 position-relative"> 
                                                                <i class="fas fa-plug fa-3x text-primary mb-4" aria-controls="#picker-editor"></i> 
                                                                <h5 class="text-primary fw-bold mb-3">Operating Systems</h5> 
                                                                <h6 class="fw-normal mb-0" name="fa" id="OS">Dr. Jayashree</h6>
                                                                <br><h6 class="fw-normal mb-0">Attendance</h6> <h5 class="text-primary fw-bold mb-1" name="attn" id="OS">75</h5><br>
                                                                     <h6 class="fw-normal mb-0">CIE</h6> <h5 class="text-primary fw-bold mb-3" name="cie" id="OS">46</h5>
                                                                <br><button type="button" class="btn btn-link px-3 mb-1 me-2" aria-controls="#picker-editor" style="">Explore</button>
                                                                 </div> </div> </section></section>
                                                                <!----></div>
                                                                <div data-draggable="true" style="position: relative;" class=""><!----><!---->
                                                                  <section draggable="false" class="container pt-5" data-v-271253ee="">
                                                                    <section class="mb-10 text-center"> 
                                                                      <style> hr.divider-vertical { position: absolute; right: 0; top: 0; width: 1px; background-image: linear-gradient( 180deg, transparent, hsl(0, 0%, 40%), transparent ); background-color: transparent; height: 100%; } </style> 
                                                                      <div class="row"> 
                                                                        <div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative"> 
                                                                          <i class="fas fa-cubes fa-3x text-primary mb-4" aria-controls="#picker-editor"></i> 
                                                                          <h5 class="text-primary fw-bold mb-3">App Dev using Java</h5> 
                                                                          <h6 class="fw-normal mb-0" name="fa" id="JAVA">Dr. Vijaya Shetty S</h6>
                                                                          <br><h6 class="fw-normal mb-0">Attendance</h6> <h5 class="text-primary fw-bold mb-1" name="attn" id="JAVA">75</h5><br>
                                                                             <h6 class="fw-normal mb-0">CIE</h6> <h5 class="text-primary fw-bold mb-3" name="cie" id="JAVA">46</h5>
                                                                            <br><button type="button" class="btn btn-link px-3 mb-1 me-2" aria-controls="#picker-editor" style="">Explore</button> 
                                                                          <hr class="divider-vertical d-none d-md-block"> </div>
                                                                           <div class="col-lg-3 col-md-6 mb-5 mb-md-5 mb-lg-0 position-relative"> 
                                                                            <i class="fas fa-layer-group fa-3x text-primary mb-4" aria-controls="#picker-editor"></i> 
                                                                            <h5 class="text-primary fw-bold mb-3">DAA Laboratory</h5> 
                                                                            <h6 class="fw-normal mb-0" name="fa" id="DAAL">Dr. Sujatha Joshi</h6>
                                                                            <br><h6 class="fw-normal mb-0">Attendance</h6> <h5 class="text-primary fw-bold mb-1" name="attn" id="DAAL">75</h5><br>
                                                                                <h6 class="fw-normal mb-0">CIE</h6> <h5 class="text-primary fw-bold mb-3" name="cie" id="DAAL">46</h5>
                                                                            <br><button type="button" class="btn btn-link px-3 mb-1 me-2" aria-controls="#picker-editor" style="">Explore</button>
                                                                            <hr class="divider-vertical d-none d-lg-block"> </div> 
                                                                            <div class="col-lg-3 col-md-6 mb-5 mb-md-0 position-relative"> 
                                                                              <i class="fas fa-image fa-3x text-primary mb-4" aria-controls="#picker-editor"></i> 
                                                                              <h5 class="text-primary fw-bold mb-3">DBMS Laboratory</h5> 
                                                                              <h6 class="fw-normal mb-0" name="fa" id="DBMSL">Ms. Mamatha Mane</h6> 
                                                                              <br><h6 class="fw-normal mb-0">Attendance</h6> <h5 class="text-primary fw-bold mb-1" name="attn" id="DBMSL">75</h5><br>
                                                                                      <h6 class="fw-normal mb-0">CIE</h6> <h5 class="text-primary fw-bold mb-3" name="cie" id="DBMSL">46</h5>
                                                                              <br><button type="button" class="btn btn-link px-3 mb-1 me-2" aria-controls="#picker-editor" style="">Explore</button>
                                                                              <hr class="divider-vertical d-none d-md-block"> </div> 
                                                                              <div class="col-lg-3 col-md-6 mb-5 mb-md-0 position-relative"> 
                                                                                <i class="fas fa-plug fa-3x text-primary mb-4" aria-controls="#picker-editor"></i> 
                                                                                <h5 class="text-primary fw-bold mb-3">Program Elective</h5>
                                                                                <h6 class="fw-normal mb-0" name="fa" id="PE">Dr. Uma R</h6> 
                                                                                <br><h6 class="fw-normal mb-0">Attendance</h6> <h5 class="text-primary fw-bold mb-1" name="attn" id="PE">75</h5><br>
                                                          <h6 class="fw-normal mb-0">CIE</h6> <h5 class="text-primary fw-bold mb-3" name="cie" id="PE">46</h5>
                                                                                 <br><button type="button" class="btn btn-link px-3 mb-1 me-2" aria-controls="#picker-editor" style="">Explore</button>
                                                                              </div> </div> </section></section>
                                                                                <!----></div></div></div>

  <!-- End your project here-->
</body>

</html>