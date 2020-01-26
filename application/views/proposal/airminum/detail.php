

    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Proposal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
          </ol>
          <h6 class="slim-pagetitle">Proposal Detail</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Evaluasi Infrastruktur Spam Durolis</label>
          <p class="mg-b-20 mg-sm-b-40"></p>
          <div id="wizard6" role="application" class="wizard wizard-style-2 clearfix">
                    
                <p class="mg-b-20 mg-sm-b-40">
                    <!--It can be filled with description-->
                </p>
                <table class="table table-reference mg-b-25">
                    <tbody>
                        <tr>
                            <td class="w-25 p-3 align-middle">Provinsi</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <?=$proposal_data->prov_name?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-25 p-3 align-middle">Proposal Status</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <?=$proposal_data->proposal_status?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-25 p-3 align-middle">User Request</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <?=$proposal_data->user_name?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-25 p-3 align-middle">Status</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <?php
                                        if($proposal_data->status == 0) {
                                            echo "Butuh approval";
                                        }else {
                                            echo "Sudah di approv";
                                        }
                                    ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-25 p-3 align-middle">Approv oleh</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <?=$proposal_data->approval_name?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-25 p-3 align-middle">Tanggal Request</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <?=$proposal_data->created_at?>
                                </div>
                            </td>
                        </tr>
                        <?php
                        if(isset($selected_data["total_investasi"])){
                        ?>
                        <tr>
                            <td class="w-25 p-3 align-middle">Total Investasi</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <?=$selected_data["total_investasi"]?>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php
                        if(isset($selected_data["harga_rata_rata_A"])){
                        ?>
                        <tr>
                            <td class="w-25 p-3 align-middle">Harga rata-rata</td>
                            <td class="p-3">
                                <div class="input-group">
                                    <?=$selected_data["harga_rata_rata_A"]?>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
            <div class="section-wrapper mg-t-20" style="overflow-x:auto;" id="div_simpan">
                </table>
                <div class="form-layout">
                    <div class="form-layout-footer">
                        <?php
                            // window.location='<?=base_url('airminum/edit/1')
                        ?>
                        <button class="btn btn-info bd-0" onclick="';">Detail Selengkapnya</button>
                        <button class="btn btn-success bd-0" onclick="window.location='';">Setujui</button>
                        <button class="btn btn-warning bd-0" onclick="window.location='';">Tolak</button>
                    </div>
                    <!-- form-layout-footer -->
                </div>
                <!-- form-layout -->
            </div>
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
