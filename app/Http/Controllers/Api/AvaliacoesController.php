<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Avaliacao;
use Illuminate\Http\Request;


class AvaliacoesController extends Controller {
    //
    public function cadastrar(Request $request) {
       Avaliacao::create($request->all());
        return response('Cadastrado com sucesso', 200);
    }

    public function listar(Request $request) {
        $dados = Avaliacao::where(['status' => true])->get();

        foreach($dados as $dado){
            if($dado["realiza_exercicios"] == 1){
                $dado["realiza_exercicios"] = "Sim";

            }else{
                $dado["realiza_exercicios"] = "Não";
            }
            if($dado["segunda"] == 1){
                $dado["segunda"] = "Sim";

            }else{
                $dado["segunda"] = "Não";
            }
            if($dado["terca"] == 1){
                $dado["terca"] = "Sim";

            }else{
                $dado["terca"] = "Não";
            }
            if($dado["quarta"] == 1){
                $dado["quarta"] = "Sim";

            }else{
                $dado["quarta"] = "Não";
            }
            if($dado["quinta"] == 1){
                $dado["quinta"] = "Sim";

            }else{
                $dado["quinta"] = "Não";
            }
            if($dado["sexta"] == 1){
                $dado["sexta"] = "Sim";

            }else{
                $dado["sexta"] = "Não";
            }
            if($dado["sabado"] == 1){
                $dado["sabado"] = "Sim";

            }else{
                $dado["sabado"] = "Não";
            }
            if($dado["domingo"] == 1){
                $dado["domingo"] = "Sim";

            }else{
                $dado["domingo"] = "Não";
            }
            if($dado["habito_fumar"] == 1){
                $dado["habito_fumar"] = "Sim";

            }else{
                $dado["habito_fumar"] = "Não";
            }
            if($dado["uso_bebibas"] == 1){
                $dado["uso_bebibas"] = "Sim";

            }else{
                $dado["uso_bebibas"] = "Não";
            }
            if($dado["limitacao_pratica"] == 1){
                $dado["limitacao_pratica"] = "Sim";

            }else{
                $dado["limitacao_pratica"] = "Não";
            }
            if($dado["uso_medicamentos"] == 1){
                $dado["uso_medicamentos"] = "Sim";

            }else{
                $dado["uso_medicamentos"] = "Não";
            }
            if($dado["faz_dieta"] == 1){
                $dado["faz_dieta"] = "Sim";

            }else{
                $dado["faz_dieta"] = "Não";
            }
            if($dado["possui_alergia"] == 1){
                $dado["possui_alergia"] = "Sim";

            }else{
                $dado["possui_alergia"] = "Não";
            }
        }
        return response()->json($dados);

    }

}
