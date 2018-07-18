// crud ajax
let User = {};
User.toList = function(callback)
{
    $.ajax({
        type: 'GET',
        url:'/getUser'
    }).done(function(res){
        callback(res.users);
    });
}

User.toList(function(data){
    renderTable(data);
});

function renderTable(data){
    $('#ltable tbody').html('');
    $.each(data, function(index, user){
        var row = '<tr data-id="'+user.id+'">'+
            '<td>'+(index+1)+'</td>'+
            '<td>'+user.name+'</td>'+
            '<td>'+user.email+'</td>'+
            '<td>'+user.created_at+'</td>'+
            '<td><button class="btn btn-defualt "><a href="javascript:void(0)" class="btnDel ">Delete</a></button> <a class="btn btn-primary btnedit">Edit</a></td>'+'</tr>';
        $('#ltable tbody').append(row);
    });
}
// insert user
$('body').on('click', '#insert', function(){
    let user = $('#form').serialize();
    User.saveChange(user, function(){
        User.toList(function(data){
            renderTable(data);
        });
    });
});

