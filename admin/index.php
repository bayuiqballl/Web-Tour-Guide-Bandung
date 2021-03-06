<?php
session_start();

if (!isset($_SESSION['login'])) {
  echo "<script>
  document.location.href = 'login.php';
  </script>";
  exit;
}

require_once "view/header.php";
require_once "../core/init.php";


$wisata = query("SELECT * FROM populer");

?>

<div class="d-flex" id="wrapper">

  <?php
  require_once "sidebar.php";
  require_once "view/nav.php";
  ?>



  <div class="container-fluid">
    <h1 class="mt-4">Data Bandung Tour Guide</h1><br>
    <br>
    <a class="btn btn-primary" href="add.php">Tambah Data</a>
    <br><br>
    <table class="table">

      <thead class="thead-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Judul</th>
          <th scope="col">Gambar</th>
          <th scope="col">isi</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($wisata as $row) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $row["judul"]; ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"> </td>
            <td><?= $row["isi"]; ?></td>
            <td>
              <a class="btn btn-warning" href="edit.php?id=<?= $row["id"]; ?>">edit</a> |
              <a class="btn btn-danger" href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->



<?php require_once "view/footer.php"; ?>