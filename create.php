<?php

/*

This block code has to keep it under User.php file

start code for curd application there is User is a class name of a user  */

class User
{
    private $conn; // private variable for stable connection with __construct() method 

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "username", "password", "crud_example");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }


        /* createUser method have to writen for create or insert users data in database */

    public function createUser($name, $email)
    {
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

        if ($this->conn->query($sql) === TRUE) {
            return "User created successfully";
        } else {
            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    /* method readUsers() has been written to read or get user data from database  */

    public function readUsers()
    {
        $result = $this->conn->query("SELECT * FROM users");

        if ($result->num_rows > 0) {
            $users = [];
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }
            return $users;
        } else {
            return "No users found";
        }
    }


    /* updateUser() method has been written to update users record or data */

    public function updateUser($id, $name, $email)
    {
        $sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

        if ($this->conn->query($sql) === TRUE) {
            return "User updated successfully";
        } else {
            return "Error updating user: " . $this->conn->error;
        }
    }

    /* deleteUser( ) has been written for delete users record with help of id */

    public function deleteUser($id)
    {
        $sql = "DELETE FROM users WHERE id=$id";

        if ($this->conn->query($sql) === TRUE) {
            return "User deleted successfully";
        } else {
            return "Error deleting user: " . $this->conn->error;
        }
    }

    public function __destruct()
    {
        $this->conn->close();
    }
}


/* end code of class user and  */

?>

<?php

/* This block of code has to be keep it in CRUD opration html webpage  */


<?php

include 'User.php';

$user = new User();

// Create user
echo $user->createUser("John Doe", "john@example.com");

// Read users
$users = $user->readUsers();
print_r($users);

// Update user
echo $user->updateUser(1, "Updated Name", "updated@example.com");

// Delete user
echo $user->deleteUser(2);

?>




?>

