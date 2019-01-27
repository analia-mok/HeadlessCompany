{{-- Home Page --}}

@extends('layout')

@section('body')
{{-- Hero --}}
<div class="row">
    <div class="col-xs-12 col-md-12 home__hero">
        <div class="home__hero__content">
            <h1>{{ $page->heroTitle }}</h1>
            <p class="home__hero__content__subtitle">{{ $page->heroSubtitle }}</p>
        </div>
        <img src="{{ $hero_img->getFile()->getUrl() }}" alt="Headless Company Logo" class="home__hero__img">
    </div>
</div>
<h1 class="home__section-header">{{ $page->servicesTitle }}</h1>
{{-- Services --}}
<div class="row">
    @if( count($services) > 0 )
        @foreach($services as $service)
            <div class="col-xs-12 col-lg-4">
                <div class="home__services-card">
                    <img src="{{ $service->icon->getFile()->getUrl() }}" alt="{{ $service->name }}">
                    <h3 class="home__services-card__title">{{ $service->name }}</h3>
                    <p>{{ $service->description }}</p>
                </div>
            </div>
        @endforeach
    @endif
</div>
{{-- Resources CTA --}}
<div class="row">
    <div class="col-xs-12 col-md-12">
        @component('components.landing-cta', [
            'entries'   => $resources,
            'align'     => 'right'
            ])
            @slot('description')
            <h2>{{ $page->resourcesTitle }}</h2>
            <p>{{ $page->resourcesDescription }}</p>
            @endslot
        @endcomponent
    </div>
</div>
{{-- Latest Blog Posts CTA --}}
<div class="row"></div>
@endsection