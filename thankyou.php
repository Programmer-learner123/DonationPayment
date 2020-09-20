<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks For Donating!</title>
   
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body class="indexBody">

       
    <div class="thankpageStyle">
        <h1 class="heading4">Thank You For Donating And Saving Someone's life!</h1>

       <?php
        include './instamojo/instamojo.php';
        $api = new Instamojo\Instamojo('test_edd5f76577b52c19eb08ebef02b','test_df6e62fa8e4e1dc3bbdcf6eed80','https://test.instamojo.com/api/1.1/'); 
       
       $payid = $_GET['payment_request_id'];
       try{
           $response = $api -> paymentRequestStatus($payid);
           ?>
            <h2>Donation Payment Details: </h2>
           <table class="table1">
               
               <tr>
                   <th>Payment ID:</th>
                   <td> <?= $response['payments'][0]['payment_id']; ?></td>
               </tr>
               <tr>
                   <th>Payee Name:</th>
                   <td> <?= $response['payments'][0]['buyer_name']; ?></td>
               </tr>
               <tr>
                   <th>Payment Amount</th>
                   <td> <?= $response['payments'][0]['amount']; ?></td>
               </tr>
               <tr>
                   <th>Payee Email:</th>
                   <td> <?= $response['payments'][0]['buyer_email']; ?></td>
               </tr>
               <tr>
                   <th>Payee Phone:</th>
                   <td> <?= $response['payments'][0]['buyer_phone']; ?></td>
               </tr>
           </table>
<?php
       }
       catch(Exception $e){
           print("Error: " .$e -> getMessage());
       }
       ?> 
    </div>

</body>
</html>