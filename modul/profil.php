<section class="about_us padding_top">
        <div class="container">
             <?php
            $artikel = mysqli_query($koneksi,"select * from profil order by id_profil");
             while($data = mysqli_fetch_array($artikel)){
                $isi = substr($data['isi'],0,400);
             $isi = substr($data['isi'],0,strrpos($isi," "));
            ?>

            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="gambar/profil/<?php echo $data['gambar']; ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>Profil</h2>
                        <p><?php echo $isi;?> [...]</p>
                        <a class="btn_2 " href="#">learn more</a>
                        <div class="banner_item">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
}
?>
            

