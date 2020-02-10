

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
                                        if($proposal_data->status == 1) {
                                            echo "Sudah di approv";
                                        }elseif($proposal_data->status == 2) {
                                            echo "Direturn";
                                        }else {
                                            echo "Butuh approval";
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
                        <button class="btn detail btn-info bd-0" onclick="window.location='<?=base_url('airminum/insert/'.$proposal_data->id)?>';">Detail Selengkapnya</button>
                        <?php if(is_admin()) {?>
                        <button class="btn detail btn-success bd-0" onclick="approv(1);">Setujui</button>
                        <button class="btn detail btn-warning bd-0" onclick="approv(2);">Return</button>
                        <?php } ?>
                    </div>
                    <!-- form-layout-footer -->
                </div>
                <!-- form-layout -->
            </div>
        </div><!-- section-wrapper -->

        
        <div class="section-wrapper mg-t-20">
          <label class="section-title">Kesimpulan</label>
          <p class="mg-b-20 mg-sm-b-40">Kesimpulan kewajaran dari komponen biaya</p>

          <div class="row">
            <div class="col-xl-12">
              <div class="bd pd-20"><div id="flotPie1" class="ht-200 ht-sm-300"></div></div>
            </div><!-- col-6 -->
            <hr>
            <div class="col-md-6 pd-20">
                <div class="table-responsive">
                    <table class="table table-bordered">
                    <thead class="thead-colored bg-danger">
                        <tr>
                        <th class="wd-35p">Item</th>
                        <th class="wd-35p">Harga</th>
                        <th class="wd-20p">Verifikasi</th>
                        </tr>
                    </thead>
                    <tbody id="justifikasi">
                    </tbody>
                    </table>
                </div>
            </div><!-- col-6 -->
            <div class="col-md-6 pd-20">
                <div class="table-responsive">
                    <table class="table table-bordered">
                    <thead class="thead-colored bg-info">
                        <tr>
                        <th class="wd-35p">Item</th>
                        <th class="wd-35p">Harga</th>
                        <th class="wd-20p">Verifikasi</th>
                        </tr>
                    </thead>
                    <tbody id="wajar">
                    </tbody>
                    </table>
                </div>
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
