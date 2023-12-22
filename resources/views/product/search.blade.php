@extends('layouts.app')

@section('content')

<div class="container mt-3 pd-3">
    <h2>Search Functionality</h2> <hr>
    <div class=" juctify-content-center">
            {{-- <div class="col-md"> --}}
                <form class="form-group d-flex">
                    <input class="form-control rounded  p-2 m-2" id="search" type="search" placeholder="Search">
                    <button class="btn btn-outline-success p-2 m-2" type="submit">Search</button>
                    <a href="{{ url('/products') }}" class="btn btn-outline-primary p-2 m-2">Home</a>
                  </form>
            {{-- </div> --}}
    </div>
    <div class="juctify-content-center">
        <div class="card mycard m-2 p-2" > </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text.javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}'}})
</script>

<script>
    $(document).ready(function(){
        $('#search').on('keyup', function(){

            var value = $(this).val();
            // console.log(value);
            $.ajax({
                type: "get",
                url: "/search",
                data: {'search':value},
                success: function(data){
                    // console.log(data);
                        $('.mycard').html(data);
                }
            });

        });
    });
</script>


@endsection
