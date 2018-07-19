(function(){
    initializeComponent();
    function initializeComponent(){
        User.toList().then(function(){
            User.renderTable($('#ltable tbody'));
        });
    }
})();

