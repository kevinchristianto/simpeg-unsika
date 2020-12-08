/* ------------------------------------------------------------------------------
 *
 *  # Custom JS code
 *
 *  App's functionality JS
 *
 * ---------------------------------------------------------------------------- */

$(document).ready(function () {
	const baseUrl = $("base").attr("href");

	$(".modal").on("shown.bs.modal", function () {
		$(this).find("input[type=text]").first().focus();
	});

	$(".datatable-basic").DataTable({
		autoWidth: false,
		dom:
			'<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
		language: {
			search: "<span>Filter:</span> _INPUT_",
			lengthMenu: "<span>Show:</span> _MENU_",
			paginate: {
				first: "First",
				last: "Last",
				next: "→",
				previous: "←",
			},
		},
	});

	let tablePegawai = $(".datatable-pegawai").DataTable({
		autoWidth: false,
		dom:
			'<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
		language: {
			search: "<span>Filter:</span> _INPUT_",
			lengthMenu: "<span>Show:</span> _MENU_",
			paginate: {
				first: "First",
				last: "Last",
				next: "→",
				previous: "←",
			},
		},
		processing: true,
		serverSide: true,
		order: [[1, "asc"]],
		columnDefs: [
			{
				orderable: false,
				targets: [0, 7],
			},
		],
		ajax: {
			url: "/get-pegawai",
			type: "GET",
		},
		columns: [
			{ data: null },
			{
				data: function (data) {
					return data.nis || "-";
				},
			},
			{
				data: function (data) {
					return data.nama_pegawai || "-";
				},
			},
			{
				data: function (data) {
					const tempat = data.tempat_lahir || "-";
					let tgl;
					if (data.tgl_lahir) {
						tgl = new Date(data.tgl_lahir);
						const months = [
							"Januari",
							"Februari",
							"Maret",
							"April",
							"Mei",
							"Juni",
							"Juli",
							"Agustus",
							"September",
							"Oktober",
							"November",
							"Desember",
						];
						tgl =
							tgl.getDate() +
							" " +
							months[tgl.getMonth()] +
							" " +
							tgl.getFullYear();
					} else {
						tgl = "-";
					}

					return tempat + ", " + tgl;
				},
			},
			{
				data: function (data) {
					return data.no_telepon || "-";
				},
			},
			{
				data: function (data) {
					return data.nama_jabatan_pegawai || "-";
				},
			},
			{
				data: function (data) {
					return data.nama_status_pegawai || "-";
				},
			},
			{
				data: function (data) {
					return `
						<div class="btn-group">
							<button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Choose</button>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="${
									baseUrl + "/pegawai/" + data.nis
								}" class="dropdown-item"><i class="icon-info22"></i>Detail</a>
								<a href="#" class="dropdown-item"><i class="icon-pencil"></i>Ubah</a>
								<a href="#" class="dropdown-item"><i class="icon-trash"></i>Hapus</a>
							</div>
						</div>
					`;
				},
			},
		],
	});

	tablePegawai.on("draw.dt", function () {
		let pageInfo = $(".datatable-pegawai").DataTable().page.info();
		tablePegawai
			.column(0, {
				page: "current",
			})
			.nodes()
			.each(function (cell, i) {
				cell.innerHTML = i + 1 + pageInfo.start;
			});
	});

	// Add active class to submenu's parent
	$(".nav-item-submenu")
		.filter(function () {
			return $(this).find("a.active").length > 0;
		})
		.addClass("nav-item-open")
		.find(".nav-link")
		.first()
		.addClass("active")
		.next()
		.css("display", "block");

	$("select.form-control").select2();
});
