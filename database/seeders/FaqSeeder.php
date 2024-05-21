<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    private $data = [
        [
            'question' => 'Hoe kan je een document scannen en doorsturen naar je laptop in de HZ?',
            'answer' => 'Hierbij loop je naar 1 van de printers binnen de HZ. Hierbij meld je jezelf aan met je pasje of door je mail-adress en wachtwoord te gebruiken. Nadat je dit gedaan hebt leg je wat je wilt gaan scannen op de feeder of glazen plaat. Daarna druk je op scannen en op start. Nadat dit gedaan is wordt het document verstuurd naar je mail-adress. Vergeet nadat je dit gedaan hebt jezelf niet af te melden.',
            'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/service?unid=bd81be42f243450e95e510949a496145',
        ],
        [
            'question' => 'Hoe kan je een document printen vanaf je laptop binnen de HZ',
            'answer' => 'Je kan binnen de hz gebruik maken van de printers die te vinden zijn in de hokjes waar ook de koffie en thee apparaten staan. Voor deze printers te gebruiken heb je een actief HZ account nodig. Indien je wilt printen moet je geld op je account hebben staan. Dit kan je doen door op de site zelf geld te zetten of door het op je pasje te zetten wat in het HZ gebouw kan of op de website van HZ zelf. Indien er genoeg geld op je account staat ga je naar Mobility print en selecteer je het besturingssysteem dat van toepassing is. Daarna upload je het bestand en print je dit bestand af op een printer binnen de HZ.',
            'link' => 'https://hz-mobility.mynetpay.nl:9164/client-setup/known-host/windows.html',
        ],
        [
            'question' => 'Hoe kan ik iets kopen (bijvoorbeeld wanneer je je opgeefd voor de it introductie evenement) op de hz web shop?',
            'answer' => 'Hierbij ga je naar de HZ website en in je persoonlijk menu vindt je de webshop. Hier klik je dan op en dan wordt je doorgestuurd naar de site van de webshop. Hierbij vind je dan de kopjes HZ, HZ cult en HZ sport. Hierbij kan je onder deze kopjes de verschillende activiteiten en kledingen zien. Deze kun je dan kopen door in je winkelwagen te zetten en af te rekenen.',
            'link' => 'https://webshop.hz.nl/WebshopApp/default.aspx?menu=082076044027019251066025111065201099237062130097',
        ],
        [
            'question' => 'Hoe kan je een ruimte reserveren in het gebouw?',
            'answer' => 'Hierbij ga je naar de HZ website waarbij je in je persoonlijk menu de Selfservice Portal moet zoeken en het ook handig is dat je deze toevoegd aan je persoonlijk menu. Nadat je dit gevonden hebt klik je erop en wordt je doorverwezen naar de site. Hier zie je dan een aantal vakjes waarbij er 1 is met de text maak een reservering. Hier druk je dan op en dan druk je op reserveer een ruimte. Dan klik je op de pagina (rechtsboven) op een blauwe knop genaamd reserveer een ruimte. Daarna kun je aangeven welke ruimte je wilt reserveren en volg je alle aangegeven stappen op. Hierna heb je een ruimte gereserveerd en kan je er gebruik van maken.',
            'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/52a63378-addd-4b21-b808-571200fd8d0c',
        ],
        [
            'question' => 'Wat zijn de instructies als je met de auto wilt parkeren bij de hz parking?',
            'answer' => 'Gratis dichtbij parkeren Gratis parkeren is mogelijk op het parkeerterrein van de Poelendaelesingel 12 in Middelburg. Dit is op een paar minuten lopen afstand naar de HZ. Het is helaas niet mogelijk om direct bij het HZ-pand te parkeren. Er is wel een invalideplaats beschikbaar direct naast het HZ-pand aan Het Groene Woud 1-3. Parkeerterrein Poelendaelesingel Bij de slagbomen van het parkeerterrein Poelendaelesingel is een bel aanwezig. Na het passeren van de slagboom volg je de borden naar de HZ-parkeerplaatsen, gemarkeerd met een wit bordje met het HZ-logo. Met HZ-pas of aanbellen Studenten en medewerkers kunnen enkel op vertoon van een HZ-pas het terrein betreden, gasten kunnen aanbellen bij de slagboom. Looproute naar de HZ-locatie Vanaf de parkeerplaats aan de Poelendaelesingel kun je via de voetgangerstunnel de HZ bereiken.',
            'link' => 'https://hz.nl/locaties/middelburg',
        ],
        [
            'question' => 'Waar kan je kijken wat je rooster is?',
            'answer' => 'Dit kan je doen via de HZ Student app of via de website van hz in te loggen en in je startscherm op rooster te drukken.',
            'link' => 'https://portal.hz.nl/',
        ],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->data as $item) {
            Faq::create($item);
        }
    }
}
