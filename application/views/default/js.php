
    <script src="<?=base_url("assets/")?>lib/jquery/js/jquery.js"></script>
    <script src="<?=base_url("assets/")?>lib/popper.js/js/popper.js"></script>
    <script src="<?=base_url("assets/")?>lib/bootstrap/js/bootstrap.js"></script>
    <script src="<?=base_url("assets/")?>lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="<?=base_url("assets/")?>lib/jquery-toggles/js/toggles.min.js"></script>
    <script src="<?=base_url("assets/")?>lib/jt.timepicker/js/jquery.timepicker.js"></script>
    <script src="<?=base_url("assets/")?>lib/spectrum/js/spectrum.js"></script>
    <script src="<?=base_url("assets/")?>lib/jquery.maskedinput/js/jquery.maskedinput.js"></script>
    <script src="<?=base_url("assets/")?>lib/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>

    <script src="<?=base_url("assets/")?>js/slim.js"></script>
    <script src="<?=base_url("assets/")?>js/common.js"></script>
    <script>
      $(function(){
        'use strict'

        // Toggles
        $('.toggle').toggles({
          on: true,
          height: 26
        });

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#ssnMask').mask('999-99-9999');

        // Time Picker
        $('#tpBasic').timepicker();
        $('#tp2').timepicker({'scrollDefault': 'now'});
        $('#tp3').timepicker();

        $('#setTimeButton').on('click', function (){
          $('#tp3').timepicker('setTime', new Date());
        });

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

      });

      function alert_success($title, $description, $link=""){
        $('.title_success').html($title);
        $('.description_success').html($description);
        $('.link_success').attr("href",$link);
        if(!$link) {
          $('.link_success').html("");
        }
        
        $('#alert_success').modal('show');
      }

      function alert_failed($title, $description, $link=""){
        $('.title_failed').html($title);
        $('.description_failed').html($description);
        $('.link_failed').html($link);
        
        $('#alert_failed').modal('show');
      }
    </script>


<?php
 if($script) $this->load->view($script);
?>
