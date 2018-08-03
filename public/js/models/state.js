var State = {};
State.toList = function () {
    let self = this;
    return new Promise(function (resolve, reject) {
        $.ajax({
            type: 'POST',
            url: '/state/listState',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).done(function (res) {
            if (res.isError == false) {
                self.data = res.data;
                resolve();
            }
            else {
                reject(res.message);
            }
        });
    });
}

// js rander
State.randerTable = function (table) {
    table.html('');
    $.each(this.data, function (index, state) {
        var tr = '<tr data-id="' + state.id + '">' +
            '<td>' + (index + 1) + '</td>' +
            '<td>' + state.name + '</td>' +
            '<td>' + state.created_at + '</td>' +
            '<td><a href="javascript:void(0)" class="btnDel" id="tblDel"><button class="btn btn-danger ">Delete</button></a> <a href="#" class="btn btn-primary btnedit hide_insert_btn" id="getId" data-toggle="modal" data-target="#exampleModalCenter">Edit</a></td>' + '</tr>';
        table.append(tr);
    });
}
// create new state
State.saveChange = function (request, callback) {
    $.ajax({
        type: 'POST',
        url: '/state/create',
        data: request,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (res) {
        if (res.isError == false) {
            callback();
        }
    });
}

State.saveUpdate = function (request, callback) {
    $.ajax({
        type: 'POST',
        url: '/state/update',
        data: request,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (res) {
        if (res.isError == false) {
            callback();
        }
    });
}

// delete state
State.delete = function (id, callback) {
    $.ajax({
        type: 'delete',
        url: '/state/delete/' + id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (res) {
        callback(res);
    });
}

// getBy Id for update
State.getById = function (id, callback) {
    $.ajax({
        type: 'GET',
        url: '/state/edit/' + id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (res) {
        callback(res.data);
    });
}
























































