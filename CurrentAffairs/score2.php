<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Score</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <style>
        #totalScore2{
            color: green;
            text-align: center;
            width: 300px;
            border-radius: 30px;
            border: 3px solid black;
            margin: auto;
            margin-top: 100px;
            font-size: 60px;
            font-style: oblique;
        }

        .main{
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
    <div id="totalScore2"></div>

    <div class="main d-flex justify-content-center">
            <form action="Ca_result.php" method="post">
                <input type="hidden" name="score_2" id="score_2_input">
                <button type="submit" class="btn btn-success me-5">Play Again</button>
            </form>

            <form action="Info.php" method="post">
                <input type="hidden" name="score_2" id="score_ca_input">
                <button type="submit" class="btn btn-danger">See Your Score</button>
            </form>
        </div>
    </div>

</body>

<script>
    var totalScore2 = localStorage.getItem("totalScore2");
  
    if(totalScore2>15)
    {
        var text="<h4>You have played very well!</h4>";
        document.getElementById("totalScore2").innerHTML = text + 'Your score is ' +totalScore2;

    }
    
    else{
        var text1="<h4>You didn't play well</h4>";
        document.getElementById("totalScore2").innerHTML = text1 + '<h2>Your score is</h2>' +totalScore2;
    }

    document.getElementById("score_2_input").value = totalScore2;
    document.getElementById("score_ca_input").value = totalScore2;
</script>

</html>
