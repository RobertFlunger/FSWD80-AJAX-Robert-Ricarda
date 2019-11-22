<?

$conn = mysqli_connect("localhost", "root", "", "db");
$sql = "SELECT * FROM example";

$res = mysqli_query($conn, $sql);
$rows = $res->fetch_all(MYSQLI_ASSOC);







/*In index:*/

function ReadRows() {
   	// Fire off the request to /form.php
   	request = $.ajax({
       url: "read.php",
       type: "post",
   	});

   // Callback handler that will be called on success
   request.done(function (response){
       document.getElementById("result").innerHTML = 
   });

   // Callback handler that will be called on failure
   request.fail(function (jqXHR, textStatus, errorThrown){
       // Log the error to the console
       console.error(
           "The following error occurred: "+
           textStatus, errorThrown
       );
   });

   // Callback handler that will be called regardless
   // if the request failed or succeeded
   request.always(function () {
       // Reenable the inputs
       $inputs.prop("disabled", false);
   });
});
}





?>