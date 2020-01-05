<?php
    $this->load->view("default/datatable");
?>

<script>
      $(function(){
        'use strict';
        $(document).ready(function() {
            function getLinkUser($id) {
              var linkDelete = ROOT + "user/delete/" + $id;
              var linkUpdate = ROOT + "user/update/" + $id;
              var html = "";
                    html=html + '<div class="col-lg-4 mg-t-20 mg-lg-t-0">';
                    html=html + '<div class="btn-group" role="group" aria-label="Basic example">';
                    html=html + '<button type="button" class="btn btn-primary" onclick="window.location.href = \''+linkUpdate+'\';"><i class="fa fa-edit"></i></button>';
                    html=html + '<button type="button" class="btn btn-danger" onclick="window.location.href = \''+linkDelete+'\';"><i class="fa fa-trash"></i></button>';
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