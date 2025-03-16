<form method="POST" action="/users/update/<?php echo $userData["id"]; ?>">
    <input type="text" name="name" value="<?php echo $userData["name"]; ?>" required>
    <input type="email" name="email" value="<?php echo $userData["email"]; ?>" required>
    <input type="text" name="mobile" value="<?php echo $userData["mobile"]; ?>" required>
    <button type="submit">Update</button>
</form>
