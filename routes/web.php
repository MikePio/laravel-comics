<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $header_nav = config('header-nav');
  $comics_cards = config('comics');
  $menu_cta = config('container-cta.links_cta');
  // $footer_links = config('footer-top');
  // dump($footer_links);
  // // ottengo primo valore di name
  // $footer_links_top = config('footer-top');
  // $name_dcComics = $footer_links_top[0]['dcComics'][0]['name'];
  // dump($name_dcComics);
  $footer_links_top = config('footer-top');
  $footer_links_bottom = config('footer-bottom.links_footer_bottom');
  return view('home', compact('header_nav', 'comics_cards', 'menu_cta', 'footer_links_top', 'footer_links_bottom'));
})->name('comics');

Route::get('/detail_card_page/{slug}', function($slug) {
  $header_nav = config('header-nav');
  $menu_cta = config('container-cta.links_cta');
  $footer_links_top = config('footer-top');
  $footer_links_bottom = config('footer-bottom.links_footer_bottom');

  //* rotta per la PAGINA DI DETTAGLIO
  $comics_cards = config('comics');
  $card_array = array_filter($comics_cards, fn($item) => $item['slug'] == $slug );
  $detail_card = $card_array[array_key_first($card_array)];

  return view('detail_card_page', compact('header_nav', 'detail_card', 'menu_cta', 'footer_links_top', 'footer_links_bottom'));
})->name('detail_card_page');

Route::get('/characters', function () {
    $header_nav = config('header-nav');
    $footer_links_top = config('footer-top');
    $footer_links_bottom = config('footer-bottom.links_footer_bottom');

    return view('characters', compact('header_nav', 'footer_links_top', 'footer_links_bottom') );
})->name('characters');

Route::get('/movies', function () {
    $header_nav = config('header-nav');
    $footer_links_top = config('footer-top');
    $footer_links_bottom = config('footer-bottom.links_footer_bottom');

    return view('no_page', compact('header_nav', 'footer_links_top', 'footer_links_bottom') );
})->name('movies');

Route::get('/tv', function () {
    $header_nav = config('header-nav');
    $footer_links_top = config('footer-top');
    $footer_links_bottom = config('footer-bottom.links_footer_bottom');

    return view('no_page', compact('header_nav', 'footer_links_top', 'footer_links_bottom') );
})->name('tv');

Route::get('/games', function () {
    $header_nav = config('header-nav');
    $footer_links_top = config('footer-top');
    $footer_links_bottom = config('footer-bottom.links_footer_bottom');

    return view('no_page', compact('header_nav', 'footer_links_top', 'footer_links_bottom') );
})->name('games');

Route::get('/collectibles', function () {
    $header_nav = config('header-nav');
    $footer_links_top = config('footer-top');
    $footer_links_bottom = config('footer-bottom.links_footer_bottom');

    return view('no_page', compact('header_nav', 'footer_links_top', 'footer_links_bottom') );
})->name('collectibles');

Route::get('/videos', function () {
    $header_nav = config('header-nav');
    $footer_links_top = config('footer-top');
    $footer_links_bottom = config('footer-bottom.links_footer_bottom');

    return view('no_page', compact('header_nav', 'footer_links_top', 'footer_links_bottom') );
})->name('videos');

Route::get('/fans', function () {
    $header_nav = config('header-nav');
    $footer_links_top = config('footer-top');
    $footer_links_bottom = config('footer-bottom.links_footer_bottom');

    return view('no_page', compact('header_nav', 'footer_links_top', 'footer_links_bottom') );
})->name('fans');

Route::get('/news', function () {
    $header_nav = config('header-nav');
    $footer_links_top = config('footer-top');
    $footer_links_bottom = config('footer-bottom.links_footer_bottom');

    return view('no_page', compact('header_nav', 'footer_links_top', 'footer_links_bottom') );
})->name('news');

Route::get('/shop', function () {
    $header_nav = config('header-nav');
    $footer_links_top = config('footer-top');
    $footer_links_bottom = config('footer-bottom.links_footer_bottom');

    return view('no_page', compact('header_nav', 'footer_links_top', 'footer_links_bottom') );
})->name('shop');
