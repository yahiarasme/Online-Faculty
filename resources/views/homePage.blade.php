
@extends('layouts.app')
@section('content')
@include('homeContent/slider')

@include('homeContent/about')
@include('homeContent/faculties')
@include('homeContent/service')

<div class="" style="background:rgba(49,55,61,0.85)	; width:100%;">
    <div class=" justify-content-center">
        <div class="">
            <div class="">
                @include('feedback/feedback')
            </div>
        </div>
    </div>
</div>

@include('homeContent/client')
@include('homeContent/footer')

@endsection
<link rel="stylesheet" href="{{ asset('feedback-style.css') }}">
<link rel="stylesheet" href="{{ asset('normalize.css') }}">
