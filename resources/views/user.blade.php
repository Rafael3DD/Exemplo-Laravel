
@extends('layouts.default')

{{-- {{route('user.show',55)}} --}}

@section('title', 'User title') {{--Altera o título--}}


@push('styles')
    <link rel="stylesheet" href="{{asset('css/user.css')}}" >
@endpush


<h1>User</h1>
{{$user->name}}
{{$user->user}}





@section('content')
@push('scripts')
<script src="{{asset('js/user.js')}}"></script>
@endpush
{{-- {{date('d/m/y')}} --}}
@endsection