@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <table id="table_id" class="display">
                            <thead>
                            <tr>
                                <th></th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Profile Pic</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Street</th>
                                <th>Zip Code</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($addressBook as $key=>$value)
                                    <tr>
                                        <td>{{ $key }}/td>
                                        <td>{{ $value->first_name }}</td>
                                        <td>{{ $value->last_name }}</td>
                                        <td>{{ $value->profile_pic }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->phone }}</td>
                                        <td>{{ $value->street }}</td>
                                        <td>{{ $value->zip-code }}</td>
                                        <td>{{ $value->city }}</td>
                                        <td><a href="{{ route('address-book.edit',['address_book'=>$value->slug]) }}" class="btn btn-primary">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('javascript')
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        } );
    </script>
@endpush
