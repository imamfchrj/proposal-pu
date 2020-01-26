<script>

    $( document ).ready(function() {
        $("#e_prov_id").hide();
        $("#e_prov_name").hide();
    });

    function checkFormProvinsi() {
        $("#e_prov_id").hide();
        $("#e_prov_name").hide();
        var status = true;
        $prov_id = $("#prov_id").val();
        $prov_name = $("#prov_name").val();


        if($prov_id == "") {
            status = false;
            $("#e_prov_id").show();
            $("#e_prov_id").html("Wajib diisi");
        
        }

        if($prov_name == "") {
            status = false;
            $("#e_prov_name").show();
            $("#e_prov_name").html("Wajib diisi");
        }
        
        return status;
    }
</script>