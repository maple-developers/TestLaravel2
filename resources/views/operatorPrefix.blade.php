@extends('layouts.newLayout')
@section('main_content')
    <div id="flHorizontalForm" class="col-lg-3 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Add Operator Prefix</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                @foreach ($errors->all() as $error)
                    <h1>{{ $error }}</h1>
                @endforeach
                <form id="addOperatorPrefixForm" method="POST">
                    @csrf
                    <input type="hidden" id="country_code" value="" name="country_code">
                    <div class="form-group row mb-2">
                        <label for="countryList" class="col-xl-4 col-sm-4 col-sm-4 col-form-label">Country
                            <span style="color:red;">*</span></label>
                        <div class="col-xl-8 col-lg-8 col-sm-8">
                            <select class="form-control" id="countryNameList" name="countryNameList"
                                onchange="getCountryOperators()" required>
                                <option value="">SELECT ONE </option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country['countryId'] }}">{{ $country['countryName'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="countryList" class="col-xl-4 col-sm-4 col-sm-4 col-form-label">Country
                            <span style="color:red;">*</span></label>
                        <div class="col-xl-8 col-lg-8 col-sm-8">
                            <select class="form-control" id="countryCodeList" name="countryCodeList"
                                onchange="getCountryOperators()" required>
                                <option value="">SELECT ONE </option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country['countryId'] }}">{{ $country['countryCode'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="countryList" class="col-xl-4 col-sm-4 col-sm-4 col-form-label">Operators
                            <span style="color:red;">*</span></label>
                        <div class="col-xl-8 col-lg-8 col-sm-8">
                            <input type="text" class="form-control" id="OperatorsName" name="OperatorsName" required>
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="countryList" class="col-xl-4 col-sm-4 col-sm-4 col-form-label">Prefix
                            <span style="color:red;">*</span></label>
                        <div class="col-xl-8 col-lg-8 col-sm-8">
                            <input type="text" class="form-control" name="operatorPrefix" id="operatorPrefix" value="">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="countryList" class="col-xl-4 col-sm-4 col-sm-4 col-form-label">Rate
                            <span style="color:red;">*</span></label>
                        <div class="col-xl-8 col-lg-8 col-sm-8">
                            <input type="number" class="form-control" name="operatorRate" id="operatorRate" step="0.001"
                                value="">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary mt-5" id="add_operator_prefix_button"
                                name="add_operator_prefix_button">Add</button>
                        </div>
                    </div>
                    <small id=" additionals" class="form-text text-muted" style="float:right;"><span
                            style="color:red;">*</span> Required Fields</small>
                </form>
            </div>
        </div>
        <div class="statbox widget box box-shadow mt-4">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Add prefix By file</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form id="AddWhiteNumberByFile" method="POST" enctype="multipart/form-data">
                    <div class="form-group row mb-2">
                        <label for="numbersFile" class="col-xl-4 col-sm-4 col-sm-4 col-form-label">prefix File
                            <span style="color:red;">*</span></label>
                        <div class="col-xl-8 col-lg-8 col-sm-8">
                            <div class="custom-file mb-4">
                                <input type="file" class="custom-file-input" id="numbersFile" name="numbersFile">
                                <label class="custom-file-label" for="numbersFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <a class="btn btn-primary mt-5" id="contriesDownload" name="contriesDownload"
                                href="contriesDownload.php?file=samplePrefixFile">Download Sample File</a>
                            <input type="submit" class="btn btn-primary mt-5" name="add_file_button" id="add_file_button"
                                form="AddWhiteNumberByFile">
                        </div>
                    </div>
                    <small id=" additionals" class="form-text text-muted" style="float:right;"><span
                            style="color:red;">*</span> Required Fields</small>
                </form>
            </div>
        </div>
    </div>
    <div id="tblHorizontalForm" class="col-lg-9 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Operator Table</h4>
                        @if (\Session::has('Sucsess'))
                            <div class="alert alert-primary mb-4" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg>
                                    </svg></button>{!! \Session::get('Sucsess') !!}</button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md6 col-sm-12 col-12">
                        <h1></h1>
                    </div>
                    <div class="col-xl-2 col-md-2 col-sm-12 col-12">
                        <a class="btn btn-primary btn-lg" id="contriesDownload" name="contriesDownload"
                            href="{{ url('douwloadCountryFile') }}">Download contries List</a>
                    </div>
                    <div class="col-xl-2 col-md-2 col-sm-2 col-2">
                        <a class="btn btn-primary btn-lg" id="operatorDownload" name="operatorDownload"
                            href="contriesDownload.php?file=OperatorPrefix"> Download operator List</a>
                    </div>
                    <div class="col-xl-2 col-md-2 col-sm-2 col-2">
                        <a class="btn btn-primary btn-lg" id="OperatorReferance" name="OperatorReferance"
                            href="contriesDownload.php?file=OperatorReferance"> Download Old operator List</a>
                    </div>
                    <div class="col-xl-2 col-md-2 col-sm-2 col-2">
                        <a class="btn btn-danger btn-lg" id="DeleteAll" name="DeleteAll"> Delete Selected</a>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="widget-content text-center tags-content">
                    <div class="full-search search-form-overlay">
                        <form class="form-inline form-inline search" role="search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            <div class="search-bar">
                                <input type="text" class="form-control search-form-control  ml-lg-auto"
                                    placeholder="Search..." id="TableSearchBox">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="list" class="table sortable massive table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                {{-- <th class="text-center p-3"><input id="checkAll" type="checkbox" /></th> --}}
                                <th class="text-center p-3">Country</th>
                                <th class="text-center p-3">operator</th>
                                <th class="text-center p-3">prefix</th>
                                <th class="text-center p-3">rate</th>
                                <th class="text-center p-3">APP FROM</th>
                                <th class="text-center p-3">UPDATED FROM</th>
                                <th class="text-center p-3">Action</th>
                                <th hidden>country_code</th>
                                <th hidden>country_code</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($operatersData as $item)
                                <tr data-id="{{ $item['operatorId'] }}">
                                    <td>{{ $item['countryName'] }}</td>
                                    <td>{{ $item['operatorName'] }}</td>
                                    <td>{{ $item['operatorPerfix'] }}</td>
                                    <td>{{ $item['operatorRate'] }}</td>
                                    <td class="spanago" title="{{ $item['created_at'] }}"></td>
                                    <td class="spanago" title="{{ $item['updated_at'] }}"></td>
                                    <td><button type="button" onclick="deleteItem(this)"
                                            class="btn btn-danger">DELETE</button>
                                        <button type="button" onclick="editItem(this)"
                                            class="btn btn-warning">UPDATE</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('java-script-section')
    <script>
        $('#ratesMenu').addClass('active');
        $('#prefixOperator').addClass('active');

        function deleteItem(button) {
            swal({
                title: 'Are you sure?',
                text: "You Delete this operator Number",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                padding: '2em'
            }).then(function(result) {
                if (result.value) {
                    var id = $(button).closest("tr").data("id");
                    $.ajax({
                        url: "apiManager/deletePrefix/" + id,
                        type: "get",
                        success: function(response) {
                            getTable();
                            swal({
                                title: 'Good job!',
                                text: "You Template succssfully Deleted",
                                type: 'success',
                                padding: '2em'
                            });
                        }
                    });
                }
            });
        }

        function getTable() {
            $("#list tbody").empty();
            var editButton = "<button class='btn btn-warning' onclick=edit(this)>Edit</button>";
            var deleteButton = "<button class='btn btn-danger' onclick=deleteItem(this)>Delete</button>";
            $.ajax({
                url: "{{ url('getOperator') }}",
                type: "get",
                success: function(response) {
                    var jsonArray = JSON.parse(response);
                    jsonArray.forEach(function(jsonItem) {
                        $("#list tbody").append(
                            "<tr data-id=" + jsonItem.prefix_id + ">" +
                            /* '<td><center><input name="' + jsonItem.prefix_id + '" data-id="' +
                            jsonItem.prefix_id +
                            '" class="row-check-box" type="checkbox" /></center></td>' + */
                            "<td class=text-center><b>" + jsonItem.country_name + "</b></td>" +
                            "<td><b>" + jsonItem.operator_name + "</b></td>" +
                            "<td><b>" + jsonItem.operator_perfix + "</b></td>" +
                            "<td><b>" + jsonItem.operator_rate + "</b></td>" +
                            "<td class='spanago'  title=" + jsonItem.created_at + "></td>" +
                            "<td class='spanago' title=" + jsonItem.updated_at + "></td>" +
                            "<td class=text-center>" + editButton + "&#9; &#9;" +
                            deleteButton +
                            "</td>" + '<td hidden>' + jsonItem.fk_country_id + '</td>' +
                            "</td>" + '<td hidden>' + jsonItem.country_code + '</td>' +
                            "</tr>");
                    });
                }
            });
        }
        getCurrentCallsMarquee();
        setInterval(() => {
            getCurrentCallsMarquee();
        }, 10000);

        function getCurrentCallsMarquee() {

            $.ajax({
                type: "GET",
                url: "apiManager/getCurrentCalls",
                success: function(response) {
                    var jsonArray = JSON.parse(response);
                    var marqueeContent =
                        '<img src="/assets/img/logo.png" width="30px" height="30px">';;
                    for (const property in jsonArray) {
                        marqueeContent += '<span> ' + property;
                        marqueeContent += '<span style="color:red"> &#8595; Calls : ' + jsonArray[property] +
                            '</span></span>';
                        marqueeContent +=
                            '<img src="/assets/img/logo.png" width="30px" height="30px">';
                    }
                    $('#currentCallMarquee').fadeOut('2000').empty();
                    $('#currentCallMarquee').append(marqueeContent).fadeIn('2000');
                }

            });
        }

        function getCountryOperators() {}
        $(document).ready(function() {
            var $country_set = $('#countryNameList,#countryCodeList')
            $country_set.change(function() {
                $country_set.not(this).val(this.value);
                country_code = $('#countryCodeList option:selected').text();
                $('#country_code').val(country_code);
            })
            jQuery(".spanago").timeago();
        });

        function editItem(button) {
            $('#editOperatorPrefixId').val($(button).closest("tr").data('id'));
            $('#editOperatorPrefixCountry').val($(button).closest("tr").find('td:eq(0)').text());
            $('#editOperatorPrefixName').val($(button).closest("tr").find('td:eq(1)').text());
            $('#editOperatorPrefixFields').val($(button).closest("tr").find('td:eq(2)').text());
            $('#editOperatorPrefixRates').val($(button).closest("tr").find('td:eq(3)').text());
            $('#editOperatorPrefix').show();
        }
    </script>
@endsection
@section('modals')
    <div id="editOperatorPrefix" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Operator Prefix</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <form action="updatePrefix" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row mb-2">
                            <input type="text" class="form-control" id="editOperatorPrefixId" name="editOperatorPrefixId"
                                hidden>
                            <label for="editOperatorCountry" class="col-xl-5 col-sm-5 col-sm-5 col-form-label">Operator
                                Country
                                <span style="color:red;">*</span></label>
                            <div class="col-xl-7 col-lg-7 col-sm-7">
                                <input type="text" class="form-control" id="editOperatorPrefixCountry"
                                    name="editOperatorPrefixCountry" placeholder="editOperatorCountry name ..." disabled>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="editOperatorName" class="col-xl-5 col-sm-5 col-sm-5 col-form-label">Operator name
                                <span style="color:red;">*</span></label>
                            <div class="col-xl-7 col-lg-7 col-sm-7">
                                <input type="text" class="form-control" id="editOperatorPrefixName"
                                    name="editOperatorPrefixName" placeholder="Config name ..." disabled>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="editOperatorPrefix" class="col-xl-5 col-sm-5 col-sm-3 col-form-label">Prefix
                                <span style="color:red;">*</span></label>
                            <div class="col-xl-7 col-lg-7 col-sm-7">
                                <input type="text" class="form-control" id="editOperatorPrefixFields"
                                    name="editOperatorPrefix" placeholder="Config value ..." required>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="editOperatorRates" class="col-xl-5 col-sm-5 col-sm-5 col-form-label">Operator Rates
                                <span style="color:red;">*</span></label>
                            <div class="col-xl-7 col-lg-7 col-sm-7">
                                <input type="number" class="form-control" id="editOperatorPrefixRates"
                                    name="editOperatorRates" placeholder="Config value ..." step="0.001" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer md-button">
                        <button class="btn" data-dismiss="modal" onclick="$('#editOperatorPrefix').hide()"><i
                                class="flaticon-cancel-12"></i> Discard</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
