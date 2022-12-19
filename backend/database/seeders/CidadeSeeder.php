<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeSeeder extends Seeder
{
    private $options = array(
        0 =>
        array(
            'id' => '1',
            'estado_id' => '21',
            'nome' => 'Alta Floresta D\'oeste',
        ),
        1 =>
        array(
            'id' => '2',
            'estado_id' => '21',
            'nome' => 'Ariquemes',
        ),
        2 =>
        array(
            'id' => '3',
            'estado_id' => '21',
            'nome' => 'Cabixi',
        ),
        3 =>
        array(
            'id' => '4',
            'estado_id' => '21',
            'nome' => 'Cacoal',
        ),
        4 =>
        array(
            'id' => '5',
            'estado_id' => '21',
            'nome' => 'Cerejeiras',
        ),
        5 =>
        array(
            'id' => '6',
            'estado_id' => '21',
            'nome' => 'Colorado do Oeste',
        ),
        6 =>
        array(
            'id' => '7',
            'estado_id' => '21',
            'nome' => 'Corumbiara',
        ),
        7 =>
        array(
            'id' => '8',
            'estado_id' => '21',
            'nome' => 'Costa Marques',
        ),
        8 =>
        array(
            'id' => '9',
            'estado_id' => '21',
            'nome' => 'Espigão D\'oeste',
        ),
        9 =>
        array(
            'id' => '10',
            'estado_id' => '21',
            'nome' => 'Guajará-Mirim',
        ),
        10 =>
        array(
            'id' => '11',
            'estado_id' => '21',
            'nome' => 'Jaru',
        ),
        11 =>
        array(
            'id' => '12',
            'estado_id' => '21',
            'nome' => 'Ji-Paraná',
        ),
        12 =>
        array(
            'id' => '13',
            'estado_id' => '21',
            'nome' => 'Machadinho D\'oeste',
        ),
        13 =>
        array(
            'id' => '14',
            'estado_id' => '21',
            'nome' => 'Nova Brasilândia D\'oeste',
        ),
        14 =>
        array(
            'id' => '15',
            'estado_id' => '21',
            'nome' => 'Ouro Preto do Oeste',
        ),
        15 =>
        array(
            'id' => '16',
            'estado_id' => '21',
            'nome' => 'Pimenta Bueno',
        ),
        16 =>
        array(
            'id' => '17',
            'estado_id' => '21',
            'nome' => 'Porto Velho',
        ),
        17 =>
        array(
            'id' => '18',
            'estado_id' => '21',
            'nome' => 'Presidente Médici',
        ),
        18 =>
        array(
            'id' => '19',
            'estado_id' => '21',
            'nome' => 'Rio Crespo',
        ),
        19 =>
        array(
            'id' => '20',
            'estado_id' => '21',
            'nome' => 'Rolim de Moura',
        ),
        20 =>
        array(
            'id' => '21',
            'estado_id' => '21',
            'nome' => 'Santa Luzia D\'oeste',
        ),
        21 =>
        array(
            'id' => '22',
            'estado_id' => '21',
            'nome' => 'Vilhena',
        ),
        22 =>
        array(
            'id' => '23',
            'estado_id' => '21',
            'nome' => 'São Miguel do Guaporé',
        ),
        23 =>
        array(
            'id' => '24',
            'estado_id' => '21',
            'nome' => 'Nova Mamoré',
        ),
        24 =>
        array(
            'id' => '25',
            'estado_id' => '21',
            'nome' => 'Alvorada D\'oeste',
        ),
        25 =>
        array(
            'id' => '26',
            'estado_id' => '21',
            'nome' => 'Alto Alegre dos Parecis',
        ),
        26 =>
        array(
            'id' => '27',
            'estado_id' => '21',
            'nome' => 'Alto Paraíso',
        ),
        27 =>
        array(
            'id' => '28',
            'estado_id' => '21',
            'nome' => 'Buritis',
        ),
        28 =>
        array(
            'id' => '29',
            'estado_id' => '21',
            'nome' => 'Novo Horizonte do Oeste',
        ),
        29 =>
        array(
            'id' => '30',
            'estado_id' => '21',
            'nome' => 'Cacaulândia',
        ),
        30 =>
        array(
            'id' => '31',
            'estado_id' => '21',
            'nome' => 'Campo Novo de Rondônia',
        ),
        31 =>
        array(
            'id' => '32',
            'estado_id' => '21',
            'nome' => 'Candeias do Jamari',
        ),
        32 =>
        array(
            'id' => '33',
            'estado_id' => '21',
            'nome' => 'Castanheiras',
        ),
        33 =>
        array(
            'id' => '34',
            'estado_id' => '21',
            'nome' => 'Chupinguaia',
        ),
        34 =>
        array(
            'id' => '35',
            'estado_id' => '21',
            'nome' => 'Cujubim',
        ),
        35 =>
        array(
            'id' => '36',
            'estado_id' => '21',
            'nome' => 'Governador Jorge Teixeira',
        ),
        36 =>
        array(
            'id' => '37',
            'estado_id' => '21',
            'nome' => 'Itapuã do Oeste',
        ),
        37 =>
        array(
            'id' => '38',
            'estado_id' => '21',
            'nome' => 'Ministro Andreazza',
        ),
        38 =>
        array(
            'id' => '39',
            'estado_id' => '21',
            'nome' => 'Mirante da Serra',
        ),
        39 =>
        array(
            'id' => '40',
            'estado_id' => '21',
            'nome' => 'Monte Negro',
        ),
        40 =>
        array(
            'id' => '41',
            'estado_id' => '21',
            'nome' => 'Nova União',
        ),
        41 =>
        array(
            'id' => '42',
            'estado_id' => '21',
            'nome' => 'Parecis',
        ),
        42 =>
        array(
            'id' => '43',
            'estado_id' => '21',
            'nome' => 'Pimenteiras do Oeste',
        ),
        43 =>
        array(
            'id' => '44',
            'estado_id' => '21',
            'nome' => 'Primavera de Rondônia',
        ),
        44 =>
        array(
            'id' => '45',
            'estado_id' => '21',
            'nome' => 'São Felipe D\'oeste',
        ),
        45 =>
        array(
            'id' => '46',
            'estado_id' => '21',
            'nome' => 'São Francisco do Guaporé',
        ),
        46 =>
        array(
            'id' => '47',
            'estado_id' => '21',
            'nome' => 'Seringueiras',
        ),
        47 =>
        array(
            'id' => '48',
            'estado_id' => '21',
            'nome' => 'Teixeirópolis',
        ),
        48 =>
        array(
            'id' => '49',
            'estado_id' => '21',
            'nome' => 'Theobroma',
        ),
        49 =>
        array(
            'id' => '50',
            'estado_id' => '21',
            'nome' => 'Urupá',
        ),
        50 =>
        array(
            'id' => '51',
            'estado_id' => '21',
            'nome' => 'Vale do Anari',
        ),
        51 =>
        array(
            'id' => '52',
            'estado_id' => '21',
            'nome' => 'Vale do Paraíso',
        ),
        52 =>
        array(
            'id' => '53',
            'estado_id' => '1',
            'nome' => 'Acrelândia',
        ),
        53 =>
        array(
            'id' => '54',
            'estado_id' => '1',
            'nome' => 'Assis Brasil',
        ),
        54 =>
        array(
            'id' => '55',
            'estado_id' => '1',
            'nome' => 'Brasiléia',
        ),
        55 =>
        array(
            'id' => '56',
            'estado_id' => '1',
            'nome' => 'Bujari',
        ),
        56 =>
        array(
            'id' => '57',
            'estado_id' => '1',
            'nome' => 'Capixaba',
        ),
        57 =>
        array(
            'id' => '58',
            'estado_id' => '1',
            'nome' => 'Cruzeiro do Sul',
        ),
        58 =>
        array(
            'id' => '59',
            'estado_id' => '1',
            'nome' => 'Epitaciolândia',
        ),
        59 =>
        array(
            'id' => '60',
            'estado_id' => '1',
            'nome' => 'Feijó',
        ),
        60 =>
        array(
            'id' => '61',
            'estado_id' => '1',
            'nome' => 'Jordão',
        ),
        61 =>
        array(
            'id' => '62',
            'estado_id' => '1',
            'nome' => 'Mâncio Lima',
        ),
        62 =>
        array(
            'id' => '63',
            'estado_id' => '1',
            'nome' => 'Manoel Urbano',
        ),
        63 =>
        array(
            'id' => '64',
            'estado_id' => '1',
            'nome' => 'Marechal Thaumaturgo',
        ),
        64 =>
        array(
            'id' => '65',
            'estado_id' => '1',
            'nome' => 'Plácido de Castro',
        ),
        65 =>
        array(
            'id' => '66',
            'estado_id' => '1',
            'nome' => 'Porto Walter',
        ),
        66 =>
        array(
            'id' => '67',
            'estado_id' => '1',
            'nome' => 'Rio Branco',
        ),
        67 =>
        array(
            'id' => '68',
            'estado_id' => '1',
            'nome' => 'Rodrigues Alves',
        ),
        68 =>
        array(
            'id' => '69',
            'estado_id' => '1',
            'nome' => 'Santa Rosa do Purus',
        ),
        69 =>
        array(
            'id' => '70',
            'estado_id' => '1',
            'nome' => 'Senador Guiomard',
        ),
        70 =>
        array(
            'id' => '71',
            'estado_id' => '1',
            'nome' => 'Sena Madureira',
        ),
        71 =>
        array(
            'id' => '72',
            'estado_id' => '1',
            'nome' => 'Tarauacá',
        ),
        72 =>
        array(
            'id' => '73',
            'estado_id' => '1',
            'nome' => 'Xapuri',
        ),
        73 =>
        array(
            'id' => '74',
            'estado_id' => '1',
            'nome' => 'Porto Acre',
        ),
        74 =>
        array(
            'id' => '75',
            'estado_id' => '3',
            'nome' => 'Alvarães',
        ),
        75 =>
        array(
            'id' => '76',
            'estado_id' => '3',
            'nome' => 'Amaturá',
        ),
        76 =>
        array(
            'id' => '77',
            'estado_id' => '3',
            'nome' => 'Anamã',
        ),
        77 =>
        array(
            'id' => '78',
            'estado_id' => '3',
            'nome' => 'Anori',
        ),
        78 =>
        array(
            'id' => '79',
            'estado_id' => '3',
            'nome' => 'Apuí',
        ),
        79 =>
        array(
            'id' => '80',
            'estado_id' => '3',
            'nome' => 'Atalaia do Norte',
        ),
        80 =>
        array(
            'id' => '81',
            'estado_id' => '3',
            'nome' => 'Autazes',
        ),
        81 =>
        array(
            'id' => '82',
            'estado_id' => '3',
            'nome' => 'Barcelos',
        ),
        82 =>
        array(
            'id' => '83',
            'estado_id' => '3',
            'nome' => 'Barreirinha',
        ),
        83 =>
        array(
            'id' => '84',
            'estado_id' => '3',
            'nome' => 'Benjamin Constant',
        ),
        84 =>
        array(
            'id' => '85',
            'estado_id' => '3',
            'nome' => 'Beruri',
        ),
        85 =>
        array(
            'id' => '86',
            'estado_id' => '3',
            'nome' => 'Boa Vista do Ramos',
        ),
        86 =>
        array(
            'id' => '87',
            'estado_id' => '3',
            'nome' => 'Boca do Acre',
        ),
        87 =>
        array(
            'id' => '88',
            'estado_id' => '3',
            'nome' => 'Borba',
        ),
        88 =>
        array(
            'id' => '89',
            'estado_id' => '3',
            'nome' => 'Caapiranga',
        ),
        89 =>
        array(
            'id' => '90',
            'estado_id' => '3',
            'nome' => 'Canutama',
        ),
        90 =>
        array(
            'id' => '91',
            'estado_id' => '3',
            'nome' => 'Carauari',
        ),
        91 =>
        array(
            'id' => '92',
            'estado_id' => '3',
            'nome' => 'Careiro',
        ),
        92 =>
        array(
            'id' => '93',
            'estado_id' => '3',
            'nome' => 'Careiro da Várzea',
        ),
        93 =>
        array(
            'id' => '94',
            'estado_id' => '3',
            'nome' => 'Coari',
        ),
        94 =>
        array(
            'id' => '95',
            'estado_id' => '3',
            'nome' => 'Codajás',
        ),
        95 =>
        array(
            'id' => '96',
            'estado_id' => '3',
            'nome' => 'Eirunepé',
        ),
        96 =>
        array(
            'id' => '97',
            'estado_id' => '3',
            'nome' => 'Envira',
        ),
        97 =>
        array(
            'id' => '98',
            'estado_id' => '3',
            'nome' => 'Fonte Boa',
        ),
        98 =>
        array(
            'id' => '99',
            'estado_id' => '3',
            'nome' => 'Guajará',
        ),
        99 =>
        array(
            'id' => '100',
            'estado_id' => '3',
            'nome' => 'Humaitá',
        ),
        100 =>
        array(
            'id' => '101',
            'estado_id' => '3',
            'nome' => 'Ipixuna',
        ),
        101 =>
        array(
            'id' => '102',
            'estado_id' => '3',
            'nome' => 'Iranduba',
        ),
        102 =>
        array(
            'id' => '103',
            'estado_id' => '3',
            'nome' => 'Itacoatiara',
        ),
        103 =>
        array(
            'id' => '104',
            'estado_id' => '3',
            'nome' => 'Itamarati',
        ),
        104 =>
        array(
            'id' => '105',
            'estado_id' => '3',
            'nome' => 'Itapiranga',
        ),
        105 =>
        array(
            'id' => '106',
            'estado_id' => '3',
            'nome' => 'Japurá',
        ),
        106 =>
        array(
            'id' => '107',
            'estado_id' => '3',
            'nome' => 'Juruá',
        ),
        107 =>
        array(
            'id' => '108',
            'estado_id' => '3',
            'nome' => 'Jutaí',
        ),
        108 =>
        array(
            'id' => '109',
            'estado_id' => '3',
            'nome' => 'Lábrea',
        ),
        109 =>
        array(
            'id' => '110',
            'estado_id' => '3',
            'nome' => 'Manacapuru',
        ),
        110 =>
        array(
            'id' => '111',
            'estado_id' => '3',
            'nome' => 'Manaquiri',
        ),
        111 =>
        array(
            'id' => '112',
            'estado_id' => '3',
            'nome' => 'Manaus',
        ),
        112 =>
        array(
            'id' => '113',
            'estado_id' => '3',
            'nome' => 'Manicoré',
        ),
        113 =>
        array(
            'id' => '114',
            'estado_id' => '3',
            'nome' => 'Maraã',
        ),
        114 =>
        array(
            'id' => '115',
            'estado_id' => '3',
            'nome' => 'Maués',
        ),
        115 =>
        array(
            'id' => '116',
            'estado_id' => '3',
            'nome' => 'Nhamundá',
        ),
        116 =>
        array(
            'id' => '117',
            'estado_id' => '3',
            'nome' => 'Nova Olinda do Norte',
        ),
        117 =>
        array(
            'id' => '118',
            'estado_id' => '3',
            'nome' => 'Novo Airão',
        ),
        118 =>
        array(
            'id' => '119',
            'estado_id' => '3',
            'nome' => 'Novo Aripuanã',
        ),
        119 =>
        array(
            'id' => '120',
            'estado_id' => '3',
            'nome' => 'Parintins',
        ),
        120 =>
        array(
            'id' => '121',
            'estado_id' => '3',
            'nome' => 'Pauini',
        ),
        121 =>
        array(
            'id' => '122',
            'estado_id' => '3',
            'nome' => 'Presidente Figueiredo',
        ),
        122 =>
        array(
            'id' => '123',
            'estado_id' => '3',
            'nome' => 'Rio Preto da Eva',
        ),
        123 =>
        array(
            'id' => '124',
            'estado_id' => '3',
            'nome' => 'Santa Isabel do Rio Negro',
        ),
        124 =>
        array(
            'id' => '125',
            'estado_id' => '3',
            'nome' => 'Santo Antônio do Içá',
        ),
        125 =>
        array(
            'id' => '126',
            'estado_id' => '3',
            'nome' => 'São Gabriel da Cachoeira',
        ),
        126 =>
        array(
            'id' => '127',
            'estado_id' => '3',
            'nome' => 'São Paulo de Olivença',
        ),
        127 =>
        array(
            'id' => '128',
            'estado_id' => '3',
            'nome' => 'São Sebastião do Uatumã',
        ),
        128 =>
        array(
            'id' => '129',
            'estado_id' => '3',
            'nome' => 'Silves',
        ),
        129 =>
        array(
            'id' => '130',
            'estado_id' => '3',
            'nome' => 'Tabatinga',
        ),
        130 =>
        array(
            'id' => '131',
            'estado_id' => '3',
            'nome' => 'Tapauá',
        ),
        131 =>
        array(
            'id' => '132',
            'estado_id' => '3',
            'nome' => 'Tefé',
        ),
        132 =>
        array(
            'id' => '133',
            'estado_id' => '3',
            'nome' => 'Tonantins',
        ),
        133 =>
        array(
            'id' => '134',
            'estado_id' => '3',
            'nome' => 'Uarini',
        ),
        134 =>
        array(
            'id' => '135',
            'estado_id' => '3',
            'nome' => 'Urucará',
        ),
        135 =>
        array(
            'id' => '136',
            'estado_id' => '3',
            'nome' => 'Urucurituba',
        ),
        136 =>
        array(
            'id' => '137',
            'estado_id' => '22',
            'nome' => 'Amajari',
        ),
        137 =>
        array(
            'id' => '138',
            'estado_id' => '22',
            'nome' => 'Alto Alegre',
        ),
        138 =>
        array(
            'id' => '139',
            'estado_id' => '22',
            'nome' => 'Boa Vista',
        ),
        139 =>
        array(
            'id' => '140',
            'estado_id' => '22',
            'nome' => 'Bonfim',
        ),
        140 =>
        array(
            'id' => '141',
            'estado_id' => '22',
            'nome' => 'Cantá',
        ),
        141 =>
        array(
            'id' => '142',
            'estado_id' => '22',
            'nome' => 'Caracaraí',
        ),
        142 =>
        array(
            'id' => '143',
            'estado_id' => '22',
            'nome' => 'Caroebe',
        ),
        143 =>
        array(
            'id' => '144',
            'estado_id' => '22',
            'nome' => 'Iracema',
        ),
        144 =>
        array(
            'id' => '145',
            'estado_id' => '22',
            'nome' => 'Mucajaí',
        ),
        145 =>
        array(
            'id' => '146',
            'estado_id' => '22',
            'nome' => 'Normandia',
        ),
        146 =>
        array(
            'id' => '147',
            'estado_id' => '22',
            'nome' => 'Pacaraima',
        ),
        147 =>
        array(
            'id' => '148',
            'estado_id' => '22',
            'nome' => 'Rorainópolis',
        ),
        148 =>
        array(
            'id' => '149',
            'estado_id' => '22',
            'nome' => 'São João da Baliza',
        ),
        149 =>
        array(
            'id' => '150',
            'estado_id' => '22',
            'nome' => 'São Luiz',
        ),
        150 =>
        array(
            'id' => '151',
            'estado_id' => '22',
            'nome' => 'Uiramutã',
        ),
        151 =>
        array(
            'id' => '152',
            'estado_id' => '14',
            'nome' => 'Abaetetuba',
        ),
        152 =>
        array(
            'id' => '153',
            'estado_id' => '14',
            'nome' => 'Abel Figueiredo',
        ),
        153 =>
        array(
            'id' => '154',
            'estado_id' => '14',
            'nome' => 'Acará',
        ),
        154 =>
        array(
            'id' => '155',
            'estado_id' => '14',
            'nome' => 'Afuá',
        ),
        155 =>
        array(
            'id' => '156',
            'estado_id' => '14',
            'nome' => 'Água Azul do Norte',
        ),
        156 =>
        array(
            'id' => '157',
            'estado_id' => '14',
            'nome' => 'Alenquer',
        ),
        157 =>
        array(
            'id' => '158',
            'estado_id' => '14',
            'nome' => 'Almeirim',
        ),
        158 =>
        array(
            'id' => '159',
            'estado_id' => '14',
            'nome' => 'Altamira',
        ),
        159 =>
        array(
            'id' => '160',
            'estado_id' => '14',
            'nome' => 'Anajás',
        ),
        160 =>
        array(
            'id' => '161',
            'estado_id' => '14',
            'nome' => 'Ananindeua',
        ),
        161 =>
        array(
            'id' => '162',
            'estado_id' => '14',
            'nome' => 'Anapu',
        ),
        162 =>
        array(
            'id' => '163',
            'estado_id' => '14',
            'nome' => 'Augusto Corrêa',
        ),
        163 =>
        array(
            'id' => '164',
            'estado_id' => '14',
            'nome' => 'Aurora do Pará',
        ),
        164 =>
        array(
            'id' => '165',
            'estado_id' => '14',
            'nome' => 'Aveiro',
        ),
        165 =>
        array(
            'id' => '166',
            'estado_id' => '14',
            'nome' => 'Bagre',
        ),
        166 =>
        array(
            'id' => '167',
            'estado_id' => '14',
            'nome' => 'Baião',
        ),
        167 =>
        array(
            'id' => '168',
            'estado_id' => '14',
            'nome' => 'Bannach',
        ),
        168 =>
        array(
            'id' => '169',
            'estado_id' => '14',
            'nome' => 'Barcarena',
        ),
        169 =>
        array(
            'id' => '170',
            'estado_id' => '14',
            'nome' => 'Belém',
        ),
        170 =>
        array(
            'id' => '171',
            'estado_id' => '14',
            'nome' => 'Belterra',
        ),
        171 =>
        array(
            'id' => '172',
            'estado_id' => '14',
            'nome' => 'Benevides',
        ),
        172 =>
        array(
            'id' => '173',
            'estado_id' => '14',
            'nome' => 'Bom Jesus do Tocantins',
        ),
        173 =>
        array(
            'id' => '174',
            'estado_id' => '14',
            'nome' => 'Bonito',
        ),
        174 =>
        array(
            'id' => '175',
            'estado_id' => '14',
            'nome' => 'Bragança',
        ),
        175 =>
        array(
            'id' => '176',
            'estado_id' => '14',
            'nome' => 'Brasil Novo',
        ),
        176 =>
        array(
            'id' => '177',
            'estado_id' => '14',
            'nome' => 'Brejo Grande do Araguaia',
        ),
        177 =>
        array(
            'id' => '178',
            'estado_id' => '14',
            'nome' => 'Breu Branco',
        ),
        178 =>
        array(
            'id' => '179',
            'estado_id' => '14',
            'nome' => 'Breves',
        ),
        179 =>
        array(
            'id' => '180',
            'estado_id' => '14',
            'nome' => 'Bujaru',
        ),
        180 =>
        array(
            'id' => '181',
            'estado_id' => '14',
            'nome' => 'Cachoeira do Piriá',
        ),
        181 =>
        array(
            'id' => '182',
            'estado_id' => '14',
            'nome' => 'Cachoeira do Arari',
        ),
        182 =>
        array(
            'id' => '183',
            'estado_id' => '14',
            'nome' => 'Cametá',
        ),
        183 =>
        array(
            'id' => '184',
            'estado_id' => '14',
            'nome' => 'Canaã dos Carajás',
        ),
        184 =>
        array(
            'id' => '185',
            'estado_id' => '14',
            'nome' => 'Capanema',
        ),
        185 =>
        array(
            'id' => '186',
            'estado_id' => '14',
            'nome' => 'Capitão Poço',
        ),
        186 =>
        array(
            'id' => '187',
            'estado_id' => '14',
            'nome' => 'Castanhal',
        ),
        187 =>
        array(
            'id' => '188',
            'estado_id' => '14',
            'nome' => 'Chaves',
        ),
        188 =>
        array(
            'id' => '189',
            'estado_id' => '14',
            'nome' => 'Colares',
        ),
        189 =>
        array(
            'id' => '190',
            'estado_id' => '14',
            'nome' => 'Conceição do Araguaia',
        ),
        190 =>
        array(
            'id' => '191',
            'estado_id' => '14',
            'nome' => 'Concórdia do Pará',
        ),
        191 =>
        array(
            'id' => '192',
            'estado_id' => '14',
            'nome' => 'Cumaru do Norte',
        ),
        192 =>
        array(
            'id' => '193',
            'estado_id' => '14',
            'nome' => 'Curionópolis',
        ),
        193 =>
        array(
            'id' => '194',
            'estado_id' => '14',
            'nome' => 'Curralinho',
        ),
        194 =>
        array(
            'id' => '195',
            'estado_id' => '14',
            'nome' => 'Curuá',
        ),
        195 =>
        array(
            'id' => '196',
            'estado_id' => '14',
            'nome' => 'Curuçá',
        ),
        196 =>
        array(
            'id' => '197',
            'estado_id' => '14',
            'nome' => 'Dom Eliseu',
        ),
        197 =>
        array(
            'id' => '198',
            'estado_id' => '14',
            'nome' => 'Eldorado dos Carajás',
        ),
        198 =>
        array(
            'id' => '199',
            'estado_id' => '14',
            'nome' => 'Faro',
        ),
        199 =>
        array(
            'id' => '200',
            'estado_id' => '14',
            'nome' => 'Floresta do Araguaia',
        ),
        200 =>
        array(
            'id' => '201',
            'estado_id' => '14',
            'nome' => 'Garrafão do Norte',
        ),
        201 =>
        array(
            'id' => '202',
            'estado_id' => '14',
            'nome' => 'Goianésia do Pará',
        ),
        202 =>
        array(
            'id' => '203',
            'estado_id' => '14',
            'nome' => 'Gurupá',
        ),
        203 =>
        array(
            'id' => '204',
            'estado_id' => '14',
            'nome' => 'Igarapé-Açu',
        ),
        204 =>
        array(
            'id' => '205',
            'estado_id' => '14',
            'nome' => 'Igarapé-Miri',
        ),
        205 =>
        array(
            'id' => '206',
            'estado_id' => '14',
            'nome' => 'Inhangapi',
        ),
        206 =>
        array(
            'id' => '207',
            'estado_id' => '14',
            'nome' => 'Ipixuna do Pará',
        ),
        207 =>
        array(
            'id' => '208',
            'estado_id' => '14',
            'nome' => 'Irituia',
        ),
        208 =>
        array(
            'id' => '209',
            'estado_id' => '14',
            'nome' => 'Itaituba',
        ),
        209 =>
        array(
            'id' => '210',
            'estado_id' => '14',
            'nome' => 'Itupiranga',
        ),
        210 =>
        array(
            'id' => '211',
            'estado_id' => '14',
            'nome' => 'Jacareacanga',
        ),
        211 =>
        array(
            'id' => '212',
            'estado_id' => '14',
            'nome' => 'Jacundá',
        ),
        212 =>
        array(
            'id' => '213',
            'estado_id' => '14',
            'nome' => 'Juruti',
        ),
        213 =>
        array(
            'id' => '214',
            'estado_id' => '14',
            'nome' => 'Limoeiro do Ajuru',
        ),
        214 =>
        array(
            'id' => '215',
            'estado_id' => '14',
            'nome' => 'Mãe do Rio',
        ),
        215 =>
        array(
            'id' => '216',
            'estado_id' => '14',
            'nome' => 'Magalhães Barata',
        ),
        216 =>
        array(
            'id' => '217',
            'estado_id' => '14',
            'nome' => 'Marabá',
        ),
        217 =>
        array(
            'id' => '218',
            'estado_id' => '14',
            'nome' => 'Maracanã',
        ),
        218 =>
        array(
            'id' => '219',
            'estado_id' => '14',
            'nome' => 'Marapanim',
        ),
        219 =>
        array(
            'id' => '220',
            'estado_id' => '14',
            'nome' => 'Marituba',
        ),
        220 =>
        array(
            'id' => '221',
            'estado_id' => '14',
            'nome' => 'Medicilândia',
        ),
        221 =>
        array(
            'id' => '222',
            'estado_id' => '14',
            'nome' => 'Melgaço',
        ),
        222 =>
        array(
            'id' => '223',
            'estado_id' => '14',
            'nome' => 'Mocajuba',
        ),
        223 =>
        array(
            'id' => '224',
            'estado_id' => '14',
            'nome' => 'Moju',
        ),
        224 =>
        array(
            'id' => '225',
            'estado_id' => '14',
            'nome' => 'Monte Alegre',
        ),
        225 =>
        array(
            'id' => '226',
            'estado_id' => '14',
            'nome' => 'Muaná',
        ),
        226 =>
        array(
            'id' => '227',
            'estado_id' => '14',
            'nome' => 'Nova Esperança do Piriá',
        ),
        227 =>
        array(
            'id' => '228',
            'estado_id' => '14',
            'nome' => 'Nova Ipixuna',
        ),
        228 =>
        array(
            'id' => '229',
            'estado_id' => '14',
            'nome' => 'Nova Timboteua',
        ),
        229 =>
        array(
            'id' => '230',
            'estado_id' => '14',
            'nome' => 'Novo Progresso',
        ),
        230 =>
        array(
            'id' => '231',
            'estado_id' => '14',
            'nome' => 'Novo Repartimento',
        ),
        231 =>
        array(
            'id' => '232',
            'estado_id' => '14',
            'nome' => 'Óbidos',
        ),
        232 =>
        array(
            'id' => '233',
            'estado_id' => '14',
            'nome' => 'Oeiras do Pará',
        ),
        233 =>
        array(
            'id' => '234',
            'estado_id' => '14',
            'nome' => 'Oriximiná',
        ),
        234 =>
        array(
            'id' => '235',
            'estado_id' => '14',
            'nome' => 'Ourém',
        ),
        235 =>
        array(
            'id' => '236',
            'estado_id' => '14',
            'nome' => 'Ourilândia do Norte',
        ),
        236 =>
        array(
            'id' => '237',
            'estado_id' => '14',
            'nome' => 'Pacajá',
        ),
        237 =>
        array(
            'id' => '238',
            'estado_id' => '14',
            'nome' => 'Palestina do Pará',
        ),
        238 =>
        array(
            'id' => '239',
            'estado_id' => '14',
            'nome' => 'Paragominas',
        ),
        239 =>
        array(
            'id' => '240',
            'estado_id' => '14',
            'nome' => 'Parauapebas',
        ),
        240 =>
        array(
            'id' => '241',
            'estado_id' => '14',
            'nome' => 'Pau D\'arco',
        ),
        241 =>
        array(
            'id' => '242',
            'estado_id' => '14',
            'nome' => 'Peixe-Boi',
        ),
        242 =>
        array(
            'id' => '243',
            'estado_id' => '14',
            'nome' => 'Piçarra',
        ),
        243 =>
        array(
            'id' => '244',
            'estado_id' => '14',
            'nome' => 'Placas',
        ),
        244 =>
        array(
            'id' => '245',
            'estado_id' => '14',
            'nome' => 'Ponta de Pedras',
        ),
        245 =>
        array(
            'id' => '246',
            'estado_id' => '14',
            'nome' => 'Portel',
        ),
        246 =>
        array(
            'id' => '247',
            'estado_id' => '14',
            'nome' => 'Porto de Moz',
        ),
        247 =>
        array(
            'id' => '248',
            'estado_id' => '14',
            'nome' => 'Prainha',
        ),
        248 =>
        array(
            'id' => '249',
            'estado_id' => '14',
            'nome' => 'Primavera',
        ),
        249 =>
        array(
            'id' => '250',
            'estado_id' => '14',
            'nome' => 'Quatipuru',
        ),
        250 =>
        array(
            'id' => '251',
            'estado_id' => '14',
            'nome' => 'Redenção',
        ),
        251 =>
        array(
            'id' => '252',
            'estado_id' => '14',
            'nome' => 'Rio Maria',
        ),
        252 =>
        array(
            'id' => '253',
            'estado_id' => '14',
            'nome' => 'Rondon do Pará',
        ),
        253 =>
        array(
            'id' => '254',
            'estado_id' => '14',
            'nome' => 'Rurópolis',
        ),
        254 =>
        array(
            'id' => '255',
            'estado_id' => '14',
            'nome' => 'Salinópolis',
        ),
        255 =>
        array(
            'id' => '256',
            'estado_id' => '14',
            'nome' => 'Salvaterra',
        ),
        256 =>
        array(
            'id' => '257',
            'estado_id' => '14',
            'nome' => 'Santa Bárbara do Pará',
        ),
        257 =>
        array(
            'id' => '258',
            'estado_id' => '14',
            'nome' => 'Santa Cruz do Arari',
        ),
        258 =>
        array(
            'id' => '259',
            'estado_id' => '14',
            'nome' => 'Santa Isabel do Pará',
        ),
        259 =>
        array(
            'id' => '260',
            'estado_id' => '14',
            'nome' => 'Santa Luzia do Pará',
        ),
        260 =>
        array(
            'id' => '261',
            'estado_id' => '14',
            'nome' => 'Santa Maria das Barreiras',
        ),
        261 =>
        array(
            'id' => '262',
            'estado_id' => '14',
            'nome' => 'Santa Maria do Pará',
        ),
        262 =>
        array(
            'id' => '263',
            'estado_id' => '14',
            'nome' => 'Santana do Araguaia',
        ),
        263 =>
        array(
            'id' => '264',
            'estado_id' => '14',
            'nome' => 'Santarém',
        ),
        264 =>
        array(
            'id' => '265',
            'estado_id' => '14',
            'nome' => 'Santarém Novo',
        ),
        265 =>
        array(
            'id' => '266',
            'estado_id' => '14',
            'nome' => 'Santo Antônio do Tauá',
        ),
        266 =>
        array(
            'id' => '267',
            'estado_id' => '14',
            'nome' => 'São Caetano de Odivelas',
        ),
        267 =>
        array(
            'id' => '268',
            'estado_id' => '14',
            'nome' => 'São Domingos do Araguaia',
        ),
        268 =>
        array(
            'id' => '269',
            'estado_id' => '14',
            'nome' => 'São Domingos do Capim',
        ),
        269 =>
        array(
            'id' => '270',
            'estado_id' => '14',
            'nome' => 'São Félix do Xingu',
        ),
        270 =>
        array(
            'id' => '271',
            'estado_id' => '14',
            'nome' => 'São Francisco do Pará',
        ),
        271 =>
        array(
            'id' => '272',
            'estado_id' => '14',
            'nome' => 'São Geraldo do Araguaia',
        ),
        272 =>
        array(
            'id' => '273',
            'estado_id' => '14',
            'nome' => 'São João da Ponta',
        ),
        273 =>
        array(
            'id' => '274',
            'estado_id' => '14',
            'nome' => 'São João de Pirabas',
        ),
        274 =>
        array(
            'id' => '275',
            'estado_id' => '14',
            'nome' => 'São João do Araguaia',
        ),
        275 =>
        array(
            'id' => '276',
            'estado_id' => '14',
            'nome' => 'São Miguel do Guamá',
        ),
        276 =>
        array(
            'id' => '277',
            'estado_id' => '14',
            'nome' => 'São Sebastião da Boa Vista',
        ),
        277 =>
        array(
            'id' => '278',
            'estado_id' => '14',
            'nome' => 'Sapucaia',
        ),
        278 =>
        array(
            'id' => '279',
            'estado_id' => '14',
            'nome' => 'Senador José Porfírio',
        ),
        279 =>
        array(
            'id' => '280',
            'estado_id' => '14',
            'nome' => 'Soure',
        ),
        280 =>
        array(
            'id' => '281',
            'estado_id' => '14',
            'nome' => 'Tailândia',
        ),
        281 =>
        array(
            'id' => '282',
            'estado_id' => '14',
            'nome' => 'Terra Alta',
        ),
        282 =>
        array(
            'id' => '283',
            'estado_id' => '14',
            'nome' => 'Terra Santa',
        ),
        283 =>
        array(
            'id' => '284',
            'estado_id' => '14',
            'nome' => 'Tomé-Açu',
        ),
        284 =>
        array(
            'id' => '285',
            'estado_id' => '14',
            'nome' => 'Tracuateua',
        ),
        285 =>
        array(
            'id' => '286',
            'estado_id' => '14',
            'nome' => 'Trairão',
        ),
        286 =>
        array(
            'id' => '287',
            'estado_id' => '14',
            'nome' => 'Tucumã',
        ),
        287 =>
        array(
            'id' => '288',
            'estado_id' => '14',
            'nome' => 'Tucuruí',
        ),
        288 =>
        array(
            'id' => '289',
            'estado_id' => '14',
            'nome' => 'Ulianópolis',
        ),
        289 =>
        array(
            'id' => '290',
            'estado_id' => '14',
            'nome' => 'Uruará',
        ),
        290 =>
        array(
            'id' => '291',
            'estado_id' => '14',
            'nome' => 'Vigia',
        ),
        291 =>
        array(
            'id' => '292',
            'estado_id' => '14',
            'nome' => 'Viseu',
        ),
        292 =>
        array(
            'id' => '293',
            'estado_id' => '14',
            'nome' => 'Vitória do Xingu',
        ),
        293 =>
        array(
            'id' => '294',
            'estado_id' => '14',
            'nome' => 'Xinguara',
        ),
        294 =>
        array(
            'id' => '295',
            'estado_id' => '4',
            'nome' => 'Serra do Navio',
        ),
        295 =>
        array(
            'id' => '296',
            'estado_id' => '4',
            'nome' => 'Amapá',
        ),
        296 =>
        array(
            'id' => '297',
            'estado_id' => '4',
            'nome' => 'Pedra Branca do Amapari',
        ),
        297 =>
        array(
            'id' => '298',
            'estado_id' => '4',
            'nome' => 'Calçoene',
        ),
        298 =>
        array(
            'id' => '299',
            'estado_id' => '4',
            'nome' => 'Cutias',
        ),
        299 =>
        array(
            'id' => '300',
            'estado_id' => '4',
            'nome' => 'Ferreira Gomes',
        ),
        300 =>
        array(
            'id' => '301',
            'estado_id' => '4',
            'nome' => 'Itaubal',
        ),
        301 =>
        array(
            'id' => '302',
            'estado_id' => '4',
            'nome' => 'Laranjal do Jari',
        ),
        302 =>
        array(
            'id' => '303',
            'estado_id' => '4',
            'nome' => 'Macapá',
        ),
        303 =>
        array(
            'id' => '304',
            'estado_id' => '4',
            'nome' => 'Mazagão',
        ),
        304 =>
        array(
            'id' => '305',
            'estado_id' => '4',
            'nome' => 'Oiapoque',
        ),
        305 =>
        array(
            'id' => '306',
            'estado_id' => '4',
            'nome' => 'Porto Grande',
        ),
        306 =>
        array(
            'id' => '307',
            'estado_id' => '4',
            'nome' => 'Pracuúba',
        ),
        307 =>
        array(
            'id' => '308',
            'estado_id' => '4',
            'nome' => 'Santana',
        ),
        308 =>
        array(
            'id' => '309',
            'estado_id' => '4',
            'nome' => 'Tartarugalzinho',
        ),
        309 =>
        array(
            'id' => '310',
            'estado_id' => '4',
            'nome' => 'Vitória do Jari',
        ),
        310 =>
        array(
            'id' => '311',
            'estado_id' => '27',
            'nome' => 'Abreulândia',
        ),
        311 =>
        array(
            'id' => '312',
            'estado_id' => '27',
            'nome' => 'Aguiarnópolis',
        ),
        312 =>
        array(
            'id' => '313',
            'estado_id' => '27',
            'nome' => 'Aliança do Tocantins',
        ),
        313 =>
        array(
            'id' => '314',
            'estado_id' => '27',
            'nome' => 'Almas',
        ),
        314 =>
        array(
            'id' => '315',
            'estado_id' => '27',
            'nome' => 'Alvorada',
        ),
        315 =>
        array(
            'id' => '316',
            'estado_id' => '27',
            'nome' => 'Ananás',
        ),
        316 =>
        array(
            'id' => '317',
            'estado_id' => '27',
            'nome' => 'Angico',
        ),
        317 =>
        array(
            'id' => '318',
            'estado_id' => '27',
            'nome' => 'Aparecida do Rio Negro',
        ),
        318 =>
        array(
            'id' => '319',
            'estado_id' => '27',
            'nome' => 'Aragominas',
        ),
        319 =>
        array(
            'id' => '320',
            'estado_id' => '27',
            'nome' => 'Araguacema',
        ),
        320 =>
        array(
            'id' => '321',
            'estado_id' => '27',
            'nome' => 'Araguaçu',
        ),
        321 =>
        array(
            'id' => '322',
            'estado_id' => '27',
            'nome' => 'Araguaína',
        ),
        322 =>
        array(
            'id' => '323',
            'estado_id' => '27',
            'nome' => 'Araguanã',
        ),
        323 =>
        array(
            'id' => '324',
            'estado_id' => '27',
            'nome' => 'Araguatins',
        ),
        324 =>
        array(
            'id' => '325',
            'estado_id' => '27',
            'nome' => 'Arapoema',
        ),
        325 =>
        array(
            'id' => '326',
            'estado_id' => '27',
            'nome' => 'Arraias',
        ),
        326 =>
        array(
            'id' => '327',
            'estado_id' => '27',
            'nome' => 'Augustinópolis',
        ),
        327 =>
        array(
            'id' => '328',
            'estado_id' => '27',
            'nome' => 'Aurora do Tocantins',
        ),
        328 =>
        array(
            'id' => '329',
            'estado_id' => '27',
            'nome' => 'Axixá do Tocantins',
        ),
        329 =>
        array(
            'id' => '330',
            'estado_id' => '27',
            'nome' => 'Babaçulândia',
        ),
        330 =>
        array(
            'id' => '331',
            'estado_id' => '27',
            'nome' => 'Bandeirantes do Tocantins',
        ),
        331 =>
        array(
            'id' => '332',
            'estado_id' => '27',
            'nome' => 'Barra do Ouro',
        ),
        332 =>
        array(
            'id' => '333',
            'estado_id' => '27',
            'nome' => 'Barrolândia',
        ),
        333 =>
        array(
            'id' => '334',
            'estado_id' => '27',
            'nome' => 'Bernardo Sayão',
        ),
        334 =>
        array(
            'id' => '335',
            'estado_id' => '27',
            'nome' => 'Bom Jesus do Tocantins',
        ),
        335 =>
        array(
            'id' => '336',
            'estado_id' => '27',
            'nome' => 'Brasilândia do Tocantins',
        ),
        336 =>
        array(
            'id' => '337',
            'estado_id' => '27',
            'nome' => 'Brejinho de Nazaré',
        ),
        337 =>
        array(
            'id' => '338',
            'estado_id' => '27',
            'nome' => 'Buriti do Tocantins',
        ),
        338 =>
        array(
            'id' => '339',
            'estado_id' => '27',
            'nome' => 'Cachoeirinha',
        ),
        339 =>
        array(
            'id' => '340',
            'estado_id' => '27',
            'nome' => 'Campos Lindos',
        ),
        340 =>
        array(
            'id' => '341',
            'estado_id' => '27',
            'nome' => 'Cariri do Tocantins',
        ),
        341 =>
        array(
            'id' => '342',
            'estado_id' => '27',
            'nome' => 'Carmolândia',
        ),
        342 =>
        array(
            'id' => '343',
            'estado_id' => '27',
            'nome' => 'Carrasco Bonito',
        ),
        343 =>
        array(
            'id' => '344',
            'estado_id' => '27',
            'nome' => 'Caseara',
        ),
        344 =>
        array(
            'id' => '345',
            'estado_id' => '27',
            'nome' => 'Centenário',
        ),
        345 =>
        array(
            'id' => '346',
            'estado_id' => '27',
            'nome' => 'Chapada de Areia',
        ),
        346 =>
        array(
            'id' => '347',
            'estado_id' => '27',
            'nome' => 'Chapada da Natividade',
        ),
        347 =>
        array(
            'id' => '348',
            'estado_id' => '27',
            'nome' => 'Colinas do Tocantins',
        ),
        348 =>
        array(
            'id' => '349',
            'estado_id' => '27',
            'nome' => 'Combinado',
        ),
        349 =>
        array(
            'id' => '350',
            'estado_id' => '27',
            'nome' => 'Conceição do Tocantins',
        ),
        350 =>
        array(
            'id' => '351',
            'estado_id' => '27',
            'nome' => 'Couto de Magalhães',
        ),
        351 =>
        array(
            'id' => '352',
            'estado_id' => '27',
            'nome' => 'Cristalândia',
        ),
        352 =>
        array(
            'id' => '353',
            'estado_id' => '27',
            'nome' => 'Crixás do Tocantins',
        ),
        353 =>
        array(
            'id' => '354',
            'estado_id' => '27',
            'nome' => 'Darcinópolis',
        ),
        354 =>
        array(
            'id' => '355',
            'estado_id' => '27',
            'nome' => 'Dianópolis',
        ),
        355 =>
        array(
            'id' => '356',
            'estado_id' => '27',
            'nome' => 'Divinópolis do Tocantins',
        ),
        356 =>
        array(
            'id' => '357',
            'estado_id' => '27',
            'nome' => 'Dois Irmãos do Tocantins',
        ),
        357 =>
        array(
            'id' => '358',
            'estado_id' => '27',
            'nome' => 'Dueré',
        ),
        358 =>
        array(
            'id' => '359',
            'estado_id' => '27',
            'nome' => 'Esperantina',
        ),
        359 =>
        array(
            'id' => '360',
            'estado_id' => '27',
            'nome' => 'Fátima',
        ),
        360 =>
        array(
            'id' => '361',
            'estado_id' => '27',
            'nome' => 'Figueirópolis',
        ),
        361 =>
        array(
            'id' => '362',
            'estado_id' => '27',
            'nome' => 'Filadélfia',
        ),
        362 =>
        array(
            'id' => '363',
            'estado_id' => '27',
            'nome' => 'Formoso do Araguaia',
        ),
        363 =>
        array(
            'id' => '364',
            'estado_id' => '27',
            'nome' => 'Fortaleza do Tabocão',
        ),
        364 =>
        array(
            'id' => '365',
            'estado_id' => '27',
            'nome' => 'Goianorte',
        ),
        365 =>
        array(
            'id' => '366',
            'estado_id' => '27',
            'nome' => 'Goiatins',
        ),
        366 =>
        array(
            'id' => '367',
            'estado_id' => '27',
            'nome' => 'Guaraí',
        ),
        367 =>
        array(
            'id' => '368',
            'estado_id' => '27',
            'nome' => 'Gurupi',
        ),
        368 =>
        array(
            'id' => '369',
            'estado_id' => '27',
            'nome' => 'Ipueiras',
        ),
        369 =>
        array(
            'id' => '370',
            'estado_id' => '27',
            'nome' => 'Itacajá',
        ),
        370 =>
        array(
            'id' => '371',
            'estado_id' => '27',
            'nome' => 'Itaguatins',
        ),
        371 =>
        array(
            'id' => '372',
            'estado_id' => '27',
            'nome' => 'Itapiratins',
        ),
        372 =>
        array(
            'id' => '373',
            'estado_id' => '27',
            'nome' => 'Itaporã do Tocantins',
        ),
        373 =>
        array(
            'id' => '374',
            'estado_id' => '27',
            'nome' => 'Jaú do Tocantins',
        ),
        374 =>
        array(
            'id' => '375',
            'estado_id' => '27',
            'nome' => 'Juarina',
        ),
        375 =>
        array(
            'id' => '376',
            'estado_id' => '27',
            'nome' => 'Lagoa da Confusão',
        ),
        376 =>
        array(
            'id' => '377',
            'estado_id' => '27',
            'nome' => 'Lagoa do Tocantins',
        ),
        377 =>
        array(
            'id' => '378',
            'estado_id' => '27',
            'nome' => 'Lajeado',
        ),
        378 =>
        array(
            'id' => '379',
            'estado_id' => '27',
            'nome' => 'Lavandeira',
        ),
        379 =>
        array(
            'id' => '380',
            'estado_id' => '27',
            'nome' => 'Lizarda',
        ),
        380 =>
        array(
            'id' => '381',
            'estado_id' => '27',
            'nome' => 'Luzinópolis',
        ),
        381 =>
        array(
            'id' => '382',
            'estado_id' => '27',
            'nome' => 'Marianópolis do Tocantins',
        ),
        382 =>
        array(
            'id' => '383',
            'estado_id' => '27',
            'nome' => 'Mateiros',
        ),
        383 =>
        array(
            'id' => '384',
            'estado_id' => '27',
            'nome' => 'Maurilândia do Tocantins',
        ),
        384 =>
        array(
            'id' => '385',
            'estado_id' => '27',
            'nome' => 'Miracema do Tocantins',
        ),
        385 =>
        array(
            'id' => '386',
            'estado_id' => '27',
            'nome' => 'Miranorte',
        ),
        386 =>
        array(
            'id' => '387',
            'estado_id' => '27',
            'nome' => 'Monte do Carmo',
        ),
        387 =>
        array(
            'id' => '388',
            'estado_id' => '27',
            'nome' => 'Monte Santo do Tocantins',
        ),
        388 =>
        array(
            'id' => '389',
            'estado_id' => '27',
            'nome' => 'Palmeiras do Tocantins',
        ),
        389 =>
        array(
            'id' => '390',
            'estado_id' => '27',
            'nome' => 'Muricilândia',
        ),
        390 =>
        array(
            'id' => '391',
            'estado_id' => '27',
            'nome' => 'Natividade',
        ),
        391 =>
        array(
            'id' => '392',
            'estado_id' => '27',
            'nome' => 'Nazaré',
        ),
        392 =>
        array(
            'id' => '393',
            'estado_id' => '27',
            'nome' => 'Nova Olinda',
        ),
        393 =>
        array(
            'id' => '394',
            'estado_id' => '27',
            'nome' => 'Nova Rosalândia',
        ),
        394 =>
        array(
            'id' => '395',
            'estado_id' => '27',
            'nome' => 'Novo Acordo',
        ),
        395 =>
        array(
            'id' => '396',
            'estado_id' => '27',
            'nome' => 'Novo Alegre',
        ),
        396 =>
        array(
            'id' => '397',
            'estado_id' => '27',
            'nome' => 'Novo Jardim',
        ),
        397 =>
        array(
            'id' => '398',
            'estado_id' => '27',
            'nome' => 'Oliveira de Fátima',
        ),
        398 =>
        array(
            'id' => '399',
            'estado_id' => '27',
            'nome' => 'Palmeirante',
        ),
        399 =>
        array(
            'id' => '400',
            'estado_id' => '27',
            'nome' => 'Palmeirópolis',
        ),
        400 =>
        array(
            'id' => '401',
            'estado_id' => '27',
            'nome' => 'Paraíso do Tocantins',
        ),
        401 =>
        array(
            'id' => '402',
            'estado_id' => '27',
            'nome' => 'Paranã',
        ),
        402 =>
        array(
            'id' => '403',
            'estado_id' => '27',
            'nome' => 'Pau D\'arco',
        ),
        403 =>
        array(
            'id' => '404',
            'estado_id' => '27',
            'nome' => 'Pedro Afonso',
        ),
        404 =>
        array(
            'id' => '405',
            'estado_id' => '27',
            'nome' => 'Peixe',
        ),
        405 =>
        array(
            'id' => '406',
            'estado_id' => '27',
            'nome' => 'Pequizeiro',
        ),
        406 =>
        array(
            'id' => '407',
            'estado_id' => '27',
            'nome' => 'Colméia',
        ),
        407 =>
        array(
            'id' => '408',
            'estado_id' => '27',
            'nome' => 'Pindorama do Tocantins',
        ),
        408 =>
        array(
            'id' => '409',
            'estado_id' => '27',
            'nome' => 'Piraquê',
        ),
        409 =>
        array(
            'id' => '410',
            'estado_id' => '27',
            'nome' => 'Pium',
        ),
        410 =>
        array(
            'id' => '411',
            'estado_id' => '27',
            'nome' => 'Ponte Alta do Bom Jesus',
        ),
        411 =>
        array(
            'id' => '412',
            'estado_id' => '27',
            'nome' => 'Ponte Alta do Tocantins',
        ),
        412 =>
        array(
            'id' => '413',
            'estado_id' => '27',
            'nome' => 'Porto Alegre do Tocantins',
        ),
        413 =>
        array(
            'id' => '414',
            'estado_id' => '27',
            'nome' => 'Porto Nacional',
        ),
        414 =>
        array(
            'id' => '415',
            'estado_id' => '27',
            'nome' => 'Praia Norte',
        ),
        415 =>
        array(
            'id' => '416',
            'estado_id' => '27',
            'nome' => 'Presidente Kennedy',
        ),
        416 =>
        array(
            'id' => '417',
            'estado_id' => '27',
            'nome' => 'Pugmil',
        ),
        417 =>
        array(
            'id' => '418',
            'estado_id' => '27',
            'nome' => 'Recursolândia',
        ),
        418 =>
        array(
            'id' => '419',
            'estado_id' => '27',
            'nome' => 'Riachinho',
        ),
        419 =>
        array(
            'id' => '420',
            'estado_id' => '27',
            'nome' => 'Rio da Conceição',
        ),
        420 =>
        array(
            'id' => '421',
            'estado_id' => '27',
            'nome' => 'Rio dos Bois',
        ),
        421 =>
        array(
            'id' => '422',
            'estado_id' => '27',
            'nome' => 'Rio Sono',
        ),
        422 =>
        array(
            'id' => '423',
            'estado_id' => '27',
            'nome' => 'Sampaio',
        ),
        423 =>
        array(
            'id' => '424',
            'estado_id' => '27',
            'nome' => 'Sandolândia',
        ),
        424 =>
        array(
            'id' => '425',
            'estado_id' => '27',
            'nome' => 'Santa Fé do Araguaia',
        ),
        425 =>
        array(
            'id' => '426',
            'estado_id' => '27',
            'nome' => 'Santa Maria do Tocantins',
        ),
        426 =>
        array(
            'id' => '427',
            'estado_id' => '27',
            'nome' => 'Santa Rita do Tocantins',
        ),
        427 =>
        array(
            'id' => '428',
            'estado_id' => '27',
            'nome' => 'Santa Rosa do Tocantins',
        ),
        428 =>
        array(
            'id' => '429',
            'estado_id' => '27',
            'nome' => 'Santa Tereza do Tocantins',
        ),
        429 =>
        array(
            'id' => '430',
            'estado_id' => '27',
            'nome' => 'Santa Terezinha do Tocantins',
        ),
        430 =>
        array(
            'id' => '431',
            'estado_id' => '27',
            'nome' => 'São Bento do Tocantins',
        ),
        431 =>
        array(
            'id' => '432',
            'estado_id' => '27',
            'nome' => 'São Félix do Tocantins',
        ),
        432 =>
        array(
            'id' => '433',
            'estado_id' => '27',
            'nome' => 'São Miguel do Tocantins',
        ),
        433 =>
        array(
            'id' => '434',
            'estado_id' => '27',
            'nome' => 'São Salvador do Tocantins',
        ),
        434 =>
        array(
            'id' => '435',
            'estado_id' => '27',
            'nome' => 'São Sebastião do Tocantins',
        ),
        435 =>
        array(
            'id' => '436',
            'estado_id' => '27',
            'nome' => 'São Valério da Natividade',
        ),
        436 =>
        array(
            'id' => '437',
            'estado_id' => '27',
            'nome' => 'Silvanópolis',
        ),
        437 =>
        array(
            'id' => '438',
            'estado_id' => '27',
            'nome' => 'Sítio Novo do Tocantins',
        ),
        438 =>
        array(
            'id' => '439',
            'estado_id' => '27',
            'nome' => 'Sucupira',
        ),
        439 =>
        array(
            'id' => '440',
            'estado_id' => '27',
            'nome' => 'Taguatinga',
        ),
        440 =>
        array(
            'id' => '441',
            'estado_id' => '27',
            'nome' => 'Taipas do Tocantins',
        ),
        441 =>
        array(
            'id' => '442',
            'estado_id' => '27',
            'nome' => 'Talismã',
        ),
        442 =>
        array(
            'id' => '443',
            'estado_id' => '27',
            'nome' => 'Palmas',
        ),
        443 =>
        array(
            'id' => '444',
            'estado_id' => '27',
            'nome' => 'Tocantínia',
        ),
        444 =>
        array(
            'id' => '445',
            'estado_id' => '27',
            'nome' => 'Tocantinópolis',
        ),
        445 =>
        array(
            'id' => '446',
            'estado_id' => '27',
            'nome' => 'Tupirama',
        ),
        446 =>
        array(
            'id' => '447',
            'estado_id' => '27',
            'nome' => 'Tupiratins',
        ),
        447 =>
        array(
            'id' => '448',
            'estado_id' => '27',
            'nome' => 'Wanderlândia',
        ),
        448 =>
        array(
            'id' => '449',
            'estado_id' => '27',
            'nome' => 'Xambioá',
        ),
        449 =>
        array(
            'id' => '450',
            'estado_id' => '10',
            'nome' => 'Açailândia',
        ),
        450 =>
        array(
            'id' => '451',
            'estado_id' => '10',
            'nome' => 'Afonso Cunha',
        ),
        451 =>
        array(
            'id' => '452',
            'estado_id' => '10',
            'nome' => 'Água Doce do Maranhão',
        ),
        452 =>
        array(
            'id' => '453',
            'estado_id' => '10',
            'nome' => 'Alcântara',
        ),
        453 =>
        array(
            'id' => '454',
            'estado_id' => '10',
            'nome' => 'Aldeias Altas',
        ),
        454 =>
        array(
            'id' => '455',
            'estado_id' => '10',
            'nome' => 'Altamira do Maranhão',
        ),
        455 =>
        array(
            'id' => '456',
            'estado_id' => '10',
            'nome' => 'Alto Alegre do Maranhão',
        ),
        456 =>
        array(
            'id' => '457',
            'estado_id' => '10',
            'nome' => 'Alto Alegre do Pindaré',
        ),
        457 =>
        array(
            'id' => '458',
            'estado_id' => '10',
            'nome' => 'Alto Parnaíba',
        ),
        458 =>
        array(
            'id' => '459',
            'estado_id' => '10',
            'nome' => 'Amapá do Maranhão',
        ),
        459 =>
        array(
            'id' => '460',
            'estado_id' => '10',
            'nome' => 'Amarante do Maranhão',
        ),
        460 =>
        array(
            'id' => '461',
            'estado_id' => '10',
            'nome' => 'Anajatuba',
        ),
        461 =>
        array(
            'id' => '462',
            'estado_id' => '10',
            'nome' => 'Anapurus',
        ),
        462 =>
        array(
            'id' => '463',
            'estado_id' => '10',
            'nome' => 'Apicum-Açu',
        ),
        463 =>
        array(
            'id' => '464',
            'estado_id' => '10',
            'nome' => 'Araguanã',
        ),
        464 =>
        array(
            'id' => '465',
            'estado_id' => '10',
            'nome' => 'Araioses',
        ),
        465 =>
        array(
            'id' => '466',
            'estado_id' => '10',
            'nome' => 'Arame',
        ),
        466 =>
        array(
            'id' => '467',
            'estado_id' => '10',
            'nome' => 'Arari',
        ),
        467 =>
        array(
            'id' => '468',
            'estado_id' => '10',
            'nome' => 'Axixá',
        ),
        468 =>
        array(
            'id' => '469',
            'estado_id' => '10',
            'nome' => 'Bacabal',
        ),
        469 =>
        array(
            'id' => '470',
            'estado_id' => '10',
            'nome' => 'Bacabeira',
        ),
        470 =>
        array(
            'id' => '471',
            'estado_id' => '10',
            'nome' => 'Bacuri',
        ),
        471 =>
        array(
            'id' => '472',
            'estado_id' => '10',
            'nome' => 'Bacurituba',
        ),
        472 =>
        array(
            'id' => '473',
            'estado_id' => '10',
            'nome' => 'Balsas',
        ),
        473 =>
        array(
            'id' => '474',
            'estado_id' => '10',
            'nome' => 'Barão de Grajaú',
        ),
        474 =>
        array(
            'id' => '475',
            'estado_id' => '10',
            'nome' => 'Barra do Corda',
        ),
        475 =>
        array(
            'id' => '476',
            'estado_id' => '10',
            'nome' => 'Barreirinhas',
        ),
        476 =>
        array(
            'id' => '477',
            'estado_id' => '10',
            'nome' => 'Belágua',
        ),
        477 =>
        array(
            'id' => '478',
            'estado_id' => '10',
            'nome' => 'Bela Vista do Maranhão',
        ),
        478 =>
        array(
            'id' => '479',
            'estado_id' => '10',
            'nome' => 'Benedito Leite',
        ),
        479 =>
        array(
            'id' => '480',
            'estado_id' => '10',
            'nome' => 'Bequimão',
        ),
        480 =>
        array(
            'id' => '481',
            'estado_id' => '10',
            'nome' => 'Bernardo do Mearim',
        ),
        481 =>
        array(
            'id' => '482',
            'estado_id' => '10',
            'nome' => 'Boa Vista do Gurupi',
        ),
        482 =>
        array(
            'id' => '483',
            'estado_id' => '10',
            'nome' => 'Bom Jardim',
        ),
        483 =>
        array(
            'id' => '484',
            'estado_id' => '10',
            'nome' => 'Bom Jesus das Selvas',
        ),
        484 =>
        array(
            'id' => '485',
            'estado_id' => '10',
            'nome' => 'Bom Lugar',
        ),
        485 =>
        array(
            'id' => '486',
            'estado_id' => '10',
            'nome' => 'Brejo',
        ),
        486 =>
        array(
            'id' => '487',
            'estado_id' => '10',
            'nome' => 'Brejo de Areia',
        ),
        487 =>
        array(
            'id' => '488',
            'estado_id' => '10',
            'nome' => 'Buriti',
        ),
        488 =>
        array(
            'id' => '489',
            'estado_id' => '10',
            'nome' => 'Buriti Bravo',
        ),
        489 =>
        array(
            'id' => '490',
            'estado_id' => '10',
            'nome' => 'Buriticupu',
        ),
        490 =>
        array(
            'id' => '491',
            'estado_id' => '10',
            'nome' => 'Buritirana',
        ),
        491 =>
        array(
            'id' => '492',
            'estado_id' => '10',
            'nome' => 'Cachoeira Grande',
        ),
        492 =>
        array(
            'id' => '493',
            'estado_id' => '10',
            'nome' => 'Cajapió',
        ),
        493 =>
        array(
            'id' => '494',
            'estado_id' => '10',
            'nome' => 'Cajari',
        ),
        494 =>
        array(
            'id' => '495',
            'estado_id' => '10',
            'nome' => 'Campestre do Maranhão',
        ),
        495 =>
        array(
            'id' => '496',
            'estado_id' => '10',
            'nome' => 'Cândido Mendes',
        ),
        496 =>
        array(
            'id' => '497',
            'estado_id' => '10',
            'nome' => 'Cantanhede',
        ),
        497 =>
        array(
            'id' => '498',
            'estado_id' => '10',
            'nome' => 'Capinzal do Norte',
        ),
        498 =>
        array(
            'id' => '499',
            'estado_id' => '10',
            'nome' => 'Carolina',
        ),
        499 =>
        array(
            'id' => '500',
            'estado_id' => '10',
            'nome' => 'Carutapera',
        ),
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->insert($this->options);
    }
}
