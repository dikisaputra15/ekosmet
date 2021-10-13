<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <!-- Begin Page Content -->
   <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">DASHBOARD</h1>
      </div>

      <div class="row">
       

         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Transaksi Masuk</div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $transaksi_masuk; ?></div>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
               <div class="card-body">
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Transaksi Gagal</div>

                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($transaksi_gagal); ?></div>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <!-- /.container-fluid -->

   </div>
   <!-- End of Main Content -->