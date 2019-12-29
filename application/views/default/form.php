
    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Form Elements</li>
          </ol>
          <h6 class="slim-pagetitle">Form Elements</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">
          <label class="section-title">Basic Form Input</label>
          <p class="mg-b-20 mg-sm-b-40">A basic form control with disabled and readonly mode.</p>

          <div class="row">
            <div class="col-lg">
              <input class="form-control" placeholder="Input box" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <input class="form-control" placeholder="Input box (readonly)" readonly="" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <input class="form-control" placeholder="Input box (disabled)" disabled="" type="text">
            </div><!-- col -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-lg">
              <textarea rows="3" class="form-control" placeholder="Textarea"></textarea>
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <textarea rows="3" class="form-control" placeholder="Textarea (readonly)" readonly></textarea>
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <textarea rows="3" class="form-control" placeholder="Texarea (disabled)" disabled></textarea>
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Valid State Input</label>
          <p class="mg-b-20 mg-sm-b-40">A form control with success, warning and error state.</p>

          <div class="row">
            <div class="col-lg">
              <div class="form-group has-success mg-b-0">
                <input class="form-control is-valid" placeholder="Input box (success state)" type="text">
                <textarea rows="3" class="form-control is-valid mg-t-20" placeholder="Textarea (success state)"></textarea>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-lg mg-t-20 mg-lg-t-0">
              <div class="form-group has-warning mg-b-0">
                <input class="form-control is-warning" placeholder="Input box (warning state)" type="text">
                <textarea rows="3" class="form-control is-warning mg-t-20" placeholder="Textarea (warning state)"></textarea>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-lg mg-t-20 mg-lg-t-0">
              <div class="form-group has-danger mg-b-0">
                <input class="form-control is-invalid" placeholder="Input box (danger state)" type="text">
                <textarea rows="3" class="form-control is-invalid mg-t-20" placeholder="Textarea (danger state)"></textarea>
              </div><!-- form-group -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Custom Checkboxes &amp; Radios</label>
          <p class="mg-b-20 mg-sm-b-40">A custom styled checkboxes and radios.</p>

          <div class="row">
            <div class="col-lg-3">
              <label class="ckbox">
                <input type="checkbox"><span>Checkbox Unchecked</span>
              </label>
            </div><!-- col-3 -->
            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
              <label class="ckbox">
                <input type="checkbox" checked><span>Checkbox Checked</span>
              </label>
            </div><!-- col-3 -->
            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
              <label class="ckbox">
                <input type="checkbox" disabled><span>Checkbox Disabled</span>
              </label>
            </div><!-- col-3 -->
          </div><!-- row -->

          <div class="row mg-t-10">
            <div class="col-lg-3">
              <label class="rdiobox">
                <input name="rdio" type="radio">
                <span>Radio Unchecked</span>
              </label>
            </div><!-- col-3 -->
            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
              <label class="rdiobox">
                <input name="rdio" type="radio" checked>
                <span>Radio Checked</span>
              </label>
            </div><!-- col-3 -->
            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
              <label class="rdiobox">
                <input name="rdio" type="radio" disabled>
                <span>Radio Disabled</span>
              </label>
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Active State Color Variant</label>
          <p class="mg-b-20 mg-sm-b-40">A custom styled checkboxes and radios with colored active state.</p>

          <div class="row">
            <div class="col-lg-3">
              <label class="ckbox">
                <input type="checkbox" checked><span>Checkbox Primary (default)</span>
              </label>

              <label class="ckbox ckbox-success mg-t-15">
                <input type="checkbox" checked><span>Checkbox Success</span>
              </label>

              <label class="ckbox ckbox-pink mg-t-15">
                <input type="checkbox" checked><span>Checkbox Indigo</span>
              </label>
            </div><!-- col-3 -->
            <div class="col-lg-3">
              <label class="rdiobox">
                <input type="radio" checked><span>Radio Primary (default)</span>
              </label>

              <label class="rdiobox rdiobox-success mg-t-15">
                <input type="radio" checked><span>Radio Success</span>
              </label>

              <label class="rdiobox rdiobox-pink mg-t-15">
                <input type="radio" checked><span>Radio Indigo</span>
              </label>
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">File Browser</label>
          <p class="mg-b-20 mg-sm-b-40">A custom styled file browser.</p>

          <div class="row">
            <div class="col-lg-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div><!-- custom-file -->
            </div><!-- col -->
            <div class="col-lg-3 mg-t-40 mg-lg-t-0">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile2">
                <label class="custom-file-label custom-file-label-primary" for="customFile">Choose file</label>
              </div><!-- custom-file -->
            </div><!-- col -->
            <div class="col-lg-3 mg-t-40 mg-lg-t-0">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile3">
                <label class="custom-file-label custom-file-label-inverse" for="customFile">Choose file</label>
              </div><!-- custom-file -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Toggle Switches</label>
          <p class="mg-b-20 mg-sm-b-40">A lightweight jQuery plugin that creates easily-styleable toggle buttons.</p>

          <div class="toggle-wrapper">
            <div class="toggle toggle-light"></div>
          </div>
          <div class="toggle-wrapper">
            <div class="toggle toggle-light primary"></div>
          </div>
          <div class="toggle-wrapper">
            <div class="toggle toggle-light success"></div>
          </div>
          <div class="toggle-wrapper">
            <div class="toggle toggle-light warning"></div>
          </div>
          <div class="toggle-wrapper">
            <div class="toggle toggle-light danger"></div>
          </div>
          <div class="toggle-wrapper">
            <div class="toggle toggle-light info"></div>
          </div>

          <div class="toggle-wrapper">
            <div class="toggle toggle-light indigo"></div>
          </div>

          <div class="mg-t-20"></div>

          <div class="toggle-wrapper">
            <div class="toggle toggle-modern"></div>
          </div>

          <div class="toggle-wrapper">
            <div class="toggle toggle-modern primary"></div>
          </div>

          <div class="toggle-wrapper">
            <div class="toggle toggle-modern success"></div>
          </div>

          <div class="toggle-wrapper">
            <div class="toggle toggle-modern warning"></div>
          </div>

          <div class="toggle-wrapper">
            <div class="toggle toggle-modern danger"></div>
          </div>

          <div class="toggle-wrapper">
            <div class="toggle toggle-modern info"></div>
          </div>

          <div class="toggle-wrapper">
            <div class="toggle toggle-modern indigo"></div>
          </div>

          <p class="section-label mg-t-40">Class Reference</p>
          <table class="table table-reference">
            <thead>
              <tr>
                <th class="wd-40p">Class</th>
                <th class="wd-60p">Values</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><code class="pd-0 bg-transparent">class="toggle toggle-light [value]"</code></td>
                <td rowspan="2">primary | success | warning | danger | info | teal | indigo | purple | pink | orange</td>
              </tr>
              <tr>
                <td><code class="pd-0 bg-transparent">class="toggle toggle-modern [value]"</code></td>
              </tr>
            </tbody>
          </table>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Input Groups</label>
          <p class="mg-b-20 mg-sm-b-40">Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs.</p>

          <div class="row">
            <div class="col-lg-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="icon ion-person tx-16 lh-0 op-6"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Username">
              </div><!-- input-group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Recipient's username">
                <div class="input-group-append">
                  <span class="input-group-text">@ex.com</span>
                </div>
              </div><!-- input-group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control">
                <div class="input-group-append">
                  <span class="input-group-text">.00</span>
                </div>
              </div><!-- input-group -->
            </div><!-- col-sm-4 -->
          </div><!-- row -->

          <div class="row pd-t-20">
            <div class="col-lg-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <label class="ckbox wd-16 mg-b-0">
                      <input type="checkbox"><span></span>
                    </label>
                  </div>
                </div>
                <input type="text" class="form-control" placeholder="Text input with checkbox">
              </div><!-- input-group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <label class="rdiobox wd-16 mg-b-0">
                      <input type="radio"><span></span>
                    </label>
                  </div>
                </div>
                <input type="text" class="form-control" placeholder="Text input with radiobox">
              </div><!-- input-group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn bd bd-l-0 bg-white tx-gray-600" type="button"><i class="fa fa-search"></i></button>
                </span>
              </div><!-- input-group -->
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Input Mask</label>
          <p class="mg-b-20 mg-sm-b-40">Input masks allows a user to more easily enter fixed width input where you would like them to enter the data in a certain format (dates,phones, etc).</p>

          <div class="row">
            <div class="col-lg-4">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                  </div>
                </div>
                <input id="dateMask" type="text" class="form-control" placeholder="MM/DD/YYYY">
              </div><!-- input-group -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-phone tx-16 lh-0 op-6"></i>
                  </div>
                </div><!-- input-group-prepend -->
                <input id="phoneMask" type="text" class="form-control" placeholder="(999) 999-9999">
              </div><!-- input-group -->
            </div>
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-plus tx-16 lh-0 op-6"></i>
                  </div><!-- input-group-text -->
                </div><!-- input-group-prepend -->
                <input id="ssnMask" type="text" class="form-control" placeholder="999-99-9999">
              </div>
            </div>
          </div><!-- row -->
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Input Tags</label>
          <p class="mg-b-20 mg-sm-b-40">User interface for managing tags.</p>

          <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput">
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Time Picker</label>
          <p class="mg-b-20 mg-sm-b-40">Easily select a time for a text input using your mouse or keyboards arrow keys.</p>

          <label>Default Time Picker:</label>
          <div class="wd-150 mg-b-30">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                </div>
              </div><!-- input-group-prepend -->
              <input id="tpBasic" type="text" class="form-control" placeholder="Set time">
            </div>
          </div><!-- wd-150 -->

          <label>Set the scroll position to local time if no value selected:</label>
          <div class="wd-150 mg-b-30">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                </div><!-- input-group-text -->
              </div><!-- input-group-prepend -->
              <input id="tp2" type="text" class="form-control" placeholder="Set time">
            </div>
          </div><!-- wd-150 -->

          <label>Dynamically set the time using a Javascript Date object:</label>
          <div class="d-flex">
            <div class="input-group wd-150">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-clock-o tx-16 lh-0 op-6"></i>
                </div><!-- input-group-text -->
              </div><!-- input-group-prepend -->
              <input id="tp3" type="text" class="form-control" placeholder="Set time">
            </div><!-- input-group -->
            <button id="setTimeButton" class="btn btn-primary mg-l-10">Set Current Time</button>
          </div>
        </div><!-- section-wrapper -->

        <div class="section-wrapper mg-t-20">
          <label class="section-title">Color Picker</label>
          <p class="mg-b-20 mg-sm-b-40">A simple component to select color in the same way you select color in Adobe Photoshop.</p>

          <input type="text" id="colorpicker">

          <p class="mg-t-40 mg-b-10">You can allow alpha transparency selection. Check out these example.</p>
          <input type="text" id="showAlpha">

          <p class="mg-t-40 mg-b-10">Show pallete only. If you'd like, spectrum can show the palettes you specify, and nothing else.</p>
          <input type="text" id="showPaletteOnly">
        </div><!-- section-wrapper -->


      </div><!-- container -->
    </div><!-- slim-mainpanel -->