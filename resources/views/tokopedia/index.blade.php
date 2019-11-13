@extends('master')

@section('content')

    <div class="container mt-3">
        <h1 class="text-center">Good Price</h1>
        <div class="row mt-2">
            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="atribute" id="name" value="option1">
                    <label class="form-check-label" for="namecb">Nama</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="atribute" id="price" value="option2">
                    <label class="form-check-label" for="pricecb">Harga</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="atribute" id="description" value="option3">
                    <label class="form-check-label" for="descriptioncb">Deskripsi</label>
                </div>
            </div>
            <div class="col-8">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="atribute" id="review" value="option4">
                    <label class="form-check-label" for="reviewcb">Review</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="atribute" id="send" value="option5">
                    <label class="form-check-label" for="sendcb">Produk Terkirim</label>
                </div>
            </div>
        </div>
            
        <form id="get_data">

            <button class="btn btn-primary mt-2" id="btn-find">Ambil Data</button>
        </form>

        <div class="table-responsive mt-3">
          <table class="table" id="table" width="100%">
                 <thead>
                  <tr>
                      <th id="name_column">Nama</th>
                      <th id="price_column">Harga</th>
                      <th id="description_column">Deskripsi</th>
                      <th id="review_column">Review</th>
                      <th id="send_column">Produk terkirim</th>
                  </tr>
                 </thead>
                 <tbody>
                  {{-- <tr>
                      <th id="name-column"></th>
                      <th id="price-column"></th>
                      <th id="description-column"></th>
                      <th id="review-column"></th>
                      <th id="send-column"></th>
                  </tr> --}}
                </tbody>
             </table>
         </div>
        <div class="text-center my-5">
            <button type="button" class="btn btn-primary">Tokenizing</button>
            <button type="button" class="btn btn-secondary">Case Folding</button>
            <button type="button" class="btn btn-success">Stemming</button>
            <button type="button" class="btn btn-info">Stopword</button>
            <div class="mt-3">
                <button type="button" class="btn btn-info">Hapus Kata Tanya</button>
                <button type="button" class="btn btn-success">Hapus Tanda Baca</button>
                <button type="button" class="btn btn-warning">Hapus Emoticon</button>
            </div>
        </div>
    </div>

@endsection


@push('footer-scripts')
<script>
    $(document).ready(function () {
        $('#get_data').submit(function (event) {

            $("input[name='atribute']").each(function(){
                if(!$('#'+this.id).is(':checked')){
                    $('#'+this.id +'_column').remove();
                }
            })
        })
    })
</script>
@endpush

