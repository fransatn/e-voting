<center>
                    <div class="col-12">
                        <h2 class="contact-title">Daftar</h2>
                    </div>
                    <div class="col-lg-8">
                        <form method="post" class="form-contact contact_form" action="?page=daftarproses"  id="form_login" enctype="multipart/form-data">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="nama_pemilih" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="nis_pemilih" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIS'" placeholder="NIS">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="username" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="password" type="password"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">                  
                                 <select name="nama_kelas" class="form-control valid">
                                    <option>-Kelas-</option>
                                         <?php
                                        $sqlkelas = mysqli_query($koneksi,"SELECT distinct(id_kelas), kelas.nama_kelas, jurusan.nama_jurusan from kelas JOIN jurusan ON jurusan.id_jurusan=kelas.id_jurusan");while($datakelas = mysqli_fetch_array($sqlkelas)){

                                 echo"<option value='$datakelas[id_kelas]'> $datakelas[nama_kelas] $datakelas[nama_jurusan]</option>";
                
                                  }
                                        ?>
                                </select>
                                </div>
                             </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="gambar"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group mt-3">
                                <button type="submit" class="primary-btn top-btn">Daftar</button>
                            </div>
                      
                        </form>
                    </div>
</center>