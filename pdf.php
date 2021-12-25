<?php

require_once __DIR__ . '/vendor/autoload.php';

$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,a.product_desc,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
$result =mysqli_query($con,$sql);
$pdf = new \Mpdf\Mpdf();
$pdf->AddPage();
$pdf->SetFont('Times', '', 14);
while ($row = $row = mysqli_fetch_array($result)) {
    $title = $row['product_title'];
    $id=$row['product_id'];
    $pri = $row['product_price'];
    $img = $row['product_image'];
    $qty = $row['qty'];

    $f_name = $_POST["firstname"];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $cardname = $_POST['cardname'];
    $cardnumber = $_POST['cardNumber'];
    $user_id = $_SESSION["uid"];
    $cardnumberstr = (string)$cardnumber;
    $total_count = $_POST['total_count'];
    $prod_total = $_POST['total_price'];

    
   
    $pdf->Cell(0,10, ' Product: '. $title, 0, 1);
    $pdf->Cell(0, 10, ' Price: $' . $pri, 0, 1);
   

   
    
}


    $pdf->Cell(0, 10,' Name: '. $f_name, 0, 1);
    $pdf->Cell(0, 10,'Email: '.$email, 0, 1) ;
    $pdf->Cell(0,10, 'Address: '. $address, 0, 1) ;
    $pdf->Cell(0,10, 'Card number: '. $cardnumberstr, 0, 1) ;
    $pdf->Cell(0,10, 'Card Name: '. $cardname, 0, 1);
    $pdf->Cell(0, 10, 'Total Price: $'. $prod_total, 0, 1);
    $pdf->Ln();

$pdf->Output('Contract.pdf', 'D');
header("location:index.php"); 

?>
