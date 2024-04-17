<!DOCTYPE html>
<html>
    <head>
        <title>Print Book Data</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM buku WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel-->
                    <div class="text-center">
                        <h2>Raul Library Information System </h2>
                        <h4>Jalan Arun VI No.11, RT.9/RW.4, Ujung Menteng, <br> Cakung kota Jakarta Timur DKI Jakarta 13960</h4>
                        <hr>
                        <h3>BOOK DATA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Book Tittle</td> <td><?= $data['judul_buku'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Author Name</td> <td><?= $data['nama_pengarang'] ?></td>
                                <tr>
                                    <td>Publisher</td> <td><?= $data['penerbit'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Publication Year</td> <td><?= $data['tahun_terbit'] ?></td>
                                </tr>
                                 <tr>
                                    <td>Book Locker</td> <td><?= $data['loker_buku'] ?></td>
                                </tr>
                                <tr>
                                    <td>Number (Shelf-Drawer-Box)</td> <td><strong><?= $data['no_rak'] ?> - <?= $data['no_laci'] ?> - <?= $data['no_boks'] ?></strong></td>
                                </tr>
								<tr>
                                    <td>Book Receiving Staff</td> <td><?= $data['penerima'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
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