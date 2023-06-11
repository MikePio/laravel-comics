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

            </div>

            {{-- * CARD CON I DETTAGLI --}}
            {{-- !NELLA PAGINA DEL DETTTAGLIO IL FOREACH E' INUTILE --}}
            <div class="card-detail-container d-flex justify-content-center align-items-center">

              <div class="figure">
                <img src="{{ $detail_card['thumb'] }}" class="" alt="{{ $detail_card['series'] }}">
              </div>

                <div class="row">
                  <div class="card-description">

                    <div class="d-flex justify-content-between align-items-center">
                      <h3 class="card-title p-3">{{ $detail_card['title'] }}</h3>
                      <p class="card-text mb-1 px-3"><strong>Price:      </strong> {{ $detail_card['price'] }}</p>
                    </div>

                      <p class="card-text mb-1 px-3"><strong>Series:     </strong> {{ $detail_card['series'] }}</p>
                      <p class="card-text mb-1 px-3"><strong>Type:       </strong> {{ $detail_card['type'] }}</p>
                      <p class="card-text mb-1 px-3"><strong>Description:</strong> {{ $detail_card['description'] }}</p>

                      <p class="card-text mb-1 px-3"><strong>Artists:    </strong>
                        @foreach ($detail_card['artists'] as $artist)
                          @if (!$loop->last)
                            <span>{{ $artist }},</span>
                          @else
                            <span>{{ $artist }}</span>
                          @endif
                        @endforeach
                      </p>

                      <p class="card-text mb-1 px-3"><strong>Writers:    </strong>
                        @foreach ($detail_card['writers'] as $writers)
                          @if (!$loop->last)
                            <span>{{ $writers }},</span>
                          @else
                            <span>{{ $writers }}</span>
                          @endif
                        @endforeach
                      </p>

                    </div>
              </div>

            </div>

            <div class="container-100 col justify-content-center align-items-center">
              <a href="{{ route('comics') }}" class="">
                <button class="load-more-btn">HOME</button>
              </a>
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
