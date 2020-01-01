<script>

    $( document ).ready(function() {
        $("#e_name").hide();
        $("#e_email").hide();
        $("#e_hp").hide();
        $("#e_password").hide();
        $("#e_c_password").hide();
        $("#e_status").hide();
    });

    function checkFormUser() {
        $("#e_name").hide();
        $("#e_email").hide();
        $("#e_hp").hide();
        $("#e_password").hide();
        $("#e_c_password").hide();
        var status = true;
        $name = $("#name").val();
        $email = $("#email").val();
        $hp = $("#hp").val();
        $password = $("#password").val();
        $c_password = $("#c_password").val();


        if(!isEmail($email)) {
            status = false;
            $("#e_email").show();
            $("#e_email").html("Format email salah. contoh: check@proposal-pu.com");
        }
        if($email == "") {
            status = false;
            $("#e_email").show();
            $("#e_email").html("Wajib diisi");
        
        }

        if($hp != "") {
            if(!isPhone($hp)) {
                status = false;
                $("#e_hp").show();
                $("#e_hp").html("Format nomer hp salah");
            }
        }

        if($password == "") {
            status = false;
            $("#e_password").show();
            $("#e_password").html("Wajib diisi");
        }
        
        if($c_password != $password) {
            status = false;
            $("#e_c_password").show();
            $("#e_c_password").html("Konfirmasi password salah");
        }

        if($c_password == "") {
            status = false;
            $("#e_c_password").show();
            $("#e_c_password").html("Wajib diisi");
        }
        
        return status;
    }
</script>