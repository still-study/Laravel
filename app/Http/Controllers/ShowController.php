<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ShowController extends Controller
{
    private $news;

    public function __construct()
    {

        $this->news = [
            ['title' =>'Новость 1', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid asperiores aut debitis dicta dolorum eveniet iure, laboriosam molestias pariatur porro, quaerat ratione reiciendis repellat reprehenderit sed temporibus voluptatem! Atque delectus eius explicabo libero nemo nihil quae, qui repellendus ullam voluptas. Assumenda consequatur in libero mollitia nostrum soluta? Aliquam amet, cumque dolorem hic laborum libero odio pariatur! Ea, et, veniam! Aliquid aperiam aspernatur dignissimos distinctio dolores doloribus eius est explicabo facilis fuga fugiat labore maiores necessitatibus neque optio, rerum sapiente tempora tenetur unde voluptate. Culpa, ducimus error exercitationem, facere facilis fugit harum magnam odio officia similique sint tenetur vel veritatis.'],
            ['title' =>'Новость 2', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid asperiores aut debitis dicta dolorum eveniet iure, laboriosam molestias pariatur porro, quaerat ratione reiciendis repellat reprehenderit sed temporibus voluptatem! Atque delectus eius explicabo libero nemo nihil quae, qui repellendus ullam voluptas. Assumenda consequatur in libero mollitia nostrum soluta? Aliquam amet, cumque dolorem hic laborum libero odio pariatur! Ea, et, veniam! Aliquid aperiam aspernatur dignissimos distinctio dolores doloribus eius est explicabo facilis fuga fugiat labore maiores necessitatibus neque optio, rerum sapiente tempora tenetur unde voluptate. Culpa, ducimus error exercitationem, facere facilis fugit harum magnam odio officia similique sint tenetur vel veritatis.'],
            ['title' =>'Новость 3', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid asperiores aut debitis dicta dolorum eveniet iure, laboriosam molestias pariatur porro, quaerat ratione reiciendis repellat reprehenderit sed temporibus voluptatem! Atque delectus eius explicabo libero nemo nihil quae, qui repellendus ullam voluptas. Assumenda consequatur in libero mollitia nostrum soluta? Aliquam amet, cumque dolorem hic laborum libero odio pariatur! Ea, et, veniam! Aliquid aperiam aspernatur dignissimos distinctio dolores doloribus eius est explicabo facilis fuga fugiat labore maiores necessitatibus neque optio, rerum sapiente tempora tenetur unde voluptate. Culpa, ducimus error exercitationem, facere facilis fugit harum magnam odio officia similique sint tenetur vel veritatis.'],
            ['title' =>'Новость 4', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquid asperiores aut debitis dicta dolorum eveniet iure, laboriosam molestias pariatur porro, quaerat ratione reiciendis repellat reprehenderit sed temporibus voluptatem! Atque delectus eius explicabo libero nemo nihil quae, qui repellendus ullam voluptas. Assumenda consequatur in libero mollitia nostrum soluta? Aliquam amet, cumque dolorem hic laborum libero odio pariatur! Ea, et, veniam! Aliquid aperiam aspernatur dignissimos distinctio dolores doloribus eius est explicabo facilis fuga fugiat labore maiores necessitatibus neque optio, rerum sapiente tempora tenetur unde voluptate. Culpa, ducimus error exercitationem, facere facilis fugit harum magnam odio officia similique sint tenetur vel veritatis.']
        ];
    }


    public function show()
    {
        return view('news', ['news' => $this->news]);
    }
}
