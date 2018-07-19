// crud ajax
var User = {};
// get user
User.toList = function (callback) {
    let self = this;
    return new Promise(function (resolve, reject) {
        $.ajax({
            type: 'POST',
            url: '/user/list',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).done(function (res) {
            if (res.isError == false) {
                self.tables = res.data;
                resolve();
            } else {
                reject(res);
            }
        });
    });
}

User.renderTable = function(element){
    element.html('');
    $.each(this.tables, function(index, user){
        var row = '<tr data-id="'+user.id+'">'+
            '<td>'+(index+1)+'</td>'+
            '<td>'+user.name+'</td>'+
            '<td>'+user.email+'</td>'+
            '<td>'+user.created_at+'</td>'+
            '<td><button class="btn btn-defualt "><a href="javascript:void(0)" class="btnDel" id="tblDel">Delete</a></button> <a href="#" class="btn btn-primary btnedit hide_insert_btn" id="btnEdit" data-toggle="modal" data-target="#exampleModalCenter">Edit</a></td>'+'</tr>';
            element.append(row);
    });
}
/*
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
*/
