<script src="<?=base_url('assets/')?>lib/jquery/js/jquery.js">
</script>
<script src="<?=base_url('assets/')?>lib/Flot/js/jquery.flot.js">
</script>
<script src="<?=base_url('assets/')?>lib/Flot/js/jquery.flot.pie.js">
</script>
<script src="<?=base_url('assets/')?>lib/Flot/js/jquery.flot.resize.js">
</script>
<script src="<?=base_url('assets/')?>lib/flot-spline/js/jquery.flot.spline.js">
</script>
<script src="<?=base_url('assets/')?>js/chart.flot.js">
</script>
<script>
  function approv($status) {
    $('.approv').attr('disabled', true);
    $.ajax({
      url: ROOT+'airminumajax/approv',
      dataType: 'json',
      type: 'post',
      data: {
        status: $status,
        id: <?=$proposal_data->id?>,
      }
    }
          )
      .done(function(data, textStatus, xhr) {
      if(data.is_error){
        alert(data.error_message);
        return;
      }
      alert_success("Sukses!", data.data, ROOT + "/airminum/list");;
    }
           )
      .complete(function(){
      $('.approv').attr('disabled', false);
    }
               )
      .fail(function(data, textStatus, xhr){
      try{
        alert_failed("Error!", data.responseJSON.error_messages);
      }
      catch(e){
        alert_failed("Error!", "Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
        return;
      }
    }
           );
  }
  


        $( document ).ready(function() {
            <?php if($proposal_data->id){ ?>
                get_by_id("<?=$proposal_data->id?>");
            <?php }?>

            $( ".form-control" ).focusout(function() {
                kalkulasi();
            })
            .blur(function() {
                kalkulasi();
            });
        });

        function get_by_id($id) {
            $('.kalulator').attr('disabled', true);
            $.ajax({
                url: ROOT+'airminumajax/get_chart/' + $id,
                dataType: 'json',
                type: 'post',
            })
            .done(function(data, textStatus, xhr) {
                if(data.is_error){
                    alert(data.error_message);
                    return;
                }
                set_pie_chart(data.data.total_justifikasi, data.data.total_wajar);
                set_table("wajar", data.data.wajar);
                set_table("justifikasi", data.data.justifikasi);
            })
            .complete(function(){
              $('.kalulator').attr('disabled', false);
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

function to_thousand(x){
    return new Intl.NumberFormat('id-ID').format(x);
}
function set_table($id, $data){
    var datahtml = "";
    $data.forEach(function(value){
        datahtml = datahtml + 
        "<tr>" + 
        "<td>" + value.kegiatan +"</td>" + 
        "<td>" + to_thousand(value.harga) +"</td>" + 
        "<td>" + value.verifikasi +"</td>" + 
        "</tr>"    
    });
    $("#"+$id).html(datahtml);
}
function set_pie_chart($justifikasi, $wajar) {
  var piedata = [
    {
      label: "Butuh Justifikasi", data: [[1,$justifikasi]], color: '#ED4151'}
    ,
    {
      label: "Wajar", data: [[1,$wajar]], color: '#36B3E3'}
  ];
  $.plot('#flotPie1', piedata, {
    series: {
      pie: {
        show: true,
        radius: 1,
        label: {
          show: true,
          radius: 2/3,
          formatter: labelFormatter,
          threshold: 0.1
        }
      }
    }
    ,
    grid: {
      hoverable: true,
      clickable: true
    }
  });
}
  function labelFormatter(label, series) {
    return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
  }
</script>
