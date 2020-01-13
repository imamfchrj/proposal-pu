
    <script>
        $( document ).ready(function() {
            get_provinsi();
        });

        function get_provinsi() {
            $.ajax({
                url: ROOT+'provinsiajax/list',
                dataType: 'json',
                type: 'get',
                data: {
                }
            })
            .done(function(data) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                add_provinsi(data.data);
                
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

        function add_provinsi(provinsi_list) {
            provinsi_list.forEach(function(provinsi){
                console.log(provinsi);
                $(".provinsi").append('<option value="'+provinsi.id+'">'+provinsi.nama+'</option>');
            });
        }
    </script>