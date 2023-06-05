@extends('layout.main')

@section('title')
    Home
@endsection

@section('content')
    <div class="mp-home d-flex col justify-content-center align-items-center">
        <div class="container-content col justify-content-center align-items-center">

            <div class="container-100 col justify-content-center align-items-center">
                <div class="main-container-image container-100">
                    <div class="current-series">CURRENT SERIES</div>
                </div>

                <div class="cards-container container row flex-wrap">

                    {{-- <!-- * cards in maniera dinamica TRAMITE PROPS-->
                    <!-- ! importa il componente card -->
                    <!-- <Card
                v-for="(singleData, index) in data"
                :key="index"
                :imgSrc="singleData.thumb"
                :nameSerie="singleData.series"
              /> --> --}}

                    {{-- <!-- * cards in maniera dinamica-->
                    <!-- <div v-for="(singleData, index) in data" :key="index" class="card col">
                <img :src="`${singleData.thumb}`" :alt="`${singleData.series}`">
                <div>{{ singleData . series }}</div>
              </div> --> --}}

                    {{-- <!-- * cards --> --}}
                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="card col">
                        <img src="{{ Vite::asset('resources/assets/img/jumbotron.jpg') }}" alt="img-card">
                        <div>ACTION COMICS</div>
                    </div>

                    <div class="container-100 col justify-content-center align-items-center">
                        <button class="load-more-btn">LOAD MORE</button>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-cta col justify-content-center align-items-center">
            <div class="container row align-items-center justify-content-around">
                {{-- <div v-for="(linkCta, index) in linksCta" :key="index" class="col">
                    <a :href="`${linkCta.url}`">
                        <div class="item-cta row align-items-center">
                            <!-- <div class="col">
                  <img :src="`${linkCta.img}`" :alt="`${linkCta.name}`">
                </div>
                <div class="col justify-content align-items-center">
                  <div class="name-item">{{ linkCta . name }}</div>
                </div>
              </div>
            </a>
            </div> --> --}}
                            <div class="col">
                                <div class="item-cta row align-items-center">
                                    <div class="col">
                                        <img src="{{ Vite::asset('resources/assets/img/buy-comics-digital-comics.png') }}" alt="img">
                                    </div>
                                    <div class="col justify-content align-items-center">
                                        <div class="name-item">digital comics</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="item-cta row align-items-center">
                                    <div class="col">
                                        <img src="{{ Vite::asset('resources/assets/img/buy-comics-merchandise.png') }}" alt="img">
                                    </div>
                                    <div class="col">
                                        <div class="name-item">dc merchandise</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="item-cta row align-items-center">
                                    <div class="col">
                                        <img src="{{ Vite::asset('resources/assets/img/buy-comics-subscriptions.png') }}" alt="img">
                                    </div>
                                    <div class="col justify-content align-items-center">
                                        <div class="name-item">subscription</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="item-cta row align-items-center">
                                    <div class="col">
                                        <img class="position-img" src="{{ Vite::asset('resources/assets/img/buy-comics-shop-locator.png') }}"
                                            alt="img">
                                    </div>
                                    <div class="col justify-content align-items-center">
                                        <div class="name-item">comic shop locator</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="item-cta row align-items-center">
                                    <div class="col">
                                        <img class="visa-img" src="{{ Vite::asset('resources/assets/img/buy-dc-power-visa.svg') }}" alt="img-visa">
                                    </div>
                                    <div class="col justify-content align-items-center">
                                        <div class="name-item">dc power visa</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
@endsection
