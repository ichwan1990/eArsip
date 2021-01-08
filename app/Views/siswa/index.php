<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 my-3 text-gray-800"><?= $judul; ?></h1>
    <div class="card">
        <div class="card-body">
            <!-- Page Heading -->

            <a name="" id="" class="btn btn-primary my-3" href="#" role="button">Tambah Data</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NISN</th>
                        <th>NAMA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($siswa->getResultArray()  as $row) : ?>
                        <tr>
                            <td scope="row"><?= $i; ?></td>
                            <td><?= $row['nisn']; ?></td>
                            <td><?= $row['nama']; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->