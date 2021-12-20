@extends('layouts.app')

@section('content')

     <section id="one_card_section">

          <div id="top_bar">
               <div class="container">
                    
               </div>
          </div>
          
          <div class="container pt-4 position-relative">

               
                         
               <img class="position-absolute" src="{{$card['thumb']}}" alt="">
                              
               

               <div class="row">

                    <div class="col-8">
                         <h2>
                              {{$card['title']}}
                         </h2>
                         <div>
                              <span>
                                   U.S.Price:{{$card['price']}}
                              </span>
                              <span>
                                   AVALIABLE
                              </span>
                              <span>
                                   CHECK AVAILABILTY
                              </span>
                         </div>
                         <p>
                              {{$card['description']}}
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
                                             @foreach($card['artists'] as $artist)

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
                                        @foreach($card['writers'] as $writers)

                                             {{$writers}}

                                        @endforeach
                                   </div>
                              </div>
                         </div>

                         <div class="col-6">
                              <h5>Specs</h5>

                              <div class="row gx-2">
                                   <div class="col-2">
                                        <span>Series:</span>
                                   </div>
                                   <div class="col-10 ps-4">
                                        <span>
                                             {{$card['series']}}
                                        </span>
                                   </div>
                              </div>

                              <div class="row gx-2">
                                   <div class="col-2">
                                        <span>U.S. Price</span>
                                   </div>
                                   <div class="col-10 ps-4">
                                        <span>
                                             {{$card['price']}}
                                        </span>
                                   </div>
                              </div>

                              <div class="row gx-2">
                                   <div class="col-2">
                                        <span>On Sale Date:</span>
                                   </div>

                                   <div class="col-10 ps-4">
                                        <span>
                                             {{$card['sale_date']}}
                                        </span>
                                   </div>
                              </div>

                         </div>


                    </div>
               </div>
          </div>

     </section>



@endsection