<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin SMK BHS</title>
  <!-- Favicon -->
  <link href="<?php base_url() ?>assets/images/favicon/favicon.ico" rel="icon">


  <!-- Font Awesome -->
  <link href="<?= base_url("assets/back/vendors/fontawesome-free/css/all.min.css") ?>" rel="stylesheet" type="text/css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Datatables -->
  <link href="<?= base_url("assets/back/vendors/datatables/dataTables.bootstrap4.min.css") ?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?= base_url("assets/back/css/sb-admin-2.min.css") ?>" rel="stylesheet">
  <!-- CKeditor -->
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

  <link rel="stylesheet" href="<?= base_url("assets/back/vendors/summernote/dist/summernote-bs4.min.css") ?>">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('back/layouts/_sidebar') ?>

    <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('back/layouts/_navbar') ?>

        <!-- Begin Page Content -->
        <div class="container">

            <div class="row">
               <div class="col">
                  <h3 class="page-header">Tambah Kepegawaian</h3>
               </div>
            </div>

            <br>

            <?= form_open_multipart('back/kepegawaian/kepegawaian_upload') ?>
            
               <div class="form-group row">
                  <label for="title" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Nik</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="nik" id="nik" required>
                     </div>
               </div> 

               <div class="form-group row">
                  <label for="article" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Nama </label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" id="nama" required>
                  </div>
               </div>

               <div class="form-group row">
                  <label for="article" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Gelar </label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="gelar" id="gelar" required>
                  </div>
               </div>

               <div class="form-group row">
                  <label for="article" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Jenis Kelamin</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="jenis_kelamin">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                  </select>
                  </div>
               </div>

               <div class="form-group row">
                  <label for="article" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Email</label>
                  <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" id="email">
                  </div>
               </div>

               <div class="form-group row">
                  <label for="article" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Bidang Pelajaran </label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="bidang_pelajaran" id="bidang_pelajaran">
                  </div>
               </div>
               <div class="form-group row">
                  <label for="article" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Jabatan </label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="jabatan" id="jabatan">
                  </div>
               </div>
               
               <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Gambar</label>
                  <br>
                  <div class="col-sm-10">
                  <input class="btn" type="file" name="photo" accept="image/*" required />
                  </div>
               </div>

               <a href="<?= base_url('admin/kepegawaian') ?>" class="btn btn-sm btn-secondary">Kembali</a>
               <button type="submit" value="Upload" class="btn btn-sm btn-primary float-right">Simpan</button>

            <?= form_close() ?>
         
         </div>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view('back/layouts/_footer') ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
   </a>


   <!-- Core JavaScript-->
   <script src="<?= base_url("assets/back/vendors/jquery/jquery.min.js") ?>"></script>
   <script src="<?= base_url("assets/back/vendors/popper/popper.min.js") ?>"></script>
   <script src="<?= base_url("assets/back/vendors/bootstrap/js/bootstrap.min.js") ?>"></script>

   <!-- Core plugin JavaScript-->
   <script src="<?= base_url("assets/back/vendors/jquery-easing/jquery.easing.min.js") ?>"></script>
   <!-- Summernote -->
   <script src="<?= base_url("assets/back/vendors/summernote/dist/summernote-bs4.min.js") ?>"></script>

   <script>
   $('#summernote').summernote({
      height: 300,
   });
   </script>


</body>

</html>




