@extends('layouts.app')

@section('content')
    <h1>Thank you`!</h1>
    @if (!empty($mime_type))
    {{ $mime_type }}
    @endif
@endsection