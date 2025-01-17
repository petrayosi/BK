<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Jadwal Periksa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                    <li class="breadcrumb-item active">Jadwal Periksa</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Jadwal Periksa</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-sm btn-primary float-right mx-1 my-1"
                                data-toggle="modal" data-target="#addModal">
                                Tambah Jadwal Periksa
                            </button>
                            <button type="button" class="btn btn-sm btn-secondary float-right mx-1 my-1"
                                data-toggle="modal" data-target="#cekJadwal">
                                Lihat Jadwal
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokter</th>
                                    <th>Hari</th>
                                    <th>Jam Mulai</th>
                                    <th>Jam Selesai</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                require 'config/koneksi.php';
                                $query = "SELECT jadwal_periksa.id, jadwal_periksa.id_dokter, jadwal_periksa.hari, jadwal_periksa.jam_mulai, jadwal_periksa.jam_selesai, jadwal_periksa.aktif, dokter.nama 
                                          FROM jadwal_periksa 
                                          INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id 
                                          WHERE dokter.id_poli = '$_SESSION[id_poli]'";
                                $result = mysqli_query($mysqli, $query);

                                while ($data = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['hari']; ?></td>
                                        <td><?php echo $data['jam_mulai']; ?></td>
                                        <td><?php echo $data['jam_selesai']; ?></td>
                                        <td><?php echo $data['aktif'] == 'Y' ? 'Aktif' : 'Tidak Aktif'; ?></td>
                                        <td>
                                            <!-- Tombol Edit -->
                                            <button type='button' class='btn btn-sm btn-warning'
                                                data-toggle="modal" data-target="#editModal<?php echo $data['id']; ?>">
                                                Edit
                                            </button>
                                            <!-- Tombol Hapus -->
                                            <button type='button' class='btn btn-sm btn-danger'
                                                data-toggle="modal" data-target="#deleteModal<?php echo $data['id']; ?>">
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="editModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Edit Jadwal</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="pages/jadwalPeriksa/updateJadwal.php" method="POST">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                        <div class="form-group">
                                                            <label for="hari">Hari</label>
                                                            <select class="form-control" name="hari" required>
                                                                <?php
                                                                $hariArray = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                                                foreach ($hariArray as $hari) {
                                                                    $selected = $data['hari'] == $hari ? 'selected' : '';
                                                                    echo "<option value='$hari' $selected>$hari</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jamMulai">Jam Mulai</label>
                                                            <input type="time" class="form-control" name="jamMulai" value="<?php echo $data['jam_mulai']; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jamSelesai">Jam Selesai</label>
                                                            <input type="time" class="form-control" name="jamSelesai" value="<?php echo $data['jam_selesai']; ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="aktif">Status</label>
                                                            <select class="form-control" name="aktif" required>
                                                                <option value="Y" <?php echo $data['aktif'] == 'Y' ? 'selected' : ''; ?>>Aktif</option>
                                                                <option value="N" <?php echo $data['aktif'] == 'N' ? 'selected' : ''; ?>>Tidak Aktif</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Hapus -->
                                    <div class="modal fade" id="deleteModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Hapus Jadwal</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="pages/jadwalPeriksa/hapusJadwal.php" method="POST">
                                                    <div class="modal-body">
                                                        <p>Apakah Anda yakin ingin menghapus jadwal ini?</p>
                                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<!-- Modal Tambah Jadwal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah Jadwal Periksa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="pages/jadwalPeriksa/tambahJadwal.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="idDokter">Nama Dokter</label>
                        <select class="form-control" name="idDokter" required>
                            <?php
                            require 'config/koneksi.php';
                            $dokterQuery = "SELECT id, nama FROM dokter WHERE id_poli = '$_SESSION[id_poli]'";
                            $dokterResult = mysqli_query($mysqli, $dokterQuery);
                            while ($dokter = mysqli_fetch_assoc($dokterResult)) {
                                echo "<option value='{$dokter['id']}'>{$dokter['nama']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <select class="form-control" name="hari" required>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jamMulai">Jam Mulai</label>
                        <input type="time" class="form-control" name="jamMulai" required>
                    </div>
                    <div class="form-group">
                        <label for="jamSelesai">Jam Selesai</label>
                        <input type="time" class="form-control" name="jamSelesai" required>
                    </div>
                    <div class="form-group">
                        <label for="aktif">Status</label>
                        <select class="form-control" name="aktif" required>
                            <option value="Y">Aktif</option>
                            <option value="N">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Lihat Jadwal -->
<div class="modal fade" id="cekJadwal" tabindex="-1" role="dialog" aria-labelledby="cekJadwalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cekJadwalLabel">Lihat Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dokter</th>
                                <th>Hari</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'config/koneksi.php';
                            $no = 1;
                            $query = "SELECT jadwal_periksa.id, jadwal_periksa.hari, jadwal_periksa.jam_mulai, jadwal_periksa.jam_selesai, 
                                             jadwal_periksa.aktif, dokter.nama 
                                      FROM jadwal_periksa 
                                      INNER JOIN dokter ON jadwal_periksa.id_dokter = dokter.id";
                            $result = mysqli_query($mysqli, $query);

                            while ($data = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>{$data['nama']}</td>
                                    <td>{$data['hari']}</td>
                                    <td>{$data['jam_mulai']}</td>
                                    <td>{$data['jam_selesai']}</td>
                                    <td>" . ($data['aktif'] == 'Y' ? 'Aktif' : 'Tidak Aktif') . "</td>
                                  </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
