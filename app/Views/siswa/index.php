<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

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
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->