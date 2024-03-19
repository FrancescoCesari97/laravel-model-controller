@extends('layouts.app')


@section('title', 'Lista dei film')


@section('main-content')


    <section>
        <div class="container py-4">
            {{-- @dump($movies) --}}

            <div class="row ">
                @forelse ($movies as $movie)
                    <div class="col-6 g-4 ">

                        <div class="card card-body h-100 ">
                            {{-- <a href="{{ route('comic-detail', [
                            'index' => $index,
                        ]) }}"> --}}
                            </a>

                            <h3 class="fs-6 ">{{ $movie->title }}</h3>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        No film

                    </div>
                @endforelse
            </div>

        </div>

    </section>


@endsection
