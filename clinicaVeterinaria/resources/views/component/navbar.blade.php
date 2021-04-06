<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" arialabel="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <li class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">

            <li @if($current=="home" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/">Home</a>
            </li>
            <li @if($current=="clientes" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/clientes">Clientes</a>
            </li>
            <li @if($current=="animais" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/animais">Animais</a>
            </li>
            <li @if($current=="consultas" ) class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="/consultas">Consultas</a>
            </li>

        </ul>
    </li>
</nav>