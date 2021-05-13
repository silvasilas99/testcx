@extends('posts.main')

@section('content')
    <div class="max-w-4xl flex items-center h-auto flex-wrap mx-auto my-32 lg:my-0">
        <div class="w-full rounded-lg lg:rounded-l-lg  shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
            @foreach (json_decode($post) as $post)      {{-- Laço que gostaria de remover --}}
                <div class="p-4 md:p-12 text-center lg:text-left">
                    <h1 class="text-3xl font-bold pt-8 lg:pt-0">{{ $post->title }}</h1>
                    <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-black-1000 opacity-100"></div>
                    <p class="pt-8 text-base">{{ $post->body }}</p>
                    <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-black-1000 opacity-100"></div>
                    <p class="pt-4 text-sm flex items-center justify-center lg:justify-start">
                        ID do post: {{ $post->id }}
                    </p>
                    <p class="pt-4 text-sm flex items-center justify-center lg:justify-start">
                        ID do usuario: {{ $post->userId }}
                    </p>

                    <div class="pt-12 pb-1">
                        <button onclick='history.back()' class="bg-gray-700 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded">
                          Voltar
                        </button>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
