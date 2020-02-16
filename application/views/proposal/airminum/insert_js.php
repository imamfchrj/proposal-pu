
    <?php
        $this->load->view("default/form_js");
        $this->load->view("user/check_user_js");
        $link = $option["link"];
    ?>

<link href="<?=base_url("assets")?>/lib/jquery.steps/css/jquery.steps.css" rel="stylesheet">

    <script>

        // $(function () {
        //     $('[data-toggle="tooltip"]').tooltip()
        // });

        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });

        function jenis_spam() {
            $val_jenis_spam = $("#jenis_spam").val();
            if(($val_jenis_spam == "perluasan") || ($val_jenis_spam == "peningkatan")) {
                $("#container_jenis_spam_1").show();
                return;
            }
            clear_jenis_spam();
            $("#container_jenis_spam_1").hide();
        }
        function clear_jenis_spam() {
            $set = "";
            $("#jenis_spam_1_1_1").val($set);
            $("#jenis_spam_1_1_2").val($set);
            $("#jenis_spam_1_1_3").val($set);
            $("#jenis_spam_1_1_4A").val($set);
            $("#jenis_spam_1_1_4B").val($set);
            $("#jenis_spam_1_1_5").val($set);
            $("#jenis_spam_1_1_6").val($set);
        }

        function kalkulasi() {
            $('.kalulator').attr('disabled', true);
            data_json = get_value();
            $.ajax({
                url: ROOT+'airminumajax/cek',
                dataType: 'json',
                type: 'post',
                data: data_json
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

        function submit() {
            $('.insert').attr('disabled', true);
            data_json = get_value();
            $.ajax({
                url: ROOT+'airminumajax/insert',
                dataType: 'json',
                type: 'post',
                data: data_json
            })
            .done(function(data, textStatus, xhr) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                alert_success("Sukses!", "Berhasil menambahkan proposal baru", ROOT + "/airminum/list");
                
            })
            .complete(function(){
              $('.insert').attr('disabled', false);
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
        function update() {
            $('.insert').attr('disabled', true);
            data_json = get_value();
            $.ajax({
                url: ROOT+'airminumajax/update/<?=$id_proposal?>',
                dataType: 'json',
                type: 'post',
                data: data_json
            })
            .done(function(data, textStatus, xhr) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                alert_success("Sukses!", "Berhasil menambahkan proposal baru", ROOT + "/airminum/list");
                set_value_proposal(data.data);
            })
            .complete(function(){
              $('.insert').attr('disabled', false);
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

        $( document ).ready(function() {

            $( ".form-control" ).focusout(function() {
                kalkulasi();
            })
            .blur(function() {
                kalkulasi();
            });
        });
        
        function get_by_id($id) {
            $('.kalulator').attr('disabled', true);
            $.ajax({
                url: ROOT+'airminumajax/get_by_id/' + $id,
                dataType: 'json',
                type: 'post',
            })
            .done(function(data, textStatus, xhr) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                setTimeout(function() {
                    set_value_proposal(data.data);
                }, 1000);
                
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

        function get_value() {
            return {
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
                    <?php
                        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1; $index++) {
                    ?>
                    "unit_air_baku_2_1_<?=$index?>": $("#unit_air_baku_2_1_<?=$index?>").val(),
                    "unit_air_baku_2_1_<?=$index?>A": $("#unit_air_baku_2_1_<?=$index?>A").val(),
                    "unit_air_baku_2_1_<?=$index?>B": $("#unit_air_baku_2_1_<?=$index?>B").val(),
                    <?php
                        }
                    ?>

                    <?php
                        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PRODUKSI_2_2; $index++) {
                    ?>
                    "unit_produksi_2_2_<?=$index?>": $("#unit_produksi_2_2_<?=$index?>").val(),
                    "unit_produksi_2_2_<?=$index?>A": $("#unit_produksi_2_2_<?=$index?>A").val(),
                    "unit_produksi_2_2_<?=$index?>B": $("#unit_produksi_2_2_<?=$index?>B").val(),
                    <?php
                        }
                    ?>
                    <?php
                        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3; $index++) {
                    ?>
                    "unit_distribusi_2_3_<?=$index?>": $("#unit_distribusi_2_3_<?=$index?>").val(),
                    "unit_distribusi_2_3_<?=$index?>A": $("#unit_distribusi_2_3_<?=$index?>A").val(),
                    "unit_distribusi_2_3_<?=$index?>B": $("#unit_distribusi_2_3_<?=$index?>B").val(),
                    <?php
                        }
                    ?>
                    <?php
                        for($index = 1; $index <= PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4; $index++) {
                    ?>
                    "unit_pelayanan_2_4_<?=$index?>": $("#unit_pelayanan_2_4_<?=$index?>").val(),
                    "unit_pelayanan_2_4_<?=$index?>A": $("#unit_pelayanan_2_4_<?=$index?>A").val(),
                    "unit_pelayanan_2_4_<?=$index?>B": $("#unit_pelayanan_2_4_<?=$index?>B").val(),
                    <?php
                        }
                    ?>
                    
                    "biaya_non_standar_2_5_1": $("#biaya_non_standar_2_5_1").val(),
                    "biaya_non_standar_2_5_2": $("#biaya_non_standar_2_5_2").val(),
                    "biaya_non_standar_2_5_3": $("#biaya_non_standar_2_5_3").val(),
                    "biaya_non_standar_2_5_4": $("#biaya_non_standar_2_5_4").val(),
                    "biaya_non_standar_2_5_5": $("#biaya_non_standar_2_5_5").val(),

                    "biaya_lain_lain_2_6_1": $("#biaya_lain_lain_2_6_1").val(),
                    "biaya_lain_lain_2_6_2": $("#biaya_lain_lain_2_6_2").val(),
                    "biaya_lain_lain_2_6_3": $("#biaya_lain_lain_2_6_3").val(),
                    
                };
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
                if(value != 0) {
                    var target = $( "#"+key );
                    if ( target.is( "select" ) ) {
                        $("#"+key+' option[value="'+value+'"]').attr('selected','selected');
                    } else {
                        $("#"+key).val(to_thousand(value));
                    }
                }

            }
        }

        function to_thousand(x){
            return new Intl.NumberFormat('id-ID').format(x);
        }

        function set_verifikasi($data) {
            for (const [key, value] of Object.entries($data)) {
                text_default(key, value['text'], value['option'], "verifikasi");
                hidden_by_key(key, "unit_air_baku_1_3_10", value['text'], "Grativasi", ".hidden_1_3_10");
            }
        }
        function set_harga_satuan($data) {
            for (const [key, value] of Object.entries($data)) {
                text_default(key, to_float_array(value['text']), value['option'], "harga_satuan");
            }
        }
        function set_indikator($data) {
            $rumus = "";
            for (const [key, value] of Object.entries($data)) {
                if (key == "unit_air_baku_1_3_1"){
                    $rumus= "IF((1.1*Tambahan Kapasitas Produksi) <= Debit  Air Baku <= (1.5*Tambahan Kapasitas Produksi), Layak, Justifikasi)";
                }else if (key == "unit_air_baku_1_3_3"){
                    $rumus ="IF( Kekeruhan Maximum >= 600, Prasedimentasi, Non Prasedimentasi)";
                }else if (key == "unit_air_baku_1_3_6"){
                    $rumus = "IF( Beda Tinggi (▲H) > 0 , Gravitasi, Pompa)";
                }else if (key == "unit_air_baku_1_3_8"){
                    $rumus = "IF( 0.5 <= Kecepatan (V) <= 2.5 , Layak, Justifikasi)";
                }else if (key == "unit_air_baku_1_3_9"){
                    $rumus = "IF( (Kehilangan Tekanan (hf) / Panjang pipa Transmisi * 1000) < 10, Layak , Justifikasi)";
                }else if (key == "unit_air_baku_1_3_10"){
                    $rumus = "IF( Total Head > 0, Gravitasi, Pompa)";
                }else if (key == "unit_produksi_1_4_1"){
                    $rumus = "IF( Tambahan Kapasitas Produksi (Min) <= Prasedimentasi <= Tambahan Kapasitas Produksi (Max), Layak, Justifikasi)";
                }else if (key == "unit_produksi_1_4_2"){
                    $rumus = "IF( Tambahan Kapasitas Produksi (Min) <= IPA <= Tambahan Kapasitas Produksi (Max), Layak, Justifikasi)";
                }else if (key == "unit_distribusi_1_5_5"){
                    $rumus = "";
                }else if (key == "harga_rata_rata_B"){
                    $rumus = "IF( x <= 8.360 , Layak, Justifikasi)";
                }else if (key == "harga_rata_rata_A"){
                    $rumus = "IF( x <= 200.000.000 , Layak, Justifikasi)";
                }
                text_default(key, to_float_array(value['text']), value['option'], "indikator",$rumus);
            }
        }
        function text_default($key, $text, $option, $default, $rumus=""){
            $default_text= '<li class="'+$option+'" data-toggle="tooltip" data-placement="top" title="'+$rumus+'">'+$text+'</li>';
            $("#"+$key+"_"+$default).html($default_text);
        }

        function to_float_array($text)
        {
            // try { 
                if(!isNaN($text)){
                    return to_thousand($text);
                }
                var data = $text.split("~");
                $val_str = "";
                if(data.length != 0) {
                    data.forEach(function(value){
                    
                        if(!isNaN(value)){
                            value = to_thousand(value);
                        }
                        $val_str += value;
                    });
                    return $val_str;
                }
                
            // } 
            // catch { 
            //     // object does not exist 
            // } 
            return $text;
        }
        function hidden_by_key($key, $is_must_key, $value, $is_must, $hidden_key) {
            if($key != $is_must_key) {
                return false;
            }
            $($hidden_key).show();
            if($value != $is_must) {
                return false;
            }
            $($hidden_key).hide();
            return true;
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
            get_ajax_select("unit_distribusi", 1);
            get_ajax_select("unit_pelayanan");
            get_ajax_select("unit_air_baku", 1);
            get_ajax_select("unit_produksi", 1);
            <?php 
                foreach(PROPOSAL_AIR_MINUM_UNIT_AIR_BAKU_2_1_OPTION as $list) {
                    echo "get_ajax_sub_select('$list[0]', '$list[1]');";
                }
                foreach(PROPOSAL_AIR_MINUM_UNIT_PRODUKSI_2_2_OPTION as $list) {
                    echo "get_ajax_sub_select('$list[0]', '$list[1]');";
                }
                foreach(PROPOSAL_AIR_MINUM_UNIT_DISTRIBUSI_2_3_OPTION as $list) {
                    echo "get_ajax_sub_select('$list[0]', '$list[1]');";
                }
                foreach(PROPOSAL_AIR_MINUM_UNIT_PELAYANAN_2_4_OPTION as $list) {
                    echo "get_ajax_sub_select('$list[0]', '$list[1]');";
                }
            ?>

            <?php if($id_proposal){ ?>
                get_by_id("<?=$id_proposal?>");
            <?php }?>
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
        function get_ajax_unit_pelayanan() {
            get_ajax_select("unit_pelayanan");
        }
        function get_ajax_unit_air_baku() {
            get_ajax_select("unit_air_baku", 1);
        }

        function get_ajax_select($var, $url2=0) {
            $.ajax({
                url: ROOT+'groupajax/komponen_kegiatan/air_minum/' + $var + "/" + $url2,
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
                    $("." + $var).append('<option value="'+value.id+'">'+value.kegiatan+' ('+value.satuan+')</option>');
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



        function get_ajax_sub_select($var, $url2) {
            $.ajax({
                url: ROOT+'groupajax/komponen_kegiatan_sub_master/air_minum/' + $var + "/" + $url2,
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
                if(data.data === 'undefined'){
                    return;
                }
                $tmp = true;
                try { 
                    data.data.forEach(function(value){
                        if($tmp) {
                            $tmp=false;
                            $("." + $var +$url2).html("<option value='0'></option>");
                        }
                        $("." + $var + $url2).append('<option value="'+value.id+'">'+value.kegiatan+' ('+value.satuan+')</option>');
                    });
                } 
                catch { 
                    // object does not exist 
                } 
                
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


        function get_ajax_by_id($var, $id) {
            if($var == 0) {
                return;
            }
            $.ajax({
                url: ROOT+'groupajax/komponen_kegiatan_by_id/' + $id,
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
                if(data.data === 'undefined'){
                    return;
                }
                try { 
                    $("." + $var).html(data.data.satuan);
                } 
                catch { 
                    $("." + $var).html("unit");
                } 
                
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
    
