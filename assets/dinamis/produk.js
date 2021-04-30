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

		$.getJSON(`home/produk/${id_kategori}/${str}/${urutan}`, (data) => {
			$("#load-produk").hide();
			$("#produkna").html("");
			if (data.length > 0) {
				$.each(data, (i, produk) => {
					// console.log(produk);
					$("#produkna").append(`<div class="col-md-3 col-12">
					<div class="card">
					  <img src="assets/home/img/produk/${produk.gambar_produk}" style="width: 100%; height:200px;object-fit:cover;object-position:top;" alt="">
					  <div class="card-body">
						<h4 class="line-clamp-1">${produk.nama_produk}</h4>
						<h6 class="line-clamp-2">${produk.nama_kategori}</h6>
						<h6 class="line-clamp ">${produk.deskripsi}</h6>
			
						<div class="col-sm-12 mt-4">
						  <div class="button-group text-center">
							<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-animation="bounce" data-target=".edit-beranda"><i class="dripicons-pencil"></i> Edit </button>
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
});
