
    <?php
        $this->load->view("default/form_js");
        $this->load->view("user/check_user_js");
        $link = $option["link"];
    ?>

<link href="<?=base_url("assets")?>/lib/jquery.steps/css/jquery.steps.css" rel="stylesheet">

    <script>
      function insert() {
        $status = checkFormUser();
        if(!$status) {
            return;
        }
        
        $('#insert_user').attr('disabled', true);
        $.ajax({
            url: ROOT+'airminumajax/<?=$link?>',
            dataType: 'json',
            type: 'post',
            data: {
                id: $('#id').val(),
                name: $('#name').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                c_password: $('#c_password').val(),
                hp: $('#hp').val(),
                status: $('#status:checked').val(),
            }
        })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                
                alert_success("Sukses!", "Berhasil menambahkan user baru", ROOT + "/user/list");
                
            })
            .complete(function(){
              $('#insert_user').attr('disabled', false);
            })
            .fail(function(data){
                if(data.responseJSON.error_messages !== 'undefined'){
                    alert_failed("Error!", data.responseJSON.error_messages);
                    return;
                }
                alert_failed("Error!", "Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
            });
      }
    </script>

    <script>
        $( document ).ready(function() {
            $( "#submit" ).submit(function( event ) {
                kalkulasi();
            });
        });
        

        function jenis_spam() {
            $val_jenis_spam = $("#jenis_spam").val();
            if($val_jenis_spam == "Eksisting") {
                $("#container_jenis_spam_1").show();
                return;
            }
            clear_jenis_spam();
            $("#container_jenis_spam_1").hide();
        }
        function clear_jenis_spam() {
            $("#jenis_spam_1_1_1").val("0");
            $("#jenis_spam_1_1_2").val("0");
            $("#jenis_spam_1_1_3").val("0");
            $("#jenis_spam_1_1_4A").val("0");
            $("#jenis_spam_1_1_4B").val("0");
            $("#jenis_spam_1_1_5").val("0");
            $("#jenis_spam_1_1_6").val("0");
        }

        function kalkulasi() {
            $('.kalulator').attr('disabled', true);
            $.ajax({
                url: ROOT+'airminumajax/cek',
                dataType: 'json',
                type: 'post',
                data: {
                    "prov_id": $(".provinsi").val(),
                    "jenis_spam": $("#jenis_spam").val(),
                    "jenis_spam_1_1_1": $("#jenis_spam_1_1_1").val(),
                    "jenis_spam_1_1_2": $("#jenis_spam_1_1_2").val(),
                    "jenis_spam_1_1_4A": $("#jenis_spam_1_1_4A").val(),
                    "jenis_spam_1_1_5": $("#jenis_spam_1_1_5").val(),

                    "pelayanan_1_2_1A": $("#pelayanan_1_2_1A").val(),
                    "pelayanan_1_2_1B": $("#pelayanan_1_2_1B").val(),
                    "pelayanan_1_2_1D": $("#pelayanan_1_2_1D").val(),
                    "pelayanan_1_2_2C": $("#pelayanan_1_2_2C").val(),
                    "pelayanan_1_2_2E": $("#pelayanan_1_2_2E").val(),
                    "pelayanan_1_2_2H": $("#pelayanan_1_2_2H").val(),
                    "pelayanan_1_2_2I": $("#pelayanan_1_2_2I").val(),
                    
                    "unit_air_baku_1_3_1": $("#unit_air_baku_1_3_1").val(),
                    // text
                    "unit_air_baku_1_3_2": $("#unit_air_baku_1_3_2").val(),
                    "unit_air_baku_1_3_3": $("#unit_air_baku_1_3_3").val(),
                    "unit_air_baku_1_3_4": $("#unit_air_baku_1_3_4").val(),
                    "unit_air_baku_1_3_5": $("#unit_air_baku_1_3_5").val(),
                    "unit_air_baku_1_3_7": $("#unit_air_baku_1_3_7").val(),
                    "unit_air_baku_1_3_8": $("#unit_air_baku_1_3_8").val(),
                    "unit_air_baku_1_3_11": $("#unit_air_baku_1_3_11").val(),

                    "unit_produksi_1_4_1": $("#unit_produksi_1_4_1").val(),
                    "unit_produksi_1_4_2": $("#unit_produksi_1_4_2").val(),
                    "unit_produksi_1_4_3": $("#unit_produksi_1_4_3").val(),
                    "unit_produksi_1_4_4": $("#unit_produksi_1_4_4").val(),

                    "unit_distribusi_1_5_1": $("#unit_distribusi_1_5_1").val(),
                    "unit_distribusi_1_5_2": $("#unit_distribusi_1_5_2").val(),
                    "unit_distribusi_1_5_3": $("#unit_distribusi_1_5_3").val(),
                    "unit_distribusi_1_5_6": $("#unit_distribusi_1_5_6").val(),
                    "unit_distribusi_1_5_7": $("#unit_distribusi_1_5_7").val(),
                    "unit_distribusi_1_5_8": $("#unit_distribusi_1_5_8").val(),

                    "unit_pelayanan_1_6_1": $("#unit_pelayanan_1_6_1").val(),

                    "unit_air_baku_2_1_1A": $("#unit_air_baku_2_1_1A").val(),
                    "unit_air_baku_2_1_1B": $("#unit_air_baku_2_1_1B").val(),
                    "unit_air_baku_2_1_2A": $("#unit_air_baku_2_1_2A").val(),
                    "unit_air_baku_2_1_2B": $("#unit_air_baku_2_1_2B").val(),
                    "unit_air_baku_2_1_3A": $("#unit_air_baku_2_1_3A").val(),
                    "unit_air_baku_2_1_3B": $("#unit_air_baku_2_1_3B").val(),
                    "unit_air_baku_2_1_4A": $("#unit_air_baku_2_1_4A").val(),
                    "unit_air_baku_2_1_4B": $("#unit_air_baku_2_1_4B").val(),

                    "unit_produksi_2_2_1A": $("#unit_produksi_2_2_1A").val(),
                    "unit_produksi_2_2_1B": $("#unit_produksi_2_2_1B").val(),
                    "unit_produksi_2_2_2A": $("#unit_produksi_2_2_2A").val(),
                    "unit_produksi_2_2_2B": $("#unit_produksi_2_2_2B").val(),
                    "unit_produksi_2_2_3A": $("#unit_produksi_2_2_3A").val(),
                    "unit_produksi_2_2_3B": $("#unit_produksi_2_2_3B").val(),
                    "unit_produksi_2_2_4A": $("#unit_produksi_2_2_4A").val(),
                    "unit_produksi_2_2_4B": $("#unit_produksi_2_2_4B").val(),
                    "unit_produksi_2_2_5A": $("#unit_produksi_2_2_5A").val(),
                    "unit_produksi_2_2_5B": $("#unit_produksi_2_2_5B").val(),
                    "unit_produksi_2_2_6A": $("#unit_produksi_2_2_6A").val(),
                    "unit_produksi_2_2_6B": $("#unit_produksi_2_2_6B").val(),
                    "unit_produksi_2_2_7A": $("#unit_produksi_2_2_7A").val(),
                    "unit_produksi_2_2_7B": $("#unit_produksi_2_2_7B").val(),


                    "unit_distribusi_2_3_1": $("#unit_distribusi_2_3_1").val(),
                    "unit_distribusi_2_3_1A": $("#unit_distribusi_2_3_1A").val(),
                    "unit_distribusi_2_3_1B": $("#unit_distribusi_2_3_1B").val(),
                    "unit_distribusi_2_3_2A": $("#unit_distribusi_2_3_2A").val(),
                    "unit_distribusi_2_3_2B": $("#unit_distribusi_2_3_2B").val(),
                    "unit_distribusi_2_3_3A": $("#unit_distribusi_2_3_3A").val(),
                    "unit_distribusi_2_3_3B": $("#unit_distribusi_2_3_3B").val(),
                    "unit_distribusi_2_3_4A": $("#unit_distribusi_2_3_4A").val(),
                    "unit_distribusi_2_3_4B": $("#unit_distribusi_2_3_4B").val(),
                    "unit_distribusi_2_3_5A": $("#unit_distribusi_2_3_5A").val(),
                    "unit_distribusi_2_3_5B": $("#unit_distribusi_2_3_5B").val(),
                    "unit_distribusi_2_3_6A": $("#unit_distribusi_2_3_6A").val(),
                    "unit_distribusi_2_3_6B": $("#unit_distribusi_2_3_6B").val(),
                    <?php
                        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3_71; $index++) {
                    ?>
                    "unit_distribusi_2_3_7<?=$index?>": $("#unit_distribusi_2_3_7<?=$index?>").val(),
                    "unit_distribusi_2_3_7<?=$index?>A": $("#unit_distribusi_2_3_7<?=$index?>A").val(),
                    "unit_distribusi_2_3_7<?=$index?>B": $("#unit_distribusi_2_3_7<?=$index?>B").val(),
                    <?php
                        }
                    ?>
                    "unit_distribusi_2_3_8A": $("#unit_distribusi_2_3_8A").val(),
                    "unit_distribusi_2_3_8B": $("#unit_distribusi_2_3_8B").val(),


                    "unit_pelayanan_2_4_1A": $("#unit_pelayanan_2_4_1A").val(),
                    "unit_pelayanan_2_4_1B": $("#unit_pelayanan_2_4_1B").val(),
                    "unit_pelayanan_2_4_2A": $("#unit_pelayanan_2_4_2A").val(),
                    "unit_pelayanan_2_4_2B": $("#unit_pelayanan_2_4_2B").val(),
                    "unit_pelayanan_2_4_3A": $("#unit_pelayanan_2_4_3A").val(),
                    "unit_pelayanan_2_4_3B": $("#unit_pelayanan_2_4_3B").val(),


                    "biaya_non_standar_2_5_1": $("#biaya_non_standar_2_5_1").val(),
                    "biaya_non_standar_2_5_2": $("#biaya_non_standar_2_5_2").val(),
                    "biaya_non_standar_2_5_3": $("#biaya_non_standar_2_5_3").val(),
                    "biaya_non_standar_2_5_4": $("#biaya_non_standar_2_5_4").val(),
                    "biaya_non_standar_2_5_5": $("#biaya_non_standar_2_5_5").val(),

                    "biaya_lain_lain_2_6_1": $("#biaya_lain_lain_2_6_1").val(),
                    "biaya_lain_lain_2_6_2": $("#biaya_lain_lain_2_6_2").val(),
                    "biaya_lain_lain_2_6_3": $("#biaya_lain_lain_2_6_3").val(),
                    
                }
            })
            .done(function(data, textStatus, xhr) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                set_value_proposal(data.data);
            })
            .complete(function(){
              $('.kalulator').attr('disabled', false);
            })
            .fail(function(data, textStatus, xhr){
                try{
                    alert_failed("Error!", data.responseJSON.error_messages);
                }catch(e){
                    alert_failed("Error!", "Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
                    return;
                }
            });
        }
        
    </script>
    
    <script>
        function set_value_proposal($data) {
            for (const [key, value] of Object.entries($data)) {
                if(key == "initial") {
                    continue;
                }
                if(key == "prov_id") {
                    $("#provinsi").val(value);
                    continue;
                }
                if(key == "verifikasi") {
                    set_verifikasi(value);
                    continue;
                }
                if(key == "harga_satuan") {
                    set_harga_satuan(value);
                    continue;
                }
                if(key == "indikator") {
                    set_indikator(value);
                    continue;
                }
                $("#"+key).val(value);
            }
            // $("#prov_id").val($data["prov_id"]);
            // $("#jenis_spam").val($data["jenis_spam"]);

            // $("#jenis_spam_1_1_1").val($data["jenis_spam_1_1_1"]);
            // $("#jenis_spam_1_1_2").val($data["jenis_spam_1_1_2"]);
            // $("#jenis_spam_1_1_3").val($data["jenis_spam_1_1_3"]);
            // $("#jenis_spam_1_1_4A").val($data["jenis_spam_1_1_4A"]);
            // $("#jenis_spam_1_1_4B").val($data["jenis_spam_1_1_4B"]);
            // $("#jenis_spam_1_1_5").val($data["jenis_spam_1_1_5"]);
            // $("#jenis_spam_1_1_6").val($data["jenis_spam_1_1_6"]);

            // $("#pelayanan_1_2_1A").val($data["pelayanan_1_2_1A"]);
            // $("#pelayanan_1_2_1B").val($data["pelayanan_1_2_1B"]);;
            // $("#pelayanan_1_2_1C").val($data["pelayanan_1_2_1C"]);
            // $("#pelayanan_1_2_1D").val($data["pelayanan_1_2_1D"]);
            // $("#pelayanan_1_2_2A").val($data["pelayanan_1_2_2A"]);
            // $("#pelayanan_1_2_2B").val($data["pelayanan_1_2_2B"]);
            // $("#pelayanan_1_2_2C").val($data["pelayanan_1_2_2C"]);
            // $("#pelayanan_1_2_2D").val($data["pelayanan_1_2_2D"]);
            // $("#pelayanan_1_2_2E").val($data["pelayanan_1_2_2E"]);
            // $("#pelayanan_1_2_2F").val($data["pelayanan_1_2_2F"]);
            // $("#pelayanan_1_2_2G").val($data["pelayanan_1_2_2G"]);
            // $("#pelayanan_1_2_2H").val($data["pelayanan_1_2_2H"]);
            // $("#pelayanan_1_2_2I").val($data["pelayanan_1_2_2I"]);
            // $("#pelayanan_1_2_3A").val($data["pelayanan_1_2_3A"]);
            // $("#pelayanan_1_2_3B").val($data["pelayanan_1_2_3B"]);
            // $("#pelayanan_1_2_3C").val($data["pelayanan_1_2_3C"]);
            // $("#pelayanan_1_2_3D").val($data["pelayanan_1_2_3D"]);

            // $("#unit_air_baku_1_3_1").val($data["unit_air_baku_1_3_1"]);
            // $("#unit_air_baku_1_3_2").val($data["unit_air_baku_1_3_2"]);
            // $("#unit_air_baku_1_3_3").val($data["unit_air_baku_1_3_3"]);
            // $("#unit_air_baku_1_3_4").val($data["unit_air_baku_1_3_4"]);
            // $("#unit_air_baku_1_3_5").val($data["unit_air_baku_1_3_5"]);
            // $("#unit_air_baku_1_3_6").val($data["unit_air_baku_1_3_6"]);
            // $("#unit_air_baku_1_3_7").val($data["unit_air_baku_1_3_7"]);
            // $("#unit_air_baku_1_3_8").val($data["unit_air_baku_1_3_8"]);
            // $("#unit_air_baku_1_3_9").val($data["unit_air_baku_1_3_9"]);
            // $("#unit_air_baku_1_3_10").val($data["unit_air_baku_1_3_10"]);
            // $("#unit_air_baku_1_3_11").val($data["unit_air_baku_1_3_11"]);
            // $("#unit_air_baku_1_3_12").val($data["unit_air_baku_1_3_12"]);
            // $("#unit_air_baku_1_3_13").val($data["unit_air_baku_1_3_13"]);

            // $("#unit_produksi_1_4_1").val($data["unit_produksi_1_4_1"]);
            // $("#unit_produksi_1_4_2").val($data["unit_produksi_1_4_2"]);
            // $("#unit_produksi_1_4_3").val($data["unit_produksi_1_4_3"]);
            // $("#unit_produksi_1_4_4").val($data["unit_produksi_1_4_4"]);

            // $("#unit_distribusi_1_5_1").val($data["unit_distribusi_1_5_1"]);
            // $("#unit_distribusi_1_5_2").val($data["unit_distribusi_1_5_2"]);
            // $("#unit_distribusi_1_5_3").val($data["unit_distribusi_1_5_3"]);
            // $("#unit_distribusi_1_5_6").val($data["unit_distribusi_1_5_6"]);
            // $("#unit_distribusiC1_5_7").val($data["unit_distrCbusi_1_5_7"]);
            // $("#unit_distribusi_1_5_8").val($data["unit_distribusi_1_5_8"]);

            // $("#unit_pelayanan_1_6_1").val($data["unit_pelayanan_1_6_1"]);

            // $("#unit_air_baku_2_1_1A").val($data["unit_air_baku_2_1_1A"]);
            // $("#unit_air_baku_2_1_1B").val($data["unit_air_baku_2_1_1B"]);
            // $("#unit_air_baku_2_1_2A").val($data["unit_air_baku_2_1_2A"]);
            // $("#unit_air_baku_2_1_2B").val($data["unit_air_baku_2_1_2B"]);
            // $("#unit_air_baku_2_1_3A").val($data["unit_air_baku_2_1_3A"]);
            // $("#unit_air_baku_2_1_3B").val($data["unit_air_baku_2_1_3B"]);
            // $("#unit_air_baku_2_1_4A").val($data["unit_air_baku_2_1_4A"]);
            // $("#unit_air_baku_2_1_4B").val($data["unit_air_baku_2_1_4B"]);

            // $("#unit_produksi_2_2_1A").val($data["unit_produksi_2_2_1A"]);
            // $("#unit_produksi_2_2_1B").val($data["unit_produksi_2_2_1B"]);
            // $("#unit_produksi_2_2_2A").val($data["unit_produksi_2_2_2A"]);
            // $("#unit_produksi_2_2_2B").val($data["unit_produksi_2_2_2B"]);
            // $("#unit_produksi_2_2_3A").val($data["unit_produksi_2_2_3A"]);
            // $("#unit_produksi_2_2_3B").val($data["unit_produksi_2_2_3B"]);
            // $("#unit_produksi_2_2_4A").val($data["unit_produksi_2_2_4A"]);
            // $("#unit_produksi_2_2_4B").val($data["unit_produksi_2_2_4B"]);
            // $("#unit_produksi_2_2_5A").val($data["unit_produksi_2_2_5A"]);
            // $("#unit_produksi_2_2_5B").val($data["unit_produksi_2_2_5B"]);
            // $("#unit_produksi_2_2_6A").val($data["unit_produksi_2_2_6A"]);
            // $("#unit_produksi_2_2_6B").val($data["unit_produksi_2_2_6B"]);
            // $("#unit_produksi_2_2_7A").val($data["unit_produksi_2_2_7A"]);
            // $("#unit_produksi_2_2_7B").val($data["unit_produksi_2_2_7B"]);
            
            // $("#unit_distribusi_2_3_1A").val($data["unit_distribusi_2_3_1A"]);
            // $("#unit_distribusi_2_3_1B").val($data["unit_distribusi_2_3_1B"]);
            // $("#unit_distribusi_2_3_2A").val($data["unit_distribusi_2_3_2A"]);
            // $("#unit_distribusi_2_3_2B").val($data["unit_distribusi_2_3_2B"]);
            // $("#unit_distribusi_2_3_3A").val($data["unit_distribusi_2_3_3A"]);
            // $("#unit_distribusi_2_3_3B").val($data["unit_distribusi_2_3_3B"]);
            // $("#unit_distribusi_2_3_4A").val($data["unit_distribusi_2_3_4A"]);
            // $("#unit_distribusi_2_3_4B").val($data["unit_distribusi_2_3_4B"]);
            // $("#unit_distribusi_2_3_5A").val($data["unit_distribusi_2_3_5A"]);
            // $("#unit_distribusi_2_3_5B").val($data["unit_distribusi_2_3_5B"]);
            // $("#unit_distribusi_2_3_6A").val($data["unit_distribusi_2_3_6A"]);
            // $("#unit_distribusi_2_3_6B").val($data["unit_distribusi_2_3_6B"]);
            // $("#unit_distribusi_2_3_7").val($data["unit_distribusi_2_3_7"]);
            // $("#unit_distribusi_2_3_7").val($data["unit_distribusi_2_3_7"]);
            // $("#unit_distribusi_2_3_7").val($data["unit_distribusi_2_3_7"]);
            // $("#unit_distribusi_2_3_8A").val($data["unit_distribusi_2_3_8A"]);
            // $("#unit_distribusi_2_3_8B").val($data["unit_distribusi_2_3_8B"]);

            // $("#unit_pelayanan_2_4_1A").val($data["unit_pelayanan_2_4_1A"]);
            // $("#unit_pelayanan_2_4_1B").val($data["unit_pelayanan_2_4_1B"]);
            // $("#unit_pelayanan_2_4_2A").val($data["unit_pelayanan_2_4_2A"]);
            // $("#unit_pelayanan_2_4_2B").val($data["unit_pelayanan_2_4_2B"]);
            // $("#unit_pelayanan_2_4_3A").val($data["unit_pelayanan_2_4_3A"]);
            // $("#unit_pelayanan_2_4_3B").val($data["unit_pelayanan_2_4_3B"]);

            // $("#biaya_non_standar_2_5_5").val($data["biaya_non_standar_2_5_5"]);

            // $("#biaya_lain_lain_2_6_1").val($data["biaya_lain_lain_2_6_1"]);
            // $("#biaya_lain_lain_2_6_2").val($data["biaya_lain_lain_2_6_2"]);
            // $("#biaya_lain_lain_2_6_3").val($data["biaya_lain_lain_2_6_3"]);
        }

        function set_verifikasi($data) {
            for (const [key, value] of Object.entries($data)) {
                text_default(key, value['text'], value['option'], "verifikasi");
            }
        }
        function set_harga_satuan($data) {
            for (const [key, value] of Object.entries($data)) {
                text_default(key, value['text'], value['option'], "harga_satuan");
            }
        }
        function set_indikator($data) {
            for (const [key, value] of Object.entries($data)) {
                text_default(key, value['text'], value['option'], "indikator");
            }
        }
        function text_default($key, $text, $option, $default){
            $default_text= '<li class="'+$option+'">'+$text+'</li>';
            $("#"+$key+"_"+$default).html($default_text);
        }
    </script>
    
    <script>
    window.onbeforeunload = confirmExit;
    function confirmExit() {
        return "Apakah anda yakin akan keluar dari halaman ini?";
    }
    </script>
    
    <script>

        $( document ).ready(function() {
            get_ajax_jenis_sumber_air();
            get_ajax_unit_distribusi();
            get_ajax_unit_produksi();
        });

        function get_ajax_jenis_sumber_air() {
            $.ajax({
                url: ROOT+'sumberairajax/list',
                dataType: 'json',
                type: 'get',
                data: {
                }
            })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                
                data.data.forEach(function(value){
                    $("#unit_air_baku_1_3_2").append('<option value="'+value.name+'">'+value.name+'</option>');
                });
                
            })
            .complete(function(){
            })
            .fail(function(data){
                if(data.responseJSON.error_messages !== 'undefined'){
                    alert_failed("Error!", data.responseJSON.error_messages);
                    return;
                }
                alert_failed("Error!", "Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
            });
        }


        function get_ajax_unit_distribusi() {
            get_ajax_select("unit_distribusi");
        }
        function get_ajax_unit_produksi() {
            get_ajax_select("unit_produksi");
        }

        function get_ajax_select($var) {
            $.ajax({
                url: ROOT+'/groupajax/komponen_kegiatan/air_minum/' + $var,
                dataType: 'json',
                type: 'get',
                data: {
                }
            })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                
                data.data.forEach(function(value){
                    $("." + $var).append('<option value="'+value.id+'">'+value.kegiatan+'</option>');
                });
                
            })
            .complete(function(){
            })
            .fail(function(data){
                if(data.responseJSON.error_messages !== 'undefined'){
                    alert_failed("Error!", data.responseJSON.error_messages);
                    return;
                }
                alert_failed("Error!", "Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
            });
        }


        
    
    </script>
    <?php
    $this->load->view("default/provinsi_ajax");
    ?>
    
