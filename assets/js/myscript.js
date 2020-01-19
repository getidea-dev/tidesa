

const flashdata = $('.flash-data').data('flashdata');
  console.log(flashdata)
if (flashdata) {
  swal({
    title: 'Registrasi',
    text: 'Berhasil' + flashdata,
    type: 'success'
  })
} 