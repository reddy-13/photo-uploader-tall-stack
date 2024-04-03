<div>
    <!-- Open the modal using ID.showModal() method -->
    
        <dialog id="AddFileModal" class="modal" wire:ignore.self>
            
        <div class="modal-box">
            {{-- header --}}
            <div class="flex justify-between items-center">
                <h3 class="font-bold text-lg">Add Files</h3>
                <form method="dialog">
                <button class="btn btn-sm btn-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg></button>
                </form>
            </div>
            {{-- body --}}
            <div
            x-data="{ uploading: false, progress: 0 }"
            x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false"
            x-on:livewire-upload-cancel="uploading = false"
            x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress"
            >
             <!-- Progress Bar -->
        <div x-show="uploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>
            <form class="mt-4" wire:submit="store">
            <div class="mb-2">
                <label for="title">Title</label>
                <input type="text"  placeholder="Type here" id="title" class="input input-bordered w-full" wire:model='title' />
            @error('title')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            </div>
            <div class="mb-2">
                <label >Image</label>
                <input type="file" accept="image/png,image/jpeg,image/jpeg" wire:model="image" class="file-input file-input-bordered w-full " />
                @error('image')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
            @if ($image) 
                <img src="{{ $image->temporaryUrl() }}" class="w-full rounded-md object-contain my-2">
            @endif
            </div>
            <div class="mb-2">
                <button class="btn btn-warning w-full">Submit</button>
            </div>
            </form>
            </div>
        </div>
        </dialog>
    </div>
    