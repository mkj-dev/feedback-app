<?php include "incl/header.php" ?>

<h2 class="mt-5 mb-2">Feedback</h2>
<p>Give us some super cool and positive feedback</p>

<form action="" method="post" class="my-4">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
        <div class="mb-3">
        <label for="textarea" class="form-label">Feedback</label>
        <textarea class="form-control" name="textarea" id="textarea" rows="5" placeholder="Enter your feedback..."></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
</form>

<?php include "incl/footer.php" ?>