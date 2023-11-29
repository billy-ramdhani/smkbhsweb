<script type="text/javascript">

    let tableprofil;
    let base_url = '<?= base_url();?>';

    //show table
    $(document).ready(function(){

tableprofil = $('#tableprofil').DataTable({
   processing: true,
   serverSide: true,
   order: [],
   ajax: {
      'url': "<?= base_url('back/profil/ajax_list') ?>",
      'type': "POST"
   },
   columnDefs: [
      { 
         'targets': [ 0, 1, 2 ], 
         'orderable': false, 
      }
   ],
});

});

// Reload Table
function reload_table(){
      tableprofil.ajax.reload(null, false);
   }

   //Edit  
   function edit_profil(id){
      $('#form')[0].reset();
      $.ajax({
         url : '<?= base_url('back/profil/get_data/') ?>',
         data: {id: id},
         type: 'post',
         dataType: 'json',
         success: function(data){
            $('[name="id"]').val(data.id);
            $('[name="judul"]').val(data.judul);
            $('[name="deskripsi"]').val(data.deskripsi);

            $('.modal-title').text('Edit Profil Website');
            $('#modalprofil').modal('show');
         },
      });
   }

   // Save Button Modal
   function save(){
      $('#btn_save').text('Saving...');
      $('#btn_save').attr('disabled', true);

      var formData = new FormData($('#form')[0]);
      
      $.ajax({
         url: '<?= base_url('back/profil/update')?>',
         type: 'post',
         data: formData,
         contentType: false,
         processData: false,
         dataType: 'json',
         success: function(data){
            if(data.status){
               $('#modalprofil').modal('hide');
               Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  showConfirmButton: true
               });
               tableprofil.draw();
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
            $('#modalprofil').modal('hide');
            $('#btn_save').text('Simpan');
            $('#btn_save').attr('disabled', false);
         }
      }); 
   }

</script>
