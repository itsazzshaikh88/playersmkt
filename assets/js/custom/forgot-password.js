const form = document.getElementById("form");
const submit_btn = document.getElementById("submit-btn");
const btn_loader = `<i class="fa-solid fa-circle-notch fa-spin"></i> Logging In ....`;
const btn_text = submit_btn.innerHTML;
const messsage_container = document.getElementById("alert-container");
const message_box = document.getElementById("alert-message");
async function validate() {
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
		if (data.status == "fail") {
			showErrorMessage(data.message, data.class);
		} else if (data.status == "success") {
			window.location = data.url;
		} else {
			showErrorMessage(data.message, data.class);
		}
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
		return className === "alert" || className === "text-center";
	});
	// Set the class attribute of the div to only include "alert"
	message_box.className = filteredClasses.join(" ");
	// Add Message
	messsage_container.classList.remove("d-none");
	message_box.innerHTML = message;
	message_box.classList.add(`alert-${class_name}`);
	messsage_container.focus();
}
