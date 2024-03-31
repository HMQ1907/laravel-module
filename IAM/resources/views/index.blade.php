@extends('iam::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('iam.name') !!}</p>
@endsection
