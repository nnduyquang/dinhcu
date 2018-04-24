@extends('frontend.master')
@section('title')
    @if(count($data['post'])==1)
        {{$data['post'][0]->seo_title}}
    @elseif(count($data['post'])==0)
        {{$data['mainCategory']->seo_title}}
    @else
        {{$data['mainCategory']->seo_title}}
    @endif

@stop
@section('description')
    @if(count($data['post'])==1)
        {{$data['post'][0]->seo_description}}
    @else
        {{$data['mainCategory']->seo_description}}
    @endif
@stop
@section('keyword')
    @if(count($data['post'])==1)
        {{$data['post'][0]->seo_keywords}}
    @else
        {{$data['mainCategory']->seo_keywords}}
    @endif
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    @include('frontend.common.slider')
@stop
@section('container')
    {{--@include('frontend.home.h_introduce')--}}
    @include('frontend.post.po_info')
@stop