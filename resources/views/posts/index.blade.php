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
        <hr />
    @endforeach
@stop