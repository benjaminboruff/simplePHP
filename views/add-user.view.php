<?php require('partials/head.php'); ?>

<h1>Add User</h1>

<form action="/add-user" method="POST">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name">
    <button type="submit">submit</button>
</form>

<?php require('partials/footer.php'); ?>