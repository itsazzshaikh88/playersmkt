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

const form = document.getElementById("newsletterForm");
const submit_btn = document.getElementById("submit-btn");
const btn_loader = `<i class="fa-solid fa-circle-notch fa-spin"></i> Please Wait ....`;
const btn_text = submit_btn.innerHTML;
const messsage_container = document.getElementById("alert-container");
const message_box = document.getElementById("alert-message");
async function subscribe_to_newsletter() {
	event.preventDefault();
	const formData = new FormData(form);
	// set loader
	submit_btn.innerHTML = btn_loader;
	submit_btn.setAttribute("disabled", true);
	messsage_container.classList.add("d-none");

	try {
		const response = await fetch(form.action, {
			method: form.method,
			body: formData,
		});

		if (!response.ok) {
			throw new Error(`HTTP error! Status: ${response.status}`);
		}
		const data = await response.json();
		messsage_container.classList.add("d-none");
		// redirect to account resgistered page
		showErrorMessage(data.message, data.class);
	} catch (error) {
		showErrorMessage(error, "danger");
	} finally {
		submit_btn.innerHTML = btn_text;
		submit_btn.removeAttribute("disabled");
	}
}

function showErrorMessage(message, class_name) {
	// remove all classes
	var classes = message_box.className.split(" ");
	// Filter out all classes except "alert"
	var filteredClasses = classes.filter(function (className) {
		return className === "alert";
	});
	// Set the class attribute of the div to only include "alert"
	message_box.className = filteredClasses.join(" ");
	// Add Message
	messsage_container.classList.remove("d-none");
	message_box.innerHTML = message;
	message_box.classList.add(`alert-${class_name}`);
	messsage_container.focus();
}

// for follow
