<script>

    $( document ).ready(function() {
        $("#e_sub_key").hide();
        $("#e_kegiatan").hide();
        $("#e_satuan").hide();
        $("#e_estimasi").hide();
        $("#e_pembagi").hide();
    });

    function checkFormKomponen() {
        $("#e_sub_key").hide();
        $("#e_kegiatan").hide();
        $("#e_satuan").hide();
        $("#e_estimasi").hide();
        $("#e_pembagi").hide();
        var status = true;
        $sub_key = $("#sub_key").val();
        $kegiatan = $("#kegiatan").val();
        $satuan = $("#satuan").val();
        $estimasi = $("#estimasi").val();
        $pembagi = $("#pembagi").val();


        if($sub_key == "") {
            status = false;
            $("#e_sub_key").show();
            $("#e_sub_key").html("Pilih Komponen");
        
        }

        if($kegiatan == "") {
            status = false;
            $("#e_kegiatan").show();
            $("#e_kegiatan").html("Wajib diisi");
        }

        if($satuan == "") {
            status = false;
            $("#satuan").show();
            $("#satuan").html("Wajib diisi");
        }
        
        if($estimasi == "") {
            status = false;
            $("#estimasi").show();
            $("#estimasi").html("Wajib diisi");
        }

        if($pembagi == "") {
            status = false;
            $("#pembagi").show();
            $("#pembagi").html("Wajib diisi");
        }
        
        return status;
    }
</script>