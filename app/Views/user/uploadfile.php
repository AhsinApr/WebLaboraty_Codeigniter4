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
        <a class="navbar-brand" href="/index.php/user"><img src="/img/FVUSD.png" alt="" height="70" width="275"></a>


        <p><b>Re-Lab System for
                Learning of Mechatronics Application</b></p>

        <div class="button">
            <a href="Auth/logout" type="button" class="btn btn-danger btn-sm">Logout</a>
        </div>



    </nav>
</div>

<div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>Upload File</h1>
                </div>
            </div>
            <div class="col-md-12">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/berkas/save" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nim</label>
                            <input type="text" name="nim" id="nim" class="form-control" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" />
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Input File</label>
                        <input type="file" class="form-control" placeholder="1234 Main St" id="berkas" name="berkas" type="file">
                    </div>

                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- About Page Ends Here -->

<!-- Subscribe Form Starts Here -->


<?= $this->endSection(''); ?>