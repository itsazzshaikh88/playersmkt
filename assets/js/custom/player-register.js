const form = document.getElementById("form");
const submit_btn = document.getElementById("submit-btn");
const btn_loader = `<i class="fa-solid fa-circle-notch fa-spin"></i> Creating Account, Please Wait ....`;
const btn_text = submit_btn.innerHTML;
const messsage_container = document.getElementById("message-container");
const message_box = document.getElementById("message-box");
async function submitForm() {
	event.preventDefault();
	const formData = new FormData(form);
	// set loader
	submit_btn.innerHTML = btn_loader;
	submit_btn.setAttribute("disabled", true);
	messsage_container.classList.add("d-none");
	const password_checked = validatePassword();
	if (!password_checked) {
		showErrorMessage(`Password and Confirm Password Not Matched`);
		submit_btn.innerHTML = btn_text;
		submit_btn.removeAttribute("disabled");
		return;
	}

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
		if (data.status_text == "fail") {
			showErrorMessage(data.message);
		} else if (data.status_text == "success") {
			window.location = data.url;
		}
	} catch (error) {
		showErrorMessage(error);
	} finally {
		submit_btn.innerHTML = btn_text;
		submit_btn.removeAttribute("disabled");
	}
}

function validatePassword() {
	const password = document.getElementById("password").value;
	const confirm_password = document.getElementById("con_password").value;

	if (password != "" && confirm_password != "" && password === confirm_password)
		return true;
	else return false;
}

function showErrorMessage(message) {
	messsage_container.classList.remove("d-none");
	message_box.innerHTML = message;
	messsage_container.focus();
}
