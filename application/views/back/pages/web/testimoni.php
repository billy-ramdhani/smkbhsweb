<div class="container">
   <div class="row">
      <div class="col">
         <h3 class="page-header">Manajemen <?= $title ?></h3>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?= $this->session->flashdata('success') ?>.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>   
            </div>
         <?php elseif($this->session->flashdata('error')) : ?>
            <div class="alert alert-error alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('error') ?>.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>   
            </div>
         <?php endif ?>
      </div>
   </div>

   <div class="row mt-3">
      <div class="col">
      <button type="buton" class="btn btn-success btn-sm" onclick="add_testimoni()">
            <i class="fas fa-plus"></i> Tambah
         </button>
         <button class="btn btn-outline-secondary btn-sm" onclick="reload_table()">
            <i class="fas fa-sync-alt"></i> Reload
         </button>
         <button class="btn btn-outline-danger btn-sm" onclick="bulk_delete()">
            <i class="fas fa-trash"></i> Multiple Delete
         </button>
      </div>
   </div>

  <br>

   <div class="table-responsive">
      <table id="tableKepegawaian" class="table table-bordered"  cellspacing="0" width="100%">
         <thead>
         <tr>
            <th><input type="checkbox" id="check-all"></th>
            <th>No</th>
            <th>Nama</th>
            <th>Pekerjaan</th>
            <th>Posisi</th>
            <th>Testimoni</th>
            <th>Alumni</th>
            <th>Action</th>
         </tr>
         </thead>
         <tbody>
            <?php $no= 1; ?>
         <?php foreach($alumni as $al): ?>
         <tr>
            <td></td>
            <td><?= $no++ ?> </td>
            <td><?= $al->nama_alumni ?></td>
            <td><?= $al->pekerjaan ?></td>
            <td><?= $al->posisi_pekerjaan ?></td>
            <td><?= $al->isi ?></td>
            <td><?= $al->alumni ?></td>
            <td></td>
         </tr>
         <?php endforeach; ?>
         </tbody>
      </table>
   </div>

</div>

<!-- Modal -->
<div class="modal fade" id="modalTestimoni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Edit Testimoni</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
         </div>
         <div class="modal-body">
            <form action="#" class="form-horizontal" id="form">
            
               <input type="hidden" name="id" id="id">

               <div class="form-group row">
                  <label for="title" class="col-sm-3 col-form-label">Nama</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" id="testimoni_name" name="testimoni_name">
                  </div>
               </div> 

               <div class="form-group row">
                  <label for="title" class="col-sm-3 col-form-label">Pekerjaan</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" id="testimoni_name" name="testimoni_name">
                  </div>
               </div> 

               <div class="form-group row">
                  <label for="title" class="col-sm-3 col-form-label">Posisi Pekerjaan</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" id="testimoni_name" name="testimoni_name">
                  </div>
               </div> 

               <div class="form-group row">
                  <label for="title" class="col-sm-3 col-form-label">Testimoni</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control" id="testimoni_name" name="testimoni_name">
                  </div>
               </div> 

               <div class="form-group row">
                  <label for="Active" class="col-sm-3 col-form-label">Alumni</label>
                  <div class="col-sm-9">
                     <select class="form-control" id="is_active" name="is_active">
                        <option value="Farmasi">Farmasi</option> 
                        <option value="Kimia Industri">Kimia Industri</option>
                     </select>
                  </div>
               </div>

            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-sm btn-primary" onclick="save()" id="btn_save">Simpan</button>
         </div>
      </div>
   </div>
</div>

<script type="text/javascript">

   let tableTestimoni;


   // Reload Button
  function reload_table(){
    tableTestimoni.ajax.reload(null, false);
  }

   // Save Button Modal
   function save(){
      $('#btn_save').text('Saving...');
      $('#btn_save').attr('disabled', true);

      $.ajax({
         type: 'post',
         dataType: 'json',
         url: '<?= base_url('back/testimoni/action') ?>',
         data: $('#form').serialize(),
         success: function(data){
            if(data.status){
               $('#modalTestimoni').modal('hide');
               Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  showConfirmButton: true
               });
               tableTestimoni.draw();
            }
            $('#btn_save').text('Simpan');
            $('#btn_save').attr('disabled', false);
         },
         error: function(){
            Swal.fire({
               icon: 'error',
               title: 'Oops...',
               text: 'Terjadi Suatu Kesalahan!',
               showConfirmButton: true
            });
            $('#modalTestimoni').modal('hide');
            $('#btn_save').text('Simpan');
            $('#btn_save').attr('disabled', false);
         }
      }); 
   }

   // Add Menu
   function add_testimoni(){
      $('#form')[0].reset();
      $('.modal-title').text('Tambah Testimoni');
      $('#modalTestimoni').modal('show');
   }


   // Delete Menu
   function delete_testimoni(id){
      Swal.fire({
         title: 'Apakah anda yakin?',
         icon: 'warning',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         cancelButtonColor: '#d33',
         confirmButtonText: 'Hapus!'
         }).then((result) => {
         if (result.value) {
            $.ajax({
               type: 'post',
               dataType: 'json',
               url: '<?= base_url('back/testimoni/delete'); ?>',
               data: {
                  id: id
               },
               success: function(data){
                  if(data.status){
                     tableTestimoni.row( $(this).parents('tr') ).remove().draw();
                     $('#modalTestimoni').modal('hide');
                     Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        showConfirmButton: true
                     });
                  }
               },
               error: function(){
                  $('#modalTestimoni').modal('hide');
                  Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'Terjadi Suatu Kesalahan!',
                     showConfirmButton: true
                  });
               }
            });
         }
      });
   }

</script>