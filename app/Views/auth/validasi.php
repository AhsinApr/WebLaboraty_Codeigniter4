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
            <a class="navbar-brand" href="/index.php/auth/login"><img src="/img/FVUSD.png" alt="" height="70" width="200"></a>


            <p><b>Re-LabS System for Practical
                    Learning of Mechatronics Application</b></p>





        </nav>
    </div>


    <div class="container">

        <section class="vh-100" style="text-align: center; margin-top: 20%;">
            <div class="container-fluid h-custom">
                <h2> Selamat, Anda Berhasil Mendaftar Silahkan Login <a href="/auth/login"> Disini </a></h2>
            </div>
    </div>

    </section>

    </div>

    <?= $this->endSection(); ?>