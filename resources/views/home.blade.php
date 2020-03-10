@extends('master')

@section('title', 'Homepage')

@section('content')


Post a message:

<form action="/create" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">
    {{ csrf_field() }}   <!-- token to protect againts cross-site request forgery-->
    <button type="submit">Submit</button>

    <br>

Recent Messages:

<ul>
    @foreach ($messages as $message)

<li><b>{{ $message->title }}</b>
    <br>
     {{ $message->content }}
     <br>
     
     {{ $message->created_at->diffForHumans() }}
     <br>
<a href="/message/{{ $message->id }}">View</a>
<a href="/{{ $message->id }}" >Delete</a>


    </li>
        
    @endforeach
</ul>
    
@endsection