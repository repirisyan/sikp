<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" style="width: 100%;">
                        <caption>Daftar Jadwal Menguji</caption>
                            <thead class="text-primary">
                                <th>
                                    NPM
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Judul
                                </th>
                                <th>
                                    Tanggal Seminar
                                </th>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($data_menguji->result_array() as $i):
                                        $npm = $i['npm'];
                                        $nama = $i['nama'];
                                        $judul = $i['judul'];
                                        $tanggal = $i['tanggal_sidang'];
                                    ?>
                                <tr>
                                    <td>
                                        <?=$npm?>
                                    </td>
                                    <td>
                                       <?=$nama?>
                                    </td>
                                    <td>
                                        <?=$judul?>
                                    </td>
                                    <td>
                                        <?=$tanggal?>
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