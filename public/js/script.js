$(function () {
    
    $('.tombolTambahData').on('click', function () {


        $('#judulModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Save');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/tambah');
        $('#nama').val('');
        $('#npm').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');

    });

    $('.tampilModalUbah').on('click', function () {
    //    console.log('ok');
        $('#judulModalLabel').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
            data: {id :id},
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);  
                $('#npm').val(data.npm);  
                $('#email').val(data.email);  
                $('#jurusan').val(data.jurusan);  
                $('#id').val(data.id);  

                // console.log(data);
                
                              
            }
            
        });

    });

})