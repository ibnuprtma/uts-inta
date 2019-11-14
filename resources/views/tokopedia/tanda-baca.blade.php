@extends('master')

@section('content')

    <div class="container mt-3">
        <h1 class="text-center">Good Price - TandaBaca</h1>
        <div class="table-responsive mt-3">
          <table class="table" id="table" width="100%">
                 <thead>
                  <tr>
                      @foreach ($a as $item)
                        <td>{{$item}}</td>
                      @endforeach
                  </tr>
                 </thead>
             </table>
         </div>
    </div>

@endsection


@push('footer-scripts')
@endpush

