<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório PDF</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #3498db;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #3498db;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .title {
            font-weight: bold;
            text-align: center;
        }
        .image-container {
            text-align: center;
        }

        .left-image, .right-image {
            max-width: 100px; /* Ajuste o tamanho da imagem conforme necessário */
            margin-top: 10px; /* Ajuste a margem conforme necessário */
        }

        .right-image {
            float: right;
        }
    </style>
</head>
<body>
    <h1>
        <div class="image-container">
            Relatório de Avaliação
        </div>
    </h1>
    <table>
        <tbody>
            <tr>
                <td colspan="2" class="title">Nome</td>
                <td colspan="2">{{ $avaliacao->nome_paciente }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Email</td>
                <td colspan="2">{{ $avaliacao->email_paciente }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Telefone</td>
                <td colspan="2">{{ $avaliacao->telefone_paciente }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Sexo</td>
                <td colspan="2">{{ $avaliacao->sexo }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Idade</td>
                <td colspan="2">{{ $avaliacao->idade_paciente }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Objetivo da prática de exercícios</td>
                <td colspan="2">{{ $avaliacao->objetivo_pratica }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Realiza Exercícios Físicos?</td>
                <td colspan="2">{{ $avaliacao->realiza_exercicios ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Duração dos exercícios (em minutos)</td>
                <td colspan="2">{{ $avaliacao->duracao_exercicios }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Realiza Exercícios na Segunda-Feira?</td>
                <td colspan="2">{{ $avaliacao->segunda ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Realiza Exercícios na Terça-Feira?</td>
                <td colspan="2">{{ $avaliacao->terca ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Realiza Exercícios na Quarta-Feira?</td>
                <td colspan="2">{{ $avaliacao->quarta ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Realiza Exercícios na Quinta-Feira?</td>
                <td colspan="2">{{ $avaliacao->quinta ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Realiza Exercícios na Sexta-Feira?</td>
                <td colspan="2">{{ $avaliacao->sexta ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Realiza Exercícios no Sábado?</td>
                <td colspan="2">{{ $avaliacao->sabado ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Realiza Exercícios no Domingo?</td>
                <td colspan="2">{{ $avaliacao->domingo ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Tem o hábito de fumar?</td>
                <td colspan="2">{{ $avaliacao->habito_fumar ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Faz o uso de bebidas alcoolicas?</td>
                <td colspan="2">{{ $avaliacao->uso_bebibas ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Tem alguma limitação na pratica de exercícios?</td>
                <td colspan="2">{{ $avaliacao->limitacao_pratica ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Especificações da Limitação</td>
                <td colspan="2">{{ $avaliacao->especifica_limitacao_pratica }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Faz o uso de algum medicamento diariamente?</td>
                <td colspan="2">{{ $avaliacao->uso_medicamentos ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Especificações do(s) medicamento(s)</td>
                <td colspan="2">{{ $avaliacao->especifica_uso_medicamentos }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Segue algum tipo de dieta?</td>
                <td colspan="2">{{ $avaliacao->faz_dieta ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Especificações da dieta</td>
                <td colspan="2">{{ $avaliacao->especifica_dieta }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Possui algum tipo de alergia?</td>
                <td colspan="2">{{ $avaliacao->possui_alergia ? 'Sim' : 'Não' }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Especificações da alergia</td>
                <td colspan="2">{{ $avaliacao->especifica_alergia }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Peso (em kg)</td>
                <td colspan="2">{{ $avaliacao->peso }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Peso que deseja atingir (em kg)</td>
                <td colspan="2">{{ $avaliacao->peso_ideal }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Estatura (em cm)</td>
                <td colspan="2">{{ $avaliacao->estatura}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Torax (em cm)</td>
                <td colspan="2">{{ $avaliacao->torax }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Cintura (em cm)</td>
                <td colspan="2">{{ $avaliacao->cintura }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Abdomen (em cm)</td>
                <td colspan="2">{{ $avaliacao->abdomen }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Quadril (em cm)</td>
                <td colspan="2">{{ $avaliacao->quadril }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Braço Direito (em cm)</td>
                <td colspan="2">{{ $avaliacao->braco_direiro }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Braço Esquerdo (em cm)</td>
                <td colspan="2">{{ $avaliacao->braco_esquerdo }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Antebraço Direito (em cm)</td>
                <td colspan="2">{{ $avaliacao->antebraco_direiro }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Antebraço Esquerdo (em cm)</td>
                <td colspan="2">{{ $avaliacao->antebraco_esquerdo }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Coxa Direita (em cm)</td>
                <td colspan="2">{{ $avaliacao->coxa_direita }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Coxa Esquerda (em cm)</td>
                <td colspan="2">{{ $avaliacao->coxa_esquerda }}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Perna Direita (em cm)</td>
                <td colspan="2">{{ $avaliacao->perna_direita}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Perna Esquerda (em cm)</td>
                <td colspan="2">{{ $avaliacao->perna_esquerda}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Bicipital (em mm)</td>
                <td colspan="2">{{ $avaliacao->bicipital}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Tricipital (em mm)</td>
                <td colspan="2">{{ $avaliacao->tricipital}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Peitoral (em mm)</td>
                <td colspan="2">{{ $avaliacao->peitoral}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Axilar Media (em mm)</td>
                <td colspan="2">{{ $avaliacao->axilar_media}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Subescapular (em mm)</td>
                <td colspan="2">{{ $avaliacao->subescapular}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Abdominal (em mm)</td>
                <td colspan="2">{{ $avaliacao->abdominal}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Supra ilíaca (em mm)</td>
                <td colspan="2">{{ $avaliacao->suprailiaca}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Coxa (em mm)</td>
                <td colspan="2">{{ $avaliacao->coxa}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Perna (em mm)</td>
                <td colspan="2">{{ $avaliacao->perna}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Panturrilha (em mm)</td>
                <td colspan="2">{{ $avaliacao->panturrilha}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Força Preensão Manual (em kg)</td>
                <td colspan="2">{{ $avaliacao->forca_preensao_manual}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Flexibilidade</td>
                <td colspan="2">{{ $avaliacao->flexibilidade}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Potencia dos membros superiores (em kg)</td>
                <td colspan="2">{{ $avaliacao->potencia_membros_superiores}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Teste de Agilidade</td>
                <td colspan="2">{{ $avaliacao->teste_agilidade}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">V02 Maximo (em km/h)</td>
                <td colspan="2">{{ $avaliacao->v02_maximo}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Flexão</td>
                <td colspan="2">{{ $avaliacao->flexao}}</td>
            </tr>

            <tr>
                <td colspan="2" class="title">Flexao Abdominal</td>
                <td colspan="2">{{ $avaliacao->flexao_abdominal}}</td>
            </tr>



        </tbody>
    </table>

    <table>
        <tbody>
            <tr>
                <td colspan="2" class="title">IMC</td>
                <td colspan="2">{{ number_format(calcularIMC($avaliacao->peso, $avaliacao->estatura), 2, '.', '') }}</td>
            </tr>
            @php
            // Verifica se o sexo é masculino
            if ($avaliacao->sexo === 'Masculino') {
                // Cálculos específicos para homens
                echo '<tr>
                        <td colspan="2" class="title">Densidade Corporal - Masculino</td>
                        <td colspan="2">';

                // Cálculos de densidade corporal para homens
                $subescapular = $avaliacao->subescapular;
                $tricipital = $avaliacao->tricipital;
                $suprailiaca = $avaliacao->suprailiaca;
                $perna = $avaliacao->perna;
                $idade = $avaliacao->idade_paciente;

                $densidade_corporal_homem = 1.10726863 - (
                    ($subescapular + $tricipital + $suprailiaca + $perna) * 0.00081201 +
                    ($subescapular + $tricipital + $suprailiaca + $perna) * 0.00000212
                ) - (0.00041761 * $idade);

                echo $densidade_corporal_homem;

                echo '</td></tr>';

                // Porcentagem de Gordura para homens
                echo '<tr>
                        <td colspan="2" class="title">Porcentagem de Gordura - Masculino</td>
                        <td colspan="2">';

                $e_siri_percent_homem = 100 * ((4.95 / $densidade_corporal_homem) - 4.5);
                echo number_format($e_siri_percent_homem, 2, '.', '');

                echo '</td></tr>';

                // Peso de Gordura para homens
                echo '<tr>
                        <td colspan="2" class="title">Peso de Gordura (kg) - Masculino</td>
                        <td colspan="2">';

                $peso_homem = $avaliacao->peso;
                $peso_gordura_homem = $peso_homem * ($e_siri_percent_homem / 100);
                echo number_format($peso_gordura_homem, 2, '.', '');

                echo '</td></tr>';

                // Peso de Massa Magra para homens
                echo '<tr>
                        <td colspan="2" class="title">Peso de Massa Magra (kg) - Masculino</td>
                        <td colspan="2">';

                $massa_magra_homem = $peso_homem * (1 - $e_siri_percent_homem / 100);
                echo number_format($massa_magra_homem, 2, '.', '');

                echo '</td></tr>';

            } else if ($avaliacao->sexo === 'Feminino') {
                // Cálculos específicos para mulheres
                echo '<tr>
                        <td colspan="2" class="title">Densidade Corporal - Feminino</td>
                        <td colspan="2">';

                // Cálculos de densidade corporal para mulheres
                $axilar_media = $avaliacao->axilar_media;
                $suprailiaca = $avaliacao->suprailiaca;
                $coxa = $avaliacao->coxa;
                $perna = $avaliacao->perna;
                $idade = $avaliacao->idade_paciente;

                $densidade_corporal_mulheres = 1.1954713 - (
                    0.07513507 * log10($axilar_media + $suprailiaca + $coxa + $perna)
                ) - (0.00041072 * $idade);

                echo number_format($densidade_corporal_mulheres, 8, '.', '');

                echo '</td></tr>';

                // Porcentagem de Gordura para mulheres
                echo '<tr>
                        <td colspan="2" class="title">Porcentagem de Gordura - Feminino</td>
                        <td colspan="2">';

                $e_siri_percent_mulher = 100 * ((4.95 / $densidade_corporal_mulheres) - 4.5);
                echo number_format($e_siri_percent_mulher, 2, '.', '');

                echo '</td></tr>';

                // Peso de Gordura para mulheres
                echo '<tr>
                        <td colspan="2" class="title">Peso de Gordura (kg) - Feminino</td>
                        <td colspan="2">';

                $peso_mulher = $avaliacao->peso;
                $peso_gordura_mulher = $peso_mulher * ($e_siri_percent_mulher / 100);
                echo number_format($peso_gordura_mulher, 2, '.', '');

                echo '</td></tr>';

                // Peso de Massa Magra para mulheres
                echo '<tr>
                        <td colspan="2" class="title">Peso de Massa Magra (kg) - Feminino</td>
                        <td colspan="2">';

                $massa_magra_mulher = $peso_mulher * (1 - $e_siri_percent_mulher / 100);
                echo number_format($massa_magra_mulher, 2, '.', '');

                echo '</td></tr>';
            }
        @endphp





        </tbody>
    </table>

</body>
</html>

@php
function calcularIMC($peso, $estatura) {
    // Convertendo estatura para metros
    $estaturaMetros = $estatura / 100;

    // Calculando IMC
    $imc = $peso / ($estaturaMetros * $estaturaMetros);

    return $imc;
}
@endphp

