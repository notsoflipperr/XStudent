<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Teacher Dashboard</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" /> 


<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"> </script>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>

  <!-- Custom scripts -->
  <script type="text/javascript">

    
    function loadData() {
      <?php
    session_start();
    include("php_files/connection.php");
    
    $faculty_id = $_SESSION["faculty_username"];
    
    $sql = "SELECT sub, subName from subjects where faculty_id = $faculty_id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) >= 0){
      $subs = $result->fetch_all();
    }

    $sql = "SELECT faculty_id,faculty_name from faculty where faculty_id = $faculty_id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
      $name = $result->fetch_assoc();
    }
  ?> 
    let subs = <?php echo json_encode($subs) ?>;
    let name = '<?php echo $name['faculty_name'] ?>';
    let id = '<?php echo $name['faculty_id'] ?>';
    //subs = JSON.stringify(subs);
    
    let str = '';
    subs.forEach((obj)=>{
        str += "<option value='" + obj[0] +"'>"+ obj[1] + "</option>\n";
    });
    console.log(subs, name);
    document.getElementById("dropdown").innerHTML = str;
    document.getElementById("facultyname").innerHTML = name;
    document.getElementById("facultyId").innerHTML = id;
    }


  function GetSelectedTextValue() {
        var selectSub = document.getElementById("dropdown");
        var selected = selectSub.options[selectSub.selectedIndex];
        var selectedValue = selectSub.value;
        document.getElementById("url").innerHTML = selected;
      }
        

      function addit() {
     
           var ddlFruits = document.getElementById("Sem");
        var selectedText = ddlFruits.options[ddlFruits.selectedIndex].innerHTML;
        var selectedValue = ddlFruits.value;
      
        document.getElementById("tuples").innerHTML = selectedText;
      }
    
function myFunction(x) {

  <?php
    $sql = "SELECT usn, name from student";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) >= 0){
      $studs = $result->fetch_all();
    }
  ?>

  let stud = <?php echo json_encode($studs) ?>;
  console.log(stud);
  var table = document.getElementById('myTable'),
    tr = document.getElementById('header'),
    cells, i;

for (i = 0; i < stud.length - 1; i++) { // Add 10 copies of it to the table
    table.appendChild(tr.cloneNode(true));
}


cells = table.getElementsByTagName('td'); // get all of the cells
for (i = 0, j = 0; j < stud.length; i=i+3, j++) {               // number them
    cells[i].innerHTML = stud[j][1];
    cells[i+1].innerHTML = stud[j][0];
    cells[i+2].innerHTML = "<label class='switch' id='slide'>" +
                          "<input type ='checkbox' name='attn' id='slide' value='" + stud[j][0]+ "'>" +
                          "<span class='slider round'></span>"+
                           " </label>";
}
x.style.display = 'none';
}

function update(usn,sub) {
    $.ajax({
        url: 'php_files/update.php',
        type: 'POST',
        data: {usn:usn, sub:sub},
        success: function(data) {
            console.log(data + "updated");
            document.getElementById("msg").innerHTML = "Attendance Updated";
        }
    });
}
function updateAttn() {
  var checkbox = document.getElementsByName('attn');
  
  let usns = [];
  for(i = 0; i < checkbox.length ;i++){
    if(checkbox[i].checked)
      usns.push(checkbox[i].value);
  }
  
  var sub = document.getElementById("dropdown").value;
  console.log(usns);
  for(i = 0; i < usns.length; i++)
    update(usns[i], sub);
  
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
                      <a class="nav-link" href="" aria-controls="#picker-editor" draggable="false">Teacher Dashboard</a> </li> 
                      <li class="nav-item"> 
                        <a class="nav-link" href="" aria-controls="#picker-editor" draggable="false"></a> </li> 
                        <li class="nav-item"> <a class="nav-link" href="" aria-controls="#picker-editor" draggable="false"></a> </li> </ul> <!-- Left links --> </div> 

                        <!-- Collapsible wrapper --> <!-- Right elements --> 
                        <div class="d-flex align-items-center"> 
                          <button type="button" class="btn btn-primary px-3 mb-1 me-2" aria-controls="#picker-editor" style="">Teacher</button> 
                          <button type="button" class="btn btn-link mb-1 me-lg-3" aria-controls="#picker-editor">Student</button> 
                        </div> 
                        <!-- Right elements --> </div> <!-- Container wrapper --> </nav> <!-- Navbar --> </section></section><!----></div>

                        <div data-draggable="true" class="" style="position: relative;" draggable="false">
                          <!----><!----><section draggable="false" class="container pt-5" data-v-271253ee="">
                            <section class="mb-10 text-center"> 
                              <h2 class="fw-bold mb-5" id="facultyname">Dr. Vijaya Shetty S</h2> 
                              
                                  <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" alt="avatar" style="width: 150px; height: 150px;" aria-controls="#picker-editor" draggable="false"> <div class="row d-flex justify-content-center"> 
                                    <div class="col-lg-8" id="usn"> 
                            
                                      <h5 class="mb-3" id="facultyId">Faculty ID</h5>

                                      <b><p>Professor, Computer Science &amp; Engineering Department</p></b>
                                  
                                       <form name="fac" method="POST" action='action.php'>
                                       <label for="semester">Choose Semester:</label>
                                        <select id="Sem" onclick="addit()" name="sem">
                                          <option value="Choose" selected="selected">Select</option>
                                        <option value="1sem">1st SEM</option>
                                        <option value="2sem">2nd SEM</option>
                                        <option value="3sem">3rd SEM</option>
                                        <option value="4sem">4th SEM</option>
                                      </select>

                                      <label for="subject">Choose Subject:</label>
                                      
                                          <select id="dropdown" onclick="GetSelectedTextValue()">
                                          <option value="Choose" selected="selected">Select</option>
                                      <!--  <option value="mat4" id="emat">Engineering Mathematics-IV</option>
                                        <option value="daa">Design & Analysis of Algorithms</option>
                                        <option value="dbms">Database Management Systems</option>
                                        <option value="os">Operating Systems</option>
                                        <option value="java">App Dev using Java</option>
                                        <option value="daal">DAA Laboratory</option>
                                        <option value="dbmsl">DBMS Laboratory</option>
                                        <option value="pe">Program Elective</option>
                                        -->   </select>


                                        <style>
                                            .switch {
                                            position: relative;
                                            display: inline-block;
                                            width: 60px;
                                            height: 34px;
                                          }

                                          /* Hide default HTML checkbox */
                                          .switch input {
                                            opacity: 0;
                                            width: 0;
                                            height: 0;
                                          }

                                          /* The slider */
                                          .slider {
                                            position: absolute;
                                            cursor: pointer;
                                            top: 0;
                                            left: 0;
                                            right: 0;
                                            bottom: 0;
                                            background-color: #ccc;
                                            -webkit-transition: .4s;
                                            transition: .4s;
                                          }

                                          .slider:before {
                                            position: absolute;
                                            content: "";
                                            height: 26px;
                                            width: 26px;
                                            left: 4px;
                                            bottom: 4px;
                                            background-color: white;
                                            -webkit-transition: .4s;
                                            transition: .4s;
                                          }

                                          input:checked + .slider {
                                            background-color: #6691FA;
                                          }

                                          input:focus + .slider {
                                            box-shadow: 0 0 1px #2196F3;
                                          }

                                          input:checked + .slider:before {
                                            -webkit-transform: translateX(26px);
                                            -ms-transform: translateX(26px);
                                            transform: translateX(26px);
                                          }

                                          /* Rounded sliders */
                                          .slider.round {
                                            border-radius: 34px;
                                          }

                                          .slider.round:before {
                                            border-radius: 50%;
                                          }
                                        </style>
                                       
                                                                                  

                                        

                                              
                                                                                       
                                        <!----><!----><section draggable="false" class="container pt-10" data-v-271253ee="">
                                                    <section class="mb-7 text-center"> 
                                                      <hr class="divider-horizontal d-none d-md-block" > 
                                                      
                                                        <div class="col-lg-20 col-md-20 mb-10 mb-lg-10 position-relative"> 
                                                          <i class="fas fa-cubes fa-3x text-primary mb-4" aria-controls="#picker-editor"></i> 
                                                          <h5 class="text-white fw-bold mb-1"> <p id="url" href="?action=mat4"></p></h5> 
                                                         
                                                          <br><h6 class="text-primary fw-bold mb-1">Date</h6><br> <input type="date"><br>
                                                          <br><h6 class="text-primary fw-bold mb-1">Time</h6><br> <input type="time" id="appt" name="appt"><br>
                                                          
                                                          

                                                         
                                                         <br><br><h4><p id="tuples" href="?action=1sem"></p></h4><br>
                                                         <button onclick="myFunction(this)" type="button" class="btn btn-primary px-3 mb-1 me-2" aria-controls="#picker-editor">Load Student List</button><br><br>
                                        </form> 
                                                         <style>
                                                              table {
                                                                font-family: arial, sans-serif;
                                                                border-collapse: collapse;
                                                                width: 100%;
                                                              }

                                                              td, th {
                                                                border: 1px solid #dddddd;
                                                                text-align: left;
                                                                padding: 8px;
                                                              }

                                                            
                                                              </style>
                                                              <table id="myTable">
                                                                              <tr>
                                                                                <th>Name</th>
                                                                                <th>USN</th>
                                                                                <th>Status</th>
                                                                              </tr>
                                                                            
                                                                              <tr id="header">
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                            </table>
                                                                            <button onclick="updateAttn()" type="button" class="btn btn-primary px-3 mb-1 me-2" aria-controls="#picker-editor">update attendance</button><br><br>
                                                                            <p id="msg"></p>
                                                         
                                                          
                                                                              </div> 
                                                                              <hr class="divider-horizontal d-none d-md-block" > 
                                                                             

                                                                            </section></section>
                                                                               </div> </div>
                                                                                <!----></div></div></div>

  <!-- End your project here-->

  </body>

</html>


