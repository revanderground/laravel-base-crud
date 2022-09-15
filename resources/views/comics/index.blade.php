@extends('layouts.main')

@section('name', 'Main comics')

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
                                {{ $comic->price }} €
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


