function suggestUser(user){
    $.ajax({
        type:"post",
        url:"suggest_user.php",
        data:{user:user},
        success:function(response){
            //use ajax response to display the names
            $("#suggUser").fadeIn().html(response);
        }
    });
}
function selectUser(user){
    $("#user_name").val(user);
    $("#suggUser").fadeOut();

}
$(document).click(function(event){
 if (event.target.id != 'user_name'){
     $("#suggUser").fadeOut();
 }
});