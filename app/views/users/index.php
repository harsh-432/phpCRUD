<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users</title>
</head>
<body>
    <h1>All Users</h1>
    <a href="/users/create">Create User</a>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?php echo $user["name"] . " - " . $user["email"] . " - " . $user["mobile"]; ?>
                <a href="/users/edit/<?php echo $user["id"]; ?>">Edit</a>
                <a href="/users/delete/<?php echo $user["id"]; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
