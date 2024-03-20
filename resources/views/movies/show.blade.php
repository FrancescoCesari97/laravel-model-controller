@extends('layouts.app')


@section('title', 'Lista dei film')


@section('main-content')


    <section>
        <div class="container py-4">
            {{-- @dump($movies) --}}



            <div class="card h-100">
                <div class="card-body ">

                    <h3 class="fs-6 ">{{ $movie->title }}</h3>
                    <h3 class="fs-6 ">{{ $movie->original_title }}</h3>

                    <h3 class="fs-6 ">{{ $movie->nationality }}</h3>
                    <h3 class="fs-6 ">{{ $movie->date }}</h3>
                    <h3 class="fs-6 ">{{ $movie->vote }}</h3>

                </div>

            </div>


        </div>

        </div>

    </section>


@endsection
