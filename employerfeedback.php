<?php include("headermain.php"); ?>
<body>
  
<div id="header"></div>
<div id="navbar"><script src="js/bootstrap.js"></script><script src="js/fixed-nav.js"></script>  
  <script src="js/SmoothScroll.min.js"></script> <script src="js/easing.js"></script></div>
<div class="container">
<form method="post" action="empfeedrtv.php">
 <br> <center><b><h2>Employer Feedback</h2></b></center>
 <table class="table" border="2">
 <tr><td>Name of the Employer:</td><td> <input type="text" name="name" required=""></td></tr>
<tr><td> Designation: </td><td> <input type="text" name="designation" required=""> </td></tr>
<tr><td> Company Name: </td><td> <input type="text" name="cname" required=""> </td></tr>



<tr><td>Academic Year: </td><td> <select name="ayear"> 
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
  <tr><td>1</td><td>Curriculum is significantly contributing for employability. </td>
    <td>
   <input name=r1 type=radio value=5  >5  </input> <input name=r1 type=radio value=4>4   </input><input name=r1 type=radio value=3>3 </input>
     <input name=r1 type=radio value=2>2   </input> <input name=r1  type=radio value=1>1</input>
  </td></tr>
  <tr><td>2</td><td>Curriculum effective in developing innovative thinking. </td>
  <td>
   <input name=r2 type=radio value=5  >5  </input> <input name=r2 type=radio value=4>4   </input><input name=r2 type=radio value=3>3 </input>
     <input name=r2 type=radio value=2>2   </input> <input name=r2  type=radio value=1>1</input>
  </td></tr>
  <tr><td>3</td><td>Curriculum encourages graduates to adopt to changing scenario.  </td>
  <td>
   <input name=r3 type=radio value=5  >5  </input> <input name=r3 type=radio value=4>4   </input><input name=r3 type=radio value=3>3 </input>
     <input name=r3 type=radio value=2>2   </input> <input name=r3  type=radio value=1>1</input>
  </td></tr>
  <tr><td>4</td><td>Effective communication skills </td>
  <td>
   <input name=r4 type=radio value=5  >5  </input> <input name=r4 type=radio value=4>4   </input><input name=r4 type=radio value=3>3 </input>
     <input name=r4 type=radio value=2>2   </input> <input name=r4  type=radio value=1>1</input>
  </td></tr>
  <tr><td>5</td><td>Ability to contribute to the goal of the organization</td>
  <td>
   <input name=r5 type=radio value=5  >5  </input> <input name=r5 type=radio value=4>4   </input><input name=r5 type=radio value=3>3 </input>
     <input name=r5 type=radio value=2>2   </input> <input name=r5  type=radio value=1>1</input>
  </td></tr>

       <tr><td>6</td><td>Developing practical solutions to real world problems.</td>
  <td>
   <input name=r6 type=radio value=5 >5 </input> <input name=r6 type=radio value=4>4   </input><input name=r6 type=radio value=3>3 </input>
     <input name=r6 type=radio value=2>2   </input> <input name=r6  type=radio value=1>1</input>
  </td></tr>

  <tr><td>7</td><td>Self-motivated and take appropriate level of responsibility.</td>
  <td>
   <input name=r7 type=radio value=5  >5  </input> <input name=r7 type=radio value=4>4   </input><input name=r7 type=radio value=3>3 </input>
     <input name=r7 type=radio value=2>2   </input> <input name=r7  type=radio value=1>1</input>
  </td></tr>
<tr><td>8</td><td>Gel  well with Team members.</td>
  <td>
   <input name=r8 type=radio value=5  >5  </input> <input name=r8 type=radio value=4>4   </input><input name=r8 type=radio value=3>3 </input>
     <input name=r8 type=radio value=2>2   </input> <input name=r8  type=radio value=1>1</input>
  </td></tr>
<tr><td>9</td><td>Open to new ideas and learning new techniques</td>
  <td>
   <input name=r9 type=radio value=5  >5  </input> <input name=r9 type=radio value=4>4   </input><input name=r9 type=radio value=3>3 </input>
     <input name=r9 type=radio value=2>2   </input> <input name=r9  type=radio value=1>1</input>
  </td></tr>
<tr><td>10</td><td>Innovativeness, creativity and leadership qualities.</td>
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