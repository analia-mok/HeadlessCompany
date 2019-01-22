@extends('layout')

@section('body')
<h1 class="page-title">Case Studies</h1>
<div class="row card__container card__container--multi">
    @if(count($entries) > 0)
        @component('components.widget-card-container', [
            'entries' => $entries,
            'renderer' => $renderer,
            'type' => 'Case Studies',
            'base_slug' => 'case-study'])
        @endcomponent
    @else
        <div class="col-xs-12 col-md-12 card__container__nocontent">No Case Studies Found</div>
    @endif
</div>
@endsection