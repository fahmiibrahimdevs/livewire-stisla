<?php

namespace App\Repositories;

use App\Models\Todo;

class TodoRepository
{
    public function getPaginated($search, $perPage)
    {
        return Todo::where('title', 'LIKE', '%' . $search . '%')
            ->paginate($perPage);
    }

    public function create(array $data)
    {
        return Todo::create($data);
    }

    public function find($id)
    {
        return Todo::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $todo = $this->find($id);
        $todo->update($data);
        return $todo;
    }

    public function delete($id)
    {
        $todo = $this->find($id);
        return $todo->delete();
    }
}
