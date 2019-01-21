@extends('layout')

@section('body')
<h1>Resources</h1>
<h3>White Papers</h3>
<div class="row card__container">
    @foreach($white_papers as $entry)
    <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="card">
            <img src="{{ $entry->featuredImage->getFile()->getUrl() }}"
            alt="{{ $entry->title }}" class="card-img-top">
            <div class="card-body">
                <span class="card__category">WHITE PAPER</span>
                <h3 class="card__title">{{ $entry->title }}</h3>
                <div class="card__content">
                    @php
                    $output = $renderer->render($entry->summary);
                    echo str_limit(strip_tags($output), 250);
                    @endphp
                </div>
                <a href="/white-paper/{{ $entry->slug }}" class="card__link">Read More</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="row">
    <div class="col-xs-12 col-lg-4 offset-lg-4 card__container__button-holder">
        <a href="/case-studies" class="button">See All Case Studies</a>
    </div>
</div>
@endsection