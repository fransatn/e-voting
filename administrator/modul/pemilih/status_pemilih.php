<?php  
        
        $kode= $_GET['id'];
                           
        $sqlpemilih = mysqli_query($koneksi,"SELECT * FROM pemilih where id_pemilih='$kode'");
        $data = mysqli_fetch_array($sqlpemilih);
        
        if ($data['status_login']=='Y'){
            $sql=mysqli_query($koneksi,"UPDATE pemilih set status_login='T' where id_pemilih='$kode'" );

        } 
        if ($data['status_login']=='T'){
            $sql=mysqli_query($koneksi,"UPDATE pemilih set status_login='Y' where id_pemilih='$kode'" );
                  
        }      
    
    echo"Update Status";
    echo"<meta http-equiv='refresh' content='1; url=?page=pemilih'>";  
?>        