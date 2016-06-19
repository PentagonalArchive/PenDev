/*!
 * Domain Verifier
 *   Check if domain or email has valid procedure.
 *   this funcion collection only for basic usage
 * @author awan <nawa@yahoo.com>
 * @license GPL3+
 */

domainverifier = function(){},
domainverifier.prototype = {
    /**
     * List allowed custom characters on domain
     *  - could add extension on here
     * @type {string[]}
     */
    allowed_special : ["ws", "jp", "cn", "ca", "fr", "ar"],
    /**
     * Iana list available domain extension
     *
     * @type {string[]}
     */
    extension : ["aaa","aarp","abb","abbott","abbvie","abogado","abudhabi","ac","academy","accenture","accountant","accountants","aco","active","actor","ad","adac","ads","adult","ae","aeg","aero","aetna","af","afl","ag","agakhan","agency","ai","aig","airbus","airforce","airtel","akdn","al","alibaba","alipay","allfinanz","ally","alsace","alstom","am","amica","amsterdam","analytics","android","anquan","ao","apartments","app","apple","aq","aquarelle","ar","aramco","archi","army","arpa","arte","as","asia","associates","at","attorney","au","auction","audi","audible","audio","author","auto","autos","avianca","aw","aws","ax","axa","az","azure","ba","baby","baidu","band","bank","bar","barcelona","barclaycard","barclays","barefoot","bargains","bauhaus","bayern","bb","bbc","bbva","bcg","bcn","bd","be","beats","beer","bentley","berlin","best","bet","bf","bg","bh","bharti","bi","bible","bid","bike","bing","bingo","bio","biz","bj","black","blackfriday","blog","bloomberg","blue","bm","bms","bmw","bn","bnl","bnpparibas","bo","boats","boehringer","bom","bond","boo","book","boots","bosch","bostik","bot","boutique","br","bradesco","bridgestone","broadway","broker","brother","brussels","bs","bt","budapest","bugatti","build","builders","business","buy","buzz","bv","bw","by","bz","bzh","ca","cab","cafe","cal","call","camera","camp","cancerresearch","canon","capetown","capital","car","caravan","cards","care","career","careers","cars","cartier","casa","cash","casino","cat","catering","cba","cbn","cc","cd","ceb","center","ceo","cern","cf","cfa","cfd","cg","ch","chanel","channel","chase","chat","cheap","chintai","chloe","christmas","chrome","church","ci","cipriani","circle","cisco","citic","city","cityeats","ck","cl","claims","cleaning","click","clinic","clinique","clothing","cloud","club","clubmed","cm","cn","co","coach","codes","coffee","college","cologne","com","commbank","community","company","compare","computer","comsec","condos","construction","consulting","contact","contractors","cooking","cool","coop","corsica","country","coupon","coupons","courses","cr","credit","creditcard","creditunion","cricket","crown","crs","cruises","csc","cu","cuisinella","cv","cw","cx","cy","cymru","cyou","cz","dabur","dad","dance","date","dating","datsun","day","dclk","dds","de","deal","dealer","deals","degree","delivery","dell","deloitte","delta","democrat","dental","dentist","desi","design","dev","dhl","diamonds","diet","digital","direct","directory","discount","dj","dk","dm","dnp","do","docs","dog","doha","domains","dot","download","drive","dtv","dubai","dunlop","dupont","durban","dvag","dz","earth","eat","ec","edeka","edu","education","ee","eg","email","emerck","energy","engineer","engineering","enterprises","epost","epson","equipment","er","ericsson","erni","es","esq","estate","et","eu","eurovision","eus","events","everbank","exchange","expert","exposed","express","extraspace","fage","fail","fairwinds","faith","family","fan","fans","farm","fashion","fast","feedback","ferrero","fi","film","final","finance","financial","fire","firestone","firmdale","fish","fishing","fit","fitness","fj","fk","flickr","flights","flir","florist","flowers","flsmidth","fly","fm","fo","foo","football","ford","forex","forsale","forum","foundation","fox","fr","fresenius","frl","frogans","frontier","ftr","fund","furniture","futbol","fyi","ga","gal","gallery","gallo","gallup","game","games","garden","gb","gbiz","gd","gdn","ge","gea","gent","genting","gf","gg","ggee","gh","gi","gift","gifts","gives","giving","gl","glass","gle","global","globo","gm","gmail","gmbh","gmo","gmx","gn","gold","goldpoint","golf","goo","goodyear","goog","google","gop","got","gov","gp","gq","gr","grainger","graphics","gratis","green","gripe","group","gs","gt","gu","guardian","gucci","guge","guide","guitars","guru","gw","gy","hamburg","hangout","haus","hdfcbank","health","healthcare","help","helsinki","here","hermes","hiphop","hisamitsu","hitachi","hiv","hk","hkt","hm","hn","hockey","holdings","holiday","homedepot","homes","honda","horse","host","hosting","hoteles","hotmail","house","how","hr","hsbc","ht","htc","hu","hyundai","ibm","icbc","ice","icu","id","ie","ifm","iinet","il","im","imamat","imdb","immo","immobilien","in","industries","infiniti","info","ing","ink","institute","insurance","insure","int","international","investments","io","ipiranga","iq","ir","irish","is","iselect","ismaili","ist","istanbul","it","itau","iwc","jaguar","java","jcb","jcp","je","jetzt","jewelry","jlc","jll","jm","jmp","jnj","jo","jobs","joburg","jot","joy","jp","jpmorgan","jprs","juegos","kaufen","kddi","ke","kerryhotels","kerrylogistics","kerryproperties","kfh","kg","kh","ki","kia","kim","kinder","kindle","kitchen","kiwi","km","kn","koeln","komatsu","kosher","kp","kpmg","kpn","kr","krd","kred","kuokgroup","kw","ky","kyoto","kz","la","lacaixa","lamborghini","lamer","lancaster","land","landrover","lanxess","lasalle","lat","latrobe","law","lawyer","lb","lc","lds","lease","leclerc","legal","lexus","lgbt","li","liaison","lidl","life","lifeinsurance","lifestyle","lighting","like","limited","limo","lincoln","linde","link","lipsy","live","living","lixil","lk","loan","loans","locker","locus","lol","london","lotte","lotto","love","lr","ls","lt","ltd","ltda","lu","lupin","luxe","luxury","lv","ly","ma","madrid","maif","maison","makeup","man","management","mango","market","marketing","markets","marriott","mattel","mba","mc","md","me","med","media","meet","melbourne","meme","memorial","men","menu","meo","metlife","mg","mh","miami","microsoft","mil","mini","mk","ml","mlb","mls","mm","mma","mn","mo","mobi","mobily","moda","moe","moi","mom","monash","money","montblanc","mormon","mortgage","moscow","motorcycles","mov","movie","movistar","mp","mq","mr","ms","mt","mtn","mtpc","mtr","mu","museum","mutual","mutuelle","mv","mw","mx","my","mz","na","nadex","nagoya","name","natura","navy","nc","ne","nec","net","netbank","netflix","network","neustar","new","news","next","nextdirect","nexus","nf","ng","ngo","nhk","ni","nico","nikon","ninja","nissan","nissay","nl","no","nokia","northwesternmutual","norton","now","nowruz","nowtv","np","nr","nra","nrw","ntt","nu","nyc","nz","obi","office","okinawa","olayan","olayangroup","ollo","om","omega","one","ong","onl","online","ooo","oracle","orange","org","organic","origins","osaka","otsuka","ott","ovh","pa","page","pamperedchef","panerai","paris","pars","partners","parts","party","passagens","pccw","pe","pet","pf","pg","ph","pharmacy","philips","photo","photography","photos","physio","piaget","pics","pictet","pictures","pid","pin","ping","pink","pioneer","pizza","pk","pl","place","play","playstation","plumbing","plus","pm","pn","pohl","poker","porn","post","pr","praxi","press","prime","pro","prod","productions","prof","progressive","promo","properties","property","protection","ps","pt","pub","pw","pwc","py","qa","qpon","quebec","quest","racing","re","read","realestate","realtor","realty","recipes","red","redstone","redumbrella","rehab","reise","reisen","reit","ren","rent","rentals","repair","report","republican","rest","restaurant","review","reviews","rexroth","rich","richardli","ricoh","rio","rip","ro","rocher","rocks","rodeo","room","rs","rsvp","ru","ruhr","run","rw","rwe","ryukyu","sa","saarland","safe","safety","sakura","sale","salon","samsung","sandvik","sandvikcoromant","sanofi","sap","sapo","sarl","sas","save","saxo","sb","sbi","sbs","sc","sca","scb","schaeffler","schmidt","scholarships","school","schule","schwarz","science","scor","scot","sd","se","seat","security","seek","select","sener","services","seven","sew","sex","sexy","sfr","sg","sh","sharp","shaw","shell","shia","shiksha","shoes","shop","shouji","show","shriram","si","silk","sina","singles","site","sj","sk","ski","skin","sky","skype","sl","sm","smile","sn","sncf","so","soccer","social","softbank","software","sohu","solar","solutions","song","sony","soy","space","spiegel","spot","spreadbetting","sr","srl","st","stada","star","starhub","statebank","statefarm","statoil","stc","stcgroup","stockholm","storage","store","stream","studio","study","style","su","sucks","supplies","supply","support","surf","surgery","suzuki","sv","swatch","swiss","sx","sy","sydney","symantec","systems","sz","tab","taipei","talk","taobao","tatamotors","tatar","tattoo","tax","taxi","tc","tci","td","tdk","team","tech","technology","tel","telecity","telefonica","temasek","tennis","teva","tf","tg","th","thd","theater","theatre","tickets","tienda","tiffany","tips","tires","tirol","tj","tk","tl","tm","tmall","tn","to","today","tokyo","tools","top","toray","toshiba","total","tours","town","toyota","toys","tr","trade","trading","training","travel","travelers","travelersinsurance","trust","trv","tt","tube","tui","tunes","tushu","tv","tvs","tw","tz","ua","ubs","ug","uk","unicom","university","uno","uol","ups","us","uy","uz","va","vacations","vana","vc","ve","vegas","ventures","verisign","versicherung","vet","vg","vi","viajes","video","vig","viking","villas","vin","vip","virgin","vision","vista","vistaprint","viva","vlaanderen","vn","vodka","volkswagen","vote","voting","voto","voyage","vu","vuelos","wales","walter","wang","wanggou","warman","watch","watches","weather","weatherchannel","webcam","weber","website","wed","wedding","weibo","weir","wf","whoswho","wien","wiki","williamhill","win","windows","wine","wme","wolterskluwer","work","works","world","ws","wtc","wtf","xbox","xerox","xihuan","xin","\u0915\u0949\u092e","\u30bb\u30fc\u30eb","\u4f5b\u5c71","\u6148\u5584","\u96c6\u56e2","\u5728\u7ebf","\ud55c\uad6d","\u70b9\u770b","\u0e04\u0e2d\u0e21","\u09ad\u09be\u09b0\u09a4","\u516b\u5366","\u0645\u0648\u0642\u0639","\u516c\u76ca","\u516c\u53f8","\u7f51\u7ad9","\u79fb\u52a8","\u6211\u7231\u4f60","\u043c\u043e\u0441\u043a\u0432\u0430","\u049b\u0430\u0437","\u043e\u043d\u043b\u0430\u0439\u043d","\u0441\u0430\u0439\u0442","\u8054\u901a","\u0441\u0440\u0431","\u0431\u0435\u043b","\u05e7\u05d5\u05dd","\u65f6\u5c1a","\u5fae\u535a","\u6de1\u9a6c\u9521","\u30d5\u30a1\u30c3\u30b7\u30e7\u30f3","\u043e\u0440\u0433","\u0928\u0947\u091f","\u30b9\u30c8\u30a2","\uc0bc\uc131","\u0b9a\u0bbf\u0b99\u0bcd\u0b95\u0baa\u0bcd\u0baa\u0bc2\u0bb0\u0bcd","\u5546\u6807","\u5546\u5e97","\u5546\u57ce","\u0434\u0435\u0442\u0438","\u043c\u043a\u0434","\u0435\u044e","\u30dd\u30a4\u30f3\u30c8","\u65b0\u95fb","\u5de5\u884c","\u5bb6\u96fb","\u0643\u0648\u0645","\u4e2d\u6587\u7f51","\u4e2d\u4fe1","\u4e2d\u56fd","\u4e2d\u570b","\u5a31\u4e50","\u8c37\u6b4c","\u0c2d\u0c3e\u0c30\u0c24\u0c4d","\u0dbd\u0d82\u0d9a\u0dcf","\u96fb\u8a0a\u76c8\u79d1","\u8d2d\u7269","\u30af\u30e9\u30a6\u30c9","\u0aad\u0abe\u0ab0\u0aa4","\u092d\u093e\u0930\u0924","\u7f51\u5e97","\u0938\u0902\u0917\u0920\u0928","\u9910\u5385","\u7f51\u7edc","\u043a\u043e\u043c","\u0443\u043a\u0440","\u9999\u6e2f","\u8bfa\u57fa\u4e9a","\u98df\u54c1","\u98de\u5229\u6d66","\u53f0\u6e7e","\u53f0\u7063","\u624b\u8868","\u624b\u673a","\u043c\u043e\u043d","\u0627\u0644\u062c\u0632\u0627\u0626\u0631","\u0639\u0645\u0627\u0646","\u0627\u0631\u0627\u0645\u0643\u0648","\u0627\u06cc\u0631\u0627\u0646","\u0627\u0644\u0639\u0644\u064a\u0627\u0646","\u0627\u0645\u0627\u0631\u0627\u062a","\u0628\u0627\u0632\u0627\u0631","\u0627\u0644\u0627\u0631\u062f\u0646","\u0645\u0648\u0628\u0627\u064a\u0644\u064a","\u0628\u06be\u0627\u0631\u062a","\u0627\u0644\u0645\u063a\u0631\u0628","\u0627\u0628\u0648\u0638\u0628\u064a","\u0627\u0644\u0633\u0639\u0648\u062f\u064a\u0629","\u0633\u0648\u062f\u0627\u0646","\u0647\u0645\u0631\u0627\u0647","\u0639\u0631\u0627\u0642","\u0645\u0644\u064a\u0633\u064a\u0627","\u6fb3\u9580","\ub2f7\ucef4","\u653f\u5e9c","\u0634\u0628\u0643\u0629","\u0628\u064a\u062a\u0643","\u10d2\u10d4","\u673a\u6784","\u7ec4\u7ec7\u673a\u6784","\u5065\u5eb7","\u0e44\u0e17\u0e22","\u0633\u0648\u0631\u064a\u0629","\u0440\u0443\u0441","\u0440\u0444","\u73e0\u5b9d","\u062a\u0648\u0646\u0633","\u5927\u62ff","\u307f\u3093\u306a","\u30b0\u30fc\u30b0\u30eb","\u03b5\u03bb","\u4e16\u754c","\u66f8\u7c4d","\u0a2d\u0a3e\u0a30\u0a24","\u7f51\u5740","\ub2f7\ub137","\u30b3\u30e0","\u6e38\u620f","verm\u00f6gensberater","verm\u00f6gensberatung","\u4f01\u4e1a","\u4fe1\u606f","\u5609\u91cc\u5927\u9152\u5e97","\u5609\u91cc","\u0645\u0635\u0631","\u0642\u0637\u0631","\u5e7f\u4e1c","\u0b87\u0bb2\u0b99\u0bcd\u0b95\u0bc8","\u0b87\u0ba8\u0bcd\u0ba4\u0bbf\u0baf\u0bbe","\u0570\u0561\u0575","\u65b0\u52a0\u5761","\u0641\u0644\u0633\u0637\u064a\u0646","\u653f\u52a1","xperia","xxx","xyz","yachts","yahoo","yamaxun","yandex","ye","yodobashi","yoga","yokohama","you","youtube","yt","yun","za","zappos","zara","zero","zip","zm","zone","zuerich","zw"],
    /**
     * validate domain and convert detail into object
     *
     * @param {string} domainName
     * @returns {boolean|object} boolean false if invalid and object if valid
     */
    validate : function (domainName) {
        /**
         * Validate of domain rules
         * domainName must be as {string}
         * domainName must be contain at lest one of period (.)
         * domainName could not containe intended double period| got dash (-) before with period(-.)
         *         | start with dash (-) on start of domain name
         *         | length more than 255
         */
        if (typeof domainName !== 'string'
            || !domainName.match(/\./)
            || domainName.match(/[\~\!\@\#\$\%\^\&\*\(\)\+\`\=\\\|'\{\}\[\]\;\"\:\,\/\<\>\?\s]|[\-]\.|\.\./)
            || domainName.match(/^[\-\.]/)
            || domainName.length > 255
        ) {
            return false;
        }
        /**
         * create default result object
         * @type {{subdomain: null|string, domain: string, extension: string}}
         */
        var result = {
            'subdomain': null,
            'domain': '',
            "extension": ''
        };
        /**
         * convert into lowercase and split into array
         * @type {Array}
         * @private
         */
        _domainArray = domainName.toLowerCase().split('.');
        /**
         * Get Length
         * @type {Number}
         * @private
         */
        _lengthArray = _domainArray.length;
        /**
         * Set new object data for defined array
         * @type {string}
         */
        result.domain = _domainArray[_lengthArray - 2];
        result.extension = _domainArray[_lengthArray - 1];
        if (result.extension.length > 18
            || result.extension.length < 2
            || this.extension.indexOf(result.extension) < 0
            || result.domain > 63
            || result.domain.match(/\-$/)
        ) {
            return false;
        }
        /**
         * validate if extenson that contain only alphabetical
         * and on allowed_extra alphabetic
         * that mean domain must be alphabetical
         */
        if (!result.extension.match(/[^a-z]/)
            && this.allowed_special.indexOf(result.extension) > -1
            && result.domain.match(/[^a-z0-9\-]/)
        ) {
            return false;
        }
        /**
         * if array of Domain split more than 2 ,
         * that means the domain name has sub domain
         */
        if (_lengthArray > 2) {
            _domainArray.splice(_lengthArray - 2, 2);
            result.subdomain = _domainArray.join('.');
        }

        return result;
    },
    /**
     * Check Email & return sanitized
     *
     * @param {string} emailAddress
     * @returns {boolean|string}
     */
    email : function (emailAddress) {
        if (typeof emailAddress != 'string' || emailAddress.length < 6
            || !emailAddress.match(/\@/)
            || emailAddress.match(/^\@/)
            || emailAddress.match(/\s/)
        ) {
            return false;
        }
        /**
         * Convert into lowercase and to Array
         * @type {Array}
         * @private
         */
        _emailArray = emailAddress.toLowerCase().split('@');
        /**
         * if Email array more than 2 , that mean it has invalid
         */
        if (_emailArray.length > 2) {
            return false;
        }
        /**
         * Email address before Domain
         * @type string
         * @private
         */
        _mail = _emailArray[0];
        /**
         * Domain Name
         * @type {string}
         * @private
         */
        _domain = _emailArray[1];
        /**
         * maximum length of email is 254
         * @see https://en.wikipedia.org/wiki/Email_address
         */
        if (_mail.length > 254
            /**
             * validate if Domain valid
             */
            || !isDomainValid(_domain)
            /**
             * for standard usage email address only contains:
             * alphabetical & underscore (_) dash (-) and dotted (.)
             */
            || _mail.match(/[^a-z0-9\_\-\.]/)
            /**
             * Could not contains double dotted
             */
            || _mail.match(/\.\./)
            /**
             * Could not contain non alphabetical or numeric on start or end of email address
             */
            || !_mail.match(/^[a-z0-9]/) || _mail.match(/[a-z0-9]$/)
        ) {
            return false;
        }

        return _mail + '@' + _domain;
    },
    /**
     * Check if Domain valid
     *      this allowed subdomain validate
     * @param {string} domainName
     * @returns {boolean}
     */
    isDomain : function (domainName) {
        return (this.validate(domainName) != false);
    },
    /**
     * Check if domain valid, only parent allowed
     *       just For TLD domain only, no suitable for domain validate usage
     *       for internationalization Domain Name
     *
     * @param {string} domainName
     * @returns {boolean}
     */
    isTopDomain : function (domainName) {
        var domainResult = this.validate(domainName);
        /**
         * validate if domain is not false (@type {object}) and sub domain is @type {null}
         */
        return (domainResult != false && domainResult.subdomain === null);
    },
    /**
     * Check if valid Email
     *
     * @param {string} emailAddress
     * @returns {boolean}
     */
    isEmail : function (emailAddress) {
        return (this.email(emailAddress) !== false);
    }
};
domainverifier = new domainverifier();
