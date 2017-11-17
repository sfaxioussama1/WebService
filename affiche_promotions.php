<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 15/11/2017
 * Time: 19:34
 */


if($_SERVER["REQUEST_METHOD"]=="POST"){

    require 'connection.php';

    showt();
}

function showt(){
    global $connect;
    $query= "select  p.nomproduit , p.quantite , pr.prixfinal from produits p , promotions pr where pr.idproduit=p.idproduit";

    $result = mysqli_query($connect,$query);
    $number_of_rows = mysqli_num_rows($result);

    $temp_array = array();

    if($number_of_rows >0 ){

        while($row = mysqli_fetch_assoc($result)){
            $temp_array[]=$row;
        }

    }

    header('content-Type: application/json');
    echo json_encode(array("promo"=>$temp_array));
    mysqli_close($connect);

}
?>