<?php include("headermain.php") ?>

<body>
  
<div id="header"></div>
<div id="navbar"><script src="js/bootstrap.js"></script><script src="js/fixed-nav.js"></script>  
  <script src="js/SmoothScroll.min.js"></script> <script src="js/easing.js"></script></div>
<div class="container">
<form method="post" action="facfeedrtv.php">
 <br> <center><b><h2>Faculty Feedback</h2></b></center>
 <table class="table" border="2">
 <tr><td>Name of the Faculty:</td><td> <input type="text" name="name" required=""></td></tr>
<tr><td> Designation: </td><td> <select name="designation"> 
<option value="professor">Professor</option><option value="assocprofessor"> Assoc Professor</option><option value="asstprofessor"> Asst Professor</option>

</select> </td></tr>


 <tr><td> Department: </td><td> <select name="dept"> 
<option value="civil"> CIVIL</option><option value="eee"> EEE</option><option value="mech"> MECH</option><option value="ece"> ECE</option><option value="cse"> CSE</option>
<option value="ise"> ISE</option>
<option value="ash"> ASH</option>
<option value="ds"> CSE(DS)</option>
<option value="aiml">AIML</option>
<option value="mba">MBA</option>

</select> </td></tr>

<tr><td>Academic Year: </td><td> <select name="ayear"> 
  <option value="2022-23">2022-23</option>
<option value="2021-22">2021-22</option>
<option value="2020-21">2020-21</option>
<option value="2019-20">2019-20</option>
<option value="2018-19">2018-19</option><option value="2017-18">2017-18</option><option value="2016-17">2016-17</option>
<option value="2015-16">2015-16</option> <option value="2014-15">2014-15</option><option value="2013-14">2013-14</option><option value="2012-13">2012-13</option><option value="2011-12">2011-12</option></select> </td></tr>
</table> 
<hr>
  <h5><PRE><b>  5.EXCELLENT   4.BEST     3.GOOD   2.AVERAGE 1.POOR </b>
              
  </PRE></h5>
  <center>
<div class="container table-responsive py-5"> 
   <table class="table table-bordered table-hover">
  
  <th> <font color="blue">S.No.</th><th> <font color="blue">Feedback Statement</th><th><font color="blue">RATINGS</th>
  <tr><td>1</td><td>The course objectives & outcomes are clearly defined.</td>
    <td>
   <input name=r1 type=radio value=5  >5  </input> <input name=r1 type=radio value=4>4   </input><input name=r1 type=radio value=3>3 </input>
     <input name=r1 type=radio value=2>2   </input> <input name=r1  type=radio value=1>1</input>
  </td></tr>
  <tr><td>2</td><td>The contact hours are appropriately distributed <br>among various course components.  </td>
  <td>
   <input name=r2 type=radio value=5  >5  </input> <input name=r2 type=radio value=4>4   </input><input name=r2 type=radio value=3>3 </input>
     <input name=r2 type=radio value=2>2   </input> <input name=r2  type=radio value=1>1</input>
  </td></tr>
  <tr><td>3</td><td>Curriculum is having good academic flexibility<br> to attain program outcomes. </td>
  <td>
   <input name=r3 type=radio value=5  >5  </input> <input name=r3 type=radio value=4>4   </input><input name=r3 type=radio value=3>3 </input>
     <input name=r3 type=radio value=2>2   </input> <input name=r3  type=radio value=1>1</input>
  </td></tr>
  <tr><td>4</td><td>The continuous Internal Assessment and <br>mentoring system motivate the slow learners <br>to perform better. </td>
  <td>
   <input name=r4 type=radio value=5  >5  </input> <input name=r4 type=radio value=4>4   </input><input name=r4 type=radio value=3>3 </input>
     <input name=r4 type=radio value=2>2   </input> <input name=r4  type=radio value=1>1</input>
  </td></tr>
  <tr><td>5</td><td>The classrooms, labs and furniture facilities are adequate and well maintained</td>
  <td>
   <input name=r5 type=radio value=5  >5  </input> <input name=r5 type=radio value=4>4   </input><input name=r5 type=radio value=3>3 </input>
     <input name=r5 type=radio value=2>2   </input> <input name=r5  type=radio value=1>1</input>
  </td></tr>

       <tr><td>6</td><td>The library resources and reading room are effective and accessible.</td>
  <td>
   <input name=r6 type=radio value=5 >5 </input> <input name=r6 type=radio value=4>4   </input><input name=r6 type=radio value=3>3 </input>
     <input name=r6 type=radio value=2>2   </input> <input name=r6  type=radio value=1>1</input>
  </td></tr>

  <tr><td>7</td><td>Supporting infrastructure like Toilet, Drinking Water,<br> Canteen, Parking facilities are adequate. </td>
  <td>
   <input name=r7 type=radio value=5  >5  </input> <input name=r7 type=radio value=4>4   </input><input name=r7 type=radio value=3>3 </input>
     <input name=r7 type=radio value=2>2   </input> <input name=r7  type=radio value=1>1</input>
  </td></tr>
<tr><td>8</td><td>Sports infrastructure is adequate.</td>
  <td>
   <input name=r8 type=radio value=5  >5  </input> <input name=r8 type=radio value=4>4   </input><input name=r8 type=radio value=3>3 </input>
     <input name=r8 type=radio value=2>2   </input> <input name=r8  type=radio value=1>1</input>
  </td></tr>
<tr><td>9</td><td>Student centered learning resources are available at college</td>
  <td>
   <input name=r9 type=radio value=5  >5  </input> <input name=r9 type=radio value=4>4   </input><input name=r9 type=radio value=3>3 </input>
     <input name=r9 type=radio value=2>2   </input> <input name=r9  type=radio value=1>1</input>
  </td></tr>
<tr><td>10</td><td>The IQAC is contributing to accomplish the Vision of the Institute </td>
  <td>
   <input name=r10 type=radio value=5  >5 </input> <input name=r10 type=radio value=4>4  </input><input name=r10 type=radio value=3>3 </input>
     <input name=r10 type=radio value=2>2  </input> <input name=r10  type=radio value=1>1</input>
  </td></tr>

  
</table>
</div>
<br></br>
  Any Comments : <br><textarea name=com rows=10 cols=100></textarea>
  <br/> <input type=submit name=submit value=submit> </center> </form>
       </div>
       <hr>
<div id="footer"></div>
<script type="text/javascript" src="js/routes.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html> 