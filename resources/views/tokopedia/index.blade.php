@extends('master')

@section('content')

    <div class="container mt-3">
        <h1 class="text-center">Good Price</h1>
        <div class="row mt-2">
            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="atribute" id="name" value="name">
                    <label class="form-check-label" for="namecb">Nama</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="atribute" id="price" value="price">
                    <label class="form-check-label" for="pricecb">Harga</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="atribute" id="description" value="description">
                    <label class="form-check-label" for="descriptioncb">Deskripsi</label>
                </div>
            </div>
            <div class="col-8">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="atribute" id="review" value="review">
                    <label class="form-check-label" for="reviewcb">Review</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox"  name="atribute" id="send" value="send">
                    <label class="form-check-label" for="sendcb">Produk Terkirim</label>
                </div>
            </div>
        </div>
            
        <form id="get_data">

            <button type="submit" class="btn btn-primary mt-2" id="btn-find">Ambil Data</button>
        </form>

        <div class="table-responsive mt-3">
          <table class="table" id="table" width="100%">
                 <thead>
                  <tr>
                      <td id="name_column">Nama</td>
                      <td id="price_column">Harga</td>
                      <td id="description_column">Deskripsi</td>
                      <td id="review_column">Review</td>
                      <td id="send_column">Produk terkirim</td>
                  </tr>
                 </thead>
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
    // $(document).ready(function () {
    //     $('#get_data').submit(function (event) {
    //         $("input[name='atribute']").each(function(){
    //             if(!$('#'+this.id).is(':checked')){
    //                 alert(this.id)
    //                 $('#'+this.id +'_column').remove();
    //             }
    //         })
    //     })
    // })
</script>
@endpush

