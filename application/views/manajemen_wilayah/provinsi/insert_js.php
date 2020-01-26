
    <?php
        $this->load->view("default/form_js");
        $this->load->view("manajemen_wilayah/provinsi/check_provinsi_js");
        $link = $option["link"];
    ?>

    <script>
      function insert() {
        $status = checkFormProvinsi();
        if(!$status) {
            return;
        }
        
        $('#insert_provinsi').attr('disabled', true);
        $.ajax({
            url: ROOT+'provinsiajax/<?=$link?>',
            dataType: 'json',
            type: 'post',
            data: {
                id: $('#id').val(),
                prov_id : $('#prov_id').val(),
                prov_name: $('#prov_name').val(),
            }
        })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                
                alert_success("Sukses!", "Berhasil menambahkan provinsi", ROOT + "provinsi/list");
                
            })
            .complete(function(){
              $('#insert_provinsi').attr('disabled', false);
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