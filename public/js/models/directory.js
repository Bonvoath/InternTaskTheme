let Directory = {};
Directory.makeDir = function (request) {
    $.ajax({
        type: 'POST',
        url: '/image/makeDir',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: request
    }).done(function (res) {
        console.log(res);
    });
}