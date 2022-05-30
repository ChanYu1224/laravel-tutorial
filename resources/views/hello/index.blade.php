@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです．</p>
    <p>必要なだけ記述出来ます．</p>

    @each('components.item', $data, 'item')
@endsection

@section('footer')
    copyright 2022 yuchn.
@endsection