@extends('layouts.app')

@section('content')

    <h1>会員一覧</h1>

    @if (count($members) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>会員番号</th>
                    <th>ユーザ名</th>
                    <th>氏名</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                <tr>
                    <td style="text-align: right">{{ $member->number }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->full_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>会員情報がありません</p>
    @endif
    
    
    {!! link_to_route('members.create', '新規会員の作成', [], ['class' => 'btn btn-primary']) !!}

@endsection