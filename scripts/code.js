jQuery(document).ready(function($) {
  $(document).ready(function() {

    // http://www.jsfuck.com/
    var pin = (+!![] + []) + (!+[] + !![] + []) + (!+[] + !![] + !![] + []) + (!+[] + !![] + !![] + !![] + []);
    var enterCode = "";
    enterCode.toString();

    $("#numbers button").click(function() {

      var clickedNumber = $(this).text().toString();
      enterCode = enterCode + clickedNumber;
      var lengthCode = parseInt(enterCode.length);
      lengthCode--;
      $("#fields .numberfield:eq(" + lengthCode + ")").addClass("active");

      if (lengthCode == 3) {

        // Check the PIN
        if (enterCode == pin) {
          // Right PIN!
          $("#fields .numberfield").addClass("right");
          $("#numbers").addClass("hide");
          $(location).prop('href', 'home.php')
          var url = '../backend/login_verification.php';
          var form = $('<form action="' + url + '" method="post">' +
            '<input type="text" name="code" value="'+enterCode+'" />' +
            '</form>');
          $('body').append(form);
          form.submit();
        } else {
          // Wrong PIN!
          $("#fields").addClass("miss");
          enterCode = "";
          setTimeout(function() {
            $("#fields .numberfield").removeClass("active");
          }, 200);
          setTimeout(function() {
            $("#fields").removeClass("miss");
          }, 500);

        }

      } else {}

    });
    

  });
});