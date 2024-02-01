function set_app_language(element) {
	const selected_language = element.value;
	window.location = `${base_url}/setup/set_site_language/${selected_language}`;
}

function startInactivityTimer() {
	var timeoutDuration = 10; // 10 seconds
	var cookieName = "__plmkt_uat";
	var timeoutId;
	function resetTimer() {
		clearTimeout(timeoutId);
		timeoutId = setTimeout(function () {
			// Destroy the cookie
			document.cookie =
				cookieName + "=; path=/; expires=Thu, 01 Jan 1970 00:00:00 GMT";
			// Redirect to the login page (replace 'login.html' with your actual login page)
			window.location.replace("login/player");
		}, timeoutDuration * 1000); // Convert seconds to milliseconds
	}
	// Check if the cookie is present
	if (document.cookie.indexOf(cookieName + "=") !== -1) {
		// Start the timer if the cookie is present
		resetTimer();
		// Event listener for mouse movement
		document.addEventListener("mousemove", resetTimer);
	}
}
// startInactivityTimer();
