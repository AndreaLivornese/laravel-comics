@extends('layouts/app')

@section("content")

<main>

    <div id="img-wrapper">
        <img src="" alt="">
    </div>
    
    <div class="container_small">
        <div id="info">
    
            {{-- inserisco staticamente solo un singolo comics seguendo la traccia dell'esercizio --}}

            <div class="title">
                {{$comics[0]["title"]}}
            </div>
            <div class="check-wrapper">
                <div class="price-status">
                    <div class="price">
                        <span class="opacity-05">U.S. Price:</span>
                        {{$comics[0]["price"]}}
                    </div>
                    <div class="status opacity-05">avaiable</div>

                </div>
                <div class="check">
                    Check Availability
                </div>
            </div>
            <div class="text">
                {{$comics[0]["description"]}}
            </div>
        </div>


        
    </div>
    <div id="specs">

        <div class="container_small">

            <div class="tables">

               <table class="my_table">

                <thead>
                        <tr>
                            <th colspan="2">
                                Talent
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Art by:</td>
                            <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae, voluptas fugit, illo minus labore dolore </td>
                        </tr>
                        <tr>
                            <td>
                                Written by:
                            </td>
                            <td>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis quia repellendus ea minus 
                            </td>
                        </tr>
                    </tbody>

                </table>


                <table class="my_table">

                    <thead>
                        <tr>
                            <th colspan="2">
                                Specs
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Series:</td>
                            <td>{{$comics[0]["series"]}}</td>
                        </tr>
                        <tr>
                            <td>
                                U.S. Price:
                            </td>
                            <td>
                                {{$comics[0]["price"]}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                               On Sale Date:
                            </td>
                            <td>
                                {{$comics[0]["sale_date"]}} 
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>

        </div>


    </div>
    
</main>

@endsection