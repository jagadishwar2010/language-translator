<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use OpenAI\Laravel\Facades\OpenAI;

//use OpenAI;

class TranslationController extends Controller
{
    public function translate(Request $request)
    {
        $sourceText = $request->input('source_text');
        $targetLanguage = $request->input('target_language');

        $response = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'Translate ' . $sourceText . ' to ' . $targetLanguage . ' .',
        ]);
        return $response['choices'][0]['text'];
    }
}
