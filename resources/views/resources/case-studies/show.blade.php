{{-- Single Case Study--}}
@extends('layout')

@section('body')
@if( !empty($entry->subheader) )
    <h1>{{ $entry->title }}</h1>
    <h2>{{ $entry->subheader }}</h2>
@else
    <h1 class="page-title">{{ $entry->title }}</h1>
@endif
<div class="row">
    <div class="col-xs-12 col-md-12">
        <img src="{{ $entry->featuredImage->getFile()->getUrl() }}" alt="{{ $entry->title }}" class="img-fluid single__img">
        @if(count($entry->highlightedExpertise) > 0)
        <h2 class="single__subheader">Highlighted Expertise</h2>
        <ul class="single__highlights">
            @foreach($entry->highlightedExpertise as $exp)
                <li class="single__highlights__item">{{ $exp }}</li>
            @endforeach
        </ul>
        @endif
        <div class="single__content">{!! $renderer->render($entry->content) !!}</div>
    </div>
</div>
@endsection