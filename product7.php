<?php
$thisproduct='Just the Waterfalls';
if(!isset($_COOKIE['dictionary'])){
    $dictionary=['Camp Stay in Forest'=>0,'All in One'=>0,'Feel the rocks and water'=>0,
    'Turkey and Greece'=>0,'San Francisco and Arizona'=>0,'Natural Waterfalls'=>0,
    'Just the Waterfalls'=>0,'Waterfalls amid cities'=>0,'All about Water'=>0,
    'Water Life'=>0,'Cities by the Water'=>0,'All about Beaches'=>0];
    }
    else{
      $dictionary=unserialize($_COOKIE['dictionary']);
    }
    $dictionary[$thisproduct]=$dictionary[$thisproduct]+1;
    $dictionary=serialize($dictionary);
    setcookie('dictionary',$dictionary,time()+860000*10);
    
    if(!isset($_COOKIE['mostrecent'])){
      $mostrecent=[$thisproduct,'','','',''];
      }else{
        $mostrecent=unserialize($_COOKIE['mostrecent']);
        for($i=0;$i<5;$i++){
          if($mostrecent[$i]==$thisproduct){
            $mostrecent[$i]='';
            break;
          }
        }
        if($i>4){
          $i=4;
          }
          for($j=$i;$j>0;$j--){  
              $mostrecent[$j]=$mostrecent[$j-1];
          }
        $mostrecent[0]=$thisproduct;
           }
    
      $mostrecent=serialize($mostrecent);
      setcookie('mostrecent',$mostrecent,time()+860000*10);
    ?>

<html>

<head>

    <title>Waterfall those are 1000s of years old and uniquely beautiful.</title>
    <link rel="icon" href="images/logo.jpeg">
    <link href="products.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>


    body{
        background: bisque;
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

    <a style="margin-left:70%" href="services.php" >Back>>Services</a>
</nav>   


    <div class="hero">
        <div class="row">
            <div class="col">

                <div class="slider">
                    <div class="product">

                        <img src="images/product7/1.jpeg" alt="" onclick="clickme(this)">
                        <img src="images/product7/3.jpeg" alt="" onclick="clickme(this)">
                        <img src="images/product7/4.jpeg" alt="" onclick="clickme(this)">
                        <img src="images/product7/5.jpeg" alt="" onclick="clickme(this)">

                    </div>
                    <div class="preview">
                        <img src="images/product7/1.jpeg" id="imagebox" alt="">
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="content">
                    <p class="brand">HappyJourney </p>
                    <h2>Waterfall those are 1000s of years old and uniquely beautiful.</h2>

                    Waterfall those are 1000s of years old and uniquely beautiful.
<br><br>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>

                    <br>
                    <p class = "product-price" style="text-decoration: line-through;color:red"> $250</p>
                    <p class = "product-price"> $225</p>
                    <p>Quantity: <input type="text" value="1"></p>
                    <a href="contacts.php">
                    <button type="button">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart</button>
                    </a>
                </div>
            </div>
        </div>

    </div>



    <script>
        function clickme(smallImg) {

            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src;

        }

    </script>



</body>

</html>
