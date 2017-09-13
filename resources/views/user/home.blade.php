@extends('user.layouts.main')


@section('content')



    @include('user.inc.slider')

    @include('user.inc.featured')
    @include('user.inc.facility')

    @include('user.inc.reservation')

    @include('user.inc.rates')
    @include('user.inc.review')



@endsection