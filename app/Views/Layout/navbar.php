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
 <header class="header-area header-sticky">
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