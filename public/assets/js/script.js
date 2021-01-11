$(document).on('click', '#btn-hapus', function() {  //bila dokumen di klik,dengan id btn-hapus jalankan fungsi didalan tanda {} dibawah ini 
    $('.modal-body #idSiswa').val($(this).data('id')); //cari di dalam modal-body yang mana terdapat idSiswa dengan value dari tombol yang di klik berisi 'id'
})

$(document).on('click', '#btn-edit', function() {  //bila dokumen di klik,dengan id btn-edit jalankan fungsi didalan tanda {} dibawah ini 
    $('.modal-body #id-siswa').val($(this).data('id')); //cari di dalam modal-body yang mana terdapat idSiswa dengan value dari tombol yang di klik berisi 'id'
    $('.modal-body #nisn').val($(this).data('nisn')); //cari di dalam modal-body yang mana terdapat nisn dengan value dari tombol yang di klik berisi 'nisn'
    $('.modal-body #nama').val($(this).data('nama')); //cari di dalam modal-body yang mana terdapat nama dengan value dari tombol yang di klik berisi 'nama'
})

$(document).ready(function() {
    $('#datatables').DataTable();
});