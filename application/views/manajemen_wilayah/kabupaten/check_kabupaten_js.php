<script>

    $( document ).ready(function() {
        $("#e_prov_id").hide();
        $("#e_kab_id").hide();
        $("#e_nama").hide();
    });

    function checkFormKabupaten() {
        $("#e_prov_id").hide();
        $("#e_kab_id").hide();
        $("#e_nama").hide();
        var status = true;
        $prov_id = $("#prov_id").val();
        $kab_id = $("#kab_id").val();
        $nama = $("#nama").val();


        if($prov_id == "") {
            status = false;
            $("#e_prov_id").show();
            $("#e_prov_id").html("Pilih Provinsi");
        
        }

        if($kab_id == "") {
            status = false;
            $("#e_kab_id").show();
            $("#e_kab_id").html("Wajib diisi");
        }

        if($nama == "") {
            status = false;
            $("#e_nama").show();
            $("#e_nama").html("Wajib diisi");
        }
        
        return status;
    }
</script>