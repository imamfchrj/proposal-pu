
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
            url: ROOT+'userajax/<?=$link?>',
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
                submit();
            });
        });

        function submit() {
            $('#insert_user').attr('disabled', true);
            $.ajax({
                url: ROOT+'airminumajax/cek',
                dataType: 'json',
                type: 'post',
                data: {
                    "prov_id": $(".provinsi").val(),
                    "jenis_spam_1_1_1": $("#jenis_spam_1_1_1").val(),
                    "jenis_spam_1_1_2": $("#jenis_spam_1_1_2").val(),
                }
            })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                $("#jenis_spam_1_1_3").val(data.data["jenis_spam_1_1_3"]);
                console.log(data);
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
    window.onbeforeunload = confirmExit;
    function confirmExit() {
        return "Apakah anda yakin akan keluar dari halaman ini?";
    }
    </script>
    
    <?php
    $this->load->view("default/provinsi_ajax");
    ?>