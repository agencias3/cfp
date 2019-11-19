<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-title">
            Menu
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Menu"></i>
        </div>
    </div>
    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li @if(isset($config['activeMenu']) && $config['activeMenu'] == 'home')class="nav-expanded nav-active"@endif>
                        <a href="{{ route('admin.home.index') }}">
                            <i class="glyphicon glyphicon-th" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-parent @if(isset($config['activeMenu']) && $config['activeMenu'] == 'banner') nav-expanded nav-active @endif">
                        <a>
                            <i class="fa fa-image" aria-hidden="true"></i>
                            <span>Banner</span>
                        </a>
                        <ul class="nav nav-children">
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'desktop')class="active"@endif>
                                <a href="{{ route('admin.banner.desktop.index') }}">
                                    Desktop
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'mobile')class="active"@endif>
                                <a href="{{ route('admin.banner.mobile.index') }}">
                                    Mobile
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent @if(isset($config['activeMenu']) && $config['activeMenu'] == 'about') nav-expanded nav-active @endif">
                        <a>
                            <i class="fa fa-institution" aria-hidden="true"></i>
                            <span>Quem Somos</span>
                        </a>
                        <ul class="nav nav-children">
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'page-2')class="active"@endif>
                                <a href="{{ route('admin.configuration.page.edit', 2) }}">
                                    O escritório
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'page-8')class="active"@endif>
                                <a href="{{ route('admin.configuration.page.gallery.index', 8) }}">
                                    Galeria
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'page-3')class="active"@endif>
                                <a href="{{ route('admin.configuration.page.edit', 3) }}">
                                    Ao harmonizar
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'page-4')class="active"@endif>
                                <a href="{{ route('admin.configuration.page.edit', 4) }}">
                                    Ampla rede
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'page-5')class="active"@endif>
                                <a href="{{ route('admin.configuration.page.edit', 5) }}">
                                    Nossa Missão
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'page-6')class="active"@endif>
                                <a href="{{ route('admin.configuration.page.edit', 6) }}">
                                    Nossa Visão
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'page-7')class="active"@endif>
                                <a href="{{ route('admin.configuration.page.edit', 7) }}">
                                    Nossos Valores
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'team')class="active"@endif>
                                <a href="{{ route('admin.team.index') }}">
                                    Equipe
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li @if(isset($config['activeMenu']) && $config['activeMenu'] == 'awards')class="nav-expanded nav-active"@endif>
                        <a href="{{ route('admin.configuration.page.edit', 9) }}">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            <span>Premiações</span>
                        </a>
                    </li>
                    <li @if(isset($config['activeMenu']) && $config['activeMenu'] == 'service')class="nav-expanded nav-active"@endif>
                        <a href="{{ route('admin.service.index') }}">
                            <i class="fa fa-list-ol" aria-hidden="true"></i>
                            <span>Áreas de Expertise</span>
                        </a>
                    </li>
                    <li @if(isset($config['activeMenu']) && $config['activeMenu'] == 'segment')class="nav-expanded nav-active"@endif>
                        <a href="{{ route('admin.segment.index') }}">
                            <i class="fa fa-list-alt" aria-hidden="true"></i></i>
                            <span>Segmentos</span>
                        </a>
                    </li>
                    <li class="nav-parent @if(isset($config['activeMenu']) && $config['activeMenu'] == 'blog') nav-expanded nav-active @endif">
                        <a>
                            <i class="fa fa-tags" aria-hidden="true"></i>
                            <span>Blog</span>
                        </a>
                        <ul class="nav nav-children">
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'post')class="active"@endif>
                                <a href="{{ route('admin.blog.post.index') }}">
                                    Blog
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'tag')class="active"@endif>
                                <a href="{{ route('admin.blog.tag.index') }}">
                                    Tag
                                </a>
                            </li>
                        </ul>

                    <li class="nav-parent @if(isset($config['activeMenu']) && $config['activeMenu'] == 'work') nav-expanded nav-active @endif">
                        <a>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>Carreiras</span>
                        </a>
                        <ul class="nav nav-children">
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'work')class="active"@endif>
                                <a href="{{ route('admin.work.index') }}">
                                    Cadastros
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'vacancy')class="active"@endif>
                                <a href="{{ route('admin.work.vacancy.index') }}">
                                    Vagas
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'page-10')class="active"@endif>
                                <a href="{{ route('admin.configuration.page.edit', 10) }}">
                                    Trabalhe na CFP
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'page-11')class="active"@endif>
                                <a href="{{ route('admin.configuration.page.edit', 11) }}">
                                    Aqui, valorizamos
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent @if(isset($config['activeMenu']) && $config['activeMenu'] == 'form') nav-expanded nav-active @endif">
                        <a>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span>Formulários</span>
                        </a>
                        <ul class="nav nav-children">
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'newsletter')class="active"@endif>
                                <a href="{{ route('admin.newsletter.index') }}">
                                    Newsletter
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'contact')class="active"@endif>
                                <a href="{{ route('admin.contact.index') }}">
                                    Contatos
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent @if(isset($config['activeMenu']) && $config['activeMenu'] == 'configuration') nav-expanded nav-active @endif">
                        <a>
                            <i class="fa fa-gears" aria-hidden="true"></i>
                            <span>Configurações</span>
                        </a>
                        <ul class="nav nav-children">
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'keyword')class="active"@endif>
                                <a href="{{ route('admin.configuration.keyword.index') }}">
                                    Keywords
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'page')class="active"@endif>
                                <a href="{{ route('admin.configuration.page.index') }}">
                                    Páginas e Textos
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'seo-page')class="active"@endif>
                                <a href="{{ route('admin.configuration.seo-page.index') }}">
                                    SEO Páginas
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'form')class="active"@endif>
                                <a href="{{ route('admin.configuration.form.index') }}">
                                    Formulários
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'configuration')class="active"@endif>
                                <a href="{{ route('admin.configuration.configuration.index') }}">
                                    Configurações
                                </a>
                            </li>
                            <li @if(isset($config['activeMenuN2']) && $config['activeMenuN2'] == 'newsletter')class="active"@endif>
                                <a href="{{ route('admin.configuration.user.index') }}">
                                    Usuários
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>


