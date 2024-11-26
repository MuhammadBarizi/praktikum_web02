<?php 
include "header.php";
?>

<h2>Data Karyawan</h2>
<hr>
<div class="form-group">
  <span class="glyphicon glyphicon-plus"></span>
  <a href="karyawan_add.php">Tambah Data</a>
</div>
<hr>
<div class="table-responsive"></div>
<table class="table table-striped table-hover">
  <tr>
    <th>id</th>
    <th>Nik</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <th>Tanggal lahir</th>
    <th>No Telepon</th>
    <th>Jabatan</th>
    <th>Status</th>
    <th>Tools</th>
  </tr>
  <tr>
    <td>1</td>
    <td>8099001</td>
    <td>Fathul Hafidh </td>
    <td>Tanah Bumb4u</td>
    <td>6 8Januari 1990</td>
    <td>0981212</td>
    <td>Manajer</td>
    <td>Tetap</td>
    <td>
      <a href="karyawan_edit.php" class="btn btn-primary-btn-sm">
        <span class="glyphicon glyphicon-edit"></span>
      </a>
      <a href="karyawan_delete.php" title="Hapus Data" class="btn btn-danger btn-sm">
        <span class="glyphicon-glyphicon-trash" aria-hidden="true"></span>
      </a>
 
    </td>
  </tr>

</table>
</div>





<?php 
include "footer.php";
?>