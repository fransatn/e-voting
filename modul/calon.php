    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Calon Osis</h2>
                        <div class="bt-option">
                            <a href="?page=home">Home</a>
                            <span>Calon Osis</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="speaker-section spad">
        <div class="container">
            <div class="row">
               <?php
                 $sqlcalon = mysqli_query($koneksi,"SELECT distinct (id_calon), calon.nis_calon, calon.nama_calon, calon.gambar, kelas.nama_kelas, jurusan.nama_jurusan FROM calon JOIN kelas ON kelas.id_kelas=calon.id_kelas JOIN jurusan ON jurusan.id_jurusan=kelas.id_jurusan");
                  while($data = mysqli_fetch_array($sqlcalon)){
                ?>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="gambar/calon/<?php echo $data['gambar']; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4><?php echo $data['nama_calon']; ?></h4>
                                        <span><a href="?page=calonproses&id_calon=<?php echo $data['id_calon']; ?>" class="primary-btn top-btn" onclick="return confirm('Apa anda yakin dengan pilihan anda ?')">Pilih</a></span>
                                    </div>
                                    <div class="si-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <h5>NIS : <?php echo $data['nis_calon']; ?></h5>
                                    <h5>Kelas : <?php echo $data['nama_kelas']; ?>-<?php echo $data['nama_jurusan']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
