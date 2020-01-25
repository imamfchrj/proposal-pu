
    <?php
        $this->load->view("default/form_js");
        $this->load->view("komponenkegiatan/check_komponen_js");
        $this->load->view("default/komponen_mst_ajax");
        $link = $option["link"];
    ?>

    <script>
      function insert() {
        $status = checkFormKomponen();
        if(!$status) {
            return;
        }
        
        $('#insert_komponenkegiatan').attr('disabled', true);
        $.ajax({
            url: ROOT+'komponenkegiatanajax/<?=$link?>',
            dataType: 'json',
            type: 'post',
            data: {
                id: $('#id').val(),
                sub_key: $('#sub_key').val(),
                kegiatan: $('#kegiatan').val(),
                satuan: $('#satuan').val(),
                estimasi: $('#estimasi').val(),
                pembagi: $('#pembagi').val(),
            }
        })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                
                alert_success("Sukses!", "Berhasil menambahkan komponen baru", ROOT + "komponenkegiatan/list");
                
            })
            .complete(function(){
              $('#insert_komponenkegiatan').attr('disabled', false);
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