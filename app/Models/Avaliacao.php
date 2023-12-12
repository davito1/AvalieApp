<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $table='avaliacao_fisica';
    protected $fillable = [
        'nome_paciente',
        'email_paciente',
        'telefone_paciente',
        'sexo',
        'idade_paciente',
        'objetivo_pratica',
        'realiza_exercicios',
        'duracao_exercicios',
        'segunda',
        'terca',
        'quarta',
        'quinta',
        'sexta',
        'sabado',
        'domingo',
        'habito_fumar',
        'uso_bebibas',
        'limitacao_pratica',
        'especifica_limitacao_pratica',
        'uso_medicamentos',
        'especifica_uso_medicamentos',
        'faz_dieta',
        'especifica_dieta',
        'possui_alergia',
        'especifica_alergia',
        'peso',
        'peso_ideal',
        'porcentagem_gordura',
        'massa_magra',
        'estatura',
        'torax',
        'cintura',
        'abdomen',
        'quadril',
        'braco_direiro',
        'braco_esquerdo',
        'antebraco_direiro',
        'antebraco_esquerdo',
        'coxa_direita',
        'coxa_esquerda',
        'perna_direita',
        'perna_esquerda',
        'bicipital',
        'tricipital',
        'peitoral',
        'axilar_media',
        'subescapular',
        'abdominal',
        'suprailiaca',
        'coxa',
        'perna',
        'panturrilha',
        'forca_preensao_manual',
        'flexibilidade',
        'potencia_membros_superiores',
        'teste_agilidade',
        'v02_maximo',
        'flexao',
        'flexao_abdominal',
        'status'
    ];
}
