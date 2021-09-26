@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a>
        <a href="/tournaments" class="active">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Teams</h1>
    <table class="table">
        <tr>
            <th>Team</th>
            <th>Soort</th>
            <th>Herkomst</th>
        </tr>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->type }}</td>
                <td>{{ $team->origin }}</td>
            </tr>
        @endforeach
    </table>
    
@endsection
<!-- hier komt een lijst van teams -->