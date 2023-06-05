<footer>

    <div class="container-top col align-items-center justify-content-center">
        <div class="big-container container row ">
            <div class="half-container half-container-left">
                <div class="row">
                    <div class="col">

                        <ul>
                            <h4>DC COMICS</h4>
                            {{-- <li v-for="(listItem, index) in linksFooterTop[0].dcComics" :key="index"><a
                                    :href="`${listItem.url}`">{{ listItem . name }}</a></a></li> --}}
                            <li><a>Characters</a></li>
                            <li><a>Comics</a></li>
                            <li><a>Movies</a></li>
                            <li><a>TV</a></li>
                            <li><a>Games</a></li>
                            <li><a>Videos</a></li>
                            <li><a>News</a></li>
                        </ul>

                        <ul>
                            <h4>SHOP</h4>
                            {{-- <li v-for="(listItem, index) in linksFooterTop[1].shop" :key="index"><a
                                    :href="`${listItem.url}`">{{ listItem . name }}</a></a></li> --}}
                            <li><a>Shop DC</a></li>
                            <li><a>Shop DC Collectibles</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <ul>
                            <h4>DC</h4>
                            {{-- <li v-for="(listItem, index) in linksFooterTop[2].dc" :key="index"><a
                                    :href="`${listItem.url}`">{{ listItem . name }}</a></a></li> --}}
                            <li><a>Terms Of Use</a></li>
                            <li><a>Privacy policy (New)</a></li>
                            <li><a>Ad Choices</a></li>
                            <li><a>Advertising</a></li>
                            <li><a>Jobs</a></li>
                            <li><a>Subscriptions</a></li>
                            <li><a>Talent Workshops</a></li>
                            <li><a>CPSC Certificates</a></li>
                            <li><a>Ratings</a></li>
                            <li><a>Shop Help</a></li>
                            <li><a>Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <ul>
                            <h4>SITES</h4>
                            {{-- <li v-for="(listItem, index) in linksFooterTop[3].sites" :key="index"><a
                                :href="`${listItem.url}`">{{ listItem . name }}</a></a></li> --}}
                            <li><a>DC</a></li>
                            <li><a>MAD Magazine</a></li>
                            <li><a>DC Kids</a></li>
                            <li><a>DC Universe</a></li>
                            <li><a>DC Power Visa</a></li>
                        </ul>
                    </div>

                </div>

            </div>
            <div class="half-container half-container-right">
                <!-- <img class="dc-background" src="../assets/img/dc-logo-bg.png" alt="dc-background"> -->
                <!-- <img class="dc-background" src="" alt="dc-background"> -->
                <!-- <div class="dc-background" alt="dc-background"> -->
            </div>
        </div>
    </div>

    <div class="container-bottom col align-items-center justify-content-center">
        <div class="container row justify-content-between">
            <button>SIGN-UP NOW!</button>
            <div class="container-bottom-right row align-items-center">
                <h3>FOLLOW US</h3>
                <ul class="d-flex">
                    {{-- <li v-for="(linkFooterBottom, index) in linksFooterBottom" :key="index"><a
                            :href="`${linkFooterBottom.url}`"><img :src="`${linkFooterBottom.img}`"
                            :alt="`${linkFooterBottom.name}`"></a></a></li> --}}
                        <li><a><img src="{{ Vite::asset('resources/assets/img/footer-facebook.png') }}"  alt="img-footer-down"></a></li>
                        <li><a><img src="{{ Vite::asset('resources/assets/img/footer-twitter.png') }}" alt="img-footer-down"></a></li>
                        <li><a><img src="{{ Vite::asset('resources/assets/img/footer-youtube.png') }}" alt="img-footer-down"></a></li>
                        <li><a><img src="{{ Vite::asset('resources/assets/img/footer-pinterest.png') }}" alt="img-footer-down"></a></li>
                        <li><a><img src="{{ Vite::asset('resources/assets/img/footer-periscope.png') }}" alt="img-footer-down"></a></li>
                </ul>
            </div>

        </div>

    </div>

</footer>
