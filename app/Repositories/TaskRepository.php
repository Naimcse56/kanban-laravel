<?php

namespace App\Repositories;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Models\TaskList;

class TaskRepository
{
    public function getToDo()
    {
        return TaskList::where('status', 1)->orderBy('position','asc')->get();
    }

    public function getProgress()
    {
        return TaskList::where('status', 2)->orderBy('position','asc')->get();
    }

    public function getDone()
    {
        return TaskList::where('status', 3)->orderBy('position','asc')->get();
    }

    public function store(array $data)
    {
        return TaskList::create([
                        'title' => $data['title'],
                        'status' => 1,
                        'position' => $this->position(),
                    ]);
    }
    
    public function update(array $data)
    {
        $task = TaskList::findOrFail($data['id']);
        $task->update([
                    'status' => ($data['status'] != 'none') ? $data['status'] : $task->status,
                    'position' => $data['position'],
                ]);
        if ($data['status'] == 'none') {
            $tasks = TaskList::where('position','>',$data['position'])->where('status', $task->status)->get();
            foreach ($tasks as $key => $item) {
                $task->update([
                    'position' => $data['position'] + ($key + 1),
                ]);
            }
        }
    }

    public function position()
    {
        $task = TaskList::where('status', 1)->orderBy('position', 'desc')->first();
        if ($task) {
            return $task->position + 1;
        } else {
            return 0;
        }
    }
}
