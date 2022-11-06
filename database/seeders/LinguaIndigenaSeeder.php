<?php

namespace Database\Seeders;

use App\Models\Componentes\LinguaIndigena;
use Illuminate\Database\Seeder;

class LinguaIndigenaSeeder extends Seeder
{
    private array $linguas = [
        [
            'id' => 30,
            'nome' => 'Boróro',
        ],
        [
            'id' => 244,
            'nome' => 'Umutína',
        ],
        [
            'id' => 42,
            'nome' => 'Guató',
        ],
        [
            'id' => 12,
            'nome' => 'Apinayé',
        ],
        [
            'id' => 251,
            'nome' => 'Canela',
        ],
        [
            'id' => 252,
            'nome' => 'Kanéla Apaniekra/Canela Apaniekrã',
        ],
        [
            'id' => 205,
            'nome' => 'Kanéla Rankocamekra/ Canela Ramkokamekrã',
        ],
        [
            'id' => 253,
            'nome' => 'Gavião Krikatêjê/ Gavião Krinkatejé',
        ],
        [
            'id' => 254,
            'nome' => 'Gavião Parkatêjê/ Guató Parakatejé/ Gavião do Pará',
        ],
        [
            'id' => 240,
            'nome' => 'Gavião Pukobiyé/ Gavião Pukobié',
        ],
        [
            'id' => 255,
            'nome' => 'Krahô/ Crao, Kraô',
        ],
        [
            'id' => 256,
            'nome' => 'Krao Kanela',
        ],
        [
            'id' => 223,
            'nome' => 'Kreje/ Krenjé',
        ],
        [
            'id' => 224,
            'nome' => 'Krikatí/ Krinkatí',
        ],
        [
            'id' => 257,
            'nome' => 'Kokuiregatêjê/ Kokuiregatejje',
        ],
        [
            'id' => 258,
            'nome' => 'Timbira',
        ],
        [
            'id' => 235,
            'nome' => 'Kaingáng',
        ],
        [
            'id' => 221,
            'nome' => 'Mebengokré (Kayapó)',
        ],
        [
            'id' => 86,
            'nome' => 'Mentuktíre, Txukahamae (Kayapó)',
        ],
        [
            'id' => 220,
            'nome' => 'Kayapó',
        ],
        [
            'id' => 81,
            'nome' => 'Gorotire (Kayapó)',
        ],
        [
            'id' => 82,
            'nome' => 'Kararaô (Kayapó)',
        ],
        [
            'id' => 83,
            'nome' => 'Kokraimoro (Kayapó)',
        ],
        [
            'id' => 84,
            'nome' => 'Kubenkrngkegn (Kayapó)',
        ],
        [
            'id' => 85,
            'nome' => 'Menkrangnoti (Kayapó)',
        ],
        [
            'id' => 87,
            'nome' => 'Xikrin (Kayapó)',
        ],
        [
            'id' => 132,
            'nome' => 'Panará, Krenakarôre/ Kren-akarôre',
        ],
        [
            'id' => 150,
            'nome' => 'Suyá, Kisêdjê/ Kisedjê',
        ],
        [
            'id' => 241,
            'nome' => 'Tapayúna',
        ],
        [
            'id' => 259,
            'nome' => 'Xacriabá/ Xakriabá',
        ],
        [
            'id' => 5,
            'nome' => 'Xavánte/ Xavante',
        ],
        [
            'id' => 6,
            'nome' => 'Xerénte',
        ],
        [
            'id' => 188,
            'nome' => 'Xokléng',
        ],
        [
            'id' => 260,
            'nome' => 'Jê (não específico)',
        ],
        [
            'id' => 63,
            'nome' => 'Karajá',
        ],
        [
            'id' => 50,
            'nome' => 'Javaé',
        ],
        [
            'id' => 185,
            'nome' => 'Xambioá',
        ],
        [
            'id' => 92,
            'nome' => 'Krenák',
        ],
        [
            'id' => 107,
            'nome' => 'Maxakalí',
        ],
        [
            'id' => 261,
            'nome' => 'Pataxó',
        ],
        [
            'id' => 262,
            'nome' => 'Pataxó Hã Hã Hãe/ Pataxó Há-Há-Há',
        ],
        [
            'id' => 129,
            'nome' => 'Ofayé',
        ],
        [
            'id' => 142,
            'nome' => 'Canoeiros/ Rikbaktsá',
        ],
        [
            'id' => 192,
            'nome' => 'Fulni-ô/ Yathê',
        ],
        [
            'id' => 65,
            'nome' => 'Karitiána',
        ],
        [
            'id' => 23,
            'nome' => 'Awetí',
        ],
        [
            'id' => 51,
            'nome' => 'Jurúna/ Yudjá',
        ],
        [
            'id' => 187,
            'nome' => 'Xipáya',
        ],
        [
            'id' => 106,
            'nome' => 'Mawé',
        ],
        [
            'id' => 200,
            'nome' => 'Arara do Aripuana/ Arara do Aripuanã',
        ],
        [
            'id' => 19,
            'nome' => 'Aruá',
        ],
        [
            'id' => 31,
            'nome' => 'Cinta Larga/ Cinta-Larga',
        ],
        [
            'id' => 36,
            'nome' => 'Gavião (Ikõro, Digüt), Gavião de Rondônia/ Ikolen',
        ],
        [
            'id' => 197,
            'nome' => 'Zoró',
        ],
        [
            'id' => 263,
            'nome' => 'Salamãy',
        ],
        [
            'id' => 236,
            'nome' => 'Suruí de Rondônia',
        ],
        [
            'id' => 111,
            'nome' => 'Mondé, Tupí-Mondé',
        ],
        [
            'id' => 112,
            'nome' => 'Mundurukú',
        ],
        [
            'id' => 96,
            'nome' => 'Kuruáya',
        ],
        [
            'id' => 141,
            'nome' => 'Puruborá',
        ],
        [
            'id' => 66,
            'nome' => 'Arara de Rondônia/ Káro',
        ],
        [
            'id' => 264,
            'nome' => 'Ramaráma',
        ],
        [
            'id' => 265,
            'nome' => 'Urucú/ Urucu',
        ],
        [
            'id' => 198,
            'nome' => 'Akuntsú',
        ],
        [
            'id' => 99,
            'nome' => 'Makuráp',
        ],
        [
            'id' => 110,
            'nome' => 'Sakurabiat/ Kampé',
        ],
        [
            'id' => 171,
            'nome' => 'Tuparí',
        ],
        [
            'id' => 2,
            'nome' => 'Ajuru/ Wayoro, Ajurú',
        ],
        [
            'id' => 7,
            'nome' => 'Amanayé',
        ],
        [
            'id' => 11,
            'nome' => 'Apiaká',
        ],
        [
            'id' => 17,
            'nome' => 'Araweté',
        ],
        [
            'id' => 20,
            'nome' => 'Asuriní do Tocantins',
        ],
        [
            'id' => 237,
            'nome' => 'Parakanã',
        ],
        [
            'id' => 4,
            'nome' => 'Suruí do Pará/ Suruí do Tocantins/ Aikewara',
        ],
        [
            'id' => 21,
            'nome' => 'Asuriní do Xingu',
        ],
        [
            'id' => 22,
            'nome' => 'Ava-Canoeiro/ Avá-Canoeiro, Avá, Canoeiro',
        ],
        [
            'id' => 37,
            'nome' => 'Guajá',
        ],
        [
            'id' => 266,
            'nome' => 'Guaraní',
        ],
        [
            'id' => 38,
            'nome' => 'Guaraní Kaiowá/ Guarani Kayová',
        ],
        [
            'id' => 39,
            'nome' => 'Guaraní Mbyá',
        ],
        [
            'id' => 40,
            'nome' => 'Guaraní Nhandéva',
        ],
        [
            'id' => 52,
            'nome' => 'Ka\'apor/ Urubu, Ka\'apór',
        ],
        [
            'id' => 267,
            'nome' => 'Lingua De Sinais Ka\'apor/ Língua de Sinais Urubu-Kaapór',
        ],
        [
            'id' => 59,
            'nome' => 'Kamayurá',
        ],
        [
            'id' => 199,
            'nome' => 'Amondáwa',
        ],
        [
            'id' => 208,
            'nome' => 'Diahói/ Diahui',
        ],
        [
            'id' => 215,
            'nome' => 'Júma/ Juma',
        ],
        [
            'id' => 219,
            'nome' => 'Karipúna',
        ],
        [
            'id' => 268,
            'nome' => 'Kawahíb',
        ],
        [
            'id' => 238,
            'nome' => 'Parintintín',
        ],
        [
            'id' => 243,
            'nome' => 'Tenharím/ Tenharim',
        ],
        [
            'id' => 76,
            'nome' => 'Uru-Eu-Wau-Wau/ Uruewawau',
        ],
        [
            'id' => 80,
            'nome' => 'Kayabí',
        ],
        [
            'id' => 90,
            'nome' => 'Kokáma',
        ],
        [
            'id' => 204,
            'nome' => 'Kambéba',
        ],
        [
            'id' => 126,
            'nome' => 'Lingua Geral Amazônica, Nheengatu',
        ],
        [
            'id' => 151,
            'nome' => 'Tapirapé',
        ],
        [
            'id' => 211,
            'nome' => 'Guajajára',
        ],
        [
            'id' => 155,
            'nome' => 'Tembé',
        ],
        [
            'id' => 269,
            'nome' => 'Turiwára',
        ],
        [
            'id' => 183,
            'nome' => 'Wayampí/ Oyampi',
        ],
        [
            'id' => 186,
            'nome' => 'Xetá',
        ],
        [
            'id' => 196,
            'nome' => 'Zo\'é',
        ],
        [
            'id' => 270,
            'nome' => 'Tupí-Guaraní',
        ],
        [
            'id' => 250,
            'nome' => 'Tupí, Tupi Antigo',
        ],
        [
            'id' => 13,
            'nome' => 'Apurinã',
        ],
        [
            'id' => 60,
            'nome' => 'Ashanínka/ Axanínka',
        ],
        [
            'id' => 26,
            'nome' => 'Baníwa/ Tapiira Tapuya, Kawa Tapuya',
        ],
        [
            'id' => 226,
            'nome' => 'Kuripáko',
        ],
        [
            'id' => 29,
            'nome' => 'Baré',
        ],
        [
            'id' => 145,
            'nome' => 'Enawenê-Nawê',
        ],
        [
            'id' => 271,
            'nome' => 'Kaixána/ Kayuisiana',
        ],
        [
            'id' => 222,
            'nome' => 'Kinikináu, Kinikinawa',
        ],
        [
            'id' => 272,
            'nome' => 'Machinéri',
        ],
        [
            'id' => 273,
            'nome' => 'Mawayána',
        ],
        [
            'id' => 109,
            'nome' => 'Mehináku',
        ],
        [
            'id' => 131,
            'nome' => 'Palikúr',
        ],
        [
            'id' => 133,
            'nome' => 'Paresí',
        ],
        [
            'id' => 152,
            'nome' => 'Tariána',
        ],
        [
            'id' => 156,
            'nome' => 'Teréna',
        ],
        [
            'id' => 179,
            'nome' => 'Wapixána',
        ],
        [
            'id' => 180,
            'nome' => 'Warekéna',
        ],
        [
            'id' => 182,
            'nome' => 'Wauja/ Waurá',
        ],
        [
            'id' => 193,
            'nome' => 'Yawalapití',
        ],
        [
            'id' => 274,
            'nome' => 'Aruák',
        ],
        [
            'id' => 10,
            'nome' => 'Apalaí',
        ],
        [
            'id' => 201,
            'nome' => 'Arara do Pará, Arara do Xingu',
        ],
        [
            'id' => 24,
            'nome' => 'Bakairí',
        ],
        [
            'id' => 35,
            'nome' => 'Galibí do Oiapoque, Galibí (Ka’ríña)',
        ],
        [
            'id' => 43,
            'nome' => 'Hixkaryána',
        ],
        [
            'id' => 173,
            'nome' => 'Ikpeng/ Ikpéng',
        ],
        [
            'id' => 45,
            'nome' => 'Ingarikó',
        ],
        [
            'id' => 58,
            'nome' => 'Kalapálo',
        ],
        [
            'id' => 94,
            'nome' => 'Kuikúro',
        ],
        [
            'id' => 103,
            'nome' => 'Matipú',
        ],
        [
            'id' => 116,
            'nome' => 'Nahukwá',
        ],
        [
            'id' => 275,
            'nome' => 'Naravúte',
        ],
        [
            'id' => 276,
            'nome' => 'Kaxuyána/ Kahyána, Warikyána',
        ],
        [
            'id' => 277,
            'nome' => 'Xikuyána/ Sikiyána',
        ],
        [
            'id' => 100,
            'nome' => 'Makuxí',
        ],
        [
            'id' => 218,
            'nome' => 'Kapon Patamóna/ Kapon Ptamóna',
        ],
        [
            'id' => 153,
            'nome' => 'Taulipáng',
        ],
        [
            'id' => 167,
            'nome' => 'Tiriyó/ Tarona',
        ],
        [
            'id' => 177,
            'nome' => 'Wái Wái/ Waiwái',
        ],
        [
            'id' => 176,
            'nome' => 'Waimirí-Atroarí',
        ],
        [
            'id' => 184,
            'nome' => 'Wayána',
        ],
        [
            'id' => 108,
            'nome' => 'Yekuána, Mayongong, Makiritáre',
        ],
        [
            'id' => 278,
            'nome' => 'Karib',
        ],
        [
            'id' => 15,
            'nome' => 'Arara do Acre, Shawãdawa',
        ],
        [
            'id' => 68,
            'nome' => 'Katukína do Acre',
        ],
        [
            'id' => 77,
            'nome' => 'Kaxararí',
        ],
        [
            'id' => 78,
            'nome' => 'Kaxinawá',
        ],
        [
            'id' => 91,
            'nome' => 'Korúbo',
        ],
        [
            'id' => 279,
            'nome' => 'Kulína Páno',
        ],
        [
            'id' => 102,
            'nome' => 'Marúbo',
        ],
        [
            'id' => 104,
            'nome' => 'Matís',
        ],
        [
            'id' => 105,
            'nome' => 'Matsés',
        ],
        [
            'id' => 389,
            'nome' => 'Maya',
        ],
        [
            'id' => 128,
            'nome' => 'Nukiní',
        ],
        [
            'id' => 140,
            'nome' => 'Poyanáwa',
        ],
        [
            'id' => 246,
            'nome' => 'Shanenáwa/ Xanenáwa, Xawanawa',
        ],
        [
            'id' => 49,
            'nome' => 'Yamináwa',
        ],
        [
            'id' => 194,
            'nome' => 'Yawanawá',
        ],
        [
            'id' => 280,
            'nome' => 'Pano',
        ],
        [
            'id' => 14,
            'nome' => 'Arapáso',
        ],
        [
            'id' => 28,
            'nome' => 'Bará',
        ],
        [
            'id' => 203,
            'nome' => 'Barasána',
        ],
        [
            'id' => 33,
            'nome' => 'Desána',
        ],
        [
            'id' => 64,
            'nome' => 'Karapanã',
        ],
        [
            'id' => 178,
            'nome' => 'Wanána/ Guanána',
        ],
        [
            'id' => 93,
            'nome' => 'Kubéo, Kubewa',
        ],
        [
            'id' => 281,
            'nome' => 'Makúna, Yebá-masã',
        ],
        [
            'id' => 282,
            'nome' => 'Siriáno/ Suriana, Suriána',
        ],
        [
            'id' => 234,
            'nome' => 'Tukáno / Miriti-Tapuia',
        ],
        [
            'id' => 172,
            'nome' => 'Tuyúca / Tuyuca',
        ],
        [
            'id' => 216,
            'nome' => 'Yurutí, Juriti',
        ],
        [
            'id' => 138,
            'nome' => 'Piratapúya',
        ],
        [
            'id' => 283,
            'nome' => 'Arawá',
        ],
        [
            'id' => 25,
            'nome' => 'Banawá',
        ],
        [
            'id' => 32,
            'nome' => 'Dení',
        ],
        [
            'id' => 284,
            'nome' => 'Himarimã/ Hi-merimã, Mirimã, Himarimá',
        ],
        [
            'id' => 285,
            'nome' => 'Jamamadí-Kanamanti/ Jamamadí',
        ],
        [
            'id' => 48,
            'nome' => 'Jarawára',
        ],
        [
            'id' => 95,
            'nome' => 'Kulína Madijá/ Kulina, Kulína Madihá (Madija)',
        ],
        [
            'id' => 136,
            'nome' => 'Paumarí',
        ],
        [
            'id' => 148,
            'nome' => 'Zuruwahá, Suruahá (Zuruahá)',
        ],
        [
            'id' => 61,
            'nome' => 'Kanamarí',
        ],
        [
            'id' => 69,
            'nome' => 'Katukína',
        ],
        [
            'id' => 174,
            'nome' => 'Tsohom Djapa/ Tsohondjapá (Tsohom Djapa)',
        ],
        [
            'id' => 67,
            'nome' => 'Katawixí',
        ],
        [
            'id' => 34,
            'nome' => 'Dâw',
        ],
        [
            'id' => 286,
            'nome' => 'Hup, Húpda, Maku, Yuhupde, Yuhúp',
        ],
        [
            'id' => 115,
            'nome' => 'Nadëb',
        ],
        [
            'id' => 287,
            'nome' => 'Alaketesú',
        ],
        [
            'id' => 288,
            'nome' => 'Alantesú',
        ],
        [
            'id' => 289,
            'nome' => 'Hahaintesú',
        ],
        [
            'id' => 290,
            'nome' => 'Halotesú',
        ],
        [
            'id' => 291,
            'nome' => 'Kithaulú',
        ],
        [
            'id' => 231,
            'nome' => 'Mandúka/ Nambikwára do Campo',
        ],
        [
            'id' => 292,
            'nome' => 'Sararé',
        ],
        [
            'id' => 300,
            'nome' => 'Sawentesú',
        ],
        [
            'id' => 301,
            'nome' => 'Waikisú',
        ],
        [
            'id' => 302,
            'nome' => 'Wakalitesú',
        ],
        [
            'id' => 303,
            'nome' => 'Wasusú',
        ],
        [
            'id' => 228,
            'nome' => 'Lakondê',
        ],
        [
            'id' => 229,
            'nome' => 'Latundê',
        ],
        [
            'id' => 120,
            'nome' => 'Negarotê/ Negarote',
        ],
        [
            'id' => 230,
            'nome' => 'Mamaindê',
        ],
        [
            'id' => 242,
            'nome' => 'Tawandê',
        ],
        [
            'id' => 143,
            'nome' => 'Sabanê',
        ],
        [
            'id' => 304,
            'nome' => 'Nambikwára',
        ],
        [
            'id' => 225,
            'nome' => 'Kujubím',
        ],
        [
            'id' => 305,
            'nome' => 'Miguelénho/ Migueleno, Miguelenho',
        ],
        [
            'id' => 130,
            'nome' => 'Oro Win',
        ],
        [
            'id' => 168,
            'nome' => 'Torá',
        ],
        [
            'id' => 175,
            'nome' => 'Urupá',
        ],
        [
            'id' => 245,
            'nome' => 'Pakaá Nóva/Migueleno, Miguelenho',
        ],
        [
            'id' => 306,
            'nome' => 'Txapakúra',
        ],
        [
            'id' => 127,
            'nome' => 'Ninám',
        ],
        [
            'id' => 146,
            'nome' => 'Sanumá',
        ],
        [
            'id' => 190,
            'nome' => 'Yanomám/ Yanonmán',
        ],
        [
            'id' => 191,
            'nome' => 'Yanomámi',
        ],
        [
            'id' => 307,
            'nome' => 'Bóra',
        ],
        [
            'id' => 233,
            'nome' => 'Miránha',
        ],
        [
            'id' => 53,
            'nome' => 'Kadiwéu',
        ],
        [
            'id' => 308,
            'nome' => 'Guaikurú',
        ],
        [
            'id' => 113,
            'nome' => 'Múra',
        ],
        [
            'id' => 137,
            'nome' => 'Pirahã',
        ],
        [
            'id' => 206,
            'nome' => 'Chamakóko/ Samúko, Chamacoco',
        ],
        [
            'id' => 207,
            'nome' => 'Chiquitáno/ Chiquito',
        ],
        [
            'id' => 18,
            'nome' => 'Arikapú/ Jabutí',
        ],
        [
            'id' => 47,
            'nome' => 'Djeoromitxí/ Jabotí/ Jabutí',
        ],
        [
            'id' => 309,
            'nome' => 'Witóto',
        ],
        [
            'id' => 1,
            'nome' => 'Aikaná/ Aikanã',
        ],
        [
            'id' => 46,
            'nome' => 'Irántxe',
        ],
        [
            'id' => 114,
            'nome' => 'Mynky/ Mynký, Meky, Menky, Menki',
        ],
        [
            'id' => 227,
            'nome' => 'Kwazá',
        ],
        [
            'id' => 62,
            'nome' => 'Kanoé/ Kanoê',
        ],
        [
            'id' => 157,
            'nome' => 'Tikúna',
        ],
        [
            'id' => 169,
            'nome' => 'Trumái',
        ],
        [
            'id' => 135,
            'nome' => 'Galibí Marwórno/ Galibi Marworno',
        ],
        [
            'id' => 134,
            'nome' => 'Karipúna do Amapá',
        ],
        [
            'id' => 310,
            'nome' => 'Acona/ Akona',
        ],
        [
            'id' => 311,
            'nome' => 'Aimoré',
        ],
        [
            'id' => 312,
            'nome' => 'Anacé',
        ],
        [
            'id' => 313,
            'nome' => 'Apolima - Arara',
        ],
        [
            'id' => 314,
            'nome' => 'Arana',
        ],
        [
            'id' => 315,
            'nome' => 'Arapiun',
        ],
        [
            'id' => 316,
            'nome' => 'Arikén',
        ],
        [
            'id' => 317,
            'nome' => 'Arikose',
        ],
        [
            'id' => 318,
            'nome' => 'Atikum',
        ],
        [
            'id' => 319,
            'nome' => 'Awi',
        ],
        [
            'id' => 320,
            'nome' => 'Baenã',
        ],
        [
            'id' => 321,
            'nome' => 'Borari',
        ],
        [
            'id' => 322,
            'nome' => 'Botocudo',
        ],
        [
            'id' => 323,
            'nome' => 'Catokin (Katukína)',
        ],
        [
            'id' => 324,
            'nome' => 'Charrúa/ Charrua',
        ],
        [
            'id' => 325,
            'nome' => 'Coiupanka',
        ],
        [
            'id' => 326,
            'nome' => 'Guara',
        ],
        [
            'id' => 327,
            'nome' => 'Guarino',
        ],
        [
            'id' => 328,
            'nome' => 'Guaru',
        ],
        [
            'id' => 329,
            'nome' => 'Isse',
        ],
        [
            'id' => 330,
            'nome' => 'Jaricuna',
        ],
        [
            'id' => 331,
            'nome' => 'Jeripancó/ Jeripankó',
        ],
        [
            'id' => 332,
            'nome' => 'Kaete',
        ],
        [
            'id' => 333,
            'nome' => 'Kaimbé',
        ],
        [
            'id' => 334,
            'nome' => 'Kalabassa',
        ],
        [
            'id' => 335,
            'nome' => 'Kalankó',
        ],
        [
            'id' => 336,
            'nome' => 'Kamba/ Kámba',
        ],
        [
            'id' => 337,
            'nome' => 'Kambiwá',
        ],
        [
            'id' => 338,
            'nome' => 'Kambiwá Pipipã',
        ],
        [
            'id' => 339,
            'nome' => 'Kanindé',
        ],
        [
            'id' => 340,
            'nome' => 'Kantaruré',
        ],
        [
            'id' => 341,
            'nome' => 'Kapinawá',
        ],
        [
            'id' => 342,
            'nome' => 'Karapoto/ Karapotó',
        ],
        [
            'id' => 343,
            'nome' => 'Karijo',
        ],
        [
            'id' => 344,
            'nome' => 'Kariri/ Karirí',
        ],
        [
            'id' => 345,
            'nome' => 'Kariri - Xocó/ Karirí-Xocó',
        ],
        [
            'id' => 346,
            'nome' => 'Kaxixó',
        ],
        [
            'id' => 347,
            'nome' => 'Kayuisiana -(Kaixána)',
        ],
        [
            'id' => 348,
            'nome' => 'Kiriri',
        ],
        [
            'id' => 349,
            'nome' => 'Kueskue',
        ],
        [
            'id' => 350,
            'nome' => 'Manao/ Manáo',
        ],
        [
            'id' => 351,
            'nome' => 'Maragua',
        ],
        [
            'id' => 352,
            'nome' => 'Maytapu',
        ],
        [
            'id' => 353,
            'nome' => 'Mucurim',
        ],
        [
            'id' => 354,
            'nome' => 'Nawa/ Náwa',
        ],
        [
            'id' => 355,
            'nome' => 'Paiaku',
        ],
        [
            'id' => 356,
            'nome' => 'Pankará',
        ],
        [
            'id' => 357,
            'nome' => 'Pankararé',
        ],
        [
            'id' => 358,
            'nome' => 'Pankararú/ Pankarú',
        ],
        [
            'id' => 359,
            'nome' => 'Pankararú - Kalanko',
        ],
        [
            'id' => 360,
            'nome' => 'Pankararú - Karuazu',
        ],
        [
            'id' => 361,
            'nome' => 'Pankaru',
        ],
        [
            'id' => 362,
            'nome' => 'Patxôhã/ Patxoha',
        ],
        [
            'id' => 363,
            'nome' => 'Paumelenho',
        ],
        [
            'id' => 364,
            'nome' => 'Piri-Piri/ Pirí-Pirí',
        ],
        [
            'id' => 365,
            'nome' => 'Pitaguari/ Pitaguarí',
        ],
        [
            'id' => 366,
            'nome' => 'Potiguara/ Potiguára',
        ],
        [
            'id' => 367,
            'nome' => 'Puri/ Purí',
        ],
        [
            'id' => 368,
            'nome' => 'Sapará/ Sapara',
        ],
        [
            'id' => 369,
            'nome' => 'Tabajara',
        ],
        [
            'id' => 370,
            'nome' => 'Tapajós',
        ],
        [
            'id' => 371,
            'nome' => 'Tapeba',
        ],
        [
            'id' => 372,
            'nome' => 'Tapiuns/ Tapiun',
        ],
        [
            'id' => 373,
            'nome' => 'Tapuía/ Tapúya',
        ],
        [
            'id' => 374,
            'nome' => 'Tingui Botó/ Tinguí-Botó',
        ],
        [
            'id' => 375,
            'nome' => 'Tremembé',
        ],
        [
            'id' => 376,
            'nome' => 'Truká',
        ],
        [
            'id' => 377,
            'nome' => 'Tumbalalá',
        ],
        [
            'id' => 378,
            'nome' => 'Tupinambá',
        ],
        [
            'id' => 379,
            'nome' => 'Tupinambaraná',
        ],
        [
            'id' => 380,
            'nome' => 'Tupiniquim',
        ],
        [
            'id' => 381,
            'nome' => 'Tuxá',
        ],
        [
            'id' => 382,
            'nome' => 'Waira',
        ],
        [
            'id' => 383,
            'nome' => 'Waiána-Apalaí',
        ],
        [
            'id' => 384,
            'nome' => 'Wajuju/ Wajujú',
        ],
        [
            'id' => 385,
            'nome' => 'Wassú (Wasusú)',
        ],
        [
            'id' => 386,
            'nome' => 'Xocó',
        ],
        [
            'id' => 387,
            'nome' => 'Xucuru/ Xukurú',
        ],
        [
            'id' => 388,
            'nome' => 'Xucuru - Kariri/ Xukurú-Karirí',
        ],
        [
            'id' => 999,
            'nome' => 'Outras Linguas Indigenas',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LinguaIndigena::insertOrIgnore($this->linguas);
    }
}
