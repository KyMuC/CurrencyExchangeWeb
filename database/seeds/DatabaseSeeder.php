<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currency')->insert(
            [
                [ 'currency_code' => 'AUD', 'currency_name' => 'Австралийский доллар'],
                [ 'currency_code' => 'AZN', 'currency_name' => 'Азербайджанский манат'],
                [ 'currency_code' => 'AMD', 'currency_name' => 'Армянских драмов'],
                [ 'currency_code' => 'BYN', 'currency_name' => 'Белорусский рубль'],
                [ 'currency_code' => 'BGN', 'currency_name' => 'Болгарский лев'],
                [ 'currency_code' => 'BRL', 'currency_name' => 'Бразильский реал'],
                [ 'currency_code' => 'HUF', 'currency_name' => 'Венгерских форинтов'],
                [ 'currency_code' => 'KRW', 'currency_name' => 'Вон Республики'],
                [ 'currency_code' => 'HKD', 'currency_name' => 'Гонконгских долларов'],
                [ 'currency_code' => 'DKK', 'currency_name' => 'Датская крона'],
                [ 'currency_code' => 'USD', 'currency_name' => 'Доллар США'],
                [ 'currency_code' => 'EUR', 'currency_name' => 'Евро'],
                [ 'currency_code' => 'INR', 'currency_name' => 'Индийских рупий'],
                [ 'currency_code' => 'KZT', 'currency_name' => 'Казахстанских тенге'],
                [ 'currency_code' => 'CAD', 'currency_name' => 'Канадский доллар'],
                [ 'currency_code' => 'KGS', 'currency_name' => 'Киргизских сомов'],
                [ 'currency_code' => 'CNY', 'currency_name' => 'Китайских юаней'],
                [ 'currency_code' => 'MDL', 'currency_name' => 'Молдавских леев'],
                [ 'currency_code' => 'TMT', 'currency_name' => 'Новый туркменский'],
                [ 'currency_code' => 'NOK', 'currency_name' => 'Норвежских крон'],
                [ 'currency_code' => 'PLN', 'currency_name' => 'Польский злотый'],
                [ 'currency_code' => 'RON', 'currency_name' => 'Румынский лей'],
                [ 'currency_code' => 'SGD', 'currency_name' => 'Сингапурский доллар'],
                [ 'currency_code' => 'TJS', 'currency_name' => 'Таджикских сомони'],
                [ 'currency_code' => 'TRY', 'currency_name' => 'Турецкая лира'],
                [ 'currency_code' => 'UZS', 'currency_name' => 'Узбекских сумов'],
                [ 'currency_code' => 'UAH', 'currency_name' => 'Украинских гривен'],
                [ 'currency_code' => 'GBP', 'currency_name' => 'Фунт стерлингов'],
                [ 'currency_code' => 'CZK', 'currency_name' => 'Чешских крон'],
                [ 'currency_code' => 'SEK', 'currency_name' => 'Шведских крон'],
                [ 'currency_code' => 'CHF', 'currency_name' => 'Швейцарский франк'],
                [ 'currency_code' => 'RUB', 'currency_name' => 'Рубль']
            ]);
    }
}
