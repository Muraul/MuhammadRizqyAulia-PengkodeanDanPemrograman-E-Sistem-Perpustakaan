<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Detailed Book Borrowing Information</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail Buku-->
                    <?php
                    $sql = "SELECT *FROM peminjaman WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Book title</td> <td><?= $data['judul_buku'] ?></td>
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
                            <td>Loan period</td> <td><?= $data['lama_pinjam'] ?></td>
                        </tr>
						<tr>
                            <td>Information</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=peminjaman&actions=tampil" class="btn btn-success btn-sm">
                        Return to Loan Data</a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

