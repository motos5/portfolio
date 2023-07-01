jQuery(document).ready(function($){

// ============== Product Form AJAX Code ============== //
$("#contact-form").submit(function (e) {
  e.preventDefault();

  var form = $(this);
  var formData = form.serialize();

  $.ajax({
    type: "POST",
    url: form.attr("action"),
    data: formData + "&action=order",
    dataType: "json",
    beforeSend: function () {
      $("#submit-form").attr("disabled", "disabled");
      $("#response").html(
        '<div class="alert alert-info">Sending message...</div>'
      );
    },
    success: function (response) {
      if (response.success) {
        $("#response").html(
          '<div class="alert alert-success">' + response.data.message + "</div>"
        );
        form[0].reset();
      } else {
        $("#response").html(
          '<div class="alert alert-danger">' + response.data.message + "</div>"
        );
      }
    },
    error: function (xhr, status, error) {
      $("#response").html(
        '<div class="alert alert-danger">' + error + "</div>"
      );
    },
    complete: function () {
      $("#submit-form").removeAttr("disabled");
    },
  });
});
// ============== End Product Form AJAX Code ============== //

});

// Script Initialization (baguettebox)
window.addEventListener('load', function() {
    baguetteBox.run('.gallery');
    baguetteBox.run('.door-gallery');
});
// ===========================================

// Script Initialization (list-js)
let options = {
    valueNames: ['city']
  };

let userList = new List('cities', options);
// =============================================

// Script Initialization (mixitup-js)
let mixer = mixitup('.popular-goods.catalog');
// ========================================