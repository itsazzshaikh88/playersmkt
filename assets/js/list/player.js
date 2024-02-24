let FetchList = (scroll) => {
	let country = document.getElementById("country").value;
	let sport_id = document.getElementById("sport").value;
	
	$.ajax({
		url: base_url + "Players/list",
		method: "GET",
		data: { country, sport_id },
		dataType: "json",
		success: function (data) {
			let str = "";
		
			if (data["list"].length > 0) {
				data["list"].forEach((element) => {
					console.log(element);
					const invalid = [null, "", "-", " ", undefined];
					let pp = invalid.includes(element.profile_photo)
						? "images/default-listing.png"
						: element.profile_photo;
					let position =
						element.position_name == null ? "-" : element.position_name;

					str += `
					<div class="col-xl-4 col-lg-4 col-md-3">
                    	<div class="item-player">
                    	    <div class="head-player">
                    	        <img src="${pp}" alt="location-team">
                    	    </div>
                    	    <div class="info-player">
                    	        <span class="number-player">
									10
                    	        </span>
                    	        <h4>
                    	        ${element.player_id}
                    	            <span>${position}</span>
                    	        </h4>
                    	        <ul>
                    	        <li>
                    	        <strong>Country</strong> <span>${element.country}</span>
                    	        </li>
                    	        <li><strong>City:</strong> <span>${element.city}</span></li>
                    	        <li><strong>AGE:</strong> <span>${"-"}</span></li>
                    	        </ul>
                    	    </div>
                    	    <a href="players/profile/details?p-id=${element.player_id}&id=${element.id}&source=listing" class="btn">View Player <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    	</div>
                	</div>`;
					});

				// Append instead of replacing HTML
				$("#player_list").append(str);
				
			} else {
				$("#player_list").html(`<tr style="margin-left:200px">
                    <td class="text-center"> <img src="${base_url + "img/nodatafound.png"}" width="500px"></td><td><h6 class="text-danger">Data Not Found</h6></td>
                </tr>`);
			}
		},
	});
};

// Calling FetchList function with an initial call
FetchList();

// let FetchPosition = () => {
// 	let sport_id = document.getElementById("sport").value;

// 	console.log(sport_id);

// 	$.ajax({
// 		url: base_url + "Players/position/",
// 		method: "GET",
// 		data: { id: sport_id },
// 		dataType: "json",
// 		success: function (data) {
// 			let str = '<option value="">Select Position</option>';

// 			data.forEach((element) => {
// 				str += `<option value="${element.id}">${element.position_name}</option>`;
// 			});

// 			$("#position").html(str);
// 		},
// 	});
// };

// function SeeMore() {
// 	FetchList(1);
// }



//Ansari Kamran
// follow


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