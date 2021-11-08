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
    $data = config('comics');
    $tmp = [
        "comics" => $data,
        "headerLink" => [
            "characters" => [
                "name" => 'CHARACTERS',
                "link" => '#',
            ],
            "comics" => [
                "name" => 'COMICS',
                "link" => '#',
            ],
            "movies" => [
                "name" => 'MOVIES',
                "link" => '#',
            ],
            "tv" => [
                "name" => 'TV',
                "link" => '#',
            ],
            "games" => [
                "name" => 'GAMES',
                "link" => '#',
            ],
            "collectibles" => [
                "name" => 'COLLECTIBLES',
                "link" => '#',
            ],
            "videos" => [
                "name" => 'VIDEOS',
                "link" => '#',
            ],
            "fans" => [
                "name" => 'FANS',
                "link" => '#',
            ],
            "news" => [
                "name" => 'NEWS',
                "link" => '#',
            ],
            "shop" => [
                "name" => 'SHOP',
                "link" => '#',
            ]
        ],
        "elements" => [
            "digitalComics" => [
                "name" => 'DIGITAL COMICS',
                "src" => 'buy-comics-digital-comics.png',
                "link" => '#'
            ],
            "dcMerchandise" => [
                "name" => 'DC MERCHANDISE',
                "src" => 'buy-comics-merchandise.png',
                "link" => '#'
            ],
            "subscription" => [
                "name" => 'SUBSCRITION',
                "src" => 'buy-comics-subscriptions.png',
                "link" => '#'
            ],
            "comicShopLocator" => [
                "name" => 'DIGITAL COMICS',
                "src" => 'buy-comics-shop-locator.png',
                "link" => '#'
            ],
            "dcPowerVisa" => [
                "name" => 'DC POWER VISE',
                "src" => 'buy-dc-power-visa.svg',
                "link" => '#'
            ],
        ],
        "footerLink" => [
            "dcComics" => [
                [
                    "name" => 'Characters',
                    "href" => '#' 
                ],
                [
                    "name" => 'Comics',
                    "href" => '#' 
                ],
                [
                    "name" => 'Movies',
                    "href" => '#' 
                ],
                [
                    "name" => 'TV',
                    "href" => '#' 
                ],
                [
                    "name" => 'Games',
                    "href" => '#' 
                ],
                [
                    "name" => 'Videos',
                    "href" => '#' 
                ],
                [
                    "name" => 'News',
                    "href" => '#' 
                ]
            ],
            "shop" => [
                [
                    "name" => 'Shop DC',
                    "href" => '#' 
                ],
                [
                    "name" => 'Shop DC Collectibles',
                    "href" => '#' 
                ]
            ],
            "dc" => [
                [
                    "name" => 'Term Of Use',
                    "href" => '#' 
                ],
                [
                    "name" => 'Privacy policy (New)',
                    "href" => '#' 
                ],
                [
                    "name" => 'Ad Choices',
                    "href" => '#' 
                ],
                [
                    "name" => 'Advertising',
                    "href" => '#' 
                ],
                [
                    "name" => 'Jobs',
                    "href" => '#' 
                ],
                [
                    "name" => 'Subscriptions',
                    "href" => '#' 
                ],
                [
                    "name" => 'Talent Workshops',
                    "href" => '#' 
                ],
                [
                    "name" => 'CPSC Certificates',
                    "href" => '#' 
                ],
                [
                    "name" => 'Ratings',
                    "href" => '#' 
                ],
                [
                    "name" => 'Shop Help',
                    "href" => '#' 
                ],
                [
                    "name" => 'Contact Us',
                    "href" => '#' 
                ],
            ],
            "sites" => [
                [
                    "name" => 'DC',
                    "href" => '#' 
                ],
                [
                    "name" => 'MAD Magazine',
                    "href" => '#' 
                ],
                [
                    "name" => 'DC Kids',
                    "href" => '#' 
                ],
                [
                    "name" => 'DC Universe',
                    "href" => '#' 
                ],
                [
                    "name" => 'DC Power Visa',
                    "href" => '#' 
                ],
            ],
            "social" => [
                [
                    "url" => 'footer-facebook.png',
                    "name" => 'Facebook icon',
                    "href" => '#'
                ],
                [
                    "url" => 'footer-twitter.png',
                    "name" => 'Twitter icon',
                    "href" => '#'
                ],
                [
                    "url" => 'footer-youtube.png',
                    "name" => 'Youtube icon',
                    "href" => '#'
                ],
                [
                    "url" => 'footer-pinterest.png',
                    "name" => 'Pinterest icon',
                    "href" => '#'
                ],
                [
                    "url" => 'footer-periscope.png',
                    "name" => 'Periscope icon',
                    "href" => '#'
                ],
            ]
        ]
    ];
    return view('index', $tmp);
});
