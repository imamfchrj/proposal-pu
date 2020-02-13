<?php
$id = "";
$name = "";
$email = "";
$hp = "";
$password = "";
$c_password = "";
$status = "";

// this for update
if (isset($option["form_value"])) {
    $id = $option["form_value"]->id;
    $name = $option["form_value"]->name;
    $email = $option["form_value"]->email;
    $hp = $option["form_value"]->hp;
    $status = $option["form_value"]->status;
}

$title_page = $option["title_page"];
$description_page = $option["description_page"];

?>
<!-- <a href="#div_simpan" > Scroll kebawah</a> -->
<div style="position:fixed;top:20px;right:20px;">
    <div class="btn-group" role="group" aria-label="Basic example">
<!--        <a href="javascript:kalkulasi();" class="btn btn-info pd-x-25 active">Kalkulasi</a>-->
        <a href="#div_simpan" class="btn btn-teal pd-x-25 kalulator">Kebawah</a>
        <!-- <a href="#div_simpan" class="btn btn-secondary pd-x-25">Right</#div_simpan> -->
    </div>
</div>
<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Pengajuan Air Minum</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?= $title_page ?>
                </li>
            </ol>
            <h6 class="slim-pagetitle"><b>1.</b> Ketentuan Teknis Pengajuan Air Minum</h6>
        </div>
        <!-- slim-pageheader -->
        <!-- page 1 ketentuan teknis A pelayanan -->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">A</span>
                                <span class="title">Informasi Umum</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <tbody>

                <tr>
                    <td class="w-3 p-3 align-middle">Provinsi</td>
                    <td class="p-3">
                        <div class="input-group">
                            <select id="provinsi" class="form-control select2 provinsi"
                                    data-placeholder="Pilih Provinsi">

                            </select>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td class="w-3 p-3 align-middle">Output Kegiatan</td>
                    <td class="p-3">
                        <div class="input-group">
                            <select id="jenis_spam" class="form-control select2 jenis_spam"
                                    data-placeholder="Jenis SPAM" onchange="jenis_spam();">
                                <option value="perluasan">Perluasan</option>
                                <option value="peningkatan">Peningkatan</option>
                                <option value="pembangunan_baru">Pembangunan Baru</option>
                            </select>
                        </div>

                    </td>
                </tr>


                </tbody>
            </table>
        </div>

        <!-- page 1 ketentuan teknis A pelayanan -->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;" id="container_jenis_spam_1">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">1.1</span>
                                <span class="title">Profil Sistem</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
<!--                <th>Verifikasi</th>-->
<!--                <th>Harga Satuan</th>-->
<!--                <th>Indikator</th>-->
                </thead>
                <tbody>

                <tr>
                    <th colspan="2">1.1.1</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kapasitas terpasang</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="jenis_spam_1_1_1" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Lt/det</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>


                <tr>
                    <th colspan="2">1.1.2</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kapasitas produksi</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="jenis_spam_1_1_2" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Lt/det</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>


                <tr>
                    <th colspan="2">1.1.3</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Idle capacityi</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="jenis_spam_1_1_3" value="" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Lt/det</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>


                <tr>
                    <th colspan="2">1.1.4</th>
                </tr>

                <tr>
                    <td class="w-25 p-3 align-middle" rowspan="2">NRW</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="jenis_spam_1_1_4A" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">%</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->

                </tr>

                <tr>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="jenis_spam_1_1_4B" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Lt/det</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>


                <tr>
                    <th colspan="5">1.1.5</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Sambungan Eksisting</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="jenis_spam_1_1_5" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Unit</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.1.6</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Penduduk terlayani</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="jenis_spam_1_1_6" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Jiwa</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>
                </tbody>
            </table>
        </div>

        <!-- page 1 ketentuan teknis A pelayanan -->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">1.2</span>
                                <span class="title">Pelayanan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
<!--                <th>Verifikasi</th>-->
<!--                <th>Harga Satuan</th>-->
<!--                <th>Indikator</th>-->
                </thead>
                <tbody>

                <tr>
                    <th colspan="2">1.2.1</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Jumlah Penduduk Administrasi (Tahun proyeksi)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="pelayanan_1_2_1A" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Jiwa</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <td class="w-25 p-3 align-middle" rowspan="2">Target Cakupan Pelayanan (%)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="pelayanan_1_2_1B" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">%</span>
                        </div>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->

                </tr>

                <tr>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="pelayanan_1_2_1C" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Jiwa</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Rata-rata anggota Keluarga</td>
                    <td class="p-3">
                        <div class="input-group">
<!--                            <input id="pelayanan_1_2_1D" type="number" value="" class="form-control" placeholder="">-->
<!--                            <span class="input-group-addon">Jiwa/KK</span>-->
                            <select id="pelayanan_1_2_1D" class="form-control select2 keluarga"
                                    data-placeholder="" onchange="">
                                <option value="0">Pilih</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="2">1.2.2</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Target Sambungan</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="pelayanan_1_2_2A" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Unit</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>


                <tr>
                    <td class="w-3 p-3 align-middle">Tambahan Sambungan</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="pelayanan_1_2_2B" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Unit</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Konsumsi Pemakaian Air</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="pelayanan_1_2_2C" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Lt/Jiwa/Hari</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Konsumsi air domestik (Qd)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="pelayanan_1_2_2D" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Lt/det</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <td class="w-25 p-3 align-middle" rowspan="2">Konsumsi air non domestik (Qd)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="pelayanan_1_2_2E" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">%</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>
                <tr>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="pelayanan_1_2_2F" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Lt/dt</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kebutuhan air total (Q = Qd + Qnd)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="pelayanan_1_2_2G" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Lt/dt</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <td class="w-25 p-3 align-middle" rowspan="2">Non Revenue Water (NRW)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="pelayanan_1_2_2H" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">%</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>
                <tr>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="pelayanan_1_2_2I" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Lt/dt</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="2">1.2.3</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kebutuhan Rata-rata (Qr)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="pelayanan_1_2_3A" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Liter/dt</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kapasitas Produksi (Qmax.= 1,1 - 1,5Qr)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="pelayanan_1_2_3B" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Liter/dt</span>

                            <p class="align-content-center">&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</p>

                            <input disabled id="pelayanan_1_2_3B_2" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Liter/dt</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>


                <tr>
                    <td class="w-3 p-3 align-middle">Tambahan Kapasitas Produksi (1,1 - 1,5)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="pelayanan_1_2_3C" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Liter/dt</span>

                            <p class="align-content-center">&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</p>

                            <input disabled id="pelayanan_1_2_3C_2" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Liter/dt</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kebutuhan Puncak (Qp : 1,5 - 2 Qr )</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="pelayanan_1_2_3D" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Liter/dt</span>

                            <p class="align-content-center">&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;</p>

                            <input disabled id="pelayanan_1_2_3D_2" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Liter/dt</span>
                        </div>

                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>
                </tbody>
            </table>
        </div>

        <!-- page 1 ketentuan teknis B unit air baku-->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">1.3</span>
                                <span class="title">Unit Air Baku</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
                <th>Verifikasi</th>
<!--                <th>Harga Satuan</th>-->
                <th>Indikator</th>
                </thead>
                <tbody>

                <tr>
                    <th colspan="4">1.3.1</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Debit Air Baku</td> <!-- (Qab = 1,1 x Qmax)-->
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_air_baku_1_3_1" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Liter/dt</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_air_baku_1_3_1_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_air_baku_1_3_1_indikator">
                            <li class="tx-success"></li>

                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.3.2</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Jenis Sumber</td>
                    <td class="p-3">
                        <div class="input-group">
                            <select id="unit_air_baku_1_3_2" class="form-control select2 pipa"
                                    data-placeholder="Pilih Jenis">

                            </select>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.3.3</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kekeruhan Maximum</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_air_baku_1_3_3" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">NTU</span>
                        </div>

                    </td>
                    <td>
                        <ul id="unit_air_baku_1_3_3_verifikasi" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul id="unit_air_baku_1_3_3_indikator" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.3.4</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Elevasi Sumber Air</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_air_baku_1_3_4" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.3.5</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Panjang pipa Transmisi</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_air_baku_1_3_5" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.3.6</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Beda Tinggi (▲H)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="unit_air_baku_1_3_6" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul id="unit_air_baku_1_3_6_verifikasi" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul id ="unit_air_baku_1_3_6_indikator" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.3.7</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Diameter (D)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_air_baku_1_3_7" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">MM</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.3.8</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kecepatan (V) :</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="unit_air_baku_1_3_8" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">M/dt</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_air_baku_1_3_8_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_air_baku_1_3_8_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.3.9</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kehilangan Tekanan (hf)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="unit_air_baku_1_3_9" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_air_baku_1_3_9_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_air_baku_1_3_9_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.3.10</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Total Head (H=-▲H-hf)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_air_baku_1_3_10" disabled id="unit_air_baku_1_3_10" type="number" value=""
                                   class="form-control" placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_air_baku_1_3_10_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_air_baku_1_3_10_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.3.11</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Sisa tekanan (RH)</td>
                    <td class="p-3">
                        <div class="input-group">
<!--                            <input id="unit_air_baku_1_3_11" type="number" value="" class="form-control"-->
<!--                                   placeholder="">-->
<!--                            <span class="input-group-addon">Meter</span>-->
                            <select id="unit_air_baku_1_3_11" class="form-control select2 tekanan"
                                    data-placeholder="" onchange="">
                                <option value="0">Pilih</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr class = "hidden_1_3_10">
                    <th colspan="5">1.3.12</th>
                </tr>

                <tr class = "hidden_1_3_10">
                    <td class="w-3 p-3 align-middle">Head Pompa (Hp=H-RH)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="unit_air_baku_1_3_12" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr class="hidden_1_3_10">
                    <th colspan="5">1.3.13</th>
                </tr>

                <tr class ="hidden_1_3_10">
                    <td class="w-3 p-3 align-middle">Daya Pompa (Pp)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="unit_air_baku_1_3_13" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Kw</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                </tbody>
            </table>
        </div>


        <!-- page 1 ketentuan teknis C UNIT PRODUKSI-->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">1.4</span>
                                <span class="title">Unit Produksi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
                <th>Verifikasi</th>
<!--                <th>Harga Satuan</th>-->
                <th>Indikator</th>
                </thead>
                <tbody>

                <tr>
                    <th colspan="4">1.4.1</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Prasedimentasi</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_produksi_1_4_1" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Lt/dt</span>
                        </div>

                    </td>
                    <td>
                        <ul id="unit_produksi_1_4_1_verifikasi" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_produksi_1_4_1_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.4.2</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Instalasi Pengolahan Air (IPA)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_produksi_1_4_2" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Lt/dt</span>
                        </div>

                    </td>
                    <td>
                        <ul id="unit_produksi_1_4_2_verifikasi" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul id="unit_produksi_1_4_2_indikator" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.4.3</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Elevasi IPA</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_produksi_1_4_3" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>


                <tr>
                    <th colspan="5">1.4.4</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">SCADA & PLC</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_produksi_1_4_4" type="number" value="" class="form-control" placeholder="">
                            <span class="input-group-addon">Set</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>


                </tbody>
            </table>
        </div>


        <!-- page 1 ketentuan teknis D unit distribusi-->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">1.5</span>
                                <span class="title">Unit Distribusi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
                <th>Verifikasi</th>
<!--                <th>Harga Satuan</th>-->
                <th>Indikator</th>
                </thead>
                <tbody>

                <tr>
                    <th colspan="5">1.5.1</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kapasitas Reservoir</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_distribusi_1_5_1" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">M3</span>
                        </div>

                    </td>
                    <td>
                        <ul id="unit_distribusi_1_5_1_verifikasi" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.5.2</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Elevasi Reservoir</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_distribusi_1_5_2" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.5.2_A</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Beda Tinggi (▲H)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="unit_distribusi_1_5_2A" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul id="unit_distribusi_1_5_2A_verifikasi" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <!--                    <td>-->
                    <!--                        <ul class="parsley-errors-list filled">-->
                    <!--                            <li class="tx-success"></li>-->
                    <!--                        </ul>-->
                    <!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.5.3</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Diameter distribusi maksimum (D)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_distribusi_1_5_3" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">MM</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.5.4</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kecepatan (V) :</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="unit_distribusi_1_5_4" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">M/dt</span>
                        </div>

                    </td>
                    <td>
                        <ul id="unit_distribusi_1_5_4_verifikasi" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.5.5</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Kehilangan Tekanan (hf)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="unit_distribusi_1_5_5" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li id="unit_distribusi_1_5_5_verifikasi" class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li id="unit_distribusi_1_5_5_indikator" class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.5.6</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Pompa Distribusi Centrifugal</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_distribusi_1_5_6" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Lt/dt</span>
                        </div>

                    </td>
                    <td>
                        <ul id="unit_distribusi_1_5_6_verifikasi" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.5.7</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Head Pompa</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_distribusi_1_5_7" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.5.8</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Daya Pompa (Pp)</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="unit_distribusi_1_5_8" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Kw</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                </tbody>
            </table>
        </div>


        <!-- page 1 ketentuan teknis E Unit Pelayanan-->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">1.6</span>
                                <span class="title">Unit Pelayanan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
                <th>Verifikasi</th>
<!--                <th>Harga Satuan</th>-->
                <th>Indikator</th>
                </thead>
                <tbody>

                <tr>
                    <th colspan="4">1.6.1</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Elevasi Daerah pelayanan</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input id="unit_pelayanan_1_6_1" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.6.2</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Jumlah Sambungan Pelanggan</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="unit_pelayanan_1_6_2" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Unit</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>

                <tr>
                    <th colspan="5">1.6.3</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Pipa Retikulasi Ø 50 mm</td>
                    <td class="p-3">
                        <div class="input-group">
                            <input disabled id="unit_pelayanan_1_6_3" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon">Meter</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
<!--                    <td>-->
<!--                        <ul class="parsley-errors-list filled">-->
<!--                            <li class="tx-success"></li>-->
<!--                        </ul>-->
<!--                    </td>-->
                </tr>


                </tbody>
            </table>
        </div>


        <div class=" mg-t-20">
            <h6 class="slim-pagetitle"><b>2.</b> Ketentuan Biaya Pengajuan Air Minum</h6>
        </div>


        <!-- page 2 Ketentuan biaya A Unit Air baku-->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">2.1</span>
                                <span class="title">Unit Air Baku</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
                <th>Verifikasi</th>
                <th>Harga Satuan</th>
                <th>Indikator</th>
                </thead>
                <tbody>
                
                <?php
                for ($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1; $index++) {
                    ?>
                    <tr>
                <tr>
                    <th colspan="5">2.1.<?=$index?></th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">
                            <div class="input-group">
                                <select id="unit_air_baku_2_1_<?= $index?>" onchange="get_ajax_by_id('unit_air_baku_2_1_<?= $index?>_satuan_option', this.value)" class="form-control select2   <?php print_quetion_option(PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1_OPTION, $index, "unit_air_baku"); ?>" data-placeholder="Pilih Jenis">
                                    <option value=""></option>
                                </select>
                            </div></td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="unit_air_baku_2_1_<?=$index?>A" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>
                        <hr>
                        <div class="input-group">
                            <input id="unit_air_baku_2_1_<?=$index?>B" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon unit_air_baku_2_1_<?= $index?>_satuan_option">unit</span>
                        </div>
                    </td>
                    <td>
                        <ul id="unit_air_baku_2_1_<?=$index?>_verifikasi" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul id="unit_air_baku_2_1_<?=$index?>_harga_satuan" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul id="unit_air_baku_2_1_<?=$index?>_indikator" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>
                <?php } ?>


                </tbody>
            </table>
        </div>


        <!-- page 2 Ketentuan biaya B Unit Produksi-->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">2.2</span>
                                <span class="title">Unit Produksi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
                <th>Verifikasi</th>
                <th>Harga Satuan</th>
                <th>Indikator</th>
                </thead>
                <tbody>


                <?php
                for ($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PRODUKSI_2_2; $index++) {
                    ?>
                    <tr>
                <tr>
                    <th colspan="5">2.2.<?=$index?></th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">
                            <div class="input-group">
                                <select onchange="get_ajax_by_id('unit_produksi_2_2_<?= $index?>_satuan_option', this.value)" id="unit_produksi_2_2_<?= $index
                                ?>" class="form-control select2  <?php print_quetion_option(PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4_OPTION, $index, "unit_produksi"); ?>" data-placeholder="Pilih Jenis">
                                    <option value=""></option>
                                </select>
                            </div></td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="unit_produksi_2_2_<?=$index?>A" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>
                        <hr>
                        <div class="input-group">
                            <input id="unit_produksi_2_2_<?=$index?>B" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon unit_produksi_2_2_<?= $index?>_satuan_option">unit</span>
                        </div>
                    </td>
                    <td>
                        <ul id="unit_produksi_2_2_<?=$index?>_verifikasi" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul id="unit_produksi_2_2_<?=$index?>_harga_satuan" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul id="unit_produksi_2_2_<?=$index?>_indikator" class="parsley-errors-list filled">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>
                <?php } ?>
                
                </tbody>
            </table>
        </div>


        <!-- page 2 Ketentuan biaya C Unit Distribusi-->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">2.3</span>
                                <span class="title">Unit Distribusi</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
                <th>Verifikasi</th>
                <th>Harga Satuan</th>
                <th>Indikator</th>
                </thead>
                <tbody>
                <?php
                for ($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3; $index++) {
                    ?>
                    <tr>
                        <th colspan="5">2.3.7.<?= $index
                            ?></th>
                    </tr>

                    <tr>
                        <td class="w-3 p-3 align-middle">

                            <div class="input-group">
                                <select onchange="get_ajax_by_id('unit_distribusi_2_3_<?= $index?>_satuan_option', this.value)" id="unit_distribusi_2_3_<?= $index
                                ?>" class="form-control select2  <?php print_quetion_option(PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3_OPTION, $index, "unit_distribusi"); ?>" data-placeholder="Pilih Jenis">
                                    <option value=""></option>
                                </select>
                            </div>
                        </td>
                        <td class="p-3">
                            <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <input id="unit_distribusi_2_3_<?= $index
                                ?>A" type="number" value="" class="form-control" placeholder="">
                            </div>
                            <hr>
                            <div class="input-group">
                                <input id="unit_distribusi_2_3_<?= $index
                                ?>B" type="number" value="" class="form-control" placeholder="">
                                <span class="input-group-addon unit_distribusi_2_3_<?= $index?>_satuan_option">unit</span>
                            </div>

                        </td>
                        <td>
                            <ul class="parsley-errors-list filled" id="unit_distribusi_2_3_<?= $index
                            ?>_verifikasi">
                                <li class="tx-success"></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="parsley-errors-list filled" id="unit_distribusi_2_3_<?= $index
                            ?>_harga_satuan">
                                <li class="tx-success"></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="parsley-errors-list filled" id="unit_distribusi_2_3_<?= $index
                            ?>_indikator">
                                <li class="tx-success"></li>
                            </ul>
                        </td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>


        <!-- page 2 Ketentuan biaya D Unit Pelayanan-->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">2.4</span>
                                <span class="title">Unit Pelayanan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
                <th>Verifikasi</th>
                <th>Harga Satuan</th>
                <th>Indikator</th>
                </thead>
                <tbody>

                <?php
                for ($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4; $index++) {
                    ?>
                <tr>
                    <th colspan="5">2.4.<?=$index?></th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">
                        <select onchange="get_ajax_by_id('unit_pelayanan_2_4_<?= $index?>_satuan_option', this.value)" id="unit_pelayanan_2_4_<?= $index?>" class="form-control select2  <?php print_quetion_option(PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4_OPTION, $index, "unit_pelayanan"); ?>" data-placeholder="Pilih Jenis">
                            <option value=""></option>
                        </select>
                    </td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="unit_pelayanan_2_4_<?=$index?>A" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>
                        <hr>
                        <div class="input-group">
                            <input id="unit_pelayanan_2_4_<?=$index?>B" type="number" value="" class="form-control"
                                   placeholder="">
                            <span class="input-group-addon unit_pelayanan_2_4_<?= $index?>_satuan_option">unit</span>
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_pelayanan_2_4_<?=$index?>_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_pelayanan_2_4_<?=$index?>_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="unit_pelayanan_2_4_<?=$index?>_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>


        <!-- page 2 Ketentuan biaya E Biaya Non Standar-->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">2.5</span>
                                <span class="title">Biaya Non Standar</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
                <th>Verifikasi</th>
                <th>Harga Satuan</th>
                <th>Indikator</th>
                </thead>
                <tbody>

                <tr>
                    <th colspan="5">2.5.1</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Pekerjaan Interkoneksi</td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="biaya_non_standar_2_5_1" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_1_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_1_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_1_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <th colspan="5">2.5.2</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Pekerjaan Mekanikal & Elektrikal</td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="biaya_non_standar_2_5_2" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_2_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_2_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_2_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <th colspan="5">2.5.3</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Pekerjaan Landscap</td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="biaya_non_standar_2_5_3" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_3_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_3_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_3_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>


                <tr>
                    <th colspan="5">2.5.4</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Pekerjaan Pemulihan site/galian</td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="biaya_non_standar_2_5_4" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_4_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_4_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_4_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>


                <tr>
                    <th colspan="5">2.5.5</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Pekerjaan Lain-lain</td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="biaya_non_standar_2_5_5" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_5_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_5_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_non_standar_2_5_5_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>


                </tbody>
            </table>
        </div>


        <!-- page 2 Ketentuan biaya F Biaya lain-lain-->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">2.6</span>
                                <span class="title">Biaya lain-lain</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
                <th>Verifikasi</th>
                <th>Harga Satuan</th>
                <th>Indikator</th>
                </thead>
                <tbody>

                <tr>
                    <th colspan="5">2.6.1</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Biaya Persiapan & Perizinan</td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="biaya_lain_lain_2_6_1" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_lain_lain_2_6_1_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_lain_lain_2_6_1_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_lain_lain_2_6_1_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <th colspan="5">2.6.2</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Biaya lain-lain</td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="biaya_lain_lain_2_6_2" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_lain_lain_2_6_2_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_lain_lain_2_6_2_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_lain_lain_2_6_2_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <th colspan="5">2.6.3</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Pajak</td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="biaya_lain_lain_2_6_3" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_lain_lain_2_6_3_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_lain_lain_2_6_3_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="biaya_lain_lain_2_6_3_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>


                </tbody>
            </table>
        </div>


        <!-- page 2 Ketentuan biaya G Harga rata-rata-->
        <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
            <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                <div class="steps clearfix">
                    <ul role="tablist">
                        <li role="tab" class="first current" aria="false" aria-selected="true">
                            <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                <span class="number">2.7</span>
                                <span class="title">Harga rata-rata</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="mg-b-20 mg-sm-b-40">
                <!--It can be filled with description-->
            </p>
            <table class="table table-reference mg-b-25">
                <thead>
                <th >Deskripsi</th>
                <th style="min-width: 250px;">Satuan dan Input</th>
                <th>Verifikasi</th>
                <th>Harga Satuan</th>
                <th>Indikator</th>
                </thead>
                <tbody>

                <tr>
                    <th colspan="5">2.7.1</th>
                </tr>

                <tr>
                    <td class="w-3 p-3 align-middle">Total Investasi</td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input disabled id="total_investasi" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="total_investasi_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="total_investasi_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="total_investasi_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <th colspan="5">2.7.2</th>
                </tr>

                <tr>
                    <td class="w-25 p-3 align-middle" rowspan="2">Harga Rata-rata</td>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp/Lt/dt</span>
                            <input disabled id="harga_rata_rata_A" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="harga_rata_rata_A_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="harga_rata_rata_A_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="harga_rata_rata_A_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="p-3">
                        <div class="input-group">
                            <span class="input-group-addon">Rp/SR</span>
                            <input disabled id="harga_rata_rata_B" type="number" value="" class="form-control"
                                   placeholder="">
                        </div>

                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="harga_rata_rata_B_verifikasi">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="harga_rata_rata_B_harga_satuan">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                    <td>
                        <ul class="parsley-errors-list filled" id="harga_rata_rata_B_indikator">
                            <li class="tx-success"></li>
                        </ul>
                    </td>
                </tr>


                </tbody>
            </table>
        </div>

        <div class="section-wrapper mg-t-20" style="overflow-x:auto;" id="div_simpan">
            </table>
            <div class="form-layout">
                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0 kalulator" onclick="kalkulasi();">Hitung</button>
                    <?php if ($id_proposal > 0) { ?>
                        <?php if (is_user()) { ?>
                            <button class="btn btn-primary bd-0" onclick="update();">Update</button>
                        <?php } ?>
                    <?php } else { ?>
                        <button class="btn btn-primary bd-0" onclick="submit();">Simpan</button>

                    <?php } ?>
                    <button class="btn btn-secondary bd-0"
                            onclick="window.location.href='<?= base_url('user/list') ?>'">Batalkan
                    </button>
                </div>
                <!-- form-layout-footer -->
            </div>
            <!-- form-layout -->
        </div>

    </div>
    <!-- container -->
</div>
<!-- slim-mainpanel -->
