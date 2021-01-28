<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 my-3 text-gray-800"><?= $judul; ?></h1>

    <div class="card">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#modalTambah">
                <i class="fa  fa-plus"></i>
                Tambah Surat Masuk
            </button>

        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-responsive" id="datatables">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>No. Surat </br> Tgl. Surat</th>
                        <th>Asal Surat</th>
                        <th>Perihal</th>
                        <th>Isi Ringkasan </br> File</th>
                        <th>Sifat</th>
                        <th><i class="fa fa-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-sm ">
                        <td>1.</td>
                        <td>
                            022/KOM.PER/RSU-MP/VI/2020
                            <hr>
                            23 Juni 2020
                        </td>
                        <td>
                            <p>
                                Komite Keperawatan
                            </p>
                        </td>
                        <td>
                            <p>
                                Surat Permohonan Pembuatan Aplikasi Untuk 3S (SDKI-SLKI-SIKI) di Komputerscope="col"
                            </p>
                        </td>
                        <td>
                            <p>
                                Permohonan Pembuatan Aplikasi
                            </p>
                            <hr>
                            File : <a href="#">Download</a>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-secondary btn-sm btn-block">Biasa</button>
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" data-toggle="modal" data-target="#modalUbah" id="btn-edit" class="btn btn-sm btn-success">
                                    <i class="fa fa-edit"></i>
                                </button>

                                <button type="button" data-toggle="modal" data-target="#modalHapus" id="btn-hapus" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-outline-secondary btn-sm btn-block">Belum Ada Disposisi</button>
                        </td>
                    </tr>
                    <tr class="text-sm ">
                        <td>2.</td>
                        <td>
                            019/KOM.PER/RSU-MP/VI/2020
                            <hr>
                            25 Juni 2020
                        </td>
                        <td>
                            <p>
                                Komite Keperawatan
                            </p>
                        </td>
                        <td>
                            <p>
                                Surat Permohonan Pembuatan Aplikasi Untuk 3S (SDKI-SLKI-SIKI) di Komputer
                            </p>
                        </td>
                        <td>
                            <p>
                                Permohonan Pembuatan Aplikasi
                            </p>
                            <hr>
                            File : <a href="#">Download</a>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm btn-block">Penting</button>
                        </td>
                        <td class="text-center ">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" data-toggle="modal" data-target="#modalUbah" id="btn-edit" class="btn btn-sm btn-success">
                                    <i class="fa fa-edit"></i>
                                </button>

                                <button type="button" data-toggle="modal" data-target="#modalHapus" id="btn-hapus" class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-primary btn-sm btn-block">
                                <i class="fa fa-file-alt"></i>
                                Lihat Disposisi
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">

        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade " id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    Add rows here
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#modalTambah').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM

    });
</script>