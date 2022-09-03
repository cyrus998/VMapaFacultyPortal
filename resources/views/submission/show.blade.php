@extends('submission.layout')

@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 margin-tb">
            <div style="text-align: center;">
                <h4>Show Submission</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('submissions.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 20px;text-align: center;">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong><br>
                {{ $submission->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
            <div class="form-group">
                <strong>Details:</strong><br>
                {{ $submission->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
            <div class="form-group">
                <strong>Image:</strong><br>
                <a href="/images/{{ $submission->image }}">
                <img src="/images/{{ $submission->image }}" width="200px">
                </a>
            </div>
        </div>
    </div>
@endsection
