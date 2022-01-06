{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anasayfa</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body>
    {{-- <div class="container w-100 "> --}}
        {{-- <div style="background-color: #142F43; width: 47vh"
            class="cover-container flex justify-center items-center h-80 w-100 mb-0 pb-0"></div> --}}
        {{-- <div class="row h-80 w-100 ">

            <div class="col-3">
                <img src="{{ URL::asset('images/dev.jpg') }}" alt="Emre Alşan Blog">
            </div>
            <div class="col-3">
                <img src="{{ URL::asset('images/music.jpg') }}" alt="Emre Alşan Blog">

            </div>
            <img src="{{ URL::asset('images/sport.jpg') }}" alt="Emre Alşan Blog">
        </div>
        <div class="col-3">
            <img src="{{ URL::asset('images/life.jpg') }}" alt="Emre Alşan Blog">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <ul>
                <li class="col-3"><a href="{{ route('categories.dev') }}">Yazılım <i class="fa fa-laptop-code"></i></a>
                </li>
                <li class="col-3"><a href="{{ route('categories.music') }}">Müzik <i class="fa fa-music"></i></a>
                </li>
                <li class="col-3"><a href="{{ route('categories.sports') }}">Spor <i
                            class="fa fa-basketball-ball"></i></a></li>
                <li class="col-3"><a href="{{ route('categories.life') }}">Yaşam <i class="fa fa-pizza-slice"></i></a>
                </li>
            </ul>
        </div>


        <div class="col-2">
        </div>
        <div class="col-8">
            @foreach($blogs as $blog)
            <div class="card mb-3 mt-3 shadow-lg">
                <img class="card-img-top" style="height: 370px;" src="{{ asset($blog->image) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text">{!! $blog->description !!}</p>
                    <p class="card-text"><small class="text-muted"><i class="fa fa-calendar-alt mr-2"></i>{{
                            $blog->created_at->format('d-m-Y') }} tarihinde oluşturuldu</small></p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-2">
        </div>





    </div>






    <div class="container-fluid">
        <div class="row h-80">
            <div class="col-3 p-0">
                <img style="width: 100%; z-index:-1;" src="{{ URL::asset('images/dev.jpg') }}" alt="Emre Alşan Blog">
            </div>
            <div class="col-3 p-0">
                <img style="width: 100%; z-index:-1;" src="{{ URL::asset('images/music.jpg') }}" alt="Emre Alşan Blog">
            </div>
            <div class="col-3 p-0">
                <img style="width: 100%; z-index:-1;" src="{{ URL::asset('images/sport.jpg') }}" alt="Emre Alşan Blog">
            </div>
            <div class="col-3 p-0">
                <img style="width: 100%; z-index:-1;" src="{{ URL::asset('images/life.jpg') }}" alt="Emre Alşan Blog">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 p-0">
                <ul>
                    <li class="col-3"><a href="{{ route('categories.dev') }}">Yazılım <i
                                class="fa fa-laptop-code"></i></a></li>
                    <li class="col-3"><a href="{{ route('categories.music') }}">Müzik <i class="fa fa-music"></i></a>
                    </li>
                    <li class="col-3"><a href="{{ route('categories.sports') }}">Spor <i
                                class="fa fa-basketball-ball"></i></a></li>
                    <li class="col-3"><a href="{{ route('categories.life') }}">Yaşam <i
                                class="fa fa-pizza-slice"></i></a></li>
                </ul>
            </div>


            <div class="col-2">
            </div>
            <div class="col-8">
                @foreach($blogs as $blog)
                <div class="card mb-3 mt-3 shadow-lg">
                    <img class="card-img-top" style="height: 370px;" src="{{ asset($blog->image) }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text">{!! $blog->description !!}</p>
                        <p class="card-text"><small class="text-muted"><i class="fa fa-calendar-alt mr-2"></i>{{
                                $blog->created_at->format('d-m-Y') }} tarihinde oluşturuldu</small></p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-2">
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
--}}

<x-header-layout>
    <x-slot name="title">
        Anasayfa
    </x-slot>
    <div class="col-2">
    </div>
    <div class="col-8">
        @foreach($blogs as $blog)
        <div class="card mb-5 mt-3 shadow-lg">
            <img class="card-img-top" style="height: 370px;" src="{{ asset($blog->image) }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{!! Str::words($blog->description, 10,' >>>' ) !!} <small><a class="text-reset"
                            href="{{ route('resume',[$blog->category,$blog->slug]) }}">devamını oku</a></small></p>

                <a href="#!" role="button" onclick="like({{$blog->id}})"><i class="fa fa-thumbs-up"
                        style="font-size: 1.73em;"></i></span></a>

                {{-- Burası Counter Kısmı Kardeş created by Doğukan KARASANSAR NAMI DEĞER BLACK SANSAR --}}
                <span style="display: none">{{$count = 0}}</span>
                @foreach ($likes as $like)
                @if ($like->blog_id == $blog->id)
                <span style="display: none">{{$count += 1}}</span>
                @endif
                @endforeach
                <span id='count-{{$blog->id}}'>{{$count}}</span>


                <p class="card-text"><small class="text-muted"><i class="fa fa-calendar-alt mr-2"></i>{{
                        $blog->created_at->format('d-m-Y') }} tarihinde oluşturuldu</small></p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-2">
    </div>
    <script>
        function like(blog_id) {
         $.ajax({
             type: 'POST',
             url: 'http://127.0.0.1:8000/api/star-add/',
             data: {
                 blog_id: blog_id,
             },
             success: function(values) {
                 //console.log(values);
                 let data = parseInt($(`#count-${blog_id}`).text());
                 $(`#count-${blog_id}`).html(data+1);
                 console.log($(`#count-${blog_id}`).html());
             },
              error: function(e) {
                  console.log(e);
              }
         });
     }
    </script>

</x-header-layout>
