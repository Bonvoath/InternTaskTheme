var Role = {};
Role.toList = function () {
    let self = this;
    return new Promise(function (resolve, reject) {
        $.ajax({
            type: 'POST',
            url: '/role/list',
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

Role.saveChange = function(request){
    return new Promise(function (resolve, reject) {
        $.ajax({
            type: 'POST',
            url: '/role/save',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: request
        }).done(function (res) {
            console.log(res);
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

Role.renderTable = function (table) {
    table.html('');
    $.each(this.data, function (index, item) {
        var tr = '<tr data-id="' + item.Id + '">' +
            '<td>' + (index + 1) + '</td>' +
            '<td>' + item.Name + '</td>' +
            '</tr>';
        table.append(tr);
    });
}