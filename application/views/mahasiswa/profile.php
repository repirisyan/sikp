<div class="panel-header panel-header-sm">
</div>
<?php foreach($profile->result_array() as $i):
    $sampul = $i['sampul'];
    $foto = $i['foto'];
    $nama = $i['nama'];
?>
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title text-primary"><i class="now-ui-icons ui-1_lock-circle-open"></i> Kata Sandi</h5>
                </div>
                <div class="card-body">
                    <?php echo form_open('Mahasiswa/Profile/ubah_password','class="form_login"');?>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-3 col-form-label">Kata Sandi
                            Baru</label>
                        <div class="col-sm-7">
                            <input type="password" name="sandi_baru" class="form-control" required
                                placeholder="Kata Sandi Baru" id="pass" maxlength="100">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-3 col-form-label">Verifikasi
                            Sandi</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" name="confirm_sandi"
                                placeholder="Verifikasi Kata Sandi Baru" id="confirm" required maxlength="100">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary" id="btn_ubah_pw"><i class="fa fa-edit"></i>
                        Ubah</button>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="<?=base_url('assets/img/foto/sampul/'.$sampul)?>" alt="Sampul" id="upload_sampul">
                    <button data-toggle="modal" data-target="#uploadSampul" style="position: absolute;
                                top: 20%;
                                left: 20%;
                                transform: translate(-50%, -50%);
                                -ms-transform: translate(-50%, -50%);
                                background-color: #555;
                                color: white;
                                font-size: 16px;
                                border: none;
                                cursor: pointer;
                                border-radius: 5px;" hidden id="btn_sampul"><i
                            class="now-ui-icons media-1_camera-compact"></i> Sampul</button>
                </div>
                <div class="card-body">
                    <div class="author">
                        <span>
                            <div class="container">
                                <img class="avatar border-gray" id="upload_foto"
                                    src="<?=base_url('assets/img/foto/profile/'.$foto)?>" alt="Foto Profil">
                                <button data-toggle="modal" data-target="#uploadFoto" style="position: absolute;
                                top: 35%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                -ms-transform: translate(-50%, -50%);
                                background-color: #555;
                                color: white;
                                font-size: 16px;
                                border: none;
                                cursor: pointer;
                                border-radius: 5px;" hidden id="btn_upload"><i
                                        class="now-ui-icons media-1_camera-compact"></i></button>
                            </div>
                            <h5 class="title"><?php echo $nama?></h5>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>

<!-- Modal UPload Foto !-->
<div class="modal fade" id="uploadFoto" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Upload Foto Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Mahasiswa/Profile/upload_foto','class="form_login"');?>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Foto</label>
                    <div class="col-sm-8">
                        <div class="custom-file mb-3">
                            <input type="file" name="foto_profile" class="custom-file-input" id="validatedCustomFile"
                                required>
                            <label class="custom-file-label" for="validatedCustomFile">Pilih foto JPG</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal UPload Sampul !-->
<div class="modal fade" id="uploadSampul" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Upload Sampul Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('Mahasiswa/Profile/upload_sampul','class="form_login"');?>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Sampul Foto</label>
                    <div class="col-sm-8">
                        <div class="custom-file mb-3">
                            <input type="file" name="foto_sampul" class="custom-file-input" id="validatedCustomFile"
                                required>
                            <label class="custom-file-label" for="validatedCustomFile">Pilih foto JPG</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>