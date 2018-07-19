// crud ajax
var User = {};
// get user
User.toList = function(callback)
{
    $.ajax({
        type: 'GET',
        url:'/user/getUser'
    }).done(function(res){
        callback(res.users);
    });
}
User.toList(function(data){
    renderTable(data);
});
// get user
function renderTable(data){
    $('#ltable tbody').html('');
    $.each(data, function(index, user){
        var row = '<tr data-id="'+user.id+'">'+
            '<td>'+(index+1)+'</td>'+
            '<td>'+user.name+'</td>'+
            '<td>'+user.email+'</td>'+
            '<td>'+user.created_at+'</td>'+
            '<td><button class="btn btn-defualt "><a href="javascript:void(0)" class="btnDel" id="tblDel">Delete</a></button> <a href="#" class="btn btn-primary btnedit hide_insert_btn" id="btnEdit" data-toggle="modal" data-target="#exampleModalCenter">Edit</a></td>'+'</tr>';
        $('#ltable tbody').append(row);
    });
}

// insert user
User.saveChange = function(request, callback){
    $.ajax({
        type: 'POST',
        url: '/user/create',
        data: request,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (data) {
        callback();
    });
}
$('body').on('click', '#insert', function(){
    let user = $('#form').serialize();
    User.saveChange(user, function(){
        User.toList(function(data){
            renderTable(data);
            $('#exampleModalCenter').modal('hide');
        }); 
    });
});

// delete user
User.delete = function(id, callback){
    $.ajax({
        type: 'delete',
        url: '/user/delete/'+id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function(res){
        callback(res);
    });
}
$('body').on('click', '#tblDel', function (){
    let tr = $(this).closest('tr');
    let id = tr.attr('data-id');
    User.delete(id, function (res){
       tr.remove(); 
    });
});

// update
User.getById = function(id, calback){
    $.ajax({
        type: 'GET',
        url: '/user/edit/'+id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function(res){
        calback(res);
    });
}
$('body').on('click', '#btnEdit' , function(){
    let tr = $(this).closest('tr');
    let id = tr.attr('data-id');
    User.getById(id, function(data){
        console.log(data);
        var name = $('#name').val(data.name);
    });
});
// var name =  $('#name').text();
// var email =  $('#email').text();
// var password =  $('#password').text();

