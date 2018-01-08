<div class="col-lg-4">
        <br><br><br><br>
            <div class="card card-block bg-white p-b-0 no-border">
                  <?php
                        include 'database.php';
                        $sql_cust = "SELECT COUNT(*) AS COUNTCUTOTAL FROM  abstract";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_cust = mysqli_fetch_assoc($result_cust);
                        ?>
              <div class="text-center m-b-md">
                <div class="text-muted text-uppercase">Total Abstract</div>
                <h5 class="m-a-0"> <?= $count_cust['COUNTCUTOTAL']; ?> </h5>
              </div>
                <?php
                        include 'database.php';
                        $sql_cust = "SELECT COUNT(*) AS COUNTCULINK FROM  abstract WHERE image ";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_link = mysqli_fetch_assoc($result_cust);
                        ?>
            
              <ul class="list-unstyled m-x-n m-b-0">
                <li class="b-t p-a-md">
                  <span class="pull-right"> <?= $count_link['COUNTCULINK']; ?> </span>
                  <i class="fa fa-circle text-primary m-r"></i> LINK
                </li>
                <li class="b-t p-a-md">
               <a href="body_tabledata.php" class="btn btn-Primary btn-lg mr5">ABSTRACT</a>
                 </li>
              </ul>
            </div>
            
          </div>
      <div class="col-lg-4">
        <br><br><br><br>
            <div class="card card-block bg-white p-b-0 no-border">
           
              <div class="text-center m-b-md">
                <div class="text-muted text-uppercase">Total Register</div>
                <h5 class="m-a-0"> </h5>
              </div>
               
            
              <ul class="list-unstyled m-x-n m-b-0">
                <li class="b-t p-a-md">
                  <span class="pull-right"></span>
                  <i class="fa fa-circle text-primary m-r"></i> 
                </li>
              
              </ul>
            </div>
            
          </div>