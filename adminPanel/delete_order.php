<?php

if(isset($_GET['delete_order'])){
    $delete_id = $_GET['delete_order'];

    //query
    $delete_query = "delete from `user_orders` where order_id=$delete_id";
    $delete_result = mysqli_query($con, $delete_query);
    
    if($delete_result){
        echo "<script>alert('Order deleted successfully')</script>";
        echo "<script>window.open('admin.php?view_orders','_self')</script>";
    }
}


?>