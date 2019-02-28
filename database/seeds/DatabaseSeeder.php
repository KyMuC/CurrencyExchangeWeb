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

            DB::table('valid_nominal_value')->insert([
                [ 'currency_code' => 'AUD', 'valid_nominal_value' => 5], [ 'currency_code' => 'AUD', 'valid_nominal_value' => 10], [ 'currency_code' => 'AUD', 'valid_nominal_value' => 20], [ 'currency_code' => 'AUD', 'valid_nominal_value' => 50], [ 'currency_code' => 'AUD', 'valid_nominal_value' => 100], [ 'currency_code' => 'AZN', 'valid_nominal_value' => 1], [ 'currency_code' => 'AZN', 'valid_nominal_value' => 5], [ 'currency_code' => 'AZN', 'valid_nominal_value' => 10], [ 'currency_code' => 'AZN', 'valid_nominal_value' => 20], [ 'currency_code' => 'AZN', 'valid_nominal_value' => 50], [ 'currency_code' => 'AZN', 'valid_nominal_value' => 100], [ 'currency_code' => 'AZN', 'valid_nominal_value' => 200], [ 'currency_code' => 'AMD', 'valid_nominal_value' => 500], [ 'currency_code' => 'AMD', 'valid_nominal_value' => 1000], [ 'currency_code' => 'AMD', 'valid_nominal_value' => 5000], [ 'currency_code' => 'AMD', 'valid_nominal_value' => 10000], [ 'currency_code' => 'AMD', 'valid_nominal_value' => 20000], [ 'currency_code' => 'AMD', 'valid_nominal_value' => 50000], [ 'currency_code' => 'AMD', 'valid_nominal_value' => 100000], [ 'currency_code' => 'BYN', 'valid_nominal_value' => 5], [ 'currency_code' => 'BYN', 'valid_nominal_value' => 10], [ 'currency_code' => 'BYN', 'valid_nominal_value' => 20], [ 'currency_code' => 'BYN', 'valid_nominal_value' => 50], [ 'currency_code' => 'BYN', 'valid_nominal_value' => 100], [ 'currency_code' => 'BYN', 'valid_nominal_value' => 200], [ 'currency_code' => 'BYN', 'valid_nominal_value' => 500], [ 'currency_code' => 'BGN', 'valid_nominal_value' => 2], [ 'currency_code' => 'BGN', 'valid_nominal_value' => 5], [ 'currency_code' => 'BGN', 'valid_nominal_value' => 10], [ 'currency_code' => 'BGN', 'valid_nominal_value' => 20], [ 'currency_code' => 'BGN', 'valid_nominal_value' => 50], [ 'currency_code' => 'BGN', 'valid_nominal_value' => 100], [ 'currency_code' => 'BRL', 'valid_nominal_value' => 1], [ 'currency_code' => 'BRL', 'valid_nominal_value' => 2], [ 'currency_code' => 'BRL', 'valid_nominal_value' => 5], [ 'currency_code' => 'BRL', 'valid_nominal_value' => 10], [ 'currency_code' => 'BRL', 'valid_nominal_value' => 20], [ 'currency_code' => 'BRL', 'valid_nominal_value' => 50], [ 'currency_code' => 'BRL', 'valid_nominal_value' => 100], [ 'currency_code' => 'HUF', 'valid_nominal_value' => 500], [ 'currency_code' => 'HUF', 'valid_nominal_value' => 1000], [ 'currency_code' => 'HUF', 'valid_nominal_value' => 2000], [ 'currency_code' => 'HUF', 'valid_nominal_value' => 5000], [ 'currency_code' => 'HUF', 'valid_nominal_value' => 10000], [ 'currency_code' => 'HUF', 'valid_nominal_value' => 20000], [ 'currency_code' => 'KRW', 'valid_nominal_value' => 1000], [ 'currency_code' => 'KRW', 'valid_nominal_value' => 5000], [ 'currency_code' => 'KRW', 'valid_nominal_value' => 10000], [ 'currency_code' => 'KRW', 'valid_nominal_value' => 50000], [ 'currency_code' => 'HKD', 'valid_nominal_value' => 10], [ 'currency_code' => 'HKD', 'valid_nominal_value' => 20], [ 'currency_code' => 'HKD', 'valid_nominal_value' => 50], [ 'currency_code' => 'HKD', 'valid_nominal_value' => 100], [ 'currency_code' => 'HKD', 'valid_nominal_value' => 500], [ 'currency_code' => 'HKD', 'valid_nominal_value' => 1000], [ 'currency_code' => 'DKK', 'valid_nominal_value' => 50], [ 'currency_code' => 'DKK', 'valid_nominal_value' => 100], [ 'currency_code' => 'DKK', 'valid_nominal_value' => 200], [ 'currency_code' => 'DKK', 'valid_nominal_value' => 500], [ 'currency_code' => 'DKK', 'valid_nominal_value' => 1000],[ 'currency_code' => 'USD', 'valid_nominal_value' => 0.01],[ 'currency_code' => 'USD',0.05],[ 'currency_code' => 'USD', 'valid_nominal_value' => 0.1],[ 'currency_code' => 'USD',0.25],[ 'currency_code' => 'USD',0.5], [ 'currency_code' => 'USD', 'valid_nominal_value' => 1], [ 'currency_code' => 'USD', 'valid_nominal_value' => 2], [ 'currency_code' => 'USD', 'valid_nominal_value' => 5], [ 'currency_code' => 'USD', 'valid_nominal_value' => 10], [ 'currency_code' => 'USD', 'valid_nominal_value' => 20], [ 'currency_code' => 'USD', 'valid_nominal_value' => 50], [ 'currency_code' => 'USD', 'valid_nominal_value' => 100],[ 'currency_code' => 'EUR', 'valid_nominal_value' => 0.01],[ 'currency_code' => 'EUR', 'valid_nominal_value' => 0.02],[ 'currency_code' => 'EUR', 'valid_nominal_value' => 0.05],[ 'currency_code' => 'EUR', 'valid_nominal_value' => 0.1],[ 'currency_code' => 'EUR', 'valid_nominal_value' => 0.2],[ 'currency_code' => 'EUR', 'valid_nominal_value' => 0.5],[ 'currency_code' => 'EUR',1],[ 'currency_code' => 'EUR',2], [ 'currency_code' => 'EUR', 'valid_nominal_value' => 5], [ 'currency_code' => 'EUR', 'valid_nominal_value' => 10], [ 'currency_code' => 'EUR', 'valid_nominal_value' => 20], [ 'currency_code' => 'EUR', 'valid_nominal_value' => 50], [ 'currency_code' => 'EUR', 'valid_nominal_value' => 100], [ 'currency_code' => 'EUR', 'valid_nominal_value' => 200], [ 'currency_code' => 'EUR', 'valid_nominal_value' => 500], [ 'currency_code' => 'INR', 'valid_nominal_value' => 5], [ 'currency_code' => 'INR', 'valid_nominal_value' => 10], [ 'currency_code' => 'INR', 'valid_nominal_value' => 20], [ 'currency_code' => 'INR', 'valid_nominal_value' => 50], [ 'currency_code' => 'INR', 'valid_nominal_value' => 100], [ 'currency_code' => 'INR', 'valid_nominal_value' => 500], [ 'currency_code' => 'INR', 'valid_nominal_value' => 2000], [ 'currency_code' => 'KZT', 'valid_nominal_value' => 200], [ 'currency_code' => 'KZT', 'valid_nominal_value' => 500], [ 'currency_code' => 'KZT', 'valid_nominal_value' => 1000], [ 'currency_code' => 'KZT', 'valid_nominal_value' => 2000], [ 'currency_code' => 'KZT', 'valid_nominal_value' => 5000], [ 'currency_code' => 'KZT', 'valid_nominal_value' => 10000], [ 'currency_code' => 'KZT', 'valid_nominal_value' => 20000], [ 'currency_code' => 'CAD', 'valid_nominal_value' => 5], [ 'currency_code' => 'CAD', 'valid_nominal_value' => 10], [ 'currency_code' => 'CAD', 'valid_nominal_value' => 20], [ 'currency_code' => 'CAD', 'valid_nominal_value' => 50], [ 'currency_code' => 'CAD', 'valid_nominal_value' => 100], [ 'currency_code' => 'KGS', 'valid_nominal_value' => 1], [ 'currency_code' => 'KGS', 'valid_nominal_value' => 5], [ 'currency_code' => 'KGS', 'valid_nominal_value' => 10], [ 'currency_code' => 'KGS', 'valid_nominal_value' => 20], [ 'currency_code' => 'KGS', 'valid_nominal_value' => 50], [ 'currency_code' => 'KGS', 'valid_nominal_value' => 100], [ 'currency_code' => 'KGS', 'valid_nominal_value' => 200], [ 'currency_code' => 'KGS', 'valid_nominal_value' => 500], [ 'currency_code' => 'KGS', 'valid_nominal_value' => 1000], [ 'currency_code' => 'KGS', 'valid_nominal_value' => 5000], [ 'currency_code' => 'CNY', 'valid_nominal_value' => 1], [ 'currency_code' => 'CNY', 'valid_nominal_value' => 5], [ 'currency_code' => 'CNY', 'valid_nominal_value' => 10], [ 'currency_code' => 'CNY', 'valid_nominal_value' => 20], [ 'currency_code' => 'CNY', 'valid_nominal_value' => 50], [ 'currency_code' => 'CNY', 'valid_nominal_value' => 100], [ 'currency_code' => 'MDL', 'valid_nominal_value' => 1], [ 'currency_code' => 'MDL', 'valid_nominal_value' => 5], [ 'currency_code' => 'MDL', 'valid_nominal_value' => 10], [ 'currency_code' => 'MDL', 'valid_nominal_value' => 20], [ 'currency_code' => 'MDL', 'valid_nominal_value' => 50], [ 'currency_code' => 'MDL', 'valid_nominal_value' => 100], [ 'currency_code' => 'MDL', 'valid_nominal_value' => 200], [ 'currency_code' => 'MDL', 'valid_nominal_value' => 500], [ 'currency_code' => 'MDL', 'valid_nominal_value' => 1000], [ 'currency_code' => 'TMT', 'valid_nominal_value' => 1], [ 'currency_code' => 'TMT', 'valid_nominal_value' => 5], [ 'currency_code' => 'TMT', 'valid_nominal_value' => 10], [ 'currency_code' => 'TMT', 'valid_nominal_value' => 20], [ 'currency_code' => 'TMT', 'valid_nominal_value' => 50], [ 'currency_code' => 'TMT', 'valid_nominal_value' => 100], [ 'currency_code' => 'NOK', 'valid_nominal_value' => 50], [ 'currency_code' => 'NOK', 'valid_nominal_value' => 100], [ 'currency_code' => 'NOK', 'valid_nominal_value' => 200], [ 'currency_code' => 'NOK', 'valid_nominal_value' => 500], [ 'currency_code' => 'NOK', 'valid_nominal_value' => 1000], [ 'currency_code' => 'PLN', 'valid_nominal_value' => 10], [ 'currency_code' => 'PLN', 'valid_nominal_value' => 20], [ 'currency_code' => 'PLN', 'valid_nominal_value' => 50], [ 'currency_code' => 'PLN', 'valid_nominal_value' => 100], [ 'currency_code' => 'PLN', 'valid_nominal_value' => 200], [ 'currency_code' => 'PLN', 'valid_nominal_value' => 500], [ 'currency_code' => 'RON', 'valid_nominal_value' => 1], [ 'currency_code' => 'RON', 'valid_nominal_value' => 5], [ 'currency_code' => 'RON', 'valid_nominal_value' => 10], [ 'currency_code' => 'RON', 'valid_nominal_value' => 50], [ 'currency_code' => 'RON', 'valid_nominal_value' => 100], [ 'currency_code' => 'RON', 'valid_nominal_value' => 200], [ 'currency_code' => 'RON', 'valid_nominal_value' => 500], [ 'currency_code' => 'SGD', 'valid_nominal_value' => 2], [ 'currency_code' => 'SGD', 'valid_nominal_value' => 5], [ 'currency_code' => 'SGD', 'valid_nominal_value' => 10], [ 'currency_code' => 'SGD', 'valid_nominal_value' => 50], [ 'currency_code' => 'SGD', 'valid_nominal_value' => 100], [ 'currency_code' => 'SGD', 'valid_nominal_value' => 1000], [ 'currency_code' => 'SGD', 'valid_nominal_value' => 10000], [ 'currency_code' => 'TJS', 'valid_nominal_value' => 1], [ 'currency_code' => 'TJS', 'valid_nominal_value' => 3], [ 'currency_code' => 'TJS', 'valid_nominal_value' => 5], [ 'currency_code' => 'TJS', 'valid_nominal_value' => 10], [ 'currency_code' => 'TJS', 'valid_nominal_value' => 20], [ 'currency_code' => 'TJS', 'valid_nominal_value' => 50], [ 'currency_code' => 'TJS', 'valid_nominal_value' => 100], [ 'currency_code' => 'TJS', 'valid_nominal_value' => 200], [ 'currency_code' => 'TJS', 'valid_nominal_value' => 500], [ 'currency_code' => 'TRY', 'valid_nominal_value' => 5], [ 'currency_code' => 'TRY', 'valid_nominal_value' => 10], [ 'currency_code' => 'TRY', 'valid_nominal_value' => 20], [ 'currency_code' => 'TRY', 'valid_nominal_value' => 50], [ 'currency_code' => 'TRY', 'valid_nominal_value' => 100], [ 'currency_code' => 'TRY', 'valid_nominal_value' => 200], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 1], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 3], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 5], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 10], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 25], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 50], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 100], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 200], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 500], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 1000], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 5000], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 10000], [ 'currency_code' => 'UZS', 'valid_nominal_value' => 50000], [ 'currency_code' => 'UAH', 'valid_nominal_value' => 1], [ 'currency_code' => 'UAH', 'valid_nominal_value' => 2], [ 'currency_code' => 'UAH', 'valid_nominal_value' => 5], [ 'currency_code' => 'UAH', 'valid_nominal_value' => 10], [ 'currency_code' => 'UAH', 'valid_nominal_value' => 20], [ 'currency_code' => 'UAH', 'valid_nominal_value' => 50], [ 'currency_code' => 'UAH', 'valid_nominal_value' => 100], [ 'currency_code' => 'UAH', 'valid_nominal_value' => 200], [ 'currency_code' => 'UAH', 'valid_nominal_value' => 500], [ 'currency_code' => 'GBP', 'valid_nominal_value' => 5], [ 'currency_code' => 'GBP', 'valid_nominal_value' => 10], [ 'currency_code' => 'GBP', 'valid_nominal_value' => 20], [ 'currency_code' => 'GBP', 'valid_nominal_value' => 50], [ 'currency_code' => 'CZK', 'valid_nominal_value' => 100], [ 'currency_code' => 'CZK', 'valid_nominal_value' => 200], [ 'currency_code' => 'CZK', 'valid_nominal_value' => 500], [ 'currency_code' => 'CZK', 'valid_nominal_value' => 1000], [ 'currency_code' => 'CZK', 'valid_nominal_value' => 2000], [ 'currency_code' => 'CZK', 'valid_nominal_value' => 5000], [ 'currency_code' => 'SEK', 'valid_nominal_value' => 20], [ 'currency_code' => 'SEK', 'valid_nominal_value' => 50], [ 'currency_code' => 'SEK', 'valid_nominal_value' => 100], [ 'currency_code' => 'SEK', 'valid_nominal_value' => 200], [ 'currency_code' => 'SEK', 'valid_nominal_value' => 500], [ 'currency_code' => 'SEK', 'valid_nominal_value' => 1000], [ 'currency_code' => 'CHF', 'valid_nominal_value' => 10], [ 'currency_code' => 'CHF', 'valid_nominal_value' => 20], [ 'currency_code' => 'CHF', 'valid_nominal_value' => 50], [ 'currency_code' => 'CHF', 'valid_nominal_value' => 100], [ 'currency_code' => 'CHF', 'valid_nominal_value' => 200], [ 'currency_code' => 'CHF', 'valid_nominal_value' => 1000],[ 'currency_code' => 'RUB', 'valid_nominal_value' => 0.01],[ 'currency_code' => 'RUB', 'valid_nominal_value' => 0.05],[ 'currency_code' => 'RUB', 'valid_nominal_value' => 0.1],[ 'currency_code' => 'RUB', 'valid_nominal_value' => 0.5],[ 'currency_code' => 'RUB', 'valid_nominal_value' => 1],[ 'currency_code' => 'RUB', 'valid_nominal_value' => 2],[ 'currency_code' => 'RUB', 'valid_nominal_value' => 5], [ 'currency_code' => 'RUB', 'valid_nominal_value' => 10], [ 'currency_code' => 'RUB', 'valid_nominal_value' => 50], [ 'currency_code' => 'RUB', 'valid_nominal_value' => 100], [ 'currency_code' => 'RUB', 'valid_nominal_value' => 200], [ 'currency_code' => 'RUB', 'valid_nominal_value' => 500], [ 'currency_code' => 'RUB', 'valid_nominal_value' => 1000], [ 'currency_code' => 'RUB', 'valid_nominal_value' => 2000], [ 'currency_code' => 'RUB', 'valid_nominal_value' => 5000]
            ]);

            DB::table('exchange_office')->insert([
                ['adress' => 'Сибиряковская улица, дом ' . rand(1, 31)],
                ['adress' => 'Улица Кравченко, дом ' . rand(1, 31)],
                ['adress' => 'Медведковское шоссе, дом ' . rand(1, 31)],
                ['adress' => 'Полярная улица, дом ' . rand(1, 31)],
                ['adress' => 'Измайловское шоссе, дом ' . rand(1, 31)],
            ]);
            
            DB::table('base_currency')->insert([
                ['exchange_office_id' => 1, 'base_currency_code' => 'RUB'],
                ['exchange_office_id' => 2, 'base_currency_code' => 'RUB'],
                ['exchange_office_id' => 3, 'base_currency_code' => 'RUB'],
                ['exchange_office_id' => 4, 'base_currency_code' => 'RUB'],
                ['exchange_office_id' => 5, 'base_currency_code' => 'EUR'],
                ]);

            DB::table('exchange_rate_central_bank')->insert([
                ['source_currency_code' => 'RUB', 'target_currency_code' => 'USD', 'exchange_rate' => 0.02, 'date' => date("Y-m-d")],
                ['source_currency_code' => 'USD', 'target_currency_code' => 'RUB', 'exchange_rate' => 65, 'date' => date("Y-m-d")],
                ['source_currency_code' => 'RUB', 'target_currency_code' => 'EUR', 'exchange_rate' => 0.03, 'date' => date("Y-m-d")],
                ['source_currency_code' => 'EUR', 'target_currency_code' => 'RUB', 'exchange_rate' => 75, 'date' => date("Y-m-d")],
                ['source_currency_code' => 'EUR', 'target_currency_code' => 'USD', 'exchange_rate' => 1.25, 'date' => date("Y-m-d")],
                ['source_currency_code' => 'USD', 'target_currency_code' => 'EUR', 'exchange_rate' => 0.9433, 'date' => date("Y-m-d")]
            ]);
            
            for ($exchange_office_id = 1; $exchange_office_id <= 5; $exchange_office_id++) {
                DB::table('exchange_rate')->insert([
                    ['exchange_rate_central_bank_id' => 1,'source_currency_code' => 'RUB', 'target_currency_code' => 'USD', 'exchange_rate' => 0.015 + 0.001*rand(1,10), 'date' => date("Y-m-d"), 'office_id' => $exchange_office_id],
                    ['exchange_rate_central_bank_id' => 2,'source_currency_code' => 'USD', 'target_currency_code' => 'RUB', 'exchange_rate' => 66 + 0.15*rand(1,10), 'date' => date("Y-m-d"), 'office_id' => $exchange_office_id],
                    ['exchange_rate_central_bank_id' => 3,'source_currency_code' => 'RUB', 'target_currency_code' => 'EUR', 'exchange_rate' => 0.013 + 0.001*rand(1,10), 'date' => date("Y-m-d"), 'office_id' => $exchange_office_id],
                    ['exchange_rate_central_bank_id' => 4,'source_currency_code' => 'EUR', 'target_currency_code' => 'RUB', 'exchange_rate' => 75 + 0.15*rand(1,10), 'date' => date("Y-m-d"), 'office_id' => $exchange_office_id],
                    ['exchange_rate_central_bank_id' => 5,'source_currency_code' => 'EUR', 'target_currency_code' => 'USD', 'exchange_rate' => 1.27 + 0.001*rand(1,10), 'date' => date("Y-m-d"), 'office_id' => $exchange_office_id],
                    ['exchange_rate_central_bank_id' => 6,'source_currency_code' => 'USD', 'target_currency_code' => 'EUR', 'exchange_rate' => 1.27 + 0.001*rand(1,10), 'date' => date("Y-m-d"), 'office_id' => $exchange_office_id]
                ]);
            } 

            DB::table('cash_in_transit_company')->insert([
                ['company_name' => 'Cashinout'],
                ['company_name' => 'Золотая корона'],
                ['company_name' => 'Юнистрим']
            ]);
            
            for($company_id = 1; $company_id < 4; $company_id++)
            {
                for ($car_id = 1; $car_id < 4; $car_id++)
                {
                    DB::table('cash_in_transit_car')->insert([
                        'car_model' => 'Mercedes-Benz Vito',
                        'car_number' => 'К'.rand(100,999).'РО',
                        'company_id' => $company_id
                    ]);
                }
            }

            $names_poll_female = array(
                array('Светлана','Гончарова'),
                array('Юлия','Остапенко'),
                array('Станислава','Сергеева'),
                array('Марина','Королёва'),
                array('Екатерина','Куликова'),
                array('Ольга','Бондаренко'),
                array('Евгения','Филатова'));

            $names_poll_male = array(
                array('Александр','Пономарёв'),
                array('Олег','Дегтярёв'),
                array('Евгений','Головин'),
                array('Виктор','Фадеев'),
                array('Павел','Молчанов'),
                array('Владислав','Скворцов'),
                array('Владимир','Наумов'),
                array('Пётр','Науменко'));

            for ($exchange_office_id = 1; $exchange_office_id < 5; $exchange_office_id++) {
                DB::table('employee')->insert([
                    [
                        'passport_number' => '45'.rand(10,13).rand(100000,999999),
                        'first_name' => $names_poll_female[rand(0,6)][0],
                        'last_name' => $names_poll_female[rand(0,6)][1],
                        'date_of_birth' => rand(1985,1995).'-'.rand(1,12).'-'.rand(1,28),
                        'exchange_office_id' => $exchange_office_id
                    ],
                    [
                        'passport_number' => '45'.rand(10,13).rand(100000,999999),
                        'first_name' => $names_poll_male[rand(0,6)][0],
                        'last_name' => $names_poll_male[rand(0,6)][1],
                        'date_of_birth' => rand(1985,1995).'-'.rand(1,12).'-'.rand(1,28),
                        'exchange_office_id' => $exchange_office_id
                    ]
                ]);
            }

            DB::table('customer')->insert([
                ['passport_number' => '45'.rand(10,13).rand(100000,999999),
                'first_name' => $names_poll_female[rand(0,6)][0],
                'last_name' => $names_poll_female[rand(0,6)][1],
                'date_of_birth' => rand(1970,1999).'-'.rand(1,12).'-'.rand(1,28)],
                ['passport_number' => '450'.rand(6,9).rand(100000,999999),
                'first_name' => $names_poll_male[rand(0,6)][0],
                'last_name' => $names_poll_male[rand(0,6)][1],
                'date_of_birth' => rand(1970,1999).'-'.rand(1,12).'-'.rand(1,28)]
            ]);

            $currencies = array(
                array('AUD', 'Австралийский доллар'),
                array('AZN', 'Азербайджанский манат'),
                array('AMD', 'Армянских драмов'),
                array('BYN', 'Белорусский рубль'),
                array('BGN', 'Болгарский лев'),
                array('BRL', 'Бразильский реал'),
                array('HUF', 'Венгерских форинтов'),
                array('KRW', 'Вон Республики'),
                array('HKD', 'Гонконгских долларов'),
                array('DKK', 'Датская крона'),
                array('USD', 'Доллар США'),
                array('EUR', 'Евро'),
                array('INR', 'Индийских рупий'),
                array('KZT', 'Казахстанских тенге'),
                array('CAD', 'Канадский доллар'),
                array('KGS', 'Киргизских сомов'),
                array('CNY', 'Китайских юаней'),
                array('MDL', 'Молдавских леев'),
                array('TMT', 'Новый туркменский'),
                array('NOK', 'Норвежских крон'),
                array('PLN', 'Польский злотый'),
                array('RON', 'Румынский лей'),
                array('SGD', 'Сингапурский доллар'),
                array('TJS', 'Таджикских сомони'),
                array('TRY', 'Турецкая лира'),
                array('UZS', 'Узбекских сумов'),
                array('UAH', 'Украинских гривен'),
                array('GBP', 'Фунт стерлингов'),
                array('CZK', 'Чешских крон'),
                array('SEK', 'Шведских крон'),
                array('CHF', 'Швейцарский франк'),
                array('RUB','Рубль')
            );

            for ($exchange_office_id = 1; $exchange_office_id <= 5; $exchange_office_id++)
            {
                DB::table('operation')->insert([
                    'exchange_office' =>  $exchange_office_id,
                    'datetime' => date('Y-m-d H:i:s').'.000'
                ]);

                DB::table('operation_cash_in_transit')->insert([
                    'car_id'=>rand(1,4),
                    'operation_id'=> $exchange_office_id
                ]);

                foreach($currencies as $currency)
                {

                    $max_nominal_value_id = DB::table('valid_nominal_value')->select('id')->where('currency_code', $currency[0])->max('id');
                    $min_nominal_value_id = DB::table('valid_nominal_value')->select('id')->where('currency_code', $currency[0])->min('id');

                    for($nominal_value_num = $min_nominal_value_id; $nominal_value_num < $max_nominal_value_id ; $nominal_value_num++)
                    {
                        $number_of_banknotes=rand(1,9);
                        for($i = 0; $i < $number_of_banknotes; $i++)
                        {
                            DB::table('banknote')->insert([
                                'currency_code' => $currency[0],
                                'nominal_value' => DB::table('valid_nominal_value')->where('id', $nominal_value_num)->value('valid_nominal_value')
                            ]);
                            
                            $inserted_banknote_id = DB::table('banknote')->max('banknote_id');

                            DB::table('Banknotes_influx')->insert([
                                'operation_id' => $exchange_office_id, #one operation per office inserted so their ids are identical
                                'banknote_id'=> $inserted_banknote_id
                            ]);
                        }
                    }
                }
            }

            DB::table('operation')->insert([
                'exchange_office' => 1,
                'datetime' => date('Y-m-d H:i:s').'.000'
            ]);

            $last_inserted_operation_id = DB::table('operation')->max('operation_id');

            DB::table('operation_exchange')->insert([
                'operation_id' => $last_inserted_operation_id,
                'exchange_rate_id' => 1,
                'customer_passport_number' => DB::table('customer')->value('passport_number')
            ]);

            DB::table('banknote')->insert([
                'currency_code' => 'RUB',
                'nominal_value' => 1000
            ]);

            DB::table('banknotes_influx')->insert([
                'operation_id' => $last_inserted_operation_id,
                'banknote_id' => DB::table('banknote')->max('banknote_id')
            ]);

            DB::insert('insert into banknotes_outflux (operation_id,banknote_id) values (6,(select min(bank.banknote_id) from banknotes_influx influx inner join banknote bank on bank.banknote_id = influx.banknote_id inner join operation oper on oper.operation_id = influx.operation_id inner join exchange_office office on office.office_id = oper.exchange_office where (bank.nominal_value = 10 and bank.currency_code = "USD" and office.office_id = 1))), (6,(select min(bank.banknote_id) from banknotes_influx influx inner join banknote bank on bank.banknote_id = influx.banknote_id inner join operation oper on oper.operation_id = influx.operation_id inner join exchange_office office on office.office_id = oper.exchange_office where (bank.nominal_value = 5 and bank.currency_code = "USD" and office.office_id = 1))), (6,(select min(bank.banknote_id) from banknotes_influx influx inner join banknote bank on bank.banknote_id = influx.banknote_id inner join operation oper on oper.operation_id = influx.operation_id inner join exchange_office office on office.office_id = oper.exchange_office where (bank.nominal_value = 10 and bank.currency_code = "RUB" and office.office_id = 1)))');

            // DB::table('banknotes_outflux')->insert([
            //     ['operation_id' => $last_inserted_operation_id, 'banknote_id' => DB::table('exchange_office')->joinSub(DB::table('operation')->joinSub(DB::table('banknotes_influx')->join('banknote', 'banknote.banknote_id', '=', 'banknotes_influx.banknote_id'),'banknoteJoined', function($join) {
            //         $join->on('operation.operation_id', '=', 'banknotes_influx.operation_id');
            //     }),'exchangeOfficeJoined',function($join) {
            //         $join->on('exchange_office.office_id', '=', 'operation.exchange_office');
            //     })->where([['banknote.nominal_value','=',10],['banknote.currency_code','=','USD'],['exchange_office.office_id','=',1]])],
            //     ['operation_id' => $last_inserted_operation_id, 'banknote_id' => DB::table('exchange_office')->joinSub(DB::table('operation')->joinSub(DB::table('banknotes_influx')->join('banknote', 'banknote.banknote_id', '=', 'banknotes_influx.banknote_id'),'banknoteJoined', function($join) {
            //         $join->on('operation.operation_id', '=', 'banknotes_influx.operation_id');
            //     }),'exchangeOfficeJoined',function($join) {
            //         $join->on('exchange_office.office_id', '=', 'operation.exchange_office');
            //     })->where([['banknote.nominal_value','=',5],['banknote.currency_code','=','USD'],['exchange_office.office_id','=',1]])],
            //     ['operation_id' => $last_inserted_operation_id, 'banknote_id' => DB::table('exchange_office')->joinSub(DB::table('operation')->joinSub(DB::table('banknotes_influx')->join('banknote', 'banknote.banknote_id', '=', 'banknotes_influx.banknote_id'),'banknoteJoined', function($join) {
            //         $join->on('operation.operation_id', '=', 'banknotes_influx.operation_id');
            //     }),'exchangeOfficeJoined',function($join) {
            //         $join->on('exchange_office.office_id', '=', 'operation.exchange_office');
            //     })->where([['banknote.nominal_value','=',10],['banknote.currency_code','=','RUB'],['exchange_office.office_id','=',1]])]
            // ]);

            DB::table('operation')->insert([
                'exchange_office' => 2,
                'datetime' => date('Y-m-d H:i:s').'.000'
            ]);

            $last_inserted_operation_id = DB::table('operation')->max('operation_id');

            DB::table('operation_exchange')->insert([
                'operation_id' => $last_inserted_operation_id,
                'exchange_rate_id' => 12,
                'customer_passport_number' => DB::table('customer')->where('passport_number','<>', DB::table('customer')->value('passport_number'))->value('passport_number')
            ]);

            DB::table('banknote')->insert([
                'currency_code' => 'USD',
                'nominal_value' => 20
            ]);

            DB::table('banknotes_influx')->insert([
                'operation_id' => $last_inserted_operation_id,
                'banknote_id' => DB::table('banknote')->max('banknote_id')
            ]);

            DB::insert('insert into banknotes_outflux (operation_id,banknote_id) values (7,(select min(bank.banknote_id) from banknotes_influx influx inner join banknote bank on bank.banknote_id = influx.banknote_id inner join operation oper on oper.operation_id = influx.operation_id inner join exchange_office office on office.office_id = oper.exchange_office where (bank.nominal_value = 10 and bank.currency_code = "EUR" and office.office_id = 2))), (7,(select min(bank.banknote_id) from banknotes_influx influx inner join banknote bank on bank.banknote_id = influx.banknote_id inner join operation oper on oper.operation_id = influx.operation_id inner join exchange_office office on office.office_id = oper.exchange_office where (bank.nominal_value = 5 and bank.currency_code = "EUR" and office.office_id = 2))), (7,(select min(bank.banknote_id) from banknotes_influx influx inner join banknote bank on bank.banknote_id = influx.banknote_id inner join operation oper on oper.operation_id = influx.operation_id inner join exchange_office office on office.office_id = oper.exchange_office where (bank.nominal_value = 1 and bank.currency_code = "EUR" and office.office_id = 2)))');

            // DB::table('banknotes_outflux')->insert([
            //     ['operation_id' => $last_inserted_operation_id, 'banknote_id' => DB::table('exchange_office')->joinSub(DB::table('operation')->joinSub(DB::table('banknotes_influx')->join('banknote', 'banknote.banknote_id', '=', 'banknotes_influx.banknote_id'),'banknoteJoined', function($join) {
            //         $join->on('operation.operation_id', '=', 'banknotes_influx.operation_id');
            //     }),'exchangeOfficeJoined',function($join) {
            //         $join->on('exchange_office.office_id', '=', 'operation.exchange_office');
            //     })->where([['banknote.nominal_value','=',10],['banknote.currency_code','=','EUR'],['exchange_office.office_id','=',2]])],
            //     ['operation_id' => $last_inserted_operation_id, 'banknote_id' => DB::table('exchange_office')->joinSub(DB::table('operation')->joinSub(DB::table('banknotes_influx')->join('banknote', 'banknote.banknote_id', '=', 'banknotes_influx.banknote_id'),'banknoteJoined', function($join) {
            //         $join->on('operation.operation_id', '=', 'banknotes_influx.operation_id');
            //     }),'exchangeOfficeJoined',function($join) {
            //         $join->on('exchange_office.office_id', '=', 'operation.exchange_office');
            //     })->where([['banknote.nominal_value','=',5],['banknote.currency_code','=','EUR'],['exchange_office.office_id','=',2]])],
            //     ['operation_id' => $last_inserted_operation_id, 'banknote_id' => DB::table('exchange_office')->joinSub(DB::table('operation')->joinSub(DB::table('banknotes_influx')->join('banknote', 'banknote.banknote_id', '=', 'banknotes_influx.banknote_id'),'banknoteJoined', function($join) {
            //         $join->on('operation.operation_id', '=', 'banknotes_influx.operation_id');
            //     }),'exchangeOfficeJoined',function($join) {
            //         $join->on('exchange_office.office_id', '=', 'operation.exchange_office');
            //     })->where([['banknote.nominal_value','=',1],['banknote.currency_code','=','EUR'],['exchange_office.office_id','=',2]])]
            // ]);
    }
}
