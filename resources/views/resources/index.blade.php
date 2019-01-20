@extends('layout')

@section('body')
<h1>Resources</h1>
<div class="row">
    @foreach($white_papers as $entry)
    <div class="col-xs-12 col-md-4 card">
        <img src="{{ $entry->featuredImage->getFile()->getUrl() }}"
             alt="{{ $entry->title }}" class="card-img-top">
        <div class="card-body">
            <span class="card__category">CASE STUDY</span>
            <h3 class="card__title">{{ $entry->title }}</h3>
            {{-- <div class="card__content">{!! $entry->summary !!}</div> --}}
            @php
                $output = $renderer->render($entry->summary);
                echo str_limit(strip_tags($output), 250);
            @endphp
            <a href="/white-paper/{{ $entry->slug }}" class="card__link">Read More</a>
        </div>
    </div>
    @endforeach
</div>
@endsection