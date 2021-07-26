
// ajax to send form data to php-script.php
$(document).on('submit','#userForm',function(e){
  e.preventDefault();
 
  $.ajax({
  method:"POST",
  url: "popup/php-script.php",
  data:$(this).serialize(),
  success: function(data){
  $('#msg').html(data);
}});
});

// javascript function to show and hide block
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}