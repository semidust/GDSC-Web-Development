<?php 

$title = 'Edit Data';
include 'layout/header.php'; 
$data_mahasiswa = select("SELECT * FROM mahasiswa");

?>
 
  <div class="container mt-4">
    <h3>Edit Data</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>KOM</th>
                <th>Aksi</th>
            </tr>   
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach($data_mahasiswa as $mahasiswa) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $mahasiswa['id_mhs']; ?></td>
                <td><?php echo $mahasiswa['nama']; ?></td>
                <td><?php echo $mahasiswa['prodi']; ?></td>
                <td><?php echo $mahasiswa['kom']; ?></td>
                <td style="width:30%;">
                    <a href="detail-data.php?id_mhs=<?= $mahasiswa['id_mhs'];?>" class="btn btn-dark">
                        <i class="fa-solid fa-magnifying-glass"></i> Detail
                    </a>
                    <a href="ubah-data.php?id_mhs=<?php echo $mahasiswa['id_mhs'];?>" class="btn btn-success">
                        <i class="fa-solid fa-pen-to-square"></i> Ubah
                    </a>
                    <a href="hapus-data.php?id_mhs=<?= $mahasiswa['id_mhs'];?>" class="btn btn-danger" 
                        onclick="return confirm('Apakah ingin menghapus data ini?');">
                        <i class="fa-solid fa-trash"></i> Hapus
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
  </div>
  
<?php include 'layout/footer.php'; ?>