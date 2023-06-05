<header class="d-flex col align-items-center justify-content-center">
    <div class="container-header container d-flex justify-content-between align-items-center">
        <div class="nav-row row justify-content-between align-items-center ">

            <div class="row-logo row align-items-center">
                <img class="logo" src="{{ Vite::asset('resources/assets/img/dc-logo.png') }}" alt="logo">
            </div>

            <div class="row justify-content-end">
                {{-- <ul class="nav-list d-flex ">
                    <li v-for="(headerLink, index) in headerLinks" :key="index">{{ headerLink . name }}
                    </li>
                </ul> --}}
                <ul class="nav-list d-flex ">
                    <li>CHARACTERS</li>
                    <li>COMICS</li>
                    <li>MOVIES</li>
                    <li>TV</li>
                    <li>GAMES</li>
                    <li>COLLECTIBLES</li>
                    <li>VIDEOS</li>
                    <li>FANS</li>
                    <li>NEWS</li>
                    <li>SHOP</li>
                </ul>
            </div>

        </div>
    </div>
</header>
