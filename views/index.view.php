<?php require('partials/head.php'); ?>

<h1>Submit Your Name</h1>

<form action="/names" method="POST">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name">
    <button type="submit">submit</button>
</form>

<?php require('partials/footer.php'); ?>
