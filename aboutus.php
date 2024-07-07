<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }
        
        .jumbotron {
            color: #fff;
            text-align: center;
            padding: 100px 0;
            margin-bottom: 0;
        }
        
        .jumbotron h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            color: rgb(108, 96, 96);
        }
        
        .jumbotron p {
            font-size: 20px;
            color: rgb(31, 25, 25);
        }
        
        .container {
            background-color: #fff;
            padding: 60px;
            margin-top: -50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        .container h2 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }
        
        .container p {
            font-size: 18px;
            line-height: 1.6;
        }
        
        .container .flip-card {
            perspective: 1000px;
            margin-top: 40px;
        }
        
        .container .flip-card-inner {
            position: relative;
            width: 100%;
            height: 300px;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        .container .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
        
        .container .flip-card-front,
        .container .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }
        
        .container .flip-card-front {
            background-color: #f8f8f8;
            color: #333;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .container .flip-card-back {
            background-color: #007bff;
            color: #fff;
            transform: rotateY(180deg);
            padding: 20px;
            border-radius: 10px;
        }
        
        .container .flip-card-back h1,
        .container .flip-card-back p {
            margin-bottom: 10px;
        }
        
        .container .flip-card-back p {
            font-size: 18px;
        }
        
        @media (max-width: 768px) {
            .jumbotron h1 {
                font-size: 36px;
            }
            
            .jumbotron p {
                font-size: 18px;
            }
            
            .container h2 {
                font-size: 24px;
            }
            
            .container p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to Our Company</h1>
            <p>We are passionate about what we do and committed to excellence.</p>
            <a href="main.php" class="btn btn-primary">Home</a>
        </div>
    </div>
    
    <div class="container">
        <h2>About Us</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="Images/Personal.jpg" alt="Avatar" style="width:100%; height:100%;">
                        </div>
                        <div class="flip-card-back">
                            <h1>Haseeb Salman Khan</h1> 
                            <p>Developer</p> 
                            <p>Welcome to my company HSK. Here you find many valuable and attractive websites that u want.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
