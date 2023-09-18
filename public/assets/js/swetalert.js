
function popup_delete (e) {
   return Swal.fire({
      title: 'Apa kau yakin?',
      text: "ingin menghapus data tersebut",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      cancelButtonText: 'Kembali',
      confirmButtonText: 'Hapus'
   }).then((result) => {
      if (result.isConfirmed) {
      e.target.submit();
      }
   })
}
