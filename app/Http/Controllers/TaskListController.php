<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;

class TaskListController extends Controller
{
    protected $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        try {
            $data['items'] = $this->taskRepository->getToDo();
            $data['progress_items'] = $this->taskRepository->getProgress();
            $data['done_items'] = $this->taskRepository->getDone();
            return view('welcome', $data);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed'],503);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
        ]);
        try {
            $item = $this->taskRepository->store($request->except("_token"));
            return response()->json(['title' => $item->title, 'id' => $item->id],200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed'],503);
        }
    }

    public function update(Request $request)
    {
        try {
            $item = $this->taskRepository->update($request->except("_token"));
            return response()->json(['message' => 'Updated Successfully'],200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed'],503);
        }
    }
}
