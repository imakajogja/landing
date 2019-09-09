
        <?php
            include 'koneksi.php';
            $no = 1;
            $query = "SELECT * FROM dtam ORDER BY kd_primer DESC";
            $dewan1 = $db1->prepare($query);
            $dewan1->execute();
            $res1 = $dewan1->get_result();

            if ($res1->num_rows > 0) {
                while ($row = $res1->fetch_assoc()) {
                    $nama_mahasiswa = $row['nama'];
                    $alamat = $row['alamat'];
                    $tow = explode(".", $row['nim']);
                    $foto = implode("_",$tow);
        ?>
                            <div class="column is-4">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="media">
                                            <div class="media-left">
                                                <figure class="image is-48x48">
                                                <img src="http://www.amikom.ac.id/public/fotomhs/20<?php echo $tow[0];?>/<?php echo $foto;?>.jpg" alt="Placeholder image">
                                                </figure>
                                            </div>
                                            <div class="media-content">
                                                <p class="title is-4"><?php echo $nama_mahasiswa;?></p>
                                                <p class="subtitle is-6"><?php echo $row['nim'];?></p>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <?php echo $row['alamat'];?>
                                        </div>
                                    </div>
                                </div>
                            </div>
        <?php } } else { ?>Tidak ada data ditemukan
        <?php } ?>