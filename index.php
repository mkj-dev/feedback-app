<?php include "incl/header.php" ?>

<?php
if(!empty($_POST)){
    $user = [];
    $user['name'] = htmlentities($_POST['name']);
    $user['email'] = htmlentities($_POST['email']);
    $user['feedback'] = htmlentities($_POST['textarea']);
    $user['feedback_date'] = date('D, d M Y H:i:s', time());
    $userArray = json_decode(file_get_contents('./feedback_data/data.json'), true);
    array_push($userArray, $user);
    file_put_contents('./feedback_data/data.json', json_encode($userArray, JSON_PRETTY_PRINT));
}
?>
<h2 class="mt-5 mb-2">Feedback</h2>
<p>Give us some super cool and positive feedback</p>

<form action="" method="POST" class="my-4">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
    </div>
        <div class="mb-3">
        <label for="textarea" class="form-label">Feedback</label>
        <textarea class="form-control" name="textarea" id="textarea" rows="5" placeholder="Enter your feedback..." required></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
</form>

<?php include "incl/footer.php" ?>