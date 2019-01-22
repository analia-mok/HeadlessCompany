@extends('layout')

@section('body')
<h1 class="page-title">White Papers</h1>
<div class="row card__container card__container--multi">
    @if(count($entries) > 0)
        @component('components.widget-card-container', [
            'entries' => $entries,
            'renderer' => $renderer,
            'type' => 'White Papers',
            'base_slug' => 'white-paper'])
        @endcomponent
    @else
        <div class="col-xs-12 col-md-12 card__container__nocontent">No White Papers Found</div>
    @endif
</div>
@endsection