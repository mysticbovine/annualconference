$(function() {
  console.log("Hi!");
    $("#tablebooking input, #tablebooking textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            console.log("submitSuccess!");
            // get values from FORM
            var name = $("input#tablebookingname").val(); console.log(name);
            var email = $("input#tablebookingemail").val(); console.log(email);
            var table_name = $("input#tablebookingtable_name").val(); console.log(table_name);
            var attendee1 = $("input#tablebookingattendee1").val(); console.log(attendee1);
            var attendee2 = $("input#tablebookingattendee2").val(); console.log(attendee2);
            var attendee3 = $("input#tablebookingattendee3").val(); console.log(attendee3);
            var attendee4 = $("input#tablebookingattendee4").val(); console.log(attendee4);
            var attendee5 = $("input#tablebookingattendee5").val(); console.log(attendee5);
            var attendee6 = $("input#tablebookingattendee6").val(); console.log(attendee6);
            var attendee7 = $("input#tablebookingattendee7").val(); console.log(attendee7);
            var attendee8 = $("input#tablebookingattendee8").val(); console.log(attendee8);
            
            var requests = $("textarea#tablebookingrequests").val(); console.log(requests);
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "mail/tablebooking.php",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    table_name: table_name,
                    requests: requests,
                    attendee1: attendee1,
                    attendee2: attendee2,
                    attendee3: attendee3,
                    attendee4: attendee4,
                    attendee5: attendee5,
                    attendee6: attendee6,
                    attendee7: attendee7,
                    attendee8: attendee8                   
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#tablebookingsuccess').html("<div class='alert alert-success'>");
                    $('#tablebookingsuccess > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#tablebookingsuccess > .alert-success')
                        .append("<strong>Thank you " + firstName + ", your table booking has been sent to the Conference Registration Chair.</strong>");
                    $('#tablebookingsuccess > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#tablebooking').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#tablebookingsuccess').html("<div class='alert alert-danger'>");
                    $('#tablebookingsuccess > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#tablebookingsuccess > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#tablebookingsuccess > .alert-danger').append('</div>');
                    //clear all fields
                    $('#tablebooking').trigger("reset");
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
