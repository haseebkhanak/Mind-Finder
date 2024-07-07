
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mind Finder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

    <style>

        body{
            background-color: rgb(15, 15, 15);
        }
        .container{
            margin: auto;
            width: 500px;
            margin-top: 50px;

        }

        .card{
            background-color: rgb(168, 172, 170);
            box-shadow: 5px 5px rgb(240, 234, 234);
            border-radius: 50px;
        }

        img{
            margin-top: 20px;
        }

        #one{
            height: 120px;
        }

        p{
            font-size: 20px;
            font-style: oblique;
            font-weight: bold;
        }

        a{
            border: 1px solid rgb(230, 226, 226);
            margin: 0px 10px;
            border-radius: 20px;
            box-shadow: 2px 2px white;
        }
        a:hover{
            background-color: rgb(54, 180, 54);
        }

        span{
            font-size: 20px;
            font-weight: bold;
        }

        @media(max-width:600px)
        {
            .card{
                height: 150px;
                margin-left: 60px;
            }
            .container{
                width: 350px;
            }
            p{
                font-size: 10px;
            }  
            a{
                font-size: 15px;
                border-radius: 10px;
                text-align: center;
   
            }
            .navbar-nav {
                flex-direction: row;
            }

        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark" >
        <div class="container-fluid">
            <span class="navbar-text text-white">Mind Finder</span>

            <ul class="navbar-nav">
                <li class="nav-item">
                   <a class="nav-link text-white" href="main.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logedout.php">Log out</a>
                </li>
            </ul>

            </div>
    </nav>

    <div class="container">

        <div class="row">
            
            <div class="col-xl-5 col-4 card">
                <img id="one" class="card-img-top rounded-pill" src="Images/bg4.jpg" alt="" onclick="image('Sports')">
                <div class="card-body">
                 <p>Sports</p> 
                </div>
              </div>

              <div class="card col-xl-5 col-4" style="margin-left: 10px;">
                <img id="two" src="Images/bg5.jpg" alt="" class="card-img-top rounded-pill" style="height: 120px;" onclick="image('CA')">
                <div class="card-body">
                   <p>Current Affairs</p> 
                </div>
              </div>

              <div id="three" class="col-xl-5 col-4 card" style="margin-top: 20px;">
                <img class="card-img-top rounded-pill" src="Images/bg2.jpg" alt=""  onclick="image('History')">
                <div class="card-body">
                 <p>History</p> 
                </div>
              </div>

              <div id="four" class="card col-xl-5 col-4" style="margin-left: 10px; margin-top: 20px;">
                <img src="Images/bg7.jpg" alt="" class="card-img-top rounded-pill" style="height: 120px" onclick="image('GK')">
                <div class="card-body">
                   <p>General Knowledge</p> 
                </div>

        </div>
    </div>
</body>

<script>
    function image(option)
    {
        if(option=='Sports'){
            window.location.assign("Sports/Sports.php")
        }

        else if(option=='CA'){
            window.location.assign("Current Affairs/Ca.php")
        }

        else if(option=='History'){ 
            window.location.assign("History/History.php")
        }

        else if(option=='GK'){
            window.location.assign("GK/GK.php")
        }

        
    }
</script>
</html>