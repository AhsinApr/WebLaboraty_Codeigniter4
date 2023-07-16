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

    .banner p {
        font-size: 14px;

    }

    .container .button {
        display: inline-block;
        margin-left: 3%;
    }
</style>



<div class="container">
    <nav>
        <a class="navbar-brand" href="/index.php/user"><img src="/img/FVUSD.png" alt="" height="70" width="300"></a>


        <p><b>Re-Lab System for
                Learning of Mechatronics Application</b></p>

        <div class="button">
            <a href="Auth/logout" type="button" class="btn btn-danger btn-sm">Logout</a>
        </div>



    </nav>
</div>



<!-- Page Content -->
<!-- Banner Starts Here -->

<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="caption"> <?php $session = session() ?>

                    <h2>Hello... <?php echo $session->get('nama') ?> Welcome to the Web Re-Lab System for Learning of Mechatronics Application</h2>
                    <div class="line-dec"></div>
                    <p>Remote Laboratory System - Siemens/MPS Festo PLC Module. Practical participants can access practical equipment in the campus Lab from home; program it from their respective computers at home and then can be transferred to the hardware module in the Lab and students can monitor it through the camera installed in the Lab to find out whether the program made is correct and appropriate.</p>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Banner Ends Here -->

<!-- Featured Starts Here -->
<div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Featured</h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <a href="/user/carapenggunaan">
                        <div class="featured-item">
                            <img src="/assets/images/book.png" alt="Item 1" height="200">
                            <h4>
                                <center>How to Use</center>
                            </h4>

                        </div>
                    </a>
                    <a href="user/task">
                        <div class="featured-item">
                            <img src="/assets/images/module.png" alt="Item 2" height="200">
                            <h4>
                                <center>Module and Jobsheet</center>
                            </h4>

                        </div>
                    </a>
                    <a href="/user/reservasi ">
                        <div class="featured-item">
                            <img src="/assets/images/folder.png" alt="Item 3" height="200">
                            <h4>
                                <center>Upload file</center>
                            </h4>

                        </div>
                    </a>
                    <a href="/akses/remote">
                        <div class="featured-item">
                            <img src="/assets/images/laptop.png" alt="Item 4" height="200">
                            <h4>
                                <center>Remote Laboratory</center>
                            </h4>

                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(''); ?>



<!-- Footer Starts Here -->