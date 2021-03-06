$(function() {
  console.log("Hi!");
    $("#joinUs input, #joinUs textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            console.log("submitSuccess!");
            // get values from FORM
            var name = $("input#joinname").val(); console.log(name);
            var email = $("input#joinemail").val(); console.log(email);
            var phone = $("input#joinphone").val(); console.log(phone);
            var subject = $("input#joinsubject").val(); console.log(subject);
            var message = $("textarea#joinmessage").val(); console.log(message);
            var vounteer = $("input#vounteer").val(); console.log(vounteer);
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "mail/join_us.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    subject: subject,
                    vounteer: vounteer,
                    message: message
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#joinsuccess').html("<div class='alert alert-success'>");
                    $('#joinsuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#joinsuccess > .alert-success')
                        .append("<strong>Thank you " + firstName + ", we will let you know when registrations open. Be sure to check this site for updates.</strong>");
                    $('#joinsuccess > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#joinus').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#joinsuccess').html("<div class='alert alert-danger'>");
                    $('#joinsuccess > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#joinsuccess > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#joinsuccess > .alert-danger').append('</div>');
                    //clear all fields
                    $('#joinus').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
