<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pendaftaran Santri Baru</title>
  
  <!-- gambar title -->
  <link rel="icon" type="image/png" href="assets/img/lg_ds.png">

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- css datepicker -->
  <link href="assets/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">

  <style>
    .img-logo {
      max-height: 120px;
      margin-bottom: 20px;
    }
  </style>

</head>

<body class="bg-gradient-success">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                <div class="text-center">
                  <img src="assets/img/logo_ds.png" alt="logo" class="img-logo">
                  <h1 class="h4 text-gray-900 mb-4">Daftar Akun Santri Baru</h1>
                </div>
                <form class="user" action="daftar_control.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat lahir" name="tempat_lahir">
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="text" class="form-control datepicker" id="tanggal_lahir" placeholder="Tanggal Lahir"  name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="lk" value="L">
                                <label class="form-check-label" for="lk">
                                    Laki Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="pr" value="P">
                                <label class="form-check-label" for="pr">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="jenis_program">Jenis Program</label>
                            <select name="jenis_program" id="jenis_program" class="form-control">
                                <option value="" disabled selected>-- Pilih Jenis Program --</option>
                                <option value="Bahasa Arab">Bahasa Arab</option>
                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                <option value="Kitab">Kitab</option>
                                <option value="Tahfidz">Tahfidz</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="anak_ke">Anak Ke</label>
                            <input type="text" class="form-control" id="anak_ke" placeholder="Anak Ke" name="anak_ke">
                        </div>
                        <div class="col-md-6">
                            <label for="jml_saudara">Jumlah Saudara</label>
                            <input type="text" class="form-control" id="jml_saudara" placeholder="Jumlah Saudara" name="jml_saudara">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" class="form-control" id="asal_sekolah" placeholder="Masukkan Asal Sekolah" name="asal_sekolah">
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <label for="telepon">Telepon/WA</label>
                            <input name="telepon" type="text" class="form-control" id="telepon" placeholder="Telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <label for="ulangi_password">Ulangi Password</label>
                            <input name="ulangi_password" type="password" class="form-control" id="ulangi_password" placeholder="Ulangi Password">
                        </div>
                    </div>

                    <button name="btn_registrasi" value="simpan" class="btn btn-success btn-user btn-block">
                      Registrasi
                    </button>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="login.php">Sudah punya akun ? Login!</a>
                </div>
            </div> 
        </div>
        </div>
    </div>

      </div>

    </div>

  </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    
    <!-- js datepicker -->
    <script src="assets/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
    $(function(){
        $(".datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
        });
    });
    </script>


</body>

</html>