@extends('layout.app')

@section('content')

{{-- 500 eorr --}}
    <div class="error-box">
        <div class="error-body text-center">
            <h1 class="error-title text-danger">500</h1>
            <h3 class="text-uppercase error-subtitle">PAGE NOT FOUND !</h3>
            <p class="text-muted m-t-30 m-b-30">The HTTP status code 500 is a generic error response. It means that the server encountered an unexpected condition that prevented it from fulfilling the request. This error is usually returned by the server when no other error code is suitable.</p>
            <a href="{{route ('login')}}" 
            class="btn btn-danger btn-rounded waves-effect waves-light m-b-40 text-white">Back to home</a>
        </div>
    </div>




@endsection