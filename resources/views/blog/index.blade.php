{{-- Blog Page --}}
@extends('layout')

@section('body')
<h1 class="page-title">Our Latest Posts</h1>
<div class="row card__container card__container--multi">
    @if( count($entries) > 0 )
        {{-- Featured Blog Post --}}
        <div class="col-xs-12 col-sm-12 card--full-width">
            <div class="card--full-width__img-container box">
                <div class="content">
                    <img src="{{ $featured_post->featuredImage->getFile()->getUrl() }}"
                        alt="{{ $featured_post->title }}" />
                </div>
            </div>
            <div class="card__content">
                <div class="card__content__category">
                    @if( count($featured_post->categories) > 0 )
                        @foreach( $featured_post->categories as $cat )
                            <span class="card__category">{{ $cat->name }}</span>
                        @endforeach
                    @else
                        <span class="card__category">Uncategorized</span>
                    @endif
                </div>
                <h3 class="card__title">{{ $featured_post->title }}</h3>
                <div class="card__content__body">
                    @php
                    $output = $renderer->render($featured_post->content);
                    echo str_limit(strip_tags($output), 250);
                    @endphp
                </div>
                <a href="/blog/{{ $featured_post->slug }}" class="card__link">Read More</a>
            </div>
        </div>
    @else
        <div class="col-xs-12 col-md-12 card__container__nocontent">No Ebooks Found</div>
    @endif
</div>
{{-- Remaing Blog Posts (If any) --}}
@if( count($entries) > 1 )
<div class="row card__container card__container--multi">
    @php $index = 0; @endphp
    @foreach($entries as $entry)
        {{-- Skip First Entry --}}
        @if( $index === 0)
            @php $index = 1; @endphp
            @continue
        @endif

        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card">
                <img src="{{ $entry->featuredImage->getFile()->getUrl() }}"
                alt="{{ $entry->title }}" class="card-img-top">
                <div class="card-body">
                    <div class="card__container__categories">
                        @if( count($entry->categories) > 0 )
                            @foreach( $entry->categories as $cat )
                                <span class="card__category">{{ $cat->name }}</span>
                            @endforeach
                        @else
                            <span class="card__category">Uncategorized</span>
                        @endif
                    </div>
                    <h3 class="card__title">{{ $entry->title }}</h3>
                    <div class="card__content">
                        @php
                        $output = $renderer->render($entry->content);
                        echo str_limit(strip_tags($output), 250);
                        @endphp
                    </div>
                    <a href="/blog/{{ $entry->slug }}" class="card__link">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endif
@endsection