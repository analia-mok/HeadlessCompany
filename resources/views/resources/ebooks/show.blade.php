{{-- Single White Paper--}}
@extends('layout')

@section('body')
<h1 class="page-title">{{ $entry->title }}</h1>
<div class="row">
    <div class="col-xs-12 col-md-12">
        <img src="{{ $entry->featuredImage->getFile()->getUrl() }}" alt="{{ $entry->title }}" class="img-fluid single__img">
        <div class="single__content">{!! $renderer->render($entry->summary) !!}</div>
        {{-- TODO: Structure to match design --}}
    </div>
</div>
@endsection