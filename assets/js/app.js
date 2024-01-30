function set_app_language(element){
	const selected_language = element.value;
	window.location = `${base_url}/setup/set_site_language/${selected_language}`;
}
