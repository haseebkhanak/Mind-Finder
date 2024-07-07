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
        background-color: rgb(36, 48, 36);
    }

    p:nth-child(1)
        {
            margin-top: 150px;
            margin-left: 500px;
            position: absolute;
            font-weight: bold;
            font-size: 80px;
            background-image: linear-gradient(to right, black,#4d0707, #282a28, #e4e4f6,rgb(230, 136, 20),black);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            text-shadow: 4px 4px rgb(241, 191, 191);
            animation-name: slidein;
            animation-duration: 4s;
            font-style: italic;
        }

        @keyframes slidein
        {
            0% {
            transform: translateX(-100%);
            opacity: 0.5;
        }
        100% {
            opacity: 1;
        }         
        }
        
        p:nth-child(2)
        {
            font-size: 250px;
            font-weight: bold;
            position: absolute;
            margin-top: 200px;
            margin-left: 650px;
            background-image: linear-gradient(to bottom,rgb(15, 14, 14),black,brown,rgb(138, 110, 57),black,red,yellow,blue);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            text-shadow: 8px 6px rgb(245, 102, 102);
            font-style: italic;
        }

        @media (max-width: 600px){

            p:nth-child(1){
                position: absolute;
                font-weight: bold;
                font-size: 40px;
                margin-left: 100px;
                top: 15%;
                text-shadow: 3px 3px rgb(240, 182, 182);
            }

            p:nth-child(2){
                position: absolute;
                font-size: 100px;
                margin-left: 200px;
                top: 15%;
                text-shadow: 3px 3px rgb(247, 117, 117);
            }

            }

            @media (max-width: 400px){

                p:nth-child(1){
                    position: absolute;
                    font-weight: bold;
                    font-size: 35px;
                    margin-left: 100px;
                    top: 10%;
                    text-shadow: 2px 2px rgb(247, 145, 145);
                }

                p:nth-child(2){
                    position: absolute;
                    font-size: 100px;
                    font-weight: bold;
                    margin-left: 150px;
                    top: 10%;
                    text-shadow: 2px 2px rgb(219, 71, 71);
                }
            }

            
            @media (max-width: 280px) and (min-width: 200px){

            p:nth-child(1){
                position: absolute;
                font-weight: bold;
                font-size: 25px;
                margin-left: 50px;
                top: 10%;
                text-shadow: 2px 2px rgb(211, 116, 116);
            }

            p:nth-child(2){
                position: absolute;
                font-size: 60px;
                font-weight: bold;
                margin-left: 100px;
                top: 10%;
                text-shadow: 2px 2px rgb(221, 108, 108);
            }
            }

            @media (max-width: 1100px) and (min-width:700px){

                p:nth-child(1){
                    position: absolute;
                    font-weight: bold;
                    font-size: 70px;
                    margin-left: 200px;
                    top: 20%;
                    text-shadow: 3px 3px rgb(212, 124, 124);
                }

                p:nth-child(2){
                    position: absolute;
                    font-size: 200px;
                    font-weight: bold;
                    margin-left:400px;
                    top: 25%;
                    text-shadow: 3px 3px rgb(216, 69, 69);
                }
                }

    </style>
</head>
<body>
    <div class="container-fluid">

    <p>Mind Finder</p> 
    <p class="display-4">?</p>

</div>

</body>
<script>
   
    setTimeout(function(){
        window.location.assign("main.php")
        
    }, 5000);
</script>
</html>