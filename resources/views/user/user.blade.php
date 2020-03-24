@include('layout.app')


@include('components.nav')


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

@include('components.footer')
