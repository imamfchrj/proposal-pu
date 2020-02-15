<?php

$id = "";
$sub_key = "";
$id_komponen = "";
$sub_id_komponen = "";
$kegiatan = "";
$satuan = "";
$estimasi = "";
$pembagi = "";

// this for update
if (isset($option["form_value"])) {
    $id = $option["form_value"]->id;
    $sub_key = $option["form_value"]->sub_key;
    $id_komponen = $option["form_value"]->id_komponen;
    $sub_id_komponen = $option["form_value"]->sub_master_key;
    $kegiatan = $option["form_value"]->kegiatan;
    $satuan = $option["form_value"]->satuan;
    $estimasi = $option["form_value"]->estimasi;
    $pembagi = $option["form_value"]->pembagi;
}

$title_page = $option["title_page"];
$description_page = $option["description_page"];

?>
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Komponen Kegiatan</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $title_page ?></li>
            </ol>
            <h6 class="slim-pagetitle"><?= $title_page ?> Komponen Kegiatan</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
            <label class="section-title">Form <?= $title_page ?> Komponen Kegiatan</label>
            <p class="mg-b-20 mg-sm-b-40"><?= $description_page ?></p>

            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input class="form-control" type="hidden" id="id" name="id" value="<?= $id ?>"
                                   placeholder="Masukkan nama">
                            <label class="form-control-label">Komponen: <span class="tx-danger">*</span></label>
                            <select name="sub_key" id="sub_key" class="form-control select2 komponen_mst" data-placeholder="Pilih">
                                <option value=<?php if ($id_komponen) {
                                    echo $id_komponen;
                                } ?>><?php if ($id_komponen) { ?><?= get_text_komponen_mst($id_komponen) ?><?php } ?></option>
                            </select>
                            <span id="e_sub_key" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Sub Komponen: <span class="tx-danger">*</span></label>
                            <select name="sub_sub_key" id="sub_sub_key" class="form-control select2 sub_komponen_mst" data-placeholder="Pilih">
                                <option value=<?php if ($sub_id_komponen) {
                                    echo $sub_id_komponen;
                                } ?>><?php if ($sub_id_komponen) { ?><?= get_text_sub_komponen_mst($sub_id_komponen) ?><?php } ?></option>
                            </select>
                            <span id="e_sub_sub_key" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Kegiatan: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="kegiatan" name="kegiatan" value="<?= $kegiatan ?>"
                                   placeholder="Masukkan kegiatan">
                            <span id="e_kegiatan" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Satuan: </label>
                            <input class="form-control" type="text" id="satuan" name="satuan" value="<?= $satuan ?>"
                                   placeholder="Masukkan satuan">
                            <span id="e_satuan" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Estimasi: </label>
                            <input class="form-control" type="text" id="estimasi" name="estimasi" value="<?= $estimasi ?>"
                                   placeholder="Masukkan estimasi">
                            <span id="e_estimasi" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Pembagi: </label>
                            <input class="form-control" type="text" id="pembagi" name="pembagi" value="<?= $pembagi ?>"
                                   placeholder="Masukkan pembagi">
                            <span id="e_pembagi" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" id="insert_komponenkegiatan" onclick="insert();">Simpan</button>
                    <button class="btn btn-secondary bd-0"
                            onclick="window.location.href='<?= base_url('komponenkegiatan/list') ?>'">Batalkan
                    </button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </div>

    </div><!-- container -->
</div><!-- slim-mainpanel -->
