<?php
include('../dbconn.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
<link href="css/site.css" rel="stylesheet" type="text/css" />
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="scripts/jquery.bootstrap.newsbox.min.js" type="text/javascript"></script>
<style type="text/css">
    /* Style tab links */
.tablink {
  background-color: #5395C2;
  color: white;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 5px 8px;
  font-size: 15px;

}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {

  display: none;

  height: 100%;
}
</style>
</head>

<body>
<div class="container">
<button class="tablink" onclick="openPage('All', this, 'orange')"id="defaultOpen">All</button>
<button class="tablink" onclick="openPage('Notifications', this, 'orange')">Notifications</button>
<button class="tablink" onclick="openPage('Events', this, 'orange')" >Events</button>
<!--<button class="tablink" onclick="openPage('Placements', this, 'orange')">Placements</button>-->
<div id="All" class="tabcontent">
<div class="container" style="position: fixed;">
<div class="row">
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>All</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo2">
       <?php
 $ordera ="SELECT * FROM events order by DATE DESC LIMIT 5";
      $fooda = mysqli_query($conn, $ordera);
  while($oss5a = mysqli_fetch_assoc($fooda))
      {
        echo '<li class="news-item"><a target="_blank" href="'.$oss5a["LINK"].'">'.$oss5a["TITLE"].'</a><br>'.$oss5a["EVTTYP"].'&nbspEvent</li>';
      }

 ?>
<!--<li class="news-item"><a href="#">Admission are open for year 2021-22</a><br>Hurry up! Limited seat are available on First Come First Serve Basis</li>-->
  
       <?php


 ?>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

<div id="Events" class="tabcontent">
  <div class="container"><br>
    <ul>
       <?php

 $order ="SELECT * FROM events order by DATE DESC LIMIT 6";
      $food = mysqli_query($conn, $order);
  while($oss5 = mysqli_fetch_assoc($food))
      {
        echo '<li style="font-size:13px" class="news-item"><a target="_blank" href="'.$oss5["LINK"].'">'.$oss5["TITLE"].'</a><br>'.$oss5["EVTTYP"].'&nbspEvent</li>';
      }

 ?>
<a href="../events/" target="_blank"><button class="btn btn-primary" style="width: 100%">More Events</button></a>
    </ul>
  </div>
</div>
<div id="Placements" class="tabcontent">
  <div class="container"><br>
    <ul>
       <?php

 $order ="SELECT * FROM placements order by PDATE DESC LIMIT 6";
      $food = mysqli_query($conn, $order);
  while($oss5 = mysqli_fetch_assoc($food))
      {
        echo '<li style="font-size:13px" class="news-item"><a target="_blank" href="'.$oss5["LINK"].'">'.$oss5["DESCR"].'</a><br>'.$oss5["COMPANY"].'</li>';
      }

 ?>
<a href="../placements.php" target="_blank"><button class="btn btn-primary" style="width: 100%">More Placements</button></a>
    </ul>
  </div>
</div>

<div id="Notifications" class="tabcontent">
  <div class="container"><br>
    <ul>
       <?php

 $order ="SELECT * FROM events order by DATE DESC LIMIT 6";
      $food = mysqli_query($conn, $order);
  while($oss5 = mysqli_fetch_assoc($food))
      {
        echo '<li style="font-size:13px" class="news-item"><a target="_blank" href="'.$oss5["LINK"].'">'.$oss5["TITLE"].'</a><br>'.$oss5["EVTTYP"].'&nbspEvent</li>';
      }

 ?>
<a href="../events/" target="_blank"><button class="btn btn-primary" style="width: 100%">More Events</button></a>
    </ul>
  </div>
</div>



<script type="text/javascript">
    $(function () {
    $(".demo2").bootstrapNews({
            newsPerPage:5,
            autoplay: true,
      pauseOnHover: true,
      navigation: false,
            direction: 'up',
            newsTickerInterval: 900,
            onToDo: function () {
                //console.log(this);
            }
        });
    });
</script>
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>