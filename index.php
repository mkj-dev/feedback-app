<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback App</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-white">Feedback App</span>
            <ul class="navbar-nav flex-row">
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="index.php">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="feedback.php">Feedback</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-white" href="about.php">About</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container-md d-flex flex-column align-items-center">
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
                <textarea class="form-control" id="textarea" rows="3" placeholder="Enter your feedback..."></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
            </div>
        </form>
    </main>

    <footer class="py-3 mt-4 bg-dark">
        <p class="my-0 text-center text-white">&copy; 2022 Company, Inc</p>
    </footer>
</body>
</html>