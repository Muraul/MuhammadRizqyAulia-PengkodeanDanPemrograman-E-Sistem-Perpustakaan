<!DOCTYPE html>
<html>
    <head>
        <title>Print Entire Book Data</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel-->
                    <div class="text-center">
                        <h2>Raul Library Information System </h2>
                        <h4>Jalan Arun VI No.11, RT.9/RW.4, Ujung Menteng, <br> Cakung kota Jakarta Timur DKI Jakarta 13960</h4>
                        <hr>
                        <h3>DATA FOR THE ENTIRE BOOK</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th><th width="17%"><center>Book Tittle</th><th><center>Author Name</th><th><center>Publisher</th><th><center>Publication Year</th><th width="10%"><center>Book Locker</th><th width="14%"><center>Number <br> (Shelf-Drawer-Box)</center></th><th><center>Book Recipient</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM buku";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['judul_buku'] ?></td>
                                    <td><?= $data['nama_pengarang'] ?></td>
                                    <td><?= $data['penerbit'] ?></td>
                                    <td><?= $data['tahun_terbit'] ?></td>
                                    <td><?= $data['loker_buku'] ?></td>
                                    <td><?= $data['no_rak'] ?> - <?= $data['no_laci'] ?> - <?= $data['no_boks'] ?></td>
                                    <td><?= $data['penerima'] ?></td>
                                    <td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Jakarta,  <?= date("17-04-2024") ?>
                                        <br><br><br><br>
                                        <u>Kepala Perpustakaan<strong></u><br>
                                        Mohammad Cholid Riza
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>