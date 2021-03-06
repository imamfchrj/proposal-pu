<?php

$id = "";
$prov_id = "";
$prov_name = "";

// this for update
if (isset($option["form_value"])) {
    $id = $option["form_value"]->id;
    $prov_id = $option["form_value"]->prov_id;
    $prov_name = $option["form_value"]->nama;
}

$title_page = $option["title_page"];
$description_page = $option["description_page"];

?>
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Provinsi</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $title_page ?></li>
            </ol>
            <h6 class="slim-pagetitle"><?= $title_page ?> Provinsi</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
            <label class="section-title">Form <?= $title_page ?> Provinsi</label>
            <p class="mg-b-20 mg-sm-b-40"><?= $description_page ?></p>

            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <input class="form-control" type="hidden" id="id" name="id" value="<?= $id ?>"
                                   placeholder="">
                            <label class="form-control-label">ID Provinsi : <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="prov_id" name="prov_id" value="<?= $prov_id ?>"
                                   placeholder="Masukkan id provinsi">
                            <span id="e_prov_id" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Nama Provinsi: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="prov_name" name="prov_name" value="<?= $prov_name ?>"
                                   placeholder="Masukkan Nama Provinsi">
                            <span id="e_prov_name" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" id="insert_provinsi" onclick="insert();">Simpan</button>
                    <button class="btn btn-secondary bd-0"
                            onclick="window.location.href='<?= base_url('provinsi/list') ?>'">Batalkan
                    </button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </div>

    </div><!-- container -->
</div><!-- slim-mainpanel -->
