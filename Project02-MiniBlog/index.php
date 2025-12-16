<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mini Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mini Blog</a>
            <div class="d-flex">
                <a href="#" class="btn btn-danger btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">

        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <form method="post">
                    <textarea class="form-control mb-2" name="content" placeholder="What's on your mind?" required></textarea>
                    <button class="btn btn-primary float-end" name="post">Post</button>
                </form>
            </div>
        </div>

            <div class="card mb-3 shadow-sm">
                <div class="card-body d-flex justify-content-between">
                    <div class="d-flex">
                        <img src="images/person.jpg" width="50" height="50" class="rounded-circle me-3">
                        <div>
                            <strong>User</strong><br>
                            <small class="text-muted">11:53 PM 12/15/2025</small>
                            <p class="mt-2">Post content goes here...</p>
                        </div>
                    </div>

                        <div class="dropdown">
                            <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                &#x22EE; 
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="#" onclick="return confirm('Are you sure you want to delete this post?')">Delete</a></li>
                            </ul>
                        </div>
                </div>
            </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>