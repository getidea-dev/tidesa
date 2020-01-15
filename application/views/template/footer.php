<script src="<?= base_url(); ?>assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url(); ?>assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url(); ?>assets/js/argon.min9f1e.js?v=1.1.0' ?>"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

<script>
  $('#subdomain').on('keyup', function() {
    const subdomain = $('#subdomain').val();
    // console.log(subdomain);
    $.ajax({
      url: "<?= base_url('auth/checkSubdomain') ?>",
      method: 'post',
      data: {
        subdomain: subdomain
      },
      dataType: 'json',
      success: function(data) {
        if (data) {
          $('#notif').html('<span style="font-size: 10pt; color: Tomato;"><i class="fas fa-window-close"></i> Tidak Tersedia</span>');
        } else {
          $('#notif').html('<span style="font-size: 10pt; color: green; "><i class="fas fa-check"></i> Tersedia</span>');
        }
      }
    });
  });
</script>
</body>

</html>