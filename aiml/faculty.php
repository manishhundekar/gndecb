<?php include("tophead.php") ?>
<div id="header"></div>

<div id="navbar"><script src="js/bootstrap.js"></script><script src="js/fixed-nav.js"></script>  

  <script src="js/SmoothScroll.min.js"></script> <script src="js/easing.js"></script></div>

<div class="container" style="background-color: white">

    <ol class="breadcrumb">

        <li><a href="index.php">Home</a></li><li>/</li>

        <li><a href="#">Departments</a></li><li>/</li>

     

    </ol>

</div>

<div class="head gnddepthead"><h3 class="font-weight-bold">Department of Artificial Intelligence and Machine Learning</h3></div><hr>

  <div class="container">

       

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-4">
            
                  <div class="list-group">
                     <div class="list-group">
                      <div id="csemenubar"></div>
                </div>    
              
                </div>                
            </div>
            <!-- Content Column -->
            <div class="col-md-8" style="text-align:justify;">

            <div class="alert alert-primary" role="alert"><center><b> Faculty Details </b></center> </div>
            <div class="container">

    <div class="row">

      <div  style="width: 100%">

            <div class="tab" role="tabpanel">

                <!-- Nav tabs -->

                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active"><a  href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Faculty</a> </li>                   

                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Supporting Staff</a></li>

                 

                </ul>

                <div class="tab-content tabs ">

                    <div role="tabpanel" class="tab-pane in active" id="Section1">

                      

                        <div class="table-responsive-sm table-responsive-md table-responsive-lg">

                         <table class="table table-bordered table-hover ">

                                <thead class="thead-light">

                                    <tr>

                                        <th>Name of Faculty</th>                                        

                                        <th>Designation</th>

                                        <th>Qualification</th>

                                        

                                        <th>Experience</th>

                                        
                                        <th>Photo</th>
                                        

                                        <th>Profile</th>

                                    </tr>

                                </thead>

              <tbody>

             <?php 

      $order59 ="SELECT * FROM staff where BRCAT='ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING' and STAFFTYP='Faculty' order by SNO";

      $food9 = mysqli_query($conn, $order59);

      while($oss55 = mysqli_fetch_assoc($food9))

     

            

      {
        echo '<tr><td>'. $oss55["NAME"] . "</td><td>". $oss55["DESIGNATION"]. "</td><td>".$oss55["QUALIFICATION"]."</td><td>".$oss55["EXPERIENCE"]."</td><td>";
      echo "<img style='width: 100px; height:120px' src='docs/staff/".$oss55['PHOTO']."' ></td>";

      echo '<td><a href="'.$oss55["OTHERS"].'" target="_blank"><button class="btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Complete Profile</button></a></td></tr>';

      

      

      } 

?>

</tbody>

 </table></div></div>

                     <div role="tabpanel" class="tab-pane " id="Section2">

                      <h5 style="background: #2F92D8;color:#fff;margin-top: 0px;margin-bottom: 10px;padding: 7px;"><i class="fas fa-address-book"></i>&nbsp Detailed list of all Supporting Staff Members of the Department</h5>

                      <div class="table-responsive-sm table-responsive-md table-responsive-lg">

                         <table class="table table-bordered table-hover ">

                                <thead class="thead-light">

                                    <tr>

                                        <th>Name of Staff</th> 
                                        <th>Designation</th>  
                                        <th>Qualification</th>                                           

                                        <th>Experience</th>
                                        <th>Photo</th>
                                        

                                      

                                    </tr>

                                </thead>

              <tbody>

             <?php 

      $order59 ="SELECT * FROM staff where BRCAT='ARTIFICIAL INTELLIGENCE AND MACHINE LEARNING' and STAFFTYP='Supporting Staff' order by SNO";

      $food9 = mysqli_query($conn, $order59);

      while($oss55 = mysqli_fetch_assoc($food9))

      {echo '<tr><td>'. $oss55["NAME"] . "</td><td>".$oss55["DESIGNATION"]."</td><td>".$oss55["QUALIFICATION"]."</td><td>".$oss55["EXPERIENCE"]."</td><td>";
      echo "<img style='width: 100px; height:120px' src='docs/staff/".$oss55['PHOTO']."' ></td>";

      } 

          

?>

</tbody>

 </table></div>

                       </div>

                  

                   


                </div>

            </div>

        </div>

    </div>
    </div>
    </div>      
           
</div>

</div>



<div id="footer"></div>

<script type="text/javascript" src="js/routes.js"></script>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>

</html>

