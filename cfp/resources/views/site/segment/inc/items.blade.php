@if(!$items->isEmpty())
    <ul class="w-100 m-top-10 list-segment m-top-1024-0">
        @foreach($items as $row)
            <li class="w-100">
                <div class="w-100">
                    <a class="d_flex wrap" onclick="segment($(this))" href="javascript:void(0);" title="{{ $row->name }}">
                        <figure class="self-center">
                            <img class="f-left" src="{{ asset('/assets/site/images/action-list.png') }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
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
@endif