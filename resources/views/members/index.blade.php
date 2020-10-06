@extends('layouts.app')

@section('content')

    <h1>会員一覧</h1>

    @if (count($members) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>会員番号</th>
                    <th>会員情報</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection