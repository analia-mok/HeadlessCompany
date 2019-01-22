@extends('layout')

@section('body')
<h1 class="page-title">Ebooks</h1>
<div class="row card__container card__container--multi">
    @if(count($entries) > 0)
        @component('components.widget-card-container', [
            'entries' => $entries,
            'renderer' => $renderer,
            'type' => 'Ebooks',
            'base_slug' => 'ebook'])
        @endcomponent
    @else
        <div class="col-xs-12 col-md-12 card__container__nocontent">No Ebooks Found</div>
    @endif
</div>
@endsection