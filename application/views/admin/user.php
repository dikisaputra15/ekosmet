<div class="container" style="font-size:13px;">
   <div class="row">
      <div class="col-md-8">
         <div class="card shadow">
            <div class="card-body">
               <table id="dataTable" class="table table-sm table-bordered">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $i = 1;
                     foreach ($userMenu as $us) : ?>
                        <tr>
                           <td><?= $i++; ?></td>
                           <td><?= $us['nama']; ?></td>
                           <td><?= $us['email']; ?></td>
                           <td><?= $us['role']; ?></td>
                           <td>
                              <a href="<?= base_url('admin/user/hapusUser/') . $us['id_user'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                              <a href="<?= base_url('admin/user/editUser/') . $us['id_user'] ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                           </td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>

</div>