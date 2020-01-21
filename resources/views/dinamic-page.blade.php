@extends('master')

@section('title', $page->title)

@section('open body')
<div class="se-pre-con"></div>
<div class="main">
@endsection

  @section('content')
  {!! $page->body !!}
  @endsection
