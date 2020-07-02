@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <section>
                <div>
                    <b-jumbotron bg-variant="info" text-variant="white" border-variant="dark">
                      <template v-slot:header>BootstrapVue</template>

                      <template v-slot:lead>
                        This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
                        featured content or information.
                      </template>

                      <hr class="my-4">

                      <p>
                        It uses utility classes for typography and spacing to space content out within the larger
                        container.
                      </p>
                      <b-button variant="primary" href="{{ route('series.index') }}">Browse more Series</b-button>
                    </b-jumbotron>
                  </div>
            </section>

            <section>
                <div>

                    <b-card-group deck>
                        @foreach ($series as $item)
                            <b-card title="{{$item->title}}" img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
                                <b-card-text>
                                {{ \Str::words($item->description, 20)}}
                                </b-card-text>
                                <template v-slot:footer>
                                <small class="text-muted">{{$item->created_at}}</small>
                                </template>
                            </b-card>
                        @endforeach
                    </b-card-group>
                  </div>

            </section>

            <section>
                <pricing-component></pricing-component>
            </section>


        </div>
    </div>
</div>
@endsection
