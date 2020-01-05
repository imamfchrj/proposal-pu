
    <?php
        $this->load->view("default/form_js");
        $this->load->view("user/check_user_js");
    ?>

    <script>
      function insert() {
        $status = checkFormUser();
        if(!$status) {
            return;
        }
        
        $('#insert_user').attr('disabled', true);
        $.ajax({
            url: ROOT+'userajax/insert',
            dataType: 'json',
            type: 'post',
            data: {
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
                // alert("success");
                alert_success("Sukses!", "Berhasil menambahkan user baru", ROOT + "/user/list");
                // window.location = ROOT+'user/list';
            })
            .complete(function(){
              $('#insert_user').attr('disabled', false);
            })
            .fail(function(data){
                if(data.responseJSON.error_messages){
                    alert_failed("Error!", data.responseJSON.error_messages);
                    return;
                }
                alert_failed("Error!", "Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
            });
      }
    </script>