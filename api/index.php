<?php
    $servername = "localhost";
    $database = "rocketnewsemails";
    $username = "root";
    $password = "";
    $email = $_POST['email'];
    $sql = "mysql:host=$servername;dbname=$database;";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    } 
     
    $sql = "INSERT INTO leitores (email) VALUES ('$email')";
    if (mysqli_query($conn, $sql)) {
      ?>
      <head>
          <meta charset="UTF-8">
          <title>RocketNews.</title>
          
          <!-- Styles -->
          <link rel="stylesheet" href="../css/success.css"> 
      
          <!-- SEO -->
          <link rel="shortcut icon" href="../../assets/favicon.svg" type="image/x-icon">
      </head>
      <img src="../../assets/icon.png" alt="email">
      <h1>Email cadastrado💜</h1>
      <p>
      Fique atento para receber todas as principais notícias sobre tecnologia.
      </p>

      <?php
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
