<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Carpediemtourtransfer", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'CARPEDIEM VIP TRANSFER, kurulduğu günden bu yana, ayrıcalıklı hizmetlerinden yararlanmak isteyen tüm müşterilerine yolculuğu “keyifli ve konforlu” hale getirmek için 7/24 çalışan, zaman içinde araç kadrosunu kademe kademe geliştirerek, ülke çapında bir ulaşım ağı oluşturmayı başarmış bir kuruluştur. Şirketimiz, konusunda uzman kadrosuyla İstanbul Havalimanı ve Sabiha Gökçen Havalimanı transfer hizmetini 7/24 sunmaktadır. Bunun yanında, kapıdan kapıya vip transfer hizmeti sektöründe, alanında eğitim görmüş personeli ve bakımlı araçlarıyla ön plana çıkmayı başarmış olan kuruluşumuzun gayesi, sunduğu hizmetlerden memnun kalan müşterileri ile geniş bir aile olmayı başarabilmektir. Liman Personel Taşımacılığı, İstanbul Turları, Bursa Turları, Sapanca Turları, Bolu Kartalkaya Turları, Düğün Nişan ve Özel günleriniz için her zaman hizmet vermektedir. Bodrum, İzmir, Çeşme, Ankara, Antalya, Kayseri, Kaş, Didim, Marmaris ve Türkiyenin başlıca gelen tatil beldelerine transfer hizmeti vermekteyiz.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['Kapadokya', 'İstanbul', 'izmir', 'Antalya', 'bursa', 'Karadeniz', 'Mercedes vito', 'mercedes', 'vito', 'Şöförlü araç', 'Şoförlü araç', 'Şöförlü', 'Şoförlü', 'araç', 'Tur', 'Havaalanı', 'Vip', 'Taşımacılık', 'Transfer'],
            'canonical'    => 'current', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Carpediemtourtransfer', // set false to total remove
            'description' => 'CARPEDIEM VIP TRANSFER, kurulduğu günden bu yana, ayrıcalıklı hizmetlerinden yararlanmak isteyen tüm müşterilerine yolculuğu “keyifli ve konforlu” hale getirmek için 7/24 çalışan, zaman içinde araç kadrosunu kademe kademe geliştirerek, ülke çapında bir ulaşım ağı oluşturmayı başarmış bir kuruluştur. Şirketimiz, konusunda uzman kadrosuyla İstanbul Havalimanı ve Sabiha Gökçen Havalimanı transfer hizmetini 7/24 sunmaktadır. Bunun yanında, kapıdan kapıya vip transfer hizmeti sektöründe, alanında eğitim görmüş personeli ve bakımlı araçlarıyla ön plana çıkmayı başarmış olan kuruluşumuzun gayesi, sunduğu hizmetlerden memnun kalan müşterileri ile geniş bir aile olmayı başarabilmektir. Liman Personel Taşımacılığı, İstanbul Turları, Bursa Turları, Sapanca Turları, Bolu Kartalkaya Turları, Düğün Nişan ve Özel günleriniz için her zaman hizmet vermektedir. Bodrum, İzmir, Çeşme, Ankara, Antalya, Kayseri, Kaş, Didim, Marmaris ve Türkiyenin başlıca gelen tatil beldelerine transfer hizmeti vermekteyiz.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Carpediemtourtransfer', // set false to total remove
            'description' => 'CARPEDIEM VIP TRANSFER, kurulduğu günden bu yana, ayrıcalıklı hizmetlerinden yararlanmak isteyen tüm müşterilerine yolculuğu “keyifli ve konforlu” hale getirmek için 7/24 çalışan, zaman içinde araç kadrosunu kademe kademe geliştirerek, ülke çapında bir ulaşım ağı oluşturmayı başarmış bir kuruluştur. Şirketimiz, konusunda uzman kadrosuyla İstanbul Havalimanı ve Sabiha Gökçen Havalimanı transfer hizmetini 7/24 sunmaktadır. Bunun yanında, kapıdan kapıya vip transfer hizmeti sektöründe, alanında eğitim görmüş personeli ve bakımlı araçlarıyla ön plana çıkmayı başarmış olan kuruluşumuzun gayesi, sunduğu hizmetlerden memnun kalan müşterileri ile geniş bir aile olmayı başarabilmektir. Liman Personel Taşımacılığı, İstanbul Turları, Bursa Turları, Sapanca Turları, Bolu Kartalkaya Turları, Düğün Nişan ve Özel günleriniz için her zaman hizmet vermektedir. Bodrum, İzmir, Çeşme, Ankara, Antalya, Kayseri, Kaş, Didim, Marmaris ve Türkiyenin başlıca gelen tatil beldelerine transfer hizmeti vermekteyiz.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
