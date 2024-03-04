
function InsertCustomForms(event,form_name)
{
    event.preventDefault(); // Prevent the default form submission

    // Get the form data
    var formData = new FormData(event.target);
    formData.append('table_name', form_name);

    let loader = '<i class="fa fa-spinner"></i> Wait ...';


    // Perform Ajax request using jQuery
    $.ajax({
        type: 'POST',
        url: base_url + 'custom/insert_cust_table',
        data: formData,
        dataType: "json",
        processData: false, // Prevent jQuery from processing the data
        contentType: false, // Prevent jQuery from setting content type
        beforeSend: function () {
            $("#save_btn").html(loader)
        },
        success: function (response) {
            // Handle the Ajax response if needed
            let green = '#28a745'
            let red = '#dc3545'

            if (response['status'] == 1) {
              alert("Data updated successfully")
                location.reload()
            } else {
              alert("Data is not update")
            }
        }
    });

}