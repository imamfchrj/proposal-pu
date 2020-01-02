
    <?php
        $this->load->view("default/form_js");
        $this->load->view("user/check_user_js");
    ?>

    <script>
      function insert() {
        $status = checkFormUser();
        if(!$status) {
            return;
        }
        alert("Success");
        $('#insert_user').attr('disabled', true);
        // $('#insert_user').attr('disabled', false);
      }
    </script>