<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Avaliacao;

class AvaliacaoController extends Controller
{
    public function index(){
        $avaliacoes=Avaliacao::where('status', '=', true)->paginate(10);
        return view('avaliacao', compact('avaliacoes'));
    }
    public function destroy(string $id){
        Avaliacao::find($id)->update(['status' => false]);
        return redirect()->back();
    }
    public function edit(string $id){
        $avaliacao=Avaliacao::find($id);
        return view('editavaliacao', compact('avaliacao'));
    }
    public function update(Request $request){
        $params = $request->except('_token');
        $avaliacao=Avaliacao::find($params['id']);
        $avaliacao->update($params);
        return redirect()->route('avaliacao');
    }
    public function exportarPDF($id)
{
    $avaliacao = Avaliacao::find($id);

    if (!$avaliacao) {
        // Trate o caso em que a avaliação não foi encontrada
        abort(404);
    }

    $pdf = PDF::loadView('pdf.relatorio', compact('avaliacao'));

    return $pdf->download('relatorio.pdf');
}

}
