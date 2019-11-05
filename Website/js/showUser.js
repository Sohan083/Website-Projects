$(document).ready(function(){

 
 $('.delete').click(function(){
  var r = confirm("Are you sure want to delete this user?");
 if(r == true)
  {
    var el = this;
  var id = this.id;
  var splitid = id.split("_");

 
  var deleteid = splitid[1];
 
  
  $.ajax({
   url: 'deleteUser.php',
   type: 'POST',
   data: { did:deleteid },
   success: function(response){
    $(el).closest('div').css('background','tomato');
    $(el).closest('div').fadeOut(800, function(){ 
     $(this).remove();
    });

   }
  });
} else
{
  alert("No user deleted");
  return ;
}
 });

});