<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('avaliacao_fisica', function (Blueprint $table) {
            $table->id();
            $table->string('nome_paciente','70');
            $table->string('email_paciente','70');
            $table->string('telefone_paciente','70');
            $table->string('sexo','30');
            $table->integer('idade_paciente');
            $table->string('objetivo_pratica','200')->nullable();
            $table->boolean('realiza_exercicios')->nullable();
            $table->float('duracao_exercicios')->nullable();
            $table->boolean('segunda')->nullable();
            $table->boolean('terca')->nullable();
            $table->boolean('quarta')->nullable();
            $table->boolean('quinta')->nullable();
            $table->boolean('sexta')->nullable();
            $table->boolean('sabado')->nullable();
            $table->boolean('domingo')->nullable();
            $table->boolean('habito_fumar');
            $table->boolean('uso_bebibas');
            $table->boolean('limitacao_pratica');
            $table->string('especifica_limitacao_pratica','200')->nullable();
            $table->boolean('uso_medicamentos');
            $table->string('especifica_uso_medicamentos','200')->nullable();
            $table->boolean('faz_dieta');
            $table->string('especifica_dieta')->nullable();
            $table->boolean('possui_alergia');
            $table->string('especifica_alergia','200')->nullable();
            $table->float('peso',10,2);
            $table->float('peso_ideal',10,2);
            $table->float('porcentagem_gordura',10,2);
            $table->float('massa_magra',10,2);
            $table->float('estatura',10,2);
            $table->float('torax',10,2);
            $table->float('cintura',10,2);
            $table->float('abdomen',10,2);
            $table->float('quadril',10,2);
            $table->float('braco_direiro',10,2);
            $table->float('braco_esquerdo',10,2);
            $table->float('antebraco_direiro',10,2);
            $table->float('antebraco_esquerdo',10,2);
            $table->float('coxa_direita',10,2);
            $table->float('coxa_esquerda',10,2);
            $table->float('perna_direita',10,2);
            $table->float('perna_esquerda',10,2);
            $table->float('bicipital',10,2);
            $table->float('tricipital',10,2);
            $table->float('peitoral',10,2);
            $table->float('axilar_media',10,2);
            $table->float('subescapular',10,2);
            $table->float('abdominal',10,2);
            $table->float('suprailiaca',10,2);
            $table->float('coxa',10,2);
            $table->float('perna',10,2);
            $table->float('panturrilha',10,2);
            $table->float('forca_preensao_manual',10,2);
            $table->float('flexibilidade',10,2);
            $table->float('potencia_membros_superiores',10,2);
            $table->float('teste_agilidade',10,2)->nullable();
            $table->float('v02_maximo',10,2)->nullable();
            $table->float('flexao',10,2)->nullable();
            $table->float('flexao_abdominal',10,2)->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacao_fisica');
    }
};
