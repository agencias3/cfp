<section class="overflow-h b-radius-10 w-1024-100">
    <h5 class="w-100 t-align-c secondary-color f-size-55 font-3 f-size-1024-26">
        Informações<br />
        de Contato
    </h5>
    <nav class="w-100 d_flex justify-center list-group-contact">
        <ul class="d_flex direction-column w-1024-100">
            <li class="d_flex">
                <figure>
                    <img src="{{ asset('assets/site/images/icon-1.png') }}" title="E-mails de contato" alt="E-mails de contato" />
                </figure>
                <div>
                    <p>
                        <a href="mailto:{{ session()->get('configuration')[5]['description'] }}" title="{{  session()->get('configuration')[5]['description'] }}">
                            {{  session()->get('configuration')[5]['description'] }}
                        </a>
                        @if(isPost(session()->get('configuration')[6]['description']))
                            <br /><a href="mailto:{{ session()->get('configuration')[6]['description'] }}" title="{{  session()->get('configuration')[6]['description'] }}">
                                {{  session()->get('configuration')[6]['description'] }}
                            </a>
                        @endif
                    </p>
                </div>
            </li>
            <li class="d_flex">
                <figure>
                    <img src="{{ asset('assets/site/images/icon-2.png') }}" title="Telefone de contato" alt="Telefone de contato" />
                </figure>
                <div>
                    <p>
                        {{  session()->get('configuration')[3]['description'] }}
                        @if(isPost(session()->get('configuration')[4]['description']))
                            <br />{{  session()->get('configuration')[4]['description'] }}
                        @endif
                    </p>
                </div>
            </li>
            <li class="d_flex">
                <figure>
                    <img src="{{ asset('assets/site/images/icon-3.png') }}" title="Endereço" alt="Endereço" />
                </figure>
                <div>
                    <p>
                        {!! session()->get('configuration')[7]['description'] !!}
                    </p>
                </div>
            </li>
            @if(
            isPost(session()->get('configuration')[9]['description']) ||
            isPost(session()->get('configuration')[10]['description']) ||
            isPost(session()->get('configuration')[11]['description'])
            )
                <li class="d_flex">
                    <figure>
                        <img src="{{ asset('assets/site/images/icon-4.png') }}" title="Redes Sociais" alt="Redes Sociais" />
                    </figure>
                    <div>
                        <p>Redes Sociais:</p>
                        <ul class="w-100 d_flex wrap c-left">
                            @if(isPost(session()->get('configuration')[9]['description']))
                                <li>
                                    <a href="{{ session()->get('configuration')[9]['description'] }}" target="_blank" title="Facebook">
                                        <img src="{{ asset('assets/site/images/social-1.png') }}" title="Facebook" alt="Facebook" />
                                    </a>
                                </li>
                            @endif
                            @if(isPost(session()->get('configuration')[10]['description']))
                                <li>
                                    <a href="{{ session()->get('configuration')[10]['description'] }}" target="_blank" title="Instagram">
                                        <img src="{{ asset('assets/site/images/social-2.png') }}" title="Instagram" alt="Instagram" />
                                    </a>
                                </li>
                            @endif
                            @if(isPost(session()->get('configuration')[11]['description']))
                                <li>
                                    <a href="{{ session()->get('configuration')[11]['description'] }}" target="_blank" title="Linkedin">
                                        <img src="{{ asset('assets/site/images/social-3.png') }}" title="Linkedin" alt="Linkedin" />
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </li>
            @endif
        </ul>
    </nav>
</section>