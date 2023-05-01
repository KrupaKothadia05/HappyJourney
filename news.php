<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>News</title>
    <link rel="icon" href="images/logo.jpeg">
    <link rel="stylesheet" href = "css/style.css">

    <style>
@import url('https://fonts.googleapis.com/css2?family=Manrope&display=swap');

.news-main{
                width: 100%;
                height: 1100px;
                position: relative;
                background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/background2.jpg);
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
                color:bisque;
                
        }

        .news-menu a{
               font-weight:900px;
                color:bisque;
        }

        .navbar-brand{
                color:bisque;
        }



        h1{
            margin-top:20px;
        }

        h3{
            color:black;
        }




        .floating-btn{
      width : 80px;
      height : 80px;
      background: rgb(178, 34, 34);
      display: flex;
      align-items: center;
      justify-content : center;
      text-decoration: none;
      border-radius : 50%;
      color: bisque;
      font-size : 20px; 
      box-shadow: 2px 2px 5px rgba(0,0,0,0.25);
      position:fixed;
      right : 20px;
      bottom:40%;
      transition : background 0.25s;
    }

    .floating-btn:hover{
      color: bisque;
    }


    .floating-btn:active{
      background: BROWN ;
      text-color: bisque;
    }



    nav ul li a:hover{
    background-color: rgb(178, 34, 34, 0.793);
    color: bisque;
    box-shadow: 5px 10px 15px rgba(134, 49, 0, 0.398);
        }
.active{
  background-color: rgb(178, 34, 34, 0.616);
    color: bisque;
    box-shadow: 5px 10px 15px rgba(134, 49, 0, 0.398);
}


.news-card {
    border-radius: 8px
    margin-left : 50px;
}

.news-feed-image {
    border-radius: 8px;
    width: 100%
}

.date {
    font-size: 12px
}

.username {
    color: bisque
}

.share {
    color: bisque
}

        </style>

  </head>
  <body>
    <section class = "news-main">
      <nav>
        <a class="navbar-brand" href="index.php" style="margin-right: 30%;">
          <img src = "images/logo.jpeg" width = "90" height = "90" /> HappyJourney
        </a>

        <ul class= "news-menu">
          <li><a href="index.php" >Home</a><li>
          <li><a href="about.php" >About</a><li>
          <li><a href="services.php">Services</a><li>
          <li><a href="news.php" class = "active">News</a><li>
          <li><a href="contacts.php" >Contacts</a><li>
          <li><a href="user.php">Register</a><li>
          <li><a href="commonpage.php">Clients</a><li>

        </ul>
      </nav>


      <a href="modal.php" class="material-icons floating-btn">LOGIN</a>
      
      <h1 style="text-align:center;font-size:70px"> HeadLines </h1>

    <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="d-flex flex-row"></div>
            <div class="row news-card p-3 bg-black">
                <div class="col-md-4">
                    <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="images/news1.jpeg"></div>
                </div>
                <div class="col-md-8">
                    <div class="news-feed-text">
                        <a href="https://www.euronews.com/travel/2023/04/07/albania-bulgaria-romania-europes-best-beaches-that-youve-probably-never-heard-of"></a>
                        <h5 style="text-decoration:underline;">From Albania to Ireland, these are Europe’s best under the radar beach destinations.</h5><span>Europe is blessed with miles of beautiful coastline - but its popular beach destinations are buckling under the strain of overtourism.<br></span>
                        <a style="color:brown;text-decoration:underline;float:right" href="https://www.euronews.com/travel/2023/04/07/albania-bulgaria-romania-europes-best-beaches-that-youve-probably-never-heard-of">Read More</a>
                        <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                            <div class="d-flex creator-profile"><img class="rounded-circle" src="https://i.imgur.com/uSlStch.jpg" width="50" height="50">
                                <div class="d-flex flex-column ml-2">
                                    <h6 class="username">Alexendor patriot</h6><span class="date">Jan 20,2020</span>
                                </div>
                            </div><i class="fa fa-share share"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="d-flex flex-row"></div>
            <div class="row news-card p-3 bg-black">
                <div class="col-md-4">
                    <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="images/news2.jpeg"></div>
                </div>
                <div class="col-md-8">
                    <div class="news-feed-text">
                        <h5 style="text-decoration:underline;">Experience the Med on a budget in the Albanian Riviera</h5><span>Albania is yet to make its mark on Europe’s mainstream tourist trail - which is all the more reason to visit.<br></span>
                        <a style="color:brown;text-decoration:underline;float:right" href="https://www.euronews.com/travel/2023/04/07/albania-bulgaria-romania-europes-best-beaches-that-youve-probably-never-heard-of">Read More</a>
                        <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                            <div class="d-flex creator-profile"><img class="rounded-circle" src="https://pbs.twimg.com/media/D8dDZukXUAAXLdY.jpg" width="50" height="50">
                                <div class="d-flex flex-column ml-2">
                                    <h6 class="username">Kimi Liu</h6><span class="date">Mar 29,2021</span>
                                </div>
                            </div><i class="fa fa-share share"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="d-flex flex-row"></div>
            <div class="row news-card p-3 bg-black">
                <div class="col-md-4">
                    <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="images/news3.jpeg"></div>
                </div>
                <div class="col-md-8">
                    <div class="news-feed-text">
                        <h5 style="text-decoration:underline;">Get back to nature on Bulgaria’s Black Sea coast</h5><span>Bulgaria’s Black Sea coastline brims with natural beauty. Around a 35 minute drive from popular Sunny Beach, Irakli retains a wild feel. With just two restaurants, a nudist area and a campsite, this sandy stretch is the perfect place to get back to nature.<br></span>
                        <a style="color:brown;text-decoration:underline;float:right" href="https://www.euronews.com/travel/2023/04/07/albania-bulgaria-romania-europes-best-beaches-that-youve-probably-never-heard-of">Read More</a>
                        <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                            <div class="d-flex creator-profile"><img class="rounded-circle" src="https://i.dailymail.co.uk/i/pix/2013/08/29/article-2405475-1B8389EE000005DC-718_634x550.jpg" width="50" height="50">
                                <div class="d-flex flex-column ml-2">
                                    <h6 class="username">John Henkins</h6><span class="date">Oct 29,2021</span>
                                </div>
                            </div><i class="fa fa-share share"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


      </section>


    </body>
</html>