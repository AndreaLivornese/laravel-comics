


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @vite('resources/js/app.js')
</head>
<body>
    <!-- vue script -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <div id="app">
        <nav>
            <div class="container">
                <div class="my_row">
                    <div>
                        <img src="{{Vite::asset("resources/img/dc-logo.png")}}" alt="">
                    </div>
                    <div>
                        <ul class="links">
                            <li v-for="currentLink in navLinks">
                                <a href="">@{{currentLink}}</a>
                            </li>
                        </ul>
                    </div>
        
                </div>
        
            </div>
        </nav>


        {{-- jumbo --}}


        <section class="sec-jumbotron">

            <div id="jumbotron-img">
              <img src="{{Vite::asset("resources/img/jumbotron.jpg")}}" alt="jumbotron">
            </div>

        </section>


        
    </div>



    
    @yield('content')
 


    
</body>
</html>