function Heart(rowIdx, id, type) {

	let loader = `<div class="spinner-border" role="status">
	<span class="sr-only">Loading...</span>
  </div>`;

	$.ajax({
		url: base_url + "wishlist/add",
		method: "GET",
		data: { id, type },
		dataType: "json",
		beforeSend: function () {
			$("#heart" + rowIdx).html(loader);
		},
		success: function (res) {

			if(res['status'] == 1)
			{
				$("#heart" + rowIdx).toggleClass("is-active");
				$("#heart" + rowIdx).attr("onclick","UnHeart('"+rowIdx+"','"+id+"','"+type+"')");

			}

		}
	});

}

function UnHeart(rowIdx, id, type) {

	let loader = `<div class="spinner-border" role="status">
	<span class="sr-only">Loading...</span>
  </div>`;

	$.ajax({
		url: base_url + "wishlist/remove",
		method: "GET",
		data: { id, type },
		dataType: "json",
		beforeSend: function () {
			$("#heart" + rowIdx).html(loader);
		},
		success: function (res) {

			if(res['status'] == 1)
			{
				$("#heart" + rowIdx).removeClass("is-active");
				$("#heart" + rowIdx).attr("onclick",`Heart('${rowIdx}','${id}','${type}')`);

			}

		}
	});

}