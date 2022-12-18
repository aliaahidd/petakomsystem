@extends('activity.ViewActv')

<script src="{{ asset('frontend') }}/js/jquery.dataTables.js"></script>
<script src="{{ asset('frontend') }}/js/dataTables.bootstrap4.js"></script>
<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "order": [
                [0, "asc"]
            ],
            "language": {
                search: '<i class="fa fa-search" aria-hidden="true"></i>',
                searchPlaceholder: 'Search activity'
            }
        });

        $('.dataTables_filter input[type="search"]').css({
            'width': '300px',
            'display': 'inline-block',
            'font-size': '15px',
            'font-weight': '400'
        });
    });
</script>

@section('inner_content')

<div class="overflow-auto" style="overflow:auto;">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Activity Name</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Pax</th>
                    <th>Status</th>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr id="1">
                    <td>Memanah</td>
                    <td>13 Feb 2022</td>
                    <td>Buat Donut</td>
                    <td>Panjat Pokok</td>
                    <td>Motor GP</td>
                    <td>
                        <div class="btn-group" style="float: right;">
                            <a href="" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger" onclick="deleteItem(this)" data-id="" data-name="">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr id="2">
                    <td>Memanah 1</td>
                    <td>20 June 2020</td>
                    <td>Buat Donut</td>
                    <td>Panjat Pokok</td>
                    <td>Motor GP</td>
                    <td>
                        <div class="btn-group" style="float: right;">
                            <a href="" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger" onclick="deleteItem(this)" data-id="" data-name="">Delete</button>
                        </div>
                    </td>
                </tr>
                <tr id="3">
                    <td>Memanah 2</td>
                    <td>11 Jan 2019</td>
                    <td>Buat Donut</td>
                    <td>Panjat Pokok</td>
                    <td>Motor GP</td>
                    <td>
                        <div class="btn-group" style="float: right;">
                            <a href="" class="btn btn-primary">Edit</a>
                            <button class="btn btn-danger" onclick="deleteItem(this)" data-id="" data-name="">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<script src="{{ asset('frontend') }}/js/jquery.dataTables.js"></script>

@endsection