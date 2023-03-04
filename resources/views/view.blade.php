@include('layouts.master')
<div class="container2" >
    <div class="bg-white border border-gray-200 rounded-lg" style="display: flex;align-items: center;gap: 100px;">
        <div class="image">
            @if($post->image_url)
            <img class="rounded-t-lg" src="/storage/{{$post->image_url}}" alt="imagen" />
            @else
                {{$post->id}}
            @endif
        </div>
        <div class="p-5">

            <h1 class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{$post->title}}
            </h1>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-500">{{$post->body}}</p>
        </div>
    </div>
</div>
