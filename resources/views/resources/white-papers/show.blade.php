{{-- Single White Paper--}}
@extends('layout')

@section('body')
<h1 class="page-title">{{ $entry->title }}</h1>

<div class="row single">
    <div class="col-xs-12 col-sm-12 col-lg-7">
        <img src="{{ $entry->featuredImage->getFile()->getUrl() }}" alt="{{ $entry->title }}" class="img-fluid single__img">
        <div class="single__content">
            @if(!empty($entry->contentHeader))
                <h2 class="single__subheader">{{ $entry->contentHeader }}</h2>
            @endif
            {!! $renderer->render($entry->summary) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-lg-5">
        @component('components.download-form')
            @if(!empty($entry->downloadFormTitle))
                {{ $entry->downloadFormTitle }}
            @else
                Read more about this publication
            @endif
        @endcomponent
    </div>
</div>
@endsection