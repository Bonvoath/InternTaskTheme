(function(){
    initializeComponent();
    function initializeComponent(){
        User.toList().then(function(data){
            User.renderTable($('#ltable tbody'));
        });
    }
})();

