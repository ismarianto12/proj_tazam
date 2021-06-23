@extends('layouts.template')

@section('content')

    <div class="container">

        <div class="card full-height">
            <div class="card-body">

                <table id="example" class="table table-striped" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Order</th>
                            <th>name</th>
                            <th>country</th>
                            <th>action</th>
                        </tr>
                    </thead>
                </table>

                <table id="new-row-template" style="display:none">
                    <tbody>
                        <tr>
                            <td>999</td> <!-- Use a large number or row might be inserted in the middle -->
                            <td>__NAME__</td>
                            <td>__COUNTRY__</td>
                            <td>
                                <i class="fa fa-pencil-square" aria-hidden="true"></i>
                                <i class="fa fa-minus-square" aria-hidden="true"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="pull-right">
                    <button type="button" id="btn-cancel" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" id="btn-save" class="btn btn-primary" data-dismiss="modal">Save</button>
                </div>

                <br>
                <br>
                <h1>
                    table 2
                </h1><br>
                <br>
                <table id="example2" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> name</th>
                        </tr>
                    </thead>
                </table>

                <div id="kk"></div>


                <script>
                    // var script = document.createElement('script');
                    // script.onload = function() {
                    // 
                    $(function() {
                        var dataUrl = 'http://www.json-generator.com/api/json/get/ccTtqmPbkO?indent=2';
                        var options = [{
                                key: 'option 1',
                                value: 1
                            },
                            {
                                key: 'option 2',
                                value: 2
                            },
                            {
                                key: 'option 3',
                                value: 3
                            }
                        ];

                        var rowCache = [];

                        function mouseUp(event) {
                            var ctrl = $(document.elementsFromPoint(event.clientX, event.clientY)).filter(
                                'input.border-highlight');

                            if (ctrl.length > 0 && rowCache.length > 0) {
                                var el = rowCache[0];
                                var data = el.row.data();

                                if (data.length > 0) {
                                    ctrl.val(data[0].name);
                                    el.row.remove().draw();
                                }
                            }

                            rowCache = [];
                            $('#example tr td:nth-child(2) input').removeClass('border-highlight');
                        }

                        $(document).ready(function() {
                            var $table = $('#example');
                            var dataTable = null;

                            $('body').mouseup(mouseUp);

                            $table.on('mousedown', 'td .fa.fa-minus-square', function(e) {
                                dataTable.row($(this).closest("tr")).remove().draw();
                            });

                            $table.on('mousedown.edit', 'i.fa.fa-pencil-square', function(e) {
                                enableRowEdit($(this));
                            });

                            $table.on('mousedown', 'input', function(e) {
                                e.stopPropagation();
                            });

                            $table.on('mousedown.save', 'i.fa.fa-envelope-o', function(e) {
                                updateRow($(this), true); // Pass save button to function.
                            });

                            $table.on('mousedown', '.select-basic', function(e) {
                                e.stopPropagation();
                            });

                            dataTable = $table.DataTable({
                                ajax: dataUrl,
                                rowReorder: {
                                    dataSrc: 'order',
                                    selector: 'tr'
                                },
                                columns: [{
                                    data: 'order'
                                }, {
                                    data: 'name'
                                }, {
                                    data: 'place'
                                }, {
                                    data: 'delete'
                                }]
                            });

                            $table.css('border-bottom', 'none')
                                .after($('<div>').addClass('addRow')
                                    .append($('<button>').attr('id', 'addRow').text('Add New Row')));

                            // Add row
                            $('#addRow').click(function() {
                                var $row = $("#new-row-template").find('tr').clone();
                                dataTable.row.add($row).draw();
                                // Toggle edit mode upon creation.
                                enableRowEdit($table.find(
                                    'tbody tr:last-child td i.fa.fa-pencil-square'));
                            });

                            $('#btn-save').on('click', function() {
                                updateRows(true); // Update all edited rows
                            });

                            $('#btn-cancel').on('click', function() {
                                updateRows(false); // Revert all edited rows
                            });

                            function enableRowEdit($editButton) {
                                $editButton.removeClass().addClass("fa fa-envelope-o");
                                var $row = $editButton.closest("tr").off("mousedown");

                                $row.find("td").not(':first').not(':last').each(function(i, el) {
                                    enableEditText($(this))
                                });

                                $row.find('td:first').each(function(i, el) {
                                    enableEditSelect($(this))
                                });
                            }

                            function enableEditText($cell) {
                                var txt = $cell.text();
                                $cell.empty().append($('<input>', {
                                    type: 'text',
                                    value: txt
                                }).data('original-text', txt));
                            }

                            function enableEditSelect($cell) {
                                var txt = $cell.text();
                                $cell.empty().append($('<select>', {
                                    class: 'select-basic'
                                }).append(options.map(function(option) {
                                    return $('<option>', {
                                        text: option.key,
                                        value: option.value
                                    })
                                })).data('original-value', txt));
                            }

                            function updateRows(commit) {
                                $table.find('tbody tr td i.fa.fa-envelope-o').each(function(index, button) {
                                    updateRow($(button), commit);
                                });
                            }

                            function updateRow($saveButton, commit) {
                                $saveButton.removeClass().addClass('fa fa-pencil-square');
                                var $row = $saveButton.closest("tr");

                                $row.find('td').not(':first').not(':last').each(function(i, el) {
                                    var $input = $(this).find('input');
                                    $(this).text(commit ? $input.val() : $input.data(
                                        'original-text'));
                                });

                                $row.find('td:first').each(function(i, el) {
                                    var $input = $(this).find('select');
                                    $(this).text(commit ? $input.val() : $input.data(
                                        'original-value'));
                                });
                            }
                        });

                        $(document).ready(function() {
                            var url = 'http://www.json-generator.com/api/json/get/bXcKDeAbyq?indent=2';
                            table = $('#example2').DataTable({
                                ajax: url,
                                order: [
                                    [0, "desc"]
                                ],
                                rowReorder: {
                                    dataSrc: 'place',
                                    selector: 'tr'
                                },
                                columns: [{
                                    data: 'name'
                                }]
                            });

                            table.on('mousedown', 'tbody tr', function() {
                                var $row = $(this);

                                var r = table.rows(function(i, data) {
                                    return data.name == $row.children().first().text();
                                });

                                if (r[0].length > 0) {
                                    $row.parents('table').find('tr').removeClass('highlight');
                                    $row.addClass('highlight');
                                    $('#example tr td:nth-child(2) input').addClass(
                                        'border-highlight');
                                }

                                rowCache.push({
                                    row: r
                                });
                            });

                        });

                    });


                    // };
                    // script.async = true;
                    // script.src = "https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js";
                    // document.getElementsByTagName('head')[0].appendChild(script);
                </script>

            </div>

        </div>
    </div>
@endsection
