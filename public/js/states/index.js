(function(){
    var isedit = false;
    initializeComponent();
    function initializeComponent(){
        State.toList().then(function(data){
            State.randerTable($('#table tbody'));
        });

        $('#exampleModalCenter').modal({
            backdrop: false,
            show: false
        });

        $('#exampleModalCenter').on('hidden.bs.modal', function (e) {
            $('[name="id"]').val('');
            $('#name').val('');
            isedit = false;
        });


        // btn create new state
        $('body').on('click', '#insert', function () {
           let state = $('#form').serialize();
           if (isedit == false){
               State.saveChange(state , function () {
                   State.toList().then(function (data) {
                       State.randerTable($('#table tbody'));
                       $('#exampleModalCenter').modal('hide');
                   });
               });
           }
           else {
               State.saveUpdate(state, function () {
                   State.toList().then(function (data) {
                       State.randerTable($('#table tbody'));
                       $('#exampleModalCenter').modal('hide');
                   });
               });
           }
        });

        // get state id
        $('body').on('click', '#getId' , function () {
            isedit = true;
            let tr = $(this).closest('tr');
            let id = tr.attr('data-id');
            State.getById(id, function(data){
                $('[name="id"]').val(data.id);
                let name = $('#name').val(data.name);
                $('#exampleModalCenter').modal('show');
            });
        });

        // delete data
        $('body').on('click', '#tblDel', function (){
            let tr = $(this).closest('tr');
            let Id = tr.attr('data-id');
            console.log(Id);
            State.delete(Id, function (res){
                tr.remove();
            });
        });
    }
})();




















// $('body').on('click' , '#insert' , function() {
//     let state = $('#form').serialize();
//     State.updateChange(state , function () {
//         State.toList().then(function (data) {
//             State.randerTable($('#table tbody'));
//             $('#exampleModalCenter').modal('hide');
//         });
//     });
// });
// btn create new state and update state
// $('body').on('click' , '#insert' , function () {
//    let state = $('#form').serialize();
//    if (isedit == false){
//        State.saveChange(state , function () {
//            State.toList().then(function (data) {
//                State.randerTable($('#table tbody'));
//            });
//        });
//    } else {
//        State.saveUpdate(state , function () {
//            State.toList().then(function (data) {
//                State.randerTable($('#table tbody'));
//            });
//        });
//    }
//    $('#exampleModalCenter').modal('hide');
// });

















// $('body').on('click', '#insert', function(){
//     let State = $('#form').serialize();
//     if(isedit == false){
//         State.saveChange(State, function(){
//             State.toList().then(function(){
//                 State.renderTable($('#table tbody'));
//             });
//         });
//     }
//     else{
//         State.updateChange(State, function(){
//             State.toList().then(function(){
//                 State.renderTable($('#table tbody'));
//             });
//         });
//     }
//     $('#exampleModalCenter').modal('hide');
// });
//
// // edit
// $('body').on('click', '#btnEdit' , function(){
//     isedit = true;
//     let tr = $(this).closest('tr');
//     let id = tr.attr('data-id');
//     State.getById(id, function(data){
//         $('[name="id"]').val(data.Id);
//         $('#Name').val(data.Name);
//         $('#exampleModalCenter').modal('show');
//     });
// });
