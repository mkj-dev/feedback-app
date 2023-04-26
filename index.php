<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $feedback_date = date("F j, Y, g:i a");
    $new_feedback = array(
        'name' => $name,
        'email' => $email,
        'feedback' => $feedback,
        'feedback_date' => $feedback_date
    );
    $json = file_get_contents("./feedback_data/data.json");
    $data = json_decode($json, true);
    array_push($data, $new_feedback);
    $json = json_encode($data);
    file_put_contents("./feedback_data/data.json", $json);
    header("Location: feedback.php");
    exit;
}
?>
<?php include "incl/header.php" ?>
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
        <label for="feedback" class="form-label">Feedback</label>
        <textarea class="form-control" name="feedback" id="feedback" rows="5" placeholder="Enter your feedback..." required></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
</form>

<?php include "incl/footer.php" ?>