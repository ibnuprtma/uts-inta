@extends('master')

@section('content')

<div class="container-fluid mt-3">
    <h1 class="text-center">Good Price</h1>

    <div class="card">
        <form action="" id="form-mediated">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4>Tokopedia</h4>
                    </div>

                    <div class="col-6">
                        <h4>Shopee</h4>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tp" id="name" value="name">
                            <label class="form-check-label" for="namecb">Nama</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tp" id="price" value="price">
                            <label class="form-check-label" for="pricecb">Harga</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tp" id="description" value="description">
                            <label class="form-check-label" for="descriptioncb">Deskripsi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="tp" id="rating" value="rating">
                            <label class="form-check-label" for="descriptioncb">Rating</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="sp" id="name" value="name">
                            <label class="form-check-label" for="namecb">Nama</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="sp" id="price" value="price">
                            <label class="form-check-label" for="pricecb">Harga</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="sp" id="description" value="description">
                            <label class="form-check-label" for="descriptioncb">Deskripsi</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="sp" id="rating" value="rating">
                            <label class="form-check-label" for="descriptioncb">Rating</label>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>


    <div class="table-responsive mt-3">
        <table class="table" id="table-mediated" width="100%">
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
<script src="{{ asset('js/mediated.js') }}">
</script>
@endpush