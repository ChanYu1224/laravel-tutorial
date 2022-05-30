@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです．</p>
    <p>必要なだけ記述出来ます．</p>

    @include('components.message',[
        'message_title'=>'OK',
        'message_content'=>'サブビューです．'
    ])
@endsection

@section('footer')
    copyright 2022 yuchn.
@endsection