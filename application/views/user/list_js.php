<?php
    $this->load->view("default/datatable");
?>

<script>
      function conf_delete($id) {
        alert_danger("Menghapus!", "Apakah anda yakin akan menghapus ini", "javascript:_delete("+$id+");");
                
      }
      function _delete($id) {
        $.ajax({
            url: ROOT+'userajax/delete',
            dataType: 'json',
            type: 'post',
            data: {
                id: $id
            }
        })
            .done(function(data) {
                if(data.is_error){
                    return;
                }
                location.reload();
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
      $(function(){
        'use strict';
        $(document).ready(function() {
            function getLinkUser($id) {
              var linkDelete = $id;
              var linkUpdate = ROOT + "user/update/" + $id;
              var html = "";
                    html=html + '<div class="col-lg-4 mg-t-20 mg-lg-t-0">';
                    html=html + '<div class="btn-group" role="group" aria-label="Basic example">';
                    html=html + '<button type="button" class="btn btn-primary" onclick="window.location.href = \''+linkUpdate+'\';"><i class="fa fa-edit"></i></button>';
                    html=html + '<button type="button" class="btn btn-danger" onclick="conf_delete( \''+linkDelete+'\')"><i class="fa fa-trash"></i></button>';
                    html=html + '</div>';
                    html=html + '</div>';
              return html;
            }

            $('#datatable1').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": ROOT + "/userajax/list",
                "columns": [
                    { "data": "id" },
                    { "data": "name" },
                    { "data": "email" },
                    { "data": "hp" },
                    { "data": "status",
                      "render": function(data, type, row, meta){
                        
                          if(data === 1){
                              return "aktif";
                          }

                          return '';
                      }
                   },
                    { "data": "id",
                      "render": function(data, type, row, meta){
                          return getLinkUser(data);
                      }
                   },
                ]
            } );
        } );

      });
    </script>