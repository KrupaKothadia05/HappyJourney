<html>
<head>

    <title>Royal amid mountains and waterfalls.</title>
    <link rel="icon" href="images/logo.jpeg">
    <link href="products.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>



        body{
            background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/img8.jpeg);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            margin-top:15px;
            margin-left:20px;
        }
    .product-price{
    padding-top: 0.6rem;
    padding-right: 0.6rem;
    display: inline-block;
    color: black;
    }

    nav{
           font-size: xlarge;
           font-size: 1.35rem;
           font-weight :900;
        }

    

</style>
</head>

<body>



<nav>
    
    <img src = "images/logo.jpeg" width = "90" height = "90" /> HappyJourney

    <a style="margin-left:90%" href="services.php" >Back</a>
</nav>   


<?php

$page_map=['Camp Stay in Forest'=>'product1.php','All in One'=>'product2.php',
            'Feel the rocks and water'=>'product3.php','Turkey and Greece'=>'product4.php',
            'San Francisco and Arizona'=>'product5.php','Natural Waterfalls'=>'product6.php',
            'Just the Waterfalls'=>'product7.php','Waterfalls amid cities'=>'product8.php',
            'All about Water'=>'product9.php','Water Life'=>'product10.php',
            'Cities by the Water'=>'product11.php','All about Beaches'=>'product12.php'];

if(!isset($_COOKIE['mostrecent'])){
    print("<div style='color:bisque;'><h2 style='color:bisque;'>No products viewed yet</h2></div>");

}else{
    print("<div style='color:bisque;'><h2 style='color:bisque;'>Most Recently Viewed Products:</h2><br/><p>");
    
    $mostrecent=unserialize($_COOKIE['mostrecent']);
    for($i=0;$i<5;$i++){
      if($mostrecent[$i]!=''){
        $temp = $page_map[$mostrecent[$i]];
        print("<a style='color:bisque;margin-left:10px;' href='$temp'>".($i+1).".) $mostrecent[$i] </a>");
        print("<br/><br>");
       
      }
    }
    print("</p></div>");
}
?>


</body>

</html>
