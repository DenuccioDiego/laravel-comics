@extends('layouts.app')

@section('content')

     <section id="one_card_section">
          <div id="top_bar">
               <div class="container">
                    <div class="position-relative">
                         
                         <img class="position-absolute" src="{{$cards[0]['thumb']}}" alt="">
                         
                         
                    </div>
               </div>
          </div>
          

          <div class="container pt-4">

               <div class="row">

                    <div class="col-8">
                         <h2>
                              {{$cards[0]['title']}}
                         </h2>
                         <div>
                              <span>
                                   U.S.Price:{{$cards[0]['price']}}
                              </span>
                              <span>
                                   AVALIABLE
                              </span>
                              <span>
                                   CHECK AVAILABILTY
                              </span>
                         </div>
                         <p>
                              {{$cards[0]['description']}}
                         </p>
                    </div>

                    <div class="col-4 text-end">
                         <span>
                              ADVERTISEMENT
                         </span>
                         <img src="../img/adv.jpg" alt="">
                    </div>

               </div>
          </div>

          <div id="details_comics">
               <div class="container">
                    <div class="row">

                         <div class="col-6">
                              <h5>Talent</h5>
                              <div class="row">
                                   <div class="col-2">
                                        <span>Art by:</span>
                                   </div>
                                   <div class="col-10">
                                        <span>
                                             @foreach($cards[0]['artists'] as $artist)

                                                  {{$artist}}

                                             @endforeach
                                        </span>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-2">
                                        <span>
                                             Written by:
                                        </span>
                                   </div>
                                   <div class="col-10">
                                        @foreach($cards[0]['writers'] as $writer)

                                             {{$writer}}

                                        @endforeach
                                   </div>
                              </div>
                         </div>

                         <div class="col-6">
                              <h5>Specs</h5>

                              <div class="row">
                                   <div class="col-2">
                                        <span>Series:</span>
                                   </div>
                                   <div class="col-10">
                                        <span>
                                             {{$cards[0]['series']}}
                                        </span>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-2">
                                        <span>U.S. Price</span>
                                   </div>
                                   <div class="col-10">
                                        <span>
                                             {{$cards[0]['price']}}
                                        </span>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-2">
                                        <span>On Sale Date:</span>
                                   </div>

                                   <div class="col-10">
                                        <span>
                                             {{$cards[0]['sale_date']}}
                                        </span>
                                   </div>
                              </div>

                         </div>


                    </div>
               </div>
          </div>





     </section>



@endsection