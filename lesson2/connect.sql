$server = "localhost";
$username = "myuser";
$password = "mypassword";
$database_name = "mydatabase";

// Establishing a database connection
$connection = mysqli_connect($server, $username, $password, $database_name);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully!";
