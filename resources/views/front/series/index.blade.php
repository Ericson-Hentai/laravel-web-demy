@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <section>
                <div>
                    <b-row>
                        <b-card-group deck>
                            @foreach ($series as $item)
                            <b-col cols="4" class="mb-3">
                                <b-card title="{{$item->title}}" img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
                                    <b-card-text>
                                        {{ \Str::words($item->description, 10)}}
                                    </b-card-text>
                                    <template v-slot:footer>
                                        <small class="text-muted">{{$item->created_at}}</small>
                                    </template>
                                    <b-button variant="primary" href="{{ route('series.show', $item->id) }}">Play</b-button>
                                </b-card>
                            </b-col>
                            @endforeach
                        </b-card-group>

                      </b-row>
                  </div>
                  {{ $series->links() }}
            </section>

            <section class="mt-5">
                <pricing-component></pricing-component>
            </section>


        </div>
    </div>
</div>
@endsection
