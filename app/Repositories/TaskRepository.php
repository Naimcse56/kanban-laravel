<?php

namespace App\Repositories;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use App\Models\TaskList;

class TaskRepository
{
    public function getAll()
    {
        return TaskList::get();
    }

    public function store(array $data)
    {
        return TaskList::create([
                        'title' => $data['title'],
                        'status' => 1,
                    ]);
    }
    
    public function update(array $data, $id)
    {
        return TaskList::findOrFail($id)->update([
                            'status' => $data['status'],
                        ]);
    }
}
