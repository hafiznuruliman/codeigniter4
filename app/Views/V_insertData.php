<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Form Mahasiswa</title>
</head>
<body>
<div
    class="p-1 text-center bg-image"
    style="
      background-image: url('https://i0.wp.com/dianisa.com/wp-content/uploads/2022/12/2.-Wallpaper-HD-Landscape-Desktop-Keren.jpg?resize=1000%2C600&ssl=1');
      height: 500px;
    "
  >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="text-white">
                <h1>Form Mahasiswa</h1>
                <form action="<?php echo base_url('data/saveData')?>" method="post">
                    <div class="form-group">
                    <div class="text-white">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="form-group">
                    <div class="text-white">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                    <div class="text-white">
                        <label for="fakultas">Fakultas</label>
                        <input type="text" class="form-control" id="fakultas" name="fakultas" required>
                    </div>
                    <div class="form-group">
                    <div class="text-white">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Load Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>