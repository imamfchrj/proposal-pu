<?php
$this->load->view("default/form_js");
$this->load->view("manajemen_wilayah/ikk_kabupaten/check_ikk_kabupaten_js");
$link = $option["link"];
?>

<script>
    function insert() {
        $status = checkFormIkk_kabupaten();
        if (!$status) {
            return;
        }

        $('#insert_ikk_kabupaten').attr('disabled', true);
        $.ajax({
            url: ROOT + 'ikk_kabupatenajax/<?=$link?>',
            dataType: 'json',
            type: 'post',
            data: {
                id: $('#id').val(),
                kab_id: $('#kab_id').val(),
                ikk_persen: $('#ikk_persen').val(),
                ikk_decimal: $('#ikk_decimal').val(),
                tahun: $('#tahun').val(),
            }
        })
            .done(function (data) {
                if (data.is_error) {
                    alert(data.error_message);
                    return;
                }

                alert_success("Sukses!", "Berhasil menambahkan ikk kabupaten", ROOT + "ikk_kabupaten/list");

            })
            .complete(function () {
                $('#insert_ikk_kabupaten').attr('disabled', false);
            })
            .fail(function (data) {
                if (data.responseJSON.error_messages !== 'undefined') {
                    alert_failed("Error!", data.responseJSON.error_messages);
                    return;
                }
                alert_failed("Error!", "Terjadi kesalahan. Periksa jaringan anda. atau hubungi admin.");
            });
    }

    $(function () {
        $("#prov_id").on("change", function () {
            $.ajax({
                // MOD BY IMAM 20170927
                // url : site_url+'master/costcenter/get_by_bisnis_area_2',
                url: ROOT + 'ikk_kabupatenajax/get_kab_by_prov',
                type: 'POST',
                data: {prov_id: $(this).val()},
                success: function (result) {
                    // MOD BY IMAM 20170927
                    // $("#costcenter").html(result);
                    $("#kab_id").html(result);
                }
            });
            return false;
        });
    })
</script>
