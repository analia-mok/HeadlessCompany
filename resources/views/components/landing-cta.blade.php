{{-- $align: Refers to the alignment of the entries in the container --}}
<div class="landing-cta">

    <div class="landing-cta__description landing-cta__description--mobile {{ $align === 'right' ? 'landing-cta__description--display': '' }}">
        {{ $description }}
    </div>

    @if( count($entries) > 0 )
        <div class="landing-cta__entries">
            @foreach( $entries as $entry )
                <div class="landing-cta__entries__card {{ $align === 'left' ? 'landing-cta__entries__card--left': '' }}">
                    <img src="{{ $entry->featuredImage->getFile()->getUrl() }}" alt="{{ $entry->title }}">
                    <div class="landing-cta__entries__card__overlay"></div>
                    @php
                        $content_type = $entry->getContentType()->getName();
                        $slug = '';

                        if ($content_type === 'Blog Post') {
                            $slug = 'blog';
                            $content_type = (count($entry->categories) > 0) ? $entry->categories[0]->name : 'Uncategorized';
                        } else {
                            $slug = str_slug($content_type, '-');
                        }
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
        <div class="landing-cta__description landing-cta__description--left">
            {{ $description }}
        </div>
    @endif
</div>