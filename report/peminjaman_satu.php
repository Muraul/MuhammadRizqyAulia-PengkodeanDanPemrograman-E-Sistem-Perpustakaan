<!DOCTYPE html>
<html>
    <head>
        <title>Print Book Lending Data</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM peminjaman WHERE id='" . $_GET ['id'] . "'";
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
                        <h3>BOOK LENDING DATA</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Book Tittle</td> <td><?= $data['judul_buku'] ?></td>
                                </tr>
                                <tr>
                                    <td>Borrower</td> <td><?= $data['peminjam'] ?></td>
                                </tr>
                                <tr>
                                    <td>Date of Loan</td> <td><?= $data['tgl_pinjam'] ?></td>
                                </tr>
                                <tr>
                                    <td>Due Date</td> <td><?= $data['tgl_kembali'] ?></td>
                                </tr>
								<tr>
                                    <td>Loan period</td> <td><?= $data['lama_pinjam'] ?> Day</td>
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
