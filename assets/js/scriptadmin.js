const flashDataAdmin = $('.flash-data-admin').data('flashdataadmin');

if (flashDataAdmin) {
	Swal.fire({
		title: 'Data Admin ',
		text: 'Berhasil ' + flashDataAdmin,
		type: 'success'
	});
}

// tombol-hapus
$('.hapusadmin').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "data admin akan dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});