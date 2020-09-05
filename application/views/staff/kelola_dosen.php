<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#tambahDosen">Tambah Data
                        <i class="now-ui-icons ui-1_simple-add"></i></button>
                    <div class="table-responsive">
                        <table class="table" style="width: 100%;">
                        <caption>Daftar Dosen</caption>
                            <thead class="text-primary">
                                <th>
                                    NIP
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th class="text-center">
                                    Aksi
                                </th>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($data_dosen->result_array() as $i):
                                        $nip = $i['nip'];
                                        $nama = $i['nama_dosen'];
                                    ?>
                                <tr>
                                    <td>
                                        <?php echo $nip?>
                                    </td>
                                    <td>
                                        <?php echo $nama?>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-warning" data-toggle="modal"
                                            data-target="#ubahDosen<?php echo $nip?>">Ubah <i
                                                class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger" data-toggle="modal"
                                            data-target="#hapusDosen<?php echo $nip?>">Hapus
                                            <i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Dosen-->
<div class="modal fade" id="tambahDosen" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Dosen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('Staff/Kelola_dosen/tambah_dosen','class="form_login"');?>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nip" maxlength="20" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" maxlength="255" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php
    foreach($data_dosen->result_array() as $i):
    $nip = $i['nip'];
    $nama = $i['nama_dosen'];
?>
<!-- Modal Ubah Dosen-->
<div class="modal fade" id="ubahDosen<?php echo $nip?>" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ubah Data Dosen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('Staff/Kelola_dosen/ubah_dosen','class="form_login"');?>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" readonly name="nip" value="<?php echo $nip?>"
                            maxlength="20" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama?>" maxlength="255"
                            required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach?>

<!-- Modal Hapus Data Dosen-->
<?php
    foreach($data_dosen->result_array() as $i):
    $nip = $i['nip'];
    $nama = $i['nama_dosen'];
?>
<div class="modal fade" id="hapusDosen<?php echo $nip?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data Dosen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('Staff/Kelola_dosen/hapus_dosen','class="form_login"');?>
                <input type="text" class="form-control" value="<?php echo $nip?>" hidden name="nip" maxlength="20"
                    required>
                Apakah anda yakin menghapus data Dosen <br>
                NIP : <strong><?php echo $nip?></strong><br>
                Nama : <strong><?php echo $nama?></strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>