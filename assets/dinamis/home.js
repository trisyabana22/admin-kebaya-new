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
		let id_kategori = $('#kategori-search').val();
		let nama_produk = $('#produk-search').val();
		let urutan = $('#urutkan').val();
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
					$("#produkna").append(`<div class="col-lg-3 col-sm-6 col-md-4 col-6">
									<a href="home/detail/${produk.id_produk}" style="color: #444444">
									  <div class="card mt-4 shadow-sm border border-white sudut">
										<div class="bg-food" style="background-image: url('assets/home/img/produk/${produk.gambar_produk}');">
											
										</div>
										<div class="card-body">
										  <h6 class="card-title line-clamp">${produk.nama_produk}</h6>
										  <p class="card-text"><b>Rp ${produk.harga_produk}</b></p>
										  <span class="badge badge-success">Stok 20 pcs</span>
										</div>
									  </div>
									</a>
								  </div>`);
				});
			} else {
				$('#produkna').html(`<div class="col-lg-12 col-sm-12 col-md-12 col-12 mt-4 text-center">
				<h4>Produk tidak tersedia :(</h4>
			  </div>`);
			}
		});
	}

	$("#portfolio-flters").on("click", function (params) {
		id_kategori = params.target.dataset.filter;
		nama_kategori = params.target.dataset.filter2;
		$("#kategori-search").val(id_kategori);
		$("#kategori").html(nama_kategori);
		getProduk();
	});

	$("#produk-search").on("keyup", () => {
		getProduk();
	});
	$("#urutkan").on("change", () => {
		getProduk();
	});
});
