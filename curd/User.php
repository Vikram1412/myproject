<?php

class User
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "api_db");

        //$this->conn = new mysqli("localhost", "username", "password", "crud_example");

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function createUser($name, $email)
    {
        $sql = "INSERT INTO user (name, email) VALUES ('$name', '$email')";

        if ($this->conn->query($sql) === TRUE) {

            return "User created successfully";

        }else {

            return "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function readUsers()
    {
        $result = $this->conn->query("SELECT * FROM user");

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

    public function updateUser($id, $name, $email)
    {
        $sql = "UPDATE user SET name='$name', email='$email' WHERE idusers=$id";

        if ($this->conn->query($sql) === TRUE) {
            return "User updated successfully";
        } else {
            return "Error updating user: " . $this->conn->error;
        }
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM user WHERE idusers=$id";

        if ($this->conn->query($sql) === TRUE) {
            return "User deleted successfully";
        } else {
            return "Error deleting user: " . $this->conn->error;
        }
    }



// method for search opration 

        public function searchUsers($keyword)
        {
            $keyword = $this->conn->real_escape_string($keyword);
            
            $result = $this->conn->query("SELECT * FROM user WHERE name LIKE '%$keyword%' OR email LIKE '%$keyword%'");

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



    public function __destruct()
    {
        $this->conn->close();
    }
}


?>
