@extends('menunavegation')
@section('content')
<div class="card border-primary">
  <h5 class="card-header bg-primary text-white">Avaliações</h5>
  <div class="card-body">
  <table class="table table-bordered table-hover">
    <thead>
        <tr class="table-primary">
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($avaliacoes as $avaliacao)
        <tr>
        <td>{{$avaliacao->nome_paciente}}</td>
        <td>{{$avaliacao->email_paciente}}</td>
        <td>{{$avaliacao->telefone_paciente}}</td>
        <td>
        <div class="d-flex">
            <a class="btn btn-primary ms-2" href="{{route('editar',$avaliacao->id)}}">Editar</a>
                <form action="{{route('delete',$avaliacao->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onClick="return confirm('Tem certeza que deseja excluir esta avaliação?')" class="btn btn-danger ms-2">Excluir</button>
                </form>
                <a class="btn btn-secondary ms-2" href="{{ route('exportar.pdf', ['id' => $avaliacao->id]) }}">Exportar Relatório</a>

        </div>

        </td>
        </tr>
        @endforeach
        </tbody>


    </table>
    <div class="d-flex justify-content-center">
        {!! $avaliacoes->links() !!}
        </div>
  </div>
</div>

@endsection
