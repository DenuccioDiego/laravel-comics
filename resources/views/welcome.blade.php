@extends('layouts.app')



@section('content')
<div id="cards_section">
    <div class="container py-5 position-relative">

        <div class="row gy-5">

            @foreach($cards as $card)
            <div class="col-2">

                <div class="">
                    <img class="mb-3" src="{{$card['thumb']}}" alt="">
                    <span class="text-white mt-5">
                        {{$card['series']}}
                    </span>
                </div>

            </div>
            @endforeach

        </div>    

        <span class="position-absolute text-white  fs-3 px-4 py-2">
            CURRENT SERIES
        </span>

        <div class="text-center mt-3">
            <span class="py-2 px-5 text-white bg_botton">
                LOAD MORE
            </span>
        </div>

        
        
        
        

    </div>

</div>







@endsection