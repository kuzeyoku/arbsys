<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediationOfficesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("mediation_offices")->insert([
            ["name" => "Adana Adliyesi"],
            ["name" => "Adıyaman Adliyesi"],
            ["name" => "Afyonkarahisar Adliyesi"],
            ["name" => "Ağrı Adliyesi"],
            ["name" => "Aksaray Adliyesi"],
            ["name" => "Amasya Adliyesi"],
            ["name" => "Ankara / Balgat Adliyesi"],
            ["name" => "Ankara / Dışkapı Adliyesi"],
            ["name" => "Ankara Batı Adliyesi"],
            ["name" => "Antalya Adliyesi"],
            ["name" => "Antalya / Manavgat Adliyesi"],
            ["name" => "Artvin Adliyesi"],
            ["name" => "Aydın Adliyesi"],
            ["name" => "Aydın / Nazilli Adliyesi"],
            ["name" => "Aydın / Söke Adliyesi"],
            ["name" => "Balıkesir Adliyesi"],
            ["name" => "Balıkesir / Bandırma Adliyesi"],
            ["name" => "Balıkesir / Burhaniye Adliyesi"],
            ["name" => "Batman Adliyesi"],
            ["name" => "Bolu Adliyesi"],
            ["name" => "Burdur Adliyesi"],
            ["name" => "Bursa Adliyesi"],
            ["name" => "Bursa / İnegol Adliyesi"],
            ["name" => "Çanakkale Adliyesi"],
            ["name" => "Çankırı Adliyesi"],
            ["name" => "Çorum Adliyesi"],
            ["name" => "Denizli Adliyesi"],
            ["name" => "Diyarbakır Adliyesi"],
            ["name" => "Edirne Adliyesi"],
            ["name" => "Elazığ Adliyesi"],
            ["name" => "Erzincan Adliyesi"],
            ["name" => "Erzurum Adliyesi"],
            ["name" => "Eskişehir Adliyesi"],
            ["name" => "Gaziantep Adliyesi"],
            ["name" => "Giresun Adliyesi"],
            ["name" => "Hatay Adliyesi"],
            ["name" => "Hatay / İskenderun Adliyesi"],
            ["name" => "Isparta Adliyesi"],
            ["name" => "İstanbul Adliyesi"],
            ["name" => "İstanbul / Anadolu Adliyesi"],
            ["name" => "İstanbul / Bakırköy Adliyesi"],
            ["name" => "İstanbul / Beykoz Adliyesi"],
            ["name" => "İstanbul / Büyükçekmece Adliyesi"],
            ["name" => "İstanbul / Gaziosmanpaşa Adliyesi"],
            ["name" => "İstanbul / Küçükçekmece Adliyesi"],
            ["name" => "İstanbul / Silivri Adliyesi"],
            ["name" => "İzmir Adliyesi"],
            ["name" => "İzmir / Aliağa Adliyesi"],
            ["name" => "İzmir / Karşıyaka Adliyesi"],
            ["name" => "İzmir / Ödemiş Adliyesi"],
            ["name" => "Kahramanmaraş Adliyesi"],
            ["name" => "Kahramanmaraş / Afşin Adliyesi"],
            ["name" => "Kahramanmaraş / Elbistan Adliyesi"],
            ["name" => "Karaman Adliyesi"],
            ["name" => "Kastamonu Adliyesi"],
            ["name" => "Kayseri Adliyesi"],
            ["name" => "Kırıkkale Adliyesi"],
            ["name" => "Kırklareli Adliyesi"],
            ["name" => "Kırklareli / Lüleburgaz Adliyesi"],
            ["name" => "Kırşehir Adliyesi"],
            ["name" => "Kocaeli Adliyesi"],
            ["name" => "Kocaeli / Gebze Adliyesi"],
            ["name" => "Konya Adliyesi"],
            ["name" => "Konya / Ereğli Adliyesi"],
            ["name" => "Kütahya Adliyesi"],
            ["name" => "Kütahya / Tavşanlı Adliyesi"],
            ["name" => "Malatya Adliyesi"],
            ["name" => "Manisa Adliyesi"],
            ["name" => "Manisa / Akhisar Adliyesi"],
            ["name" => "Manisa / Salihli Adliyesi"],
            ["name" => "Mersin Adliyesi"],
            ["name" => "Mersin / Tarsus Adliyesi"],
            ["name" => "Muğla Adliyesi"],
            ["name" => "Muğla / Bodrum Adliyesi"],
            ["name" => "Muğla / Fethiye Adliyesi"],
            ["name" => "Muğla / Marmaris Adliyesi"],
            ["name" => "Muğla / Milas Adliyesi"],
            ["name" => "Nevşehir Adliyesi"],
            ["name" => "Niğde Adliyesi"],
            ["name" => "Ordu Adliyesi"],
            ["name" => "Ordu / Ünye Adliyesi"],
            ["name" => "Osmaniye Adliyesi"],
            ["name" => "Rize Adliyesi"],
            ["name" => "Sakarya Adliyesi"],
            ["name" => "Samsun Adliyesi"],
            ["name" => "Siirt Adliyesi"],
            ["name" => "Sinop Adliyesi"],
            ["name" => "Sivas Adliyesi"],
            ["name" => "Şanlıurfa Adliyesi"],
            ["name" => "Tekirdağ Adliyesi"],
            ["name" => "Tekirdağ / Çerkezköy Adliyesi"],
            ["name" => "Tekirdağ / Çorlu Adliyesi"],
            ["name" => "Tokat Adliyesi"],
            ["name" => "Trabzon Adliyesi"],
            ["name" => "Uşak Adliyesi"],
            ["name" => "Van Adliyesi"],
            ["name" => "Yalova Adliyesi"],
            ["name" => "Yozgat Adliyesi"],
            ["name" => "Zonguldak Adliyesi"],
            ["name" => "Zonguldak / Karadeniz Ereğli Adliyesi"],
        ]);
    }
}