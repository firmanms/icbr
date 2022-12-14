<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
  
        <div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
      
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter title" wire:model="user_id" >
            @error('user_id') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter title" wire:model="judul">
            @error('judul') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <input type="file" class="form-control" wire:model="filenya">
            @error('filenya') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
      
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
