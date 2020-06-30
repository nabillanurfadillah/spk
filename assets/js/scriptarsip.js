const flashDataArsip = $('.flash-data-arsip').data('flashdataarsip');

if (flashDataArsip) {
	Swal.fire({
		title: 'Data',
		text: 'Berhasil ' + flashDataArsip,
		type: 'success'
	});
}

// tombol-hapus
$('.hapus-arsip').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin?',
		text: "arsip akan dihapus",
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
