<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdataUser</title>
</head>
<body>

<form method="post" action="edit?id=<?php echo $user['id'] ?>">
         <input type="text" name="username" value="<?php echo $username ?>" required>
         <input type="text" name="email" value="<?php echo $email ?>" placeholder="email" required>
         <input type="text" name="password" placeholder="password" value="<?php echo $password ?>" required>
        <button type="submit" name="edit">Updata User</button>
    </form>
</body>
</html>