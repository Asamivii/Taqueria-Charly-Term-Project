<?php

session_start();
 
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['Add_To_Cart'])){
        if(isset($_SESSION['cart'])){
            $myitems=array_column($_SESSION['cart'],'ItemName');
            if(in_array($_POST['ItemName'],$myitems)){
                echo"<script>alert('Item Already Added');
                window.location.href='index.php';
                </script>";
            }

            else {
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('FoodID' =>$_POST['FoodID'],'ItemName'=>$_POST['ItemName'],'Price'=>$_POST['Price'],'Quantity'=>1);
                echo"<script>alert('Item Added');
                window.location.href='index.php';
                </script>";
            }

        } 
        
        else {
        $_SESSION['cart'] = array();
        $_SESSION['cart'][0]=array('FoodID' =>$_POST['FoodID'],'ItemName'=>$_POST['ItemName'],'Price'=>$_POST['Price'],'Quantity'=>1);
                echo"<script>alert('Item Added');
                window.location.href='index.php';
                </script>";

            }    
    }

    
    if(isset($_POST['Remove_Item'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['ItemName']==$_POST['ItemName']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>alert('Item Removed');
                window.location.href='order_now.php';
                </script>";
            }
        }
    }
}  

?>