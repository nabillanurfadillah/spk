// tombol-hapus
$('.hapussemua').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin ingin menghapus semua data?',
		text: "semua data mahasiswa akan dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Semua Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});