$(document).ready(function () {
	$('#ukuran').on('change', ukuran => {
		let id_stok = $('#ukuran').val();
		$.getJSON(`../../home/stok_detail/${id_stok}`, (data) => {
			console.log(data);
			$('#stokna').html(`<b>Stok :</b> ${data.stok} Pcs`);
			$('#hargana').html(`<b>Harga :</b> Rp ${data.harga}`);

		});
	})
});
