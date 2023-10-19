<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Parkir Kendaraan</title>
  </head>

  <body>

  <body style="background-image: url('wall2.jpeg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header" align='center'>
              KENDARAAN
            </div>
            <div class="card-body">
              <a href="tambah-parkir.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA KENDARAAN</a>
              <a href="log-out.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">Logout</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">Plat Nomor Kendaraan</th>
                    <th scope="col">Jenis Kendaraan</th>
                    <th scope="col">Nama Kendaraan</th>
                    <th scope="col">Jam Masuk</th>
                    <th scope="col">Jam Keluar</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM parkiran ");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                   
                      <td><?php echo $row['plat_kendaraan'] ?></td>
                      <td><?php echo $row['jenis_kendaraan'] ?></td>
                      <td><?php echo $row['nama_kendaraan'] ?></td>
                      <td><?php echo $row['jam_masuk'] ?></td>
                      <td><?php echo $row['jam_keluar'] ?></td>
                      <td class="text-center">
                        <!-- INI YG NANTI DIPASTE YAA -->
                        <a href="editparkir.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="updatejam.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">JAM</a>
                        <a href="hapuskendaraan.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td> 
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>