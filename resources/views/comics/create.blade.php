@extends('layouts.main')

@section('name', 'Create a new comic')

@section('main-content')

<section class="my-background">

    <div class="col-6 p-3 mx-auto">

        {{-- Specificazione ROTTAe METDO --}}
        <form action="{{ route('comics.store') }}" method='post'>
        {{-- INSERIMENTO del XSRF --}}
        @csrf

            <div class="form-group py-3 py-3">
            <label for="input-title">Title</label>
            <input type="text" class="form-control" id="input-title" name="title">
            <small id="emailHelp" class="form-text text-muted">Insert your title</small>
            </div>

            <div class="form-group py-3">
            <label for="input-sale-date">Sale Date</label>
            <input type="date" class="form-control" id="input-sale-date" name="sale_date">
            </div>

            <div class="form-group py-3">
                <label for="input-description">Description</label>
                <textarea class="form-control" name="description" id="input-description" cols="30" rows="8"></textarea>
            </div>

            <div class="form-group py-3">
                <label for="input-price">Price</label>
                <input type="number" class="form-control" id="input-price" name="price">
            </div>

            <div class="form-group py-3">
            <label for="input-thumb">Thumbnail</label>
            <input type="đate" class="form-control" id="input-thumb" name="thumb">
            </div>

            <div class="form-group py-3">
                <label for="input-series">Series</label>
                <input type="text" class="form-control" id="input-series" name="series">
            </div>

            <div class="form-group py-3">
                <label for="input-type">Type</label>
                <input type="text" class="form-control" id="input-type" name="type">
            </div>

            <div class="form-group py-3 text-center">
                <button type="submit" class="btn btn-lg btn-secondary">Send your comic</button>
            </div>

        </form>

     </div>

</section>


@endsection
