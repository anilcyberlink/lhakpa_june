@extends('admin.master')
@section('title','User List')
@section('breadcrumb')
<a href="{{ route('subscriber.index') }}" class="btn btn-primary btn-sm">Back</a>
@endsection
@section('content')
<div class="tray tray-center">
    <div class="panel">
        <div class="panel-body ph20">
            <h4>User Details</h4>

            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <td>{{ $user->name ?? $data->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $user->email ?? $data->email }}</td>
                </tr>
                <tr>
                    <th>User Downloads</th>
                    <td>
                        @if($user && $user->downloadedPdfs->count())
                            <ul>
                                @foreach($user->downloadedPdfs as $pdf)
                                    <li>{{ $pdf->trip_title }} ({{ $pdf->created_at->format('Y-m-d') ?? 'N/A' }})</li>
                                @endforeach
                            </ul>
                        @else
                            <span>No Downloads</span>
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@stop
