// Form Contact
$("#contactform").validate({
    ignore: [],
    errorClass: "invalid-feedback",
    errorElement: "div",
    errorPlacement: function(e, a) {
        $(a).parents(".form-outline").append(e)
    },
    highlight: function(e) {
        $(e).closest(".form-outline").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        $(e).closest(".form-outline").removeClass("is-invalid"), $(e).remove()
    },
    rules: {
        "contactformname": {
            required: !0,
            minlength: 3
        },
        "contactformemail": {
            required: !0,
            email: !0,
            emailfull: !0
        },
        "contactformphone": {
            required: !0
        },
        "contactformcountry": {
            required: !0
        },
        "contactformcomment": {
            required: !0,
            minlength: 10
        }
    },
    messages: {
        "contactformname": {
            required: " ",
            minlength: "At least 3 characters"
        },
        "contactformemail": {
            required: " ",
            email: "Invalid email",
            emailfull: "Invalid email"
        },
        "contactformphone": " ",
        "contactformcountry": " ",
        "contactformcomment": {
            required: " ",
            minlength: "At least 10 characters"
        }
    }
});


$('body').on('submit', '#contactform', function(e) {
    e.preventDefault();
    var form_data = new FormData(this);
    for (var pair of form_data.entries()) {}
    $.ajax({
        type: "POST",
        url: 'contacts-form.php',
        data: form_data,
        cache: false,
        contentType: false,
        processData: false
    }).done(function(data) {
        swal("Teşekkür Ederim", "Yorumunu Aldık En Kısa Zamanda Sana Dönüş Yapacağız.", "success");
        document.getElementById('contactform').reset();
    })
});


// Full Email
jQuery.validator.addMethod("emailfull", function(value, element) {
    return this.optional(element) || /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i.test(value);
}, " ");