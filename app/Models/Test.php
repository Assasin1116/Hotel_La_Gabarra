<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
}

// app/Http/Controllers/TestController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return view('test.index', compact('tests'));
    }

    public function create()
    {
        return view('test.create');
    }

    public function store(Request $request)
    {
        $test = new Test;
        $test->name = $request->name;
        $test->save();

        return redirect()->route('test.index');
    }
}
