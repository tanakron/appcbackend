          <?php
include 'header.php';


?>    

     

        <div class="card-block">
           <button type="button" class="btn btn-success">Excel</button>
            <table class="table table-bordered  m-b-0">
           
              <thead>
                <tr>
				
                 <th>ID</th>
                  <th>Firstname</th>
                    <th>Familyname</th>
                    <th>Country</th>
                    <th>Email</th>
                 
             <th>file</th>
                </tr>
                </thead>
              <?PHP
                                           
  
  $host = "localhost";
$user = "appceftr_login";
$pass = "1q2w3e4R";

$con = mysqli_connect($host,$user,$pass);


//ติดต่อฐานข้อมูล

$dbname = "appceftr_login";

$dbcon = mysqli_select_db($con,$dbname);

if($dbcon)
{
//	echo "<font color=red size=30><center>connect Database complete</font></center>"; 
}
	
	else
{
		echo "<font color=red size=30><center>can not Database connect</font></center>";	
}


                                          

                                            $sql = " SELECT * FROM costomer_re_eng_success";
                                            $qry = mysqli_query($con,$sql);

                                                //$no = 1;

                                                while($f = mysqli_fetch_array($qry))
 {
                                            ?>
                                                    
                               <tbody >

                                         <td><?php echo $f['ID']; ?> </td>    
                           <td><?php echo $f['first_name_eg']; ?></td>
                           <td><?php echo $f['last_name_eg']; ?>"</td>
                           <td><?php echo $f['country']; ?></td>
                      <td><?php echo $f['email']; ?></td>
                      <td>
<div class="dropdown">
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Download
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">PDF</a></li>
      <li><a href="#">View</a></li>
  
    </ul>
  </div>
</div>
</td> 
                  
                       
     
                                            
                                                
                                           </tbody>
                                           
                        

                                                  <?php  //$no++;
                                               
                                                }
                                           
                                            ?> 
            </table>
            <center><a href="index.php" class="btn btn-Primary btn-lg mr5">ฺBACK</a></center>
</div>
 <body>
      <!-- /main area -->
         
                     
          <?php



include "footer.php";
//include 'body_tabledata.php';

?>         