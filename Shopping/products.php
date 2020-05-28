<?php

session_start();

require_once('./php/CreateDB.php');
require_once('./php/component.php');

$database = new CreateDB("Shopping","Products"); //creates instance of the DB class

if (isset($_POST['add']))
{
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart']))
    {
        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id))
        {
            echo "<script>alert('Product is already added to the cart !')</script>";
            echo "<script>window.location = 'products.php'</script>";
        }else
        {
            $count = count($_SESSION['cart']);  //no. of elements in the SESSION variable
            $item_array = array(
                'product_id' => $_POST['product_id']);
            $_SESSION['cart'][$count] = $item_array;
        }
    }
    else
    {
        $item_array = array(
            'product_id' => $_POST['product_id']);

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping</title>
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!--Style.css-->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<?php
require_once ("php/header.php")
?>
<div class="container">
    <div class="row text-center py-5">
        <?php
            $result = $database->getData();
            while($row = mysqli_fetch_assoc($result))
            {
                component($row['product_name'],$row['product_price'],$row['product_prev_price'],$row['product_img'],$row['product_description'],$row['product_id']);
            }
        /*component("EMUTZ Soft Toys Giant Teddy Bear 5-Foot long - Color Brown",8999,10000,"./images/teddy.jpg");
           component("Sennheiser HD 206 507364 Headphones (Black)",1390, 1490,"./images/headphone.jpg");
           component("Dettol Alcohol based Hand Sanitizer, Original 200ml",500,750,"./images/sanitizer.jpg");
           component("Skullcandy S2IKDY-003 in-Ear Headphone with Mic (Blue)",699,1699,"./images/earphones.jpg");
        */
        ?>
    </div>
    <div class="row text-center py-3">
        <?php
      /*component("Apple iPhone 11",73000,80000,"./images/iphone11.jpg");
        component("Laptop Table - Color Black",1500, 2100,"./images/laptable.jpg");
        */
        ?>
    </div>

</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>      
</body>
</html>