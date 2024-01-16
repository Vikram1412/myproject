
<?php
/* one file code */

class User
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "username", "password", "crud_example");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Other methods...

    public function searchUsers($keyword)
    {
        $keyword = $this->conn->real_escape_string($keyword);

        $result = $this->conn->query("SELECT * FROM users WHERE name LIKE '%$keyword%' OR email LIKE '%$keyword%'");

        if ($result->num_rows > 0) {
            $users = [];
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
            return $users;
        } else {
            return "No matching users found";
        }
    }

    // Other methods...

    public function __destruct()
    {
        $this->conn->close();
    }
}


?>

<?php 

/* other file code */



include 'User.php';

$user = new User();

// Search users
$searchKeyword = "john";

$matchingUsers = $user->searchUsers($searchKeyword);

if(is_array($matchingUsers)) {

    print_r($matchingUsers);

} else {

    echo $matchingUsers;

}



?>
