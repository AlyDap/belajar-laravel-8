<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Muhammad Ferdynan Ali Syahbana',
        'email' => 'ferdynan.jr@gmail.com',
        'image' => 'alydap.jpg',
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul Post pertamaa',
            'slug' => 'judul-post-pertama',
            'author' => 'Aly Dap',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, sint odio consectetur, nisi nam perspiciatis provident minus molestias voluptates repellat consequuntur inventore temporibus amet dolore explicabo blanditiis ullam veritatis quibusdam ut ab hic deleniti quod reiciendis modi! Corporis laborum nemo inventore incidunt assumenda, magni ipsa iusto vero praesentium soluta aliquid, sapiente magnam nobis culpa facilis commodi tempora ducimus rem quisquam! Adipisci enim nulla aliquam suscipit beatae ducimus, qui debitis quasi quia quas possimus. Laborum officiis illo enim, libero assumenda consectetur!',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Ferdynan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quos quod alias error beatae culpa et maiores quis sit magnam, eaque illum, facere iure debitis dolorum? Ea perspiciatis ratione ipsam commodi sunt earum placeat distinctio sed facilis est nesciunt saepe nam dolor nulla nostrum, in at. Eaque, commodi? Distinctio ut soluta magnam cumque et sit autem iste similique temporibus corporis odit veritatis perspiciatis corrupti, debitis vero eius vitae voluptatibus libero! Sint vero distinctio qui possimus voluptates a non consequuntur voluptatibus architecto aperiam nisi placeat, voluptas ducimus ex incidunt velit accusamus quidem voluptate tempora sequi. Libero corrupti voluptates sit reiciendis ab.',
        ],
    ];

    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            'title' => 'Judul Post pertamaa',
            'slug' => 'judul-post-pertama',
            'author' => 'Aly Dap',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, sint odio consectetur, nisi nam perspiciatis provident minus molestias voluptates repellat consequuntur inventore temporibus amet dolore explicabo blanditiis ullam veritatis quibusdam ut ab hic deleniti quod reiciendis modi! Corporis laborum nemo inventore incidunt assumenda, magni ipsa iusto vero praesentium soluta aliquid, sapiente magnam nobis culpa facilis commodi tempora ducimus rem quisquam! Adipisci enim nulla aliquam suscipit beatae ducimus, qui debitis quasi quia quas possimus. Laborum officiis illo enim, libero assumenda consectetur!',
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Ferdynan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quos quod alias error beatae culpa et maiores quis sit magnam, eaque illum, facere iure debitis dolorum? Ea perspiciatis ratione ipsam commodi sunt earum placeat distinctio sed facilis est nesciunt saepe nam dolor nulla nostrum, in at. Eaque, commodi? Distinctio ut soluta magnam cumque et sit autem iste similique temporibus corporis odit veritatis perspiciatis corrupti, debitis vero eius vitae voluptatibus libero! Sint vero distinctio qui possimus voluptates a non consequuntur voluptatibus architecto aperiam nisi placeat, voluptas ducimus ex incidunt velit accusamus quidem voluptate tempora sequi. Libero corrupti voluptates sit reiciendis ab.',
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $item) {
        if ($item['slug'] === $slug) {
            $new_post = $item;
        }
    }

    return view('post', [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
