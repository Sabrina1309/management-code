
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
    <link rel="stylesheet" href="css/style.css">
    
    <div class="container">
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="users.php">You can click here to see the users' list</a></li>
        </ul>
    </div>
    
    <h2 class="h2">USERS FORM</h2>
    
    

     <style>
        .user-form {
            width: 800px;
            margin: 150px auto;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .h2 {
            text-align: center;
            margin: 100px auto;
        }

        .user-form input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .user-form button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .user-form button:hover {
            background: #0056b3;
        }
     </style>

</head>
<body>
<form class="user-form" action="index.php" method="POST">
    <input type="text" name="name" placeholder="Enter your name" required><br/>
    <input type="email" name="email" placeholder="Enter your email" required><br/>
    <input type="number" name="age" placeholder="Enter your age" required><br/>
    <button type="submit" name="submit">Add Users</button>

</form>
</body>
</html>
    

<?php //creating the user form
require "db.php";  //we should connect the  two files db and crud first of all
require "crud.php";


$crud = new Crud($conn); //here define the crud class

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];


    if ($crud->createUser($name, $email, $age)) {
        echo "User added successfully";
    } else {
        echo "Error adding user.";
    }
}

?>
