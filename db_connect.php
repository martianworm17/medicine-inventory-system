 <?php
    $server_name = "localhost";
    $username    = "root";
    $password    = "";
    
    // Create connection. Start using mysqli* because PHP7 drops support for mysql*
    $conn = mysqli_connect($server_name, $username, $password);
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?> 