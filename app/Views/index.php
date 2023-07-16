<?= $this->extend('template/templateuser'); ?>
<?= $this->section('konten'); ?>

<?php
$session = session();
$login = $session->getFlashdata('login');
$username = $session->getFlashdata('username');
$password = $session->getFlashdata('password');
?>



<?php if ($username) { ?>
    <p style="color:red"><?php echo $username ?></p>
<?php } ?>

<?php if ($password) { ?>
    <p style="color:red"><?php echo $password ?></p>
<?php } ?>

<?php if ($login) { ?>
    <p style="color:green"><?php echo $login ?></p>
<?php } ?>

<style>
    body {
        background-image: url("/img/tekno.jpg");
    }
</style>

<style>
    .container nav {
        margin-top: 2%;
    }

    .container p {

        margin-left: 1%;
        display: inline-block;
        font-size: 25px;

    }

    .banner p {
        font-size: 14px;

    }

    .container .button {
        display: inline-block;
        margin-left: 3%;
    }
</style>

<body>

    <div class="container">
        <nav>
            <a class="navbar-brand" href="/index.php/auth/login"><img src="/img/FVUSD.png" alt="" height="70" width="400"></a>


            <p><b>Re-Lab System for
                    Learning of Mechatronics Application</b></p>





        </nav>
    </div>



    <div class="container">

        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5" style="margin-top: 70px">
                        <h5>Remote Laboratory System For Mechatronics Application Learning</h5>
                        <img src="/assets/images/Lab-Otomasi.png" class="img-fluid" alt="Sample image" style="margin-top: 12px;">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="margin-top: 75px;">
                        <form class="login" method="post" action="/auth/valid_login">

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Username</label>
                                <input type="text" name="username" required id="form3Example3" class="form-control form-control-lg" placeholder="Enter username" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Password</label>
                                <input type="password" name="password" required id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
                            </div>


                            <div class="text-center text-lg-start mt-4 pt-2">
                                <div class="action">
                                    <!-- <button type="submit" class="btn btn-primary btn-block mb-3" value="Login">Login</button> -->

                                    <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login">Login</button>
                                </div>
                                <h6 class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/auth/register"" class=" link-danger">Register</a></h6>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </section>

    </div>
</body>

<?= $this->endSection(); ?>