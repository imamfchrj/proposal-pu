<script>

    $( document ).ready(function() {
        $("#e_prov_id").hide();
        $("#e_ikk_persen").hide();
        $("#e_ikk_decimal").hide();
        $("#e_tahun").hide();
    });

    function checkFormIkk_provinsi() {
        $("#e_prov_id").hide();
        $("#e_ikk_persen").hide();
        $("#e_ikk_decimal").hide();
        $("#e_tahun").hide();
        var status = true;
        $prov_id = $("#prov_id").val();
        $ikk_persen = $("#ikk_persen").val();
        $ikk_decimal = $("#ikk_decimal").val();
        $tahun = $("#tahun").val();


        if($prov_id == "") {
            status = false;
            $("#e_prov_id").show();
            $("#e_prov_id").html("Pilih Provinsi");
        }

        if($ikk_persen == "") {
            status = false;
            $("#e_ikk_persen").show();
            $("#e_ikk_persen").html("Wajib diisi");
        }

        if($ikk_decimal == "") {
            status = false;
            $("#e_ikk_decimal").show();
            $("#e_ikk_decimal").html("Wajib diisi");
        }

        if($tahun == "") {
            status = false;
            $("#e_tahun").show();
            $("#e_tahun").html("Wajib diisi");
        }
        
        return status;
    }
</script>