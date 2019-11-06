@if(!$actings->isEmpty())
    <section class="w-100 p-top-50 p-bottom-35 p-top-1024-30 p-bottom-1024-15">
        <div class="center">
            <figure class="w-100 t-align-c">
                <img class="display-inline-block" src="{{ asset('assets/site/images/icon-5.png') }}" title="" alt="" />
            </figure>
            <h2 class="w-100 m-top-30 t-align-c secondary-color f-size-55 font-3 f-size-1024-26">
                Áreas de Atuação
            </h2>
            <article class="w-100 m-top-35 d_flex wrap list-group-2 m-top-1024-15">
                @foreach($actings as $row)
                    <?php
                    $route = route('acting.show', ['seo_link' => $row->seo_link]);
                    $cover = '';
                    $image = $row->image;
                    if(isPost($image)){
                        $cover = asset('uploads/acting/'.$image);
                    }
                    ?>
                    <div class="relative item w-600-100">
                        <a class="w-100 h-100" href="{{ $route }}" title="{{ strip_tags($row->name) }}">
                            @if(isPost($cover))
                                <figure class="w-100 h-100 absolute z-index-1 top-0 left-0 smooth" style="background: url({{ $cover }}) no-repeat;background-size: cover;background-position: center center;"></figure>
                            @endif
                            <div class="w-100 h-100 d_flex">
                                <p class="self-end">
                                <span>
                                    {!! $row->name !!}
                                </span>
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </article>
        </div>
    </section>
@endif