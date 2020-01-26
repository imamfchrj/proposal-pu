
    <?php
        $this->load->view("default/form_js");
        $this->load->view("manajemen_wilayah/kabupaten/check_kabupaten_js");
        $link = $option["link"];
    ?>

    <script>
      function insert() {
        $status = checkFormKabupaten();
        if(!$status) {
            return;
        }
        
        $('#insert_kabupaten').attr('disabled', true);
        $.ajax({
            url: ROOT+'kabupatenajax/<?=$link?>',
            dataType: 'json',
            type: 'post',
            data: {
                id: $('#id').val(),
                prov_id : $('#prov_id').val(),
                kab_id : $('#kab_id').val(),
                nama: $('#nama').val(),
            }
        })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                
                alert_success("Sukses!", "Berhasil menambahkan kabupaten", ROOT + "kabupaten/list");
                
            })
            .complete(function(){
              $('#insert_kabupaten').attr('disabled', false);
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