
    <?php
        $this->load->view("default/form_js");
        $this->load->view("manajemen_wilayah/ikk_provinsi/check_ikk_provinsi_js");
        $link = $option["link"];
    ?>

    <script>
      function insert() {
        $status = checkFormIkk_provinsi();
        if(!$status) {
            return;
        }
        
        $('#insert_ikk_provinsi').attr('disabled', true);
        $.ajax({
            url: ROOT+'ikk_provinsiajax/<?=$link?>',
            dataType: 'json',
            type: 'post',
            data: {
                id: $('#id').val(),
                prov_id : $('#prov_id').val(),
                ikk_persen : $('#ikk_persen').val(),
                ikk_decimal : $('#ikk_decimal').val(),
                tahun: $('#tahun').val(),
            }
        })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                
                alert_success("Sukses!", "Berhasil menambahkan ikk provinsi", ROOT + "ikk_provinsi/list");
                
            })
            .complete(function(){
              $('#insert_ikk_provinsi').attr('disabled', false);
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