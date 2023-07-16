<form action="/user/savereservasi" style="padding: 15px;" enctype="multipart/form-data">
    <?php $session = session() ?>
    <input type="hidden" class="form-control" name="nama_user" placeholder="" value=" <?php echo $session->get('username') ?>">
    <div class="form-group">
        <div class="form-row">
            <div class="col">
                <label for="formGroupExampleInput" style="margin-top: 20px;">Nama Anda / Kelompok</label>
                <input type="text" class="form-control" name="nama" placeholder="">
            </div>
            <div class="col">
                <label for="formGroupExampleInput" style="margin-top: 20px;">Station</label>
                <select class="form-control" name="station" id="exampleFormControlSelect1">
                    <option>--Pilih Station--</option>
                    <option value="Processing">Station Procesing</option>
                    <option value="Handling">Station Handling</option>
                    <option value="Distribusi">Station Processing</option>
                    <option value="Testing">Station Testing</option>
                </select>
            </div>
        </div>
        <div class="form-row">
            <label for="formGroupExampleInput" style="margin-top: 20px;">Tanggal</label>
            <input type="date" class="form-control" name="tanggal_reservasi" placeholder="" required>
        </div>
        <div class="form-row">
            <div class="col">
                <label for="formGroupExampleInput" style="margin-top: 20px;">Waktu Mulai</label>
                <input type="time" class="form-control" name="waktu_mulai" placeholder="" required>
            </div>
            <div class="col">
                <label for="formGroupExampleInput" style="margin-top: 20px;">Waktu Selesai</label>
                <input type="time" class="form-control" class="waktu_akhir" required name="waktu_akhir" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <label for="formGroupExampleInput" style="margin-top: 20px;">file project</label>
            <input type="file" class="form-control" name="file" id="form-control-file" placeholder="Example input">
        </div>
    </div>

    <button type="submit" class="btn btn-success float-right ml-2">Booking Sekarang</button>
</form>