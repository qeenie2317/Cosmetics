<?php include_once('../db_connect.php')?>

<?php 

if($_POST) {

    $sql = "INSERT INTO
                transaction (transaction_id, transaction_date, prod_name, prod_price)
            VALUES
                (?, NOW(), ?, ?)";

    if($stmt = $conn->prepare($sql) ){

        $stmt->bind_param(
            "ssi",

            $_POST['transaction_id'],
            $_POST['prod_name'],
            $_POST['prod_price']
        );

        if($stmt->execute()){
        ?>
            <script>
                window.alert('Thank You for Buying!');
                window.location.href='shop.php';
			</script>
        <?php

            $stmt->close();
        }else{
        ?>
            <script>
                window.alert('Transaction Failed!');
                window.location.href='shop.php';
			</script>
        <?php
        }
 
    }else{
        die("Error: Unable to Prepare Statement");
    }

    $conn->close();
}
?>