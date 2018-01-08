    
                                 <?php
  include 'header.php';
   include 'database.php';
                        $sql_cust = "SELECT * FROM abstract  WHERE 	id={$_GET['id']} ";
                        $result_cust = mysqli_query($link, $sql_cust);
                        $count_cust = mysqli_fetch_assoc($result_cust);
                        
               echo '<center> DOWLOND <br><button type="button" class="btn btn-primary ripple" data-ripple-color="#000"><a href="../appc_2018@/uplond/' . $count_cust["image"] . '">' . $count_cust["image"] . '</a></button></center>';
       
        ?>