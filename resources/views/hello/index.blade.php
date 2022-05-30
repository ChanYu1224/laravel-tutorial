@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです．</p>
    <p>必要なだけ記述出来ます．</p>

    @component('components.message')
        @slot('message_title')
            CAUTION!
        @endslot
        
        @slot('message_content')
            これはメッセージの表示です．
        @endslot
    @endcomponent
@endsection

@section('footer')
    copyright 2022 yuchn.
@endsection