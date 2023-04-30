<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Signup Form</title>
</head>

<body>
    <section class="vh-100">
        <div class="container h-custom my-3 p-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="images/signup-image.jpg" class="img-fluid" alt="Sample image" width="400px">
                </div>
                <div class="col-md-8 col-lg-5 col-xl-4">
                    <h1 style="text-align: center;">SIGNUP FORM</h1>
                    <form action="doRegister.php" method="post">
                        <div class="form-group mb-3">
                            <label class="form-label" for="fname">Full Name</label>
                            <input type="text" id="fname" class="form-control form-control-lg" name="fname"
                                placeholder="FullName" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="userName">Username</label>
                            <input type="text" id="userName" class="form-control form-control-lg" name="userName"
                                placeholder="UserName" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="pwd">Password</label>
                            <input type="password" id="pwd" class="form-control form-control-lg" name="pwd"
                                placeholder="Enter password" />
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" id="email" class="form-control form-control-lg" name="email"
                                placeholder="Enter a valid email address" />
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg col-lg-7"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Already Have an Account? <a href="frmLogin.php"
                                    class="link-danger">Login Here!</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Right -->
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>





"{{ asset('css/authStyle.css') }}"





