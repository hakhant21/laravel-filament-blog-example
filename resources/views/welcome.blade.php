<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="max-w-7xl mx-auto py-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 sm:gap-2 md:gap-3 lg:gap-4">
            @foreach($categories as $category)
            @foreach($category->posts as $post)
            <div
                class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{$post->getImage()}}" alt="{{$post->title}}-image" />
                </a>
                <div class="p-4">
                    <h2 class="text-sm font-bold text-gray-500">{{$category->name}}</h2>
                    <a href="#">
                        <h5 class="mb-2 text-md font-bold tracking-tight text-gray-900 dark:text-white">
                            {{$post->title}}
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        {!!Str::limit($post->content, 100)!!}
                    </p>
                </div>
                <div class="px-5 mb-4">
                    @foreach($post->tags as $tag)
                    <small class="font-bold text-gray-800 text-xs">#{{ $tag->name }}</small>
                    @endforeach
                </div>
            </div>
            @endforeach
            @endforeach
        </div>
    </div>

</body>

</html>
