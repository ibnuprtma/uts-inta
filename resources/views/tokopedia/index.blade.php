@extends('master')

@section('content')

    <div class="container mt-3">
        <h1 class="text-center">Good Price</h1>
        <form
            @if(isset($_GET['token'])) 
                action="{{ action('TokopediaSourceController@tokenazing')}}" 
            @elseif(isset($_GET['case']))
                action="{{ action('TokopediaSourceController@casefolding')}}" 
            @elseif(isset($_GET['stemming']))
                action="{{ action('TokopediaSourceController@stemming')}}" 
            @elseif(isset($_GET['stopword']))
                action="{{ action('TokopediaSourceController@stopword')}}" 
            @elseif(isset($_GET['tandabaca']))
                action="{{ action('TokopediaSourceController@tandabaca')}}" 
            @elseif(isset($_GET['katatanya']))
                action="{{ action('TokopediaSourceController@katatanya')}}" 
            @elseif(isset($_GET['removemot']))
                action="{{ action('TokopediaSourceController@removemot')}}" 
            @endif
            method="get">

            {{csrf_field()}}  
            <div class="row mt-2">
                <div class="col-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"  name="atribute[]" id="name" value="name">
                        <label class="form-check-label" for="namecb">Nama</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"  name="atribute[]" id="price" value="price">
                        <label class="form-check-label" for="pricecb">Harga</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"  name="atribute[]" id="description" value="description">
                        <label class="form-check-label" for="descriptioncb">Deskripsi</label>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"  name="atribute[]" id="review" value="review">
                        <label class="form-check-label" for="reviewcb">Review</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"  name="atribute[]" id="send" value="send">
                        <label class="form-check-label" for="sendcb">Produk Terkirim</label>
                    </div>
                </div>
            </div>
            <div class="text-center my-5">
                <button type="submit" name="token" class="btn btn-primary">Tokenizing</button>
                <button type="submit" name="case" class="btn btn-secondary">Case Folding</button>
                <button type="submit" name="stemming" class="btn btn-success">Stemming</button>
                <button type="submit" name="stopword" class="btn btn-info">Stopword</button>
                <div class="mt-3">
                    <button type="submit" name="katatanya" class="btn btn-info">Hapus Kata Tanya</button>
                    <button type="submit" name="tandabaca" class="btn btn-success">Hapus Tanda Baca</button>
                    <button type="submit" name="removemot" class="btn btn-warning">Hapus Emoticon</button>
                </div>
            </div>
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

