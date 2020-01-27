<?php

$id = "";
$prov_id = "";
$ikk_persen = "";
$ikk_decimal = "";
$tahun = "";

// this for update
if (isset($option["form_value"])) {
    $id = $option["form_value"]->id;
    $prov_id = $option["form_value"]->prov_id;
    $ikk_persen = $option["form_value"]->ikk_persen;
    $ikk_decimal = $option["form_value"]->ikk_decimal;
    $tahun = $option["form_value"]->tahun;
}

$title_page = $option["title_page"];
$description_page = $option["description_page"];

?>
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">IKK Provinsi</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $title_page ?></li>
            </ol>
            <h6 class="slim-pagetitle"><?= $title_page ?> IKK Provinsi</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
            <label class="section-title">Form <?= $title_page ?> IKK Provinsi</label>
            <p class="mg-b-20 mg-sm-b-40"><?= $description_page ?></p>

            <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-3">
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
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">IKK Persen (%): <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="ikk_persen" name="ikk_persen" value="<?= $ikk_persen ?>"
                                   placeholder="Masukkan IKK Persen">
                            <span id="e_ikk_persen" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">IKK Decimal (%): <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="ikk_decimal" name="ikk_decimal" value="<?= $ikk_decimal ?>"
                                   placeholder="Masukkan IKK Persen">
                            <span id="e_ikk_decimal" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Tahun: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="tahun" name="tahun" value="<?= $tahun ?>"
                                   placeholder="Masukkan Tahun">
                            <span id="e_ikk_decimal" class="tx-danger"></span>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0" id="insert_ikk_provinsi" onclick="insert();">Simpan</button>
                    <button class="btn btn-secondary bd-0"
                            onclick="window.location.href='<?= base_url('ikk_provinsi/list') ?>'">Batalkan
                    </button>
                </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
        </div>

    </div><!-- container -->
</div><!-- slim-mainpanel -->
