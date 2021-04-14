<div>
    <label >Título</label>
    <input type="text" class="form-control" wire:model="title">
    @error('title') <span style="color: red">{{$message}}</span> @enderror
</div>
<div class="needs-validation">
    <label >Contenido</label>
    <textarea class="form-control" wire:model="body"></textarea>
    @error('body') <span style="color: red">{{$message}}</span> @enderror
</div>
