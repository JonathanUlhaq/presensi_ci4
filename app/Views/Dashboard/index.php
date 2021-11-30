<?= $this->extend('Layout/template'); ?>
<?= $this->section('konten'); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">





<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
        <source src="<?= base_url(); ?>/assets/images/Sekolah.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="caption">

            <h2>Presensi Mudah, Dimanapun <em>Kapanpun</em></h2>

            <div class="main-button scroll-to-section">
                <a href="#call-to-action">Presensi</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<style>
    .carousel-control-next,
    .carousel-control-prev

    /*, .carousel-indicators */
        {
        filter: invert(100%);
    }

    #buton:hover {
        color: white
    }
</style>

<!-- ***** Call to Action Start ***** -->
<section class="section" id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <h3>PRESENSI SAAT INI</h3>
                <hr><br><br>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <h2>Presensi yang Berlangsung</h2>

                        </div>
                        <?php foreach ($matkul as $m) : ?>
                            <div class="carousel-item">

                                <h6><?= $m['created_at']; ?></h6>
                                <h4><?= $m['mata_kuliah']; ?></h4>
                                <h5>Pertemuan Ke - <?= $m['pertemuan']; ?></h5>
                                <a id="buton" class="btn btn-outline-success" href="/presensi/<?= $m['mata_kuliah']; ?>/<?= $m['pertemuan']; ?>/<?= session()->get('name'); ?>">Presensi Disini</a>


                            </div>
                        <?php endforeach ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Features Item Start ***** -->
<section class="section" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Presensi <em>Terakhir</em></h2>

                    <p>E - Presensi, Presensi mudah dimanapun kapanpun</p>
                </div>
            </div>



            <div class="row row-cols-2 row-cols-lg-3">
                <?php foreach ($user as $u) : ?>

                    <div class="right-content">
                        <h4><?= $u['nama_matakuliah']; ?></h4>
                        <hr>
                        <h7><?= $u['created_at']; ?> </h7><br>
                        <a href="#" style="color: darkgreen;"><?= $u['status']; ?></a>
                        <p style="color:white;visibility:hidden">sdaasdsadsasadassaddsad dsaffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff</p>

                    </div>
                <?php endforeach ?>
            </div>




        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?= $this->endsection(); ?>