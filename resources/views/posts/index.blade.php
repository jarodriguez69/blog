<x-layout meta-title="Blog">
    <h1>Blog</h1>
    <a href="{{route('posts.create')}}">Crear Post</a>
    @foreach($posts as $post)
        <h2>
            <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
        </h2>   
    
    @endforeach
</x-layout>