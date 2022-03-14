<?php

namespace App\Http\Controllers;

use App\Http\Requests\ToDoRequest;
use App\Models\ToDo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $toDos = ToDo::query()->where('complete', 0)->get();
        return response()->json($toDos);
    }

    public function store(ToDoRequest $request)
    {
        $formData = $request->all();
        $toDo = ToDo::create($formData);
        return response()->json($toDo, 201);
    }

    public function show($id)
    {
        $toDo = ToDo::query()->findOrFail($id);
        return response()->json($toDo);
    }

    public function update(ToDoRequest $request, $id)
    {
        $formData = $request->all();
        $toDo = ToDo::query()->findOrFail($id);
        $toDo->update($formData);

        return response()->json($toDo);
    }

    public function delete($id)
    {
        ToDo::query()->findOrFail($id)->delete();
        return response()->json([]);
    }

    public function complete($id)
    {
        $toDo = ToDo::query()->findOrFail($id);
        $toDo->update(['complete' => 1]);

        return response()->json($toDo);
    }
}
