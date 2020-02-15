
    <script>
        $( document ).ready(function() {
            get_sub_komponen_mst();
        });

        function get_sub_komponen_mst() {
            $.ajax({
                url: ROOT+'subkomponenajax/list',
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
                add_sub_komponen_mst(data.data);
                
            })
            .complete(function(){
            })
            .fail(function(data){
                if(data.responseJSON.error_messages !== 'undefined'){
                    alert_failed("Error!", data.responseJSON.error_messages);
                    return;
                }
                alert_failed("Error!", "Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
            });
        }

        function add_sub_komponen_mst(komponen_mst_list) {
            $(".sub_komponen_mst").append('<option value="">-</option>');
            komponen_mst_list.forEach(function(komponen_mst){
                $(".sub_komponen_mst").append('<option value="'+komponen_mst.sub_key+'">'+komponen_mst.komponen_spam+'</option>');
            });
        }
    </script>