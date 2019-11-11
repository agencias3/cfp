<div class="w-100 m-top-80 container m-top-1024-30">
    <h3 class="w-100 t-align-c main-color f-size-35 font-3 f-size-1024-26">
        <?php $page->show(9); ?>
        {!! session()->get('page')[9]['name'] !!}
    </h3>
    <div class="w-70 m-top-30 m-left-15 t-align-c text w-1024-100 m-top-1024-20">
        {!! session()->get('page')[9]['description'] !!}
    </div>
</div>
<?php $images = $page->images(9); ?>
@if(!$images->isEmpty())
<article class="w-100 m-top-40 d_flex wrap justify-center list-group m-top-1024-20">
    @foreach($images as $row)
    <div class="item-2">
        <a class="smooth" href="{{ asset('uploads/page/'.$row->image) }}" title="{{ $row->name }}">
            <figure class="w-100 d_flex justify-center">
                <img class="max-w-100" src="{{ asset('uploads/page/'.$row->image) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
            </figure>
        </a>
    </div>
    @endforeach
</article>
@endif