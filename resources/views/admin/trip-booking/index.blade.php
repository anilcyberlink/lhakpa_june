@extends('admin.master')
@section('title', 'Trip Booking')
@section('breadcrumb')
@endsection
@section('content')
    <div class="tray tray-center" style="height: 647px;">
        <div class="panel">
            <div class="panel-body ph20">
                <div class="tab-content">
                    <div id="users" class="tab-pane active">
                        <div class="table-responsive mhn20 mvn15">
                            <table class="table admin-form table-striped dataTable" id="datatable3">
                                <thead>
                                    <tr class="bg-light">
                                        <th class="">SN</th>
                                        <th>Name</th>
                                        <th class="">Email</th>
                                        <th class="">Trip / REF ID</th>
                                        <th>Departure Type</th>
                                        <th class="text-center align-middle">Trip Status</th>
                                        <th class="text-left">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($book) > 0)
                                        @foreach ($book as $key => $row)
                                            <tr class="bg-light">
                                                <td class="">{{ $key += 1 }}</td>
                                                <td>
                                                    <a href="{{ route('view-trip-booking', $row->id) }}">{{ $row->full_name }}</a>
                                                </td>
                                                <td class="">
                                                    {{ $row->email }}
                                                </td>
                                                <td class="">
                                                    {{ $row->title }}<br />
                                                    {{ tripdetail($row->trip_id)->trip_code }}
                                                </td>
                                                <td>
                                                    {{ $row->depature_type == 1 ? 'Fixed Departure' : 'Normal Booking' }}
                                                </td>
                                                <td id="status-{{ $row->id }}" class="text-center align-middle">
                                                    @if ($row->paid_status == 1)
                                                        <span class="text-success">Completed</span><br>
                                                        <button onclick="sendFeedback({{ $row->id }})"
                                                            class="btn btn-xs btn-primary mt-1">
                                                            Send Feedback Email
                                                        </button>
                                                    @else
                                                        <span class="text-danger">Ongoing</span><br>
                                                        <button onclick="updateStatus({{ $row->id }})"
                                                            class="btn btn-xs btn-success mt-1">
                                                            Mark as Completed
                                                        </button>
                                                    @endif
                                                </td>
                                                <td class="text-left">
                                                    <a href="{{ route('view-trip-booking', $row->id) }}">View</a> |
                                                    <span class="trash"><a href="{{ route('delete-booking', $row->id) }}"
                                                            onclick="return confirm('Confirm Delete?')"
                                                            class="btn-btn-danger">Delete</a></span>
                                                    {{-- @if ($row->paid_status == 0)
                                      |
                                      <a href="{{route('booking.update.status',$row->id)}}" onclick="return confirm('Confirm as paid?')" class="btn-btn-danger">Mark as paid</a>
                                    @endif --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('libraries')
    <!-- Datatables -->
    <script src="{{ asset('vendor/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>

    <!-- Datatables Tabletools addon -->
    <script src="{{ asset('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>

    <!-- Datatables ColReorder addon -->
    <script src="{{ asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>

    <!-- Datatables Bootstrap Modifications  -->
    <script src="{{ asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>

    <script type="text/javascript">
        /************/
        $('#datatable3').dataTable({
            "aoColumnDefs": [{
                'bSortable': true,
                'aTargets': [-1]

            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "Previous",
                    "sNext": "Next"
                }
            },
            "iDisplayLength": 20,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
                "sSwfPath": "{{ asset('vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf') }}"
            }
        });
    </script>

    <script>
        function updateStatus(id) {
            if (!confirm("Are you sure you want to change the status?")) {
                return; // Stop if user clicks Cancel
            }
            fetch(`/bookings/${id}/update-status`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    location.reload();
                })
                .catch(error => console.error('Error:', error));
        }

        function sendFeedback(id) {
            if (!confirm("Send feedback email to this customer?")) {
                return;
            }
            fetch(`/bookings/${id}/send-feedback`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {

                if (data.status === 'success') {
                    toastr.success(data.message);
                } else {
                    toastr.error(data.message || 'Failed to send feedback email.');
                }

            })
            .catch(error => {
                console.error('Error:', error);
                toastr.error('Something went wrong.');
            });
        }
    </script>
@endsection
