<?= $this->extend('LayoutAdmin/template'); ?>
<?= $this->section('konten'); ?>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-sm-12">
            <br>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="/Admin/proses2/<?= $matkul['id_matakuliah']; ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Matakuliah</label>
                    <input type="text" class="form-control" value="<?= $matkul['nama_matakuliah']; ?>" name="nama_matakuliah" autofocus aria-describedby="emailHelp" placeholder="Masukkan nama matakuliah">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Dosen</label>
                    <input type="text" class="form-control" name="nama_dosen" value="<?= $matkul['nama_dosen']; ?>" placeholder="Masukkan nama dosen pengajar">

                </div>
                <div style="display: flex;" class="buton">
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                    <a style="color:white;margin: 6px;" href="/dmatkul" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
    <?= $this->endSection(); ?>