$(document).ready(function () {

  //check username availability

  $('#username').blur(function () {
    console.log("clicked");
    // alert("This input field has lost its focus.");

    var name = $(this).val();
    $.ajax({
      url: 'check/checkuser.php',
      method: 'POST',
      data: { name: name },
      dataType: "text",
      success: function (data) {
        $('#userstatus').html(data);
      }
    });
  });


  //autocomplete textbox

  $("#skill").keyup(function () {
    var skill = $(this).val();
    if (skill != '') {
      $.ajax({
        url: 'check/checkskill.php',
        method: 'POST',
        data: { skill: skill },
        success: function (data) {
          // $('#skillstatus').fadeIn();
          $('#skillstatus').html(data);
        }
      });
    }
  })

  $(document).on('click', 'li', function () {
    $("#skill").val($(this).text());
    $('#skillstatus').fadeOut();
  });


  //show password button
  $("#showpass").on('click', function () {
    var pass = $("#password");
    var fieldtype= pass.attr('type');
    if(fieldtype == 'password') {
      pass.attr('type','text');
      $(this).text("Hide password");
    }else{
      pass.attr('type','password');
      $(this).text("Show Password");
    }
  });




});   