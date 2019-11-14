@extends('master')

@section('content')

<div class="container mt-3">
    <h1 class="text-center">Good Price</h1>


    <div class="row mt-2">
        <div class="col-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="atribute[]" id="name" value="name">
                <label class="form-check-label" for="namecb">Nama</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="atribute[]" id="price" value="price">
                <label class="form-check-label" for="pricecb">Harga</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="atribute[]" id="description" value="description">
                <label class="form-check-label" for="descriptioncb">Deskripsi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="atribute[]" id="rating" value="description">
                <label class="form-check-label" for="descriptioncb">Rating</label>
            </div>
        </div>
    </div>
    <div class="text-center my-5">
        <button id="tokenizing" class="btn btn-primary">Tokenizing</button>
        <button id="case-folding" class="btn btn-secondary">Case Folding</button>
        <button id="stemming" class="btn btn-success">Stemming</button>
        <button id="stopword" class="btn btn-info">Stopword</button>
        <div class="mt-3">
            <button id="katatanya" class="btn btn-info">Hapus Kata Tanya</button>
            <button id="tandabaca" class="btn btn-success">Hapus Tanda Baca</button>
            <button id="removemot" class="btn btn-warning">Hapus Emoticon</button>
        </div>
    </div>


    <div class="table-responsive mt-3">
        <table class="table" id="table-shopee" width="100%">
            <thead>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
        </table>
    </div>
</div>

@endsection


@push('footer-scripts')
<script src="{{ asset('js/shopee.js') }}">
</script>
@endpush