<?php

namespace App\Services;

use App\Repositories\TodoRepository;

class TodoService
{
    protected $todoRepository;

    public function __construct(TodoRepository $todoRepository)
    {
        $this->todoRepository = $todoRepository;
    }

    public function getTodoList($search, $perPage)
    {
        return $this->todoRepository->getPaginated($search, $perPage);
    }

    public function createTodo(array $data)
    {
        return $this->todoRepository->create($data);
    }

    public function getTodoById($id)
    {
        return $this->todoRepository->find($id);
    }

    public function updateTodo($id, array $data)
    {
        return $this->todoRepository->update($id, $data);
    }

    public function deleteTodo($id)
    {
        return $this->todoRepository->delete($id);
    }
}
