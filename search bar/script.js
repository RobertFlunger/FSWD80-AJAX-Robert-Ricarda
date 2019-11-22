// Bind to the submit event of our form
$("#search").keyup(function(){

  var inputVal = $(this).val();
  var table = $("#tablecontent");

  var $form = $(this);
  var serializedData = $form.serialize();

  $.ajax({
    url: "form.php",
    type: "post",
    data: serializedData,
  success: function(response) {
    document.getElementById("tablecontent").innerHTML=response;
  }
});
})