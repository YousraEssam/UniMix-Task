@extends('layouts.unimix')
@section('content')
<div>
    <img class="img2" src="images/pic2.PNG">
</div>

<!-- CAROUSEL NOT WORKING RIGHT -->
{{-- <div class="carousel-caption">
    <div class="carousel-inner">
        <h3> Products & Service </h3>
        <div class="carousel-item active">
            <p> Special Products </p>
            <p> Mortar Ready to use </p>
            <p> Self-Compacting Concrete </p>
            <p> Early Strength Concrete </p>
        </div>

        <div class="carousel-item">
            <p> Steel Fibers Concrete </p>
            <p> Polyproplene Fiber Concrete </p>
            <p> Colored Concrete </p>
            <p> Heavy Weight Concrete </p>
            <p> Reactive Powder Concrete </p>

        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> --}}



<!-- CONTENT -->
<div class="content">
    <div class="one main">
        <div><img class="logo" src="images/sp.PNG"></div>
        <div>
            <p class="titles"> Special Products </p>
            <ol type="1">
                @foreach($specials as $special)
                <li>{{$special}}</li>
                @endforeach
            </ol>
        </div>
    </div>

    @if(count($products) > 0)
        @for($prod=0; $prod<count($products); $prod++) 
            @if(count($products[$prod]->photos) > 0 )
                @if($prod==2) 
                    <div class="properties_table">
                        <p class="titles-border">Conformity Criteria for the Properties</p>
                        <table class="properties">
                            <tr class="rows">
                                <td>Property</td>
                                <td>Conventional Concrete</td>
                                <td>SCC</td>
                            </tr>
                            <tr class="rows">
                                <td>Slump Performance</td>
                                <td>17-13 cm height</td>
                                <td>Spreading Diameter min .50 cm</td>
                            </tr>
                            <tr class="rows">
                                <td>Pouring Time (Standard 7.5 m3 truck)</td>
                                <td>10 mins</td>
                                <td>4 mins</td>
                            </tr>
                            <tr class="rows">
                                <td>Equipment</td>
                                <td>Vibratoris min.2</td>
                                <td>No Need</td>
                            </tr>
                            <tr class="rows">
                                <td>Man Power</td>
                                <td>min.3</td>
                                <td>1</td>
                            </tr>
                            <tr class="rows">
                                <td>Repair Cost</td>
                                <td>%20-10 from overall concrete cost</td>
                                <td>No Additional cost</td>
                            </tr>
                        </table> 
                    </div>
                @endif

                <div class="first">

                    @if( $products[$prod]->id % 2 == 0 )
                        @if(count($products[$prod]->photos) !== 0)
                        <div class="pic">
                            <div><img class="image" src="images/{{$products[$prod]->photos[0]->photo_name}}"></div>
                        </div>
                        @endif
                    @endif

                    <div class="one">
                        <div class="main">
                            <div>
                                <p class="titles"> {{$products[$prod]->product_name}} </p>
                            </div>

                            @if(count($products[$prod]->photos) !== 0)
                                <div>
                                    <img class="logo" src="images/{{$products[$prod]->photos[1]->photo_name}}">
                                </div>
                            @endif

                        </div>

                        @if(!empty($profile_arr))
                            @if($prod+1 <= count($profile_arr)) 
                                @if($products[$prod]->product_name == "Self-Compacting Concrete")
                                    <p class="titles"> Product Profile: </p>
                                    <p class="boldy" style="font-size:14px;"> Concrete technology with all main advantages of SCC </p>
                                @elseif ($products[$prod]->product_name == "Reactive Powder Concrete")
                                    <p>RPC is able to obtain its improved properties by using a very dense mix, consisting if fine particles and
                                        fibers.</p>
                                @elseif ($products[$prod]->product_name == "Heavy Weight Concrete")
                                    <p></p>
                                @else
                                    <p class="titles"> Product Profile: </p>
                                @endif

                                @foreach($profile_arr[$prod] as $profile)
                                    @if($profile !== "")
                                    <ul>
                                        <li>{{$profile}}</li>
                                    </ul>
                                    @endif
                                @endforeach
                            @endif
                        @endif

                        @if(!empty($benefits_arr))
                            @if($prod+1 <= count($benefits_arr)) 
                                @if ($benefits_arr[$prod][0] !== "" ) 
                                    @if($products[$prod]->product_name == "Reactive Powder Concrete")
                                        <p class="titles" style="font-size:16px;"> The Previously mentioned composition allows for the following
                                            properties: </p>
                                    @else
                                        <p class="titles"> Benefits: </p>
                                    @endif
                                    @foreach($benefits_arr[$prod] as $benefit)
                                        <ul>
                                            <li>{{$benefit}}</li>
                                        </ul>
                                    @endforeach
                                @endif
                            @endif
                        @endif

                        @if(!empty($app_arr))
                            @if($prod+1 <= count($app_arr)) 
                                @if ($app_arr[$prod][0] !=="" ) 
                                    <p class="titles"> Applications: </p>
                                    @if($products[$prod]->product_name == "Self-Compacting Concrete")
                                        <p class="boldy"> Vertical and Horizontal </p>
                                    @endif
                                    @foreach($app_arr[$prod] as $app)
                                        <ul>
                                            <li>{{$app}}</li>
                                        </ul>
                                    @endforeach
                                @endif
                            @endif
                        @endif

                    </div>

                    @if( $products[$prod]->id % 2 !== 0 )
                        @if(count($products[$prod]->photos) !== 0)
                        <div class="pic">
                            <div><img class="image" src="images/{{$products[$prod]->photos[0]->photo_name}}"></div>
                        </div>
                        @endif
                    @endif
                </div>
            @endif
        @endfor
    @endif
</div>
@endsection
