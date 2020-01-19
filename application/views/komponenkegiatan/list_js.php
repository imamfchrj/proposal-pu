<?php
    $this->load->view("default/datatable");
?>

<script>
      $(function(){
        'use strict';
        $(document).ready(function() {
            function getLinkKomponen($id) {
              var linkDelete = $id;
              var linkUpdate = ROOT + "komponenkegiatan/update_komponen/" + $id;
              var html = "";
                    html=html + '<div class="col-lg-4 mg-t-20 mg-lg-t-0">';
                    html=html + '<div class="btn-group" role="group" aria-label="Basic example">';
                    html=html + '<button type="button" class="btn btn-primary" onclick="window.location.href = \''+linkUpdate+'\';"><i class="fa fa-edit"></i></button>';
                    html=html + '<button type="button" class="btn btn-danger" onclick="conf_delete( \''+linkDelete+'\')"><i class="fa fa-trash"></i></button>';
                    html=html + '</div>';
                    html=html + '</div>';
              return html;
            }

            $('#komponenkegiatan').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": ROOT + "/komponenkegiatanajax/list",
                "columns": [
                    { "data": "id" },
                    { "data": "komponen_spam" },
                    { "data": "kegiatan" },
                    { "data": "satuan" },
                    { "data": "estimasi" },
                    { "data": "pembagi" },
                    { "data": "id",
                      "render": function(data, type, row, meta){
                          return getLinkKomponen(data);
                      }
                   },
                ]
            } );
        } );

      });

      function conf_delete($id) {
          conf_delete
          alert_danger("Menghapus!", "Apakah anda yakin akan menghapus ini", "javascript:_delete("+$id+");");

      }
      function _delete($id) {
          $.ajax({
              url: ROOT+'komponenkegiatanajax/delete',
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
    </script>