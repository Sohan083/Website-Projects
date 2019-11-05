 <!DOCTYPE html>
 <html>
 <head>
    <link rel="stylesheet" href="css/insert.css" />
 </head>
 <body>
     <?php
     session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "web";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $u=$_SESSION['username'];
    $c=$_GET['tag'];
    

    $sql = "INSERT INTO register
    VALUES ('$c','$u')";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: html.php?tag=".$c);
    ?> 
 </body>
 </html>
 