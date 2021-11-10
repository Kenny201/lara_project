@extends('layouts.index')
@section('content')
    <section class="px-6 py-8">
        @include('home.nav.index')
        @include('home.header.index')
        @include('home.articles.index')
        @include('home.footer.index')
    </section>
@endsection
