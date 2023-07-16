<?= $this->extend('template/section'); ?>

<?= $this->section('konten'); ?>


<?php
$session = session();
$error = $session->getFlashdata('error');
?>

<?php if ($error) { ?>
    <p style="color:red">Terjadi Kesalahan:
    <ul>
        <?php foreach ($error as $e) { ?>
            <li><?php echo $e ?></li>
        <?php } ?>
    </ul>
    </p>
<?php } ?>
<div id="wrapper">
    <header id="header" class="alt">
        <a href="/auth/login" class="logo"><strong>WEBLABORATORY</strong> <span>MEKATRONIKA</span></a>

    </header>
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h2>Register</h2>
            </header>
            <form method="post" action="/auth/valid_register">
                <div class="fields">
                    <div class="field half">
                        <label for="name">nama</label>
                        <input type="text" name="nama" id="" />
                    </div>
                    <div class="field half">
                        <label for="name">username</label>
                        <input type="text" name="username" id="" required />
                    </div>
                    <div class="field half">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="" required />
                    </div>
                    <div class="field half">
                        <label for="password">Konfirmasi Password</label>
                        <input type="password" name="confirm" id="" required />
                    </div>

                </div>
                <ul class="actions">
                    <li><input type="submit" value="Register" name="login" /></li>
                </ul>
            </form>
            <p>
                <a href="/auth/login">Sudah punya akun?</a>
            </p>
        </div>
    </section>
    <!-- <h2 class>Register</h2>
    <form method="post" action="/auth/valid_register">
        Username: <br>
        <input type="text" name="username" required><br>
        Password: <br>
        <input type="password" name="password" required><br>
        Konfirmasi Password: <br>
        <input type="password" name="confirm" required><br>
        <button type="submit" name="login">Register</button>

    </form> -->


</div>
<?= $this->endSection(); ?>