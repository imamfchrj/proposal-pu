
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">Insert</li>
          </ol>
          <h6 class="slim-pagetitle">Insert User</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Form Insert User</label>
          <p class="mg-b-20 mg-sm-b-40">Berhati-hatilah untuk menambahkan user baru. Pastikan password yang digunakan tidak mudah untuk di tebak.</p>

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Nama: </label>
                  <input class="form-control" type="text" id="name" name="name" value="" placeholder="Masukkan nama">
                  <span id="e_name" class="tx-danger"></span>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Alamat Email: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="email" id="email" name="email" value="" placeholder="Masukkan email">
                  <span id="e_email" class="tx-danger"></span>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">No Handphone: </label>
                  <input class="form-control" type="text" id="hp" name="hp" value="" placeholder="Masukkan no handphone">
                  <span id="e_hp" class="tx-danger"></span>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="password" id="password" name="password" value="" placeholder="Masukkan password">
                  <span id="e_password" class="tx-danger"></span>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Konfirmasi Password: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="password" id="c_password" name="c_password" value="" placeholder="Masukkan konfirmasi password">
                  <span id="e_c_password" class="tx-danger"></span>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Status: <span class="tx-danger">*</span></label>
                  <div id="status" class="parsley-checkbox wd-250 mg-b-0">
                    <label class="ckbox">
                        <input type="checkbox" id="status" name="status" value="" data-parsley-mincheck="2" data-parsley-class-handler="#status" data-parsley-multiple="browser"><span>Aktif</span>
                        <span id="e_status" class="tx-danger"></span>
                    </label>
                  </div>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-primary bd-0" id="insert_user" onclick="insert();">Simpan </button>
              <button class="btn btn-secondary bd-0">Batalkan</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div>

      </div><!-- container -->
    </div><!-- slim-mainpanel -->
