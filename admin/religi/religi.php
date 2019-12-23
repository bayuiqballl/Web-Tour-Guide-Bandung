<?php require_once "view/header.php"; ?>
<?php require_once 'func.php'; ?>
<div class="d-flex" id="wrapper">

  <?php require_once "sidebar.php";
  require_once "view/nav.php";
  require_once "func.php";

  $religi = query("SELECT * FROM religi");

  ?>



  <div class="container-fluid">
    <h1 class="mt-4">Data Bandung Tour Guide</h1><br>
    <a href="add.php" class="btn btn-primary">Tambah Data</a>
    <br><br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Judul</th>
          <th scope="col">Gambar</th>
          <th scope="col">Isi</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($religi as $row) : ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $row['judul']; ?></td>
            <td><img src="img/<?= $row['gambar']; ?>" alt="" width="50"></td>
            <td><?= $row['isi']; ?></td>
            <td>
              <a class="btn btn-warning" href="edit.php?id=<?= $row["id"]; ?>">edit</a> |
              <a class="btn btn-danger" href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
            </td>
          </tr>
          <? $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<?php require_once "view/footer.php"; ?>