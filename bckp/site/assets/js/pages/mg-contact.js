$(document).ready(function (){
    var frmvalidator = new Validator("mg-contact-form");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name", "req", "Please enter name");
    frmvalidator.addValidation("email", "req", "Please enter email");
    frmvalidator.addValidation("email", "email", "Please enter valid email");
    frmvalidator.addValidation("message", "req", "Please enter message");
});

function mg_contact_form() {
    $("#mg-contact-form").trigger("reset");
    $(".mg-form-alert").html('<div class="mt-2 alert alert-success alert-dismissible fade show" role="alert"><strong>Successful!</strong> Your data saved successfully!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
}