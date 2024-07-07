<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Instructions</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #333;
    }

    .container p {
      font-size: 18px;
      line-height: 1.6;
      margin-bottom: 20px;
      color: #555;
    }

    .container ul {
      padding: 0;
      margin-bottom: 20px;
    }

    .container ul li {
      margin-bottom: 10px;
      list-style-type: none;
      color: #555;
    }

    .container ul li i {
      margin-right: 10px;
      color: #007bff;
    }

    .container .btn-container {
      text-align: center;
    }

    .container .btn-container a {
      display: inline-block;
      margin-right: 10px;
      margin-bottom: 10px;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .container .btn-container a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Quiz Instructions</h2>
    <p>Welcome to our quiz website! Before you begin, please read the following instructions:</p>
    <ul>
      <li><i class="fas fa-check"></i> This quiz consists of multiple-choice questions.</li>
      <li><i class="fas fa-check"></i> Each question has only one correct answer.</li>
      <li><i class="fas fa-check"></i> You will have a 60 seconds to completer each section.</li>
      <li><i class="fas fa-check"></i> After completing the quiz, you will receive your score.</li>
    </ul>
    <p>If you have any further questions or need assistance, please contact us <a href="contactus.php">here</a>.</p>
    <p>Thank you for participating and good luck!</p>
    <div class="btn-container">
      <a href="login.php">Start Quiz</a>
      <a href="main.php">Home</a>
    </div>
  </div>
</body>
</html>
