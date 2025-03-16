<?php
require "../app/controllers/UserController.php";

$uri = explode("/", trim($_SERVER["REQUEST_URI"], "/"));

if ($uri[0] == "users") {
    $controller = new UserController();
    if (isset($uri[1]) && $uri[1] == "create") {
        $controller->create();
    } elseif (isset($uri[1]) && $uri[1] == "store") {
        $controller->store();
    } elseif (isset($uri[1]) && $uri[1] == "edit" && isset($uri[2])) {
        $controller->edit($uri[2]);
    } elseif (isset($uri[1]) && $uri[1] == "update" && isset($uri[2])) {
        $controller->update($uri[2]);
    } elseif (isset($uri[1]) && $uri[1] == "delete" && isset($uri[2])) {
        $controller->delete($uri[2]);
    } else {
        $controller->index();
    }
}
?>
