<?= $this->extend('template/templateuser'); ?>
<?= $this->section('konten'); ?>



<style>
    .container nav {
        margin-top: 2%;
    }

    .container p {

        margin-left: 1%;
        display: inline-block;
        font-size: 25px;

    }

    .container .button {
        display: inline-block;
        margin-left: 3%;
    }

    .caption h6 {
        text-align: center;
    }
</style>


<div class="container">
    <nav>
        <a class="navbar-brand" href="/index.php/user"><img src="/img/FVUSD.png" alt="" height="70" width="275"></a>


        <p><b>Re-Lab System for
                Learning of Mechatronics Application</b></p>

        <div class="button">
            <a href="Auth/logout" type="button" class="btn btn-danger btn-sm">Logout</a>
        </div>



    </nav>
</div>


<div class="about-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Cara Penggunaan</h1>
                </div>
            </div>
            <div class="col-md-6" style="margin-top: 80px;">
                <div class="left-image">
                    <img src="/assets/images/engineering-icons.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-content">
                    <h4>Sebelum Memulai Remote Dekstop</h4>
                    <ul>
                        <li>Buka menu upload file</li>
                        <li>Tuliskan Nim dan Nama anda di from yang sudah disediakan</li>
                        <li>Upload progam dalam format .RAR atau .ZIP </li>
                    </ul>
                    <h4>Memulai Remote Dekstop Anydesk</h4>
                    <ul>
                        <li>Buka Menu Remote Dekstop</li>
                        <li>Pilih Anydesk</li>
                        <li>Download Anydesk di tempat yang sudah disediakan </li>
                        <li>Buka Anydesk.exe</li>
                        <li>Masukan Password yang sudah disediakan</li>
                        <li>Lalu Connect</li>
                    </ul>
                    <h4>Memulai Remote Dekstop Rust Desk</h4>
                    <ul>
                        <li>Buka Menu Remote Dekstop</li>
                        <li>Pilih Rust Desk</li>
                        <li>Download Rust Desk di tempat yang sudah disediakan </li>
                        <li>Buka Rar lalu pilih Rustdesk.exe</li>
                        <li>Install Rust Desk</li>
                        <li>Masukan Password yang sudah disediakan</li>
                        <li>Lalu Connect</li>
                    </ul>
                    <h4>Memulai Remote Dekstop Chrome Remote Dekstop</h4>
                    <ul>
                        <li>Pastikan anda memakai browser chrome</li>
                        <li>Buka Menu Remote Dekstop</li>
                        <li>Pilih Chrome Remote Dekstop</li>
                        <li>Klik Remote Chrome</li>
                        <li>Masukan Password yang sudah disediakan</li>
                        <li>Lalu Connect</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Page Ends Here -->

<!-- Subscribe Form Starts Here -->


<?= $this->endSection(''); ?>