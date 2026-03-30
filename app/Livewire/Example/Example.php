<?php

namespace App\Livewire\Example;

use App\Services\TodoService;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Example extends Component
{
    use WithPagination;
    #[Title('Example')]

    protected $listeners = [
        'delete'
    ];
    protected $rules = [
        'title' => 'required',
    ];
    protected $paginationTheme = 'bootstrap';

    public $lengthData = 25;
    public $searchTerm;
    public $previousSearchTerm = '';
    public $isEditing = false;

    public $dataId, $title;

    public function mount()
    {
        $this->title = '';
    }

    private function resetInputFields()
    {
        $this->title = '';
    }

    public function render(TodoService $todoService)
    {
        $this->searchResetPage();

        $data = $todoService->getTodoList($this->searchTerm, $this->lengthData);

        return view('livewire.example.example', compact('data'));
    }

    public function store(TodoService $todoService)
    {
        $this->validate();

        $todoService->createTodo([
            'title'     => $this->title,
        ]);

        $this->dispatchAlert('success', 'Success!', 'Data created successfully.');
    }

    public function edit($id, TodoService $todoService)
    {
        $this->isEditing = true;
        $data = $todoService->getTodoById($id);
        $this->dataId = $id;
        $this->title  = $data->title;
    }

    public function update(TodoService $todoService)
    {
        $this->validate();

        if ($this->dataId) {
            $todoService->updateTodo($this->dataId, [
                'title' => $this->title,
            ]);

            $this->dispatchAlert('success', 'Success!', 'Data updated successfully.');
            $this->dataId = null;
        }
    }

    public function deleteConfirm($id)
    {
        $this->dataId = $id;
        $this->dispatch('swal:confirm', [
            'type'      => 'warning',
            'message'   => 'Are you sure?',
            'text'      => 'If you delete the data, it cannot be restored!'
        ]);
    }

    public function delete(TodoService $todoService)
    {
        $todoService->deleteTodo($this->dataId);
        $this->dispatchAlert('success', 'Success!', 'Data deleted successfully.');
    }

    private function dispatchAlert($type, $message, $text)
    {
        $this->dispatch('swal:modal', [
            'type'      => $type,
            'message'   => $message,
            'text'      => $text
        ]);

        $this->resetInputFields();
    }

    public function isEditingMode($mode)
    {
        $this->isEditing = $mode;
    }

    public function cancel()
    {
        $this->resetInputFields();
    }

    public function updatingLengthData()
    {
        $this->resetPage();
    }

    private function searchResetPage()
    {
        if ($this->searchTerm !== $this->previousSearchTerm) {
            $this->resetPage();
        }

        $this->previousSearchTerm = $this->searchTerm;
    }
}
