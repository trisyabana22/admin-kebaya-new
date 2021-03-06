function previewFile() {
	const preview = document.querySelector('#gbrprodukna');
	const file = document.querySelector('input[type=file]').files[0];
	const reader = new FileReader();
	document.querySelector('#nama_gambar').innerHTML = file.name;

	reader.addEventListener("load", function () {
		// convert image file to base64 string
		preview.src = reader.result;
	}, false);

	if (file) {
		reader.readAsDataURL(file);
	}
}

function previewFile2() {
	const preview = document.querySelector('#gbrprodukna2');
	const file = document.querySelector('#gambar_produk2').files[0];
	const reader = new FileReader();
	document.querySelector('#nama_gambar2').innerHTML = file.name;

	reader.addEventListener("load", function () {
		// convert image file to base64 string
		preview.src = reader.result;
	}, false);

	if (file) {
		reader.readAsDataURL(file);
	}
}

$(document).ready(function () {
	getProduk();

	function getProduk(params) {
		$('#produkna').html(`<div class="col-lg-12 col-sm-12 col-md-12 col-12 mt-4 text-center">
		<div class="spinner-border text-success" role="status">
  			<span class="sr-only">Loading...</span>
		</div>
	  </div>`);
		let i = 0;
		setInterval(function () {
			i++;
			if (i == 1) {
				getProduk2();
			}
		}, 1000);
	}


	function getProduk2() {
		let id_kategori = '_';
		let nama_produk = $('#produk-search').val();
		let urutan = '';
		$('#pencarian').html(nama_produk);
		if (nama_produk == '') {
			nama_produk = '_'
		}
		let str = nama_produk.replace(" ", "_");

		$.getJSON(`produk/produk/${id_kategori}/${str}/${urutan}`, (data) => {
			$("#load-produk").hide();
			$("#produkna").html("");
			if (data.length > 0) {
				$.each(data, (i, produk) => {
					// console.log(produk);
					$("#produkna").append(`<div class="col-md-3 col-sm-6 col-12">
					<div class="card">
					  <img src="assets/home/img/produk/${produk.gambar_produk}" style="width: 100%; height:200px;object-fit:cover;object-position:top;" alt="">
					  <div class="card-body">
						<h4 class="line-clamp-1">${produk.nama_produk}</h4>
						<h6 class="line-clamp-2">${produk.nama_kategori}</h6>
						<h6 class="line-clamp ">${produk.deskripsi}</h6>
						<h6 class="line-clamp ">Bahan : ${produk.bahan}</h6>
			
						<div class="col-sm-12 mt-4">
						  <div class="button-group text-center">
							<button type="button" class="btn btn-sm btn-primary" id="btn_edit" data-id_produk="${produk.id_produk}"  data-nama_produk="${produk.nama_produk}" data-id_kategori="${produk.id_kategori}" data-bahan="${produk.bahan}" data-gambar_produk="${produk.gambar_produk}"  data-deskripsi="${produk.deskripsi}"  data-toggle="modal" data-animation="bounce" data-target=".edit-beranda"><i class="dripicons-pencil"></i> Edit </button>
							<button type="button" class="btn btn-sm btn-danger" id="btn_remove" data-id="${produk.id_produk}" ><i class="dripicons-trash"></i> Hapus </button>
						  </div>
						</div>
			
			
			
					  </div>
					</div>
				  </div>`);
				});
			} else {
				$('#produkna').html(`<div class="col-lg-12 col-sm-12 col-md-12 col-12 mt-4 text-center">
				<h4>Produk tidak tersedia :(</h4>
			  </div>`);
			}
		});
	}

	// $("#portfolio-flters").on("click", function (params) {
	// 	id_kategori = params.target.dataset.filter;
	// 	nama_kategori = params.target.dataset.filter2;
	// 	$("#kategori-search").val(id_kategori);
	// 	$("#kategori").html(nama_kategori);
	// 	getProduk();
	// });

	$("#produk-search").on("keyup", () => {
		getProduk();
	});
	$("#btn-search").on("click", () => {
		getProduk();
	});


	$('#produkna').on('click', '#btn_edit', function (event) {
		event.preventDefault();
		console.log($(this).data());

		$('#gbrproduk').html(`<img id="gbrprodukna" src="assets/home/img/produk/${$(this).data('gambar_produk')}" alt="" width="30%">`);
		$('#nama_gambar').html($(this).data('gambar_produk'));
		$('#id_produk').val($(this).data('id_produk'));
		$('#nama_produk').val($(this).data('nama_produk'));
		$('#id_kategori').val($(this).data('id_kategori'));
		$('#bahan').val($(this).data('bahan'));
		$('#catatan').val($(this).data('deskripsi'));
		console.log($('#gambar_produk'));
	});



	$('#produkna').on('click', '#btn_remove', function (event) {
		event.preventDefault();
		var id_produk = $(this).data("id");
		var ask = swal({
			title: "Are you sure?",
			text: "You will not be able to recover this imaginary file!",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Yes, delete it!",
			cancelButtonText: "No, cancel plx!",
			closeOnConfirm: false,
			closeOnCancel: false,
			allowEnterKey: false,
			allowOutsideClick: false,
		}).then((result) => {
			if (result.value) {
				//-------------------BELUM FIX---------delete in foreign check please ----------------------------------------------
				$.post("Produk/delete", {
					id_produk: id_produk
				});
				Swal.fire({
					title: "Deleted!",
					text: "Your file has been deleted.",
					type: "success",
					showCancelButton: false,
					confirmButtonText: "OK",
					allowEnterKey: false,
					allowOutsideClick: false,
				})
				//-------------------BELUM FIX-------------------------------------------------------
				getProduk();
			}
		})
	});

	$('#e-form').on('submit').validate({
		ignore: "",
		rules: {

			kode_agama: {
				required: true
			},
			nama_agama: {
				required: true
			}
		},
		messages: {

			kode_agama: {
				required: '<small><font color="red">This field is required.</font></small>'
			},
			nama_agama: {
				required: '<small><font color="red">This field is required.</font></small>'
			}
		},

		submitHandler: function (form) {
			var formData = new FormData($('#e-form')[0]);

			$.ajax({
				type: 'POST',
				url: 'Produk/edit',
				data: formData,
				contentType: false,
				enctype: 'multipart/form-data',
				processData: false,
				success: function (resp) {
					$('.btnload').html('Save Changes');
					$('.btnload').prop('disabled', false);
				},
				beforeSend: function (resp) {
					$('.btnload').html('Load . . .');
					$('.btnload').prop('disabled', true);
				},
				complete: function (resp) {
					$(".modal #div1").show();
					$(".modal #div2").hide();
					var myJSON = JSON.stringify(resp);
					if (resp.responseText == 'true') {

						let timerInterval
						var ask = swal.fire({
							title: 'Selamat Data Berhasil diSimpan!',
							html: 'I will close in <b></b> milliseconds.',
							timer: 1500,
							timerProgressBar: true,
							onBeforeOpen: () => {
								Swal.showLoading()
								timerInterval = setInterval(() => {
									const content = Swal.getContent()
									if (content) {
										const b = content.querySelector('b')
										if (b) {
											b.textContent = Swal.getTimerLeft()
										}
									}
								}, 100)
							},
							onClose: () => {
								clearInterval(timerInterval)
							}
						}).then((result) => {
							/* Read more about handling dismissals below */
							if (result.dismiss === Swal.DismissReason.timer) {
								console.log('I was closed by the timer');
								// show_Produk();
								$('.btnload').html('Save Changes');
								$('.btnload').prop('disabled', false);
								getProduk();
								$('.modal').modal('hide');
							}
						})

					} else {
						// alert(myJSON);

						var ask = swal({
							icon: 'error',
							title: "Oops... Eror",
							html: resp.responseText,
							type: "warning",
							showCancelButton: true,
							confirmButtonColor: "#DD6B55",
							confirmButtonText: "Kirim Pesan Eror Ke Developer!",
							cancelButtonText: "Biarkan saja!",
							closeOnConfirm: false,
							closeOnCancel: false,
							customClass: 'swal-wide',
							width: '950px',
							allowEnterKey: false,
							allowOutsideClick: false,
						}).then((result) => {
							if (result.value) {
								//-------------------BELUM FIX---------delete in foreign check please ----------------------------------------------
								$.post("C_reporteror/savedata", {
									text: resp.responseText,
									menu: 'Produk/save'
								});
								Swal.fire({
									title: "Eror Dikirim!",
									text: "Terimakasi telah mengirim eror ke developer, kami akan menganalisis data eror.",
									type: "success",
									showCancelButton: false,
									confirmButtonText: "OK",
									allowEnterKey: false,
									allowOutsideClick: false
								})


								//-------------------BELUM FIX-------------------------------------------------------
								//-------------------BELUM FIX-------------------------------------------------------
								// $('.modal').modal('hide');
								//-------------------BELUM FIX-------------------------------------------------------
							} else {
								// $('.modal').modal('hide');
							}
						})
					}

					//
				}
			});
			return false;
		}
	});
	$('#i-form').on('submit').validate({
		ignore: "",
		rules: {

			kode_agama: {
				required: true
			},
			nama_agama: {
				required: true
			}
		},
		messages: {

			kode_agama: {
				required: '<small><font color="red">This field is required.</font></small>'
			},
			nama_agama: {
				required: '<small><font color="red">This field is required.</font></small>'
			}
		},

		submitHandler: function (form) {
			var formData = new FormData($('#i-form')[0]);

			$.ajax({
				type: 'POST',
				url: 'Produk/save',
				data: formData,
				contentType: false,
				enctype: 'multipart/form-data',
				processData: false,
				success: function (resp) {
					$('.btnload').html('Save Changes');
					$('.btnload').prop('disabled', false);
				},
				beforeSend: function (resp) {
					$('.btnload').html('Load . . .');
					$('.btnload').prop('disabled', true);
				},
				complete: function (resp) {
					$(".modal #div1").show();
					$(".modal #div2").hide();
					var myJSON = JSON.stringify(resp);
					if (resp.responseText == 'true') {

						let timerInterval
						var ask = swal.fire({
							title: 'Selamat Data Berhasil diSimpan!',
							html: 'I will close in <b></b> milliseconds.',
							timer: 1500,
							timerProgressBar: true,
							onBeforeOpen: () => {
								Swal.showLoading()
								timerInterval = setInterval(() => {
									const content = Swal.getContent()
									if (content) {
										const b = content.querySelector('b')
										if (b) {
											b.textContent = Swal.getTimerLeft()
										}
									}
								}, 100)
							},
							onClose: () => {
								clearInterval(timerInterval)
							}
						}).then((result) => {
							/* Read more about handling dismissals below */
							if (result.dismiss === Swal.DismissReason.timer) {
								console.log('I was closed by the timer');
								// show_Produk();
								$('.btnload').html('Save Changes');
								$('.btnload').prop('disabled', false);
								getProduk();
								$('.modal').modal('hide');
							}
						})

					} else {
						// alert(myJSON);

						var ask = swal({
							icon: 'error',
							title: "Oops... Eror",
							html: resp.responseText,
							type: "warning",
							showCancelButton: true,
							confirmButtonColor: "#DD6B55",
							confirmButtonText: "Kirim Pesan Eror Ke Developer!",
							cancelButtonText: "Biarkan saja!",
							closeOnConfirm: false,
							closeOnCancel: false,
							customClass: 'swal-wide',
							width: '950px',
							allowEnterKey: false,
							allowOutsideClick: false,
						}).then((result) => {
							if (result.value) {
								//-------------------BELUM FIX---------delete in foreign check please ----------------------------------------------
								$.post("C_reporteror/savedata", {
									text: resp.responseText,
									menu: 'Produk/save'
								});
								Swal.fire({
									title: "Eror Dikirim!",
									text: "Terimakasi telah mengirim eror ke developer, kami akan menganalisis data eror.",
									type: "success",
									showCancelButton: false,
									confirmButtonText: "OK",
									allowEnterKey: false,
									allowOutsideClick: false
								})


								//-------------------BELUM FIX-------------------------------------------------------
								//-------------------BELUM FIX-------------------------------------------------------
								// $('.modal').modal('hide');
								//-------------------BELUM FIX-------------------------------------------------------
							} else {
								// $('.modal').modal('hide');
							}
						})
					}

					//
				}
			});
			return false;
		}
	});
});
