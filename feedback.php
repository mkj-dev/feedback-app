<?php include "incl/header.php" ?>

<?php 
$json = file_get_contents("./feedback_data/data.json");
$data = json_decode($json, true);
?>

<h2 class="mt-5 mb-3">Past Feedback</h2>

<?php foreach($data as $user): ?>
    <div class="card w-50 my-3">
        <div class="card-body">
            <h5 class="card-title mb-0"><?= $user['name'] ?></h5>
            <p class="card-text"><small class="text-muted"><?= $user['email'] ?></small></p>
            <p class="card-text"><?= $user['feedback'] ?></p>
            <p class="card-text"><small class="text-muted"><?= $user['feedback_date'] ?></small></p>
        </div>
    </div>
<?php endforeach; ?>

<?php include "incl/footer.php" ?>