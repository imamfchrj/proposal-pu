<?php

$id = "";
$prov_id = "";
$kab_id = "";
$nama = "";

// this for update
if (isset($option["form_value"])) {
    $id = $option["form_value"]->id;
    $prov_id = $option["form_value"]->prov_id;
    $kab_id = $option["form_value"]->kab_id;
    $nama = $option["form_value"]->nama;
}

$title_page = $option["title_page"];
$description_page = $option["description_page"];
?>
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Kabupaten</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $title_page ?></li>
            </ol>
            <h6 class="slim-pagetitle"><?= $title_page ?> Kabupaten</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
            <label class="section-title">Form <?= $title_page ?> Kabupaten</label>
            <p class="mg-b-20 mg-sm-b-40"><?= $description_page ?></p>

            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input class="form-control" type="hidden" id="id" name="id" value="<?= $id ?>"
                                   placeholder="">
                            <label class="form-control-label">Provinsi: <span class="tx-danger">*</span></label>
                            <select name="prov_id" id="prov_id" class="form-control select2 provinsi" data-placeholder="Pilih">
                                <?php
                                echo '
                                        <option value="0">Pilih Provinsi</option>';
                                foreach ($prov_all as $row) {
                                    $a = $row->prov_id;
                                    $b = $prov_id;
                                    $c = "";
                                    if ($a == $b) {
                                        $c = "selected";
                                    }
                                    echo '
                                        <option value="' . $row->prov_id . '"' . "$c" . '>' . $row->nama . '</option>';
                                }
                                ?>
                            </select>
                            <span id="e_prov_id" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">ID Kabupaten: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="kab_id" name="kab_id" value="<?= $kab_id ?>"
                                   placeholder="Masukkan ID Kabupaten">
                            <span id="e_kab_id" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Nama Kabupaten: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="nama" name="nama" value="<?= $nama ?>"
                                   placeholder="Masukkan Nama Kabupaten">
                            <span id="e_nama" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" id="insert_provinsi" onclick="insert();">Simpan</button>
                    <button class="btn btn-secondary bd-0"
                            onclick="window.location.href='<?= base_url('kabupaten/list') ?>'">Batalkan
                    </button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </div>

    </div><!-- container -->
</div><!-- slim-mainpanel -->
