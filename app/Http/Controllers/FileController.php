<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function createFile()
    {
        // Contenido del archivo
        $content = "Este es un archivo de ejemplo creado con Laravel.";

        // Nombre del archivo
        $fileName = 'example.txt';

        // Crear el archivo en el disco local
        Storage::disk('local')->put($fileName, $content);

        return "Archivo creado con éxito!";
    }
}
