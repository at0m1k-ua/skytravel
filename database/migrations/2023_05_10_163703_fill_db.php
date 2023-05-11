<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('cities')->insert([
            ['name' => 'Токіо'],
            ['name' => 'Осака'],
            ['name' => 'Хіросіма'],
            ['name' => 'Кіото']
        ]);
        DB::table('travels')->insert([
            "name" => "Сакура Японії - весни чарівність",
            "name_japanese" => "日本の桜 - 春の魅力",
            "description" =>
            "<p><b>Авторський тур в Японію на сакуру 2023 - </b>найкращі місця милування сакурою</p>
            <br>
            <p>Переваги подорожі:</p>
            <ul>
                <li>міні-група не більше 10 осіб;</li>
                <li>унікальний авторський маршрут;</li>
                <li>6 екскурсій у супроводі україномовних гідів;</li>
                <li>2 ночівлі в Кіото і 1 ніч в рьокані в одному з найстаріших онсенів в Японії;</li>
                <li>9 сніданків, 3 обіди, 1 вечеря в стилі кайсекі рьорі;</li>
                <li>увага кожному туристу, путівник Японією і тепла атмосфера гарантовані!</li>
            </ul>",
            "is_premiere" => "1",
            "card_image_url" => "/images/sakura.png",
            "page_image_url" => "/images/sakura-big.png",
            "start_date" => "2023-03-28",
            "end_date" => "2023-04-07",
            "price" => "111800"
        ]);
        DB::table('cities')->select('id')->get()->each(function ($city) {
           DB::table('travel_city')->insert([
               'travel_id' => DB::table('travels')->select('id')->first()->id,
               'city_id' => $city->id
           ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('cities')->truncate();
        DB::table('travels')->truncate();
        DB::table('travel_city')->truncate();
    }
};
