@extends('index');

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Contatos</h1>
</div>
<div>
    <form action="" method="GET">
        <input type="text" name="pesquisar" placeholder="Digite para pesquisar" />
        <button>Pesquisar</button>
        <a type="button" href="" class="btn btn-success float-end">Incluir</a>
    </form>
    <div class="table-responsive mt-4">
        @if ($findContatos->isEmpty())
        <p>Não existe dados.</p>

        @else
        <table class="table table-striped table-hsm">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Número</th>
                    <th scope="col">E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($findContatos as $contato)
                <tr>
                    <td>{{ $contato->nome }}</td>
                    <td>{{ $contato->numero }}</td>
                    <td>{{ $contato->email }}</td>
                    <td>
                        <!-- Formulário para exclusão -->
                        <form action="{{ route('contatos.delete', ['idUser' => $contato->id]) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Tem certeza que deseja excluir este contato?');">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection