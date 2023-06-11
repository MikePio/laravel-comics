@extends('layout.main')

@section('title')
    Description
@endsection

@section('content')
    <div class="mp-home d-flex col justify-content-center align-items-center">
        <div class="container-content col justify-content-center align-items-center">

            <div class="container-100 col justify-content-center align-items-center">
                <div class="main-container-image container-100">
                    <div class="current-series">DESCRIPTION</div>
                </div>

                <div class="cards-container container row flex-wrap">

                  {{-- * CARD CON I DETTAGLI --}}
                    {{-- !NELLA PAGINA DEL DETTTAGLIO IL FOREACH E' INUTILE --}}
                    <div class="card col">
                      <img src="{{ $detail_page['thumb'] }}" alt="{{ $detail_page['series'] }}">
                      <div>{{ $detail_page['series'] }}</div>
                      <div>{{ $detail_page['description'] }}</div>
                    </div>

                    <div class="container-100 col justify-content-center align-items-center">
                        <button class="load-more-btn">LOAD MORE</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-cta col justify-content-center align-items-center">
            <div class="container row align-items-center justify-content-around">

              {{-- * ICONE CONTAINER-CTA DINAMICHE --}}
              @foreach ($menu_cta as $cta_item)

              <div class="col">
                <a href="{{ $cta_item['url'] }}">
                  <div class="item-cta row align-items-center">
                      <div class="col">
                          <img src="{{ Vite::asset('resources/assets/img/'.$cta_item['img']) }}" alt="{{ $cta_item['img'] }}">
                      </div>
                      <div class="col justify-content align-items-center">
                          <div class="name-item">{{ $cta_item['name'] }}</div>
                      </div>
                  </div>
              </a>
            </div>

              @endforeach
                        </div>
                </div>

            </div>
@endsection
