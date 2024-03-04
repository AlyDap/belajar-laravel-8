<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            'title' => 'Judul Post ALY DAP',
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

    public static  function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
