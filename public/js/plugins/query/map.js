(function ($) {
    'use strict';
    var default_opts = {
        query: {},
        columns: [],
        widths: {},
        colunmIndex: true,
        edit: {
            text: ' <a href="javascrpt:void(0)" class="btn btn-xs btn-default command-edit"><i class="fa fa-pencil" aria-hidden="true"></i></a> ',
            show: true
        },
        delete: {
            text: ' <a href="javascrpt:void(0)" class="btn btn-xs btn-danger command-delete"><i class="fa fa-trash" aria-hidden="true"></i></a> ',
            icon: '',
            show: true
        },
        completed: function () { },
    };

    $.fn.map = function (action, options) {
        let _self = this;
        let _table = $('<table><thead><tr></tr></thead><tbody></tbody></table>').addClass('table table-condensed');

        let opts = $.extend({}, default_opts, options);
        toList().then(function () {
            render();
            _self.append(_table);
            opts.completed();
        });

        function toList() {
            return new Promise(function (resolve, reject) {
                $.ajax({
                    type: 'POST',
                    url: action,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }).done(function (res) {
                    if (res.isError == false) {
                        _self.data = res.data;
                        resolve();
                    }
                    else {
                        reject(res.message);
                    }
                });
            });
        }

        function render() {
            if (opts.columns.length > 0) {
                header();
                $.each(_self.data, function (index, item) {
                    let _tr = $('<tr data-index="' + index + '"></tr>');
                    if(opts.colunmIndex == true)
                        _tr.append('<td>' + (index + 1) + '</td>');

                    $.each(opts.columns, function (index, _field) {
                        let _val = item[_field] != undefined ? item[_field] : '';
                        let _td = '<td>' + _val + '</td>';
                        _tr.append(_td);
                    });
                    _tr.append(makeAction());
                    _table.find('tbody').append(_tr);
                });
            } else {
                if (_self.data.length > 0) {
                    let first = _self.data[0];
                    $.each(first, function (element, value) {
                        let _th = '<th column-name="' + element + '">' + element + '</th>';
                        _table.find('thead>tr').append(_th);
                    });

                    if(opts.edit.show == true || opts.delete.show == true)
                        _table.find('thead>tr').append('<th column-name="Action">Action</th>');
                }

                $.each(_self.data, function (index, item) {
                    let _tr = $('<tr data-index="' + index + '"></tr>');
                    $.each(item, function (element, value) {
                        let _td = '<td>' + value + '</td>';
                        _tr.append(_td);
                    });
                    _tr.append(makeAction());
                    _table.find('tbody').append(_tr);
                });
            }
        }

        function refresh() {

        }

        function header(){
            if(opts.colunmIndex == true)
                _table.find('thead>tr').append('<th column-name="No">No</th>');

            $.each(opts.columns, function (index, _value) {
                let _th = '<th column-name="' + _value + '">' + _value + '</th>';
                _table.find('thead>tr').append(_th);
            });

            if(opts.edit.show == true || opts.delete.show == true)
                _table.find('thead>tr').append('<th column-name="Action">Action</th>');
        }

        function makeAction(){
            let _td = $('<td></td>');
            if(opts.edit.show == true)
                _td.append(opts.edit.text);

            if(opts.delete.show == true)
                _td.append(opts.delete.text);
            

            return _td;
        }

        return this;
    }
})(jQuery);