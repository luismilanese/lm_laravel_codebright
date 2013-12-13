@extends('layouts.base')

@section('head')
@parent
<link rel="stylesheet" href="another.css" />
@stop

@section('about')
<small>Beware!</small>
@stop

@section('body')
<h1>Hello, Hooray!</h1>
<p>God. I. Feel. So. Strooooooooooong.</p>
@yield('about')
@stop

