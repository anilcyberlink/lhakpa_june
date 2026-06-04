@extends('admin.master')
@section('title', '')
@section('breadcrumb')
    <a href="{{ route('admin.feedbacks') }}" class="btn btn-primary btn-sm">Back</a>
@endsection

@section('content')
    <div class="container mt-4">

        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Feedback Details</h5>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tbody>

                    <tr><th width="30%">Trip</th><td>{{ $data->trip }}</td></tr>
                    <tr><th>Departure Date</th><td>{{ $data->departure->format('d M Y') }}</td></tr>
                    <tr><th>Guide Name</th><td>{{ $data->guide_name }}</td></tr>
                    <tr><th>Full Name</th><td>{{ $data->full_name }}</td></tr>
                    <tr><th>Nationality</th><td>{{ $data->nationality }}</td></tr>

                    <tr><th>Overall Experience</th><td>{{ ucfirst(str_replace('-', ' ', $data->overall)) }}</td></tr>
                    <tr><th>Guide Rating</th><td>{{ ucfirst($data->guide) }}</td></tr>
                    <tr><th>Porter Rating</th><td>{{ ucfirst($data->porter) }}</td></tr>
                    <tr><th>Accommodation</th><td>{{ ucfirst(str_replace('-', ' ', $data->accommodation)) }}</td></tr>
                    <tr><th>Recommend</th><td>{{ ucfirst($data->recommend) }}</td></tr>

                    <tr><th>Favourite Part</th><td>{{ $data->favourite }}</td></tr>
                    <tr><th>Improvement Needed</th><td>{{ $data->improvement }}</td></tr>

                    <tr><th>Guide Professionalism</th><td>{{ $data->guide_professionalism }}</td></tr>
                    <tr><th>Guide Knowledge</th><td>{{ $data->guide_knowledge }}</td></tr>
                    <tr><th>Porter Support</th><td>{{ $data->porter_support }}</td></tr>

                    <tr><th>Additional Comments</th><td>{{ $data->comments }}</td></tr>

                    <tr>
                        <th>Guide Qualities</th>
                        <td>
                            @if(!empty($data->guide_qualities))
                                <ul class="mb-0">
                                    @foreach($data->guide_qualities as $q)
                                        <li>{{ ucfirst($q) }}</li>
                                    @endforeach
                                </ul>
                            @else
                                —
                            @endif

                        </td>
                    </tr>

                    <tr><th>Other Guide Qualities</th><td>{{ $data->guide_qualities_other ?? '—' }}</td></tr>
                    <tr><th>Guide Score</th><td>{{ $data->guide_score }}/20</td></tr>
                    <tr><th>Story</th><td>{{ $data->story }}</td></tr>
                    <tr><th>Newsletter</th><td>{{ ucfirst($data->newsletter) }}</td></tr>
                    <tr><th>Email</th><td>{{ $data->email }}</td></tr>

                    <tr>
                        <th>Future Destinations</th>
                        <td>
                            @if(!empty($data->future_destinations))
                                <ul class="mb-0">
                                    @foreach($data->future_destinations as $d)
                                        <li>{{ ucfirst(str_replace('_', ' ', $d)) }}</li>
                                    @endforeach
                                </ul>
                            @else
                                —
                            @endif
                        </td>
                    </tr>

                    <tr><th>Other Destinations</th><td>{{ $data->future_destinations_other ?? '—' }}</td></tr>
                    <tr><th>Heard About Us</th>
                        <td>{{ ucfirst($data->heard_about) }}</td>
                    </tr>
                    <tr><th>Other Source</th><td>{{ $data->heard_about_other ?? '—' }}</td></tr>

                    <tr><th>Submitted At</th><td>{{ $data->created_at->format('d M Y') }}</td></tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
@endsection
