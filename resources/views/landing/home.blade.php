@extends('layouts.landing')

@section('content')
    @include('landing.components.hero')
    @include('landing.components.slider')
    @include('landing.components.about')
    @include('landing.components.promo')
    @include('landing.components.rating')
    @include('landing.components.features')
    @include('landing.components.popular_product')
    @include('landing.components.contact')
@endsection
