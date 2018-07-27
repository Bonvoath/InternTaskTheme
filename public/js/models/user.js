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
// rander data
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
// save change data
User.saveChange = function(request, callback){
    $.ajax({
        type: 'POST',
        url: '/user/create',
        data: request,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (data) {
        if(res.isError == false){
            callback();
        }
    });
}

// save change data
User.updateChange = function(request, callback){
    $.ajax({
        type: 'POST',
        url: '/user/update',
        data: request,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (res) {
        if(res.isError == false){
            callback();
        }
    });
}

// get data for edit
User.getById = function(id, calback){
    $.ajax({
        type: 'GET',
        url: '/user/edit/'+id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function(res){
        calback(res.data);
    });
}
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


