<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">-->
        <!-- Bootstrap CSS -->
        <title>Manga Reader</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            body {
                background-image: url("https://images3.alphacoders.com/114/thumb-1920-1143698.jpg");
                background-repeat: no-repeat;
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../page/dashboardPage.php">Manga Reader</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../page/dashboardPage.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../page/komikBerwarnaPage.php">Komik Berwarna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../page/komikTerbaruPage.php">Komik Terbaru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../page/komikHotPage.php">Komik Hot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../page/genrePage.php">Genre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../page/loginPage.php">Login</a>
                </li>
            </ul>
        </nav>
        <div
            class="text-dark">
            <div
                class="container min-vh-100 d-flex align-items-center justify-content-center">
                <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
                    <div class="card-header fw-bold">Login</div>
                    <div class="card-body">
                        <form action="./process/loginProcess.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input
                                    class="form-control"
                                    id="username"
                                    name="username"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="login">Login</button>
                            </div>
                        </form>
                        <p class="mt-2 mb-0">Belum punya akun ?
                            <a href="./page/registerPage.php" class="textprimary">Klik Disini!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    </body>
</html>