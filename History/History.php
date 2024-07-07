<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="History_Style.css">
    
</head>
<body>
    <div class="container">
        <div class="main">
            <div id="one" class="mt-4">Infini Lume</div>
            <div id="two" style="font-size: 20px;"></div>
        </div>

        <div class="con mt-5">
            <div id="ques" style="background-color: black; color: white;"></div>
            <div class="row">
        
                <div class="col-xl-6">
                    <input type="radio" name="answer" id="a_1" class="mt-4" value="ans1">
                    <label for="a_1" id="a" style="background-color: black; color: white;" class="correct" ></label>
                </div>

                <div class="col-xl-6">
                    <input type="radio" name="answer" id="a_2" class="mt-4" value="ans2">
                    <label for="a_2" id="b" style=" background-color: black; color: white;"></label>
                </div>

                <div class="col-xl-6">
                    <input type="radio" name="answer" id="a_3" class="mt-4" value="ans3">
                    <label for="a_3" id="c" style=" background-color: black; color: white;"></label>
        </div>

        <div class="col-xl-6">
                    <input type="radio" name="answer" id="a_4" class="mt-4" value="ans4">
                    <label for="a_4" id="d" style=" background-color: black; color: white;"></label>
            </div>
        </div>
    </div> <br>
    <div id="ans"></div>
    </div>

    <div class="con d-flex">
        <button class="btn btn-info mx-auto d-block me-5" id="sub">Submit</button>
        <button class="btn btn-success mx-auto d-block ms-5" id="nxt">Next</button>
    </div>
    
</body>
<script src="Histry.js"></script>
</html>
