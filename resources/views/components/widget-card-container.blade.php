@foreach($entries as $entry)
<div class="col-xs-12 col-md-6 col-lg-4">
    <div class="card">
        <img src="{{ $entry->featuredImage->getFile()->getUrl() }}"
        alt="{{ $entry->title }}" class="card-img-top">
        <div class="card-body">
            <span class="card__category">{{ $type }}</span>
            <h3 class="card__title">{{ $entry->title }}</h3>
            <div class="card__content">
                @php
                $output = $renderer->render($entry->summary);
                echo str_limit(strip_tags($output), 250);
                @endphp
            </div>
            <a href="/{{ $base_slug }}/{{ $entry->slug }}" class="card__link">Read More</a>
        </div>
    </div>
</div>
@endforeach