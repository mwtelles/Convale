@php
$routeArray = app('request')->route()->getAction();
$controllerAction = class_basename($routeArray['controller']);
list($controller, $action) = explode('@', $controllerAction);
@endphp



<!-- MENU DASHBOARD -->
@php
$class = '';

if ($controller == 'HomeController') {
$class = 'active';
}
@endphp

<li class="nav-item {{ $class }}">
    <a href="{{ route('admin.home') }}" class="nav-link ">
        <i class="fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>

<!-- MENU POSTS -->
@php
$class = '';

if ($controller == 'PostsController') {
$class = 'active';
}
@endphp

<li class="nav-item {{ $class }}">
    <a href="{{ route('admin.posts.index') }}" class="nav-link ">
        <i class="fas fa-newspaper"></i>
        <p>Publicações</p>
    </a>
</li>

<!-- MENU GALERIA -->
@php
$class = '';

if ($controller == 'GaleriasController') {
$class = 'active';
}
@endphp

<li class="nav-item {{ $class }}">
    <a href="{{ route('admin.galerias.index') }}" class="nav-link ">
        <i class="fas fa-images"></i>
        <p>Galeria</p>
    </a>
</li>


<!-- MENU CONFIGURAÇOES -->
@php
$class = 'collapsed';

if ($controller == 'EditaisController' || $controller == 'AtasController' || $controller == 'LeisController' || $controller == 'LicencasController' || $controller == 'SuperintendenciasController' || $controller == 'EstatutosController' || $controller == 'TransparenciasController' ) {
$class = 'active show';
}
@endphp
<li class="nav-item {{ $class }} ">
    <a data-toggle="collapse" href="#documentos">
        <i class="nav-icon fa fa-file-alt"></i>
        <p>Documentos</p>
        <span class="caret"></span>
    </a>
    <div class="{{ $class }} collapse collapsed " id="documentos">
        <ul class="nav nav-collapse">

         @can('index', \App\User::class)    
         @php
         $class = '';

         if ($controller == 'EditaisController')
         {
             $class = 'active';
         }
         @endphp
         <li class="{{ $class }}">
            <a href="{{ route('admin.editais.index') }}">
                <p class="sub-item">Editais</p>
            </a>
        </li>

        @endcan

        @php
        $class = '';

        if ($controller == 'AtasController') 
        {
            $class = 'active';
        }
        @endphp
        <li class="{{ $class }}">
            <a href="{{ route('admin.atas.index') }}">
                <p class="sub-item">Atas</p>
            </a>
        </li>

        @php
        $class = '';

        if ($controller == 'LeisController') 
        {
            $class = 'active';
        }
        @endphp
        <li class="{{ $class }}">
            <a href="{{ route('admin.leis.index') }}">
                <p class="sub-item">Leis</p>
            </a>
        </li>

        @php
        $class = '';

        if ($controller == 'EstatutosController') 
        {
            $class = 'active';
        }
        @endphp
        <li class="{{ $class }}">
            <a href="{{ route('admin.estatutos.index') }}">
                <p class="sub-item">Estatutos</p>
            </a>
        </li>

         @php
        $class = '';

        if ($controller == 'SuperintendenciasController') 
        {
            $class = 'active';
        }
        @endphp
        <li class="{{ $class }}">
            <a href="{{ route('admin.superintendencias.index') }}">
                <p class="sub-item">Superintendência</p>
            </a>
        </li>

        @php
        $class = '';

        if ($controller == 'TransparenciasController') 
        {
            $class = 'active';
        }
        @endphp
        <li class="{{ $class }}">
            <a href="{{ route('admin.transparencias.index') }}">
                <p class="sub-item">Transparência</p>
            </a>
        </li>

         @php
        $class = '';

        if ($controller == 'LicencasController') 
        {
            $class = 'active';
        }
        @endphp
        <li class="{{ $class }}">
            <a href="{{ route('admin.licencas.index') }}">
                <p class="sub-item">Licenças</p>
            </a>
        </li>

        @php
        $class = '';

        if ($controller == 'ServicosAterrosController') 
        {
            $class = 'active';
        }
        @endphp
        <li class="{{ $class }}">
            <a href="{{ route('admin.servicosaterros.index') }}">
                <p class="sub-item">Serviços Aterro</p>
            </a>
        </li>
    </ul>
</div>
</li>

<!-- MENU CONFIGURAÇOES -->
@php
$class = 'collapsed';

if ($controller == 'UsersController') {
$class = 'active show';
}
@endphp
<li class="nav-item {{ $class }} ">
    <a data-toggle="collapse" href="#submenu">
        <i class="nav-icon fa fa-cog"></i>
        <p>Configurações</p>
        <span class="caret"></span>
    </a>
    <div class="{{ $class }} collapse collapsed " id="submenu">
        <ul class="nav nav-collapse">

           @can('index', \App\User::class)    
           @php
           $class = '';

           if ($controller == 'UsersController' && $action <> 'profile')
           {
               $class = 'active';
           }
           @endphp
           <li class="{{ $class }}">
            <a href="{{ route('admin.users.index') }}">
                <p class="sub-item">Usuários</p>
            </a>
        </li>

        @endcan

        @php
        $class = '';

        if ($controller == 'UsersController' && $action == 'profile') 
        {
            $class = 'active';
        }
        @endphp
        <li class="{{ $class }}">
            <a href="{{ route('admin.users.profile') }}">
                <p class="sub-item">Perfil</p>
            </a>
        </li>
    </ul>
</div>
</li>

</ul>
</li>
