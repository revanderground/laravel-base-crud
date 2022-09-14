@extends('layouts.main')

@section('name', 'Main comics')

@section('main-content')
    <div class="container my-5">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th colspan="2">Title</th>
                    <th>Series</th>
                    <th>Sales Date</th>
                    <th>Type</th>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td>
                                {{ $comic->id }}
                            </td>
                            <td colspan="2"></td>
                            <td>
                                {{ $comic->title}}
                            </td>
                            <td>
                                {{ $comic->price }}
                            </td>
                            <td>
                                {{ $comic->series }}
                            </td>
                            <td>
                                {{ $comic->sale_date }}
                            </td>
                            <td>
                                {{ $comic->type }}
                            </td>

                        </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection


