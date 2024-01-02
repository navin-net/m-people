@extends('layout.app')

@section('content')

{{-- 404 eorr --}}
    <div class="error-box">
        <div class="error-body text-center">
            <h1 class="error-title text-danger">404</h1>
            <h3 class="text-uppercase error-subtitle">PAGE NOT FOUND !</h3>
            <p class="text-muted m-t-30 m-b-30">404 not found is an HTTP status code error that indicates the specific page you are trying to visit is non-existent. Usually, it occurs when the domain points to an incorrect DNS address, files or folders have misconfigured permissions, or the system runs a corrupt . htaccess file.</p>
            <a href="{{route ('login') }}" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40 text-white">Back to home</a>
        </div>
    </div>




@endsection