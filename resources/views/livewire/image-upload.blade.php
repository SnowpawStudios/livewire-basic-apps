<div class="p-6">
    <form wire:submit.prevent="save"  class="flex flex-col w-[400] mx-auto py-16">
        @if($imageUploads)
            Preview:
            <div class="flex flex-wrap justify-center gap-6">
                @foreach($imageUploads as $im)
                    <img src="{{$im->temporaryUrl()}}" alt="" class="object-cover w-[110px] h-[90px]">
                @endforeach
            </div>
        @endif
        <input wire:model="imageUploads" type="file" class="mb-4" multiple>
        @error('images') <span class="error">{{$message}}</span> @enderror
            <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">Save Photo</button>
    </form>

    <div class="flex flex-wrap gap-7">
        @foreach($images as $image)
            <img src="{{$image}}" alt="" class="object-cover w-[128x] h-[120px]">
        @endforeach
    </div>

</div>
