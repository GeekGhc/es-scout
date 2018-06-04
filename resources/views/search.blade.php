@extends('layouts.app')
@section('content')
    <div class="ui search es-search">
        <div class="ui icon input">
            <input id="es-input" class="prompt" type="text" placeholder="搜索关键词……">
            <i class="search icon"></i>
        </div>
        <div class="results"></div>
    </div>
    <div class="column search-panel">
        <div class="panel-header">
            <i class="icon search"></i>搜索 <em>{{$q}}</em>结果总计{{count($posts)}}条
        </div>
        <div class="panel-body">
            @if($posts)
                @foreach($posts as $post)
                    <div class="result">
                        <h2 class="title">
                            @if (isset($post['highlight']['title'][0]))
                                {!! $post['highlight']['title'][0] !!}
                            @else
                                {{ $post['_source']['title'] }}
                            @endif
                        </h2>
                        <span class="author">
                        <i class="reply all icon"></i>
                            @if (isset($post['highlight']['author'][0]))
                                {!! $post['highlight']['author'][0] !!}
                            @else
                                {{ $post['_source']['author'] }}
                            @endif
                    </span>
                        <div class="content">
                            @if (isset($post['highlight']['content'][0]))
                                {!! $post['highlight']['content'][0] !!}
                            @else
                                {{ $post['_source']['content'] }}
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <div class="empty-content">
                    <i class="send icon"></i>搜索内容为空
                </div>
            @endif

        </div>
    </div>
@endsection