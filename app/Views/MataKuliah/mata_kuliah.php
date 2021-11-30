<?= $this->extend('Layout/templates'); ?>
<?= $this->section('konten'); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-areas header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">E - <em> Presensi</em></a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/" class="<?php if ($alamat == 'Home') { ?> active <?php } ?>">Home</a></li>
                        <li class="scroll-to-section"><a href="/matakuliah" class="<?php if ($alamat == 'matkul') { ?> active <?php } ?>">Riwayat Presensi Mata Kuliah</a></li>
                        <li class="scroll-to-section"><a href="/logout">Logout</a></li>
                        <li class="main-button"><a href="#"><?= $nama; ?></a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<style>
    .col {

        background: #fff;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 1px -1px 10px rgba(196, 189, 227, 0.25);
        border-radius: 10px;
        padding: 20px;
        margin: 30px;
        transition: 1s;

    }

    .col:hover {
        background: grey;
        transition: 1s;
        color: white
    }

    .buton {
        background: linear-gradient(180deg, #BB0A48 0%, #A2053C 100%);
        width: 9vw;
        border-radius: 5px;
        transition: 1s;
        text-align: center;
    }

    .buton>a {
        color: white;
    }

    .buton:hover {
        background: #8B0C39;
        width: 9vw;
        border-radius: 5px;
        transition: 1s;
        text-align: center;
    }
</style>


<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
    <div autoplay muted loop id="bg-video">

    </div>


    <div style="margin-top: 10%;" class="captionss">


        <p style="text-align: center; font-size:50px; color: black; top: 90%;"><strong>Riwayat Presensi Mata Kuliah</strong></p>

        <div id="kotak" class="row row-cols-2 row-cols-lg-4">
            <?php foreach ($matkul as $m) : ?>
                <div class="col">
                    <h4><?= $m['nama_matakuliah']; ?></h4>
                    <h5><?= $m['nama_dosen']; ?></h5>
                    <div class="buton">
                        <a href="/matakuliah/<?= $m['nama_matakuliah']; ?>">Lihat Presensi</a>
                    </div>

                </div>
            <?php endforeach ?>
        </div>

    </div>
    <!-- ***** Main Banner Area End ***** -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?= $this->endsection(); ?>