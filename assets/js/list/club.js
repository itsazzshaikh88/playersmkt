let FetchList = (scroll) => {
	let club_country = document.getElementById("country").value;
	let club_sports = document.getElementById("sport").value;
	let rowcount = document.getElementById("rowcountClub").value;
	
	$.ajax({
		url: base_url + "Clubs/fetch_clubs",
		method: "GET",
		data: { club_country, club_sports, rowcount, scroll },
		dataType: "json",
		beforeSend: function () {
			$("#clubs_list").html(`<div class="spinner-border m-5" role="status">
		<span class="sr-only">Loading...</span>
	  </div>`);
		},
		success: function (data) {
			let str = "";

			if (data["list"].length > 0) {
				data["list"].forEach((element) => {
					let flag = "img/bydefaultflag.png";
					let country = element.club_country == "" ? "-" : element.club_country;
					let sport = element.sport_name == null ? "-" : element.sport_name;
					let city = element.club_city == "" || null ? "-" : element.club_city;
					const invalid = [null, "", "-", " ", undefined];
					let pp = invalid.includes(element.profile_picture)
						? "img/bydefaultclub.png"
						: element.profile_picture;

					str += `<div class="col-md-6 col-lg-4 col-xl-3 group-a">
				<div class="item-team card">
					<div class="head-team">
						<img src="${pp}" alt="location-team">
					</div>
					<div class="info-team">
						<span class="logo-team">
							<img src="${flag}" alt="logo-team">
						</span>
						<h4>${country}</h4>
						<span class="location-team">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							${city}
						</span>
						<span class="group-team">
							<i class="fas fa-volleyball-ball" aria-hidden="true"></i>
							${sport}
						</span>
						<a href="#" class="btn"><i class="fa fa-user" aria-hidden="true"></i>
						${element.club_id}</a>
					</div>
				</div>
			</div>`;
				});

				$("#club_list").html(str);

			} else {
				$("#club_list").html(`<tr style="margin-left:200px">
			<td class="text-center"> <img src="${
				base_url + "img/nodatafound.png"
			}" width="500px"></td><td><h6 class="text-danger">Data Not Found</h6></td>
			</tr>`);
			}
		},
	});
};

FetchList();

function SeeMore() {
	FetchList(1);
}
