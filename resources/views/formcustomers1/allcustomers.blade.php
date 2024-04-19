@extends('layouts.master')
@section('menu')
@extends('sidebar1.allcustomers')
@endsection
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mt-5">
                            <h4 class="card-title float-left mt-2">Customers</h4>
                        </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <button type="button" class="btn btn-primary float-right veiwbutton">Veiw All</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center">
                                    <thead>
                                    <tr>
                                        <th>Booking ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Aadhar Number</th>
                                        <th class="text-center">Room Type</th>
                                        <th class="text-right">Number</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($allBookings1 as $bookings )
                                        <tr>
                                            <td class="text-nowrap">
                                                <div>{{ $bookings->bkg_id }}</div>
                                            </td>
                                            <td class="text-nowrap">{{ $bookings->name }}</td>
                                            <td><a href="#" class="__cf_email__">{{ $bookings->email }}</a></td>
                                            <td>{{ $bookings->total_numbers }}</td>
                                            <td class="text-center">{{ $bookings->room_type }}</td>
                                            <td class="text-right">
                                                <div>{{ $bookings->ph_number }}</div>
                                            </td>
                                            <td class="text-center"> <span class="badge badge-pill bg-success inv-badge">INACTIVE</span> </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

            {{-- delete model --}}
            <div id="delete_asset" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <form action="{{ route('form/customer/delete') }}" method="POST">
                                @csrf
                                <img src="{{ URL::to('assets/img/sent.png') }}" alt="" width="50" height="46">
                                <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                                <div class="m-t-20">
                                    <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                    <input class="form-control" type="hidden" id="e_id" name="id" value="">
                                    <input class="form-control" type="hidden" id="e_fileupload" name="fileupload" value="">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end delete model --}}
        </div>
        @section('script')
        {{-- delete model --}}
        <script>
            $(document).on('click','.customerDelete',function()
            {
                var _this = $(this).parents('tr');
                $('#e_id').val(_this.find('.id').text());
                $('#e_fileupload').val(_this.find('.fileupload').text());
            });
        </script>
        @endsection

@endsection
