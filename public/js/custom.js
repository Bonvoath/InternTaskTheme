$(function(){
    $("#btn-th").click(function(){
        $('.list-view').addClass('hide');
        $('.grid-view').removeClass('hide');
        $('#btn-th').addClass('active');
        $('#btn-list').removeClass('active');
    });
    $('#btn-list').click(function(){
        $('.list-view').removeClass('hide');
        $('.grid-view').addClass('hide');
        $('#btn-list').addClass('active');
        $('#btn-th').removeClass('active');
    });

    // Tree view folder ==
    $.fn.extend({
        treed: function (o) {
          var openedClass = 'glyphicon-minus-sign';
          var closedClass = 'glyphicon-plus-sign';
          
          if (typeof o != 'undefined'){
            if (typeof o.openedClass != 'undefined'){
            openedClass = o.openedClass;
            }
            if (typeof o.closedClass != 'undefined'){
            closedClass = o.closedClass;
            }
          };
            //initialize each of the top levels
            var tree = $(this);
            tree.addClass("tree");
            tree.find('li').has("ul").each(function () {
                var branch = $(this); //li with children ul
                branch.prepend("<i class='indicator glyphicon " + closedClass + "'></i>");
                branch.addClass('branch');
                branch.on('click', function (e) {
                    if (this == e.target) {
                        var icon = $(this).children('i:first');
                        icon.toggleClass(openedClass + " " + closedClass);
                        $(this).children().children().toggle();
                    }
                })
                branch.children().children().toggle();
            });
            //fire event from the dynamically added icon
          tree.find('.branch .indicator').each(function(){
            $(this).on('click', function () {
                $(this).closest('li').click();
            });
          });
            //fire event to open branch if the li contains an anchor instead of text
            tree.find('.branch>a').each(function () {
                $(this).on('click', function (e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });
            //fire event to open branch if the li contains a button instead of text
            tree.find('.branch>button').each(function () {
                $(this).on('click', function (e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });
        }
    });
    //Initialization of treeviews
    $('#tree2').treed({openedClass:'glyphicon-folder-open', closedClass:'glyphicon-folder-close'});

    //create folder to system Image management system
    $('#btnAddNew').click(function(){

        $.ajax({
           
        });
    });
    // validation state name
    $('#form').validate({
        rules: {
            name: "required"
        },
        messages: {
            name: "Please enter State Name."
        },
        errorContainer: $('#errorContainer'),
        errorLabelContainer: $('#errorContainer ul'),
        wrapper: 'li'
    });

    // validation state name
    $('.formUser').validate({
        rules: {
            name: "required"
        },
        messages: {
            name: "Please User Name"
        },
        errorContainer: $('#errorUsername'),
        errorLabelContainer: $('#errorUsername ul'),
        wrapper: 'li'
    });
});
