@extends('master')

@section('content')

    <div class="container mt-3">
        <h1 class="text-center">Good Price - Mediated Schema</h1>
        <div class="row">
            <div class="col-6"><h4>Tokopedia</h4></div>

            <div class="col-6"><h4>Shopee</h4></div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Nama</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option2">
                            <label class="form-check-label" for="inlineCheckbox1">Harga</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option3">
                            <label class="form-check-label" for="inlineCheckbox1">Deskripsi</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option4">
                            <label class="form-check-label" for="inlineCheckbox1">Review</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option5">
                            <label class="form-check-label" for="inlineCheckbox1">Produk Terkirim</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Nama</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option2">
                            <label class="form-check-label" for="inlineCheckbox1">Harga</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option3">
                            <label class="form-check-label" for="inlineCheckbox1">Deskripsi</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option4">
                            <label class="form-check-label" for="inlineCheckbox1">Review</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option5">
                            <label class="form-check-label" for="inlineCheckbox1">Produk Terkirim</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <button class="btn btn-primary mt-2" id="btn-find">Ambil Data</button>

        <div class="table-responsive mt-3">
          <table class="table" id="table">
                 <thead>
                  <tr>
                      <th width="10%">Nama</th>
                      <th width="35%">Harga</th>
                      <th width="35%">Deskripsi</th>
                      <th width="30%">Review</th>
                      <th width="30%">Produk Terkirim</th>
                  </tr>
                 </thead>
             </table>
         </div>
    </div>

@endsection


@push('footer-scripts')
@endpush

