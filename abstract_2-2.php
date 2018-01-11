          <?php
include 'header.php';


?>    

     

        <div class="card-block">
        
            <table class="table table-bordered  m-b-0">
           
              <thead>
                <tr>
				
                 <th>ID ABSTRACT</th>
                  <th>EMAIL ABSTRACT</th>
                    <th>ID CUSTOMER</th>
                    <th>NAME</th>
                    <th>Email CUSTOMER</th>
                 
            
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


                                          

                                            $sql = " SELECT abstract.id, abstract.email,  costomer_eng.custID ,costomer_eng.first_name_eg,costomer_eng.email
FROM abstract
JOIN costomer_eng ON abstract.custID = costomer_eng.custID";
                                            $qry = mysqli_query($con,$sql);

                                                //$no = 1;

                                                while($f = mysqli_fetch_array($qry))
 {
                                            ?>
                                                    
                               <tbody >

                                         <td><?php echo $f['id']; ?> </td>    
                           <td><?php echo $f['email']; ?></td>
                           <td><?php echo $f['custID']; ?></td>
                           <td><?php echo $f['first_name_eg']; ?></td>
                      <td><?php echo $f['email']; ?></td>
                      <td>
<div class="dropdown">
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">ลบ
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">ลบ</a></li>

  
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