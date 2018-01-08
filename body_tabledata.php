                    
          <?php
include 'header.php';


include "footer.php";
//include 'body_tabledata.php';

?>          
                    
                    
                    
                    <?PHP
require( "config.php" );
?>
         
             <!-- main area -->
     

        <div class="card-block">
            <table class="table table-bordered table-condensed datatable m-b-0">
           
              <thead>
                <tr>
                 <th>ID</th>
                  <th>Firstname</th>
                    <th>Familyname</th>
                    <th>Country</th>
                    <th>Email</th>
                    <th>Link</th>
                <th>Typepresentation</th>
                <th></th>
                <th></th>
                </tr>
                </thead>
              <?PHP
                                           
                                            $pp = null;

                                            $sql = " SELECT * FROM abstract";
                                            $q = $connection->prepare($sql);
                                            if ($q->execute($pp)) {

                                                //$no = 1;

                                                while ($f = $q->fetch(PDO::FETCH_ASSOC)) {
                                                    echo "
                                                    
                               <tbody >
                         
                                         <td>" . $f['id'] . "</td>    
                           <td>" . $f['frmcontact_firstname'] . "</td>
                           <td>" . $f['frmcontact_familyname'] . "</td>
                           <td>" . $f['country'] . "</td>
                      <td>" . $f['email'] . "</td>
                      <td>" . $f['image'] . "</td>
                      <td>" . $f['typepresentation'] . "</td>
                    <td><a href='dowlond_ab.php?id=".$f['id']."'>  <button >DOWNLOND</button></a></td>
                     <td><button ><a href='delete.php?id=".$f['id']."' onclick=\"return confirm('Confirm Delete ??')\">DELETE</a></button></td></td>
                       
     
                                            
                                                
                                           </tbody>
                                           
                        ";

                                                    //$no++;
                                                }
                                            }
                                            ?> 
            </table>
            <center><a href="index.php" class="btn btn-Primary btn-lg mr5">ฺBACK</a></center>
</div>
 
      <!-- /main area -->
         
         