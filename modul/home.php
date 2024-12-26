<section>
    <img src="asset/img/evoting.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
        </div>
    </section>  
          
    <section class="home-about-section spad">
        <div class="container">
            <div class="row">
                 <?php
                  $sqlprofil = mysqli_query($koneksi,"select * from profil order by id_profil");
                    while($data = mysqli_fetch_array($sqlprofil)){
                  ?>
                <div class="col-lg-6">
                    <div class="ha-pic">
                        <img src="gambar/profil/<?php echo $data['gambar']; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ha-text">
                        <h2><?php echo $data['judul'];?></h2>
                        <p><?php echo $data['deskripsi'];?></p>
                    </div>
                </div>
                <?php
               }
            ?>
            </div>
        </div>
    </section>