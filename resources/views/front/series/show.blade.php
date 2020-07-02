@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <section>
                <div>
                    <b-jumbotron bg-variant="info" text-variant="white" border-variant="dark">
                      <template v-slot:header>{{$series->title}}</template>

                      <template v-slot:lead>
                       {{$series->description}}
                      </template>

                      <hr class="my-4">

                      <b-button variant="primary" href="{{ route('series.index') }}">Start Series</b-button>
                      <b-button variant="primary" href="{{ route('series.index') }}">Subcribes</b-button>
                    </b-jumbotron>
                  </div>
            </section>

            <section class="mt-5">
                <h3 class="mb-3 text-center">Episode</h3>
                <episodes-component :videos="{{$series->videos}}" :seriesid="{{$series->id}}"></episodes-component>
            </section>
        </div>
    </div>
</div>
@endsection
