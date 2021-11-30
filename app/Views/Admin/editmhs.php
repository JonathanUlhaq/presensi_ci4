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
            <h3>Mahasiswa : <?= $matkul['username']; ?></h3>
            <form method="post" action="/Admin/proses6/<?= $matkul['id_presensi']; ?>">
                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <select name="status" class="form-control">

                        <option value="Hadir">Hadir</option>
                        <option value="Alpha">Alpha</option>
                        <option value="Ijin">Ijin</option>

                    </select>

                </div>

                <div style="display: flex;" class="buton">
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                    <a style="color:white;margin: 6px;" href="/mahasiswa" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
    <?= $this->endSection(); ?>