<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ route('home')}}" class="simple-text logo-mini">{{ __('PFC') }}</a>
            <a href="{{ route('home')}}" class="simple-text logo-normal">{{ __('Insira nome') }}</a>
        </div>
        <ul class="nav">
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fas fa-users"></i>
                    <span class="nav-link-text" >{{ __('Usuários') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ __('Meu perfil') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Gerenciar usuários') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-paper"></i>
                    <span class="nav-link-text" >{{ __('Posts') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'posts') class="active " @endif>
                            <a href="{{ route('post.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Gerenciar posts') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'create.post') class="active " @endif>
                            <a href="{{ route('post.create')  }}">
                                <i class="fas fa-pencil-alt"></i>
                                <p>{{ __('Criar post') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="tim-icons icon-caps-small"></i>
                    <span class="nav-link-text" >{{ __('Categorias') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'categories') class="active " @endif>
                            <a href="{{ route('category.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ __('Gerenciar categorias') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'create.category') class="active " @endif>
                            <a href="{{ route('category.create')  }}">
                                <i class="fas fa-pencil-alt"></i>
                                <p>{{ __('Criar categoria') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
