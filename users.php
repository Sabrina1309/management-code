<?php
require "db.php"; //include database connection
require "crud.php"; //include the CRUD class

$crud = new Crud($conn);
$users = $crud->getUsers();

?>


<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>

    <div class="container">
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="index.php">You can click here to add users to database</a></li>
        </ul>
</div>
        <h2>User List</h2>

    <style>    
        table {
            width: 100%;
            border-collapse: collapse;
            background: lightgray; 
        }

        .h2 {
           text-align: center;
           margin: 100px auto; 
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: lightcyan;
        }
    </style>


</head>
<body>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Action</th>
            
        </tr>
        <?php
        foreach ($users as $user): ?>
       
        <tr>
            <td><?= $user["id"]?></td>
            <td><?= $user["name"]?></td>
            <td><?= $user["email"]?></td>
            <td><?= $user["age"]?></td>
           <td>
               <a href="delete.php?id=<?= $user["id"] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        
    <?php endforeach; ?>
    </table>
</body>
</html>