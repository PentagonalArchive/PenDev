<?php
namespace Pentagonal\StarterApp;

class Domain
{
    /**
     * @see https://data.iana.org/TLD/tlds-alpha-by-domain.txt
     * @var array
     */
    protected $data_tlds = array(
        'aaa' => 'aaa',
        'aarp' => 'aarp',
        'abb' => 'abb',
        'abbott' => 'abbott',
        'abbvie' => 'abbvie',
        'abogado' => 'abogado',
        'abudhabi' => 'abudhabi',
        'ac' => 'ac',
        'academy' => 'academy',
        'accenture' => 'accenture',
        'accountant' => 'accountant',
        'accountants' => 'accountants',
        'aco' => 'aco',
        'active' => 'active',
        'actor' => 'actor',
        'ad' => 'ad',
        'adac' => 'adac',
        'ads' => 'ads',
        'adult' => 'adult',
        'ae' => 'ae',
        'aeg' => 'aeg',
        'aero' => 'aero',
        'aetna' => 'aetna',
        'af' => 'af',
        'afl' => 'afl',
        'ag' => 'ag',
        'agakhan' => 'agakhan',
        'agency' => 'agency',
        'ai' => 'ai',
        'aig' => 'aig',
        'airbus' => 'airbus',
        'airforce' => 'airforce',
        'airtel' => 'airtel',
        'akdn' => 'akdn',
        'al' => 'al',
        'alibaba' => 'alibaba',
        'alipay' => 'alipay',
        'allfinanz' => 'allfinanz',
        'ally' => 'ally',
        'alsace' => 'alsace',
        'alstom' => 'alstom',
        'am' => 'am',
        'amica' => 'amica',
        'amsterdam' => 'amsterdam',
        'analytics' => 'analytics',
        'android' => 'android',
        'anquan' => 'anquan',
        'ao' => 'ao',
        'apartments' => 'apartments',
        'app' => 'app',
        'apple' => 'apple',
        'aq' => 'aq',
        'aquarelle' => 'aquarelle',
        'ar' => 'ar',
        'aramco' => 'aramco',
        'archi' => 'archi',
        'army' => 'army',
        'arpa' => 'arpa',
        'arte' => 'arte',
        'as' => 'as',
        'asia' => 'asia',
        'associates' => 'associates',
        'at' => 'at',
        'attorney' => 'attorney',
        'au' => 'au',
        'auction' => 'auction',
        'audi' => 'audi',
        'audible' => 'audible',
        'audio' => 'audio',
        'author' => 'author',
        'auto' => 'auto',
        'autos' => 'autos',
        'avianca' => 'avianca',
        'aw' => 'aw',
        'aws' => 'aws',
        'ax' => 'ax',
        'axa' => 'axa',
        'az' => 'az',
        'azure' => 'azure',
        'ba' => 'ba',
        'baby' => 'baby',
        'baidu' => 'baidu',
        'band' => 'band',
        'bank' => 'bank',
        'bar' => 'bar',
        'barcelona' => 'barcelona',
        'barclaycard' => 'barclaycard',
        'barclays' => 'barclays',
        'barefoot' => 'barefoot',
        'bargains' => 'bargains',
        'bauhaus' => 'bauhaus',
        'bayern' => 'bayern',
        'bb' => 'bb',
        'bbc' => 'bbc',
        'bbva' => 'bbva',
        'bcg' => 'bcg',
        'bcn' => 'bcn',
        'bd' => 'bd',
        'be' => 'be',
        'beats' => 'beats',
        'beer' => 'beer',
        'bentley' => 'bentley',
        'berlin' => 'berlin',
        'best' => 'best',
        'bet' => 'bet',
        'bf' => 'bf',
        'bg' => 'bg',
        'bh' => 'bh',
        'bharti' => 'bharti',
        'bi' => 'bi',
        'bible' => 'bible',
        'bid' => 'bid',
        'bike' => 'bike',
        'bing' => 'bing',
        'bingo' => 'bingo',
        'bio' => 'bio',
        'biz' => 'biz',
        'bj' => 'bj',
        'black' => 'black',
        'blackfriday' => 'blackfriday',
        'blog' => 'blog',
        'bloomberg' => 'bloomberg',
        'blue' => 'blue',
        'bm' => 'bm',
        'bms' => 'bms',
        'bmw' => 'bmw',
        'bn' => 'bn',
        'bnl' => 'bnl',
        'bnpparibas' => 'bnpparibas',
        'bo' => 'bo',
        'boats' => 'boats',
        'boehringer' => 'boehringer',
        'bom' => 'bom',
        'bond' => 'bond',
        'boo' => 'boo',
        'book' => 'book',
        'boots' => 'boots',
        'bosch' => 'bosch',
        'bostik' => 'bostik',
        'bot' => 'bot',
        'boutique' => 'boutique',
        'br' => 'br',
        'bradesco' => 'bradesco',
        'bridgestone' => 'bridgestone',
        'broadway' => 'broadway',
        'broker' => 'broker',
        'brother' => 'brother',
        'brussels' => 'brussels',
        'bs' => 'bs',
        'bt' => 'bt',
        'budapest' => 'budapest',
        'bugatti' => 'bugatti',
        'build' => 'build',
        'builders' => 'builders',
        'business' => 'business',
        'buy' => 'buy',
        'buzz' => 'buzz',
        'bv' => 'bv',
        'bw' => 'bw',
        'by' => 'by',
        'bz' => 'bz',
        'bzh' => 'bzh',
        'ca' => 'ca',
        'cab' => 'cab',
        'cafe' => 'cafe',
        'cal' => 'cal',
        'call' => 'call',
        'camera' => 'camera',
        'camp' => 'camp',
        'cancerresearch' => 'cancerresearch',
        'canon' => 'canon',
        'capetown' => 'capetown',
        'capital' => 'capital',
        'car' => 'car',
        'caravan' => 'caravan',
        'cards' => 'cards',
        'care' => 'care',
        'career' => 'career',
        'careers' => 'careers',
        'cars' => 'cars',
        'cartier' => 'cartier',
        'casa' => 'casa',
        'cash' => 'cash',
        'casino' => 'casino',
        'cat' => 'cat',
        'catering' => 'catering',
        'cba' => 'cba',
        'cbn' => 'cbn',
        'cc' => 'cc',
        'cd' => 'cd',
        'ceb' => 'ceb',
        'center' => 'center',
        'ceo' => 'ceo',
        'cern' => 'cern',
        'cf' => 'cf',
        'cfa' => 'cfa',
        'cfd' => 'cfd',
        'cg' => 'cg',
        'ch' => 'ch',
        'chanel' => 'chanel',
        'channel' => 'channel',
        'chase' => 'chase',
        'chat' => 'chat',
        'cheap' => 'cheap',
        'chintai' => 'chintai',
        'chloe' => 'chloe',
        'christmas' => 'christmas',
        'chrome' => 'chrome',
        'church' => 'church',
        'ci' => 'ci',
        'cipriani' => 'cipriani',
        'circle' => 'circle',
        'cisco' => 'cisco',
        'citic' => 'citic',
        'city' => 'city',
        'cityeats' => 'cityeats',
        'ck' => 'ck',
        'cl' => 'cl',
        'claims' => 'claims',
        'cleaning' => 'cleaning',
        'click' => 'click',
        'clinic' => 'clinic',
        'clinique' => 'clinique',
        'clothing' => 'clothing',
        'cloud' => 'cloud',
        'club' => 'club',
        'clubmed' => 'clubmed',
        'cm' => 'cm',
        'cn' => 'cn',
        'co' => 'co',
        'coach' => 'coach',
        'codes' => 'codes',
        'coffee' => 'coffee',
        'college' => 'college',
        'cologne' => 'cologne',
        'com' => 'com',
        'commbank' => 'commbank',
        'community' => 'community',
        'company' => 'company',
        'compare' => 'compare',
        'computer' => 'computer',
        'comsec' => 'comsec',
        'condos' => 'condos',
        'construction' => 'construction',
        'consulting' => 'consulting',
        'contact' => 'contact',
        'contractors' => 'contractors',
        'cooking' => 'cooking',
        'cool' => 'cool',
        'coop' => 'coop',
        'corsica' => 'corsica',
        'country' => 'country',
        'coupon' => 'coupon',
        'coupons' => 'coupons',
        'courses' => 'courses',
        'cr' => 'cr',
        'credit' => 'credit',
        'creditcard' => 'creditcard',
        'creditunion' => 'creditunion',
        'cricket' => 'cricket',
        'crown' => 'crown',
        'crs' => 'crs',
        'cruises' => 'cruises',
        'csc' => 'csc',
        'cu' => 'cu',
        'cuisinella' => 'cuisinella',
        'cv' => 'cv',
        'cw' => 'cw',
        'cx' => 'cx',
        'cy' => 'cy',
        'cymru' => 'cymru',
        'cyou' => 'cyou',
        'cz' => 'cz',
        'dabur' => 'dabur',
        'dad' => 'dad',
        'dance' => 'dance',
        'date' => 'date',
        'dating' => 'dating',
        'datsun' => 'datsun',
        'day' => 'day',
        'dclk' => 'dclk',
        'dds' => 'dds',
        'de' => 'de',
        'deal' => 'deal',
        'dealer' => 'dealer',
        'deals' => 'deals',
        'degree' => 'degree',
        'delivery' => 'delivery',
        'dell' => 'dell',
        'deloitte' => 'deloitte',
        'delta' => 'delta',
        'democrat' => 'democrat',
        'dental' => 'dental',
        'dentist' => 'dentist',
        'desi' => 'desi',
        'design' => 'design',
        'dev' => 'dev',
        'dhl' => 'dhl',
        'diamonds' => 'diamonds',
        'diet' => 'diet',
        'digital' => 'digital',
        'direct' => 'direct',
        'directory' => 'directory',
        'discount' => 'discount',
        'dj' => 'dj',
        'dk' => 'dk',
        'dm' => 'dm',
        'dnp' => 'dnp',
        'do' => 'do',
        'docs' => 'docs',
        'dog' => 'dog',
        'doha' => 'doha',
        'domains' => 'domains',
        'dot' => 'dot',
        'download' => 'download',
        'drive' => 'drive',
        'dtv' => 'dtv',
        'dubai' => 'dubai',
        'dunlop' => 'dunlop',
        'dupont' => 'dupont',
        'durban' => 'durban',
        'dvag' => 'dvag',
        'dz' => 'dz',
        'earth' => 'earth',
        'eat' => 'eat',
        'ec' => 'ec',
        'edeka' => 'edeka',
        'edu' => 'edu',
        'education' => 'education',
        'ee' => 'ee',
        'eg' => 'eg',
        'email' => 'email',
        'emerck' => 'emerck',
        'energy' => 'energy',
        'engineer' => 'engineer',
        'engineering' => 'engineering',
        'enterprises' => 'enterprises',
        'epost' => 'epost',
        'epson' => 'epson',
        'equipment' => 'equipment',
        'er' => 'er',
        'ericsson' => 'ericsson',
        'erni' => 'erni',
        'es' => 'es',
        'esq' => 'esq',
        'estate' => 'estate',
        'et' => 'et',
        'eu' => 'eu',
        'eurovision' => 'eurovision',
        'eus' => 'eus',
        'events' => 'events',
        'everbank' => 'everbank',
        'exchange' => 'exchange',
        'expert' => 'expert',
        'exposed' => 'exposed',
        'express' => 'express',
        'extraspace' => 'extraspace',
        'fage' => 'fage',
        'fail' => 'fail',
        'fairwinds' => 'fairwinds',
        'faith' => 'faith',
        'family' => 'family',
        'fan' => 'fan',
        'fans' => 'fans',
        'farm' => 'farm',
        'fashion' => 'fashion',
        'fast' => 'fast',
        'feedback' => 'feedback',
        'ferrero' => 'ferrero',
        'fi' => 'fi',
        'film' => 'film',
        'final' => 'final',
        'finance' => 'finance',
        'financial' => 'financial',
        'fire' => 'fire',
        'firestone' => 'firestone',
        'firmdale' => 'firmdale',
        'fish' => 'fish',
        'fishing' => 'fishing',
        'fit' => 'fit',
        'fitness' => 'fitness',
        'fj' => 'fj',
        'fk' => 'fk',
        'flickr' => 'flickr',
        'flights' => 'flights',
        'flir' => 'flir',
        'florist' => 'florist',
        'flowers' => 'flowers',
        'flsmidth' => 'flsmidth',
        'fly' => 'fly',
        'fm' => 'fm',
        'fo' => 'fo',
        'foo' => 'foo',
        'football' => 'football',
        'ford' => 'ford',
        'forex' => 'forex',
        'forsale' => 'forsale',
        'forum' => 'forum',
        'foundation' => 'foundation',
        'fox' => 'fox',
        'fr' => 'fr',
        'fresenius' => 'fresenius',
        'frl' => 'frl',
        'frogans' => 'frogans',
        'frontier' => 'frontier',
        'ftr' => 'ftr',
        'fund' => 'fund',
        'furniture' => 'furniture',
        'futbol' => 'futbol',
        'fyi' => 'fyi',
        'ga' => 'ga',
        'gal' => 'gal',
        'gallery' => 'gallery',
        'gallo' => 'gallo',
        'gallup' => 'gallup',
        'game' => 'game',
        'games' => 'games',
        'garden' => 'garden',
        'gb' => 'gb',
        'gbiz' => 'gbiz',
        'gd' => 'gd',
        'gdn' => 'gdn',
        'ge' => 'ge',
        'gea' => 'gea',
        'gent' => 'gent',
        'genting' => 'genting',
        'gf' => 'gf',
        'gg' => 'gg',
        'ggee' => 'ggee',
        'gh' => 'gh',
        'gi' => 'gi',
        'gift' => 'gift',
        'gifts' => 'gifts',
        'gives' => 'gives',
        'giving' => 'giving',
        'gl' => 'gl',
        'glass' => 'glass',
        'gle' => 'gle',
        'global' => 'global',
        'globo' => 'globo',
        'gm' => 'gm',
        'gmail' => 'gmail',
        'gmbh' => 'gmbh',
        'gmo' => 'gmo',
        'gmx' => 'gmx',
        'gn' => 'gn',
        'gold' => 'gold',
        'goldpoint' => 'goldpoint',
        'golf' => 'golf',
        'goo' => 'goo',
        'goodyear' => 'goodyear',
        'goog' => 'goog',
        'google' => 'google',
        'gop' => 'gop',
        'got' => 'got',
        'gov' => 'gov',
        'gp' => 'gp',
        'gq' => 'gq',
        'gr' => 'gr',
        'grainger' => 'grainger',
        'graphics' => 'graphics',
        'gratis' => 'gratis',
        'green' => 'green',
        'gripe' => 'gripe',
        'group' => 'group',
        'gs' => 'gs',
        'gt' => 'gt',
        'gu' => 'gu',
        'guardian' => 'guardian',
        'gucci' => 'gucci',
        'guge' => 'guge',
        'guide' => 'guide',
        'guitars' => 'guitars',
        'guru' => 'guru',
        'gw' => 'gw',
        'gy' => 'gy',
        'hamburg' => 'hamburg',
        'hangout' => 'hangout',
        'haus' => 'haus',
        'hdfcbank' => 'hdfcbank',
        'health' => 'health',
        'healthcare' => 'healthcare',
        'help' => 'help',
        'helsinki' => 'helsinki',
        'here' => 'here',
        'hermes' => 'hermes',
        'hiphop' => 'hiphop',
        'hisamitsu' => 'hisamitsu',
        'hitachi' => 'hitachi',
        'hiv' => 'hiv',
        'hk' => 'hk',
        'hkt' => 'hkt',
        'hm' => 'hm',
        'hn' => 'hn',
        'hockey' => 'hockey',
        'holdings' => 'holdings',
        'holiday' => 'holiday',
        'homedepot' => 'homedepot',
        'homes' => 'homes',
        'honda' => 'honda',
        'horse' => 'horse',
        'host' => 'host',
        'hosting' => 'hosting',
        'hoteles' => 'hoteles',
        'hotmail' => 'hotmail',
        'house' => 'house',
        'how' => 'how',
        'hr' => 'hr',
        'hsbc' => 'hsbc',
        'ht' => 'ht',
        'htc' => 'htc',
        'hu' => 'hu',
        'hyundai' => 'hyundai',
        'ibm' => 'ibm',
        'icbc' => 'icbc',
        'ice' => 'ice',
        'icu' => 'icu',
        'id' => 'id',
        'ie' => 'ie',
        'ifm' => 'ifm',
        'iinet' => 'iinet',
        'il' => 'il',
        'im' => 'im',
        'imamat' => 'imamat',
        'imdb' => 'imdb',
        'immo' => 'immo',
        'immobilien' => 'immobilien',
        'in' => 'in',
        'industries' => 'industries',
        'infiniti' => 'infiniti',
        'info' => 'info',
        'ing' => 'ing',
        'ink' => 'ink',
        'institute' => 'institute',
        'insurance' => 'insurance',
        'insure' => 'insure',
        'int' => 'int',
        'international' => 'international',
        'investments' => 'investments',
        'io' => 'io',
        'ipiranga' => 'ipiranga',
        'iq' => 'iq',
        'ir' => 'ir',
        'irish' => 'irish',
        'is' => 'is',
        'iselect' => 'iselect',
        'ismaili' => 'ismaili',
        'ist' => 'ist',
        'istanbul' => 'istanbul',
        'it' => 'it',
        'itau' => 'itau',
        'iwc' => 'iwc',
        'jaguar' => 'jaguar',
        'java' => 'java',
        'jcb' => 'jcb',
        'jcp' => 'jcp',
        'je' => 'je',
        'jetzt' => 'jetzt',
        'jewelry' => 'jewelry',
        'jlc' => 'jlc',
        'jll' => 'jll',
        'jm' => 'jm',
        'jmp' => 'jmp',
        'jnj' => 'jnj',
        'jo' => 'jo',
        'jobs' => 'jobs',
        'joburg' => 'joburg',
        'jot' => 'jot',
        'joy' => 'joy',
        'jp' => 'jp',
        'jpmorgan' => 'jpmorgan',
        'jprs' => 'jprs',
        'juegos' => 'juegos',
        'kaufen' => 'kaufen',
        'kddi' => 'kddi',
        'ke' => 'ke',
        'kerryhotels' => 'kerryhotels',
        'kerrylogistics' => 'kerrylogistics',
        'kerryproperties' => 'kerryproperties',
        'kfh' => 'kfh',
        'kg' => 'kg',
        'kh' => 'kh',
        'ki' => 'ki',
        'kia' => 'kia',
        'kim' => 'kim',
        'kinder' => 'kinder',
        'kindle' => 'kindle',
        'kitchen' => 'kitchen',
        'kiwi' => 'kiwi',
        'km' => 'km',
        'kn' => 'kn',
        'koeln' => 'koeln',
        'komatsu' => 'komatsu',
        'kosher' => 'kosher',
        'kp' => 'kp',
        'kpmg' => 'kpmg',
        'kpn' => 'kpn',
        'kr' => 'kr',
        'krd' => 'krd',
        'kred' => 'kred',
        'kuokgroup' => 'kuokgroup',
        'kw' => 'kw',
        'ky' => 'ky',
        'kyoto' => 'kyoto',
        'kz' => 'kz',
        'la' => 'la',
        'lacaixa' => 'lacaixa',
        'lamborghini' => 'lamborghini',
        'lamer' => 'lamer',
        'lancaster' => 'lancaster',
        'land' => 'land',
        'landrover' => 'landrover',
        'lanxess' => 'lanxess',
        'lasalle' => 'lasalle',
        'lat' => 'lat',
        'latrobe' => 'latrobe',
        'law' => 'law',
        'lawyer' => 'lawyer',
        'lb' => 'lb',
        'lc' => 'lc',
        'lds' => 'lds',
        'lease' => 'lease',
        'leclerc' => 'leclerc',
        'legal' => 'legal',
        'lexus' => 'lexus',
        'lgbt' => 'lgbt',
        'li' => 'li',
        'liaison' => 'liaison',
        'lidl' => 'lidl',
        'life' => 'life',
        'lifeinsurance' => 'lifeinsurance',
        'lifestyle' => 'lifestyle',
        'lighting' => 'lighting',
        'like' => 'like',
        'limited' => 'limited',
        'limo' => 'limo',
        'lincoln' => 'lincoln',
        'linde' => 'linde',
        'link' => 'link',
        'lipsy' => 'lipsy',
        'live' => 'live',
        'living' => 'living',
        'lixil' => 'lixil',
        'lk' => 'lk',
        'loan' => 'loan',
        'loans' => 'loans',
        'locker' => 'locker',
        'locus' => 'locus',
        'lol' => 'lol',
        'london' => 'london',
        'lotte' => 'lotte',
        'lotto' => 'lotto',
        'love' => 'love',
        'lr' => 'lr',
        'ls' => 'ls',
        'lt' => 'lt',
        'ltd' => 'ltd',
        'ltda' => 'ltda',
        'lu' => 'lu',
        'lupin' => 'lupin',
        'luxe' => 'luxe',
        'luxury' => 'luxury',
        'lv' => 'lv',
        'ly' => 'ly',
        'ma' => 'ma',
        'madrid' => 'madrid',
        'maif' => 'maif',
        'maison' => 'maison',
        'makeup' => 'makeup',
        'man' => 'man',
        'management' => 'management',
        'mango' => 'mango',
        'market' => 'market',
        'marketing' => 'marketing',
        'markets' => 'markets',
        'marriott' => 'marriott',
        'mattel' => 'mattel',
        'mba' => 'mba',
        'mc' => 'mc',
        'md' => 'md',
        'me' => 'me',
        'med' => 'med',
        'media' => 'media',
        'meet' => 'meet',
        'melbourne' => 'melbourne',
        'meme' => 'meme',
        'memorial' => 'memorial',
        'men' => 'men',
        'menu' => 'menu',
        'meo' => 'meo',
        'metlife' => 'metlife',
        'mg' => 'mg',
        'mh' => 'mh',
        'miami' => 'miami',
        'microsoft' => 'microsoft',
        'mil' => 'mil',
        'mini' => 'mini',
        'mk' => 'mk',
        'ml' => 'ml',
        'mlb' => 'mlb',
        'mls' => 'mls',
        'mm' => 'mm',
        'mma' => 'mma',
        'mn' => 'mn',
        'mo' => 'mo',
        'mobi' => 'mobi',
        'mobily' => 'mobily',
        'moda' => 'moda',
        'moe' => 'moe',
        'moi' => 'moi',
        'mom' => 'mom',
        'monash' => 'monash',
        'money' => 'money',
        'montblanc' => 'montblanc',
        'mormon' => 'mormon',
        'mortgage' => 'mortgage',
        'moscow' => 'moscow',
        'motorcycles' => 'motorcycles',
        'mov' => 'mov',
        'movie' => 'movie',
        'movistar' => 'movistar',
        'mp' => 'mp',
        'mq' => 'mq',
        'mr' => 'mr',
        'ms' => 'ms',
        'mt' => 'mt',
        'mtn' => 'mtn',
        'mtpc' => 'mtpc',
        'mtr' => 'mtr',
        'mu' => 'mu',
        'museum' => 'museum',
        'mutual' => 'mutual',
        'mutuelle' => 'mutuelle',
        'mv' => 'mv',
        'mw' => 'mw',
        'mx' => 'mx',
        'my' => 'my',
        'mz' => 'mz',
        'na' => 'na',
        'nadex' => 'nadex',
        'nagoya' => 'nagoya',
        'name' => 'name',
        'natura' => 'natura',
        'navy' => 'navy',
        'nc' => 'nc',
        'ne' => 'ne',
        'nec' => 'nec',
        'net' => 'net',
        'netbank' => 'netbank',
        'netflix' => 'netflix',
        'network' => 'network',
        'neustar' => 'neustar',
        'new' => 'new',
        'news' => 'news',
        'next' => 'next',
        'nextdirect' => 'nextdirect',
        'nexus' => 'nexus',
        'nf' => 'nf',
        'ng' => 'ng',
        'ngo' => 'ngo',
        'nhk' => 'nhk',
        'ni' => 'ni',
        'nico' => 'nico',
        'nikon' => 'nikon',
        'ninja' => 'ninja',
        'nissan' => 'nissan',
        'nissay' => 'nissay',
        'nl' => 'nl',
        'no' => 'no',
        'nokia' => 'nokia',
        'northwesternmutual' => 'northwesternmutual',
        'norton' => 'norton',
        'now' => 'now',
        'nowruz' => 'nowruz',
        'nowtv' => 'nowtv',
        'np' => 'np',
        'nr' => 'nr',
        'nra' => 'nra',
        'nrw' => 'nrw',
        'ntt' => 'ntt',
        'nu' => 'nu',
        'nyc' => 'nyc',
        'nz' => 'nz',
        'obi' => 'obi',
        'office' => 'office',
        'okinawa' => 'okinawa',
        'olayan' => 'olayan',
        'olayangroup' => 'olayangroup',
        'ollo' => 'ollo',
        'om' => 'om',
        'omega' => 'omega',
        'one' => 'one',
        'ong' => 'ong',
        'onl' => 'onl',
        'online' => 'online',
        'ooo' => 'ooo',
        'oracle' => 'oracle',
        'orange' => 'orange',
        'org' => 'org',
        'organic' => 'organic',
        'origins' => 'origins',
        'osaka' => 'osaka',
        'otsuka' => 'otsuka',
        'ott' => 'ott',
        'ovh' => 'ovh',
        'pa' => 'pa',
        'page' => 'page',
        'pamperedchef' => 'pamperedchef',
        'panerai' => 'panerai',
        'paris' => 'paris',
        'pars' => 'pars',
        'partners' => 'partners',
        'parts' => 'parts',
        'party' => 'party',
        'passagens' => 'passagens',
        'pccw' => 'pccw',
        'pe' => 'pe',
        'pet' => 'pet',
        'pf' => 'pf',
        'pg' => 'pg',
        'ph' => 'ph',
        'pharmacy' => 'pharmacy',
        'philips' => 'philips',
        'photo' => 'photo',
        'photography' => 'photography',
        'photos' => 'photos',
        'physio' => 'physio',
        'piaget' => 'piaget',
        'pics' => 'pics',
        'pictet' => 'pictet',
        'pictures' => 'pictures',
        'pid' => 'pid',
        'pin' => 'pin',
        'ping' => 'ping',
        'pink' => 'pink',
        'pioneer' => 'pioneer',
        'pizza' => 'pizza',
        'pk' => 'pk',
        'pl' => 'pl',
        'place' => 'place',
        'play' => 'play',
        'playstation' => 'playstation',
        'plumbing' => 'plumbing',
        'plus' => 'plus',
        'pm' => 'pm',
        'pn' => 'pn',
        'pohl' => 'pohl',
        'poker' => 'poker',
        'porn' => 'porn',
        'post' => 'post',
        'pr' => 'pr',
        'praxi' => 'praxi',
        'press' => 'press',
        'prime' => 'prime',
        'pro' => 'pro',
        'prod' => 'prod',
        'productions' => 'productions',
        'prof' => 'prof',
        'progressive' => 'progressive',
        'promo' => 'promo',
        'properties' => 'properties',
        'property' => 'property',
        'protection' => 'protection',
        'ps' => 'ps',
        'pt' => 'pt',
        'pub' => 'pub',
        'pw' => 'pw',
        'pwc' => 'pwc',
        'py' => 'py',
        'qa' => 'qa',
        'qpon' => 'qpon',
        'quebec' => 'quebec',
        'quest' => 'quest',
        'racing' => 'racing',
        're' => 're',
        'read' => 'read',
        'realestate' => 'realestate',
        'realtor' => 'realtor',
        'realty' => 'realty',
        'recipes' => 'recipes',
        'red' => 'red',
        'redstone' => 'redstone',
        'redumbrella' => 'redumbrella',
        'rehab' => 'rehab',
        'reise' => 'reise',
        'reisen' => 'reisen',
        'reit' => 'reit',
        'ren' => 'ren',
        'rent' => 'rent',
        'rentals' => 'rentals',
        'repair' => 'repair',
        'report' => 'report',
        'republican' => 'republican',
        'rest' => 'rest',
        'restaurant' => 'restaurant',
        'review' => 'review',
        'reviews' => 'reviews',
        'rexroth' => 'rexroth',
        'rich' => 'rich',
        'richardli' => 'richardli',
        'ricoh' => 'ricoh',
        'rio' => 'rio',
        'rip' => 'rip',
        'ro' => 'ro',
        'rocher' => 'rocher',
        'rocks' => 'rocks',
        'rodeo' => 'rodeo',
        'room' => 'room',
        'rs' => 'rs',
        'rsvp' => 'rsvp',
        'ru' => 'ru',
        'ruhr' => 'ruhr',
        'run' => 'run',
        'rw' => 'rw',
        'rwe' => 'rwe',
        'ryukyu' => 'ryukyu',
        'sa' => 'sa',
        'saarland' => 'saarland',
        'safe' => 'safe',
        'safety' => 'safety',
        'sakura' => 'sakura',
        'sale' => 'sale',
        'salon' => 'salon',
        'samsung' => 'samsung',
        'sandvik' => 'sandvik',
        'sandvikcoromant' => 'sandvikcoromant',
        'sanofi' => 'sanofi',
        'sap' => 'sap',
        'sapo' => 'sapo',
        'sarl' => 'sarl',
        'sas' => 'sas',
        'save' => 'save',
        'saxo' => 'saxo',
        'sb' => 'sb',
        'sbi' => 'sbi',
        'sbs' => 'sbs',
        'sc' => 'sc',
        'sca' => 'sca',
        'scb' => 'scb',
        'schaeffler' => 'schaeffler',
        'schmidt' => 'schmidt',
        'scholarships' => 'scholarships',
        'school' => 'school',
        'schule' => 'schule',
        'schwarz' => 'schwarz',
        'science' => 'science',
        'scor' => 'scor',
        'scot' => 'scot',
        'sd' => 'sd',
        'se' => 'se',
        'seat' => 'seat',
        'security' => 'security',
        'seek' => 'seek',
        'select' => 'select',
        'sener' => 'sener',
        'services' => 'services',
        'seven' => 'seven',
        'sew' => 'sew',
        'sex' => 'sex',
        'sexy' => 'sexy',
        'sfr' => 'sfr',
        'sg' => 'sg',
        'sh' => 'sh',
        'sharp' => 'sharp',
        'shaw' => 'shaw',
        'shell' => 'shell',
        'shia' => 'shia',
        'shiksha' => 'shiksha',
        'shoes' => 'shoes',
        'shop' => 'shop',
        'shouji' => 'shouji',
        'show' => 'show',
        'shriram' => 'shriram',
        'si' => 'si',
        'silk' => 'silk',
        'sina' => 'sina',
        'singles' => 'singles',
        'site' => 'site',
        'sj' => 'sj',
        'sk' => 'sk',
        'ski' => 'ski',
        'skin' => 'skin',
        'sky' => 'sky',
        'skype' => 'skype',
        'sl' => 'sl',
        'sm' => 'sm',
        'smile' => 'smile',
        'sn' => 'sn',
        'sncf' => 'sncf',
        'so' => 'so',
        'soccer' => 'soccer',
        'social' => 'social',
        'softbank' => 'softbank',
        'software' => 'software',
        'sohu' => 'sohu',
        'solar' => 'solar',
        'solutions' => 'solutions',
        'song' => 'song',
        'sony' => 'sony',
        'soy' => 'soy',
        'space' => 'space',
        'spiegel' => 'spiegel',
        'spot' => 'spot',
        'spreadbetting' => 'spreadbetting',
        'sr' => 'sr',
        'srl' => 'srl',
        'st' => 'st',
        'stada' => 'stada',
        'star' => 'star',
        'starhub' => 'starhub',
        'statebank' => 'statebank',
        'statefarm' => 'statefarm',
        'statoil' => 'statoil',
        'stc' => 'stc',
        'stcgroup' => 'stcgroup',
        'stockholm' => 'stockholm',
        'storage' => 'storage',
        'store' => 'store',
        'stream' => 'stream',
        'studio' => 'studio',
        'study' => 'study',
        'style' => 'style',
        'su' => 'su',
        'sucks' => 'sucks',
        'supplies' => 'supplies',
        'supply' => 'supply',
        'support' => 'support',
        'surf' => 'surf',
        'surgery' => 'surgery',
        'suzuki' => 'suzuki',
        'sv' => 'sv',
        'swatch' => 'swatch',
        'swiss' => 'swiss',
        'sx' => 'sx',
        'sy' => 'sy',
        'sydney' => 'sydney',
        'symantec' => 'symantec',
        'systems' => 'systems',
        'sz' => 'sz',
        'tab' => 'tab',
        'taipei' => 'taipei',
        'talk' => 'talk',
        'taobao' => 'taobao',
        'tatamotors' => 'tatamotors',
        'tatar' => 'tatar',
        'tattoo' => 'tattoo',
        'tax' => 'tax',
        'taxi' => 'taxi',
        'tc' => 'tc',
        'tci' => 'tci',
        'td' => 'td',
        'tdk' => 'tdk',
        'team' => 'team',
        'tech' => 'tech',
        'technology' => 'technology',
        'tel' => 'tel',
        'telecity' => 'telecity',
        'telefonica' => 'telefonica',
        'temasek' => 'temasek',
        'tennis' => 'tennis',
        'teva' => 'teva',
        'tf' => 'tf',
        'tg' => 'tg',
        'th' => 'th',
        'thd' => 'thd',
        'theater' => 'theater',
        'theatre' => 'theatre',
        'tickets' => 'tickets',
        'tienda' => 'tienda',
        'tiffany' => 'tiffany',
        'tips' => 'tips',
        'tires' => 'tires',
        'tirol' => 'tirol',
        'tj' => 'tj',
        'tk' => 'tk',
        'tl' => 'tl',
        'tm' => 'tm',
        'tmall' => 'tmall',
        'tn' => 'tn',
        'to' => 'to',
        'today' => 'today',
        'tokyo' => 'tokyo',
        'tools' => 'tools',
        'top' => 'top',
        'toray' => 'toray',
        'toshiba' => 'toshiba',
        'total' => 'total',
        'tours' => 'tours',
        'town' => 'town',
        'toyota' => 'toyota',
        'toys' => 'toys',
        'tr' => 'tr',
        'trade' => 'trade',
        'trading' => 'trading',
        'training' => 'training',
        'travel' => 'travel',
        'travelers' => 'travelers',
        'travelersinsurance' => 'travelersinsurance',
        'trust' => 'trust',
        'trv' => 'trv',
        'tt' => 'tt',
        'tube' => 'tube',
        'tui' => 'tui',
        'tunes' => 'tunes',
        'tushu' => 'tushu',
        'tv' => 'tv',
        'tvs' => 'tvs',
        'tw' => 'tw',
        'tz' => 'tz',
        'ua' => 'ua',
        'ubs' => 'ubs',
        'ug' => 'ug',
        'uk' => 'uk',
        'unicom' => 'unicom',
        'university' => 'university',
        'uno' => 'uno',
        'uol' => 'uol',
        'ups' => 'ups',
        'us' => 'us',
        'uy' => 'uy',
        'uz' => 'uz',
        'va' => 'va',
        'vacations' => 'vacations',
        'vana' => 'vana',
        'vc' => 'vc',
        've' => 've',
        'vegas' => 'vegas',
        'ventures' => 'ventures',
        'verisign' => 'verisign',
        'versicherung' => 'versicherung',
        'vet' => 'vet',
        'vg' => 'vg',
        'vi' => 'vi',
        'viajes' => 'viajes',
        'video' => 'video',
        'vig' => 'vig',
        'viking' => 'viking',
        'villas' => 'villas',
        'vin' => 'vin',
        'vip' => 'vip',
        'virgin' => 'virgin',
        'vision' => 'vision',
        'vista' => 'vista',
        'vistaprint' => 'vistaprint',
        'viva' => 'viva',
        'vlaanderen' => 'vlaanderen',
        'vn' => 'vn',
        'vodka' => 'vodka',
        'volkswagen' => 'volkswagen',
        'vote' => 'vote',
        'voting' => 'voting',
        'voto' => 'voto',
        'voyage' => 'voyage',
        'vu' => 'vu',
        'vuelos' => 'vuelos',
        'wales' => 'wales',
        'walter' => 'walter',
        'wang' => 'wang',
        'wanggou' => 'wanggou',
        'warman' => 'warman',
        'watch' => 'watch',
        'watches' => 'watches',
        'weather' => 'weather',
        'weatherchannel' => 'weatherchannel',
        'webcam' => 'webcam',
        'weber' => 'weber',
        'website' => 'website',
        'wed' => 'wed',
        'wedding' => 'wedding',
        'weibo' => 'weibo',
        'weir' => 'weir',
        'wf' => 'wf',
        'whoswho' => 'whoswho',
        'wien' => 'wien',
        'wiki' => 'wiki',
        'williamhill' => 'williamhill',
        'win' => 'win',
        'windows' => 'windows',
        'wine' => 'wine',
        'wme' => 'wme',
        'wolterskluwer' => 'wolterskluwer',
        'work' => 'work',
        'works' => 'works',
        'world' => 'world',
        'ws' => 'ws',
        'wtc' => 'wtc',
        'wtf' => 'wtf',
        'xbox' => 'xbox',
        'xerox' => 'xerox',
        'xihuan' => 'xihuan',
        'xin' => 'xin',
        'xn--11b4c3d' => 'कॉम',
        'xn--1ck2e1b' => 'セール',
        'xn--1qqw23a' => '佛山',
        'xn--30rr7y' => '慈善',
        'xn--3bst00m' => '集团',
        'xn--3ds443g' => '在线',
        'xn--3e0b707e' => '한국',
        'xn--3pxu8k' => '点看',
        'xn--42c2d9a' => 'คอม',
        'xn--45brj9c' => 'ভারত',
        'xn--45q11c' => '八卦',
        'xn--4gbrim' => 'موقع',
        'xn--55qw42g' => '公益',
        'xn--55qx5d' => '公司',
        'xn--5tzm5g' => '网站',
        'xn--6frz82g' => '移动',
        'xn--6qq986b3xl' => '我爱你',
        'xn--80adxhks' => 'москва',
        'xn--80ao21a' => 'қаз',
        'xn--80asehdb' => 'онлайн',
        'xn--80aswg' => 'сайт',
        'xn--8y0a063a' => '联通',
        'xn--90a3ac' => 'срб',
        'xn--90ais' => 'бел',
        'xn--9dbq2a' => 'קום',
        'xn--9et52u' => '时尚',
        'xn--9krt00a' => '微博',
        'xn--b4w605ferd' => '淡马锡',
        'xn--bck1b9a5dre4c' => 'ファッション',
        'xn--c1avg' => 'орг',
        'xn--c2br7g' => 'नेट',
        'xn--cck2b3b' => 'ストア',
        'xn--cg4bki' => '삼성',
        'xn--clchc0ea0b2g2a9gcd' => 'சிங்கப்பூர்',
        'xn--czr694b' => '商标',
        'xn--czrs0t' => '商店',
        'xn--czru2d' => '商城',
        'xn--d1acj3b' => 'дети',
        'xn--d1alf' => 'мкд',
        'xn--e1a4c' => 'ею',
        'xn--eckvdtc9d' => 'ポイント',
        'xn--efvy88h' => '新闻',
        'xn--estv75g' => '工行',
        'xn--fct429k' => '家電',
        'xn--fhbei' => 'كوم',
        'xn--fiq228c5hs' => '中文网',
        'xn--fiq64b' => '中信',
        'xn--fiqs8s' => '中国',
        'xn--fiqz9s' => '中國',
        'xn--fjq720a' => '娱乐',
        'xn--flw351e' => '谷歌',
        'xn--fpcrj9c3d' => 'భారత్',
        'xn--fzc2c9e2c' => 'ලංකා',
        'xn--fzys8d69uvgm' => '電訊盈科',
        'xn--g2xx48c' => '购物',
        'xn--gckr3f0f' => 'クラウド',
        'xn--gecrj9c' => 'ભારત',
        'xn--h2brj9c' => 'भारत',
        'xn--hxt814e' => '网店',
        'xn--i1b6b1a6a2e' => 'संगठन',
        'xn--imr513n' => '餐厅',
        'xn--io0a7i' => '网络',
        'xn--j1aef' => 'ком',
        'xn--j1amh' => 'укр',
        'xn--j6w193g' => '香港',
        'xn--jlq61u9w7b' => '诺基亚',
        'xn--jvr189m' => '食品',
        'xn--kcrx77d1x4a' => '飞利浦',
        'xn--kprw13d' => '台湾',
        'xn--kpry57d' => '台灣',
        'xn--kpu716f' => '手表',
        'xn--kput3i' => '手机',
        'xn--l1acc' => 'мон',
        'xn--lgbbat1ad8j' => 'الجزائر',
        'xn--mgb9awbf' => 'عمان',
        'xn--mgba3a3ejt' => 'ارامكو',
        'xn--mgba3a4f16a' => 'ایران',
        'xn--mgba7c0bbn0a' => 'العليان',
        'xn--mgbaam7a8h' => 'امارات',
        'xn--mgbab2bd' => 'بازار',
        'xn--mgbayh7gpa' => 'الاردن',
        'xn--mgbb9fbpob' => 'موبايلي',
        'xn--mgbbh1a71e' => 'بھارت',
        'xn--mgbc0a9azcg' => 'المغرب',
        'xn--mgbca7dzdo' => 'ابوظبي',
        'xn--mgberp4a5d4ar' => 'السعودية',
        'xn--mgbpl2fh' => 'سودان',
        'xn--mgbt3dhd' => 'همراه',
        'xn--mgbtx2b' => 'عراق',
        'xn--mgbx4cd0ab' => 'مليسيا',
        'xn--mix891f' => '澳門',
        'xn--mk1bu44c' => '닷컴',
        'xn--mxtq1m' => '政府',
        'xn--ngbc5azd' => 'شبكة',
        'xn--ngbe9e0a' => 'بيتك',
        'xn--node' => 'გე',
        'xn--nqv7f' => '机构',
        'xn--nqv7fs00ema' => '组织机构',
        'xn--nyqy26a' => '健康',
        'xn--o3cw4h' => 'ไทย',
        'xn--ogbpf8fl' => 'سورية',
        'xn--p1acf' => 'рус',
        'xn--p1ai' => 'рф',
        'xn--pbt977c' => '珠宝',
        'xn--pgbs0dh' => 'تونس',
        'xn--pssy2u' => '大拿',
        'xn--q9jyb4c' => 'みんな',
        'xn--qcka1pmc' => 'グーグル',
        'xn--qxam' => 'ελ',
        'xn--rhqv96g' => '世界',
        'xn--rovu88b' => '書籍',
        'xn--s9brj9c' => 'ਭਾਰਤ',
        'xn--ses554g' => '网址',
        'xn--t60b56a' => '닷넷',
        'xn--tckwe' => 'コム',
        'xn--unup4y' => '游戏',
        'xn--vermgensberater-ctb' => 'vermögensberater',
        'xn--vermgensberatung-pwb' => 'vermögensberatung',
        'xn--vhquv' => '企业',
        'xn--vuq861b' => '信息',
        'xn--w4r85el8fhu5dnra' => '嘉里大酒店',
        'xn--w4rs40l' => '嘉里',
        'xn--wgbh1c' => 'مصر',
        'xn--wgbl6a' => 'قطر',
        'xn--xhq521b' => '广东',
        'xn--xkc2al3hye2a' => 'இலங்கை',
        'xn--xkc2dl3a5ee0h' => 'இந்தியா',
        'xn--y9a3aq' => 'հայ',
        'xn--yfro4i67o' => '新加坡',
        'xn--ygbi2ammx' => 'فلسطين',
        'xn--zfr164b' => '政务',
        'xperia' => 'xperia',
        'xxx' => 'xxx',
        'xyz' => 'xyz',
        'yachts' => 'yachts',
        'yahoo' => 'yahoo',
        'yamaxun' => 'yamaxun',
        'yandex' => 'yandex',
        'ye' => 'ye',
        'yodobashi' => 'yodobashi',
        'yoga' => 'yoga',
        'yokohama' => 'yokohama',
        'you' => 'you',
        'youtube' => 'youtube',
        'yt' => 'yt',
        'yun' => 'yun',
        'za' => 'za',
        'zappos' => 'zappos',
        'zara' => 'zara',
        'zero' => 'zero',
        'zip' => 'zip',
        'zm' => 'zm',
        'zone' => 'zone',
        'zuerich' => 'zuerich',
        'zw' => 'zw',
    );

    /**
     * Cached Property
     *
     * @var array
     */
    private $cached = array();

    /**
     * Domain constructor.
     */
    public function __construct()
    {
    }

    /**
     * Search Extension
     *
     * @param string $ext
     *
     * @return bool|mixed
     */
    public function searchExtensionKey($ext)
    {
        if (!is_string($ext)) {
            return false;
        }

        // extension is more than two and less than 19 (max 18)
        if ($this->strlen($ext) > 18 || $this->strlen($ext) < 2) {
            return false;
        }
        $ext = $this->toLowerCase($ext);
        return array_search(implode('', $ext), $this->getAllTlds());
    }

    /**
     * @param string $ext
     *
     * @return bool|mixed
     */
    public function getExtensionFrom($ext)
    {
        if (!is_string($ext)) {
            return false;
        }
        // extension is more than two and less than 24 (max 18 for utf and 24 of idn)
        if ($this->strlen($ext) > 24 || $this->strlen($ext) < 2) {
            return false;
        }
        $ext = $this->toLowerCase($ext);
        if (strpos($ext, '--') === false) {
            // convert into idn ascii xn-- if possible
            $ext = idn_to_ascii($ext);
        }

        return isset($this->data_tlds[$ext]) ? $this->data_tlds[$ext] : false;
    }

    /**
     * bring it into lower case with mbstring all alphabetic characters
     * @see http://php.net/manual/en/function.mb-strtolower.php
     *
     * @param string $string
     *
     * @return string
     */
    public function toLowerCase($string)
    {
        if (!is_string($string)) {
            return $string;
        }
        return mb_strtolower($string, 'UTF-8');
    }

    /**
     * calculate length
     *
     * @see http://php.net/manual/en/function.mb-strlen.php
     *
     * @param string $string
     *
     * @return integer
     */
    public function strlen($string)
    {
        if (!is_string($string)) {
            return null;
        }
        return mb_strlen($string, 'UTF-8');
    }

    /**
     * Split domain name
     *
     * @param string $domainname
     *
     * @return array|bool
     */
    public function splitDomainAsArray($domainname)
    {
        if (!is_string($domainname) || strpos($domainname, '.') === false || trim($domainname) === '') {
            return false;
        }
        // if contain empty characters
        if (preg_match('/[\s]/', $domainname)) {
            return false;
        }

        /**
         * cached
         */
        if (isset($this->cached[$domainname])) {
            return $this->cached[$domainname];
        }

        // does not allow naming more than 255 characters
        if ($this->strlen($domainname) > 255) {
            $this->cached[$domainname] = false;
            return false;
        }

        // default
        $retval = array(
            'subdomain_name' => '',
            'domain_name' => '',
            'extension_name' => '',
        );
        $explode = explode('.', $domainname);
        // to lower case
        $retval['extension_name'] = $this->toLowerCase(end($explode));
        if ($this->strlen($retval['extension_name']) < 2
            || $this->strlen($retval['extension_name']) > 18
            // must not be a special characters
            || preg_match(
                '/[\~\!\@\#\$\%\^\&\*\(\)\_\+\`\-\=\\\\|\'\{\}\[\]\;\"\:\,\/\<\>\?\s]/',
                $retval['domain_name']
            ) !== 0
        ) {
            $this->cached[$domainname] = false;
            return false;
        }
        array_pop($explode);
        $retval['domain_name'] = $this->toLowerCase(end($explode));
        array_pop($explode);
        /**
         * minimum domain name must be 1 & max is 63
         */
        if (strlen($retval['domain_name']) < 1 // min 1 character
            // max 64 length chars
            || strlen($retval['domain_name']) > 63
            /**
             * does not allowed start or end with dash
             * @see http://tools.ietf.org/html/rfc1035
             * browse like IE (Internet Explorer) maybe warn if have some or an underscore contains of sub domain
             */
            || substr($retval['domain_name'], 0, 1) == '-'
            || substr($retval['domain_name'], -1) == '-'
            /**
             * if got match not valid character
             * must not be a special characters
             * allow dash
             */
            || preg_match(
                '/[\~\!\@\#\$\%\^\&\*\(\)\_\+\`\=\\\\|\'\{\}\[\]\;\"\:\,\/\<\>\?\s]/',
                $retval['domain_name']
            ) !== 0
        ) {
            $this->cached[$domainname] = false;
            return false;
        }
        if (count($explode) > 0) {
            $retval['subdomain_name'] = implode('.', $explode);
            if (mb_strlen($retval['subdomain_name'], 'UTF-8') < 1
                /**
                 * does not allowed start or end with dash
                 * @see http://tools.ietf.org/html/rfc1035
                 */
                || substr($retval['domain_name'], 0, 1) == '-'
                || substr($retval['domain_name'], -1) == '-'
                || strpos('..', $retval['subdomain_name']) !== false
                // if got match not valid character
                // must not be a special characters
                // sub domain allowed underscore and dash ([_-])
                || preg_match(
                    '/[\~\!\@\#\$\%\^\&\*\(\)\+\`\=\\\\|\'\{\}\[\]\;\"\:\,\/\<\>\?\s]/',
                    $retval['subdomain_name']
                ) !== 0
            ) {
                $this->cached[$domainname] = false;
                return false;
            }
        }

        // set cached
        $this->cached[$domainname] = $retval;
        return $retval;
    }

    /**
     * Split domain that domain must be utf8
     *
     * @param string $domainname
     *
     * @return array|bool
     */
    public function splitAsciiDomainArrayOnly($domainname)
    {
        $retval = $this->splitDomainAsArray($domainname);
        if (empty($retval)) {
            return false;
        }

        if (!preg_match(// if domain is ascii
            '/[^a-z]/i',
            $retval['extension_name']
        ) && (
                // if domain extension is not ws
            (
                ! in_array($retval['extension_name'], array("ws", "jp", "cn", "ca", "fr", "ar"))
                && (
                    // sub domain contains not valid character ascii
                    preg_match(
                        '/[^a-z0-9\_\-\.]/i',
                        $retval['subdomain_name']
                    )
                    // sub domain contains not valid characer ascii
                    || preg_match(
                        '/[^a-z0-9\-]/i',
                        $retval['domain_name']
                    )
                )
            )
            )
        ) {
            return false;
        }

        return $retval;
    }

    /**
     * @param string $domainname
     *
     * @return bool|string
     */
    public function getDomainFromExistencesArray($domainname)
    {
        $domain_detail = $this->splitDomainAsArray($domainname);
        if (!$domain_detail) {
            return false;
        }
        $ext = $domain_detail['extension_name'];
        if (($ext = $this->getExtensionFrom($ext)) === false) {
            return false;
        }
        // ws allow special characters
        if (! in_array($ext, array("ws", "jp", "cn", "ca", "fr", "ar")) && ! preg_match('/([^a-z])/', $ext)) {
            if ($domain_detail['subdomain_name'] == '') {
                unset($domain_detail['subdomain_name']);
            }
            return $this->splitAsciiDomainArrayOnly(implode('.', $domain_detail));
        } else {
            return $domain_detail;
        }
    }

    /**
     * validate if is valid Domainname
     *
     * @param string $domainname
     *
     * @return bool
     */
    public function isValidDomain($domainname)
    {
        $domain = $this->getDomainFromExistencesArray($domainname);
        return !empty($domain['domain_name']) && trim($domain['subdomain_name']) == '' ? true : false;
    }

    /**
     * validate if is valid domain name with sub domain
     *
     * @param string $domainname
     *
     * @return bool
     */
    public function isValidDomainOrSubdomain($domainname)
    {
        $domain = $this->getDomainFromExistencesArray($domainname);
        return !empty($domain['domain_name']) ? true : false;
    }

    /**
     * Check email and returning valid emailif possible
     *
     * @param string $email
     * @param bool   $allow_subdomain allowed subdomain , this recommended to set into true
     *                                sub domains is allowed for validate domain
     *
     * @return bool|string boolean false if not valid
     */
    public function checkEmail($email, $allow_subdomain = true)
    {
        if (!is_string($email) || strpos($email, '@') === false || strlen($email) < 6) {
            return false;
        }

        $data = explode('@', $email);
        // validate must be 2 counted
        if (count($data) <> 2) {
            return false;
        }
        $domain       = $data[1];
        $mail_address = $data[0];
        /**
         * maximum length of email is 254
         * @see https://en.wikipedia.org/wiki/Email_address
         */
        if ($this->strlen($mail_address) > 254 || $this->strlen($mail_address) < 1
            || strpos('..', $mail_address) !== false
            || in_array(substr($mail_address, 0, 1), array('-', '.', '-')) // does not allowed started with [_-.]
            || in_array(substr($mail_address, -1), array('-', '.', '-')) // does not allowed end with [_-.]
        ) {
            return false;
        }

        $domain_array = $this->getDomainFromExistencesArray($domain);
        if (empty($domain_array) || $allow_subdomain === false && trim($domain_array['subdomain_name']) !== '') {
            return false;
        }

        // validate mail
        if (preg_match('/[\~\!\@\#\$\%\^\&\*\(\)\+\`\=\\\\|\'\{\}\[\]\;\"\:\,\/\<\>\?\s]/', $mail_address)) {
            return false;
        }

        /**
         * Check common name
         */
        if (in_array($domain_array['extension_name'], array('com', 'net', 'co', 'de', 'jp'))) {
            $common = $this->checkCommonEmail($domain_array['domain_name'], $email);
            if ($common !== true) {
                return $common;
            }
        }
        if ($domain_array['domain_name'] == 'co'
            && in_array(
                $domain_array['extension_name'],
                // available subdomain
                array(
                    'uk',
                    'id',
                    'sg',
                    'jp'
                )
            )
        ) {
            $subdomain = explode('.', $domain_array['subdomain_name']);
            $subdomain_name = end($subdomain);
            if (count($subdomain) > 1
                && in_array(
                    $subdomain_name,
                    array('gmail', 'hotmail', 'outlook', 'live', 'ymail', 'yahoo', 'rocketmail', 'mail')
                )
            ) {
                return false;
            }
            $common = $this->checkCommonEmail($subdomain_name, $email);
            if ($common !== true) {
                return $common;
            }
        }
        if (! in_array($domain_array['extension_name'], array("ws", "jp", "cn", "ca", "fr", "ar"))
            && ! preg_match('/[^a-z]/i', $domain_array['extension_name'])
            && preg_match('/[^0-9a-z\_\-\.]/i', $mail_address)
        ) {
            return false;
        }
        if ($domain_array['subdomain_name'] == '') {
            unset($domain_array['subdomain_name']);
        }
        return $this->toLowerCase($mail_address) . '@' . implode('.', $domain_array);
    }

    /**
     * Check common mail
     *
     * @param string $domain
     * @param string $email
     * @access private
     *
     * @return bool|string
     */
    private function checkCommonEmail($domain, $email)
    {
        $data = explode('@', $email);
        $mail_address = $data[0];
        switch ($domain) {
            case 'gmail':
                if (strlen($mail_address) > 30
                    || preg_match('/[^a-z0-9\.]/i', $mail_address)
                    || ! preg_match('/[a-z0-9\.]{1,30}[a-z]{1}/i', $mail_address)
                ) {
                    return false;
                }
                return $this->toLowerCase($email);
                break;
            case 'yahoo':
            case 'ymail':
            case 'rocketmail':
                if (strlen($mail_address) > 32
                    || substr_count($mail_address, '.') > 1
                    || substr_count($mail_address, '_') > 1
                    || preg_match('/[^a-z0-9\.\_]/i', $mail_address)
                    || ! preg_match('/[a-z0-9\.]{1,30}[a-z]{1}/i', $mail_address)) {
                    return false;
                }
                return $this->toLowerCase($email);
                break;
            case 'live':
            case 'hotmail':
            case 'outlook':
                if (preg_match('/[a-z0-9\.\_\-]/i', $mail_address)
                    || !preg_match('/[a-z0-9\.\_\-]{1,30}[a-z]{1/i', $mail_address)
                ) {
                    return false;
                }
                return $this->toLowerCase($email);
                break;
        }
        return true;
    }

    /**
     * Check email allowed only alphabetic
     *  this method suitable for determine really valid email address
     *
     * @param string $email
     *
     * @return bool|string boolean false if not valid
     */
    public function emailAlphabetic($email)
    {
        if (!is_string($email) || strpos($email, '@') === false || strlen($email) < 6) {
            return false;
        }

        $data = explode('@', $email);
        // validate must be 2 counted
        if (count($data) <> 2) {
            return false;
        }
        $mail_address = $data[0];
        /**
         * maximum length of email is 254
         * @see https://en.wikipedia.org/wiki/Email_address
         */
        if ($this->strlen($mail_address) > 254 || $this->strlen($mail_address) < 1
            || strpos('..', $mail_address) !== false
            || in_array(substr($mail_address, 0, 1), array('-', '.', '-')) // does not allowed started with [_-.]
        ) {
            return false;
        }

        if (preg_match('/[^a-z0-9\_\-\.]/', $mail_address)) {
            return false;
        }

        return $this->checkEmail($email);
    }

    /**
     * Get all tlds list
     *
     * @return array
     */
    public function getAllTlds()
    {
        return $this->data_tlds;
    }
}
