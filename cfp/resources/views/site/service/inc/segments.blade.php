@if(!$segments->isEmpty())
<div class="w-100 container">
    <h3 class="w-100 title-2">
        <span>Segmentos Relacionados</span>
    </h3>
</div>
<article class="w-100 m-top-30 slider-slick-3">
    @foreach($segments as $row)
    <div class="d_flex direction-column item">
        <a class="w-100 h-100 d_flex direction-column" href="{{ route('segment.show', $row->seo_link) }}" title="{{ $row->name }}">
            @if(isPost($row->image))
            <figure class="w-100">
                <img class="w-100 smooth" src="{{ asset('uploads/segment/'.$row->image) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
            </figure>
            @endif
            <article class="w-100">
                <figure class="w-100 d_flex justify-center relative">
                    @if(isPost($row->icon))
                    <div class="self-center smooth">
                        <img src="{{ asset('uploads/segment/'.$row->icon) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                    </div>
                    @endif
                    @if(isPost($row->icon_hover))
                    <div class="self-center w-100 h-100 d_flex justify-center absolute top-0 left-0 opacity-0 smooth">
                        <img class="self-center" src="{{ asset('uploads/segment/'.$row->icon_hover) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                    </div>
                    @endif
                </figure>
                <span class="w-100 smooth">
                    {{ $row->name }}
                </span>
            </article>
        </a>
    </div>
    @endforeach
</article>
@endif