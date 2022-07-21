<?php

use App\Models\Task;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Validator;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


class Service {
    public function FunctionName(): String
    {
        return "OK";
    }
}


Route::get('/service', function (Service $service) {
    die(get_class($service));
});

Route::get('/getTask', function () {
    $tasks = Task::orderBy('created_at', 'asc')->get();
    return Inertia::render('Tasks', [
        'header' => 'Task-App',
        'tasks' => $tasks
    ]);
});

Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->call(), [
        'name' => 'required|max:255'
    ]);

    if ($validator->fails()) {
        return redirect('/task')
                ->withInput()
                ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/task');
    
});

Route::delete('/task/{id}', function ($id) {
    
});

require __DIR__.'/auth.php';
