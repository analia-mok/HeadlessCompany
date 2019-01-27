{{-- Single Blog Post --}}
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
        @if(count($entry->categories) > 0)
        <ul class="single__categories">
            @foreach($entry->categories as $cat)
                <li class="single__categories__item">{{ $cat->name }}</li>
            @endforeach
        </ul>
        @endif
        <div class="single__content">{!! $renderer->render($entry->content) !!}</div>
    </div>
</div>
@endsection