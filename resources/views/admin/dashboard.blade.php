@extends('layouts.admin')

@section('title')
الرئيسية
@endsection

@section('contentheader')
الرئيسية
@endsection



@section('contentheaderlink')
<a href="{{route('admin.dashboard)}}">link</a>
@endsection

@section('contentheaderactive')
عرض
@endsection