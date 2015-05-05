@extends('app')

@section('content')

    <div>
        {!! link_to_route('posts', 'опубликовано')!!} &nbsp;&nbsp;&nbsp; {!! link_to_route('posts.unpublished', 'не опубликовано') !!}
    </div>

    @foreach($data['posts'] as $post)
        <article>
            <h2>{!! $post['title'] !!}</h2>
            <p>{!! $post['excerpt'] !!}</p>
            <p>Опубликовано: {!! $post['published_at'] !!}</p>
        </article>
            <hr>
    @endforeach
@stop