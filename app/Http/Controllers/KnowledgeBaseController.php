<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class KnowledgeBaseController extends Controller
{
    public function index()
    {
        // Выборка всех тем с подтемами
        $themes = Theme::with('subthemes')->get();

        // Передаём данные в шаблон
        return view('knowledgebase', compact('themes'));
    }
}
