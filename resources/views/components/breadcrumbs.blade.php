@unless ($breadcrumbs->isEmpty())
    <div class="px-2 mx-2 navbar-start">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!is_null($breadcrumb->url) && !$loop->last)
                <a href="{{ $breadcrumb->url }}" class="uppercase text-primary font-light tracking-widest">
                    {{ $breadcrumb->title }}
                <a>
            @else
                <span class="uppercase font-light tracking-widest">@if(!$loop->first)&nbsp;/&nbsp;@endif{{ $breadcrumb->title }}</span>
            @endif
        @endforeach
    </div>
@endunless