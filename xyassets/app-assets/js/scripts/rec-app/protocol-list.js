$(function () {
    'use strict';

    var dtProtocolTable = $('.protocol-list-table'),
        statusObj = {
            1: { title: 'Draft', class: 'badge-light-secondary' },
            2: { title: 'Ready', class: 'badge-light-warning' },
            3: { title: 'Submitted', class: 'badge-light-primary' },
            4: { title: 'Accepted', class: 'badge-light-primary' },
            5: { title: 'On-review', class: 'badge-light-primary' },
            6: { title: 'Done', class: 'badge-light-primary' },
            7: { title: 'Resubmission', class: 'badge-light-primary' },
        };

    var assetPath = 'xyassets/app-assets/',
        protocolView = 'protocol/edit/',
        protocolEdit = 'protocol/edit/';

    if (dtProtocolTable.length) {
        dtProtocolTable.DataTable({
            // ajax: assetPath + 'data/rec-app/protocol-list-data.json',
            ajax: 'get_protocol_list',
            columns: [
                { data: 'protocolKey' },
                { data: 'title' },
                { data: 'status' },
                { data: 'review' },
                { data: '' },
            ],
            columnDefs: [
                {
                    targets: 0,
                    orderable: false,
                    responsivePriority: 2
                },
                // {
                //     targets: 1,
                //     responsivePriority: 4,
                //     render: function(data, type, full, meta) {

                //     }
                // },
                {
                    // Title
                    targets: 1,
                    responsivePriority: 4,
                    render: function (data, type, full, meta) {
                        var $title = full['title'];
                        var $id = full['protocolKey'];
                        return '<div class="d-flex flex-column">' +
                            '<a href="' +
                            protocolView +
                            $id +
                            '" class="text-truncate"><span class="font-weight-bold">' +
                            $title +
                            '</span></a></div>';
                    }
                },
                // {
                //     // Type
                //     targets: 2,
                //     render: function (data, type, full, meta) {
                //         var $type = full['studySite'];
                //         var typeBadgeObj = {
                //             "Clinical Trial": feather.icons['user'].toSvg({ class: 'font-medium-3 text-primary mr-50' }),
                //             "Clinical Trials": feather.icons['settings'].toSvg({ class: 'font-medium-3 text-warning mr-50' }),
                //             "Health Operations Research": feather.icons['database'].toSvg({ class: 'font-medium-3 text-success mr-50' }),
                //             "Social/Behavioral Research": feather.icons['edit-2'].toSvg({ class: 'font-medium-3 text-info mr-50' }),
                //             "Public Health/Epidemiologic Research": feather.icons['slack'].toSvg({ class: 'font-medium-3 text-danger mr-50' }),
                //             "Biomedical Research": feather.icons['edit-2'].toSvg({ class: 'font-medium-3 text-info mr-50' }),
                //             "Stem Cell Research": feather.icons['edit-2'].toSvg({ class: 'font-medium-3 text-info mr-50' }),
                //             "Genetic Research": feather.icons['edit-2'].toSvg({ class: 'font-medium-3 text-info mr-50' }),
                //         };
                //         return "<span class='text-truncate align-middle'>" + typeBadgeObj[$type] + $type + '</span>';
                //     }
                // },
                {
                    // Status
                    targets: 2,
                    render: function (data, type, full, meta) {
                        var $status = full['status'];

                        return (
                            '<span class="badge badge-pill ' +
                            statusObj[$status].class +
                            '" text-capitalized>' +
                            statusObj[$status].title +
                            '</span>'
                        );
                    }
                },
                {
                    // Actions
                    targets: -1,
                    title: 'Actions',
                    orderable: false,
                    render: function (data, type, full, meta) {
                        var $id = full['protocolKey'];
                        return (
                            '<div class="btn-group">' +
                            '<a class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">' +
                            feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
                            '</a>' +
                            '<div class="dropdown-menu dropdown-menu-right">' +
                            '<a href="' +
                            protocolView +
                            $id +
                            '" class="dropdown-item">' +
                            feather.icons['file-text'].toSvg({ class: 'font-small-4 mr-50' }) +
                            'Details</a>' +
                            '<a href="' +
                            protocolEdit +
                            $id +
                            '" class="dropdown-item">' +
                            feather.icons['archive'].toSvg({ class: 'font-small-4 mr-50' }) +
                            'Edit</a>' +
                            '<a href="javascript:;" class="dropdown-item delete-record">' +
                            feather.icons['trash-2'].toSvg({ class: 'font-small-4 mr-50' }) +
                            'Delete</a></div>' +
                            '</div>' +
                            '</div>'
                        );
                    }
                }
            ],
            order: [[2, 'desc']],
            dom:
                '<"d-flex justify-content-between align-items-center header-actions mx-1 row mt-75"' +
                '<"col-lg-12 col-xl-6" l>' +
                '<"col-lg-12 col-xl-6 pl-xl-75 pl-0"<"dt-action-buttons text-xl-right text-lg-left text-md-right text-left d-flex align-items-center justify-content-lg-end align-items-center flex-sm-nowrap flex-wrap mr-1"<"mr-1"f>B>>' +
                '>t' +
                '<"d-flex justify-content-between mx-2 row mb-1"' +
                '<"col-sm-12 col-md-6"i>' +
                '<"col-sm-12 col-md-6"p>' +
                '>',
            language: {
                sLengthMenu: 'Show _MENU_',
                search: 'Search',
                searchPlaceholder: 'Search..'
            },
            // Buttons with Dropdown
            buttons: [
                {
                    text: 'Add New Protocol',
                    className: 'add-new btn btn-primary mt-50',
                    action: function (e, dt, button, config) {
                        window.location.href = 'protocol/create';
                    },
                    // attr: {
                    //     'data-toggle': 'modal',
                    //     'data-target': '#modals-slide-in'
                    // },
                    init: function (api, node, config) {
                        $(node).removeClass('btn-secondary');
                    }
                }
            ],
            // For responsive popup
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (row) {
                            var data = row.data();
                            return 'Details of ' + data['full_name'];
                        }
                    }),
                    type: 'column',
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: 'table',
                        columnDefs: [
                            {
                                targets: 2,
                                visible: false
                            },
                            {
                                targets: 3,
                                visible: false
                            }
                        ]
                    })
                }
            },
            language: {
                paginate: {
                    // remove previous & next text from pagination
                    previous: '&nbsp;',
                    next: '&nbsp;'
                }
            },
            initComplete: function () {
                // Adding role filter once table initialized
                // this.api()
                //     .columns(2)
                //     .every(function () {
                //         var column = this;
                //         var select = $(
                //             '<select id="StudyType" class="form-control text-capitalize mb-md-0 mb-2"><option value=""> Study Type </option></select>'
                //         )
                //             .appendTo('.study_type')
                //             .on('change', function () {
                //                 var val = $.fn.dataTable.util.escapeRegex($(this).val());
                //                 column.search(val ? '^' + val + '$' : '', true, false).draw();
                //             });

                //         column
                //             .data()
                //             .unique()
                //             .sort()
                //             .each(function (d, j) {
                //                 select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
                //             });
                //     });
                // Adding status filter once table initialized
                this.api()
                    .columns(2)
                    .every(function () {
                        var column = this;
                        var select = $(
                            '<select id="FilterTransaction" class="form-control text-capitalize mb-md-0 mb-2xx"><option value=""> Select Status </option></select>'
                        )
                            .appendTo('.protocol_status')
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append(
                                    '<option value="' +
                                    d +
                                    '" class="text-capitalize">' +
                                    statusObj[d].title +
                                    '</option>'
                                );
                            });
                    });
            }
        });
    }
    // To initialize tooltip with body container
    $('body').tooltip({
        selector: '[data-toggle="tooltip"]',
        container: 'body'
    });
});