var State = {};
    State.toList = function(){
        let self = this;
        return new Promise(function (resolve, reject){
            $.ajax({
                type: 'POST',
                url: '/state/listState',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).done(function(res){
                if(res.isError == false){
                    self.data = res.data;
                    resolve();
                }
                else{
                    reject(res.message);
                }
            });
        });
    }
    // js rander
    State.randerTable = function(table){
        table.html('');
        $.each(this.data, function(index, state){
            var tr = '<tr data-id="'+state.Id+'">'+
                '<td>'+( index + 1 )+'</td>'+
                '<td>'+state.Name+'</td>'+
                '<td>'+state.DateCreated+'</td>' +
                '<td><button class="btn btn-danger "><a href="javascript:void(0)" class="btnDel " id="tblDel">Delete</a></button> <a href="#" class="btn btn-primary btnedit hide_insert_btn" id="btnEdit" data-toggle="modal" data-target="#exampleModalCenter">Edit</a></td>'+'</tr>';
            table.append(tr);
        });
    }


// delete user
State.delete = function(id, callback){
    $.ajax({
        type: 'delete',
        url: '/state/delete/'+id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function(res){
        console.log(res);
        callback(res);
    });
}


















































































// // get data for edit
// State.getById = function(id, calback){
//     $.ajax({
//         type: 'GET',
//         url: '/state/edit/'+id,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     }).done(function(res){
//         calback(res.data);
//     });
// }
// // delete user
// State.delete = function(id, callback){
//     $.ajax({
//         type: 'delete',
//         url: 'state/delete/'+id,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     }).done(function(res){
//         callback(res);
//     });
// }
//
//
// save change data
// State.saveChange = function(request, callback){
//     $.ajax({
//         type: 'POST',
//         url: '/state/create',
//         data: request,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     }).done(function (res) {
//         if(res.isError == false){
//             callback();
//         }
//     });
// }
//
// // save change data
// State.updateChange = function(request, callback){
//     $.ajax({
//         type: 'POST',
//         url: '/state/update',
//         data: request,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     }).done(function (res) {
//         if(res.isError == false){
//             callback();
//         }
//     });
// }
//
// // get data for edit
// State.getById = function(id, calback){
//     $.ajax({
//         type: 'GET',
//         url: '/state/edit/'+id,
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     }).done(function(res){
//         calback(res.data);
//     });
// }
