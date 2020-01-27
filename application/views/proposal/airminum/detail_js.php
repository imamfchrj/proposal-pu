<script>

        function approv($status) {
            $('.insert').attr('disabled', true);
            $.ajax({
                url: ROOT+'airminumajax/approv',
                dataType: 'json',
                type: 'post',
                data: {
                    status: $status,
                    id: <?=$proposal_data->id?>,
                }
            })
            .done(function(data, textStatus, xhr) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                alert_success("Sukses!", data.data, ROOT + "/airminum/list");;
            })
            .complete(function(){
              $('.insert').attr('disabled', false);
            })
            .fail(function(data, textStatus, xhr){
                try{
                    alert_failed("Error!", data.responseJSON.error_messages);
                }catch(e){
                    alert_failed("Error!", "Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
                    return;
                }
            });
        }
</script>