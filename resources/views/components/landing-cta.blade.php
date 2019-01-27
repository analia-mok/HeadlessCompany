{{-- $align: Refers to the alignment of the entries in the container --}}
<div class="landing-cta">
    @if( $align === 'right' )
        <div class="landing-cta__description">
            {{ $description }}
        </div>
    @endif
    @if( count($entries) > 0 )
        <div class="landing-cta__entries">
            @foreach( $entries as $entry )
                <div class="landing-cta__entries__card">
                    <img src="{{ $entry->featuredImage->getFile()->getUrl() }}" alt="{{ $entry->title }}">
                    <div class="landing-cta__entries__card__overlay"></div>
                    @php
                        $content_type = $entry->getContentType()->getName();
                        $slug = str_slug($content_type, '-');
                    @endphp
                    <a href="/{{ $slug }}/{{ $entry->slug }}" class="landing-cta__entries__card__content">
                        <span>{{ $content_type }}</span>
                        <h3>{{ $entry->title }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    @endif
    @if( $align === 'left' )
        <div class="landing-cta__description">
            {{ $description }}
        </div>
    @endif
</div>