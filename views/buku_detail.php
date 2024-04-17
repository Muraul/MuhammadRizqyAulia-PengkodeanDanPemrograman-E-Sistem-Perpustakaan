<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Book Detail Information</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail Buku-->
                    <?php
                    $sql = "SELECT *FROM buku WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Book Locker</td> <td><?= $data['loker_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Shelf/Cabinet Number</td> <td><?= $data['no_rak'] ?></td>
                        </tr>
                        <tr>
                            <td>Tier/Drawer Number</td> <td><?= $data['no_laci'] ?></td>
                        </tr>
						<tr>
                            <td>Box Number</td> <td><?= $data['no_boks'] ?></td>
                        </tr>
                        <tr>
                            <td>Book Tittle</td> <td><?= $data['judul_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Author Name</td> <td><?= $data['nama_pengarang'] ?></td>
                        </tr>
						<tr>
                            <td>Publication Year</td> <td><?= $data['tahun_terbit'] ?></td>
                        </tr>
						<tr>
                            <td> Book Publisher</td> <td><?= $data['penerbit'] ?></td>
                        </tr>
						<tr>
                            <td>Book Recipient</td> <td><?= $data['penerima'] ?></td>
                        </tr>
						<tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
						<tr>
                            <td>Information</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=buku&actions=tampil" class="btn btn-success btn-sm">
                        Return to Book Data </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

