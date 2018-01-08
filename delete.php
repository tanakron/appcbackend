<?PHP
    
    if( $_SERVER['REQUEST_METHOD'] == 'GET' ) {
        
        require( "config.php" );
        
        isset( $_GET['id'] ) ? $id = $_GET['id'] : $id = "";
        
        if( !empty($id) ) {
            
            $sql = " DELETE FROM abstract WHERE ( id = :id ) ";
            $q = $connection->prepare( $sql );
            if( $q->execute( array(":id"=>$id) ) ) {
                
                header("Location:body_tabledata.php");
                
            } else {
                
                echo "
                            <script>
                                alert(\"Please try again.\");
                                window.location = 'body_tabledata.php';
                            </script>
                        ";
                
            }
            
        } else {
            
            header("Location:index.php");
            
        }
        
    }

?>