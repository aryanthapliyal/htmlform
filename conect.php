if (isset($_POST['submit'])) {
    if (isset($_POST['firstname']) && isset($_POST['lastname']
        isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['tel']) && isset($_POST['datetime']) &&
        isset($_POST['sc']) && isset($_POST['Gender']
        && isset($_POST['hrd'])) {
        
      $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $tel = $_POST['tel'];
  $datetime = $_POST['datetime']
  $sc = $_POST['sc'];
  $Gender = $_POST['Gender'];
  $hrd = $_POST['hrd'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "root";
        $dbName = "test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Insert = "INSERT INTO register(username, password, gender)              values(?, ?, ?)";
            
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$username, $password, $gender);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>