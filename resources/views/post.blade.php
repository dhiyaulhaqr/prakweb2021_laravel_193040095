@extends ('layouts.main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h1>
    

    <p>by. dhiya ulhaqr in <a href="/categories/{{ $post->category->slug}}">{{$post->category->name}} </p></a>
    {!! $post->body !!}
</article>

<a href="/blog">Back to Posts</a>



@endsection