@csrf
<label class="uppercase text-gray-700 text-xs">Título</label>
<span class="text-sm text-red-500">@error ('title') {{$message}} @enderror</span>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4 dark:text-black" value="{{old('title', @$post->title) }}">

<label class="uppercase text-gray-700 text-xs">Contenido</label>
<span class="text-sm text-red-500">@error ('body') {{$message}} @enderror</span>
<textarea name="body" id="" rows="5" class="rounded border-gray-200 w-full mb-4 dark:text-black">{{ old('body',@$post->body) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600 bg-gray-200 rounded px-2 py-1">Volver</a>
    <button type="submit" class="bg-indigo-600 text-white rounded px-4 py-2">{{ isset($post) ? 'Guardar cambios' : 'Crear'}}</button>
</div>
