const flashDataSubKriteria = $('.flash-data-subkriteria').data('flashdatasubkriteria');

if (flashDataSubKriteria) {
	Swal.fire({
		title: 'Data Sub Kriteria ',
		text: 'Berhasil ' + flashDataSubKriteria,
		type: 'success'
	});
}

// tombol-hapus
$('.tombol-hapus-kriteria').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "data sub kriteria akan dihapus",
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
