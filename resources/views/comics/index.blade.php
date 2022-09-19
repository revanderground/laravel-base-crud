@extends('layouts.main')

@section('title', 'Main comics')

@section('main-content')
    <div class="container my-5">
        <div class="row">
            <table class="table table-striped col-12">
                <thead class="table-dark">
                    <th>ID</th>
                    <th colspan="3"  class="px-4">Title</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Sales Date</th>
                    <th>Type</th>
                    <th></th>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td>
                                {{ $comic->id }}
                            </td>
                            <td colspan="2"></td>
                            <td>
                                <a href="{{ route('comics.show', $comic->id) }}">
                                    {{ $comic->title}}
                                </a>

                            </td>
                            <td>
                                {{ round($comic->price, 2) }} €
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
                            <td>

                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-sm btn-success">
                                    Edit
                                </a>

                            </td>

                        </tr>
                    @empty
                    <tr>
                        <td colspan="6">
                            Non sono disponibili comic da visualizzare
                        </td>
                    </tr>

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection


