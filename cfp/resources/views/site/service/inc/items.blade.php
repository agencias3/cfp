@if(!$items->isEmpty())
    <section class="w-100 bg-white p-top-80">
        <div class="center">
            <article class="w-100">
                @if($service->call_items)
                    <span class="w-100 t-upper main-color f-size-16">
                    {{ $service->call_items }}
                </span>
                @endif
                <ul class="w-100 m-top-10 list-segment list-segment-2">
                    @foreach($items as $row)
                        <li class="w-100">
                            <div class="w-100">
                                <a class="d_flex wrap" onclick="segment($(this))" href="javascript:void(0);" title="">
                                    <figure class="self-center">
                                        <img class="f-left" src="{{ asset('/assets/site/images/action-list.png') }}" title="LOREM IPSUM DOLOR SIT AMET" alt="LOREM IPSUM DOLOR SIT AMET" />
                                    </figure>
                                    <span class="flex-1 self-center">
                                   {{ $row->name }}
                               </span>
                                </a>
                                <article class="w-100 text">
                                    {!! $row->description !!}
                                </article>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </article>
        </div>
    </section>
@endif