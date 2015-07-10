<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 09/07/15
 * Time: 14:44
 */
?>
@extends('template')
@section('content')
    @foreach($posts as $post)
        <h2>{{$post->title}} <span style="font-size: 10px;">({{$post->created_at}})</span></h2>
        <p>{{$post->content}}</p>
        <h3>Tags</h3>
        <ul>
            @foreach($post->tags as $tag)
                <li>{{$tag->name}}</li>
            @endforeach
        </ul>
        <h3>Comments</h3>
        @foreach($post->comments as $comment)
            <b>Name:</b>{{$comment->name}}<br />
            <b>Comment:</b>{{$comment->comment}}
            <hr />
            @endforeach
        <hr />
    @endforeach
@stop