const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal({
        title: 'ok terimakasih' ,
        text: 'data berhasil' + flashData ,
        type: 'succes'
    })
}
$('hapus-databelanja').on('click',function(e){
    e.preventDefault();

    const href = $(this).attr('href');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
         document.location.href = href;
        }
      })
});