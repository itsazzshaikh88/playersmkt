function followClub(user_type, following_to, followed_by, followedType) {
	let url = base_url + "account/follow";
	let loader = '<i class="fa fa-spinner"></i> Wait ...';

	// Find the button related to the followed club
	let followButton = $(
		`.follow-btn[data-club-name="${following_to}-${user_type}"]`
	);


	let followType = "follow";

	$.ajax({
		url: url,
		method: "POST",
		data: {
			user_type,
			following_to,
			followed_by,
			followedType,
			followType,
		},
		dataType: "json",
		beforeSend: function () {
			followButton.html(loader);
		},
		success: function (data) {
			if (data["status"] == 0) {
				followButton.attr(
					"onclick",
					`unfollowClub('${user_type}', '${following_to}', '${followed_by}','${followedType}')`
				);
				followButton.html('<i class="fa fa-plus" style = "right:3px; top:3px;"></i>');
				followButton.attr(
					"class",
					"btn btn-primary follow-btn bg-primary"
				);
				
			} else if (data["status"] == 2) {
				followButton.attr(
					"onclick",
					`followClub('${user_type}', '${following_to}', '${followed_by}','${followedType})`
				);
				followButton.html('<i class="fa fa-plus" style = "right:3px; top:3px;"></i>');
				followButton.attr("class", "btn btn-primary follow-btn");
			} else {
				alert("Failed to perform action");
			}
            location.reload()
		},
		error: function () {
			alert("Error in the AJAX request");
		},
	});
}

function unfollowClub(userType, followingTo, followedBy, followedType) {
	let url = base_url + "account/follow"; // Assuming 1 is the action for unfollow
	let loader = '<i class="fa fa-spinner"></i> Wait ...';

	// Find the button related to the followed club
	let followButton = $(
		`.follow-btn[data-club-name="${followingTo}-${userType}"]`
	);
	let followType = "unfollow";

	$.ajax({
		url: url,
		method: "POST",
		data: {
			user_type: userType,
			following_to: followingTo,
			followed_by: followedBy,
			followType: followType,
			followedType: followedType,
		},
		beforeSend: function () {
			followButton.html(loader);
		},
		success: function (data) {
			if (data === "3") {
				alert("Failed to unfollow");
			} else {
				followButton.attr(
					"onclick",
					`followClub('${userType}', '${followingTo}', '${followedBy}','${followedType}')`
				);

				followButton.attr("class", "btn btn-primary follow-btn");
				followButton.html('<i class="fa fa-x" style = "right:4px; top:2px;"></i>');
				
			}
            location.reload()
		},
		// error: function () {
		// 	alert("Error in the AJAX request");
		// },
	});
}