@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <section>
                <h1>Video Player</h1>

                {{-- <video width="100%" height="400" controls>
                    <source src="{{asset('Special New Series Announcement.mp4')}}" type="video/mp4">
                        your browser does not support this video tag
                </video> --}}
                <b-breadcrumb :items="{{json_encode($breadcrumbs)}}"></b-breadcrumb>
                <video-player-component :videofile="{{$video}}" nextvideourl="{{$nextvideo}}"></video-player-component>
            </section>

            <section class="mb-5 pt-5 text-center">
                <a href="#" class="text-decoration-none" style="color: black">
                    <b-card class="mb-2 pverflow-hidden" no-body >
                        <b-row>
                            <b-col>
                                <h3 class="pt-3"><strong>About this Episode</strong></h3>

                                <b-card-body :title="{{$video->title}}">
                                    <b-card-text>
                                        {{$video->description}}
                                    </b-card-text>
                                </b-card-body>
                            </b-col>
                        </b-row>
                    </b-card>
                </a>
            </section>

            <section>
                <h3 class="text-center mb-3">Episodes</h3>
                <episodes-component :videos="{{$series->videos}}" :seriesid="{{$series->id}}"></episodes-component>
            </section>


        </div>
    </div>
</div>
@endsection

