function user_inactive(id){
	var user_id  = id;
	 var confirm_msg = confirm("Are you sure you want to inactive this user?");
	// Send the data via AJAX
	 if (confirm_msg) {
	    $.ajax({
	        url: 'action/inactive.php',
	        type: 'POST',
	        data: {user_id: user_id},
	        success: function(response){
	            if (response == 1) {
	            	swal("Great!", "User inactivated successfully!", "success", {
						button: "Ok",
					}).then(function() {
					window.location = "users.php";
					});
	            }else{
					swal("Opps!", "Error occured!", "error", {
						button: "Ok",
					}).then(function() {
					window.location = "users.php";
					});
	            }
	        }
	    });
	}
}
function copyToClipboard(element) {
    // Get the parent row of the clicked link
    var parentRow = element.closest('tr');

    // Get the ref code from the corresponding row
    var refCode = parentRow.querySelector('.refCode').innerText;

    // Construct the full URL with the dynamic ref_code
    var fullLink = "https://connectingwebs.com/development/genuine/register.php?ref_code=" + refCode;

    // Set the value of the hidden input to the full link
    var copyText = document.getElementById("linkToCopy");
    copyText.value = fullLink;

    // Make the input field visible
    copyText.style.display = "block";

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    document.execCommand("copy");

    // Hide the input field again
    copyText.style.display = "none";

    // Change the text of the clicked link to "Copied" and style it
    element.innerText = "Copied";
    element.classList.add("copied");

    // Optional: Revert the text back to "Copy Link" after a delay
    setTimeout(function() {
        element.innerText = "Copy Link";
        element.classList.remove("copied");
    }, 3000); // 3-second delay
}