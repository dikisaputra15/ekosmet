</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
   <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
         </div>
      </div>
   </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/sb-admin2/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/sb-admin2/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('assets/sb-admin2/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="<?= base_url('assets/sb-admin2/') ?>js/sb-admin-2.min.js"></script>

<script src="<?= base_url('assets/sb-admin2') ?>/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/sb-admin2') ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Core plugin JavaScript-->

<!-- Custom scripts for all pages-->
<!-- Page level plugins -->

<!-- Page level custom scripts -->
<script>
   $(document).ready(function() {
      $('#dataTable').DataTable();

      $('.custom-file-input').on('change', function() {
         let fileName = $(this).val().split('\\').pop();
         $(this).next('.custom-file-label').addClass("selected").html(fileName);
      });

   });
</script>

</body>

</html>