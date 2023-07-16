\';;;';;;;;;;;;;;;;'';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;<?= $this->extend('template/section'); ?>

<?= $this->section('konten'); ?>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <a href="/index.php/user" class="logo"><strong>REMOTELABORATORY</strong> <span>MEKATRONIKA</span></a>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <ul class="links">
            <li><a href="/user">Home</a></li>
            <li><a href="landing.html">Landing</a></li>
            <li><a href="generic.html">Generic</a></li>
            <li><a href="elements.html">Elements</a></li>
        </ul>
        <ul class="actions stacked">
            <li><a href="/auth/login" class="button primary fit">Log Out</a></li>
        </ul>
    </nav>

    <!-- Banner -->
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <?php $session = session() ?>
                <h1>Hello, <?php echo $session->get('nama') ?></h1>

            </header>
            <div class="content">
                <p>Selamat datang di Website Laboratory Mekatronika<br />
                    Universitas Sanata Dharma.</p>
                <ul class="actions">
                    <li><a href="#one" class="button next scrolly">Get Started</a></li>
                </ul>
            </div>
        </div>
    </section> 

    <!-- Main -->
    <div id="main">

        <!-- One -->
        <section id="one" class="tiles">
            <article>
                <span class="image">
                    <img src="/img/pic01.jpg" alt="" />
                </span>
                <header class="major">
                    <h3><a href="/user/carapenggunaan" class="link">Cara Penggunaan</a></h3>
                </header>
            </article>
            <article>
                <span class="image">
                    <img src="/img/pic02.jpg" alt="" />
                </span>
                <header class="major">
                    <h3><a href="/Berkas" class="link">Upload File</a></h3>

                </header>
            </article>
            <article>
                <span class="image">
                    <img src="/img/pic03.jpg" alt="" />
                </span>
                <header class="major">
                    <h3><a href="/User/task" class="link">Module dan Jobsheet</a></h3>

                </header>
            </article>
            <article>
                <span class="image">
                    <img src="/img/pic04.jpg" alt="" />
                </span>
                <header class="major">
                    <h3><a href="/User/remote" class="link">Remote Laboratory</a></h3>

                </header>
            </article>
        </section>

    </div>
</div>
<?= $this->endSection(); ?>