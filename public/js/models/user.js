var User = {};
User.toList = function(){
    $.ajax({
        type: 'POST',
        url: 'store'
    })
}
function myFunction(){
    alert("user click");
}