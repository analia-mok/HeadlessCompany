{{-- Home Page --}}

@extends('layout')

@section('body')
<div class="row">
    <div class="col-xs-12 col-md-12 home__hero">
        <div class="home__hero__content">
            <h1>{{ $page->heroTitle }}</h1>
            <p class="home__hero__content__subtitle">{{ $page->heroSubtitle }}</p>
        </div>
        <img src="{{ $hero_img->getFile()->getUrl() }}" alt="Headless Company Logo" class="home__hero__img">
    </div>
</div>
@endsection