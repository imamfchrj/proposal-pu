<?php

$id="";
$name="";
$email="";
$hp="";
$password="";
$c_password="";
$status="";

// this for update
if( isset( $option["form_value"] ) ) { 
  $id=$option["form_value"]->id;
  $name=$option["form_value"]->name;
  $email=$option["form_value"]->email;
  $hp=$option["form_value"]->hp;
  $status=$option["form_value"]->status;
} 

$title_page = $option["title_page"];
$description_page = $option["description_page"];

?>
    <div class="slim-mainpanel">
        <div class="container">
            <div class="slim-pageheader">
                <ol class="breadcrumb slim-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pengajuan Air Minum</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?=$title_page?>
                    </li>
                </ol>
                <h6 class="slim-pagetitle"><b>1.</b> Ketentuan Teknis Pengajuan Air Minum</h6>
            </div>
            <!-- slim-pageheader -->

            <!-- page 1 ketentuan teknis A pelayanan -->
            <div class="section-wrapper" style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">A</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Jumlah Penduduk Administrasi</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Jiwa</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle" rowspan="2">Target Cakupan Pelayanan (%)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">%</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>

                        </tr>

                        <tr>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Jiwa</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Rata-rata anggota Keluarga</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Jiwa/KK</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Target Sambungan</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Unit</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Konsumsi Pemakaian Air</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Lt/Jiwa/Hari</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Konsumsi air domestik (Od)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Lt/det</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle" rowspan="2">Konsumsi air non domestik (Od)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">%</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Lt/dt</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Kebutuhan air total (Q = Qd + Qnd)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Lt/dt</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle" rowspan="2">Non Revenue Water (NRW)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Lt/dt</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">%</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">3</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Kebutuhan Rata-rata (Qr)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Liter/dt</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Kapasitas Produksi (Qmax.= 1,2Qr)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Liter/dt</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Kebutuhan Puncak (Qp : 1,75Qr )</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Liter/dt</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- page 1 ketentuan teknis B unit air baku-->
            <div class="section-wrapper mg-t-20"  style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">B</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Debit Air Baku (Qab = 1,1 x Qmax)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Liter/dt</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Jenis Sumber</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Text</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">3</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Kekeruhan Maximum</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">NTU</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">4</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Elevasi Sumber Air </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">5</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Panjang pipa Transmisi</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">6</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Beda Tinggi (▲H)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">7</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Diameter (D) </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">MM</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">8</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Kecepatan (V) :</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">M/dt</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">9</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Kehilangan Tekanan (hf)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">10</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Total Head (H=▲H+hf)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">11</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Sisa tekanan (RH)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">12</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Head Pompa (Hp=H+RH)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">13</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Daya Pompa (Pp)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Kw</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>



            <!-- page 1 ketentuan teknis C UNIT PRODUKSI-->
            <div class="section-wrapper mg-t-20"  style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">C</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Prasedimentasi</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Lt/dt</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Instalasi Pengolahan Air (IPA)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Lt/dt</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">3</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Elevasi IPA</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">4</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">SCADA & PLC</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Set</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>


            <!-- page 1 ketentuan teknis D unit distribusi-->
            <div class="section-wrapper mg-t-20"  style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">D</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Kapasitas Reservoir</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">M3</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Elevasi Reservoir</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">3</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Diameter distribusi maksimum (D) </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">MM</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">4</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Kecepatan (V) :</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">M/dt</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">5</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Kehilangan Tekanan (hf)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">6</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pompa Distribusi Centrifugal</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Lt/dt</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">7</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Head Pompa  </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">8</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Daya Pompa (Pp)</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Kw</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>



            <!-- page 1 ketentuan teknis E Unit Pelayanan-->
            <div class="section-wrapper mg-t-20"  style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">D</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Elevasi Daerah pelayanan</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Jumlah Sambungan Pelanggan</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Unit</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">3</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pipa Retikulasi Ø 50 mm</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Meter</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>


            <div class=" mg-t-20">
                <h6 class="slim-pagetitle"><b>2.</b> Ketentuan Biaya Pengajuan Air Minum</h6>
            </div>


            <!-- page 2 Ketentuan biaya A Unit Air baku-->
            <div class="section-wrapper mg-t-20"  style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">A</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Bangunan Intake </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pompa Intake</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">3</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pipa Transmisi </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">4</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Rumah Pompa </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                         
                    </tbody>
                </table>
            </div>



            <!-- page 2 Ketentuan biaya B Unit Produksi-->
            <div class="section-wrapper mg-t-20"  style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">B</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Prasedimentasi </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Instalasi Pengolahan Air (IPA) </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">3</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">SCADA & PLC</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">4</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Rumah Pompa ……….. m2</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">5</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Ruang Dosing & Gudang ………. m2</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">6</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Kantor …….. m2</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">7</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Rumah Penjaga ……….. m2</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                         
                    </tbody>
                </table>
            </div>



            <!-- page 2 Ketentuan biaya C Unit Distribusi-->
            <div class="section-wrapper mg-t-20"  style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">C</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Reservoir 1500 M3- 2 unit</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pompa Centrifugal Q : ….. Lt/dt, H: …... m</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">3</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Rumah Pompa </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">4</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Rumah Genset </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">5</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Bangunan Workshop </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">6</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Rumah Jaga </td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">7</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pipa HDPE Ø 700 mm - 8555m</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>




                        <tr>
                            <th colspan="5">8</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pipa HDPE Ø 630 mm - 10913 m</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">9</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pipa HDPE Ø 600 mm - 7800 m</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>



                        <tr>
                            <th colspan="5">10</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pekerjaan HDD 1690 m</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                         
                    </tbody>
                </table>
            </div>


            <!-- page 2 Ketentuan biaya D Unit Pelayanan-->
            <div class="section-wrapper mg-t-20"  style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">D</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pipa Retikulasi HDPE Ø 75 mm -…..m</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pipa Retikulasi HDPE Ø 50 mm - ……m</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">3</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Sambungan Rumah - …. unit</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                         
                    </tbody>
                </table>
            </div>



            <!-- page 2 Ketentuan biaya E Biaya Non Standar-->
            <div class="section-wrapper mg-t-20"  style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">E</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pekerjaan Interkoneksi</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pekerjaan Mekanikal & Elektrikal</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">3</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pekerjaan Landscap</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">4</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pekerjaan Pemulihan site/galian</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                        <tr>
                            <th colspan="5">5</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pekerjaan Lain-lain</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                         
                    </tbody>
                </table>
            </div>


            <!-- page 2 Ketentuan biaya F Biaya lain-lain-->
            <div class="section-wrapper mg-t-20"  style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">F</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Biaya Persiapan & Perizinan</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Pajak</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                         
                    </tbody>
                </table>
            </div>


            <!-- page 2 Ketentuan biaya G Harga rata-rata-->
            <div class="section-wrapper mg-t-20"  style="overflow-x:auto;">
                <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    <div class="steps clearfix">
                        <ul role="tablist">
                            <li role="tab" class="first current" aria="false" aria-selected="true">
                                <a id="wizard6-t-0" href="#wizard6-h-0" aria-controls="wizard6-p-0">
                                    <span class="number">G</span>
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
                        <th>Deskripsi</th>
                        <th style="min-width: 250px;">Satuan dan Input</th>
                        <th>Verifikasi</th>
                        <th>Harga Satuan</th>
                        <th>Indikator</th>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="5">1</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle">Total Investasi</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp</span>
                                    <input id="tesid" type="number" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">2</th>
                        </tr>

                        <tr>
                            <td class="w-25 p-3 align-middle" rowspan="2">Harga Rata-rata</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp/Lt/dt</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp/SR</span>
                                    <input id="tesid" type="text" class="form-control" name="tesid" placeholder="">
                                </div>

                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                            <td>
                                <ul class="parsley-errors-list filled" id="tesid">
                                    <li class="tx-success"></li>
                                </ul>
                            </td>
                        </tr>


                         
                    </tbody>
                </table>
            </div>

            <div class="section-wrapper mg-t-20" style="overflow-x:auto;">
                </table>
                <div class="form-layout">
                    <div class="form-layout-footer">
                        <button class="btn btn-primary bd-0" id="insert_user" onclick="insert();">Simpan </button>
                        <button class="btn btn-secondary bd-0" onclick="window.location.href='<?=base_url('user/list')?>'">Batalkan</button>
                    </div>
                    <!-- form-layout-footer -->
                </div>
                <!-- form-layout -->
            </div>

        </div>
        <!-- container -->
    </div>
    <!-- slim-mainpanel -->