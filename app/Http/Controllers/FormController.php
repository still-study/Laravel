<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use Illuminate\Http\Request;
use function PHPUnit\Framework\directoryExists;

class FormController extends Controller
{
    public function create()
    {
        return view('form.create');
    }

    public function store(StoreFormRequest $request)
    {
        // Делаем проверку, существует ли директория для сохранения файла.
        // Если нет, то создаем ее.
        if(!is_dir($_SERVER['HOME'] . '/first/file')) {
            mkdir($_SERVER['HOME'] . '/first/file', 0700);
        }

        $path = $_SERVER['HOME'] . '/first/file/';
        $fileName = date('dmY') . ' ' .$request->get('name') . '.txt';
        file_put_contents($path . $fileName, [
            'Name: ' . $request->get('name') . PHP_EOL,
            'Tel: ' . $request->get('tel') . PHP_EOL,
            'Email: ' . $request->get('email') . PHP_EOL,
            'Info: ' . $request->get('info') . PHP_EOL
        ]);

        return redirect()->route('form.create');
    }
}
