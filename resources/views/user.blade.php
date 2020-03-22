<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Troia</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/app.css'>
    <script src='/js/app.js'></script>
</head>
<body>
    <nav class="navbar bg-dark ">
    <h3 class="text-light">Troia</h3>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
    </nav>

    <div class="col-6 mx-auto mt-5" >

        <h3>Editar perfil do usuário: {{ $data['userName'] }}</h3>
        <hr>
        <form>

            @if ($data['permissions']['editName'])
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name">
                </div>
            @endif

            @if ($data['permissions']['editemail'])
                <div class="form-group">
                    <label for="inputEmail">E-mail</label>
                    <input type="email" class="form-control" id="email">
                </div>
            @endif

            @if ($data['permissions']['editPassword'])
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" id="password">
                </div>
            @endif

            @if ($data['permissions']['editArea'])
                <div class="form-group">
                    <label for="select">Área participante</label>
                    <select class="custom-select" id="select">

                        @foreach ($data['areas'] as $key => $area)
                            <option value="{{ $key }}"> {{ $area }} </option>
                        @endforeach

                    </select>
                </div>
            @endif

            <button type="submit" class="btn btn-success">Gravar</button>

        </form>

    </div>

    <footer class="footer fixed-bottom">

        <div class="footer-copyright text-center py-3 bg-dark text-light">© 2020 Copyright:
            <a class="text-light" href="https://github.com/WillSerafim">Willian Serafim</a>
        </div>

    </footer>

</body>
</html>
