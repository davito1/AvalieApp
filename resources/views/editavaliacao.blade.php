@extends('menunavegation')
@section('content')


<div class="card border-primary"> <h5 class="card-header bg-primary text-white">Avaliações</h5> <div class="card-body">
    <form action="{{route('up')}}" method='post'>
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$avaliacao->id}}">
<div class="row">
    <div class="col-md-4">
        <label for="">Nome</label>
        <input value="{{$avaliacao->nome_paciente}}" class="form-control" name="nome_paciente" type="text">
    </div>
    <div class="col-md-4">
        <label for="">Email</label>
        <input value="{{$avaliacao->email_paciente}}" class="form-control" name="email_paciente" type="text">
    </div>
    <div class="col-md-4">
        <label for="">Telefone</label>
        <input value="{{$avaliacao->telefone_paciente}}" class="form-control" name="telefone_paciente" type="text">
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Idade</label>
        <input value="{{$avaliacao->idade_paciente}}" class="form-control" name="idade_paciente" type="text">
    </div>
    <div class="col-md-4">
        <label for="">Porcentagem de Gordura</label>
        <input value="{{$avaliacao->porcentagem_gordura}}" class="form-control" name="porcentagem_gordura" type="text">
    </div>
    <div class="col-md-4">
        <label for="">Massa magra</label>
        <input value="{{$avaliacao->massa_magra}}" class="form-control" name="massa_magra" type="text">
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Sexo</label>
        <select class="form-select" name="sexo">
            <option value="Masculino" @if($avaliacao->sexo ===  'Masculino') selected @endif>Masculino</option>
            <option value="Feminino" @if($avaliacao->sexo ===  'Feminino') selected @endif>Feminino</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="">Objetivo da pratica</label>
        <input value="{{$avaliacao->objetivo_pratica}}" class="form-control" name="objetivo_pratica" type="text">
    </div>
    <div class="col-md-4">
        <label for="">Realiza Exercicios?</label>
        <select class="form-select" name="realiza_exercicios">
            <option value="1" @if($avaliacao->realiza_exercicios ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->realiza_exercicios ===  0) selected @endif>Não</option>
        </select>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Duração dos exercicios</label>
        <input value="{{$avaliacao->duracao_exercicios}}" class="form-control" name="duracao_exercicios" type="number" step="0.01" min='0'>
    </div>
</div>

<div class="row mt-3">
    <label for="">Quais dias da semana você realiza exercicios?</label>
</div>
<div class="row mt-1">
    <div class="col-md-2">
    <label for="">Segunda-Feira</label>
        <select class="form-select" name="segunda">
            <option value="1" @if($avaliacao->segunda ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->segunda ===  0) selected @endif>Não</option>
        </select>
    </div>
    <div class="col-md-2">
    <label for="">Terça-Feira</label>
        <select class="form-select" name="terca">
            <option value="1" @if($avaliacao->terca ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->terca ===  0) selected @endif>Não</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="">Quarta-Feira</label>
        <select class="form-select" name="quarta">
            <option value="1" @if($avaliacao->quarta ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->quarta ===  0) selected @endif>Não</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="">Quinta-Feira</label>
        <select class="form-select" name="quinta">
            <option value="1" @if($avaliacao->quinta ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->quinta ===  0) selected @endif>Não</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="">Sexta-Feira</label>
        <select class="form-select" name="sexta">
            <option value="1" @if($avaliacao->sexta ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->sexta ===  0) selected @endif>Não</option>
        </select>
    </div>
    <div class="col-md-2">
        <label for="">Sábado</label>
        <select class="form-select" name="sabado">
            <option value="1" @if($avaliacao->sabado ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->sabado ===  0) selected @endif>Não</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label for="">Domingo</label>
        <select class="form-select" name="domingo">
            <option value="1" @if($avaliacao->domingo ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->domingo ===  0) selected @endif>Não</option>
        </select>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
    <label for="">Tem habito de fumar?</label>
        <select class="form-select" name="habito_fumar">
            <option value="1" @if($avaliacao->habito_fumar ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->habito_fumar ===  0) selected @endif>Não</option>
        </select>
    </div>
    <div class="col-md-4">
    <label for="">Costuma ingerir bebidas alcoólicas?</label>
        <select class="form-select" name="uso_bebibas">
            <option value="1" @if($avaliacao->uso_bebibas ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->uso_bebibas ===  0) selected @endif>Não</option>
        </select>
    </div>
    <div class="col-md-4">
        <label for="">Tem alguma limitação na pratica de exercicios?</label>
        <select class="form-select" name="limitacao_pratica">
            <option value="1" @if($avaliacao->limitacao_pratica ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->limitacao_pratica ===  0) selected @endif>Não</option>
        </select>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
    <label for="">Especifique a limitação</label>
    <input value="{{$avaliacao->especifica_limitacao_pratica}}" class="form-control" type="text" name="especifica_limitacao_pratica">
    </div>
    <div class="col-md-4">
    <label for="">Faz uso diario de medicamentos?</label>
        <select class="form-select" name="uso_medicamentos">
            <option value="1" @if($avaliacao->uso_medicamentos ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->uso_medicamentos ===  0) selected @endif>Não</option>
        </select>
    </div>
    <div class="col-md-4">
    <label for="">Especifique os medicamentos</label>
    <input value="{{$avaliacao->especifica_uso_medicamentos}}" class="form-control" type="text" name="especifica_uso_medicamentos">
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
    <label for="">Faz alguma dieta?</label>
    <select class="form-select" name="faz_dieta">
            <option value="1" @if($avaliacao->faz_dieta ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->faz_dieta ===  0) selected @endif>Não</option>
        </select>
    </div>
    <div class="col-md-4">
    <label for="">Especifique sua dieta</label>
    <input value="{{$avaliacao->especifica_dieta}}" class="form-control" type="text" name="especifica_dieta">
    </div>
    <div class="col-md-4">
    <label for="">Possui alguma alergia?</label>
    <select class="form-select" name="possui_alergia">
            <option value="1" @if($avaliacao->possui_alergia ===  1) selected @endif>Sim</option>
            <option value="0" @if($avaliacao->possui_alergia ===  0) selected @endif>Não</option>
        </select>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Especifique sua alergia</label>
        <input value="{{$avaliacao->especifica_alergia}}" class="form-control" type="text" name="especifica_alergia">
    </div>
    <div class="col-md-4">
        <label for="">Digite seu peso atual</label>
        <input value="{{$avaliacao->peso}}" class="form-control" type="number" name="peso" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Digite seu peso ideal</label>
        <input value="{{$avaliacao->peso_ideal}}" class="form-control" type="number" name="peso_ideal" step="0.01" min='0'>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Sua estatura</label>
        <input value="{{$avaliacao->estatura}}" class="form-control" type="number" name="estatura" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Seu torax</label>
        <input value="{{$avaliacao->torax}}" class="form-control" type="number" name="torax" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Sua cintura</label>
        <input value="{{$avaliacao->cintura}}" class="form-control" type="number" name="cintura" step="0.01" min='0'>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Seu abdomen</label>
        <input value="{{$avaliacao->abdomen}}" class="form-control" type="number" name="abdomen" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Seu quadril</label>
        <input value="{{$avaliacao->quadril}}" class="form-control" type="number" name="quadril" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Seu braço direito</label>
        <input value="{{$avaliacao->braco_direiro}}" class="form-control" type="number" name="braco_direiro" step="0.01" min='0'>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Seu braço esquerdo</label>
        <input value="{{$avaliacao->braco_esquerdo}}" class="form-control" type="number" name="braco_esquerdo" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Seu ante braço direito</label>
        <input value="{{$avaliacao->antebraco_direiro}}" class="form-control" type="number" name="antebraco_direiro" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Seu ante braço esquerdo</label>
        <input value="{{$avaliacao->antebraco_esquerdo}}" class="form-control" type="number" name="antebraco_esquerdo" step="0.01" min='0'>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Sua coxa direita</label>
        <input value="{{$avaliacao->coxa_direita}}" class="form-control" type="number" name="coxa_direita" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Sua coxa esquerda</label>
        <input value="{{$avaliacao->coxa_esquerda}}" class="form-control" type="number" name="coxa_esquerda" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Sua perna direita</label>
        <input value="{{$avaliacao->perna_direita}}" class="form-control" type="number" name="perna_direita" step="0.01" min='0'>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Sua perna esquerda</label>
        <input value="{{$avaliacao->perna_esquerda}}" class="form-control" type="number" name="perna_esquerda" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Seu bicipital</label>
        <input value="{{$avaliacao->bicipital}}" class="form-control" type="number" name="bicipital" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Seu tricipital</label>
        <input value="{{$avaliacao->tricipital}}" class="form-control" type="number" name="tricipital" step="0.01" min='0'>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Seu peitoral</label>
        <input value="{{$avaliacao->peitoral}}" class="form-control" type="number" name="peitoral" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Seu axilar media</label>
        <input value="{{$avaliacao->axilar_media}}" class="form-control" type="number" name="axilar_media" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Seu subescapular</label>
        <input value="{{$avaliacao->subescapular}}" class="form-control" type="number" name="subescapular" step="0.01" min='0'>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Abdominal</label>
        <input value="{{$avaliacao->abdominal}}" class="form-control" type="number" name="abdominal" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Suprailiaca</label>
        <input value="{{$avaliacao->suprailiaca}}" class="form-control" type="number" name="suprailiaca" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Coxa</label>
        <input value="{{$avaliacao->coxa}}" class="form-control" type="number" name="coxa" step="0.01" min='0'>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Panturrilha</label>
        <input value="{{$avaliacao->panturrilha}}" class="form-control" type="number" name="panturrilha" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Força Pressao Manual</label>
        <input value="{{$avaliacao->forca_preensao_manual}}" class="form-control" type="number" name="forca_preensao_manual" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Flexibilidade</label>
        <input value="{{$avaliacao->flexibilidade}}" class="form-control" type="number" name="flexibilidade" step="0.01" min='0'>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Potencia dos membros superiores</label>
        <input value="{{$avaliacao->potencia_membros_superiores}}" class="form-control" type="number" name="potencia_membros_superiores" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Teste Agilidade</label>
        <input value="{{$avaliacao->teste_agilidade}}" class="form-control" type="number" name="teste_agilidade" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">V02 Maximo</label>
        <input value="{{$avaliacao->v02_maximo}}" class="form-control" type="number" name="v02_maximo" step="0.01" min='0'>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-4">
        <label for="">Flexao</label>
        <input value="{{$avaliacao->flexao}}" class="form-control" type="number" name="flexao" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Flexao abdominal</label>
        <input value="{{$avaliacao->flexao_abdominal}}" class="form-control" type="number" name="flexao_abdominal" step="0.01" min='0'>
    </div>
    <div class="col-md-4">
        <label for="">Perna</label>
        <input value="{{$avaliacao->perna}}" class="form-control" type="number" name="perna" step="0.01" min='0'>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-2">
    <button type="submit" onClick="return confirm('Tem certeza que deseja editar esta avaliação?')" class="btn btn-primary ms-2 mt-4 ">Atualizar</button>
    </div>
</div>

</form>
</div>
</div>
@endsection
