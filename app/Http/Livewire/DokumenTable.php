<?php

namespace App\Http\Livewire;

use App\Models\Dokumen;
use Livewire\Component;
use Livewire\WithFileUploads;

class DokumenTable extends Component
{
    use WithFileUploads;
    public $fileTitle, $fileName;
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submit()
    {
        $dataValid = $this->validate([
            'user_id' => 'required',
            'judul' => 'required',
            'filenya' => 'required|pdf|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);
  
        $dataValid['filenya'] = $this->filenya->store('todos', 'public');
  
        Dokumen::create($dataValid);
  
        session()->flash('message', 'File uploaded.');
    }
    public function render()
    {
        return view('livewire.dok-file');
    }
}
