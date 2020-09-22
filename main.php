
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Face Detection Test</title>
  <script defer src="face-api.min.js"></script>
  <script defer src="script.js"></script>

  
  <div class="w3-row">
    <div class="w3-container">
      <!-- <h1 class="w3-text-teal">Welcome</h1> -->
  </div>


  <style>
    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    canvas {
      position: absolute;
      /* top: 0;
      left: 0; */
    }
  </style>
</head>
<body>
  <video id="video" width="720" height="560" autoplay muted></video>
</body>

<?php
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $database = "Major Proj";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

$conn = new mysqli('localhost', 'root', '');


?>

</html>