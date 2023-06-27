<?php include("headermain.php"); ?>
<body>
  
<div id="header"></div>
<div id="navbar"><script src="js/bootstrap.js"></script><script src="js/fixed-nav.js"></script>  
  <script src="js/SmoothScroll.min.js"></script> <script src="js/easing.js"></script></div>
<div class="container">
<form method="post" action="stdfeedrtv.php">
 <br> <center><b><h2>Student Feedback</h2></b></center>
 <table class="table" border="2">
 <tr><td>Name of the Student:</td><td> <input type="text" name="name" required=""></td></tr>
<tr><td> USN No.:</td><td> <input  type="text" name="usn"  required="" title="Enter USN or College Number" placeholder="Enter USN or College no"></td></tr>
 <tr><td> Department: </td><td> <select name="dept"> 
<option value="civil"> CIVIL</option><option value="eee"> EEE</option><option value="mech"> MECH</option><option value="ece"> ECE</option><option value="cse"> CSE</option><option value="ise"> ISE</option>

<option value="ds"> CSE(DS)</option>
<option value="aiml">AIML</option>
<option value="mba">MBA</option>

</select> </td></tr>
<tr><td> Year: </td><td> <select name="year"> 
<option value="1">1</option><option value="2"> II</option><option value="3"> III</option><option value="4">IV</option></select> </td></tr>
<tr><td> Section: </td><td> <select name="sec"> 
<option  value="A">A</option><option value="B">B</option><option  value="C">C</option><option  value="D">D</option><option  value="E">E</option><option  value="F">F</option><option  value="P">P</option><option  value="Q">Q</option><option  value="R">R</option><option  value="S">S</option><option  value="T">T</option></select> </td></tr>
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
  <tr><td>1</td><td>The curriculum is up to date in line with <br>employability skill requirements.</td>
    <td>
   <input name=r1 type=radio value=5  >5  </input> <input name=r1 type=radio value=4>4   </input><input name=r1 type=radio value=3>3 </input>
     <input name=r1 type=radio value=2>2   </input> <input name=r1  type=radio value=1>1</input>
  </td></tr>
  <tr><td>2</td><td>The curriculum is having good balance between theory and laboratory courses  </td>
  <td>
   <input name=r2 type=radio value=5  >5  </input> <input name=r2 type=radio value=4>4   </input><input name=r2 type=radio value=3>3 </input>
     <input name=r2 type=radio value=2>2   </input> <input name=r2  type=radio value=1>1</input>
  </td></tr>
  <tr><td>3</td><td>The curriculum encourages extra learning or self-learning. </td>
  <td>
   <input name=r3 type=radio value=5  >5  </input> <input name=r3 type=radio value=4>4   </input><input name=r3 type=radio value=3>3 </input>
     <input name=r3 type=radio value=2>2   </input> <input name=r3  type=radio value=1>1</input>
  </td></tr>
  <tr><td>4</td><td>The curriculum is providing flexibility <br> for the choice of Elective courses.</td>
  <td>
   <input name=r4 type=radio value=5  >5  </input> <input name=r4 type=radio value=4>4   </input><input name=r4 type=radio value=3>3 </input>
     <input name=r4 type=radio value=2>2   </input> <input name=r4  type=radio value=1>1</input>
  </td></tr>
  <tr><td>5</td><td>Extent of syllabi covered in the Class</td>
  <td>
   <input name=r5 type=radio value=5  >5  </input> <input name=r5 type=radio value=4>4   </input><input name=r5 type=radio value=3>3 </input>
     <input name=r5 type=radio value=2>2   </input> <input name=r5  type=radio value=1>1</input>
  </td></tr>

       <tr><td>6</td><td>Usage of teaching aids and ICT in the class by faculty to facilitate teaching</td>
  <td>
   <input name=r6 type=radio value=5 >5 </input> <input name=r6 type=radio value=4>4   </input><input name=r6 type=radio value=3>3 </input>
     <input name=r6 type=radio value=2>2   </input> <input name=r6  type=radio value=1>1</input>
  </td></tr>

  <tr><td>7</td><td>Fairness in the Internal assessment processes<br> (CIE, Quiz, Assignments, Activity etc.) </td>
  <td>
   <input name=r7 type=radio value=5  >5  </input> <input name=r7 type=radio value=4>4   </input><input name=r7 type=radio value=3>3 </input>
     <input name=r7 type=radio value=2>2   </input> <input name=r7  type=radio value=1>1</input>
  </td></tr>
<tr><td>8</td><td>Opportunities for students to participate in internship, <br>student exchange, field visit, guest lectures, seminars, workshop, <br>value added programmes, conferences and competitions</td>
  <td>
   <input name=r8 type=radio value=5  >5  </input> <input name=r8 type=radio value=4>4   </input><input name=r8 type=radio value=3>3 </input>
     <input name=r8 type=radio value=2>2   </input> <input name=r8  type=radio value=1>1</input>
  </td></tr>
<tr><td>9</td><td>The building, classrooms , <br>furniture and roads in campus are well maintained.</td>
  <td>
   <input name=r9 type=radio value=5  >5  </input> <input name=r9 type=radio value=4>4   </input><input name=r9 type=radio value=3>3 </input>
     <input name=r9 type=radio value=2>2   </input> <input name=r9  type=radio value=1>1</input>
  </td></tr>
<tr><td>10</td><td>The labs are adequate and well equipped.</td>
  <td>
   <input name=r10 type=radio value=5  >5 </input> <input name=r10 type=radio value=4>4  </input><input name=r10 type=radio value=3>3 </input>
     <input name=r10 type=radio value=2>2  </input> <input name=r10  type=radio value=1>1</input>
  </td></tr>
<tr><td>11</td><td>Drinking water, power backup, parking facilities <br> and sports facilities are adequately provided.</td>
  <td>
   <input name=r11 type=radio value=5  >5 </input> <input name=r11 type=radio value=4>4  </input><input name=r11 type=radio value=3>3 </input>
     <input name=r11 type=radio value=2>2  </input> <input name=r11  type=radio value=1>1</input>
  </td></tr>
<tr><td>12</td><td>Library is well equipped with E-Learning facilities.</td>
  <td>
   <input name=r12 type=radio value=5  >5 </input> <input name=r12 type=radio value=4>4  </input><input name=r12 type=radio value=3>3 </input>
     <input name=r12 type=radio value=2>2  </input> <input name=r12  type=radio value=1>1</input>
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