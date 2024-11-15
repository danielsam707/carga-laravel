@csrf 

<label class="uppercase text-gray-700 text-xs">Titulo</label>
<input type="text" name="title" class="text-black rounded border-200 w-full mb-4" value="{{ $post->title }}" >

<label class="uppercase text-gray-700 text-xs">Contenido</label>
<textarea name="body"rows="5" class="text-black rounded border-200 w-full mb-4" >{{ $post->body }}</textarea>

<div class="flex justify-between item-center">
  <a href="{{ route('posts.index')}}" class="text-indigo-600">Volver</a>

  <input type="submit" class="bg-red-800 text-white rounded px-4 py-2">
</div>