<?php

include 'User.php';

$user = new User();

// Create user

//echo '<h1>Create User </h1>';

//echo $user->createUser("John Doe", "john@example.com");

// Read users
echo '<h1>READ USER </h1>';


$users = $user->readUsers();

//print_r($users);

echo '<table border="1" width="40%">';
foreach( $users as $key )
{

echo '<tr><td>'.$key['idusers'].'</td><td>'." ".$key['name'].'</td><td>'.$key['email'].'</td>'.'<td><a href="?del='.$key['idusers'].'">'."Delete".'</a>'."\t\t\t\t".'<a href="?update='.$key['idusers'].'">'."Edit".'</a>'.'</td></tr>';

}

echo '</table>';




if(isset($_GET['del'])){

    $iddel = $_GET['del'];
    $user->deleteUser($iddel);

    echo'<script>'.'window.location.href="oops_opt.php"'.'</script>';

}

if(isset($_GET['update'])){

    $idupdate = $_GET['update'];

    $user->updateUser($idupdate, "Updated Name", "updated@example.com");

    echo'<script>'.'window.location.href="oops_opt.php"'.'</script>';

}


//echo '<h1>Update User </h1>';

// Update user
//echo $user->updateUser(1, "Updated Name", "updated@example.com");

// Delete user 

//echo '<h1> Update User </h1>';

// 
//echo $user->deleteUser(2);


?>
