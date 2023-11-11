<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>User List</h1>
    
    <ul>
        <?php foreach ($users as $user){ ?>
            <li><?= $user['email']. "-------". $user['user_name'] . "   ". "-----" . $user['type'] ?> <a href="edit?id=<?php echo $user['id'] ?>">edit</a> <?php echo "--" ?> <a href="delete?id=<?php echo $user['id'] ?>">delte</a> </li>
        <?php }   ?>
    </ul>

    <h2>Add User</h2>
    <form method="post" action="add">
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required>
        <button type="submit">Add User</button>
    </form>
</body>
</html>