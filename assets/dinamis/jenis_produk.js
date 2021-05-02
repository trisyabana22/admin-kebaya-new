$(document).ready(function () {
	$("#tb_data").dataTable({
		"bLengthChange": true,
		"responsive": true,
		"bSort": true,
		"bProcessing": false,
		"bDeferRender": true,
		"aoColumns": [{
				"sWidth": "3%",
				"sClass": "center",
				"bSortable": true
			},
			{
				"sWidth": "40%",
				"sClass": "center",
				"bSortable": true
			},
			{
				"sWidth": "20%",
				"sClass": "left",
				"bSortable": true
			},
			{
				"sWidth": "20%",
				"sClass": "left",
				"bSortable": true
			},
		],
		//"sDom": '<"top"fp>rt<"clear">', 
		"sDom": 'Bfrtip',
		"buttons": [],
		"sAjaxSource": "jenis_produk/load_jenis_produk",
		"bServerSide": false,
		"sServerMethod": "POST",
		"aaSorting": [
			[0, 'asc']
		],
		"fnDrawCallback": function (oSettings) {
			$('[data-tooltip="true"]').tooltip();
		},
		"bAutoWidth": false
	});

	$('#tb_data').on('click', 'td #btn_remove', function (event) {
		event.preventDefault();
		var id_kategori = $(this).data("id");
		console.log($(this).data());
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
				$.post("Jenis_produk/delete", {
					id_kategori: id_kategori
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
				// $("#tb_data").dataTable().fnReloadAjax('Jenis_produk/load_jenis_produk');
			}
			// $("#tb_data").dataTable().fnReloadAjax('Jenis_produk/load_jenis_produk');
		})
		$("#tb_data").dataTable().fnReloadAjax('Jenis_produk/load_jenis_produk');
	});

	$('#tb_data').on('click', 'td #btn_edit', function (event) {
		event.preventDefault();
		console.log($(this).data());
		$('#id_kategori').val($(this).data('id_kategori'));
		$('#nama_kategori').val($(this).data('nama_kategori'));
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
				url: 'Jenis_produk/edit',
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
								$("#tb_data").dataTable().fnReloadAjax('Jenis_produk/load_jenis_produk');
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
									menu: 'Detail_produk/save'
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
								$('.modal').modal('hide');
								//-------------------BELUM FIX-------------------------------------------------------
							} else {
								$('.modal').modal('hide');
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
				url: 'Jenis_produk/save',
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
								$("#tb_data").dataTable().fnReloadAjax('Jenis_produk/load_jenis_produk');
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
									menu: 'Jenis_produk/save'
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
								$('.modal').modal('hide');
								//-------------------BELUM FIX-------------------------------------------------------
							} else {
								$('.modal').modal('hide');
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
