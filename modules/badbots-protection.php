<?php
//Bad Bots Protection
$table = $prefix . 'badbot-settings';
$query = $mysqli->query("SELECT * FROM `$table`");
$row   = $query->fetch_assoc();

if ($row['protection'] == 1) {
    
    $bad_bots = array(
        "Abonti",
        "aggregator",
        "almaden",
        "Anarchie",
        "ASPSeek",
        "asterias",
        "autoemailspider",
        "Bandit",
        "BDCbot",
        "BackWeb",
        "BatchFTP",
        "BlackWidow",
        "BLEXBot",
        "Bolt",
        "Buddy",
        "BuiltBotTough",
        "Bullseye",
        "bumblebee",
        "BunnySlippers",
        "ca-crawler",
        "CazoodleBot",
        "CCBot",
        "Cegbfeieh",
        "CheeseBot",
        "CherryPicker",
        "ChinaClaw",
        "CICC",
        "Collector",
        "Copier",
        "CopyRightCheck",
        "cosmos",
        "Crescent",
        "Custo",
        "DIIbot",
        "discobot",
        "DittoSpyder",
        "DOC",
        "Download Ninja",
        "Drip",
        "DSurf",
        "EasouSpider",
        "eCatch",
        "ecxi",
        "EmailCollector",
        "EmailSiphon",
        "EmailWolf",
        "EroCrawler",
        "EirGrabber",
        "ExtractorPro",
        "EyeNetIE",
        "Fasterfox",
        "FeedBooster",
        "FlashGet",
        "Foobot",
        "FrontPage",
        "Genieo",
        "GetRight",
        "GetSmart",
        "GetWeb!",
        "gigabaz",
        "Go!Zilla",
        "Go-Ahead-Got-It",
        "gotit",
        "Grabber",
        "GrabNet",
        "Grafula",
        "grub-client",
        "Harvest",
        "hloader",
        "httplib",
        "HMView",
        "HTTrack",
        "httpdown",
        "humanlinks",
        "IDBot",
        "id-search",
        "ieautodiscovery",
        "InfoNaviRobot",
        "InterGET",
        "InternetLinkagent",
        "IstellaBot",
        "InternetSeer",
        "Iria",
        "IRLbot",
        "JennyBot",
        "JetCar",
        "JustView",
        "k2spider",
        "Kenjin Spider",
        "Keyword Density",
        "larbin",
        "LeechFTP",
        "LexiBot",
        "lftp",
        "libWeb",
        "libwww-perl",
        "likse",
        "Link*Sleuth",
        "LinkextractorPro",
        "linko",
        "LinkScan",
        "LinkWalker",
        "LNSpiderguy",
        "lwp-trivial",
        "Mag-Net",
        "magpie",
        "Mata Hari",
        "MaxPointCrawler",
        "MegaIndex",
        "Memo",
        "MFC_Tear_Sample",
        "Microsoft URL Control",
        "MIDown",
        "MIIxpc",
        "Mippin",
        "Missigua Locator",
        "Mister PiX",
        "moget",
        "MSIECrawler",
        "Navroad",
        "NearSite",
        "NetAnts",
        "NetMechanic",
        "NetSpider",
        "NICErsPRO",
        "Niki-Bot",
        "Ninja",
        "NPBot",
        "Nutch",
        "Octopus",
        "Offline Explorer",
        "Openfind data gathere",
        "Openfind",
        "PageGrabber",
        "panscient.com",
        "pavuk",
        "pcBrowser",
        "PeoplePal",
        "PHP5.{",
        "PHPCrawl",
        "PingALink",
        "PleaseCrawl",
        "Pockey",
        "ProPowerBot",
        "ProWebWalker",
        "psbot",
        "Pump",
        "Python-urllib",
        "QueryN Metasearch",
        "QRVA",
        "Reaper",
        "Recorder",
        "ReGet",
        "RepoMonkey",
        "Rippers",
        "SBIder",
        "Scooter",
        "Seeker",
        "SemrushBot",
        "SeznamBot",
        "Siphon",
        "SISTRIX",
        "sitecheck.Internetseer.com",
        "SiteSnagger",
        "SlySearch",
        "SmartDownload",
        "Snake",
        "SnapPreviewBot",
        "SpaceBison",
        "SpankBot",
        "spanner",
        "spbot",
        "Spinn3r",
        "sproose",
        "Steeler",
        "Stripper",
        "Sucker",
        "SuperBot",
        "SuperHTTP",
        "suzuran",
        "Szukacz",
        "tAkeOut",
        "Teleport",
        "TeleportPro",
        "Telesoft",
        "The Intraformant",
        "TheNomad",
        "TightTwatBot",
        "Titan",
        "toCrawlUrlDispatcher",
        "True_Robot",
        "turingos",
        "TurnitinBot",
        "UbiCrawler",
        "UnisterBot",
        "URLSpiderPro",
        "URLy Warning",
        "Vacuum",
        "VCI WebViewer VCI WebViewer",
        "VoidEYE",
        "webalta",
        "WebAuto",
        "Win32",
        "VCI",
        "WBSearchBot",
        "Web Downloader",
        "Web Image Collector",
        "WebBandit",
        "WebCollage",
        "WebCopier",
        "WebEMailExtrac",
        "WebEnhancer",
        "WebFetch",
        "WebGo",
        "WebHook",
        "WebLeacher",
        "WebmasterWorldForumBot",
        "WebMiner",
        "WebMirror",
        "WebReaper",
        "WebSauger",
        "Website Quester",
        "Webster Pro",
        "WebStripper",
        "WebZip",
        "Whacker",
        "Widow",
        "Wotcard",
        "Wget",
        "wsr-agent",
        "WWW-Collector-E",
        "WWW-Mechanize",
        "WWWOFFLE",
        "x-Tractor",
        "Xaldon",
        "Xenu",
        "Zao",
        "zermelo",
        "Zeus",
        "ZyBORG",
        "coccoc",
        "Incutio",
        "lmspider",
        "memoryBot",
        "serf",
        "uptime files",
        "craftbot",
        "Download Demon",
        "Express WebPictures",
        "Indy Library",
        "NetZIP",
        "Vampire",
        "Offline",
        "RealDownload",
        "Download",
        "Surfbot",
        "WebWhacker",
        "eXtractor",
        "WebSpider",
        "archiverloader",
        "clshttp",
        "cmswor",
        "curl",
        "diavol",
        "email",
        "extract",
        "flicky",
        "grab",
        "kmccrew",
        "miner",
        "nikto",
        "planetwork",
        "pycurl",
        "python",
        "scan",
        "skygrid",
        "winhttp",
        "Scanner",
        "DigExt",
        "80legs",
        "Semrush",
        "Ezooms",
        "%0A",
        "%0D",
        "%27",
        "%3C",
        "%3E",
        "%00",
        "!susie",
        "_irc",
        "_works",
        "+select+",
        "+union+",
        "&lt;?",
        "3gse",
        "4all",
        "4anything",
        "a1 site",
        "a_browser",
        "abac",
        "abach",
        "abby",
        "aberja",
        "abilon",
        "abont",
        "aboutoil",
        "accept",
        "accoo",
        "accoon",
        "aceftp",
        "acme",
        "active",
        "address",
        "adopt",
        "adress",
        "advisor",
        "ahead",
        "aihit",
        "aipbot",
        "alarm",
        "albert",
        "alek",
        "alexa toolbar",
        "alltop",
        "alma",
        "alot",
        "alpha",
        "america online browser",
        "amfi",
        "amfibi",
        "andit",
        "anon",
        "ansearch",
        "answer",
        "answerbus",
        "answerchase",
        "antivirx",
        "apollo",
        "appie",
        "arach",
        "arian",
        "asps",
        "atari",
        "atlocal",
        "atom",
        "atrax",
        "atrop",
        "attrib",
        "autoh",
        "autohot",
        "av fetch",
        "avsearch",
        "axod",
        "axon",
        "baboom",
        "baby",
        "back",
        "bali",
        "barry",
        "basichttp",
        "batch",
        "bdfetch",
        "beat",
        "beaut",
        "become",
        "bee",
        "beij",
        "betabot",
        "biglotron",
        "bilgi",
        "binlar",
        "bison",
        "bitacle",
        "bitly",
        "blaiz",
        "blitz",
        "blogl",
        "blogscope",
        "blogzice",
        "bloob",
        "bond",
        "bord",
        "boris",
        "bost",
        "bot.ara",
        "botje",
        "botw",
        "bpimage",
        "brand",
        "brok",
        "broth",
        "browseabit",
        "browsex",
        "bruin",
        "bsalsa",
        "bsdseek",
        "built",
        "bulls",
        "bumble",
        "bunny",
        "busca",
        "busi",
        "buy",
        "bwh3",
        "cafek",
        "cafi",
        "camel",
        "cand",
        "captu",
        "catch",
        "ccubee",
        "cd34",
        "ceg",
        "cgichk",
        "cha0s",
        "chang",
        "chaos",
        "char",
        "char(",
        "chase x",
        "check_http",
        "checker",
        "checkonly",
        "checkpriv",
        "chek",
        "chill",
        "chttpclient",
        "cipinet",
        "cisco",
        "cita",
        "citeseer",
        "clam",
        "claria",
        "claw",
        "cloak",
        "clush",
        "coast",
        "code.com",
        "cogent",
        "coldfusion",
        "coll",
        "collect",
        "comb",
        "combine",
        "commentreader",
        "common",
        "comodo",
        "compan",
        "conc",
        "conduc",
        "contact",
        "control",
        "contype",
        "conv",
        "copi",
        "copy",
        "coral",
        "corn",
        "costa",
        "cowbot",
        "cr4nk",
        "craft",
        "cralwer",
        "crank",
        "crap",
        "crawler0",
        "crazy",
        "cres",
        "cs-cz",
        "cshttp",
        "cuill",
        "curry",
        "cute",
        "cz3",
        "czx",
        "daily",
        "daobot",
        "dark",
        "daten",
        "dcbot",
        "dcs",
        "dds explorer",
        "deep",
        "deps",
        "diam",
        "dillo",
        "disp",
        "ditto",
        "dlc",
        "doco",
        "drec",
        "dsdl",
        "dsok",
        "dts",
        "dumb",
        "eag",
        "earn",
        "earthcom",
        "easydl",
        "ebin",
        "echo",
        "edco",
        "egoto",
        "elnsb5",
        "emer",
        "empas",
        "encyclo",
        "enfi",
        "enhan",
        "enterprise_search",
        "envolk",
        "erck",
        "erocr",
        "eventax",
        "evere",
        "evil",
        "ewh",
        "exploit",
        "expre",
        "extra",
        "eyen",
        "fang",
        "fastbug",
        "faxo",
        "fdse",
        "feed24",
        "feeddisc",
        "feedfinder",
        "feedhub",
        "fetch",
        "filan",
        "fileboo",
        "fimap",
        "find",
        "firebat",
        "firedownload",
        "firefox0",
        "firs",
        "flam",
        "flash",
        "flexum",
        "flip",
        "fly",
        "fooky",
        "forum",
        "forv",
        "fost",
        "foto",
        "foun",
        "fount",
        "foxy1;",
        "free",
        "friend",
        "fuck",
        "fuer",
        "futile",
        "fyber",
        "gais",
        "galbot",
        "gbpl",
        "geni",
        "geo",
        "geona",
        "geth",
        "getr",
        "getw",
        "ggl",
        "gira",
        "gluc",
        "gnome",
        "goforit",
        "goldfire",
        "gonzo",
        "gosearch",
        "got-it",
        "gozilla",
        "graf",
        "grub",
        "grup",
        "gsa-cra",
        "gsearch",
        "gt::www",
        "guidebot",
        "guruji",
        "gyps",
        "haha",
        "hailo",
        "harv",
        "hash",
        "hatena",
        "hax",
        "head",
        "helm",
        "hgre",
        "hippo",
        "hmse",
        "holm",
        "holy",
        "hotbar",
        "hpprint",
        "httpclient",
        "httpconnect",
        "human",
        "huron",
        "hverify",
        "hybrid",
        "hyper",
        "iaskspi",
        "ibm evv",
        "iccra",
        "ichiro",
        "icopy",
        "ics)",
        "ie5.0",
        "ieauto",
        "iempt",
        "iexplore.exe",
        "ilium",
        "ilse",
        "iltrov",
        "indexer",
        "indy",
        "ineturl",
        "infonav",
        "innerpr",
        "inspect",
        "insuran",
        "intellig",
        "internet_explorer",
        "internetx",
        "intraf",
        "ip2",
        "ipsel",
        "isc_sys",
        "isilo",
        "isrccrawler",
        "isspi",
        "jady",
        "jaka",
        "jam",
        "jenn",
        "jiro",
        "jobo",
        "joc",
        "jupit",
        "just",
        "jyx",
        "jyxo",
        "kash",
        "kazo",
        "kbee",
        "kenjin",
        "kernel",
        "keywo",
        "kfsw",
        "kkma",
        "kmc",
        "know",
        "kosmix",
        "krae",
        "krug",
        "ksibot",
        "ktxn",
        "kum",
        "labs",
        "lanshan",
        "lapo",
        "leech",
        "lets",
        "lexi",
        "lexxe",
        "libby",
        "libcrawl",
        "libcurl",
        "libfetch",
        "linc",
        "lingue",
        "linkcheck",
        "linklint",
        "linkman",
        "lint",
        "list",
        "litefeeds",
        "livedoor",
        "livejournal",
        "liveup",
        "lmq",
        "loader",
        "locu",
        "london",
        "lone",
        "loop",
        "lork",
        "lth_",
        "lwp",
        "mac_f",
        "magi",
        "magp",
        "mail.ru",
        "majest",
        "mam",
        "mama",
        "marketwire",
        "masc",
        "mass",
        "mata",
        "mcbot",
        "mecha",
        "mechanize",
        "metadata",
        "metalogger",
        "metaspin",
        "metauri",
        "mete",
        "mib2.2",
        "microsoft.url",
        "microsoft_internet_explorer",
        "mido",
        "miggi",
        "miix",
        "mindjet",
        "mindman",
        "mips",
        "mira",
        "mire",
        "miss",
        "mist",
        "mizz",
        "mlbot",
        "mlm",
        "mnog",
        "moge",
        "moje",
        "mooz",
        "mouse",
        "mozdex",
        "mvi",
        "msie6xpv1",
        "msproxy",
        "msrbot",
        "musc",
        "mvac",
        "mwm",
        "my_age",
        "myapp",
        "mydog",
        "myeng",
        "myie2",
        "mysearch",
        "myurl",
        "name",
        "naver",
        "navr",
        "near",
        "netcach",
        "netcrawl",
        "netfront",
        "netinfo",
        "netmech",
        "netsp",
        "netx",
        "netz",
        "neural",
        "neut",
        "newsbreak",
        "newsgatorincard",
        "newsrob",
        "newt",
        "ng2",
        "nice",
        "nimb",
        "ninte",
        "nog",
        "noko",
        "nomad",
        "nuse",
        "nutex",
        "nwsp",
        "obje",
        "ocel",
        "octo",
        "odi3",
        "oegp",
        "offby",
        "omea",
        "omg",
        "omhttp",
        "onfo",
        "onyx",
        "openf",
        "openssl",
        "openu",
        "orac",
        "orbit",
        "oreg",
        "osis",
        "outf",
        "owl",
        "p3p_",
        "page2rss",
        "pagefet",
        "pansci",
        "patw",
        "pavu",
        "pb2pb",
        "pcbrow",
        "pear",
        "peer",
        "pepe",
        "perfect",
        "perl",
        "petit",
        "phoenix0.",
        "phras",
        "picalo",
        "piff",
        "pig",
        "pipe",
        "pirs",
        "plag",
        "planet",
        "plant",
        "platform",
        "plesk",
        "pluck",
        "plukkie",
        "poe-com",
        "poirot",
        "pomp",
        "post",
        "postrank",
        "powerset",
        "privoxy",
        "probe",
        "program_shareware",
        "protect",
        "protocol",
        "prowl",
        "proxie",
        "pubsub",
        "pulse",
        "punit",
        "purebot",
        "purity",
        "pyq",
        "pyth",
        "query",
        "qweer",
        "radian",
        "rambler",
        "ramp",
        "rapid",
        "rawdog",
        "rawgrunt",
        "reap",
        "reeder",
        "refresh",
        "relevare",
        "repo",
        "requ",
        "request",
        "rese",
        "retrieve",
        "roboz",
        "rocket",
        "rogue",
        "rpt-http",
        "rsscache",
        "ruby",
        "ruff",
        "rufus",
        "rv:0.9.7)",
        "salt",
        "sample",
        "sauger",
        "savvy",
        "sbcyds",
        "sblog",
        "sbp",
        "scagent",
        "scej_",
        "sched",
        "schizo",
        "schlong",
        "schmo",
        "scorp",
        "scott",
        "scout",
        "scrawl",
        "screen",
        "screenshot",
        "script",
        "search17",
        "searchbot",
        "searchme",
        "sega",
        "semto",
        "sensis",
        "seop",
        "seopro",
        "sept",
        "sezn",
        "seznam",
        "share",
        "sharp",
        "shaz",
        "shell",
        "shelo",
        "sherl",
        "shim",
        "shopwiki",
        "silurian",
        "simple",
        "simplepie",
        "siph",
        "sitekiosk",
        "sitescan",
        "sitevigil",
        "sitex",
        "skam",
        "skimp",
        "sledink",
        "slide",
        "sly",
        "smag",
        "smurf",
        "snag",
        "snapbot",
        "snif",
        "snip",
        "snoop",
        "sock",
        "socsci",
        "sohu",
        "solr",
        "some",
        "soso",
        "spad",
        "span",
        "sphere",
        "spin",
        "spurl",
        "sputnik",
        "spyder",
        "squi",
        "sqwid",
        "sqworm",
        "ssm_ag",
        "stack",
        "stamp",
        "statbot",
        "state",
        "steel",
        "stilo",
        "strateg",
        "stress",
        "strip",
        "style",
        "subot",
        "such",
        "suck",
        "sume",
        "sunos 5.7",
        "sunrise",
        "superbro",
        "supervi",
        "surf4me",
        "survey",
        "susi",
        "suza",
        "suzu",
        "sweep",
        "swish",
        "sygol",
        "synapse",
        "sync2it",
        "systems",
        "tagger",
        "tagoo",
        "tagyu",
        "take",
        "talkro",
        "tamu",
        "tandem",
        "tarantula",
        "tcf",
        "tcs1",
        "teamsoft",
        "tecomi",
        "teesoft",
        "tencent",
        "terrawiz",
        "texnut",
        "thomas",
        "tiehttp",
        "timebot",
        "timely",
        "tipp",
        "tiscali",
        "tmcrawler",
        "tmhtload",
        "tocrawl",
        "todobr",
        "tongco",
        "toolbar; (r1",
        "topic",
        "topyx",
        "torrent",
        "track",
        "translate",
        "traveler",
        "treeview",
        "tricus",
        "trivia",
        "trivial",
        "true",
        "tunnel",
        "turing",
        "turnitin",
        "tutorgig",
        "twat",
        "tweak",
        "twice",
        "tygo",
        "ubee",
        "uchoo",
        "ultraseek",
        "unavail",
        "unf",
        "upg1",
        "urlbase",
        "urllib",
        "urly",
        "user-agent:",
        "useragent",
        "usyd",
        "vagabo",
        "valet",
        "vamp",
        "veri~li",
        "versus",
        "vikspi",
        "virtual",
        "visual",
        "void",
        "voyager",
        "vsyn",
        "w0000t",
        "w3search",
        "walhello",
        "walker",
        "wand",
        "waol",
        "watch",
        "wavefire",
        "wbdbot",
        "weather",
        "web2mal",
        "web.ima",
        "webbot",
        "webcat",
        "webcor",
        "webcorp",
        "webcrawl",
        "webdat",
        "webdup",
        "webind",
        "webis",
        "webitpr",
        "weblea",
        "webmin",
        "webmoney",
        "webp",
        "webql",
        "webrobot",
        "webster",
        "websurf",
        "webtre",
        "webvac",
        "card card-body bg-lights",
        "wep_s",
        "whiz",
        "win67",
        "windows-rss",
        "winht",
        "winodws",
        "wish",
        "wizz",
        "worio",
        "works",
        "worth",
        "wwwc",
        "wwwo",
        "wwwster",
        "xirq",
        "y!tunnel",
        "yacy",
        "yahoo-mmaudvid",
        "yahooseeker",
        "yahooysmcm",
        "yamm",
        "yang",
        "yoono",
        "yori",
        "yotta",
        "yplus ",
        "ytunnel",
        "zade",
        "zagre",
        "zeal",
        "zebot",
        "zerx",
        "zhuaxia",
        "zipcode",
        "zixy",
        "zmao",
        "zmeu",
        "zune",
        "backdoorbot",
        "black hole",
        "blowfish",
        "botalot",
        "cherrypicker",
        "crescent internet toolpak http ole control",
        "linkscan unix",
        "mozilla4.0 (compatible; bullseye; windows 95)",
        "repomonkey bait &amp; tacklev1",
        "vci webviewer vci webviewer win32",
        "xenu's",
        "xenu's link sleuth",
        "zeus webster pro",
        "8484_Boston_Project",
        "#[Ww]eb[Bb]andit",
        "Abacho",
        "acontbot",
        "AdoSpeaker",
        "ah-ha",
        "AIBOT",
        "#almaden",
        "Amfibibot",
        "Arachmo",
        "Arameda",
        "Arellis",
        "Argus",
        "attach",
        "BecomeBot",
        "BigCliqueBOT",
        "Bimbot",
        "boitho.com-dc",
        "Bot mailto:craftbot@yahoo.com",
        "BruinBot",
        "btbot",
        "CCGCrawl",
        "CipinetBot",
        "citenikbot",
        "ContextAd Bot",
        "contextadbot",
        "ConveraCrawler",
        "ConveraMultiMediaCrawler",
        "CostaCider",
        "CrawlConvera",
        "CrawlWave",
        "#Crescent",
        "CXL-FatAssANT",
        "DataCha0s",
        "DataFountains",
        "Deepindex",
        "devoll.roscard card-body bg-lightspringcatalog.info/spring-fashion-2003.html8/18/2006",
        "DiamondBot",
        "Digger",
        "DISCo Pump",
        "DM-Search",
        "Download Wonder",
        "Downloader",
        "Drecombot",
        "DTAagent",
        "EnfinBot",
        "Eule-Robot",
        "EuripBot",
        "fantomas",
        "Favcollector",
        "Faxobot",
        "FDM_2.x",
        "FileHound",
        "Firefox_1.0.6_kasparek",
        "Firefox_kastaneta",
        "First_Browse_of_COnn",
        "fluffy",
        "Franklin_Locator",
        "FyberSpider",
        "Gaisbot",
        "GalaxyBot",
        "gazz",
        "GenericBot-ax",
        "genevabot",
        "GeoBot",
        "Girafabot",
        "GOFORITBOT",
        "GornKer",
        "GroschoBot",
        "gsa-crawler",
        "HappyFunBot",
        "Healthbot",
        "holmes",
        "HooWWWer",
        "Hotzonu",
        "htdig",
        "Html_Link_Validator_",
        "http_sample",
        "HttpProxy",
        "httpunit",
        "IconSurf",
        "Iltrovatore-Setaccio",
        "Image Stripper",
        "Image Sucker",
        "#Indy Library",
        "InfociousBot",
        "INGRID",
        "InnerpriseBot",
        "Internet Ninja",
        "InternetSeer.com",
        "intraVnews",
        "IOneSearch.bot",
        "ISC_Systems_iRc_Search",
        "Jakarta_Commons-HttpClient",
        "Jayde Crawler",
        "JetBot",
        "JOC Web Spider",
        "KakleBot",
        "Kyluka",
        "lanshanbot",
        "LapozzBot",
        "Link_Valet_Online",
        "LinkAlarm",
        "LocalcomBot",
        "LWP::Simple",
        "Mac_Finder",
        "Mackster",
        "Magnet",
        "Mass Downloader",
        "Matrix",
        "Metaspinner",
        "Microsoft_URL_Control",
        "MIDown tool",
        "Mirago",
        "Missigua_Locator",
        "Mnogosearch",
        "MonkeyCrawl",
        "Mozilla.*NEWT",
        "Mozzilla",
        "MVAClient",
        "My_WinHTTP_Connection",
        "NaverBot",
        "NavissoBot",
        "Net Vampire",
        "NetMind-Minder",
        "NetMonitor",
        "Networking4all",
        "Newsgroupreporter_LinkCheck",
        "NextGenSearchBot",
        "nicebot",
        "NimbleCrawler",
        "NLCrawler",
        "noxtrumbot",
        "NuSearch Spider",
        "NutchCVS",
        "ObjectsSearch",
        "Ocelli",
        "Octora_Beta",
        "Offline Navigator",
        "OmniExplorer_Bot",
        "Omnipelagos",
        "online link validator",
        "Openbot",
        "Orbiter",
        "OutfoxBot",
        "page_verifier",
        "PageBitesHyperBot",
        "Pajaczek",
        "Papa Foto",
        "Patwebbot",
        "PEAR_HTTP_Request_class",
        "PEERbot",
        "PHP_version_tracker",
        "PhpDig",
        "pipeLiner",
        "POE-Component-Client-HTTP",
        "polybot",
        "Pompos",
        "Poodle_predictor",
        "Pooodle_predictor",
        "Popdexter",
        "Port_Huron_Labs",
        "process",
        "psbot test for robots.txt",
        "psycheclone",
        "PyQuery",
        "QweeryBot",
        "RAMPyBot",
        "Random",
        "Ranking-Manager",
        "REL_Link_Checker_Lite",
        "robschecker",
        "RRG",
        "RufusBot",
        "SandCrawler",
        "SANSARN",
        "schibstedsokbot",
        "#scooter",
        "Screw-Ball",
        "Scrubby",
        "Search-10",
        "search.ch",
        "Searchmee!",
        "SearchSpider",
        "Seekbot",
        "Sensis Web Crawler",
        "Sensis.com.au Web Crawler",
        "Shim+Bot",
        "ShunixBot",
        "shybunnie-engine",
        "SideWinder",
        "SiteSpider",
        "#SlySearch test robots.txt",
        "sna-",
        "Snappy",
        "Snoopy",
        "sohu-search",
        "Speed-Meter",
        "SpeedySpider",
        "Spinne",
        "SpokeSpider",
        "Squid-Prefetch",
        "SquidClamAV_Redirector",
        "SquigglebotBot",
        "StackRambler",
        "sureseeker",
        "SurveyBot",
        "SygolBot",
        "SynoBot",
        "Teleport Pro",
        "TerrawizBot",
        "ThisIsOurYear_Linkchecker",
        "thumbshots-de-Bot",
        "Tkensaku",
        "topicblogs",
        "TridentSpider",
        "troovziBot",
        "TutorGigBot",
        "#ua",
        "unchaos_crawler",
        "Updated",
        "URL Spider Pro",
        "URL Spider SQL",
        "Vagabondo",
        "vBSEO_",
        "VoilaBot",
        "W3CRobot",
        "Web Sucker",
        "Web_Downloader",
        "webcrawl.net",
        "WebDataCentreBot",
        "WebEMailExtrac.*",
        "WebFindBot",
        "WebGather",
        "WebGo IS",
        "WebIndexer",
        "Webnavigator",
        "webPluck",
        "Website",
        "Website eXtractor",
        "card card-body bg-lights_Search_II",
        "WEP_Search",
        "WhizBang",
        "WISEbot",
        "WWWeasel",
        "Xaldon WebSpider",
        "Xenu_Link_Sleuth",
        "Xombot",
        "XunBot",
        "yacybot",
        "YadowsCrawler",
        "Yeti",
        "YodaoBot",
        "YottaShopping_Bot",
        "Zatka",
        "Zealbot",
        "Zeus.*Webster",
        "#Zeus_",
        "ZipppBot",
        "Alexibot",
        "Aqua_Products",
        "b2w",
        "Bookmark search tool",
        "Copernic",
        "dumbot",
        "FairAd Client",
        "Flaming AttackBot",
        "Hatena Antenna",
        "Iron33",
        "LinkScan/8.1a Unix",
        "LinkScan/8.1a Unix User-agent: Kenjin Spider",
        "Morfeus",
        "Mozilla/4.0 (compatible; BullsEye; Windows 95)",
        "Oracle Ultra Search",
        "PerMan",
        "Radiation Retriever",
        "RepoMonkey Bait & Tackle",
        "searchpreview",
        "sootle",
        "toCrawl/UrlDispatcher",
        "URL Control",
        "URL_Spider_Pro",
        "WebmasterWorld Extractor",
        "Zeus 32297 Webster Pro V2.9 Win32",
        "Zeus Link Scout",
        "<?",
        "1,1,1,",
        "2icommerce",
        "ActiveTouristBot",
        "adressendeutschland",
        "ADSARobot",
        "AESOP_com_SpiderMan",
        "Alligator",
        "AllSubmitter",
        "aktuelles",
        "Akregat",
        "amzn_assoc",
        "AnotherBot",
        "Apexoo",
        "ASPSe",
        "ASSORT",
        "ATHENS",
        "AtHome",
        "Atomic_Email_Hunter",
        "Atomz",
        "^attach",
        "autohttp",
        "BackStreet",
        "Badass",
        "BenchMark",
        "berts",
        "bew",
        "big.brother",
        "Bigfoot",
        "Biz360",
        "Black",
        "Black.Hole",
        "bladder.fusion",
        "Blog.Checker",
        "BlogPeople",
        "Blogshares.Spiders",
        "Bloodhound",
        "bmclient",
        "Board",
        "BOI",
        "boitho",
        "Bookmark.search.tool",
        "Boston.Project",
        "BotRightHere",
        "Bot.mailto:craftbot@yahoo.com",
        "botpaidtoclick",
        "brandwatch",
        "BravoBrian",
        "Bropwers",
        "Browsezilla",
        "c-spider",
        "char(32,35)",
        "charlotte",
        "Click.Bot",
        "clipping",
        "core-project",
        "cyberalert",
        "^DA$",
        "Daum",
        "Deweb",
        "Digimarc",
        "digout4uagent",
        "DnloadMage",
        "Doubanbot",
        "Download.Demon",
        "Download.Devil",
        "Download.Wonder",
        "DreamPassport",
        "DynaWeb",
        "e-collector",
        "EBM-APPLE",
        "EBrowse",
        "ecollector",
        "edgeio",
        "efp@gmx.net",
        "Email.Extractor",
        "EmailSearch",
        "ESurf",
        "Eval",
        "Exact",
        "EXPLOITER",
        "FairAd",
        "Fake",
        "fastlwspider",
        "FavOrg",
        "Favorites.Sweeper",
        "FDM_1",
        "FEZhead",
        "Firefox.2.0",
        "FlickBot",
        "flunky",
        "Foob",
        "Forex",
        "Franklin.Locator",
        "freefind",
        "FreshDownload",
        "FSurf",
        "Gamespy_Arcade",
        "Get",
        "Ginxbot",
        "glx.?v",
        "Go.Zilla",
        "^gotit$",
        "Green.Research",
        "gvfs",
        "hack",
        "hhjhj@yahoo",
        "HomePageSearch",
        "HouxouCrawler",
        "http.generic",
        "HTTPGet",
        "HTTPRetriever",
        "IBM_Planetwide",
        "iGetter",
        "Image.Stripper",
        "Image.Sucker",
        "imagefetch",
        "iimds_monitor",
        "IncyWincy",
        "Industry.Program",
        "informant",
        "InfoTekies",
        "Ingelin",
        "InstallShield.DigitalWizard",
        "Insuran.",
        "Intelliseek",
        "Internet.Ninja",
        "Internet.x",
        "Irvine",
        "IUPUI.Research.Bot",
        "^Java",
        "java/",
        "Java(tm)",
        "JBH.agent",
        "Jenny",
        "JetB",
        "JetC",
        "jeteye",
        "Kapere",
        "KRetrieve",
        "ksoap",
        "KWebGet",
        "Lachesis",
        "leacher",
        "LeechGet",
        "leipzig.de",
        "libghttp",
        "libwhisker",
        "libwww-FM",
        "LightningDownload",
        "Link",
        "Link.Sleuth",
        "Linkie",
        "LINKS.ARoMATIZED",
        "linktiger",
        "lmcrawler",
        "looksmart",
        "lwp-request",
        "Mac.Finder",
        "Macintosh;.I;.PPC",
        "Mail.Sweeper",
        "MarcoPolo",
        "mark.blonin",
        "MarkWatch",
        "MaSagool",
        "Mass.Downloader",
        "mavi",
        "MCspider",
        "^Memo",
        "MEGAUPLOAD",
        "MetaProducts.Download.Express",
        "Missauga",
        "Missigua.Locator",
        "Missouri.College.Browse",
        "mkdb",
        "MMMoCrawl",
        "Monster",
        "Monza.Browser",
        "MOT-MPx220",
        "mothra/netscan",
        "MovableType",
        "Mozi!",
        "^Mozilla.*Indy",
        "^Mozilla.*NEWT",
        "^Mozilla*MSIECrawler",
        "Mp3Bot",
        "MS.FrontPage",
        "MS.?Search",
        "MSFrontPage",
        "multithreaddb",
        "MyFamilyBot",
        "MyGetRight",
        "NAMEPROTECT",
        "NASA.Search",
        "nationaldirectory",
        "netattache",
        "NetCarta",
        "Netcraft",
        "netprospector",
        "NetResearchServer",
        "Net.Vampire",
        "newLISP",
        "NEWT.ActiveX",
        "^NG",
        "NIPGCrawler",
        "Noga",
        "nogo",
        "Offline.Explorer",
        "Offline.Navigator",
        "OK.Mozilla",
        "Omni",
        "OpaL",
        "OpenTextSiteCrawler",
        "OrangeBot",
        "P3P",
        "PackRat",
        "PagmIEDownload",
        "Papa",
        "Pars",
        "PECL",
        "PersonaPilot",
        "Persuader",
        "PHP.vers",
        "PHPot",
        "Pige",
        "pigs",
        "^Ping",
        "playstarmusic",
        "Port.Huron",
        "Program.Shareware",
        "Progressive.Download",
        "prospector",
        "Provider.Protocol.Discover",
        "Prozilla",
        "PSurf",
        "^puf$",
        "PushSite",
        "PussyCat",
        "PuxaRapido",
        "QuepasaCreep",
        "Radiation",
        "RedCarpet",
        "RedKernel",
        "relevantnoise",
        "replacer",
        "Rover",
        "Rsync",
        "RTG30",
        ".ru)",
        "SAPO",
        "ScoutOut",
        "SearchExpress",
        "searchhippo",
        "searchterms",
        "Second.Street.Research",
        "Security.Kol",
        "Serious",
        "Shai",
        "Shiretoko",
        "SickleBot",
        "sitecheck",
        "SiteCrawler",
        "Site.Sniper",
        "SiteSucker",
        "Slurpy.Verifier",
        "So-net",
        "Spegla",
        "Sphider",
        "SpiderBot",
        "SpiderEngine",
        "SpiderView",
        "SQ.Webscanner",
        "Stamina",
        "Stanford",
        "studybot",
        "sun4m",
        "SurfWalker",
        "syncrisis",
        "TALWinHttpClient",
        "tarspider",
        "Tcs/1",
        "Templeton",
        "The.Intraformant",
        "TV33_Mercator",
        "Twisted.PageGetter",
        "UCmore",
        "UdmSearch",
        "UIowaCrawler",
        "UMBC",
        "UniversalFeedParser",
        "UtilMind",
        "URL.Control",
        "urldispatcher",
        "URLGetFile",
        "User-Agent",
        "vayala",
        "VB_",
        "Viewer",
        "visibilitygap",
        "vobsub",
        "vspider",
        "w:PACBHO60",
        "w3m",
        "WAPT",
        "web.by.mail",
        "Web.Data.Extractor",
        "Web.Downloader",
        "Web.Mole",
        "Web.Sucker",
        "Web2WAP",
        "WebaltBot",
        "WebCapture",
        "webcraft@bea",
        "Webclip",
        "WebCollector",
        "WebCopy",
        "WebDav",
        "webdevil",
        "webdownloader",
        "WebEMail",
        "Webinator",
        "WebFilter",
        "WebFountain",
        "webmole",
        "webpic",
        "WebPin",
        "WebPix",
        "WebRipper",
        "Website.eXtractor",
        "Website.Quester",
        "WebSnake",
        "websucker",
        "webwalk",
        "WebWasher",
        "WebWeasel",
        "WEP.Search.00",
        "WeRelateBot",
        "Whack",
        "WhosTalking",
        "window.location",
        "Wildsoft.Surfer",
        "WinHttpRequest",
        "WinHTTrack",
        "Winnie.Poh",
        "wisenutbot",
        "WUMPUS",
        "Wweb",
        "WWW-Collector",
        "WWW.Mechanize",
        "www.ranks.nl",
        "^x$",
        "X12R1",
        "XGET",
        "Y!OASIS",
        "YaDirectBot",
        "ZBot",
        "Zyborg",
        "choppy",
        "g00g1e",
        "seekerspider",
        "siclab",
        "sqlmap",
        "turnit",
        "xxxyy",
        "youda",
        "finder",
        "acapbot",
        "semalt",
        "AITCSRobot",
        "Arachnophilia",
        "aspider",
        "AURESYS",
        "BackRub",
        "Big Brother",
        "BizBot",
        "BSpider",
        "linklooker",
        "SafetyNet Robot",
        "CACTVS Chemistry Spider",
        "EnigmaBot",
        "Checkbot"
    );
    
    foreach ($bad_bots as $bot) {
        if (strpos(strtolower($useragent), strtolower($bot)) !== false) {
            
            $type = "Bad Bot";
            
            //Logging
            if ($row['logging'] == 1) {
                psec_logging($mysqli, $prefix, $type);
            }
            
            //AutoBan
            if ($row['autoban'] == 1) {
                psec_autoban($mysqli, $prefix, $type);
            }
            
            //E-Mail Notification
            if ($srow['mail_notifications'] == 1 && $row['mail'] == 1) {
                psec_mail($mysqli, $prefix, $site_url, $projectsecurity_path, $type);
            }
            
            echo '<meta http-equiv="refresh" content="0;url=' . $projectsecurity_path . '/pages/badbot-detected.php" />';
            exit;
        }
    }
}
?>