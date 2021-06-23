<?php
	require_once('UI/Login.php');
	require_once('UI/Register.php');
	require_once('UI/Footer.php');
	require_once('UI/ToolBar.php');
	require_once('UI/Support.php');
	require_once('UI/Errors.php');
	require_once('UI/Admin.php');
	require_once('UI/Build.php');
	require_once('UI/News.php');
	require_once('UI/Plus.php');
	require_once('UI/Map.php');
	require_once('UI/Nachrichten.php');
	require_once('UI/Options.php');
	require_once('UI/Manual.php');

	define("BUILDING_BUILDING","بناء:");
	define("BUILDING_COMPLETE","بناء على الفور");
	define("BUILDING_LEVEL","مستوى");
	define("BUILDING_QUEUE","queue");
	define("BUILDING_TIMER","ساعه. الانتهاء في ");
	define("BUILDING_ARCHITECT","البناء");
	define("SIDEINFO_HERO1","بطلك ميت");
	define("SIDEINFO_HERO2","Hero is healthy");
	define("SIDEINFO_HERO3","Hero is in his native village");
	define("SIDEINFO_HERO4","بطلك موجود حاليّاً في القرية");
	define("SIDEINFO_HERO5","خارج القرية");
	define("SIDEINFO_HERO5H","في القرية");
	define("SIDEINFO_HERO6","قرية البطل الرئيسية هي");
	define("SIDEINFO_HERO7","لا يوجد بطل.");
	define("SIDEINFO_HERO8","نظرة عامة");
	define("SIDEINFO_HERO9","مغامرات");
	define("SIDEINFO_HERO10","المغامرات المتاحة");
	define("SIDEINFO_HERO11","الصحة");
	define("SIDEINFO_HERO12","الخبرة");



define("LANG_UR","ar-AE");
define("DIRECTION","rtl");
define("DIRECTION_2","right");
define("LOCATION_NAME","Global - EN");

define("INCLUDED","");
define("INS0","قم بتغيير الصلاحيات للمجلدات الأتية (CHMOD)");
define("INS1","بعد التثبيت");
define("INS2","قم بحذف مجلد install");
define("INS3","وارجع صلاحيات مجلد GameEngine إلي 644");
define("INS4","Along with the installation/usage of this game, you shall be fully responsible for any legal results that may raised initiated by the owners of any unlicensed content you permit your copy of this game to publish.");
define("INS5","Neither the team that created this script nor the team that customised it to create this distribution/release shall be responsible for any damage done to your computer/server system.");
define("INS6","All code was confirmed to be running correctly by the creation team without any visible security risk they were aware of at the time the released it. Similarly for the customisation team who customised it to create this distribution/release.");
define("INS7","Users are asked to review the code on their own accord and behalf.");
define("INS8","You have no rights to edit copyright notices or/and claim this script as your own.");
define("INS9","Last but not least, Enjoy.");
define("INS10","Error creating constant.php check cmod.");
define("INS11","الشهر");
define("INS12","اليوم");
define("INS13","السنة");
define("INS14","الساعة");
define("INS15","دقيقة");
define("INS16","ثانية");
define("INS17","عنوان السيرفر:");
define("INS18","السرعة:");
define("INS19","سرعة القوات:");
define("INS20","حمولة التجار (1 = 1x...):");
define("INS21","حجم الخريطة:");
define("INS21M","25x25");
define("INS22","50x50");
define("INS23","100x100");
define("INS24","150x150");
define("INS25","200x200");
define("INS26","250x250");
define("INS27","300x300");
define("INS28","350x350");
define("INS29","400x400");
define("INS30","الرئيسية:");
define("INS31","حماية المبتدئين");
define("INS31M","2 ساعة");
define("INS32","3 ساعة");
define("INS33","5 ساعة");
define("INS34","8 ساعة");
define("INS35","10 ساعة");
define("INS36","12 ساعة");
define("INS37","24 ساعة (1 يوم)");
define("INS38","48 ساعة (2 يوم)");
define("INS39","72 ساعة (3 يوم)");
define("INS40","120 ساعة (5 يوم)");
define("INS41","حجم المخازن:");
define("INS42","المنطقة الرمادية (بعد كم مربع) *اتركها كما هي:");
define("INS43","المدير");
define("INS44","إظهار الادارة بالاحصائيات:");
define("INS45","اظهار");
define("INS46","اخفاء");
define("INS47","قاعدة البيانات");
define("INS48","المضيف:");
define("INS49","اسم المستخدم:");
define("INS50","كلمة المرور:");
define("INS51","قاعدة البيانات:");
define("INS52","بيانات البلاس");
define("INS53","وقت ترافيان بلاس:");
define("INS54","12 ساعة");
define("INS55","1 يوم");
define("INS56","2 يوم");
define("INS57","3 ايام");
define("INS58","4 ايام");
define("INS59","5 ايام");
define("INS60","6 ايام");
define("INS61","7 ايام");
define("INS62","+25% وقت زيادة:");
define("INS63","12 ساعة");
define("INS64","1 يوم");
define("INS65","2 يوم");
define("INS66","3 ايام");
define("INS67","4 ايام");
define("INS68","5 ايام");
define("INS69","6 ايام");
define("INS70","7 ايام");
define("INS71","تشغيل بيع الموارد؟");
define("INS72","تفعيل");
define("INS73","تعطيل");
define("INS74","تشغيل بيع النقاط الحضارية؟");
define("INS75","تفعيل");
define("INS76","تعطيل");
define("INS77","كمية الموارد المباعة من كل نوع");
define("INS78","تكلفة بيع الموارد");
define("INS79","سعر النقاط الحضارية");
define("INS80","كمية النقاط الحضارية المباعة");
define("INS81","الذهب عند التسجيل");
define("INS82","سكان القرية المدعوة للحصول على الذهب");
define("INS83","كمية الذهب للدعوة");
define("INS84","خيارات السيرفر");
define("INS85","موعد البدأ:");
define("INS86","Timestamp date (generation will be from UTC+0!)");
define("INS87","التحف:");
define("INS88","(Timestamp date)");
define("INS89","قري المعجزة:");
define("INS90","Timestamp date ");
define("INS91","مخططات البناء:");
define("INS92","Timestamp date");
define("INS92M","سرعة توليد النقاط الحضارية:");
define("INS93","عالية");
define("INS94","منخفضة");
define("INS95","المهام");
define("INS96","تشغيل");
define("INS97","تعطيل");
define("INS98","Max number cache images for map");
define("INS99","Max number cache images for hero");
define("INS100","Quality of the map ");
define("INS101","تدريب القوات فورا اذا كان وقت التدريب 0 ثانية");
define("INS102","نعم");
define("INS103","لا");
define("INS104","وقت المزادات");
define("INS105","نسب الواحات");
define("INS106","Begginer protection will be longest every 12 hours on ...(in seconds)");
define("INS107","If your host doesnt have big amout of space please consider! ");
define("INS108","1000 pictures=~80MB");
define("INS109","If your host doesnt have big about of memory RAM place consider");
define("INS110","1000 Pictures=~2.60ГБ");
define("INS111","Perfect quality - 100,medium - 75(Picture will be 3 times worse compared with maximum)");
define("INS112","Populate Oasis");
define("INS113","تحذير");
define("INS114",": قد تستغرق العملية بعض الوقت، لا تقم بإغلاق الصفحة!");
define("INS115","حساب الصياد");
define("INS116","الاسم:");
define("INS117","كلمة المرور:");
define("INS118","ملحوظة: تذكر كلمة السر لأنك ستحتاجها لدخول اللوحة");
define("INS119","Error creating wdata. Check configuration or file.");
define("INS120","انشاء بيانات الخريطة");
define("INS121","تحذير");
define("BUILDING_CANCEL", "الغاء");
define("INS122",": قد تستغرق العملية بعض الوقت، لا تقم بإغلاق الصفحة!");
define("INS123","شكرا لتثبيت السكربت.");
define("INS124","من فضلك احذف مجلد install.");
define("INS125","تم تثبيت السكربت. تم مليء القاعدة, تستطيع الأن تشغيل السيرفر.");
define("INS126","Error importing database. Check configuration.");
define("INS127","انشاء جداول القاعدة");
define("INS128","قد تستغرق العملية بعض الوقت، لا تقم بإغلاق الصفحة!");
define("INS129","How much adventures gives per day?");

define("CLANG","Select a language:");
define("MULTI_RULES","Prohibited:<br/>Register more tham 1 account on 1 IP.<br/>We don't interesting in : you play with brother/sister/family etc: 1 IP - 1 Account.<br/>
Prohibited register accounts with help of friends/from fake IPs,<br/>accounts like this will be find and you will be punished:<br/> For example 50% from troops.<br />Be honest and have a conscience to play fair.");
define("OK","Ok");
define("CROPFINDER","مكتشف القمح");
define("MAP","Mapa");
define("MINIMAP","خارطة مصغرة");
define("GO","حسنا");
define("GO_TO","الإحداثيات");
define("PLEASE_WAIT","Aguarde");

define("CATEGORY","الفئة");
define("EDITPROFILE","Editar perfil");
define("COORDIANTES","الاحداثيات");
define("POPULATION","السكان");
define("WOOD","الخشب");
define("ABONDENDVALLY","Abondend vally");
define("UNOCCUPIEDOASES","واحة غير محتلة");
define("UNOCCUPIEDOASIS","واحة غير محتلة");
define("OCCUPIEDOASES","واحة محتلة");
define("OCCUPIEDOASIS","واحة محتلة");
define("ABANDONEDVALLEY","وادي مهجور");
define("BUILDRALLYPOINTTORAID","(ابني نقطة تجمع)");
define("PLAYER","الاعب");
define("TRIBE","القبيلة");
define("VILLAGE","القرية");
define("ALLIANCE","التحالف");
define("SIDEINFO_ADVENTURES","مغامرة");
define("SIDEINFO_AUCTIONS","Auction");
define("SIDEINFO_PROFILE","Profile");
define("SIDEINFO_ALLIANCE","التحالف");
define("SIDEINFO_ALLY_FORUM","منتدي التحالف");
define("SIDEINFO_CHANGE_TITLE","Clique duplo para renomear a aldeia");
define("SIDEINFO_CHANGEVIL_TITLE","Mudar nome da aldeia");
define("SIDEINFO_CHANGEVIL_LABEL","Novo nome da aldeia");
define("SIDEINFO_CHANGEVIL_BTN","Aceitar");
define("HEADER_MESSAGE_NEW","Novo");


define("MAINMENU","Main Menu");


define("POPUALTION","السكان");
define("VILLAGES","القرى");
//MAIN MENU
define("TRIBE1","الرومان");
define("TRIBE2","الجرمان");
define("TRIBE3","الإغريق");
define("TRIBE4","وحوش");
define("TRIBE5","التتار");
define("TRIBE6","الفراعنة");
define("TRIBE7","المغول");

define("PRISONERS","سجناء");
define("PRISONERSIN","سجناء في");
define("PRISONERSFROM","سجناء من");
define("HOME","الصفحة الرئيسية");
define("PW_ER","pass wrong");
define("INSTRUCT","Instructions");
define("ADMIN_PANEL","Admin Panel");
define("MASS_MESSAGE","Mass Message");
define("LOGOUT","Logout");
define("PROFILE","Profile");
define("SUPPORT","الدعم");
define("RULES","Rules");

define("P","P");
define("L","l");
define("U","u");
define("S","s");
define("UPDATE_T_10","Update Top 10");
define("SYSTEM_MESSAGE","System message");
define("TRAVIAN_PLUS","Travian <b><font color=\"#71D000\">P</font><font color=\"#FF6F0F\">l</font><font color=\"#71D000\">u</font><font color=\"#FF6F0F\">s</font></b>");
define("CONTACT","Contact us!");
define("HEADER_MESSAGES_NEW","New");

define("HEADER_MESSAGES","الرسائل");
define("HEADER_PLUS","Plus");
define("HEADER_ADMIN","Admin");
define("HEADER_PLUSMENU","Plus menu");
define("HEADER_NOTICES","التقارير");
define("HEADER_STATS","الاحصائيات");
define("HEADER_MAP","الخريطة");
define("HEADER_DORF2","مركز القرية");
define("HEADER_DORF1","الموارد");
define("HEADER_GOLD","ذهب");
define("HEADER_SILVER","فضة");
define("HEADER_NIGHT","ليل");
define("HEADER_DAY","نهار");
define("HEADER_NOTICES_NEW","تقرير جديد");
define("NO_PERMISSION","No permission");



define("LOGOUT_TITLE","تم الخروج بنجاح!");
define("LOGOUT_H4","نشكرك على الزيارة");
define("LOGOUT_DESC","هل هناك أشخاص آخرون تستعمل هذا الجهاز؟ للأمان على بياناتك يفضل أن تحذف الكوكيز::");
define("LOGOUT_LINK","حذف ملفات تعريف الإرتباط");
define("PREREG1","سرعة القوات");
define("PREREG2","Administator");
define("PREREG3","Medals in ");
define("PREREG4","Server will start at: ");
define("PREREG5","To start: ");

define("LOGIN_PW_SENT", "تم إرسال كلمة السر");

define("REGISTER_USERINFO","تسجيل");
define("REGISTER_USERNAME","Name");
define("REGISTER_EMAIL","البريد الإلكتروني");
define("REGISTER_PASSWORD","كلمة السر");
define("REGISTER_STARTER","");
define("REGISTER_SELECT_TRIBE","Select Tribe");
define("REGISTER_LOCATION","Location");
define("REGISTER_NE","North-East");
define("REGISTER_NW","North-West");
define("REGISTER_SE","South-East");
define("REGISTER_SW","South-West");
define("REGISTER_RANDOM","Random");
define("REGISTER_MOREINFO","الشروط والأحكام");
define("REGISTER_CLOSED","The register is closed. You can't register to this server.");
define("newmsg","رسائل جديدة:");
//MENU
define("REG","تسجيل");
define("FORUM","المنتدي");
define("CHAT","Chat");
define("IMPRINT","Imprint");
define("MORE_LINKS","More Links");
define("TOUR","Game Tour");
//PLUS
define("PLUS0","Plus Functions");
define("PLUS1","نظرة عامة");
define("PLUS2","المدة");
define("PLUS3","التكلفة");
define("PLUS4","تفعيل");
define("PLUS5","Você tem ");
define("PLUS6","Gold coins");
define("PLUS7","Remaining:");
define("PLUS8","أيام");
define("PLUS9","ساعات");
define("PLUS10","دقائق");
define("PLUS11","Gold");
define("PLUS12","Activate");
define("PLUS13","Extend");
define("PLUS14","Insufficiently gold");
define("PLUS15","Produção: Madeira");
define("PLUS16","Produção: Barro");
define("PLUS17","Produção: Ferro");
define("PLUS18","Produção: Cereal");
define("PLUS19","تبادل 1:1 ");
define("PLUS20","فورا");
define("PLUS21","إلي السوق!");
define("PLUS22","Exchange Gold and Silver");
define("PLUS23","Exchange");
define("PLUS24","إنهاء جميع عمليات البناء والبحث");
define("PLUS25","إنهاء");
define("PLUS26","إنهاء التدريب");
define("PLUS27","نقطة حضارية");
define("PLUS28","Comprar");
define("PLUS29","Every Kind of Resources");
define("PLUS30","Dia");
define("PLUS31","نادي الذهب");
define("PLUS32","خصائص نادي الذهب:");
define("PLUS33","1. قائمة المزارع");
define("PLUS34","2. طرق تجاربة");
define("PLUS35","3. تهريب القوات");
define("PLUS36","4. مستكشف القمحيات");
define("PLUS37","5. مساعد البناء");
define("PLUS38","6. x3 تجارة");
define("PLUS39","كل الوظائف مجانية!");
define("PLUS40","طوال اللعبة");
define("PLUS41","تفعيل");



//active
define("ACTIV1","Hello");
define("ACTIV2","The registration was successful. In the next few minutes you will receive an email with the access information.<br /><br />

The email will be sent to following address:");

define("ACTIV3","In order to activate your account enter the code or click on the link in your email.");
define("ACTIV4","Activation code");
define("ACTIV5","No email received?");
define("ACTIV6","Sometimes the email is moved to the spam folder. For further help click ");
define("ACTIV7","here");
define("ACTIV8","You can undo the registration and re-register with a <u>different email address</u>.
Then the activation code will be send again");
define("ACTIV9","Your account has been successfully activated.</p><p class=\"f9\">Follow this link to <a href=\"login.php\">log in</a>");
define("ACTIV10","Either the password is wrong or the registration has already been deleted.");
//ERRORS
define("USRNM_EMPTY","(إسم المستخدم فارغ)");
define("USRNM_TAKEN","(إسم المستخدم مستعمل)");
define("USRNM_SHORT","(إسم المستخدم قصير)");
define("USRNM_CHAR","(حروف ممنوعة)");
define("PW_EMPTY","(يجب إدخال كلمة المرور)");
define("PW_SHORT","(كلمة المرور قصيرة)");
define("PW_INSECURE","(كلمة المرور سهلة، قم بجعلها أصعب.)");
define("EMAIL_EMPTY","(أدخل البريد الإلكتروني)");
define("EMAIL_INVALID","(بريد إلكتروني خاطيء)");
define("EMAIL_TAKEN","(بريد إلكتروني مستعمل)");
define("TRIBE_EMPTY","<li>إختر القبيلة.</li>");
define("AGREE_ERROR","<li>You have to agree to the game rules and the general terms & conditions in order to register.</li>");
define("LOGIN_USR_EMPTY","أدخل إسم المستخدم.");
define("LOGIN_PASS_EMPTY","أدخل كلمة المرور.");
define("EMAIL_ERROR","البريد الإلكتروني غير موجود");
define("PASS_MISMATCH","كلمات المرور غير متطابقة");
define("ALLI_OWNER","من فضلك قم بنقل قيادة التحالف قبل الحذف.");
define("SIT_ERROR","تم تعيين الوكيل بالفعل");
define("USR_NT_FOUND","الإسم غير موجود.");
define("LOGIN_PW_ERROR","كلمة المرور خاطئة.");
define("WEL_TOPIC","Useful tips & information ");
define("ATAG_EMPTY","الرمز فارغ");
define("ANAME_EMPTY","الإسم فارغ");
define("ATAG_EXIST","الرمز مستخدم");
define("ANAME_EXIST","الإسم مستخدم");


define("CUR_PROD","الإنتاج الحالي");
define("NEXT_PROD","الإنتاج على المستوى التالي ");

//BUILDINGS
define("B1","الحطاب");
define("B1_DESC","الحطّاب يقوم بقطع الأشجار لإنتاج الخشب. كلما تم تطوير الحطاب، يزداد إنتاج الخشب.");
define("B2","حفرة الطين");
define("B2_DESC","يستخرج الطين من حفرة الطين. كلما تم تطوير حفرة الطين، يزداد إنتاج الطين.");
define("B3","منجم الحديد");
define("B3_DESC","يُستخرج عمال المناجم مادة الحديد الثمينة من مناجم الحديد . كلما ازداد مستوى المنجم، يزداد انتاج الحديد في الساعة.");
define("B4","حقول القمح");
define("B4_DESC","في حقول القمح يتم إنتاج الغذاء لسكان القرية، كلما تم تطوير حقول القمح، يزداد إنتاج القمح.");

//DORF1
$lang['dorf'] = array(
	'D1' => 'الخشب',
	'D2' => 'الطين',
	'D3' => 'الحديد',
	'D4' => 'القمح',
	'D5' => 'الرصيد',
	
);
define("LUMBER","الخشب");
define("CLAY","الطين");
define("IRON","الحديد");
define("CROP","القمح");
define("LEVEL","المستوي");
define("CROP_COM",CROP." الاستهلاك");
define("PER_HR","في الساعة");
define("PROD_HEADER","الإنتاج في الساعة");
define("MULTI_V_HEADER","القرى");
define("ANNOUNCEMENT","إعلان");
define("GO2MY_VILLAGE","الذهب إلي القرية");
define("VILLAGE_CENTER","مركز القرية");
define("FINISH_GOLD","إنهاء جميع عمليات البناء والبحث مقابل 2 ذهبة؟");
define("WAITING_LOOP","(إنتظار)");
define("HRS","(ساعة)");
define("DONE_AT","done at");
define("CANCEL","cancel");
define("LOYALTY","الولاء");
define("CALCULATED_IN","Calculated in");
define("SEVER_TIME","Hora Servidor:");


//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
	define("U0","البطل");

	//ROMAN UNITS
	define("U1","جندي أول");
	define("U2","حراس الإمبراطور");
	define("U3","جندي مهاجم");
	define("U4","فرقة تجسس");
	define("U5","سلاح الفرسان");
	define("U6","فرسان قيصر");
	define("U7","كبش");
	define("U8","المقلاع الناري");
	define("U9","حكيم");
	define("U10","مستوطن");

	//TEUTON UNITS
	define("U11","ابو هراوة");
	define("U12","ابو رمح");
	define("U13","ابو فأس");
	define("U14","الكشاف");
	define("U15","مقاتل القيصر");
	define("U16","فرسان الجرمان");
	define("U17","محطمة الأبواب");
	define("U18","المقلاع");
	define("U19","الزعيم");
	define("U20","مستوطن");

	//GAUL UNITS
	define("U21","الكتيبة");
	define("U22","المبارز");
	define("U23","المستكشف");
	define("U24","فرسان الرعد");
	define("U25","فرسان السلت");
	define("U26","فرسان الليل");
	define("U27","محطمة الأبواب الخشبية");
	define("U28","المقلاع الحربي");
	define("U29","رئيس");
	define("U30","مستوطن");

	//NATURE UNITS
	define("U31","جرذ");
	define("U32","عنكبوت");
	define("U33","ثعبان");
	define("U34","خفاش");
	define("U35","خنزير بري");
	define("U36","ذئب");
	define("U37","دب");
	define("U38","تمساح");
	define("U39","نمر");
	define("U40","فيل");

	//NATARS UNITS
	define("U41","جنود قتلة");
	define("U42","محاربي الشوك");
	define("U43","حراس التتار");
	define("U44","طيور التجسس");
	define("U45","فرسان الفؤوس");
	define("U46","فرسان التتار");
	define("U47","فيلة تحطيم الأبواب");
	define("U48","مقاليع التتار");
	define("U49","إمبراطور تتاري");
	define("U50","مستوطنين");

	//Egyptian UNITS
	define("U51","ميليشيا الرقيق");
	define("U52","حارس الرماد");
	define("U53","محارب خاباش");
	define("U54","مستطلع سيبتو");
	define("U55","حارس أنحور");
	define("U56","عربة رشب");
	define("U57","مدكّات");
	define("U58","منجنيق حجري");
	define("U59","أمير حاتي");
	define("U60","مستوطن");

	//Huns UNITS
	define("U61","مرتزق");
	define("U62","رامي سهام");
	define("U63","مراقب");
	define("U64","فارس سهوب");
	define("U65","قنّاص");
	define("U66","نهاب");
	define("U67","مدقّ رأس الكبش");
	define("U68","منجنيق");
	define("U69","خاقان");
	define("U70","مستوطن");


	define("U99","فخاخ");
//INDEX.php

define("PLAYER_STATISTICS","إحصائيات الاعب");


define("P_ONLINE","Players online: ");
define("P_TOTAL","Players in total: ");
define("CHOOSE","Please choose a server.");
//define("STARTED"," The server started ". round((time()-COMMENCE)/86400) ." days ago.");

//ANMELDEN.php
define("NICKNAME","إسم المستخدم");

define("INVITED","مدعو من قبل (إذا وجد)");
define("EMAIL","البريد الإلكتروني");
define("PASSWORD","كلمة السر");
define("ROMANS","Romans");
define("TEUTONS","Teutons");
define("GAULS","Gauls");
define("NW","North West");
define("NE","North East");
define("SW","South West");
define("SE","South East");
define("RANDOM","random");
define("ACCEPT_RULES","أوافق على جميع <a href='rules.php' target='_blank'>الشروط والأحكام</a> الخاصة باللعبة.");
define("ONE_PER_SERVER","Each player may only own ONE account per server.");
define("BEFORE_REGISTER","Before you register an account you should read the <a href='../anleitung.php' target='_blank'>rules</a>");
define("MULTIBAN","One computer-1account.All multiaccounts will be banned!");
define("HOURS","ساعة");
define("SIGN1","Registration");
define("SIGN2","Select Tribe");
define("SIGN3","Select Region");
define("SIGN4","الصفحة الرئيسية");
define("SIGN5","تسجيل");
define("SIGN6","دخول");
define("SIGN7","تفعيل الحساب");
define("SIGN8","Bank");

//QUESTS
define("QST0","بحث");
define("QST1","مهمة");
define("QST2","الحطاب");
define("QST3","بناء مستوى الحطاب <b>5</b>");
define("QST4","المحاصيل");
define("QST5","بناء مستوى الأراضي الزراعية <b>3</b>");
define("QST6","الحديد والطين");
define("QST7","قم ببناء حفرة الطين ومنجم الحديد إلى المستوى <b>4</b>");
define("QST8","المبنى الرئيسي");
define("QST9","بناء مستوى المبنى الرئيسي <b>8</b>");
define("QST10","الاقتصادية");
define("QST11","Build warehouse and granary Level <b>4</b>,Marketplace Level <b>1</b>");
define("QST12","Militarisation");
define("QST13","Build rally point Level <b>1</b>, Barracks Level <b>3</b>");
define("QST14","Reliable Protection");
define("QST15","Train 100 units and build Wall level <b>8</b>");
define("QST16","First Blood");
define("QST17","Take <b>1000</b> Attack points.");
define("QST18","Viva la Socium!");
define("QST19","Visit one of our groups");
define("QST20","End of tasks!");
define("QST21","At this moment no more quests.In future will be more quests,but now-good game!:)");
define("QST22","Perfect!Yor reward:");
define("QST23","To the next Task!");

//ATTACKS ETC.
define("TROOP_MOVEMENTS","حركة القوات:");
define("ARRIVING_REINF_TROOPS","تعزيزات قادمة");
define("ARRIVING_REINF_TROOPS_SHORT","يعزز");
define("OWN_ATTACKING_TROOPS","Own attacking troops");
define("ATTACK","المهاجم");
define("OWN_REINFORCING_TROOPS","Own reinforcing troops");
define("TROOPS_DORF","القوات:");


//LOGIN.php
define("COOKIES","You must have cookies enabled to be able to log in. If you share this computer with other people you should log out after each session for your own safety.");
define("NAME","Name");
define("PW_FORGOTTEN","Password forgotten?");
define("PW_REQUEST","Then you can request a new one which will be sent to your email address.");
define("PW_GENERATE","All fields required");
define("EMAIL_NOT_VERIFIED","Email not verified!");
define("EMAIL_FOLLOW","Follow this link to activate your account.");
define("VERIFY_EMAIL","Verify Email.");
define("LOGIN_SERVER_START","سيبدأ السيرفر في:");
define("LOGIN_FOR_GAME","Login");

//404.php
define("NOTHING_HERE","Nothing here!");
define("WE_LOOKED","We looked 404 times already but can't find anything");

//TIME RELATED
define("CALCULATED","Calculated in");
define("SERVER_TIME","وقت السيرفر:");

//MASSMESSAGE.php
define("MASS","رسالة جماعية");
define("MASS_SUBJECT","العنوان:");
define("MASS_COLOR","لون الرسالة:");
define("MASS_REQUIRED","جميع الحقول مطلوبة");
define("MASS_UNITS","Images (units):");
define("MASS_SHOWHIDE","Show/Hide");
define("MASS_READ","Read this: after adding smilie, you have to add left or right after number otherwise image will won't work");
define("MASS_CONFIRM","تاكيد");
define("MASS_REALLY","هل أنت متأكد من ارسال رسالة جماعية؟");
define("MASS_ABORT","Aborting right now");
define("MASS_SENT","Mass IGM was sent");

// Menu items

	define("GAME_TOUR","Game Tour");

	define("FORUM_LINK","http://forum.travian.com");
	define("MORE_GAMES","More games");
	define("REGISTER","Register");
	define("LOGIN","Login");
	define("MANUAL","Manual");
	define("TUTORIAL","Tutorial");

	define("FAQ","FAQ");
	define("SPIELREGELN","Game Rules");
	define("AGB","Terms");

	define("LINKS","Links");

	define("INSTRUCTIONS","Instructions");
	define("MULTIHUNTER_PANEL","Multihunter Panel");
	define("UPDATE_TOP_TEN","Update Top 10");

	define("HELP","Help");

// Index


//profile
define("PROFHEAD","");
define("ACC1","كلمة المرور");
define("ACC2","كلمة المرور القديمة");
define("ACC3","كلمة المرور الجديدة");
define("ACC4","Change email");
define("ACC5","Please enter your old and your new e-mail addresses. You will then receive a code snippet at both e-mail addresses which you have to enter here.");
define("ACC6","Old email");
define("ACC7","New email");
define("ACC8","وكلاء الحساب");
define("ACC9","يستطيع الوكيل تسجيل الدخول الى عضويتك بإستخدام اسم الإستعارة الخاص بك، وكلمة السر الخاص به. يسمح لك بتسجيل وكيلين على عضويتك كحد اقصى.");
define("ACC10","اسم الوكيل");
define("ACC11","لا تمتلك وكلاء.");
define("ACC12","<td class=\"note\" colspan=\"2\">For delete sitter click <img class=\"del\" src=\"img/x.gif\" title=\"del\" alt=\"del\"></td>");
define("ACC13","حذف الحساب");
define("ACC14","هنا يمكنك حذف عضويتك. حالما يبدأ الحذف، سيستغرق الأمر ثلاثة أيام لحذف العضوية النهائي. يمكنك إلغاء الحذف خلال الفترة متى ما شئت بالضغط على إشارة × الحمراء. لا يمكنك الدخول في مزادات أو استخدام الصرّاف طالما أن عضويتك قيد الحذف.");
define("ACC15","هل أنت متأكد من حذف الحساب ؟");
define("ACC16","تـأكيد كلمة السر:");
define("ACC17","نعم");
define("ACC18","لا");
define("ACC19","الحذف بعد:");
define("ACC20","انت وكيل على الحسابات التالية");
define("ACC21","الوكلاء");
define("SAVE","حفظ");
 //menu prof
define("PROFM1","نظرة عامة");
define("PROFM2","تعديل الملف الشخصي");
define("PROFM3","الروابط");
define("PROFM4","الحساب");
define("PROFM5", "الجلسات");
define("PROFM6", "الحالة");
define("PROFM7", "Who");
define("PROFM8", "Recent Activity");
define("PROFM9", "Owner");
define("PROFM10", "Deputy");
define("PROFM11", "Dual");
define("PROFM12", "You");
//OVERVIEW
define("OVERVIEW1","الاعب");
define("OVERVIEW2","التفاصيل");
define("OVERVIEW3","الوصف");
define("OVERVIEW4","الرتبة");
define("OVERVIEW5","القبيلة");
define("OVERVIEW6","التحالف");
define("OVERVIEW7","القرى");
define("OVERVIEW8","السكان");
define("OVERVIEW9","العمر");
define("OVERVIEW10","محارب");
define("OVERVIEW11","محاربة");
define("OVERVIEW12","النوع");
define("OVERVIEW13","السكن");
define("OVERVIEW14","تعديل الملف الشخصي");
define("OVERVIEW15","إرسال رسالة");
define("OVERVIEW16","القرية");
define("OVERVIEW17","الاسم");
define("OVERVIEW18","السكان");
define("OVERVIEW19","الإحداثيات");
define("OVERVIEW20","عاصمة");
define("OVERVIEW21","محظور");
define("OVERVIEW22","تاريخ الميلاد");
define("OVERVIEW23","يناير");
define("OVERVIEW24","فبراير");
define("OVERVIEW25","مارس");
define("OVERVIEW26","إبريل");
define("OVERVIEW27","مايو");
define("OVERVIEW28","يونيو");
define("OVERVIEW29","يوليو");
define("OVERVIEW30","أغسطس");
define("OVERVIEW31","سبتمبر");
define("OVERVIEW32","نوفمبر");
define("OVERVIEW33","اكتوبر");
define("OVERVIEW35","الميداليات");
define("OVERVIEW36","التصنيف");
define("OVERVIEW37","الإسبوع");
define("OVERVIEW38","الكود");
define("OVERVIEW39","محارب");
define("OVERVIEW40","محاربة");
//medals
define("MEDAL1","مهاجمون ");
define("MEDAL2","مدافعون ");
define("MEDAL3","مطورون ");
define("MEDAL4","سارقون ");
define("MEDAL5","أفضل 10 مهاجم ومدافع");
define("MEDAL6","أفضل 3 من مهاجمون ");
define("MEDAL7","أفضل 3 من مدافعون ");
define("MEDAL8","أفضل 3 من مطورون ");
define("MEDAL9","أفضل 3 من سارقون ");
define("MEDAL10","مطور ");
define("MEDAL11","أفضل 3 من مطورون ");
define("MEDAL12","أفضل 10 من مهاجمون ");
define("MEDAL20","يوم");
define("DNYA","الأسبوع");
define("TIMES","مرات");
define("MEDAL15","");
define("MEDAL16","");
define("MEDAL17","بطل ");
define("MEDAL18","متاجر ");
define("MEDAL19","علي التوالي");
define("BONUS","Bonus");
//statistic..zzzest'
define("STATISTIC1","اللاعبون الكبار");
define("STATISTIC2","لم يتم ايجاد الاعب");
define("STATISTIC3","غير موجود");
define("STATISTIC4","التحالفات الكبيرة");
define("STATISTIC5","لم يتم ايجاد التحالف");
define("STATISTIC6","نقطة");
define("STATISTIC7","التحالفات الكبيرة (المهاجم)");
define("STATISTIC8","التحالفات الكبيرة (المدافع)");
define("STATISTIC9","افضل");
define("STATISTIC10","الأكثر خبرة الأبطال");
define("STATISTIC11","الخبرة");
define("STATISTIC12","لم يتم ايجاد البطل");
define("STATISTIC13","اللاعبون الكبار (المهاجم)");
define("STATISTIC14","اللاعبون الكبار (المدافع)");
define("STATISTIC15","Players Statistic(Romans)");
define("STATISTIC16","Players Statistic(Germans)");
define("STATISTIC17","Players Statistic(Gauls)");
define("STATISTIC18","Resourses");
define("STATISTIC19","الاعبين");
define("STATISTIC20","إجمالي الاعبين");
define("STATISTIC21","الاعبين النشطين");
define("STATISTIC22","الاعبين المتواجدين");
define("STATISTIC23","القبائل");
define("STATISTIC24","القبيلة");
define("STATISTIC25","مسجل");
define("STATISTIC26","النسبة");
define("STATISTIC27","معجزة العالم");
define("STATISTIC28","الاعبين");
define("STATISTIC29","التحالفات");
define("STATISTIC30","الأبطال");
define("STATISTIC31","عام");
define("STATISTIC32","Statistic");
define("STATISTIC33","or");
define("STATISTIC34","السابق");
define("STATISTIC35","التالي");
define("STATISTIC36","Players Statistic(Monsters)");
define("STATISTIC37","المدافع");
define("STATISTIC38","القري");
//alliance
define("ALLIANCE1","الخيارات");
define("ALLIANCE2","توزيع المناصب");
define("ALLIANCE3","تغيير الإسم");
define("ALLIANCE4","طرد لاعب");
define("ALLIANCE5","تغيير الوصف");
define("ALLIANCE6","الدبلوماسية");
define("ALLIANCE7","دعوة لاعب");
define("ALLIANCE8","مغادرة التحالف");
define("ALLIANCE9","أحداث التحالف");
define("ALLIANCE10","الحدث");
define("ALLIANCE11","التاريخ");
define("ALLIANCE12","في حالة مغادرة التحالف يجب عليك إدخال كلمة المرور لأسباب أمنية.");
define("ALLIANCE13","دبلوماسية التحالف");
define("ALLIANCE14"," عرض تحالف");
define("ALLIANCE15"," عرض  ميثاق عدم إعتداء");
define("ALLIANCE16"," عرض حرب");
define("ALLIANCE17","ملحوظة");
define("ALLIANCE18","لعرض التحالفات بينك وبين التحالفات الأخري تلقائيا فى الوصف, أدخل <span class=\"e\">[diplomatie]</span> في الوصف, <span class=\"e\">[ally]</span>, <span class=\"e\">[nap]</span> و <span class=\"e\">[war]</span> ايضا متاحين.");
define("ALLIANCE19","عروضك");
define("ALLIANCE20","عروض خارجية");
define("ALLIANCE21","عروض حالية");
define("ALLIANCE22","تحالف مع");
define("ALLIANCE23","ميثاق عدم اعتداء");
define("ALLIANCE24","حرب مع");
define("ALLIANCE25","المنصب");
define("ALLIANCE26","Adding permission");
define("ALLIANCE27","Mass.message");
define("ALLIANCE28","من هنا يمكنك تعديل صلاحيات التحالف & المناصب.");
define("ALLIANCE29","الهجمات");
define("ALLIANCE30","منا هنا يمكنك طرد لاعب من التحالف.");
define("ALLIANCE31","مدعو");
define("ALLIANCE32","تحالف مع");
define("ALLIANCE33"," مدعو بواسطة ");
define("ALLIANCE34"," قام برفض دعوة التحالف");
define("ALLIANCE35"," قام بحذف دعوة التحالف");
define("ALLIANCE36"," قام بالإنضمام إلي التحالف");
define("ALLIANCE37","التحالف ممتليء");
define("ALLIANCE38","مؤسس التحالف");
define("ALLIANCE39","تم إنشاء التحالف بواسطة");
define("ALLIANCE40"," قام بتغيير إسم التحالف");
define("ALLIANCE41"," إنضم إلي التحالف");
define("ALLIANCE42"," قام بتغيير وصف التحالف");
define("ALLIANCE43"," قام بتغيير الصلاحيات");
define("ALLIANCE44"," قام بالخروج من التحالف");
define("ALLIANCE45"," عرض تحالف مع");
define("ALLIANCE46"," عرض ميثاق عدم إعتداء مع");
define("ALLIANCE47"," قام بالحرب ضد");
define("ALLIANCE48","الدعوة ارسلت");
define("ALLIANCE49","You have already sended them a invite");
define("ALLIANCE50","hacker?yep?");
define("ALLIANCE51","Alliance does not exist");

//crop finder or nice place for ddos,lol
define("FINDER1","Here you can search villages with 9 and 15 crop fields with crop oases.");
define("FINDER2","بحث");
define("FINDER3","موقع البدأ");
define("FINDER4","النوع");
define("FINDER5","الواحات");
define("FINDER6","غير محتلة");
define("FINDER7","غير محتلة");
define("FINDER8","المسافة");
define("FINDER9","الموقع");
define("FINDER10","محتل بواسطة");
define("FINDER11","مستكشف الحقول");
define("FINDER12","واحات");
define("FINDER13","");
define("FINDER14","");
define("FINDER15","");
define("FINDER16","");
define("FINDER17","");
//otpravka figni
define("OTPRAV1","مغامرة");
define("OTPRAV2","تعزيز");
define("OTPRAV3","المهاجم");
define("OTPRAV4","نهب");
define("OTPRAV5","استكشاف");
define("OTPRAV6","تعزيز إلي");
define("OTPRAV7","هجوم كامل على");
define("OTPRAV8","هجوم للنهب على");
define("OTPRAV9","تجسس");
define("OTPRAV10","التجسس على الموارد والقوات<br>");
define("OTPRAV11","التجسس على القوات والتحصينات");
define("OTPRAV12","الهدف");
define("OTPRAV13","عشوائي");
define("OTPRAV14","لديك حفلة قائمة. الأهداف العشوائية فقط القابلة للإصابة.");
define("OTPRAV15","(سيتم مهاجمتها بواسطة المقاليع)");
define("OTPRAV16","تحفة");
define("OTPRAV17","الوصول في");
define("OTPRAV18","مازال  الاعب تحت حماية المبتدئين");
define("OTPRAV19","أي هجوم على لاعب أخر يكلفك إنهاء حماية المبتدئين");
define("OTPRAV20","");

//Artefacti
define("ART1","المهندس المعماري الصغيرة");
define("ART2","المهندس المعماري الكبيرة");
define("ART3","المهندس المعماري النادرة");
define("ART4","تحفة القوات السريعة الصغيرة");
define("ART5","تحفة القوات السريعة الكبيرة");
define("ART6","تحفة القوات السريعة النادرة");
define("ART7","تحفة المستكشف الصغيرة");
define("ART8","تحفة المستكشف الكبيرة");
define("ART9","تحفة المستكشف النادرة");
define("ART10","تحفة بناء القوات الصغيرة");
define("ART11","تحفة بناء القوات الكبيرة");
define("ART12","تحفة بناء القوات النادرة");
define("ART13","تحفة المخزن الكبير الصغيرة");
define("ART133","تحفة المخزن الكبير الكبيرة");
define("ART14","تحفة مخططات البناء");
define("ART15","تؤثر في البناء.");
define("ART16","هذه التحفة تحمي قريتك من المقاليع ومحطمات الأبواب. من خلالها تزداد صلابة المباني وحائط المدينة.");
define("ART17","هذه التحفة تضاعف سرعة القوات.");
define("ART18","هذه التحفة تدع المستكشف الخاص بك 5×‬ قويا عن وضعه الطبيعي. جميع الكشافة المقيمين في القرية, او في الطريق الى قرية أخرة للتجسس تستفيد من هذه المكافاة. يمكنك أيضا في نقطة التجمع معرفة أنواع قوات الهجوم القادمة اليك لكن ليس عدد هذه الجنود.");
define("ART19","هذة االتحفة تقلل من المدة الزمنية لتدريب القوّات في السكن/القصر، الثكنة، الاسطبل والمصانع الحربية.");
define("ART20","تمكّنك مخططات البناء من تشييد المخازن الكبيرة ومخازن الحبوب الكبيرة. وهي ضرورية أيضاً لرفع مستويات هذه المخازن بعد التشييد.");
define("ART21","تحفة مطلوبة للقدرة على بناء معجزة العالم.");

//karta vrode
define("BAN","محظور");
define("KAR1","وادي مهجور");
define("KAR2","واحة غير محتلة");
define("KAR3","واحة محتلة");
define("KAR4","There is no<br>information available.");
define("KAR5","إنشاء قرية جديدة");
define("KAR6","نقطة حضارية");
define("KAR7","مستوطنين");
define("KAR8","قم ببناء نقطة التجمع");
define("KAR9","إرسال قوات");
define("KAR10","حماية المبتدئين");
define("KAR11","إرسال تجار");
define("KAR12","إضافة إلي قائمة المزارع");
define("KAR13","إضافة إلي قائمة المزارع (موجود)");
define("KAR14","إضافة إلي قائمة المزارع (الحد الأقصي)");
define("KAR15","Land distribution");
define("KAR16","مركز الخريطة");
define("KAR17","قم ببناء السوق");
define("KAR18","الخريطة");
define("KAR19","البحث");
define("KAR20","قائمة الأهداف المفضلة");
define("KAR21","الموقع");
define("KAR22","أخر هجوم");
define("KAR23","ميت");
define("KAR24","الجائزة");

//ss6Ilo4ki EBAN6IE:D
define("LINK1","الرابط");
define("LINK2","العنوان");
define("LINK3","");
define("LINK4","");

//pravila anti-gad6I
define("RULES1","Правила игры");
define("RULES2","Данные правила игры являются правилами разработанные администрацией xtravian.net . В случае блокировки учетной записи, а также в целях лучшего понимания запрещенных действий, следует обратиться к Мультихантеру, к §3.<br>
Обход правил игры является нарушением. Правила являются едиными и обязательны к соблюдению всеми игроками, в том числе и теми, которые собираются удалить или уже удаляют свои учетные записи.");
define("RULES3","§ 1 Учетная запись");
define("RULES4","§1.1. Каждый игрок имеет право владеть только одной учетной записью на одном и том же игровом сервере.");
define("RULES5","§1.2. Владельцем игровой учетной записи является тот игрок, чей адрес электронной почты прописан в настройках учетной записи. Изменить электронный адрес возможно в профиле учетной записи (Профиль » Учетная запись).");
define("RULES6","§1.3. Передача пароля от учетной записи лицам, играющим на этом же сервере, запрещена. Запрещены также и входы на учетные записи других игроков по паролю владельца. Любые подобные действия классифицируются как владение двумя и более учетными записями на одном игровом сервере. ");
define("RULES7","Игра нескольких игроков на одной учетной записи допускается при условии, что ни один из игроков не владеет и/или не играет другими учетными записями на том же игровом сервере. ");
define("RULES8","Запрещается также использовать одинаковые пароли на учетных записях при использовании общего компьютера и/ или замещении.");
define("RULES9","§1.4. Владелец учетной записи несет полную ответственность за всё происходящее с его учетной записью.");
define("RULES10","§ 2 Игровая этика");
define("RULES11","§2.1. Продажа и покупка учетной записи, единиц войск, ресурсов или действий игроков запрещены. Это относится также и к инвестированному в учетную запись времени.");
define("RULES12","§2.2. Оскорбления, унижения или прочие сомнительные отзывы о других игроках в любой форме и в любом месте в игре запрещены. Использование ненормативной лексики (в том числе и завуалированной) и любые угрозы, касающиеся реальной жизни, также запрещены.");
define("RULES13","§2.3. Запрещается подражание официальным структурам xtravian.net, как и использование имен, названий, носящих оскорбительный и некорректный характер с точки зрения нравственных и политических норм.");
define("RULES14","§2.4. Составление игровых профилей и профилей альянсов допустимо только на русском и английском языках.");
define("RULES15","§2.5. Реклама любого рода, спам или цепочные письма запрещены.");
define("RULES16","§2.6. Публикация игровых сообщений, электронных писем игроков, мультихантеров или коммьюнити-менджеров запрещена.");
define("RULES17","§2.7. Запрещено призывать игроков к нарушению правил игры, удалению, передаче пароля, совместной игре на одной учетной записи, требовать передать учетную запись или указать заместителем.");
define("RULES18","§2.8. Использование ошибок в игре для извлечения какой-либо выгоды запрещено. Использование каких-либо программ, автоматизирующих и/или имитирующих деятельность игрока, а также изменяющих каким-либо образом внешний вид игры, запрещено. Исключением является использование графических пакетов.");
define("RULES19","§ 3 Административные постановления");
define("RULES20","§3.1. Способ наказания при нарушении правил определяют мультихантеры и/или администрация. Наказание в любом случае будет превосходить выгоду, полученную от нарушения. Без каких-либо исключений будут оштрафованы все учетные записи, которые имели отношение к нарушению правил. Потерянные во время блокировки сырье, постройки, деревни или войска не возмещаются. Потерянное вследствие блокировки золото и время доступа к xtravian.net Плюс не возмещается. Для игроков, покупающих золото, нет никаких привилегий при обработке писем и определении наказания.");
define("RULES21","§3.2. Мультихантер является единственным контактным лицом относительно нарушений правил. Игроки могут приводить аргументы в качестве доказательства своей правоты посредством отправки сообщений мультихантеру. В случае несогласия с решением мультихантера, игрок может обратиться к администрации.");
define("RULES22","Все вопросы о нарушениях и наказаниях команда xtravian.net  решает только с владельцем учетной записи.");
define("RULES23","§3.3. Команда xtravian.net  оставляет за собой право изменения правила игры в любое время.");
define("PERC","في المئة");

$lang['header'] = array (
							0 => 'الموارد',
							1 => 'مركز القرية',
							2 => 'الخريطة',
							3 => 'الإحصائيات',
							4 => 'التقارير',
							5 => 'الرسائل',
							6 => 'قائمة بلاس');

		$lang['buildings'] = array (
							1 => "الحطاب",
							2 => "حفرة الطين",
							3 => "منجم الحديد",
							4 => "حقول القمح",
							5 => "معمل النجارة",
							6 => "مصنع البلوك",
							7 => "مصنع الحديد",
							8 => "المطاحن",
							9 => "المخابز",
							10 => "مستودع الخام",
							11 => "مخزن الحبوب",
							12 => "أفران صهر الحديد",
							13 => "أفران صهر الحديد",
							14 => "ساحة البطولة",
							15 => "المبنى الرئيسي",
							16 => "نقطة التجمع",
							17 => "السوق",
							18 => "السفارة",
							19 => "الثكنة",
							20 => "الإسطبل",
							21 => "المصانع الحربية",
							22 => "الأكاديمية",
							23 => "المخبأ",
							24 => "البلدية",
							25 => "السكن",
							26 => "القصر",
							27 => "الخزنة",
							28 => "المكتب التجاري",
							29 => "ثكنة كبيرة",
							30 => "إسطبل كبير",
							31 => "سور المدينة",
							32 => "جدار المدينة",
							33 => "حائط المدينة",
							34 => "الحجّار",
							35 => "المقهى",
							36 => "الصياد",
							37 => "قصر الأبطال",
							38 => "مستودع الخام الكبير",
							39 => "صومعة كبيرة",
							40 => "أعجوبة العالم",
							41 => "ساقية الخيول",
							42 => "جدار حجري",
							43 => "ساتر مؤقت",
							44 => "مركز قيادة",
							45 => "محطات المياه");

$lang['desc'][ 1 ] = array ( 0 => 'الحطّاب يقوم بقطع الأشجار لإنتاج الخشب. كلما تم تطوير الحطاب، يزداد إنتاج الخشب.');
$lang['desc'][ 2 ] = array ( 0 => 'يستخرج الطين من حفرة الطين. كلما تم تطوير حفرة الطين، يزداد إنتاج الطين.');
$lang['desc'][ 3 ] = array ( 0 => 'يُستخرج عمال المناجم مادة الحديد الثمينة من مناجم الحديد . كلما ازداد مستوى المنجم، يزداد انتاج الحديد في الساعة.');
$lang['desc'][ 4 ] = array ( 0 => 'في حقول القمح يتم إنتاج الغذاء لسكان القرية، كلما تم تطوير حقول القمح، يزداد إنتاج القمح.');
$lang['desc'][ 5 ] = array ( 0 => 'في معمل النجارة يجمع الحطاب الخشب لتحوليه . كلما ازداد مستوى البناء، يزداد انتاج الخشب لغاية 25 فى المئه.');
$lang['desc'][ 6 ] = array ( 0 => 'يتحول الطين الى البلوك في مصنع البلوك. كلما ازداد مستوى المصنع، يزداد انتاج الطين لغاية 25 فى المئه.');
$lang['desc'][ 7 ] = array ( 0 => 'يتم صهر الحديد في المسبك. كلما ازداد مستوى المسبك، يزداد انتاج الحديد لغاية 25 فى المئه.');
$lang['desc'][ 8 ] = array ( 0 => 'يتم في المطاحن طحن القمح وتحويله الى الطحين. كلما تم تطوير المطاحن أكثر، يزداد انتاج القمح لغاية 25 فى المئه.');
$lang['desc'][ 9 ] = array ( 0 => 'في المخابز يحول دقيق المطحنة من الى خبز . بالتزامن مع المطاحن يزداد انتاج القمح بنسبة تصل الى 50 في المئة.');
$lang['desc'][ 10 ] = array ( 0 => 'في المخزن يتم تخزين موارد الخشب والطين والحديد. كلما إزداد مستوى المخزن، تزداد طاقته التخزينية.');
$lang['desc'][ 11 ] = array ( 0 => 'في الصومعة يخزن القمح المنتج من حقولك. كلما ازداد مستوى صومعة، تزداد طاقته التخزينية.');
$lang['desc'][ 12 ] = array ( 0 => 'يتم تعزيز أسلحة ودروع المحاربين في أفران صهر الحديد. من خلال زيادة مستواها، يمكنك طلب تصنيع أسلحة ودروع أفضل.');
$lang['desc'][ 13 ] = array ( 0 => 'يتم تعزيز أسلحة ودروع المحاربين في أفران صهر الحديد. من خلال زيادة مستواها، يمكنك طلب تصنيع أسلحة ودروع أفضل.');
$lang['desc'][ 14 ] = array ( 0 => 'يمكن زيادة قدرة تحمّل قوّاتك بتدريبها في ساحة البطولة. كلما ارتفع مستوى ترقية المبنى، ازدادت سرعة قواتك في المسافات التي تتجاوز 20 حقلاً بحد أدنى.');
$lang['desc'][ 15 ] = array ( 0 => 'مهندسو القرية يعيشون في المبنى الرئيسي. كلما ازداد مستوى بناء المبنى الرئيسي، تزداد سرعة إنشاء المباني الجديدة.');
$lang['desc'][ 16 ] = array ( 0 => 'في نقطة التجمع تلتقي قوات القرية. من هنا يمكنك إرسالهم للهجوم أو لنهب أو لتعزيز القرى الأخرى. نقطة التجمع لا يمكن ان تبنى إلا على بقعة التجمع في وسط القرية.');
$lang['desc'][ 17 ] = array ( 0 => 'يمكنك تبادل الموارد التجارية مع اللاعبين الآخرين عن طريق السوق. كلما ازداد بناؤه ،يزداد عدد التجار.');
$lang['desc'][ 18 ] = array ( 0 => 'السفارة مكتب للدبلوماسيين. في المستوى 1 ، يمكنك الإنضمام الى الحلف.') ;
$lang['desc'][ 19 ] = array ( 0 => 'فى الثكنات يتم تدريب الجنود . كلما ازداد بناء الثكنه ، تزداد سرعة تدريب الجنود.');
$lang['desc'][ 20 ] = array ( 0 => 'في الاسطبل يتم تدريب الفرسان. كلما ارتفع مستوى الإسطبل ازدادت سرعة تدريبهم.');
$lang['desc'][ 21 ] = array ( 0 => 'في المصانع الحربية تنتج الاسلحة مثل محطمة الابواب والمقلاع. كلما ازداد بناء المصانع الحربية، تتنوع الوحدات المنتجة أكثر.');
$lang['desc'][ 22 ] = array ( 0 => 'يمكن تطوير الانواع الجديدة من القوات في الاكاديميه. ،كلما ازداد مستوى الاكاديميه، يزداد عدد الوحدات المنتجة.');
$lang['desc'][ 23 ] = array ( 0 => 'في حالة وقوع هجوم على قريتك ، يمكن اخفاء جزء من الموارد في المخبأ. لا يمكن سرقة هذه الموارد. <br><br>في المستوى 1 ، تخبئ 200 وحدة من كل الموارد. سعة المخابئ الإغريقية أكبر بمرة ونصف.<br><br>إذا هاجم بطل جرماني قرية، فإن مخابئها يمكن أن تخفي 80% فقط من سعتها الطبيعية.');
$lang['desc'][ 24 ] = array ( 0 => 'يمكنك اقامة حفلات لمواطنيكم في قاعة المدينة. هذه الحفلات من تزيد عدد النقاط الحضارية.');
$lang['desc'][ 25 ] = array ( 0 => 'يحمي السكن القرية ضد غزوات الخصوم. يمكنك بناء سكن واحد في كل قرية. هنا يمكنك تدريب الوحدات القتالية التي تستطيع تأسيس قرية جديدة أو احتلال قرى قائمة.');
$lang['desc'][ 26 ] = array ( 0 => 'يعتبر القصر مبنى فريد من نوعه. لا يمكنك تشييد سوى قصر واحد في إمبراطوريتك، ويمكنك اعتبار القرية التي تضم هذا القصر عاصمة لك. فهو يحمي القرية ضد غزوات الخصوم. هنا يمكنك تدريب الوحدات القتالية التي تستطيع تأسيس قرية جديدة أو احتلال قرى قائمة.');
$lang['desc'][ 27 ] = array ( 0 => 'في الخزنات، تُخبأ أسرار امبراطوريتك. حيث تتسع كل خزنة لتحفة واحدة فقط. يلزمك خزنة في المستوى 10 لتضع فيها تحفة. للتحف الكبرى يلزمك خزنة في المستوى 20.');
$lang['desc'][ 28 ] = array ( 0 => 'في المكتب التجاري يمكن تحسين العربات كذلك بخيول قوية. كلما ارتفع مستوى بناء المكتب التجاري ازدادت قدرة التجار على حمل موارد أكثر.');
$lang['desc'][ 29 ] = array ( 0 => 'الثكنة الكبرى تسمح بتدريب قوات اضافية تكلفتها ثلاثة اضعاف ذلك. الثكنه الكبيرة لا يمكن أن تبنى في القرية الرئيسية.');
$lang['desc'][ 30 ] = array ( 0 => 'الاسطبل الكبير يسمح بتدريب مزيد من الفرسان. تكلفة هذه القوات ثلاثة اضعاف ذلك. الاسطبل الكبير لا يمكن أن يبنى في القرية الرئيسية.');
$lang['desc'][ 31 ] = array ( 0 => 'الجدار الأرضي يحمي من الهجمات على القرية ،كلما ازداد بناء الجدار ، سيكون من الايسر علي المدافعين الكفاح بنجاح من نهب الاعداء جدار المدينة لا يمكن ان يبنى الا من الجرمان.هذا الجدار احسن ضد محطمة الابواب من سور المدينة، ولكن للدفاع يدمر أيسر من سور المدينة أو الحباك.');
$lang['desc'][ 32 ] = array ( 0 => 'سور المدينة يحمي من الهجمات على القرية ،كلما ازداد بناء السور ، سيكون من الايسر علي المدافعين الكفاح بنجاح من نهب الاعداء . سور المدينة لا يمكن ان يبنى الا من الرومان . هذا الجدار يعطي أعلى مكافاه للدفاع ، ولكن محطمة الابواب تدمر الجدار أيسر من الجدار الأرضي أو الحباك.');
$lang['desc'][ 33 ] = array ( 0 => 'الحاجز يحمي من الهجمات على القرية ،كلما ازداد بناء الحاجز ، سيكون من الايسر علي المدافعين الكفاح بنجاح من نهب الاعداء الحاجز لا يمكن ان يبنى الا من الاغريق.هذا الحباك هو متوسط بين و سور القرية والجدار الأرضي.');
$lang['desc'][ 34 ] = array ( 0 => 'الحجّار خبير في قطع الحجر . ،كلما ارتفع مستوى البناءن تزداد صلابة مباني قريتك في وجه هجمات المقاليع . ان الحجار لا يمكن ان يبنى الا في العاصمة.');
$lang['desc'][ 35 ] = array ( 0 => 'في المقهى يتم توزيع الشراب السحري، الذي يحبه أبناء الشعب كثيراً. حين يحتفل الجنود تزيد قوتهم بمعدل 1% لكل مستوى. ولكن تضعف في الوقت نفسه قدرة المقاليع على إصابة أهدافها بدقة وكذا تضعف قدرة الرؤساء على إقناع الشعوب العدوة بالانطواء تحت حكمك. لا يمكن تشييدها إلا من قِبل الجرمان وفي عاصمتهم فقط. وهي تؤثر في كل الإمبراطورية.');
$lang['desc'][36]=array(0=>"في هذه الورشة يتم تصنيع الفِخاخ وإخفاؤها جيدًا. هذا يعني أنه بإمكانك سجن الخصوم المتهورين، بحيث لا يكونوا قادرين على إيذاء قريتك مجددًا. القوات لا يمكن ان تحرر بغاره. إذا قام مالك الفِخاخ بالإفراج عن الأسرى يتم تصليح كل الفِخاخ تلقائيًا. لا يمكن بناء ورشة الفِخاخ إلا بمعرفة الإغريق.");

$lang['desc'][ 37 ] = array ( 0 => 'قصر الأبطال، منزل البطل الخاص بك. عند المستويات 10 و 15 و 20 بطلكم ان ارفاق 1 و 2 و 3 من الواحات على التوالي. هذه الواحات زيادة انتاجهم من المواد الاولية وخاصة في ضم القرية.') ;
$lang['desc'][ 38 ] = array ( 0 => 'في المستودع يتم تخزين الموارد ( الخشب والطين والحديد) . المخازن الكبرى توفر لك مساحة اكبر وتحافظ على مواردك على النحو المعتاد.');
$lang['desc'][ 39 ] = array ( 0 => 'في الصوامع الكبيرة يتم تخزين القمح المنتج من الحقول . المستودع الكبير يوفر لك مساحة اكبر ويحافظ على القمح على النحو المعتاد.');
$lang['desc'][ 40 ] = array ( 0 => 'أعجوبة العالم تمثل قمة المفاخر الإنشائية وعروس العجائب .اللاعبون الأقوى والأغنى بالموارد هم فقط الذين يتمكنون من إنشاء مثل هذا العمل الجبار. ويتمكنون من المدافعة عنه ضد الأعداء الحاسدين لا يمكن بناء أعجوبة العالم إلا في القرة الأثرية للناتار . وبنائها لا يمكن إلا بعد الحصول على الخريطة. وعند المستوى 50 يجب أن يحصل لاعب أخر من نفس الحلف على الخريطة الثانية ليستمر البناء');
$lang['desc'][ 41 ] = array ( 0 => 'بئر سقي الخيول يضمن للخيول الرفاه و يسرع في تدريبها 1 في المائة. تقلل ساقية الخيول من استهلاك القمح للقوات التالية: فرقة التجسس اعتبارًا من المستوى 10، وسلاح الفرسان اعتبارًا من المستوى 15، وفرسان القيصر اعتبارًا من المستوى 20. لا يستطيع احد في بناء هذا البئر لسقى الخيول الا الرومان.');
$lang['desc'][ 42 ] = array ( 0 => 'يحمي الجدار الحجري قريتك من هجمات أعدائك من الحشود البربرية. كلما ارتفع مستواه، تزداد نسبة مكافأة قواتك الدفاعية.<br>لا يمكن بناء الجدار الحجري إلا من قبل الفراعنة. يمكن مقارنة مكافأة دفاعه بتلك التي يعطيها حاجز الإغريق كما أن قوة تحمّله تُعادل قوة تحمّل الحاجز الأرضي لدى الجرمان.');
$lang['desc'][ 43 ] = array ( 0 => 'حمي الساتر المؤقت قريتك من هجمات أعدائك من الحشود البربرية. كلما ارتفع مستواه، تزداد نسبة مكافأة قواتك الدفاعية.<br>لا يمكن بناء الساتر المؤقت إلا من قبل المغول. يمكن مقارنة مكافأة دفاعه بتلك التي يعطيها الحاجز الأرضي الجرماني كما أن قوة تحمّله تشابه قوة تحمّل سور المدينة لدى الرومان.');
$lang['desc'][ 44 ] = array ( 0 => 'يحمي مركز القيادة القرية من احتلال الخصوم. يمكنك تشييد مركز قيادة واحد في كل قرية. هنا يمكنك تدريب الوحدات القتالية التي تستطيع تأسيس قرية جديدة أو احتلال قرى قائمة.<br>إضافة لذلك، يمنحك مركز القيادة منفذ توسّع عند كل من المستويات 10 و15 و20.');
$lang['desc'][ 45 ] = array ( 0 => 'تمكنك محطات المياه من تنظيم تدفق المياه إلى واحاتك. لا تساهم هذه المحطات في نمو الأشجار والقمح فقط، بل هي مفيدة أيضًا للمناجم والمحاجر إذ أنها تزوّد العمال بالماء وتنقل الموارد.<br><br>يزيد هذا المبنى من مكافأة كل الواحات المضمومة. عند مستوى المبنى 20 يصل تأثيره لأقصى حد بمضاعفة مكافأة الواحات.<br><br>يمكن بناء محطات المياه من قِبل الفراعنة فقط.');

$lang['descs'][5]=array(0=>array(1,10),array(15,5));
$lang['descs'][6]=array(0=>array(2,10),array(15,5));
$lang['descs'][7]=array(0=>array(3,10),array(15,5));
$lang['descs'][8]=array(0=>array(4,5));
$lang['descs'][9]=array(0=>array(4,10),array(15,5));
$lang['descs'][12]=array(0=>array(22,1),array(15,3));
$lang['descs'][13]=array(0=>array(22,1),array(15,3));
$lang['descs'][14]=array(0=>array(16,15));
$lang['descs'][17]=array(0=>array(15,3),array(10,1),array(11,1));
$lang['descs'][19]=array(0=>array(16,1),array(15,3));
$lang['descs'][20]=array(0=>array(22,5),array(12,3));
$lang['descs'][21]=array(0=>array(22,10),array(15,5));
$lang['descs'][22]=array(0=>array(19,3),array(15,3));
$lang['descs'][24]=array(0=>array(15,10),array(22,10));
$lang['descs'][25]=array(0=>array(15,5));
$lang['descs'][26]=array(0=>array(18,1),array(15,5));
$lang['descs'][27]=array(0=>array(15,10));
$lang['descs'][28]=array(0=>array(17,20),array(20,10));
$lang['descs'][29]=array(0=>array(19,20));
$lang['descs'][30]=array(0=>array(20,20));
$lang['descs'][34]=array(0=>array(26,3),array(15,5));
$lang['descs'][35]=array(0=>array(11,20),array(16,10));
$lang['descs'][36]=array(array(16,1));
$lang['descs'][37]=array(0=>array(16,1),array(15,3));
$lang['descs'][38]=array(0=>array(15,10));
$lang['descs'][39]=array(0=>array(15,10));
$lang['descs'][41]=array(0=>array(20,20),array(16,10));
		$lang['fields'] = array (
							0 => '&nbsp;level',
							1 => 'Лесопилка уровень',
							2 => 'Глиняный карьер уровень ',
							3 => 'Железный рудник уровень',
							4 => 'Ферма уровень',
							5 => 'Наружняя строительная площадка',
							6 => 'Строительная площадка',
							7 => 'Строительная площадка пункта сбора');

		$lang['npc'] = array (
							0 => 'NPC торговец');

		$lang['upgrade'] = array (
							0 => 'Здание уже на максимальном уровне',
							1 => 'Максимальный уровень здания строится',
							2 => 'Здание будет снесено',
							3 => '<b>Стоимость</b> строительства до уровня&nbsp;',
							4 => 'Рабочие заняты.',
							5 => 'Не хватает еды. Развивайте фермы.',
							6 => 'Постройте склад.',
							7 => 'Постройте амбар.',
							8 => 'Достаточно ресурсов будет&nbsp;',
							9 => '&nbsp;в&nbsp;&nbsp;',
							10 => 'الترقية إلى المستوى ',
							11 => 'сегодня',
							12 => 'завтра');

		$lang['movement'] = array (
							0 => 'в&nbsp;');

		$lang['troops'] = array (
							0 => 'нет',
							1 => 'Герой');


//NOTICES
define("REPORT_SUBJECT","العنوان:");
define("REPORT_ATTACKER","مهاجم");
define("REPORT_DEFENDER","مدافع");
define("REPORT_RESOURCES","الموارد");
define("REPORT_FROM_VIL","من");
define("REPORT_FROM_ALLY","من التحالف");
define("REPORT_SENT","التاريخ:");
define("REPORT_SENDER","المرسل");
define("REPORT_RECEIVER","المستقبل");
define("REPORT_AT","في");
define("REPORT_TO","إلي");
define("REPORT_SEND_RES","إرسال موارد");
define("REPORT_DEL_BTN","حذف التقرير");
define("REPORT_DEL_QST","هل أنت متأكد من حذف التقرير؟");
define("REPORT_WARSIM","محاكي المعركة");
define("REPORT_ATK_AGAIN","المهاجمة مجددا");
define("REPORT_TROOPS","القوات");
define("REPORT_REINF","تعزيزات");
define("REPORT_CASUALTIES","معلومات");
define("REPORT_INFORMATION","معلومات");
define("REPORT_BOUNTY","الموارد");
define("REPORT_CLOCK","الوقت");
define("REPORT_UPKEEP","الإستهلاك");
define("REPORT_PER_HOURS","في الساعة");
define("REPORT_SEND_REINF_TO","أرسل تعزيزات إلي القرية");
define("REPORT_NO","لا يوجد تقريرات لعرضها.");
define("REPORT1"," يستكشف ");
define("REPORT2"," يهاجم ");


define ("NGZ2", "سرعة البناء الحالية");
define ("NGZ3", "سرعة البناء في المستوي");


//CTENA
define ("C1", " City Wall Level");
define ("C2", " By building a City Wall you can protect your village against the barbarian hordes of your enemies. The higher the wall's level, the higher the bonus given to your forces' defence.");
define ("C3", "مكافئة الدفاع الحالية");
define ("C4", "مكافئة الدفاع في المستوي");
define ("C5", " ");
define ("C6", " ");
define ("C7", "Earth Wall Level");
define ("C8", "Palisade Level");
define ("C9", "City Wall Level");

//CKLAD
define ("CK0", "Warehouse Level ");
define ("CK", " The resources wood, clay, and iron are stored in the warehouse. The higher the level, the larger the resource storage capacity. ");


//AMBAR
define ("AM", " Granary Level ");
define ("AM1", " The wheat from your wheat fields is stored in the granary. The higher the level, the larger the storage capacity.");

define ("AM4", "Capacity at level");

define("CAPACITY","السعه التخزينيه الحالية");
define("CAPACITYA","السعه التخزينيه في المستوى");



//upgrade.php
define("UPG0","وصل للمستوي الأخير.");
define("UPG1","جاري تطوير المبني للمستوي الأخير.");
define("UPG2","جاري تدمير المبني بالمبني الرئيسي.");
define("UPG3","التكلفة");
define("UPG4","do melhoramento para nível");
define("UPG5","لا يوجد عدد كافي من العمال.");
define("UPG6","جميع العمال مشغولون. (إنتظار)");
define("UPG7","يجب تطوير حقول القمح.");
define("UPG8","يجب تطوير المخازن.");
define("UPG9","يجب تطوير مخازن الحبوب. ");
define("UPG10","الموارد كافية - أبدا");
define("UPG11","الترقية إلى المستوى ");
define("UPG12","البناء بمساعدة البناء");


//отправка войск
define("nap0","تعزيزات");
define("nap1","هجوم كامل");
define("nap2","هجوم للنهب");



define ("PY1", "القوات القادمة للقرية ");
define ("PY2", "نظرة عامة ");
define ("PY3", "إرسال قوات ");
define ("PY5", "القوات في هذه القرية وواحاتها");
define ("PY6", "Деревня ");
define ("PY7", "القوات");
define ("PY8", "القوات ");
define ("PY9", "الإستهلاك ");
define ("PY10", "في الساعة ");
define ("PY11", "إرجاع ");
define ("PY12", "القوات في القري الأخري ");
define ("PY13", "التعزيزات إلي ");
define ("PY14", "سحب ");
define ("PY15", "تحركات قواتك ");
define ("PY16", "هروب القوات");
define ("PY17", "قائمة المزارع");
define ("PY18", "واحة");
define ("PY19", "القوات في الواحة ");
define ("GOLDC","تهريب القوات");
//KAZARMA
define ("KA", " Barracks Level ");
define ("KA1", " All foot soldiers are trained in the barracks. The higher the level of the barracks, the faster the troops are trained.");
define ("KA2", "Barracks");
define ("KA3", "تستطيع تدريب القوات عند الإنتهاء من بناء الثكنه.");

//RYNOK
define ("RY", " Marketplace Level ");
define ("RY1", " At the marketplace, you can trade resources with other players. The higher its level, the more resources can be transported at the same time.");




//DVOREZ
define("dvrc0","كلمة المرور خاطئة");
define("dvrc1","من أجل إنشاء قرية جديدة ، تحتاج إلى قصر من المستوى 10 أو 15 أو 20 و 3 مستوطنين. من أجل غزو قرية جديدة ، تحتاج إلى قصر من المستوى 10 أو 15 أو 20 وزعيم.");
define("dvrc2","هذه هي العاصمة");
define("dvrc3","هل أنت متأكد من تغيير العاصمة؟");
define("dvrc4","هذه العملية لا يمكن التراجع بها!");
define("dvrc5","من أجل أسباب أمنية المرجو إدخال كلمة المرور:");
define("dvrc6","تغيير");
define("dvrc7","القصر تحت البناء");
define("dvrc8","كلمة المرور:");
define("dvrc9","الإسم");
define("dvrc10","الكمية");
define("dvrc11","أقصي");

//POSOLbSTVO
define("posl0","التحالف");
define("posl1","الرمز");
define("posl2","الإسم");
define("posl3","إلي التحالف");
define("posl4","الدعوات");
define("posl5","قبول");
define("posl6","لا يوجد دعوات متاحة");
define("posl7","إنشاء تحالف");
define("posl8","إنشاء");

//masterskaya
define("mastr0","وحدات يجب البحث عنها");
define("mastr1","تدريب");
define("mastr2","تدريب");
define("mastr3","المدة");
define("mastr4","إنتهي");
define("mastr5","إجمالي");

//REZA
define ("RE", " Residence Level ");
define ("RE1", " The residence is a small palace that the king lives in while he visits. The residence protects the village from being conquered by enemy forces. ");
define ("RE2", "هذه هي العاصمة");
define ("RE3", "السكن");
define ("RE4", "تدريب");
define ("RE5", "نقطة حضارية");
define ("RE6", "الولاء");
define ("RE7", "التوسع");
define("RE8","من أجل التوسع تحتاج للنقاط الحضارية. النقاط الحضارية تتراكم بالوقت من المباني الخاصة بك وتكون أسرع بالمستويات الأعلي.");
define("RE9","إنتاج هذه القرية:");
define("RE10","نقطة حضارية يوميا");
define("RE11","إنتاج جميع القري:");
define("RE12","أنتجت قراك");
define("RE13","نقطة بالمجموع. لإنشاء أو غزو قرية جديدة تحتاج");
define("RE14","نقطة");
define("RE15","بمهاجمة القري الأخري بالزعماء يقل ولاء هذه القري. لو وصل للصفر, تنضم القرية لصاحب الهجوم. ولاء هذه القرية ه و");
define("RE16","القري التي تم إنشائها أو غزوها من هذه القرية");
define("RE17","الاعب");
define("RE18","القرية");
define("RE19","السكان");
define("RE20","احداثيات");
define("RE21","الوقت");
define("RE22","لا يوجد قري حالية.");
define("RE23","التدريب");
define("RE24","المدة");
define("RE25","Pronto");
define("RE26","Treinar");
define("RE27","In order to found a new village you need a level 10 or 20 residence and 3 settlers. In order to conquer a new village you need a level 10 or 20 residence and a senator, chief or chieftain.");

//AKADEM
define ("AK", " Academy Level ");
define ("AK3", "لا يمكن البحث عن أي قوات جديدة في الوقت الراهن، للبحث عن الشروط المسبقة للقوات الجديدة، انقر على صورة الوحدة ذات الصلة في الدليل.");
define ("AK4", "Action");
define ("AK5", "Prerequisites");
define ("AK6", "عرض المزيد");
define ("AK7", "اخفاء");
define ("AK8", "البحث");

//MELNIZA
define ("ME", " Flour Mill Level ");
define ("ME1", " Wheat is milled into flour in the mill. Depending on the level, the mill can increase wheat production by up to 25 percent ");
define ("ME2", "");
define ("ME3", "");




//KON
define ("KO", " Stable Level ");
define ("KO1", " All mounted troops are trained in the stable. The higher the level, the faster the troops are trained. ");
define("KO2","No units avaliable. Research at academy");
define("KO3", "Training can commence when great stables are completed.");
define("KZ333", "Training can commence when great barracks are completed.");


//GLAVNOE ZDANIE
define("gz0","تحطيم المباني:");
define("gz1","إذا لم تعد تحتاج المبني، تستطيع تدميره عبر المبني الرئيسي.");
define("gz2","جاري هدم");
define("gz3","Finish all construction and research orders in this village immediately for 2 Gold?");
define("gz4","تدمير المبني");

//COKRA
define ("CO", " Treasure Chamber Level ");
define ("CO1", " The riches of your empire are kept in the treasure chamber. Your treasure chamber has room for only one treasure. After you have captured an artefact, it takes 24 hours on a normal server and 12 hours on a 3x speed server for the artefact to become effective.");
define ("CO2", "");
define ("CO3", "");
define ("CO4", "");

//GHYGYN
define ("GH", " Iron Foundry Level ");
define ("GH1", " Iron is melted in the foundry. Depending on level, the foundry can increase iron production by up to 25 percent.");
define ("GH2", "Current iron bonus");
define ("GH3", "Iron bonus at level");
define ("GH4", "");

//KIRPIGH
define ("KI", " Brickworks Level ");
define ("KI1", " Clay is baked into bricks in the brickworks. Depending on level, the brickworks can increase clay production by up to 25 percent.");
define ("KI2", "Current clay bonus");
define ("KI3", "Clay bonus at level");
define ("KI4", "");
define ("KI5", "");
define ("KI6", "");

define ("CURB", "الزيادة في الإنتاج الحالي");
define ("CURBL", "الزيادة في مستوى");
define("NOTDONEU","Build is not completed yet.");
define("SPEEDB","Current speed bonus");
define("SPEEDBL","Speed bonus at level");

//ратуша
define("ratusha0","Celebrations can commence when the town hall is completed.");
define("ratusha1","Celebrations");
define("ratusha2","Action");
define("ratusha3","احتفال");
define("ratusha4","فيد التشغيل");
define("ratusha5","Crop production is negative so you will never reach the required resources");
define("ratusha6","Too few");
define("ratusha7","resources");
define("ratusha8","احتفال");
define("ratusha9","إحتفال كبير (2000 نقطة حضارية)");
define("ratusha10","موارد كافية");
define("ratusha11","نقطة حضارية");
define("ratusha12","المدة");
define("ratusha13","إنتهاء");
define("ratusha14","إحتفال صغير");
define("ratusha15","");
define("ratusha16","");
define("ratusha17","");
define("ratusha18","");
define("ratusha19","");
define("ratusha20","");


//ARENA
define ("AR", " Tournament Square Level ");
define ("AR1", " At the tournament square, your troops can improve their stamina. The higher the level, the faster your troops will move once they are more than 30 fields away.");
define ("AR2", "");
define ("AR3", "");
define ("AR4", "");

//MASTERSKAI
define ("MA", " Siege Workshop Level ");
define ("MA1", "Siege weapons such as catapults and rams are produced in the siege workshop. The higher the level, the faster the units are produced. ");
define ("MA2", "");
define ("MA3", "");
define ("MA4", "");

//PEKARNIA
define ("PE", " Bakery Level ");
define ("PE1", " In the bakery, the flour from the mill is baked into bread. In conjunction with the mill, the bakery can raise wheat production by up to 50 percent. ");
define ("PE2", "");
define ("PE3", "");
define ("PE4", "");

//RATYSHA
define ("RAT", " City Hall Level ");
define ("RAT1", " You can host extravagant parties for your citizens at the city hall. These parties increase your number of culture points.");
define ("RAT2", "");
define ("RAT3", "");
define ("RAT4", "");

//PALATA
define ("PAL", " Trade Office Level ");
define ("PAL1", " The trade carts of your marketplace can be improved in the trade office. The higher the level, the more each merchant can carry. ");
define ("PAL2", "");
define ("PAL3", "");
define ("PAL4", "");

//VODOPOI
define ("VO", " Horse Drinking Trough Level ");
define ("VO1", " The horse drinking trough cares for the well-being of your horses, lowers their crop consumption and makes their training faster. Per level, the training time in your stable is reduced. ");
define ("VO2", "");
define ("VO3", "");
define ("VO4", "");


//BA
define ("BA", " Great Granary Level ");
define ("BA1", " In the granary the wheat produced by your farms is stored. The great granary offers you even more space to keep your wheat dry and safe and free from maggots. ");
define ("BA2", "");
define ("BA3", "");
define ("BA4", "");

//BK
define ("BK", " Great Warehouse Level ");
define ("BK1", " In your warehouse wood, clay and iron resources are stored. The great warehouse give you even more space to keep your resources dry and safe. ");
define ("BK2", "");
define ("BK3", "");
define ("BK4", "");
define ("BK5", "");

//PIVO
define ("PI", " Brewery Level ");
define ("PI1", " Tasty mead is brewed in the brewery and later quaffed by the soldiers during the celebrations. ");
define ("PI2", "");
define ("PI3", "");
define ("PI4", "");

//CHYDO
define ("CHY", " Wonder Of The World Level ");
define ("CHY1", " The wonder of the world represents the pride of creation. Only the mightiest and richest are able to build such a masterwork and defend it against envious enemies. ");
define ("CHY2", "");
define ("CHY3", "");
define ("CHY4", "");
define ("CHY5", "");

//KAZARMA BIG
define ("BIG", "Great Barracks Level ");
define ("BIG1", "The great barracks allows you to build more units at the same time but they cost thrice the original amount. ");
define ("BIG2", "");
define ("BIG3", "");
define ("BIG4", "");

//KONI BIG
define ("KONI ", "Great Stable Level ");
define ("KONI1", "The great stable allows you to build more units at the same time but they cost thrice the original amount. ");
define ("KONI2", "");
define ("KONI3", "");
define ("KONI4", "");

//KAPKAN
define ("KAP", "Trapper Level ");
define ("KAP1", "The trapper protects your village with well hidden traps. This means that unwary enemies can be imprisoned and won't be able to harm your village anymore. ");
define ("KAP2", "");
define ("KAP3", "");
define ("KAP4", "");

//KYZNIA
define ("KY", " Armoury Level ");
define ("KY1", " In the armoury's melting furnaces your warriors' armour is enhanced. By increasing its level you can order the fabrication of even better armour.");
define ("KY2", "");
define ("KY3", "");
define ("KY4", "");


//KYZNIZA
define ("KZ", " Blacksmith Level ");
define ("KZ1", " In the blacksmith's melting furnaces your warriors' weapons are enhanced. By increasing its level you can order the fabrication of even better weapons.");
define ("KZ2", "بحث");
define ("KZ3", "Blacksmith");
define ("KZ4", "Action");
define ("KZ5", "تطوير");
define ("KZ6", "المدة");
define ("KZ7", "الانتهاء");
define ("KZ8", "تطوير<br>الحداد");
define ("KZ9", "تطوير<br> تحت العمل");

define ("oasis", "Oases");
define ("Namet", "Name");
define ("Quantityе", "Quantity");
define ("Maxе", "Max");
define ("Avaliablet", "Avaliable");
define ("TRA1", "قائمة التدريب");
define ("TRA2", "Duration");
define ("TRA3", "الانتهاء");
define ("Workshop", "Workshop");
define ("RallyPoint", "Rally Point");
define ("Blacksmith", "Blacksmith");
define ("Armoury", "Armoury");
define ("Stable", "Stable");
define ("SendResouces", "ارسال موارد");
define ("Buyma", "شراء");
define ("Offerma", "العروض");
define ("ONPCtrading", "تبادل الموارد");
define ("ilior", "or");
define ("markVillages", "القرى");
define ("markgo", "go");
define ("Constructnewbuilding", "Construct new building");
define ("SOCR", "The riches of your empire are kept in the treasury. A treasury can only store one artefact. <br><br> You need a treasury level 10 for a small artefact, or level 20 for a great one.");
define ("mesotkogo", "المرسل:");
define ("mestena", "العنوان:");
define ("meskomy", "المستقبل:");
//Самая жопа avaliable
define ("avaAcademy", "Academy");
define ("avaAcademy1", "In the academy new unit types can be researched. By increasing its level you can order the research of better units.");
define ("avaArmoury", "Armoury");
define ("avaArmoury1", "In the armoury melting furnaces your warriors; armour is enhanced. By increasing its level you can order the fabrication of even better armour.");
define ("avaCityWall", "City Wall");
define ("avaCityWall1", "By building a City Wall you can protect your village against the barbarian hordes of your enemies. The higher the wall's level, the higher the bonus given to your forces' defence.");


define("ITEM0","خوذة المعرفة");
define("IEFF0","+15% زيادة خبرة.");
define("ITEM1","خوذة الكشف");
define("IEFF1","+20% زيادة خبرة.");
define("ITEM2","خوذة الحكمة");
define("IEFF2","+25% زيادة خبرة.");
define("ITEM3","خوذة التجديد");
define("IEFF3","+10 نقطة صحة/اليوم");
define("ITEM4","خوذة الصحة");
define("IEFF4","+15 نقطة صحة/اليوم");
define("ITEM5","خوذة الشفاء");
define("IEFF5","+20 نقطة صحة/اليوم");
define("ITEM6","خوذة الإغريقي المصارع");
define("IEFF6","+100 نقطة حضارية في اليوم");
define("ITEM7","خوذة الشعوب");
define("IEFF7","+400 نقطة حضارية في اليوم");
define("ITEM8","خوذة القنصل");
define("IEFF8","+800 نقطة حضارية في اليوم");
define("ITEM9","خوذة الفرسان");
define("IEFF9","تخفيض زمن التدريب اللازم في الاسطبل بمقدار 10%");
define("ITEM10","خوذة سلاح الفرسان");
define("IEFF10","تخفيض زمن التدريب اللازم في الاسطبل بمقدار 15%");
define("ITEM11","خوذة سلاح الفرسان الثقيل");
define("IEFF11","تخفيض زمن التدريب اللازم في الاسطبل بمقدار 20%");
define("ITEM12","خوذة المرتزقة");
define("IEFF12","تخفيض زمن التدريب اللازم في الثكنة بمقدار 10%");
define("ITEM13","خوذة المقاتل");
define("IEFF13","تخفيض زمن التدريب اللازم في الثكنة بمقدار 15%");
define("ITEM14","خوذة القائد");
define("IEFF14","تخفيض زمن التدريب اللازم في الثكنة بمقدار 20%");
define("ITEM15","درع التجديد، خفيف");
define("IEFF15","+20 تجديد نقاط الصحة يومياً");
define("ITEM16","درع التجديد");
define("IEFF16","+30 تجديد نقاط الصحة يومياً");
define("ITEM17","درع التجديد، ثقيل");
define("IEFF17","+40 تجديد نقاط الصحة يومياً");
define("ITEM18","درع مسنن خفيف");
define("IEFF18","تخفيض نسبة الإصابة بمقدار 4 نقاط صحة + 10 تجديد نقاط الصحة");
define("ITEM19","درع مسنن");
define("IEFF19","تخفيض نسبة الإصابة بمقدار 6 نقاط صحة + 15 تجديد نقاط الصحة");
define("ITEM20","درع مسنن ثقيل");
define("IEFF20","تخفيض نسبة الإصابة بمقدار 8 نقاط صحة + 20 تجديد نقاط الصحة");
define("ITEM21","درع الصدر، خفيف");
define("IEFF21","+500 كفاءة حربية للبطل");
define("ITEM22","درع الصدر");
define("IEFF22","+1000 كفاءة حربية للبطل");
define("ITEM23","درع الصدر، ثقيل");
define("IEFF23","+1500 كفاءة حربية للبطل");
define("ITEM24","درع أعضاء الجسم، خفيف");
define("IEFF24","تخفيض نسبة الإصابة بمقدار 3<br> +250 كفاءة حربية للبطل");
define("ITEM25","درع أعضاء الجسم");
define("IEFF25"," تخفيض نسبة الإصابة بمقدار 4<br> +500 كفاءة حربية للبطل");
define("ITEM26","درع أعضاء الجسم، ثقيل");
define("IEFF26"," تخفيض نسبة الإصابة بمقدار 5<br> +750 كفاءة حربية للبطل");
define("ITEM27","خارطة صغيرة");
define("IEFF27","30% عودة أسرع");
define("ITEM28","خارطة");
define("IEFF28","40% عودة أسرع");
define("ITEM29","خارطة كبيرة");
define("IEFF29","50% عودة أسرع");
define("ITEM30","علم صغير للقبيلة مثبت");
define("IEFF30","30% تحرّك قوات أسرع بين القرى الخاصة باللاعب");
define("ITEM31","علم مثبت للقبيلة");
define("IEFF31","40% تحرّك قوات أسرع بين القرى الخاصة باللاعب");
define("ITEM32","علم كبير للقبيلة مثبت");
define("IEFF32","50% تحرّك قوات أسرع بين القرى الخاصة باللاعب");
define("ITEM33","علم مثبت للحلف، صغير");
define("IEFF33","15% تحرّك قوات أسرع بين اللاعبين في التحالف الواحد");
define("ITEM34","علم مثبت للحلف");
define("IEFF34","20% تحرّك قوات أسرع بين اللاعبين في التحالف الواحد");
define("ITEM35","علم مثبت للحلف، كبير");
define("IEFF35","25% تحرّك قوات أسرع بين اللاعبين في التحالف الواحد");
define("ITEM36","كيس سارق، صغير");
define("IEFF36","+10% مكافأة نهب");
define("ITEM37","كيس سارق");
define("IEFF37","+15% مكافأة نهب");
define("ITEM38","كيس سارق، كبير");
define("IEFF38","+20% مكافأة نهب");
define("ITEM39","درع الحرب الصغير");
define("IEFF39","+500 كفاءة حربية للبطل");
define("ITEM40","درع الحرب");
define("IEFF40","+1000 كفاءة حربية للبطل");
define("ITEM41","درع الحرب الكبير");
define("IEFF41","+1500 كفاءة حربية للبطل");
define("ITEM42","بوق الحرب الصغير للنتار");
define("IEFF42","+20% كفاءة حربية ضد التتار");
define("ITEM43","بوق حرب النتار");
define("IEFF43","+25% كفاءة حربية ضد التتار");
define("ITEM44","بوق الحرب الكبير للنتار");
define("IEFF44","+30% كفاءة حربية ضد التتار");

// Hero Romans Items
define("ITEM45","سيف الجندي الأول، القصير");
define("IEFF45","+500 كفاءة حربية للبطل ؛ +3 مكافأة هجوم +3 مكافأة دفاع لكل جندي أول");
define("ITEM46","سيف الجندي الأول");
define("IEFF46","+1000 كفاءة حربية للبطل ؛ +4 مكافأة هجوم +4 مكافأة دفاع لكل جندي أول");
define("ITEM47","سيف الجندي الأول الطويل");
define("IEFF47","+1500 كفاءة حربية للبطل ؛ +5 مكافأة هجوم +5 مكافأة دفاع لكل جندي أول");
define("ITEM48","سيف حارس الإمبراطور القصير");
define("IEFF48","+500 كفاءة حربية للبطل ؛ +3 مكافأة هجوم +3 مكافأة دفاع لكل حارس إمبراطور");
define("ITEM49","سيف حارس الإمبراطور");
define("IEFF49","+1000 كفاءة حربية للبطل ؛ +4 مكافأة هجوم +4 مكافأة دفاع لكل حارس إمبراطور");
define("ITEM50","سيف حارس الإمبراطور الطويل");
define("IEFF50","+1500 كفاءة حربية للبطل ؛ +5 مكافأة هجوم +5 مكافأة دفاع لكل حارس إمبراطور");
define("ITEM51","سيف الجندي المهاجم القصير");
define("IEFF51","+500 كفاءة حربية للبطل ؛ +3 مكافأة هجوم +3 مكافأة دفاع لكل جندي مهاجم");
define("ITEM52","سيف الجندي المهاجم");
define("IEFF52","+1000 كفاءة حربية للبطل ؛ +4 مكافأة هجوم +4 مكافأة دفاع لكل جندي مهاجم");
define("ITEM53","سيف الجندي المهاجم الطويل");
define("IEFF53","+1500 كفاءة حربية للبطل ؛ +5 مكافأة هجوم +5 مكافأة دفاع لكل جندي مهاجم");
define("ITEM54","سيف سلاح القيصر القصير");
define("IEFF54","+500 كفاءة حربية للبطل ؛ +9 مكافأة هجوم +9 مكافأة دفاع لكل سلاح قيصر");
define("ITEM55","سيف فرسان القيصر");
define("IEFF55","+1000 كفاءة حربية للبطل ؛ +12 مكافأة هجوم +12 مكافأة دفاع لكل سلاح قيصر");
define("ITEM56","سيف فرسان القيصر الطويل");
define("IEFF56","+1500 كفاءة حربية للبطل ؛ +15 مكافأة هجوم +15 مكافأة دفاع لكل سلاح قيصر");
define("ITEM57","رمح فرسان القيصر الخفيف");
define("IEFF57","+500 كفاءة حربية للبطل ؛ +12 مكافأة هجوم +12 مكافأة دفاع لكل فارس قيصر");
define("ITEM58","رمح فرسان القيصر");
define("IEFF58","+1000 كفاءة حربية للبطل ؛ +16 مكافأة هجوم +16 مكافأة دفاع لكل فارس قيصر");
define("ITEM59","رمح فرسان القيصر الثقيل");
define("IEFF59","+1500 كفاءة حربية للبطل ؛ +20 مكافأة هجوم +20 مكافأة دفاع لكل فارس قيصر");

define("ITEM60","رمح الكتيبة");
define("IEFF60","+500 كفاءة حربية للبطل ؛ +3 مكافأة هجوم +3 مكافأة دفاع لكل كتيبة");
define("ITEM61","سن حربة الكتيبة");
define("IEFF61","+1000 كفاءة حربية للبطل ؛ +4 مكافأة هجوم +4 مكافأة دفاع لكل كتيبة");
define("ITEM62","حربة الكتيبة");
define("IEFF62","+1500 كفاءة حربية للبطل ؛ +5 مكافأة هجوم +5 مكافأة دفاع لكل كتيبة");
define("ITEM63","سيف المبارز القصير");
define("IEFF63","+500 كفاءة حربية للبطل ؛ +3 مكافأة هجوم +3 مكافأة دفاع لكل مبارز");
define("ITEM64","سيف المبارز");
define("IEFF64","+1000 كفاءة حربية للبطل ؛ +4 مكافأة هجوم +4 مكافأة دفاع لكل مبارز");
define("ITEM65","سيف المبارز الطويل");
define("IEFF65","+1500 كفاءة حربية للبطل ؛ +5 مكافأة هجوم +5 مكافأة دفاع لكل مبارز");
define("ITEM66","قوس رعد الجرمان القصير");
define("IEFF66","+500 كفاءة حربية للبطل ؛ +6 مكافأة هجوم +6 مكافأة دفاع لكل رعد جرمان");
define("ITEM67","قوس رعد الجرمان");
define("IEFF67","+1000 كفاءة حربية للبطل ؛ +8 مكافأة هجوم +8 مكافأة دفاع لكل رعد جرمان");
define("ITEM68","قوس رعد الجرمان الطويل");
define("IEFF68","+1500 كفاءة حربية للبطل ؛ +10 مكافأة هجوم +10 مكافأة دفاع لكل رعد جرمان");
define("ITEM69","عصا فارس السلت للتجول");
define("IEFF69","+500 كفاءة حربية للبطل ؛ +6 مكافأة هجوم +6 مكافأة دفاع لكل فارس سلت");
define("ITEM70","عصا فرسان السلت");
define("IEFF70","+1000 كفاءة حربية للبطل ؛ +8 مكافأة هجوم +8 مكافأة دفاع لكل فارس سلت");
define("ITEM71","عصا فرسان السلت الكبيرة");
define("IEFF71","+1500 كفاءة حربية للبطل ؛ +10 مكافأة هجوم +10 مكافأة دفاع لكل فارس سلت");
define("ITEM72","رمح فارس الهيدواينر الخفيف");
define("IEFF72","+500 كفاءة حربية للبطل ؛ +9 مكافأة هجوم +9 مكافأة دفاع لكل فارس هيدواينر");
define("ITEM73","رمح فارس الهيدواينر");
define("IEFF73","+1000 كفاءة حربية للبطل ؛ +12 مكافأة هجوم +12 مكافأة دفاع لكل فارس هيدواينر");
define("ITEM74","رمح فارس الهيدوانر الثقيل");
define("IEFF74","+1500 كفاءة حربية للبطل ؛ +15 مكافأة هجوم +15 مكافأة دفاع لكل فارس هيدواينر");

define("ITEM75","عصا مقاتل بهراوة");
define("IEFF75","+500 كفاءة حربية للبطل ؛ +3 مكافأة هجوم +3 مكافأة دفاع لكل مقاتل بهراوة");
define("ITEM76","عصا مقاتل بهراوة للقتال");
define("IEFF76","+1000 كفاءة حربية للبطل ؛ +4 مكافأة هجوم +4 مكافأة دفاع لكل مقاتل بهراوة");
define("ITEM77","صولجان مقاتل بهراوة");
define("IEFF77","+1500 كفاءة حربية للبطل ؛ +5 مكافأة هجوم +5 مكافأة دفاع لكل مقاتل بهراوة");
define("ITEM78","رمح مقاتل برمح");
define("IEFF78","+500 كفاءة حربية للبطل ؛ +3 مكافأة هجوم +3 مكافأة دفاع لكل مقاتل برمح");
define("ITEM79","حربة المقاتل بالرمح");
define("IEFF79","+1000 كفاءة حربية للبطل ؛ +4 مكافأة هجوم +4 مكافأة دفاع لكل مقاتل برمح");
define("ITEM80","حربة المقاتل برمح");
define("IEFF80","+1500 كفاءة حربية للبطل ؛ +5 مكافأة هجوم +5 مكافأة دفاع لكل مقاتل برمح");
define("ITEM81","بلطة المقاتل بفأس");
define("IEFF81","+500 كفاءة حربية للبطل ؛ +3 مكافأة هجوم +3 مكافأة دفاع لكل مقاتل بفأس");
define("ITEM82","فأس المقاتل بفأس");
define("IEFF82","+1000 كفاءة حربية للبطل ؛ +4 مكافأة هجوم +4 مكافأة دفاع لكل مقاتل بفأس");
define("ITEM83","فأس القتال مقاتل بفأس");
define("IEFF83","+1500 كفاءة حربية للبطل ؛ +5 مكافأة هجوم +5 مكافأة دفاع لكل مقاتل بفأس");
define("ITEM84","مطرقة مقاتل القيصر الخفيفة");
define("IEFF84","+500 كفاءة حربية للبطل ؛ +6 مكافأة هجوم +6 مكافأة دفاع لكل مقاتل قيصر");
define("ITEM85","مطرقة مقاتل القيصر");
define("IEFF85","+1000 كفاءة حربية للبطل ؛ +8 مكافأة هجوم +8 مكافأة دفاع لكل مقاتل قيصر");
define("ITEM86","مطرقة مقاتل القيصر الثقيلة");
define("IEFF86","+1500 كفاءة حربية للبطل ؛ +10 مكافأة هجوم +10 مكافأة دفاع لكل مقاتل قيصر");
define("ITEM87","سيف رعد الجرمان القصير");
define("IEFF87","+500 كفاءة حربية للبطل ؛ +9 مكافأة هجوم +9 مكافأة دفاع لكل رعد جرمان");
define("ITEM88","سيف رعد الجرمان");
define("IEFF88","+1000 كفاءة حربية للبطل ؛ +12 مكافأة هجوم +12 مكافأة دفاع لكل رعد جرمان");
define("ITEM89","سيف رعد الجرمان الطويل");
define("IEFF89","+1500 كفاءة حربية للبطل ؛ +15 مكافأة هجوم +15 مكافأة دفاع لكل رعد جرمان");

define("ITEM90","حذاء التجديد");
define("IEFF90","+10 نقطة صحة/اليوم");
define("ITEM91","حذاء الصحة");
define("IEFF91","+15 نقطة صحة/اليوم");
define("ITEM92","حذاء الشفاء");
define("IEFF92","+20 نقطة صحة/اليوم");
define("ITEM93","حذاء المرتزقة");
define("IEFF93","+25% زيادة على السرعة الأساسية لمسير القوات للمسافات أبعد من 20 حقلاً");
define("ITEM94","حذاء المحارب");
define("IEFF94","+50% زيادة على السرعة الأساسية لمسير القوات للمسافات أبعد من 20 حقلاً");
define("ITEM95","حذاء القائد");
define("IEFF95","+75% زيادة على السرعة الأساسية لمسير القوات للمسافات أبعد من 20 حقلاً");
define("ITEM96","حدوات الحصان، صغير");
define("IEFF96","حقل في الساعة +3");
define("ITEM97","حدوات الحصان");
define("IEFF97","حقل في الساعة +4");
define("ITEM98","حدوات حصان، كبير");
define("IEFF98","حقل في الساعة +5");
define("ITEM99","حصان ركوب، خفيف");
define("IEFF99","تزداد سرعة حركة بطلك إلى 14 حقلاً في الساعة");
define("ITEM100","فرس أصيل");
define("IEFF100","تزداد سرعة حركة بطلك إلى 17 حقلاً في الساعة");
define("ITEM101","حصان محارب");
define("IEFF101","تزداد سرعة حركة بطلك إلى 20 حقلاً في الساعة");

define("ITEM102","ضماد صغير");
define("IEFF102","يمكن تقليل خسائر المعارك مباشرة بعدها، إذا كانت في جعبة البطل. يمكنك استعادة 25% من الخسائر. يمكنك استعادة الخسائر التي تملكها الرابطة من قبل فقط.");
define("ITEM103","ضمادة");
define("IEFF103","يمكن تقليل خسائر المعارك مباشرة بعدها، إذا كانت في جعبة البطل. يمكنك استعادة 33% من الخسائر. يمكنك استعادة الخسائر التي تملكها الرابطة من قبل فقط.");
define("ITEM104","قفص");
define("IEFF104","يمكن أسر الحيوانات من الواحات. يمكن تكويم وتخزين هذه المواد.");
define("ITEM105","وثيقة ملفوفة");
define("IEFF105","حين استخدامها تعطي بعض نقاط الخبرة للبطل. تتفعل فقط حين استخدامها. يمكن تكويم وتخزين هذه المواد.");
define("ITEM106","دهن شفاء");
define("IEFF106","تجديد نقاط الصحة للبطل فوراً. عدد الدهون المستخدمة يحدد عدد نقاط الصحة المستعادة (أقصى حد 100%). يبدأ مفعولها حين استخدامها. يمكن تكويم وتخزين هذه المواد.");
define("ITEM107","إكسير الحياة");
define("IEFF107","تتم إعادة البطل للحياة فوراً وبدون تكاليف في الموارد. لا يمكنك استخدام هذه المادة حين يكون بطلك حيّاً. المفعول يظهر فور الاستخدام.");
define("ITEM108","كتاب الحكمة");
define("IEFF108","إعادة توزيع نقاط الخبرة الخاصة بالبطل من جديد.");
define("ITEM109","لائحة القوانين");
define("IEFF109","ترفع ولاء القرية التي يتواجد فيها البطل بنسبة 1% لكل لائحة، كحّدّ أعلى يصل الولاء في القرية إلى 125%. المفعول يظهر وقت الاستخدام. يمكن تكويم وتخزين هذه المواد.");
define("ITEM110","قطعة فنية");
define("IEFF110","إذا أهديتها للسكان، سيبدأون احتفالاً عفوياً بدون الحاجة لبناء بلدية.");
define("ITEM111","");
define("IEFF111","");
define("ITEM112","");
define("IEFF112","");
define("ITEM113","");
define("IEFF113","");
define("ITEM114","");
define("IEFF114","");

// iRedux - New tribes items
define("ITEM115","عصا ميليشيا الرقيق");
define("IEFF115","+500 كفاءة حربية للبطل ؛ +3 مكافأة هجوم +3 مكافأة دفاع لكل ميليشيا الرقيق");
define("ITEM116","صولجان عصا ميليشيا الرقيق");
define("IEFF116","+1000 كفاءة حربية للبطل ؛ +4 مكافأة هجوم +4 مكافأة دفاع لكل ميليشيا الرقيق");
define("ITEM117","نجمة ميليشيا الرقيق");
define("IEFF117","+1500 كفاءة حربية للبطل ؛ +5 مكافأة هجوم +5 مكافأة دفاع لكل ميليشيا الرقيق");
define("ITEM118","فأس حارس الرماد");
define("IEFF118","+500 كفاءة حربية للبطل ؛ +3 مكافأة هجوم +3 مكافأة دفاع لكل حارس الرماد");
define("ITEM119","فأس حارس الرماد");
define("IEFF119","+1000 كفاءة حربية للبطل ؛ +4 مكافأة هجوم +4 مكافأة دفاع لكل حارس الرماد");
define("ITEM120","فأس حرب حارس الرماد");
define("IEFF120","+1500 كفاءة حربية للبطل ؛ +5 مكافأة هجوم +5 مكافأة دفاع لكل حارس الرماد");
define("ITEM121","Short Khopesh of the Warrior");
define("IEFF121","+500 to hero strength For every Khopesh Warrior: +3 attack and +3 defence");
define("ITEM122","Khopesh of the Warrior");
define("IEFF122","+1000 to hero strength For every Khopesh Warrior: +4 attack and +4 defence");
define("ITEM123","Long Khopesh of the Warrior");
define("IEFF123","+1500 to hero strength For every Khopesh Warrior: +5 attack and +5 defence");
define("ITEM124","Spear of the Anhor Guard");
define("IEFF124","+500 to hero strength For every Anhur Guard: +6 attack and +6 defence");
define("ITEM125","Spear of the Anhor Guard");
define("IEFF125","+1000 to hero strength For every Anhur Guard: +8 attack and +8 defence");
define("ITEM126","Lance of the Anhor Guard");
define("IEFF126","+1500 to hero strength For every Anhur Guard: +10 attack and +10 defence");
define("ITEM127","Short Bow of the Resheph Chariot");
define("IEFF127","+500 to hero strength For every Resheph Chariot: +9 attack and +9 defence");
define("ITEM128","Bow of the Resheph Chariot");
define("IEFF128","+1000 to hero strength For every Resheph Chariot: +12 attack and +12 defence");
define("ITEM129","Long Bow of the Resheph Chariot");
define("IEFF129","+1500 to hero strength For every Resheph Chariot: +15 attack and +15 defence");

define("ITEM130","Hatchet of the Mercenary");
define("IEFF130","+500 to hero strength For every Mercenary: +3 attack and +3 defence");
define("ITEM131","Axe of the Mercenary");
define("IEFF131","+1000 to hero strength For every Mercenary: +4 attack and +4 defence");
define("ITEM132","Battle Axe of the Mercenary");
define("IEFF132","+1500 to hero strength For every Mercenary: +5 attack and +5 defence");
define("ITEM133","Composite Short Bow of the Bowman");
define("IEFF133","+500 to hero strength For every Bowman: +3 attack and +3 defence");
define("ITEM134","Composite Bow of the Bowman");
define("IEFF134","+1000 to hero strength For every Bowman: +4 attack and +4 defence");
define("ITEM135","Composite Long Bow of the Bowman");
define("IEFF135","+1500 to hero strength For every Bowman: +5 attack and +5 defence");
define("ITEM136","Short Spatha Sword of the Steppe Rider");
define("IEFF136","+500 to hero strength For every Steppe Rider: +6 attack and +6 defence");
define("ITEM137","Spatha Sword of the Steppe Rider");
define("IEFF137","+1000 to hero strength For every Steppe Rider: +8 attack and +8 defence");
define("ITEM138","Long Spatha Sword of the Steppe Rider");
define("IEFF138","+1500 to hero strength For every Steppe Rider: +10 attack and +10 defence");
define("ITEM139","Composite Short Bow of the Marksman");
define("IEFF139","+500 to hero strength For every Marksman: +6 attack and +6 defence");
define("ITEM140","Composite Bow of the Marksman");
define("IEFF140","+1000 to hero strength For every Marksman: +8 attack and +8 defence");
define("ITEM141","Composite Long Bow of the Marksman");
define("IEFF141","+1500 to hero strength For every Marksman: +10 attack and +10 defence");
define("ITEM142","Short Spatha Sword of the Marauder");
define("IEFF142","+500 to hero strength For every Marauder: +9 attack and +9 defence");
define("ITEM143","Spatha Sword of the Marauder");
define("IEFF143","+500 to hero strength For every Marauder: +12 attack and +12 defence");
define("ITEM144","Long Spatha Sword of the Marauder");
define("IEFF144","+500 to hero strength For every Marauder: +15 attack and +15 defence");

define("HEROI0","السمات");
define("HEROI1","نقطة");
define("HEROI2","attribute power tooltip");
define("HEROI3","Fighting Strength Combines with your heros defence and offense. The higher the Fighting strength the better in battle.");
define("HEROI4","الكفائة الحربية:");
define("HEROI5","from hero");
define("HEROI6","attribute power tooltip");
define("HEROI7","تزيد قوة البطل في الهجوم والدفاع وتقلل من الإصابات التي يتعرض لها في الهجمات , المغامرات , الدفاع.");
define("HEROI8","الكفائة الحربية");
define("HEROI9","from hero +");
define("HEROI10","Attributes");
define("HEROI11","Fighting Strength");
define("HEROI12","Max");
define("HEROI13","يزيد القوة الهجومية لكل القوات المرافقة له.");
define("HEROI14","مكافأة الهجوم");
define("HEROI15","يزيد القوة الدفاعية لكل القوات المرافقة له.");
define("HEROI16","مكافأة الدفاع");
define("HEROI17","إنتاج البطل الحالي.");
define("HEROI18","مكافئة الموارد");
define("HEROI19","الموارد");
define("HEROI20","Distribute");
define("HEROI21","تغيير انتاجية البطل من الموارد");
define("HEROI22","All resouces");
define("HEROI23","Your hero regeneration:");
define("HEROI24","per day");
define("HEROI25","الحالة الصحية");
define("HEROI26","The hero will revive in this village");
define("HEROI27","Not enought resources for hero revive");
define("HEROI28","تجديد البطل");
define("HEROI29","Herói estará pronto em");
define("HEROI30","Duração");
define("HEROI31","يحتاج البطل إلي");
define("HEROI32","خبرة ليصل للمستوي");
define("HEROI33","الخبرة");
define("HEROI34","The Higher the Hero level , the more points you get.");
define("HEROI35","Nível do herói");
define("HEROI36","Your Heros speed determines how many fields he travels an hour");
define("HEROI37","السرعة:");
define("HEROI38","حقل/الساعة");
define("HEROI39","سيبقى بطلك دوماً مع قواتك.");
define("HEROI40","عند تعرضك لهجوم سيختبأ بطلك ويكون في مأمن.");
define("HEROI41","البطل مخفي:");
define("HEROI43","إنتاج البطل:");
define("HEROI44","تجديد البطل الخاص بك: 20% في اليوم");
define("HEROI45","السرعة");
define("HEROI46","");
define("HEROI47","إنتاج البطل الحالي:");
define("HEROI48","Atributos:");
define("HEROI49","Please save your changes.");
define("HEROI50","النقاط المتوفرة:");
define("HEROI51","حفظ التغييرات");
define("HEROI53","The resources needed to restore the hero:");
define("HEROA0","الموقع");
define("HEROA1","المدة");
define("HEROA2","الصعوبة");
define("HEROA3","الوقت المتبقي");
define("HEROA4","الرابط");
define("HEROA5","لا يوجد مغامرات.");
define("HEROA6","إلي المغامرة");
define("HEROA7","غابة");
define("HEROA8","وادي مهجور");
define("HEROA9","جبل");
define("HEROA10","محيط");
define("HEROF0","Cabeça");
define("HEROF1","Cor do cabelo");
define("HEROF2","Penteado");
define("HEROF3","Orelhas");
define("HEROF4","Sombrancelhas");
define("HEROF5","Olhos");
define("HEROF6","Nariz");
define("HEROF7","Boca");
define("HEROF8","Barba");
define("HEROAC0","تصفية حسب الخوذ");
define("HEROAC1","تصفية حسب دروع الجسد");
define("HEROAC2","تصفية حسب اليد اليسري");
define("HEROAC3","تصفية حسب اليد اليمني");
define("HEROAC4","تصفية حسب الأحذية");
define("HEROAC5","تصفية حسب الأحصنة");
define("HEROAC6","تصفية حسب الضمادات الصغيرة");
define("HEROAC7","تصفية حسب الضمادات الكبيرة");
define("HEROAC8","تصفية حسب الأقفاص");
define("HEROAC9","تصفية حسب المخطوطات");
define("HEROAC10","تصفية حسب دهن الشفاء");
define("HEROAC11","تصفية حسب إكسير الحياة");
define("HEROAC12","تصفية حسب كتاب الحكمة");
define("HEROAC13","تصفية حسب لوائح القوانين");
define("HEROAC14","تصفية حسب القطع الفنية");
define("HEROAC15","لا مزادات لديك.");
define("HEROAC16","جاري");
define("HEROAC17","مغلق");
define("HEROAC18","نقص الفضة");
define("HEROAC19","الرهان الحالي:");
define("HEROAC20","الرهان الأعلي:");
define("HEROAC21","رهان جديد:");
define("HEROAC22","رهان");
define("HEROAC23","مزادات");
define("HEROAC24","لا مزادات لديك.");
define("HEROAC25","الوقت");
define("HEROAC26","فزت");
define("HEROAC27","مزادات منتهية");
define("HEROAC28","تحديد الكل");
define("HEROAC29","لا يوجد عروض حاليا.");
define("HEROAC30","شراء");
define("HEROAC31","بيع");
define("HEROAC32","المزادات");
define("HEROAC33","لا يوجد");
define("HEROAC34","لكل وحدة");
define("HEROAC35","تمتلك حاليا");
define("HEROAC36","اغراضك التي تباع في مزادات حاليا (الحد الأقصي 5 في نفس الوقت)");
define("HEROAC37","مزادات منتهية.");
define("HEROAC38","No sales found.");
define("HEROAC39","Really sell this item?");
define("HEROAC40","بيع &lt");
define("HEROAC41","الكمية");
define("HEROAC42","تغيير");
define("HEROAC43","إضافة رهان");
define("HEROAC44","Per unit");

define("PRODUCTION_OVERVIEW","Production overview");
define("PRODUCTION_BONUS","Production bonus");
define("PRODUCTION_TOTAL_BONUS","Total bonus");
define("PRODUCTION_FIELD","Source");
define("PRODUCTION","Producão");
define("PRODUCTION_BONUS2","Bonus");
define("PRODUCTION_HP","Hero production");
define("PRODUCTION_BALANCE","Interim balance");
define("PRODUCTION_P25","+25% Production");
define("PRODUCTION_INACTIVE","Inactive");
define("PRODUCTION_TOTAL","Total");
define("PRODUCTION_PROD_TOTAL","إجمالي الإنتاج في الساعة:");
define("PRODUCTION_PROD_S1","Clay Pit Level");
define("PRODUCTION_PROD_S2","Woodcutter Level");
define("PRODUCTION_PROD_S3","Iron Mine Level");
define("PRODUCTION_PROD_S4","Cropland Level");
define("PRODUCTION_PROD_S5","Hourly production including production bonus: ");
define("PRODUCTION_PROD_S6","The production bonus increases the production of the resource in <span class=\"underlined\">all</span> your villages.");
define("PRODUCTION_PROD_T1","Sawmill Level");
define("PRODUCTION_PROD_T2","Oasis");
define("PRODUCTION_PROD_T3","Brickyard Level");
define("PRODUCTION_PROD_T4","Iron Foundry Level");
define("PRODUCTION_PROD_T5","Grain Mill Level");
define("PRODUCTION_PROD_T6","Bakery Level");

define("ESCAPE_GORIZ","Escape");
define("CAPTCHA_1","Click on the image for a new one");
define("PLUS_TIME_ENABLE","<p>Your plus account is active for <b><span id=\"timer100\">%s</span></b> day(s).</p>");
define("RENEW","Renew");
define("USERS_ACTIVE","Active users");
define("USERS_ONLINE","Online users");
define("USERS_TOTAL","Total users");
define("dorf1_links","قائمة الروابط");
define("dorf1_activateplus","فعل حساب بلاس");
define("dorf1_villageNameBox_1","لا يوجد هناك سوق في هذه القرية");
define("dorf1_villageNameBox_2","قم ببناء السوق");
define("dorf1_villageNameBox_3","لا يوجد هناك ثكنة في هذه القرية");
define("dorf1_villageNameBox_4","إبني الثكنة");
define("dorf1_villageNameBox_5","لا يوجد هناك إسطبل في هذه القرية");
define("dorf1_villageNameBox_6","إبني الإسطبل");
define("dorf1_villageNameBox_7","لا يوجد مصانع حربية في هذه القرية");
define("dorf1_villageNameBox_8","ابني المصانع الحربية");
define("dorf1_villageNameBox_9","السوق");
define("dorf1_villageNameBox_10","الثكنة");
define("dorf1_villageNameBox_11","عمليات التدريب");
define("dorf1_villageNameBox_11n","لا يوجد أي عمليات تدريب");
define("dorf1_villageNameBox_12","الإسطبل");
define("dorf1_villageNameBox_13","عمليات التدريب");
define("dorf1_villageNameBox_14","المصانع الحربية");
define("dorf1_villageNameBox_15","عمليات التدريب");
define("dorf1_villageNameBox_16","تغيير اسم القرية");
define("dorf1_villageNameBox2_1","إحصائيات القرية");
define("dorf1_villageNameBox2_2","Mostrar coordenadas");
define("dorf1_villageNameBox2_4","Esconder coordenadas");
define("dorf1_villageNameBox2_3","القرى");
define("dorf1_villageNameBox2_5","النقاط الحضارية الازمة لإنشاء قرية جديدة:");
define("Link_desc_text_1" , "يسمح لك حساب بلاس بإضافة قائمة روابط.");
define("infobox_desc_text_1" , "الأخبار");
define("Questbox_desc_text_1" , "Welcome");
define("Questbox_desc_text_2" , "Start quest");
define("LVL",'مستوي');
define("SIDE_I_1","Aretefacs will be released in");
define("SIDE_I_2","");
define("SIDE_I_3","Aretefacts are released");
define("SIDE_I_4","<font style='font-size:11px;'>Building plans will be released in</font>");
define("SIDE_I_5","Building plans are released");
define("SIDE_I_6","Medals will be given in");
define("SIDE_I_7","");
define("CS","Zona para construção");
define("UPGRADECOST","تكاليف الترقية إلي مستوي %s ");
define("SERVER_INFO","Server info");
define("MORE_ADVS_1","You should go on adventure");
define("MORE_ADVS_2","more times to be able to buy things");
define("WORLDWONDER","معجزة العالم");
define("WAREHOUSE","مستودع الخام");
define("NO_FARM","There's no farm till now!");
define("FARMLIST_FOOTER","<small>
Farm resources are calculated every ~30 seconds.<br>
Warehouse storage and Crop are equal in farms.<br>
The list is sorted by the time of creation of every item.<br>
</small>");
define("PROTECTION_TIME","مازال لديك <b><span class=\"timer\" counting=\"down\" value=\"%s\">%s</span></b> ساعة من حماية المبتدئين.");
define("ACCOUNT_DELETION","باقي على حذف الحساب <b><span class=\"timer\" counting=\"down\" value=\"%s\">%s</span></b>");
define("Ally_dorf1","التحالف");
define("DIRECT_LINK","روابط مباشرة");
define("NO_PLUS_ESI","هذا الخيار يحتاج إلي حساب بلاس");
define("NO_PLUS_ESI2","الذهاب للسوق");
define("NO_PLUS_ESI3","السوق");

define("plus_goldcount","Gold");
define("buygold_DESC_1","Location");
define("buygold_DESC_2","Choose your location:");
define("buygold_DESC_3","Change");
define("buygold_DESC_4","Gold packages:");
define("buygold_DESC_5","Choose a package");
define("buygold_DESC_7","Payment gateways");
define("buygold_DESC_8","Should be choosen");
define("buygold_DESC_9","Prices are marked final");
define("buygold_DESC_10","Payments will be done immediatelly");
define("buygold_DESC_11","Buy gold");
define("buygold_DESC2_1","Choose another package");
define("buygold_DESC_6","Step 2 - Choose a package");
define("first_desc1" , "إختيار القبيلة");
define("first_desc2" , "الإمبراطوريات العظيمة تبدأ من القرارات والأساسات الهامة ! هل انت مهاجم تحب المنافسة ؟ او تحب التجارة ووقتك محدود ؟ او تحب ان تكون أحد أفراد مجموعة قوية ؟");
define("first_desc3" , "Choose a tribe to play on this server");
define("first_desc4" , "We recommend gauls if it's your first travian experience");
define("first_Gauls_desc1" , "Gauls");
define("first_Gauls_desc2" , "Specifications:");
define("first_Gauls_desc3" , "Little time is required.");
define("first_Gauls_desc4" , "From the very beginning of the game are better defended against looting.");
define("first_Gauls_desc5" , "Roadway systems are excellent and fastest troops in the game.");
define("first_Gauls_desc6" , "The new players are the best choice.");
define("first_Roman_desc1" , "Romans");
define("first_Roman_desc2" , "خصوصيات:");
define("first_Roman_desc3" , "Time management is necessary.");
define("first_Roman_desc4" , "They can expand faster than the rest of his village.");
define("first_Roman_desc5" , "The powerful army, but they are precious; implemented systems are very powerful.");
define("first_Roman_desc6" , "The race was very hard early game and this breed is not recommended for new players.");
define("first_Teutons_desc1" , "Teutons");
define("first_Teutons_desc2" , "خصوصيات:");
define("first_Teutons_desc3" , "There is enough time for aggressive players.");
define("first_Teutons_desc4" , "Troops cheap it can be trained quickly and are good for loot.");
define("first_Teutons_desc5" , "For aggressive and experienced players.");
define("first_page_second_step_desc1" , "إختيار منطقة البداية");
define("first_page_tribe1","The Romans");
define("first_page_tribe2","The Teutons");
define("first_page_tribe3","The Gauls");
define("first_page_tribe1_lead","Kvyntvs");
define("first_page_tribe2_lead","Henrik");
define("first_page_tribe3_lead","Ambyvryks");
define("first_Gauls_chosen_desc1" , "You chose %s. Since this your guide will be %s .");
define("first_Romans_chosen_desc1" , "شما نژاد %s را انتخاب کرديد. از اين به بعد %s راهنماي شما خواهد بود.");
define("first_Teutons_chosen_desc1" , "شما نژاد %s را انتخاب کرديد. از اين به بعد %s راهنماي شما خواهد بود.");
define("first_page_second_step_desc2" , "Change tribe");
define("first_page_second_step_desc3" , "We build your village or place can change your selection by clicking on the map.");
define("first_page_second_step_desc4" , "You will start in north-west");
define("first_page_second_step_desc5" , "You will start in north-east");
define("first_page_second_step_desc6" , "You will start in south-west");
define("first_page_second_step_desc7" , "You will start in south-east");
define("first_page_second_step_desc8" , "Create village");
define("BUILDINGS","مركز القرية");
define("CHANGING_YOUR_VILLAGE_NAME","تغيير إسم القرية");
define("NEW_NAME","إسم القرية الجديد");
define("IS_ON_ADVENTURE","On an adventure");
define("MOVING_FROM","Moving from");
define("LN_TO","to");
define("SOME_CHANGES_DONE","Your changes will be undone. Sure to leave?");
define("MORE_INFO_25_BUTTON","More info about 25% extra resource production");
define("HEROFULLLVL","Your hero reached his/her max level.");
define("LN_QUEST","Quest");
define("SHOW_HINTS_PANEL","Show hints panel");
define("JR_CONSTRUCTION_PLANS_TITLE","WW Construction Plan");
define("JR_CONSTRUCTION_PLANS_VNAME","Construction Plan Village");
define("JR_CONSTRUCTION_PLANS_DESC","With this ancient construction plan you will able to build World Wonder to level 50. to build further, your alliance must hold at least two plans.");
define("JR_CONSTRUCTION_PLANS_RELEASE_TITLE","Construction Plans");
define("JR_CONSTRUCTION_PLANS_RELEASE_DESC","Many decades ago the tribes of travian were surprised by the unexpected return of jackass. This tribe of ancient wisdom, incomparable greatness and glory was about to disrupt free people again. Thus were made ??all efforts to prepare a final war against Natars and drive out forever. Many have thought about so-called \"Wonders of the World\", a legendary construction, as one solution. It was said that the end will make builders leaders and conquerors travian ");
define("JR_CONSTRUCTION_PLANS_RELEASE_TREASURY_DESC","However, you said that you will need a plan to build such a building. For this reason architects have designed clever ways to store them safely. After a while they could glimpse buildings like temples in many towns and cities - treasuries.");
define("JR_CONSTRUCTION_PLANS_RELEASE_MYTHS_DESC","Unfortunately, no one - not even the wise and experienced - have no idea where these plans could be found. The more people trying to find, the more seemed to be only myths.");
define("JR_CONSTRUCTION_PLANS_RELEASE_DISCOVERED_DESC","Today, however, this last secret will be discovered. Losses and past aspirations were vain as today scouts of several tribes have found the locations of these construction plans. Well guarded by the Natars, lie hidden in many oases scattered throughout the land travian. Only the bravest heroes will be able to capture such a plan and bring it home safely so that construction can begin.");
define("JR_CONSTRUCTION_PLANS_RELEASE_LINK_DESC","All information on the operation of the construction plans can be found on the servers.");
define("JR_HERE","Here");
define("JR_travian_TEAM","travian Team");
define("JR_CONTINUE","continue");
define("JR_ATTACK_COMBAT_MODEL","Combat Model");
define("JR_ATTACK_NORMAL","Normal attack");
define("JR_ATTACK_RAID","Raid");
define("JR_WARSIM_ATTACKER","Attacker");
define("JR_WARSIM_DEFENDERS","Defenders");
define("JR_WARSIM_ATTACKCONFIG","Attack configuration");
define("JR_WARSIM_SIMULATE","Simulate");
define("JR_POWERED_BY","Powered by mehran");
define("JR_RIGHTS","All rights reserved");
define("JR_ZRAVIANX","mehran");
define("JR_COPYYEAR","&copy; 2011 - 2012");
define("JR_FOOTER_SPECIAL_S","<b>Developing by: <a href=\"404/\" target=\"_blank\" style=\"color:purple\">mehran</a> (Developer & translator & designer)</b> <br/><br/> So many thanks to <a style=\"color:green\">Mehran EBDa (Developer), Papa Grumps (English Translator) and akshay9 (Developer) </a>");
define("JR_NOT_ADMIN","Access Denied: You are not Admin!");
define("JR_ART_BPTTL","Ancient Construction Plan");
define("JR_ART_BPVN","WW Buildingplan");
define("JR_ART_BPDES",'With this ancient construction plan you will able to build World Wonder to level 50. to build further, your alliance must hold at least two plans.');
define('WILLACTIN','Will activate in');
define("JR_CATEGORY","Category");
define("JR_SELECT","Select");
define("JR_GENERALQUESTIONS","General Questions");
define("JR_ICANNOTLOGIN","I can not log in");
define("JR_ICANNOTREGISTER","I can not register");
define("JR_SEND","Send");
define("JR_REGISTERFIRST","Please, register account first.");
define("JR_HEROATTRIBUTES","السمات");
define("JR_HEROAPPEARANCE","المظهر");
define("JR_HEROADVENTURE","مغامرة");
define("JR_HEROAUCTION","Auction");
define("JR_HEROHEAD","شكل الرأس");
define("JR_HEROHAIRCOLOR","لون الشعر");
define("JR_HEROHAIRSTYLE","تسريحة الشعر");
define("JR_HEROEARS","الأذن");
define("JR_HEROEYEBROWS","الحاجبان");
define("JR_HEROEYES","العيون");
define("JR_HERONOSE","الأنف");
define("JR_HEROMOUTH","الفم");
define("JR_HEROBEARD","الذقن");
define("JR_HEROLOCATION","Local");
define("JR_HEROTIME","Duração");
define("JR_HERODIFFICULTY","Dificuldade");
define("JR_HEROTIMELEFT","Tempo Restante");
define("JR_HEROLINK","Link");
define("JR_HEROBIDERROR1","You dont have enough silver coin to buy this item. You should at least have");
define("JR_HEROBIDERROR2","coin(s)");
define("JR_HEROBIDERROR3","Not enopugh silver coins for bid.");
define("JR_HEROBIDERROR4","There is a larger bid.");
define("JR_HEROBIDERROR5","The auction is finished.");
define("JR_HEROBIDERROR6","The auction does not exist.");
define("JR_HEROEVASION","When checked hero will hide when village attacked.");
define("JR_HERODEADORNOTHERE","Your hero is dead, or (s)he is not in this village, so you can not use this item.");
define("HEROISDEAD","Hero is dead");
define("JR_HEROBUYITEMS","Buy Items");
define("JR_HEROSELLITEMS","Sell Items");
define("JR_HEROEXP","experience");
define("JR_HEROEXPGROW","experience gain");
define("JR_HEROEXPWILLBE","after use, experience will be");
define("JR_HEROCURRENTCP","Current cultural point");
define("JR_HEROCPVALUE","Cultural point");
define("JR_HEROCPAFTERUSE","Cultural point after use");
define("JR_HEROWANNAWEAR","Do you really want to wear this item?");
define("JR_HEROTIU","عدد القطع");


define("JR_SAVE","حفظ");

define("JR_FOREST","forest");
define("JR_FIELD","field");
define("JR_MOUNTAIN","mountain");
define("JR_SEA","sea");
define("JR_OK","Ok");

define("JR_CANCEL","Cancel");
define("JR_YES","Yes");
define("JR_NO","No");
define("NUM","No.");
define("JR_NOTFINISHED","Not Finished");
define("JR_CONSUMPTION","Consumption");

define("JR_MOW","Medals of the week");
define("JR_MEDALSCONFIRM","Confrim to give medals");
define("JR_MEDALSCONFIRMNOTE","Note: this will take time");
define("JR_CONFIRM","تأكيد");
define("GENDER","الجنس");
define("GENDER0","Not Specified");
define("GENDER1","Homem");
define("GENDER2","Mulher");

//logint4.4
define("logint40","Larger map||For this feature you need Travian Plus activated.");
define("logint41","محتلة");
define("logint42","غير محتلة");
define("logint43","البرية");
define("logint410","مركز الخريطة");
define("logint411","إنشاء قرية جديدة");
define("logint412","التقارير");
define("logint413","الاعب");
define("logint414","القبيلة");
define("logint415","التحالف");
define("logint416","المالك");
define("logint417","السكان");
define("logint418","زيادة");
define("logint419","إرسال قوات");

//pluspalladiys
define("pluss0","Shopping for gold in other ways (qiwi, webmoney, paypal) contact");
define("pluss1","administrator");
define("pluss2","After buying gold you must go to");
define("pluss3","Bank");
define("pluss4","There you will be able to transfer gold to any account on the server available partially or completely.");
define("pluss5","Buying Gold");
define("pluss6","مميزات بلاس");
define("pluss7","الوصف");
define("pluss8","المدة");
define("pluss9","التكلفة");
define("pluss10","تفعيل");
define("pluss11","حساب");
define("pluss12","المتبقي");
define("pluss13","يوم");
define("pluss14","Exchange Office");
define("pluss15","Enter the amount of Gold or Silver you want to exchange.");
define("pluss16","Exchange rates");
define("pluss17","1 Gold : 100 Silver");
define("pluss18","200 Silver : 1 Gold");
define("pluss19","exchange");
define("pluss20","ERRRRROOOOOOORRRRRRRRRRRRR");
define("pluss21","Buy Gold");
define("pluss22","الوظيفة");
define("pluss23","ربح الذهب");
define("pluss24","Exchange Gold and Silver");
define("pluss25","تفعيل");
define("pluss26","تمديد");
define("pluss27","تحتاج ذهب");
define("pluss28","متبقي");
define("pluss29","يوم");
define("pluss30","ساعة");
define("pluss31","دقيقة");
define("pluss32","تمتلك");
define("pluss33","ذهبة");
define("pluss34","إنتاج: الخشب");
define("pluss35","إنتاج: الطين");
define("pluss36","إنتاج: الحديد");
define("pluss37","إنتاج: القمح");
define("pluss38","1:1 تاجر");
define("pluss39","");
define("pluss40","");
define("pluss41","");
define("pluss42","");
define("pluss43","");
define("pluss44","");
define("pluss45","");

//herohome
define("herohero0","السمات");
define("herohero1","المظهر الخارجي");
define("herohero2","مغامرة");
define("herohero3","المزايدات");
define("herohero4","تريد الشراء؟");
define("herohero5","بيع");
define("herohero6","عشوائي");

//ban_msg.tpl
define("yubnd","لقد تم حظر حسابك، من فضلك راسل الصياد");

define("SOKI_1", "Adventure");
define("SOKI_2", "Units");
define("SOKI_3", "Arrival");
define("SOKI_4", "Start Adventure");
define("SOKI_5", "تحذير");
define("SOKI_6", "Appeared scrolls");

define("attack1", "الحقول");
define("attack2", "المباني");
define("attack3", "القوات");
define("attack4", "الحقول");
define("attack5", "المباني");
define("attack6", "القوات");
define("attack7", "المهندس المعماري");
define("attack8", "Giant Marble Hammer)");
define("attack9", "Hemon's Scrolls");
define("attack10", "Opal Horsesho");
define("attack11", "Golden Chariot");
define("attack12", "Pheidippides' Sandals");
define("attack13", "Tale of a Rat");
define("attack14", "General's Letter");
define("attack15", "Diary of Sun Tzu");
define("attack16", "Scribed Soldier's Oath");
define("attack17", "Declaration of War");
define("attack18", "Memoirs of Alexander the Great");
define("attack19", "Great warehouse or great granary plan!");
define("attack20", "Wonder of the World builders!");
define("attack21", "confirm");

define("newdorf1", "Found new village");
define("newdorf2", "new");
define("newdorf3", "Found new village");
define("newdorf4", "troops");
define("newdorf5", "Duration");
define("newdorf6", "Resources");
define("newdorf7", "confirm");
define("newdorf8", "النقاط الحضارية");

define("search1", "Reinforcement");
define("search2", "Normal attack");
define("search3", "Raid");
define("search4", "الإحداثيات");
define("search5", "X"); // not sure if really needed lol
define("search6", "Y");
define("search7", "Confirm");

define("sendback1", "Send Home");
define("sendback2", "Send these troops back");
define("sendback3", "Units");
define("sendback4", "Time");
define("sendback5", "في");
define("sendback6", "to");
define("sendback7", "confirm");

define("startraid1", "You don't have enough troops!");


define("activated1", "register for the game");
define("activated2", "registration");

define("delete", "register for the game");
define("delete2", "delete");

define("allimenu1", "active");
define("allimenu2", "normal");
define("allimenu3", "News");
define("allimenu4", "Attacks");
define("allimenu5", "Options");

define("allidesc1", "Store");

define("assignpos1", "Assign");

define("attacker1", "There are no reports available");

define("defender1", "There are no reports available");

define("attacks1", "Military events");
define("attacks2", "Defender");
define("attacks3", "Attacker");

define("changepos0", "الاسم");
define("changepos1", "ذهاب");
define("changepos2", "طرد");
define("changepos3", "تغيير الوصف");
define("changepos4", "دبلوماسية التحالف");
define("changepos5", "IGMs to the whole alliance");
define("changepos6", "دعوة");
define("changepos7", "عنوان المنصب");

define("changediplo1", "لا يوجد");

define("invite1", "لا يوجد دعوات");
define("invite2", "مرفوضة");
define("invite3", "مدعو");

define("kick1", "Go");

define("option1", "Go");

define("overvieww1", "Details");
define("overvieww2", "Position");
define("overvieww", "Members");


define("quitally1", "Quit");

define("bids1", "For each unit");
define("bids2", "Bids");
define("bids3", "فضة");
define("bids4", "Time");
define("bids5", "Del");

define("buy1", "فضة");
define("buy2", "per unit");
define("buy3", "New bid");
define("buy4", "Offer");

define("build1", "Upgrade Warehouse");
define("build2", "Upgrade Granary");
define("build3", "Enough Resources");
define("build4", "Wheat production is negative, there will never be enough resources");
define("build5", "few resources");
define("build6", "Fully Developed");
define("build7", "قم بترقية أفران صهر الحديد");
define("build8", "هناك أبحاث قيد البحث");
define("build9", "development");
define("build10", "Unit");
define("build11", "Remaining time");
define("build12", "Finished");
define("build13", "Demolition of the building");
define("build14", "If you no longer need a building, you can order the demolition of the building");
define("build15", "Demolition of");
define("build16", "Finish all construction and research orders in this village immediately for 2 Gold?");
define("build17", "Destroy the building");
define("build18", "Kill");
define("build19", "The farm list is free, but only when the gold club available.");
define("build20", "إعدادات الهروب");
define("build21", "تشغيل هروب تلقائي للقوات من القرية في حال تعرضك للهجوم.");
define("build22", "Attack on ");
define("build23", "Raid on ");
define("build24", "Reinforcement for ");
define("build25", "Troops");
define("build26", "Arrival");
define("build27", "في");
define("build28", "Return from ");
define("build29", "Reinforcement for ");
define("build30", "Return from ");
define("build31", "Return from ");
define("build32", "Return from cover ");
define("build33", "Oasis");
define("build34", "Cover");
define("build35", "Return from ");
define("build36", "Troops");
define("build37", "Stolen");
define("build38", "Arrival");
define("build39", "Attack on your");
define("build40", "Oasis");
define("build41", "Troops");
define("build42", "Arrival");
define("build43", "في");
define("build44", "Troops");
define("build45", "Consumption");
define("build46", "por hora");
define("build47", "Reinforcement for");
define("build48", "Scout");
define("build49", "Attack on");
define("build50", "Raid on");
define("build51", "بناء قرية جديدة");
define("build52", "Adventure");
define("build53", "Oasis");
define("build54", "Troops");
define("build55", "التجار");
define("build56", "خشب");
define("build57", "حديد");
define("build58", "قمح");
define("build59", "Coordinates");
define("build60", "Player");
define("build61", "duration");
define("build62", "Merchants");
define("build63", "Send Merchants");
define("build64", "Crop");
define("build65", "Coordinates");
define("build66", "Each merchant can carry");
define("build67", "Send Resources");
define("build68", "No Coordinates selected");
define("build69", "You cannot send resources to the same village");
define("build70", "Player is Banned. You cannot send resources to him.");
define("build71", "Resources not selected.");
define("build72", "Enter coordinates or village name.");
define("build73", "Too few merchants.");
define("build74", "Merchants coming");
define("build75", "النقل من");
define("build76", "الوصول في");
define("build77", "Own merchants on the way");
define("build78", "النقل إلي");
define("build79", "Arrival in");
define("build80", "Resource");
define("build81", "Merchants returning");
define("build82", "Return from");
define("build83", "Arrival in");
define("build84", "Resource");
define("build85", "I'm searching");
define("build86", "I'm offering");
define("build87", "Offers at the marketplace");
define("build88", "Offered");
define("build89", "to me");
define("build90", "Wanted");
define("build91", "from me");
define("build92", "Player");
define("build93", "Duration");
define("build94", "Action");
define("build95", "Not Enough Resource");
define("build96", "Not Enough Merchant");
define("build97", "Accept offer");
define("build98", "There are no available offers on the market");
define("build99", "Offering");
define("build100", "Wood");
define("build101", "Clay");
define("build102", "Iron");
define("build103", "Crop");
define("build104", "max. time of transport");
define("build105", "hours");
define("build106", "Searching");
define("build107", "own alliance only");
define("build108", "Merchants");
define("build109", "Sell");
define("build110", "Offer");
define("build111", "Alliance");
define("build112", "Duration");
define("build113", " hrs.");
define("build114", "All");
define("build115", "NPC completed");
define("build116", "Cost 3");
define("build117", "Back to building");
define("build118", "NPC Trade");
define("build119", "Trade resources at (step 2 of 2)");
define("build120", "Costs");
define("build121", "You can't use NPC trade in WW village.");
define("build122", "Start");
define("build123", "Merchants");
define("build124", "Action");
define("build125", "No active trade routes");
define("build126", "edit");
define("build127", "Create new trade route");
define("build128", "Create trade route");
define("build129", "Target village");
define("build130", "Resources");
define("build131", "Start time");
define("build132", "Deliveries");
define("build133", "Edit trade route");
define("build134", "Resources");
define("build135", "Start time");
define("build136", "Deliveries");
define("build137", "Alliance");
define("build138", "Tag");
define("build139", "Name");
define("build140", "Invites");
define("build141", "Accept");
define("build142", "There are no invitations available");
define("build143", "found alliance");
define("build144", "Tag");
define("build145", "Name");
define("build146", "create");
define("build147", "Train");
define("build148", "Training");
define("build149", "No units available. Research at academy");
define("build150", "Available");
define("build151", "all");
define("build152", "Units need to be researched");
define("build153", "Train");
define("build154", "Units need to be researched");
define("build155", "Training");
define("build156", "Duration");
define("build157", "Finished");
define("build158", "Research can commence when academy is completed");
define("build159", "Expand warehouse");
define("build160", "Expand<br>warehouse");
define("build161", "Expand granary");
define("build162", "Expand<br>granary");
define("build163", "Enough resources");
define("build164", "Crop production is negative so you will never reach the required resources");
define("build165", "Too few");
define("build166", "resources");
define("build167", "Research in progress");
define("build168", "Researching");
define("build169", "Duration");
define("build170", "Complete");
define("build171", "hrs");
define("build172", "Currently hidden units per resource");
define("build173", "Hidden units per resource at level");
define("build174", "Celebrations can commence when the town hall is completed.");
define("build175", "Celebrations");
define("build176", "Action");
define("build177", "in progress");
define("build178", "at");
define("build179", "hold");
define("build180", "Great celebration (2000 culture points)");
define("build181", "Finish");
define("build182", "Party");
define("build183", "In order to expand your nation you need culture points. These accumulate over time from your buildings, and faster at higher levels..");
define("build184", "Production of this village");
define("build185", "Culture points per day");
define("build186", "Production of all villages");
define("build187", "Culture points per day");
define("build188", "Your villages have produced");
define("build189", "points in total. To found or conquer a new village you need");
define("build190", "points.");
define("build191", "By attacking with senators, chiefs or chieftains a village's loyalty can be brought down. If it reaches zero, the village joins the realm of the attacker. The loyalty of this village is currently at");
define("build192", "%");
define("build193", "Villages founded or conquered by this village");
define("build194", "Village");
define("build195", "Player");
define("build196", "Inhabitants");
define("build197", "Coordinates");
define("build198", "Date");
define("build199", "No other village has been founded or conquered by this village yet.");
define("build200", "training");
define("build201", "period");
define("build202", "ready");
define("build203", "on");
define("build204", "Train");
define("build205", "In order to found a new village you need a level 10 or 20 residence and 3 settlers. In order to conquer a new village you need a level 10 or 20 residence and a senator, chief or chieftain.");
define("build206", "password is wrong");
define("build207", "This is your capital");
define("build208", "change capital");
define("build209", "Are you sure, that you want to change your capital?<br/><b>You can't undone this!</b>.<br/>For security you must enter your password to confirm");
define("build210", "Change");
define("build211", "Palace under construction");
define("build212", "In order to found a new village you need a level 10, 15 or 20 palace and 3 settlers. In order to conquer a new village you need a level 10, 15 or 20 palace and a senator, chief or chieftain.");
define("build213", "Your Artefacts");
define("build214", "Title");
define("build215", "Village");
define("build216", "Captured");
define("build217", "You have no Artefacts");
define("build218", "Diamond Chisel");
define("build219", "The buildings are more durable against attacks by catapults and rams. Does not count for the Wonder of the World, but the account wide and unique type count for all other buildings in the Wonder of the World village.");
define("build220", "Giant Marble Hammer");
define("build221", "The buildings are more durable against attacks by catapults and rams. Does not count for the Wonder of the World, but the account wide and unique type count for all other buildings in the Wonder of the World village.");
define("build222", "Hemon's Scrolls");
define("build223", "The buildings are more durable against attacks by catapults and rams. Does not count for the Wonder of the World, but the account wide and unique type count for all other buildings in the Wonder of the World village.");
define("build224", "Opal Horseshoe");
define("build225", "The troops travel faster.");
define("build226", "Golden Chariot");
define("build227", "The troops travel faster.");
define("build228", "Pheidippides' Sandals");
define("build229", "The troops travel faster.");
define("build230", "Tale of a Rat");
define("build231", "The Scouts, Equites Legati and Pathfinders are better at spying, and defending against spy attacks. All scouts in the village/account as well as all scouts sent for spying from this village/account are affected. However, scouts deployed as reinforcements to villages not covered by the Artefact are not affected. Additionally, you can see the type of troops attacking you at your rally point, but not the amount of troops.");
define("build232", "General's Letter");
define("build233", "The Scouts, Equites Legati and Pathfinders are better at spying, and defending against spy attacks. All scouts in the village/account as well as all scouts sent for spying from this village/account are affected. However, scouts deployed as reinforcements to villages not covered by the Artefact are not affected. Additionally, you can see the type of troops attacking you at your rally point, but not the amount of troops.");
define("build234", "Diary of Sun Tzu");
define("build235", "The Scouts, Equites Legati and Pathfinders are better at spying, and defending against spy attacks. All scouts in the village/account as well as all scouts sent for spying from this village/account are affected. However, scouts deployed as reinforcements to villages not covered by the Artefact are not affected. Additionally, you can see the type of troops attacking you at your rally point, but not the amount of troops.");
define("build236", "Silver Platter");
define("build237", "The troops consume less crop.");
define("build238", "Sacred Hunting Bow");
define("build239", "The troops consume less crop.");
define("build240", "King Arthur's Chalice");
define("build241", "The troops consume less crop.");
define("build242", "Scribed Soldier's Oath");
define("build243", "The troops are trained faster.");
define("build244", "Declaration of War");
define("build245", "The troops are trained faster.");
define("build246", "Memoirs of Alexander the Great");
define("build247", "The troops are trained faster.");
define("build248", "Great warehouse or great granary plan");
define("build249", "Grants ability to build great warehouse or great granary..");
define("build250", "Access to Buildings");
define("build251", "Map of the Hidden Caverns");
define("build252", "Artefact raises cranny capacity and additionally causes enemy catapult attacks to fire randomly. World Wonder can always be targeted and hit.");
define("build253", "Bottomless Satchel");
define("build254", "Artefact raises cranny capacity and additionally causes enemy catapult attacks to fire randomly. World Wonder can always be targeted and hit.");
define("build255", "Trojan Horse");
define("build256", "Artefact raises cranny capacity and additionally causes enemy catapult attacks to fire randomly. World Wonder can always be targeted and hit.");
define("build257", "Pendant of Mischief");
define("build258", "This artifact changes its effect every 24 hours, and can get any of the effects of other artifacts except building plans for World Wonders, Great Granaries, and Great Warehouses. Also the effect scope is randomly decided between account and village wide every 24 hours.");
define("build259", "Accidentally");
define("build260", "Forbidden Manuscrip");
define("build261", "This artifact changes its effect every 24 hours, and can get any of the effects of other artifacts except building plans for World Wonders, Great Granaries, and Great Warehouses. Also the effect scope is randomly decided between account and village wide every 24 hours.");
define("build262", "Aaccidentally");
define("build263", "Building scroll Wonder of the World");
define("build264", "Artifact needed to build Wonder");
define("build265", "Access to Buildings");
define("build266", "Village");
define("build267", "Account");
define("build268", "Treasury");
define("build269", "Influence");
define("build270", "التحف القريبة");
define("build271", "Title");
define("build272", "Player");
define("build273", "Distance");
define("build274", "Nearest artifacts missing.");
define("build275", "Diamond Chisel");
define("build276", "Giant Marble Hammer");
define("build277", "Hemon's Scrolls");
define("build278", "Opal Horseshoe");
define("build279", "Golden Chariot");
define("build280", "Pheidippides' Sandals");
define("build281", "Tale of a Rat");
define("build282", "General's Letter");
define("build283", "Diary of Sun Tzu");
define("build284", "Scribed Soldier's Oath");
define("build285", "Declaration of War");
define("build286", "Memoirs of Alexander the Great");
define("build287", "Great warehouse or great granary plan");
define("build288", "Access to Buildings");
define("build289", "Building scroll Wonder of the World");
define("build290", "Access to Buildings");
define("build291", "Village");
define("build292", "Account");
define("build293", "Distance");
define("build294", "التأثير");
define("build295", "Small artifacts");
define("build296", "Title");
define("build297", "Player");
define("build298", "Alliance");
define("build299", "There are no artifacts.");
define("build300", "Diamond Chisel");
define("build301", "Opal Horseshoe");
define("build302", "Tale of a Rat");
define("build303", "Scribed Soldier's Oath");
define("build304", "Great warehouse or great granary plan");
define("build305", "Access to Buildings");
define("build306", "Building scroll Wonder of the World");
define("build307", "Access to Buildings");
define("build308", "Treasury");
define("build309", "Effect");
define("build310", "Village");
define("build311", "Large artifacts");
define("build312", "Title");
define("build313", "Player");
define("build314", "Alliance");
define("build315", "Giant Marble Hammer");
define("build316", "Hemon's Scrolls");
define("build317", "Golden Chariot");
define("build318", "Pheidippides' Sandals");
define("build319", "General's Letter");
define("build320", "Diary of Sun Tzu");
define("build321", "Declaration of War");
define("build322", "Memoirs of Alexander the Great");
define("build323", "Great warehouse or great granary plan");
define("build324", "Access to Buildings");
define("build325", "Account");
define("build326", "There are no artifacts.");
define("build327", "Treasury");
define("build328", "Effect");
define("build329", "Small Artefacts");
define("build330", "Large Artefacts");
define("build331", "Village");
define("build332", "Account");
define("build333", "Not Active");
define("build334", "Active");
define("build335", "Diamond Chisel");
define("build336", "The buildings are more durable against attacks by catapults and rams. Does not count for the Wonder of the World, but the account wide and unique type count for all other buildings in the Wonder of the World village.");
define("build337", "Giant Marble Hammer");
define("build338", "The buildings are more durable against attacks by catapults and rams. Does not count for the Wonder of the World, but the account wide and unique type count for all other buildings in the Wonder of the World village.");
define("build339", "Hemon's Scrolls");
define("build340", "The buildings are more durable against attacks by catapults and rams. Does not count for the Wonder of the World, but the account wide and unique type count for all other buildings in the Wonder of the World village.");
define("build341", "Opal Horseshoe");
define("build342", "The troops travel faster.");
define("build343", "Golden Chariot");
define("build344", "The troops travel faster.");
define("build345", "Pheidippides' Sandals");
define("build346", "The troops travel faster.");
define("build347", "Tale of a Rat");
define("build348", "The Scouts, Equites Legati and Pathfinders are better at spying, and defending against spy attacks. All scouts in the village/account as well as all scouts sent for spying from this village/account are affected. However, scouts deployed as reinforcements to villages not covered by the Artefact are not affected. Additionally, you can see the type of troops attacking you at your rally point, but not the amount of troops.");
define("build349", "General's Letter");
define("build350", "The Scouts, Equites Legati and Pathfinders are better at spying, and defending against spy attacks. All scouts in the village/account as well as all scouts sent for spying from this village/account are affected. However, scouts deployed as reinforcements to villages not covered by the Artefact are not affected. Additionally, you can see the type of troops attacking you at your rally point, but not the amount of troops.");
define("build351", "Diary of Sun Tzu");
define("build352", "The Scouts, Equites Legati and Pathfinders are better at spying, and defending against spy attacks. All scouts in the village/account as well as all scouts sent for spying from this village/account are affected. However, scouts deployed as reinforcements to villages not covered by the Artefact are not affected. Additionally, you can see the type of troops attacking you at your rally point, but not the amount of troops.");
define("build353", "Scribed Soldier's Oath");
define("build354", "The troops are trained faster.");
define("build355", "Declaration of War");
define("build356", "Memoirs of Alexander the Great");
define("build357", "Great warehouse or great granary plan");
define("build358", "Grants ability to build great warehouse or great granary..");
define("build359", "Access to Buildings");
define("build360", "Building scroll Wonder of the World");
define("build361", "Artifact needed to build Wonder");
define("build362", "Access to Buildings");
define("build363", "Owner");
define("build364", "Village");
define("build365", "Alliance");
define("build366", "Effect");
define("build367", "Bonus");
define("build368", "Activity");
define("build369", "Stored in");
define("build370", "Treasury");
define("build371", "Level");
define("build372", "Captured");
define("build373", "سرعة التجار الحالي");
define("build374", "سرعة التجار في المستوي");
define("build375", "سرعة التجار في المستوي 20");
define("build376", "Train");
define("build377", "Training can commence when great barracks are completed.");
define("build378", "Available");
define("build379", "Training can commence when great stables are completed.");
define("build380", "قائمة التدريب");
define("build381", "Duration");
define("build382", "Finished");
define("build383", "First train cavalry units in the Academy.");
define("build384", "Current stability bonus");
define("build385", "Actual bonus");
define("build386", "Bonus to level");
define("build387", "Festivity");
define("build388", "Action");
define("build389", "Holiday");
define("build390", "during");
define("build391", "Resources will be sufficient");
define("build392", "Not enough grain.");
define("build393", "Not enough");
define("build394", "resources");
define("build395", "celebrate");
define("build396", "The holiday lasts");
define("build397", "Will be completed");
define("build398", "Currect maximum traps to train");
define("build399", "Traps");
define("build400", "Maximum traps to train at level");
define("build401", "Maximum traps to train at level 20");
define("build402", "Your currently have");
define("build403", "Available");
define("build404", "Make");
define("build405", "Training can commence when trapper are completed.");
define("build406", "واحات محتلة بواسطة");
define("build407", "village");
define("build408", "Type");
define("build409", "الولاء");
define("build410", "Conquered");
define("build411", "Coordinates");
define("build412", "Resources");
define("build413", "1. Next Oasis from Hero´s Mansion Level 10");
define("build414", "2. Next Oasis from Hero´s Mansion Level 15");
define("build415", "3. Next Oasis from Hero´s Mansion Level 20");
define("build416", "2. Next Oasis from Hero´s Mansion Level 15");
define("build417", "3. Next Oasis from Hero´s Mansion Level 20");
define("build418", "3. Next Oasis from Hero´s Mansion Level 20");
define("build419", "Other oases");
define("build420", "Owner");
define("build421", "Village");
define("build422", "Coordinates");
define("build423", "Resource");
define("build424", "Current capacity");
define("build425", "units");
define("build426", "Capacity at level");
define("build427", "Cost");
define("build428", "Workers are working");
define("build429", "Food shortages: first upgrade Cropland!");
define("build430", "Upgrade warehouse.");
define("build431", "Upgrade Granary.");
define("build432", "Enough resources at");
define("build433", "Build");
define("build434", "Queue");
define("build435", "Build");
define("build436", "Architect");
define("build437", "بناء مبنى جديد");
define("build438", "المباني التي ستتاح قريباً");
define("build439", "المتطلبات الأساسية");
define("build440", "مستوي");
define("build441", "The building is at the maximum level.");
define("build442", "Constructed maximum level.");
define("build443", "The building is on the demolition.");
define("build444", "Costs");
define("build445", "to build up to the level");
define("build446", "All Workers are busy");
define("build447", "All Workers are busy. (Queue)");
define("build448", "A shortage of food.Build more farms.");
define("build449", "Build Warehouse.");
define("build450", "Build Granary.");
define("build451", "Never will be enough resources");
define("build452", "enough resources");
define("build453", "Increase the level of");
define("build454", "turn");
define("build455", "Architect");
define("build456", "Wonder of the World");
define("build457", "Level");
define("build459", "You need to have World Wonder level 1 to be able to change its name.");
define("build460", "World Wonder name");
define("build461", "You can not change the name of the World Wonder after level 10.");
define("build462", "Name changed.");
define("build463", "The building is at the maximum level.");
define("build464", "Constructed maximum level.");
define("build465", "The building is on the demolition.");
define("build466", "Costs");
define("build467", "to build up to the level");
define("build468", "All Workers are busy.");
define("build469", "All Workers are busy. (Queue)");
define("build470", "A shortage of food.Build more farms.");
define("build471", "Build Warehouse.");
define("build472", "Build Granary.");
define("build473", "enough resources");
define("build474", "في");
define("build475", "Increase the level of");
define("build476", "Architect");
define("build477", "Need WW construction plan.");
define("build478", "Need more WW construction plan.");

define("dorf31", "Village");
define("dorf32", "Village");
define("dorf33", "Building");
define("dorf34", "Troops");
define("dorf35", "Merchants");
define("dorf36", "Resources");
define("dorf37", "Sum");
define("dorf38", "المخازن");
define("dorf39", "النقاط الحضارية");
define("dorf310", "CP/day");
define("dorf311", "Celebrations");
define("dorf312", "Troops");
define("dorf313", "Slots");
define("dorf314", "Own troops");
define("dorf315", "CP");
define("dorf316", "Attacks");

define("map1", "مركز الخريطة");
define("map2", "Found new village");
define("map3", "إرسال قوات");
define("map4", "Distribution:");
define("map5", "Troops");
define("map6", "Player");
define("map7", "Tribe");
define("map8", "Alliance");
define("map9", "Owner");
define("map10", "Population");
define("map11", "التقارير");

define("msg0", "العنوان");
define("msg1", "الاعب");
define("msg2", "مرسل");
define("msg3", "لا يوجد رسائل حاليا.");
define("msg4", "تحديد الكل");
define("msg5", "Delete");
define("msg6", "Inbox");
define("msg7", "كتابة");
define("msg8", "التاريخ");
define("msg9", "There is no message.");
define("msg10", "Recipient");
define("msg11", "Suject");
define("msg12", "Send");

define("notice0", "from the village");
define("notice1", "Troops");
define("notice2", "lost");
define("notice3", "prisoners");
define("notice4", "Information");
define("notice5", "defense");
define("notice6", "reinforcement");
define("notice7", "attack");
define("notice8", "from the village");
define("notice9", "Posted");
define("notice10", "في");
define("notice11", "sender");
define("notice12", "from the village");
define("notice13", "Troops");
define("notice14", "Troops");
define("notice15", "Information");
define("notice16", "Resources obtained from");
define("notice17", "Posted");
define("notice18", "from the village");
define("notice19", "Resources");
define("notice20", "in village");
define("notice21", "scouts");
define("notice22", "There are no reports");
define("notice23", "تحديد الكل");
define("notice24", "حذف");

define("plus0", "buy GOLD");
define("plus1", "Price");
define("plus2", "number");
define("plus3", "Buy");
define("plus4", "Tarif");
define("plus5", "Buy");
define("plus6", "SPECIAL");
define("plus7", "Gold Price");
define("plus8", "Price");
define("plus9", "Amount");
define("plus10", "Buy(PayPal)");
define("plus11", "Tarif");
define("plus12", "Buy");
define("plus13", "Покупка золота на другую сумму(UnitPay) (Rus)");
define("plus14", "Сумма платежа");
define("plus15", "Итого");
define("plus16", "*При покупке золота на сумму свыше 300 рублей золото выгоднее чем по тарифам!");
define("plus17", "В случае возникновения вопросов обращайтесь к");
define("plus18", "Администратору");
define("plus19", "После покупки золота необходимо перейти в");
define("plus20", "Банк");
define("plus21", "Там вы сможете Перевести Золото на любой(ые) аккаунт(ы) на доступном сервере частично или полностью.");
define("plus22", "рублей");
define("plus23", "Банк(мини версия)");
define("plus24", "Здесь Хранится купленное/переведенное золото с прошлых раундов. (Если остаток превышал 100 монет)<br />Вы можете перевести его на <s>любой другой аккаунт</s> <b>ваш аккаунт</b>(мини-версия) в рамках xTravian.net");
define("plus25", "Введите ваш Код для переноса Золота.");
define("plus26", "(Он был отправлен на ваш E-mail.)");
define("plus27", "E-mail не найден!");
define("plus28", "Код принят!");
define("plus29", "К переводу доступно");
define("plus30", "золота");
define("plus31", "Золото к переводу");
define("plus32", "Игровой Ник");
define("plus33", "Код Неверен!");
define("plus34", "Что-то пошло не так.<br />Попробуйте ещё раз.");
define("plus35", "Player");
define("plus36", "Found");
define("plus37", "ID Игрока");
define("plus38", "Будет переведено");
define("plus39", "золота");
define("plus40", "Игрок не найден");
define("plus41", "Назад");
define("plus42", "Что-то пошло не так.<br />Попробуйте ещё раз.");
define("plus43", "Золото Переведено Успешно!");
define("plus44", "Что-то пошло не так.<br />Попробуйте ещё раз.");
define("plus45", "E-mail");
define("plus46", "Полная Версия");
define("plus47", "Invite friends and win gold!");
define("plus48", "Отправьте вашему другу Вашу персональную Реф-ссылку");
define("plus49", "Благоприятные условия для получения награды");
define("plus50", "1.Как только население империи приглашенного вами игрока будет выше ");
define("plus51", "вы сможете забрать");
define("plus52", "золота кликнув по иконке");
define("plus53", "2.Вы не можете быть заместителем приглашенного игрока.");
define("plus54", "Приглашенные Игроки");
define("plus55", "Игрок");
define("plus56", "Дата Регистрации");
define("plus57", "Население");
define("plus58", "Деревни");
define("plus59", "Забрать");
define("plus60", "You have not brought in any new players yet.");
define("plus61", "Топ Рефереров");
define("plus62", "Место");
define("plus63", "Игрок");
define("plus64", "Exchange Office");
define("plus65", "Enter the amount of Gold or Silver you want to exchange");
define("plus66", "Exchange rates");
define("plus67", "1 Gold : 100 Silver<br>200 Silver : 1 Gold");
define("plus68", "exchange");
define("plus69", "Травиан");
define("plus74", "Купить Золото");
define("plus75", "Функции");
define("plus76", "Заработать золото");
define("plus77", "Банк");

define("other0", "Вы заблокированы.Напишите письмо администратору");
define("other1", "xTravian.net");
define("other2", "Завершить");
define("other3", "Завершено в");
define("other4", "Level");
define("other5", "Outer building site");
define("other6", "WorldWonder");
define("other7", "Building Site");
define("other8", "Rally Point building site");
define("other9", "Construction Site");
define("other10", "В контакте");
define("other11", "Facebook");
define("other12", "Adventure");
define("other13", "hours of protection.");
define("other14", "The account will be deleted in");
define("other15", "Артефакты");
define("other16", "Чудо деревни");
define("other17", "Свитки через");
define("other18", "Изменить Язык на Русский");
define("other19", "Change language into English");
define("other20", "Producão");
define("other21", "لا شيء");
define("other22", "Щелкните для");
define("other23", "строительства кликом по полю");

//пункт сбора
define("punktxuev0","الحقول");
define("punktxuev1","المباني");
define("punktxuev2","القوات");
define("punktxuev3","تأكيد");
define("punktxuev4","إذهب للمغامرة");
define("punktxuev5","Tropas");
define("punktxuev6","Chegada");
define("punktxuev7","بطلك ليس في القرية بعد.");
define("punktxuev8","بطلك ميت.");
define("punktxuev9","يجب بناء نقطة التجمع.");
define("punktxuev10","Send Home");
define("punktxuev11","Send these troops back");
define("punktxuev12","Units");
define("punktxuev13","time");
define("punktxuev14","Not enough troops!");

//активация
define("activate0","للعب، يجب عليك تفعيل حسابك أولا.");
define("activate1","كود التفعيل:	");
define("activate2","تفعيل");
define("activate3","Mistype E-mail or username?");
define("activate4","Here, you can unregister and re-register.");
define("activate5","Your E-Mail:");
define("activate6","Your Login:");
define("activate7","Your Password:");
define("activate8","Check the accuracy of the entered data.");
define("activate9","Make sure that the account has not been activated.");
define("activate10","Send");
define("activate11","Or");

//альянс
define("ally0","Invites");
define("ally1","No Invites");
define("ally2","Invite for");
define("ally3","Go");
define("ally4","تفاصيل");
define("ally5","المناصب");
define("ally6","الأعضاء");
define("ally7","مغادرة");
define("ally8","الأخبار");
define("ally9","الهجمات");
define("ally10","خيارات");
define("ally11","Assign");
define("ally12","لا شيء");
define("ally13","");
define("ally14","");

//фармлист
define("farmlist0","القرية");
define("farmlist1","التفاصيل");
define("farmlist2","");
define("farmlist3","المسافة");
define("farmlist4","القوات");
define("farmlist5","الهجوم الأخير");
define("farmlist6","إضافة قرية");
define("farmlist7","هجوم");
define("farmlist8","هل أنت متأكد من حذف القائمة؟");
define("farmlist9","إنشاء قائمة جديدة");
define("farmlist10","لا يوجد أي قوائم بعد.");
define("farmlist11","الاسم:");
define("farmlist12","انشاء");
define("farmlist13","This is not your list, sir!");
define("farmlist14","لا يوجد قرية بهذه الإحداثيات.");
define("farmlist15","لم يتم تحديد أي قوات.");
define("farmlist16","أدخل إحداثيات صحيحة.");
define("farmlist17","اضافة مزرعة");
define("farmlist18","اسم المزرعة:");
define("farmlist19","تحديد الهدف:");
define("farmlist20","حذف");
define("farmlist21","برية");

//dorf3
define("dorf0","نظرة عامة");
define("dorf1","الموارد");
define("dorf2","المخازن");
define("dorf3","النقاط الحضارية");
define("dorf4","القوات");
define("dorf5","قرية");
define("dorf6","الهجمات");
define("dorf7","المباني");
define("dorf8","القوات");
define("dorf9","التجار");
define("dorf10","المجموع");
define("dorf11","نقطة حضارية/اليوم");
define("dorf12","احتفالات");
define("dorf13","منافذ");
define("dorf14","القوات");
define("dorf15","");
define("dorf16","");
define("dorf17","");
define("dorf18","");
define("dorf19","");
define("dorf20","");
define("dorf21","");
define("dorf22","");
define("dorf23","");
define("dorf24","");
define("dorf25","");
define("dorf26","");
define("dorf27","");
define("dorf28","");
define("dorf29","");
define("dorf30","");


//makegold в плюсе
define("mkg0","Invite your friends and get the gold!");
define("mkg1","How to do it?");
define("mkg2","Send to your friend");
define("mkg3","Your personal referral link");
define("mkg4","Favorable conditions for the award:");
define("mkg5","1.How to only the population of the empire player you invite will be higher");
define("mkg6",",you can pick up");
define("mkg7","gold by clicking on the icon");
define("mkg8","2.You can not be substituted invited player.");
define("mkg9","invited players:");
define("mkg10","Player");
define("mkg11","Date of registration");
define("mkg12","Population");
define("mkg13","Village");
define("mkg14","pick up");
define("mkg15","You do not even have invited new players.");

//сообщения
define("MSG0","العنوان");
define("MSG1","الاعب");
define("MSG2","التاريخ");
define("MSG3","لا يوجد رسائل حاليا.");
define("MSG4","تحديد الكل");
define("MSG5","حذف");
define("MSG6","البريد");
define("MSG7","كتابة");
define("MSG8","مرسل");
define("MSG9","التاريخ");
define("MSG10","رد");
define("MSG11","العودة إلي صندوق البريد");
define("MSG12","المستقبل:");
define("MSG13","إرسال");


//TAINIK
define ("TA", " Cranny Level ");
define ("TA1", " The cranny is used to hide some of your resources when the village is attacked. These resources cannot be stolen. ");
define ("TA2", " Cranny ");
define ("TA3", " units");
define ("TA4", " Cranny on level ");
define ("TA6", " Construction costs to a level ");
define ("TA7"," Improve to the level of ");
define("newrpt","تقارير جديدة:");

//SOKR
define("sokr0","المالك");
define("sokr1","القرية");
define("sokr2","التحالف");
define("sokr3","التأثير");
define("sokr4","زيادة");
define("sokr5","الفعالية");
define("sokr6","يخزن في:");
define("sokr7","الخزنة");
define("sokr8","مستوي");
define("sokr9","الاحتلال");
define("sokr10","تحفك ");
define("sokr11","التحفة");
define("sokr12","لا تمتلك أي تحف.");
define("sokr13","التحف القريبة");
define("sokr14","الاعب");
define("sokr15","المسافة");
define("sokr16","لا يوجد تحف قريبة.");
define("sokr17","الخزنة");
define("sokr18","تحف صغيرة");
define("sokr19","لا يوجد تحف.");
define("sokr20","تحف كبيرة ");
define("sokr21","غير مفعلة.");
define("sokr22","فعالة");

//taverna
define("TVRN0","الواحات المحتلة بواسطة");
define("TVRN1","");
define("TVRN2","النوع");
define("TVRN3","الولاء");
define("TVRN4","التاريخ");
define("TVRN5","الاحداثيات");
define("TVRN6","الزيادة");
define("TVRN7","الواحة التالية من قصر الأبطال مستوي 10");
define("TVRN8","الواحة التالية من قصر الأبطال مستوي 15");
define("TVRN9","الواحة التالية من قصر الأبطال مستوي 20");
define("TVRN10","واحات أخري ");
define("TVRN11","المالك");
define("TVRN12","خشب");
define("TVRN13","طين");
define("TVRN14","حديد");
define("TVRN15","قمح");

//отчеты
define("rpts0","القوات");
define("rpts1","Casualties");
define("rpts2","مأسور");
define("rpts3","معلومات");
define("rpts4","من القرية");
define("rpts5","تعزيزات");
define("rpts6","العنوان");
define("rpts7","ارسل موارد إلي");
define("rpts8","التاريخ");
define("rpts9","يدافع");
define("rpts10","in the village");
define("rpts11","يهاجم");
define("rpts12","يستكشف");
define("rpts13","(جديد)");
define("rpts14","لا يوجد تقارير.");
define("rpts15","المرسل");
define("ot4m0","الكل");
define("ot4m1","هجوم");
define("ot4m2","تعزيزات");
define("ot4m3","مغامرات");
define("ot4m4","تجارة");
define("XUYXUYXUY","تقارير");
define("REPORT_TODAY","اليوم");
define("REPROT_YESTERDAY","أمس");
define("len0","المخازن");
define("len1","القرية");

//рынок
define("MERCHANTS","التجار");
define("IMSEARCHING","ابحث عن");
define("IMOFFERING","عرضي");
define("OFFEREDONTHEMARKET","عرضي");
define("rinok0","طريق تجاري");
define("rinok1","العروض بالسوق");
define("rinok2","معروض");
define("rinok3","لي");
define("rinok4","مطلوب");
define("rinok5","مني");
define("rinok6","الاعب");
define("rinok7","المدة");
define("rinok8","قبول");
define("rinok9","لا يوجد موارد كافية");
define("rinok10","لا يوجد تجار كافيين");
define("rinok11","موافقة");
define("rinok12","لا يوجد عروض بالسوق");
define("rinok13","إرسال تجار");
define("rinok14","كل تاجر يستطيع حمل");
define("rinok15","مورد من الموارد");
define("rinok16","يجب إدخال الاحداثيات");
define("rinok17","لا يمكنك ارسال الموارد لنفس القرية");
define("rinok18","الاعب محظور، لا يمكنك الارسال له.");
define("rinok19","يجب تحديد الموارد لارسالها.");
define("rinok20","ادخل الاحداثيات او اسم القرية.");
define("rinok21","عدد غير كافي من التجار.");
define("rinok22","التجار القادمون");
define("rinok23","الوصول في");
define("rinok24","مورد");
define("rinok25","تجار القرية على الطريق:");
define("rinok26","التجار العائدون");
define("rinok27","العرض");
define("rinok28","البحث");
define("rinok29","أقصي وقت للنقل:");
define("rinok30","ساعة");
define("rinok31","التحالف فقط");
define("rinok32","بيع");
define("rinok33","عروضي");
define("rinok34","العرض");
define("rinok35","البحث");
define("rinok36","تحالف");
define("rinok37","ساعة");
define("rinok38","الكل");
define("rinok39","NPC completed.");
define("rinok40","التكلفة");
define("rinok41","العودة للمبني");
define("rinok42","توزيع الموارد (خطوة 1 من 2)");
define("rinok43","توزيع الموارد (خطوة 2 من 2)");
define("rinok44","لا يمكنك استعمال توزيع الموارد في قرية المعجزة.");
define("rinok45","Start");
define("rinok46","No active trade routes.");
define("rinok47","Trade route to");
define("rinok48","edit");
define("rinok49","Create new trade route");
define("rinok50","Resources");
define("rinok51","Start time");
define("rinok52","Deliveries");
define("rinok53","Edit trade route");
define("rinok54","Target village");

define("anlm0","");
define("anlm1","");
define("anlm2","");

define("upgra0","التكلفة:");
define("upgra1","لا يوجد عدد كافي من العمال.");
define("upgra2","Food shortages: first upgrade Cropland!");
define("upgra3","قم بترقية مستودع الخام.");
define("upgra4","قم بترقية مستودع الحبوب.");
define("upgra5","ستتوفر الموارد اللازمة");
define("upgra6","بناء مبنى");
define("upgra7","(قائمة الإنتظار)");
define("upgra8","البناء");
define("upgra9","(التكلفة:");

//world wonder
define("ww0","أعجوبة العالم تمثل قمة المفاخر الإنشائية وعروس العجائب .اللاعبون الأقوى والأغنى بالموارد هم فقط الذين يتمكنون من إنشاء مثل هذا العمل الجبار. ويتمكنون من المدافعة عنه ضد الأعداء الحاسدين لا يمكن بناء أعجوبة العالم إلا في القرة الأثرية للناتار . وبنائها لا يمكن إلا بعد الحصول على الخريطة. وعند المستوى 50 يجب أن يحصل لاعب أخر من نفس الحلف على الخريطة الثانية ليستمر البناء.");
define("ww1","You need to have World Wonder level 1 to be able to change its name.");
define("ww2","اسم المعجزة:");
define("ww3","You can not change the name of the World Wonder after level 10.");
define("ww4","Name changed.");
define("ww5","Need WW construction plan.");
define("ww6","Need more WW construction plan.");
define("ww7","For build to level ");
define("ww8","لتطوير معجزة العالم أعلي المستوي 50، يجب الحصول على مخطوطتي بناء (واحدة يجب أن تكون بالحساب الخاص بالمعجزة والأخري مع أحد أعضاء التحالف).");
define("ww9","لبناء المعجزة تحتاج للحصول على إحدي مخططات البناء في حسابك، ومن أجل تطويرها بعد المستوي 50 يجب أن يحصل عضو أخر في تحالفك على إحدي مخططات البناء!");

//kuznicaupgrade
define("kuzupg0","تطور للمستوي الأخير ");
define("kuzupg1","قم بترقية أفران صهر الحديد");
define("kuzupg2","هناك أبحاث بالفعل قيد البحث");
define("destroyvil","Village already destroyed.");

//exchange gold and silver
define("exchange0","تحويل الفضة");
define("exchange1","تحويل");
define("exchange2","لا تمتلك ذهب كافي");
define("exchange3","لا تمتلك فضة كافية");
define("exchange4","Не указано золото для обмена");
define("exchange5","تحويل الذهب");
define("exchange6","لا تمتلك ذهب كافي");
define("exchange7","تحويل الفضة");
define("exchange8","Обменять сейчас серебро на золото");
define("exchange9","Пройдите");
define("exchange10","приключений для открытия аукциона!");

//sitter
//заместители
define("accsit0","إرسال نهب");
define("accsit1","إرسال تعزيزات للاعبين آخرين");
define("accsit2","إرسال الموارد");
define("accsit3","شراء وإستخدام الذهب");
define("accsit4","حذف الرسائل والتقارير");
define("accsit5","قراءة وإرسال الرسائل");



//онлайн в альянсе(online in alliance)
define("oweronline0","متواجد الأن");
define("oweronline1","غير متواجد");
define("oweronline2","أخر تواجد منذ 3 أيام");
define("oweronline3","أخر تواجد منذ 7 أيام");

//doperevod
define("heroh0","إستهلاك");
define("heroh1","هل أنت متأكد من إستعمال هذه الأداة؟");
define("heroh2","النقاط الحضارية الحالية");
define("heroh3","النقاط التي سيتم إضافتها:");
define("heroh4","بعد الإضافة ستكون: ");
define("sendmsg","إرسال رسالة");

//EVERYDAY QUEST
define("questday0","تم الإنتهاء من المهمة");
define("questday1","لم تنتهي المهمة بعد");
define("questday2","Tarefas diárias");
define("questday3","نقاط");
define("questday4","من خلال جمع 25 نقطة سوف تتلقي واحده من المكافئات التالية:");
define("questday5","5 مغامرات");
define("questday6","+5000 نقطة حضارية");
if(!defined("HOWRES")){define("HOWRES",100000);} //делаем опасный трюк.
define("questday7",HOWRES." مورد من نوع واحد عشوائي");
define("questday8","من خلال جمع 50 نقطة سوف تتلقي واحده من المكافئات التالية:");
define("questday9","+1 يوم حساب بلاس");
define("questday10","+1 يوم +25% زيادة خشب");
define("questday11","+1 يوم +25% زيادة طين");
define("questday12","+1 يوم +25% زيادة حديد");
define("questday13","+1 يوم +25% زيادة قمح");
define("questday14","من خلال جمع 75 نقطة سوف تتلقي واحده من المكافئات التالية:");
define("questday15","+20 مغامرة");
define("questday16","+2 إكسير حياة");
define("questday17","+1000 فضة");
define("questday18","من خلال جمع 100 نقطة سوف تتلقي واحده من المكافئات التالية:");
define("questday19","+50 ذهب");
define("questday20","+4000 فضة");
define("questday21","+50 مغامرة");
define("questday22","تلقي هذه المكافآت المجانية كل يوم!");
define("questday23","(إعادة الضبط التالي عند الساعه 12:00 تأكد من جمع نقاط قبل ذلك )");
define("questday24","انهاء مغامرة");
define("questday25","احصل على وسام");
define("questday26","دعوة لاعب");
define("questday27","قم ببناء قرية جديدة");
define("questday28","إربح أو أنفق الذهب");
define("questday29","إحتلال واحة");
define("questday30","قم بزيارتنا على ديسكورد");
define("questday31","ترقية أي وحدة لأقصي ترقية في الحداد");
define("questday32","تهانينا! لقد قمت بتجميع نقاط كافية للحصول على مكافأة!");
define("questday33","typeset");
define("questday34","point");
define("questday35"," يمكنك الحصول على جائزتك للوصول إلي");
define("questday36","نقاط/نقطة اليوم.");
define("questday37","الجائزة عشوائية من إحدي الجوائز الأتية:");
define("questday38","لقد جمعت اليوم");
define("questday39","نقطة ولذلك حصلت على الجائزة الأتية:");
define("questday40","جائزتك لليوم:");

define("REP_С1"," تحرير <b>كل</b> القوات.");
define("REP_С2","القصر/السكن");
define("REP_С3"," سعة المخابيء");
define("REP_С4","السور");
define("REP_С5","حصل بطلك علي 0 خبرة");
define("REP_С6","حصل بطلك علي");
define("REP_С7","خفض بطلك الولاء من ");
define("REP_С8","إلي");
define("REP_С9","وحصل");
define("REP_С10","احتل بطلك الواحة وحصل علي");
define("REP_С11","");
define("REP_С12","لا يمكن إحتلال القرية");
define("REP_С13","لا يوجد نقاط حضارية كافية.");
define("REP_С14","مواطني القرية");
define("REP_С15","قرروا الإنضمام إلي قراك");
define("REP_С16","");
define("REP_С17","لم يتم تدمير القصر أو السكن.");
define("REP_С18","تم تدمير القرية.");
define("REP_С19","تدمرت من المستوي");
define("REP_С20","");
define("REP_С21"," المستوي");
define("REP_С22","");
define("REP_С23","السور لم يتأثر");
define("REP_С24","تم تدمير السور");
define("REP_С25","لا يوجد سور");
define("REP_С26","هجوم على التعزيزات في");
define("REP_С27","يهاجم");
define("REP_С28","تلقيت تعزيز من");
define("REP_С29","تعزيز من");
define("REP_С30","Occupied oasis");
define("REP_С31","لم يتم العثور على أي شيء في المغامرة.");
define("REP_С32","");
define("REP_С33","احتل البطل التحفة وحصل علي");
define("REP_С34","Your hero got NOT activated artefact and got");
define("REP_С35","Your hero didn't got artefact and got");
define("REP_С36","You have maximum count of artefacts. Hero got");
define("REP_С37","يتجسس على");
define("REP_С38","موارد قادمة من");
define("REP_С39","موارد إلي قرية");
define("REP_С40","تدمر");
define("REP_С41","لم يتأثر");
define("REP_С42","تم تخفيض الولاء من");
define("REP_С43","أسر وحوش");
define("REP_С44","");
define("REP_С45","واحة");
define("REP_С46","لم ينجو بطلك من المغامرة.");
define("REP_С47","");
define("REP_С48","يستكشف");
define("REP_С49","You captured 0 monster.");
define("savebankgold","Balance of gold from the previous round you can transfer through");
define("allgold", "All gold");
define("adminhelp"," If you have questions, please contact");
define("endround", "Gold is credited to your account immediately after payment");
define("endround1", "At the end of round / removing gold account is credited to the Bank by the formula:");

//punktsbora
define("punktsb1","الوقت المطلوب:");
define("punktsb2","تغيير موطن البطل");
define("DAYS","يوم");
//define("allgold", "Все золото");
//define("adminhelp"," В случае возникновения вопросов обращайтесь к");

define("quest173","المهام اليومية");
define("quest174","Prêmios diários");
define("quest175","إضغط هنا للتفاصيل");


	define("new_village","قرية جديدة");
	define("new_village2","قرية");

	$lang_winner['1'] = 'اعزائنا لاعبين '.SERVER_NAME.'';
	$lang_winner['2'] = 'بعد ايام طويلة من التعب والعمل بتفان قام احد العمال بوضع اللبنة الأخيرة في اقوى واعظم بناء عرفة العالم!';
	$lang_winner['3'] = 'النتيجة: إستطاع العمال في المعجزة';
	$lang_winner['4'] = 'ببناء اخر حجر في الإعجوبة نتيجة التنسيق والعمل الجيد , إستطاعو ان يبنو اخر حجر في معجزة العالم وإنهاء هذا العالم والسيطرة علية إلى الأبد.';
	$lang_winner['5'] = 'ودافعو عنها ضد هجمات الخصوم والنتار جنبنا إلى جنب مع تحالف';
	$lang_winner['6'] = ' من أنهى بناء المعجزة وقد رصد لها وتحالفه ملايين الموارد لبناء معجزة العالم وبذلك إستحق';
	$lang_winner['7'] = '"الفائز بهذا العالم"!';
	$lang_winner['8'] = 'قام ببناء أكبر وافضل الإمبراطوريات في هذا السيرفر واستحق بذلك لقب أكبر إمبراطورية يتبعه كل من';
	$lang_winner['9'] = 'و';
	$lang_winner['10'] = 'قام ببث الرعب والخوف في قلوب اعدائة وخصومة , هاجمهم وشتت شملهم وفرق جمعهم ونحرهم في أرضهم واستحق بذلك افضل مهاجمين السيرفر.';
	$lang_winner['11'] = 'قام بالدفاع عن عاصمته بكل شجاعة , وقتل جيوش كبيرة بإعداد كبيرة من مَن راودتهم نفسهم بالهجوم عليه , واستحق بذلك لقب أفضل المدافعين في السيرفر.';
	$lang_winner['12'] = 'أطيب التحيات';
	$lang_winner['13'] = 'فريق '.SERVER_NAME.'';
	$lang_winner['14'] = 'متابعة';
	$lang_winner['desc1'] = 'إجمالي القري';
	$lang_winner['desc2'] = 'إجمالي السكان';
	$lang_winner['desc3'] = 'نقاط الهجوم';
	$lang_winner['desc4'] = 'نقاط الدفاع';

	define("PL_01", "نادي الذهب");
	define("PL_02", "ميزات رائعة لكل فترة اللعب!!");
	define("PL_03", "دع التجّار في قريتك ينقلون الموارد أكثر من مرة تلقائياً، جِد القمحيات على الخارطة وقم بحفظ رسائلك وتقارير المعارك التي تخوضها. استخدم قائمة المزارع لتجدول هجماتك ... اِحمِ جيشك الهجومي بتفعيل خيار الهروب في العاصمة حين تتعرض لهجوم الخصم!");
	define("PL_04", "ترافيان بلاس");
	define("PL_05", "تمنح إمكانيات استعراض وميزات أفضل!");
	define("PL_06", "دع التجّار في قريتك ينقلون الموارد أكثر من مرة تلقائياً، جِد القمحيات على الخارطة وقم بحفظ رسائلك وتقارير المعارك التي تخوضها. استخدم قائمة المزارع لتجدول هجماتك ... اِحمِ جيشك الهجومي بتفعيل خيار الهروب في العاصمة حين تتعرض لهجوم الخصم!");
	define("PL_07", "+25% إنتاج الخشب");
	define("PL_08", "+25% إنتاج الطين");
	define("PL_09", "+25% إنتاج الحديد");
	define("PL_10", "+25% إنتاج القمح");
	define("PL_11", "تمنحك زيادة بمقدار 25% على إنتاجية قراك من الموارد المختارة للمدة التي تراها أمامك.");
	define("PL_12", "تضاف الـ 25% زيادة ليس فقط على الإنتاج الأساسي لقريتك، بل على الإنتاج مع الزيادات التي تحصل عليها بعد بناء المباني المختلفة!");
	
	define("PL_13", "اختر رجاء الميزة التي تريد استخدامها:");
	define("PL_14", "تفعيل");
	define("PL_15", "زمن الزيادة");
	define("PL_16", "الجولة بأكملها");
	define("PL_17", "يوم");
	define("PL_18", "تفعيل الأن.");
	define("PL_19", "تتنهي بعد");

	// productionBoostPopup
	define("BOOST_POPUP_GOLD","الذهب");
	define("BOOST_POPUP_BUTTON","تفعيل");

	define("BOOST_POPUP01","زيادة الانتاج");
	define("BOOST_POPUP02","رجاء اختر أي الموارد تريد زيادة انتاجها");
	define("BOOST_POPUP03","إنتاج الخشب");
	define("BOOST_POPUP04","إنتاج الطين");
	define("BOOST_POPUP05","إنتاج الحديد");
	define("BOOST_POPUP06","إنتاج القمح");
	define("BOOST_POPUP07","زمن الزيادة بالأيام");
	define("BOOST_POPUP08","ساعة");
	define("BOOST_POPUP09","مع زيادة الإنتاج من بلاس تستطيع رفع الانتاج في كل قراك بمقدار 25% لمدة 7 يوماً/أيام. إذا اخترت التمديد التلقائي، فإنه سيتم تمديد الزيادة على الإنتاج تلقائياً كلما اقتربت من نهايتها.");
	define("BOOST_POPUP11","ينتهي بعد");

	define("BD_LEVEL", "المستوي");
	define("MAXLEVEL", "المبني وصل للمستوي الأخير");
	define("TOP10", "أفضل 10");


	$lang['buildings']['texts'] = array (
		'TRA0' => 'قائمة التدريب',
		'TRA1' => 'الوحدات',
		'TRA2' => 'المدة',
		'TRA3' => 'الانتهاء',
		'AKA1' => 'هناك بحث بالفعل',
		'AKA2' => 'يمكن البدأ في الأبحاث عند الإنتهاء من بناء الأكاديمية.',
		
	);

	$lang['profile'] = array(
		'1' => 'الملف الشخصي للاعب',
		'2' => 'رتبة السكان',
		'3' => 'السكان',
		'4' => 'رتبة الهجوم',
		'5' => 'نقاط',
		'6' => 'رتبة المدافع',
		'7' => 'مستوى البطل',
		'8' => 'خبرة',

		// Medals
		'9' => 'الفئة',
		'10' => 'الإسبوع',
		'11' => 'الرتبة',
		'12' => 'النقاط'
	);
	

	$lang['quests'] = array(
		'Next' => 'متابعة',
		'getRewards' => 'إحصل على المكافئة',
		'ActivateTips' => 'عرض التلميحات',
		'DeactivateTips' => 'إخفاء التلميحات',
		'TipsToggleDescription' => 'التلميحات تشغيل / إيقاف',
		'GetRewards' => 'إحصل على المكافئة',
		'Overview' => 'نظرة عامة',
		'Battle' => 'معركة',
		'Economy' => 'التجارة',
		'World' => 'العالم',

		'1' => array(
			'Title' => 'مرحباً',
			'Description' => 'مرحباً '.$session->username.', مرحباً بك في ترافيان<br>سأساعدك حتى بناء اول قرية وستستمر بعدها بنفسك',
			'toDo' => array('دروس وشروح السمات الرئيسية للعبة، ويمكن أن يستغرق بضع دقائق. إبدأ الآن!')
		),
		'2' => array(
			'Title' => 'المهام والمساعدة',
			'Description' => 'يمكنك نقل صفحة المهمة أو إغلاقها. لفتحه مرة أخرى، ببساطة انقر على الصورة في أعلى الزاوية اليسرى. ستجد تلميحات والمهام تساعدك في اللعبة.',
			'toDo' => array('إغلاق المهمة', 'انقر على المستشار لفتح صفحة التلميحات', 'إيقاف تلميحات الميزة (تعطيل)'),
			'reward' => 'هناك مستوى حفرة الطين 1 في انتظاركم!',

			'completed' => 'يمكنك دائما الحصول على معلومات عن المهمة الحالية الخاصة بك. يمكنك البدء المهمة التالية عندما تتلقى مكافأة المهمة. الحصول على حفرة الطين الخاص بك.'
		),

		'3' => array(
			'Title' => 'بناء الحطاب',
			'Description' => 'لرفع قريتك تحتاج إلى الكثير من الموارد، لبناء وتدريب القوات وحتى تنمو إمبراطورية الخاص بك! أولا زيادة الموارد الخاصة بك الإنتاج - بناء الحطاب!',
			'toDo' => array('افتح منطقة الغابة', 'رفع حقل الخشب مستوى 1'),
			'reward' => 'إنهاء مستوى الحطاب 1',

			'completed' => 'انها بداية قوية لنتحرك في تجارة أقوى. لقد أكملت للتو بناء الحطاب، لتكون قادرة على الاستمرار.'
		),

		'4' => array(
			'Title' => 'ترقية الحطاب',
			'Description' => 'سيتطلب مبنى أكبر المزيد من الموارد مع كل ترقية، ولكن بدوره سوف تنتج أيضا أكثر من ذلك. يرجى ترقية الحطاب من مستوى 1 إلى مستوى 2 الآن!',
			'toDo' => array('فتح الحطاب المستوى 1','طلب بناء الحطاب المستوى 2'),
			'reward' => 'الانتهاء من بناء مستوى الحطاب 2 على الفور',

			'completed' => 'انها بداية قوية لنتحرك في تجارة أقوى. لقد أكملت للتو بناء الحطاب، لتكون قادرة على الاستمرار.'
		),

		'5' => array(
			'Title' => 'قم بتطوير حقل قمح',
			'Description' => 'إذا نظرت إلي أقصي يسار صفحة ترافيان ستري القمح الإستراتيجي المتوفر في قريتك، وهو القمح الذي يمكن أن يغطي استهلاك المباني الجديدة. تستهلك كل المباني القمح من أجل صيانة نفسها. قم بتطوير حقل قمح الأن رجاء.',
			'toDo' => array('إضغط على حقل القمح لفتحه','قم بتطوير حقل القمح إلي المستوي 1'),
			'reward' => 'قم بإنهاء عملية بناء حقل القمح للمستوي 1 فورا وقم وقم بتطويره للمستوي 2',

			'completed' => 'تنتج قريتك الأن القمح الكافي لتغطية احتياجات المباني الجديدة. يتم تأمين مستلزمات السكان عن طريق المباني، لكنك قد تحتاج لبعض القمح من خارج القرية من أجل إطعام الجنود والقوات.'
		),

		'6' => array(
			'Title' => 'غير انتاجيه البطل',
			'Description' => 'قم بالضغط على صورة البطل يمين الشاشة، وقم بتغيير إنتاجية البطل من الموارد إلي الطين.',
			'toDo' => array('اضغط على صورة البطل','غير انتاجية الموارد'),
			'reward' => ''.number_format(200 * SPEED).' <i class="r2"></i>',

			'completed' => 'عمل جيد. سيساعدك وجود بطلك أوقات ندرة الموارد في قريتك. سيقوم البطل بزيادة إنتاج الموارد (بحسب ما توجهه أنت) وتبقي زيادة الإنتاج في موطن البطل حتي لو كان على الطريق. سأقوم الأن بإضافة بعض الموارد في مخازنك.'
		),

		'7' => array(
			'Title' => 'أدخل قريتك',
			'Description' => 'الأن، سنحتاج لزيادة سعة مخازن الموارد في القرية. من أجل ذلك علينا الدخول إلي مركز القرية وبناء المخازن فيها. من أجل ذلك إضغط علي الدائرة الثانية من اليمين لو سمحت.',
			'toDo' => array('أدخل قريتك الأن'),

			'completed' => 'عمل جيد. سيساعدك وجود بطلك أوقات ندرة الموارد في قريتك. سيقوم البطل بزيادة إنتاج الموارد (بحسب ما توجهه أنت) وتبقي زيادة الإنتاج في موطن البطل حتي لو كان على الطريق. سأقوم الأن بإضافة بعض الموارد في مخازنك.'
		),

		'8' => array(
			'Title' => 'قم ببناء مخزن',
			'Description' => 'بدون مخازن في القرية يمكن تخزين كمية قليلة جدا من الموارد فيها، إضغط على أي مكان مخصص للبناء في قريتك، إبحث عن المخازن في قائمة البني التحتية وإبدا ببنائه.',
			'toDo' => array('افتح قائمة البناء واختر من هناك قائمة البني التحتية','اعط امر البناء للمخزن إلي المستوي 1'),
			'reward' => 'يوم واحد من ترافيان بلاس',

			'completed' => 'بدأت عملية تشييد المخزن، وقريبا ستحصل على سعة تخزين أكبر لمواردك وما تنتجه قريتك. سأمنحك "يوم بلاس" واحد من ترافيان، ما يعطيك إمكانية تشييد مبنيين في نفس الوقت.'
		),

		'9' => array(
			'Title' => 'نقطة التجمع',
			'Description' => 'حتي تتمكن من إرسال بطلك في مغامرة، لابد لك من أن تبني نقطة تجمع، تستطيع إيجاد مكانها في مركز القرية! قم بنناء نقطة التجمع للمستوي 1.',
			'toDo' => array('إضغط على المكان المخصص لتشييد نقطة التجمع','اعط أمر البناء لنقطة التجمع إلي المستوي 1'),
			'reward' => '<img src="img/x.gif" alt="ذهب" title="ذهب" class="gold"> 2',

			'completed' => 'عظيم! لقد بدأت عملية البناء وسنتمكن من إرسال بطلك في مغامرة. لأنك أنهيت هذه المهمة سأعطيك بعض الذهب، حيث تستطيع إستخدامه بشكل جيد الأن.'
		),

		'10' => array(
			'Title' => 'انه اوامر البناء فورا',
			'Description' => 'أسفل الصفحة تحت صورة القرية تشاهد قائمة التشييد وهي تحتوي على أوامر البناء التي أعطيتها منذ قليل. يمكنك تسريع تشييد هذه المباني بنفسك. قم بإستخدام بعض من الذهب الذي حصلت عليه للتو بالضغط علىعبارة "إنهاء أوامر البناء فورا".',
			'toDo' => array('إنه أوامر البناء فورا'),
			'reward' => '<img src="img/x.gif" alt="ذهب" title="ذهب" class="gold"> 10',

			'completed' => 'تستطيع الأن إرسال بطلك في مغامرة. قم أولا بإعطاء أوامر البناء لبعض حقول الموارد في قريتك لتضمن استمراري تطورها. خذ هذا الذهب وأنفقه بحكمة!'
		),

		'11' => array(
			'Title' => 'إذهب للمغامرة',
			'Description' => 'قم باكتشاف المجهول في محيط قريتك، زد خبرة بطلك وإكسب الغنائم القيمة. إفتح قائمة المغامرات وأرسل بطلك في مغامرته الأولى.',
			'toDo' => array('أرسل بطلك في مغامرته الأولى'),
			'reward' => 'لقد وصل بطلك للتو إلي مكان مغامرته',

			'completed' => 'جيد جدا، لقد ذهب بطلك في مغامرته - ماذا وجد؟ تحت صورة بطلك تستطيع رؤية أنه على الطريق. سأدعه يصل بسرعة لنر ما الذي سيحصل.'
		),

		'12' => array(
			'Title' => 'تقارير',
			'Description' => 'بطلك في طريق عودته إلي القرية من مغامرته الأولى. في قائمة تقارير(الدائرة الخامسة من اليمين) تجد تقارير القتال والتجارة والتعزيز. إفتح تقرير مغامرة البطل وإقرأه لتعرف تفاصيل ما وجد بطلك.',
			'toDo' => array('إفتح قائمة التقارير','إقرأ تقرير المغامرة الجديد'),
			'reward' => '<img src="img/x.gif" class="reportInfo itemCategory itemCategory_ointment"> 10',

			'completed' => 'تستطيع أن ترى نوع المكافأة التي حصل عليها البطل في استعراض صفحة البطل. ما الذي حصلت عليه؟ في الواقع، لقد تأذي بطلك قليلا - وقد أهديتك بعض مراهم الشفاء لتعالج أذيته.'
		),

		'13' => array(
			'Title' => 'معالجة البطل',
			'Description' => 'لقد أصيب بطلك بشكل طفيف. إفتح ملف البطل بالضغط على صورة البطل على يمين الشاشة، إضغط الأن على صورة مرهم الشفاء لإستخدامه؛ سيظهر لك مربع حوار صغير يسئلك هل تريد حقا إستخدام مرهم الشفاء؟" إضغط على كلمة "نعم" الموجودة فى الزر الأخضر. سيتم إستخدام العدد الازم فقط من مرهم الشفاء الذي يلزم لمعالجة بطلك.',
			'toDo' => array('إضغط على صورة البطل أعلى يمين الصفحة لتفتح قائمة الجرد','إضغط على مرهم الشفاء في قائمة الجرد لتستطيع إستخدامه'),
			'reward' => 'لقد حصل بطلك على '.number_format(20*SPEED).' نقطة خبرة زيادة',

			'completed' => 'بهذه الطريقة يمكنك إستخدام كل ما يجلبه البطل من مغامراته أو تشتريه في المزاد. بمجرد الضغط عليه يستخدمه بطلك أو يستهلكه. لمزيد من المعلومات إقرا رجاء وصف الأشياء في صفحة البطل.'
		),

		'14' => array(
			'Title' => 'واجهة المساعدة',
			'Description' => 'بجانب صورتي، تجد روابط لصفحة مساعدة إضافية بخصوص اللعبة. هناك تجد شروحات إضافية عن واجهة اللعبة وواجهة المستخدم. تحتاج منك للتجريب فقط!',
			'toDo' => array('إفتح مساعدة واجهة المستخدم وحاول أن تعرف المزيد عن الواجهة'),
			'reward' => '<i class="r1"></i> '.number_format(270*SPEED).' <i class="r2"></i> '.number_format(300*SPEED).' <i class="r3"></i> '.number_format(270*SPEED).' <i class="r4"></i> '.number_format(220*SPEED).'',

			'completed' => 'في حال كان لديك سؤال خاص حول اللعبة، يمكنك دوما التوجه إلي "أجوبة ترافيان" - وهناك ستحصل على الجواب، من أجل ذلك إضغط على "i" في أعلي هذه النافذة أو في الزاوية العليا للشاشة.'
		),

		'15' => array(
			'Title' => 'نهاية الدورة التدريبية',
			'Description' => 'الأن يمكننا القول أنك تملك المعلومات الأساسية المتعلقة باللعبة. المعلومات الهامة الخاصة بحماية المبتدئين أو الأحداث الخاصة التي تجدها في صندوق المعلومات إلي اليمين. استمتع بلعب ترافيان!',
			'toDo' => array(),
			'reward' => 'إنهاء الدورة التدريبية',

			'completed' => 'الأن يمكننا القول أنك تملك المعلومات الأساسية المتعلقة باللعبة. المعلومات الهامة الخاصة بحماية المبتدئين أو الأحداث الخاصة التي تجدها في صندوق المعلومات إلي اليمين. استمتع بلعب ترافيان!'
		),
		'15a' => array(
			'Title' => 'تخطي البرنامج التعليمي',
			'Description' => 'الآن أنت تعرف أساسيات اللعبة. سوف تظهر معلومات هامة مثل البيانات الحرجة لدعم الوافدين الجدد واللعبة في مربع المعلومات على اليسار. استمتع ترافيان!',
			'toDo' => array(),
			'reward' => 'نقطة التجمع 1, حفرة الطين, الحطاب مستوى 2, حقل القمح مستوى 2, 10 ذهب, 1.3 الأيام بلاس',

			'completed' => 'الأن يمكننا القول أنك تملك المعلومات الأساسية المتعلقة باللعبة. المعلومات الهامة الخاصة بحماية المبتدئين أو الأحداث الخاصة التي تجدها في صندوق المعلومات إلي اليمين. استمتع بلعب ترافيان!'
		),

);

$lang['quests']['battle'] = array(
	'1' => array(
		'Title' => 'المغامرة التالية',
		'Description' => 'خلال الدورة التدريبية، تحصل على بعض نقاط الخبرة من المغامرات. إبدأ مغامرتك التالية حالما يعود بطلك إلى القرية. تجميع الخبرة سيعطيك دفعة للنمو بسرعة.',
		'toDo' => array('الإنتقال للمغامرة التالية'),
		'reward' => ''.number_format(30*SPEED).' نقطة خبرة للبطل',

		'completed' => 'رائع، إن بطلك في طريقه إلي مغامرته الثانية. تذكر: كلما زادت الكفاءة القتالية لبطلك، يقل خطر تعرضه للإصابة أثناء المغامرات'
	),
	'2' => array(
		'Title' => 'بناء المخبأ',
		'Description' => 'قم ببناء مخبأ لحماية موارد القرية , هناك الكثير من اللاعبين يريدون مواردك! قم بتخبئة مواردك.',
		'toDo' => array('بناء مخبأ'),
		'reward' => '<i class="r1"></i> '.number_format(130*SPEED).' <i class="r2"></i> '.number_format(150*SPEED).' <i class="r3"></i> '.number_format(120*SPEED).' <i class="r4"></i> '.number_format(100*SPEED).'',

		'completed' => 'عظيم، لن يكون بمقدور الناهبين أن يسرقوا مواردك بالسهولة التي كانوا يتوقعونها. إفحص صندوق المعلومات لتعرف موعد إنتهاء حماية المبتدئين تماما.'
	),
	'3' => array(
		'Title' => 'بناء ثكنة',
		'Description' => 'في الثكنة يتم تدريب القوات , كلما إرتفع مستوى الثكنة قلت الفترة الزمنية لتدريب القوات.',
		'toDo' => array('بناء الثكنة'),
		'reward' => '<i class="r1"></i> '.number_format(110*SPEED).' <i class="r2"></i> '.number_format(140*SPEED).' <i class="r3"></i> '.number_format(160*SPEED).' <i class="r4"></i> '.number_format(30*SPEED).'',

		'completed' => 'لقد تم تشييد الثكنه! خطوة جيدة باتجاه السيادة!'
	),
	'4' => array(
		'Title' => 'إنهاء 5 مغامرات',
		'Description' => 'مغامرات أكثر غنائم أكثر , قم بإرسال بطلك للمغامرة كلما توفرت مغامرة , قم بإراحة البطل إذا كانت صحته متدنية أو إعطائة دهن شفاء.',
		'toDo' => array('إنهاء 5 مغامرات'),
		'reward' => '<img src="img/x.gif" title="دهن شفاء" class="questRewardTypeItem item106"> <span class="questRewardValue">150</span>',

		'completed' => 'مرهم يمكن استخدامها للشفاء البطل الخاص بك. إذا كنت تجهيز المراهم أنها سوف تستخدم في أقرب وقت البطل يأخذ الضرر.'
	),
	/*
	'15' => array(
		'Title' => 'مستوي البطل',
		'Description' => 'إضغط على صورة البطل وأظهر الميزات وقم بإضافة نقاط على الكفائة الحربية!',
		'toDo' => array('توزيع النقاط الخاصه بالبطل عند توفر نقاط جديدة'),
		'reward' => '<i class="r1"></i> '.number_format(190*SPEED).' <i class="r2"></i> '.number_format(250*SPEED).' <i class="r3"></i> '.number_format(150*SPEED).' <i class="r4"></i> '.number_format(110*SPEED).'',

		'completed' => 'يمكنك تغيير توزيع النقاط لكل فئة في أي وقت. كل ما تحتاجه لهذا هو كتاب الحكمة، والتي يمكن العثور عليها في مغامرات'
	),
	*/
	'5' => array(
		'Title' => 'تدريب القوات',
		'Description' => 'حان موعد تدريب أولى قواتك. يمكنك في الثكنة أن تدرب واحدا من وحدات المشاة الأن.',
		'toDo' => array('قم بتدريب إثنين من وحدات المشاة في الثكنة'),
		'reward' => '<img src="img/x.gif" title="قفص" class="questRewardTypeItem item114"> <span class="questRewardValue">1</span>',

		'completed' => 'لقد وضعت حجر الأساس لجيشك ا لجبار! تذكر دوما أنك معرض للهجوم من الخصوم حتي لو لم تكن أونلاين.'
	),
	'6' => array(
		'Title' => 'الحاجز',
		'Description' => 'عليك الأن أن تبني بعض الدفاعات. تزيد التحصينات من قوتك الدفاعية الأساسية وتزيد من قوة جنودك في الدفاع.',
		'toDo' => array('إبن التحصينات حول قريتك'),
		'reward' => '<i class="r1"></i> '.number_format(120*SPEED).' <i class="r2"></i> '.number_format(120*SPEED).' <i class="r3"></i> '.number_format(90*SPEED).' <i class="r4"></i> '.number_format(50*SPEED).'',

		'completed' => 'رائع، لقد أصبحت قريتك محمية الأن بشكل أفضل.'
	),
	'7' => array(
		'Title' => 'هاجم واحة',
		'Description' => 'إبحث عن واحة غير محتلة على الخارطة بالقرب من قريتك واهجم عليها لتنهبها. إذا كان فيها وحوش تدافع عنها، أرسل بطلك مع بعض الأقفاص لتأسر هذه ا لوحوش وتجلبهم ليدافعوا عن قريتك.',
		'toDo' => array('إفتح واحة غير محتلة على الخارطة وأهجم عليها'),
		'reward' => 'وحدتان من القوات الأساسية',

		'completed' => 'تهانينا، هجومك الأول على الطريق! تستطيع إلغاء الهجوم في نقطة التجمع خلال الـ 90 ثانية الأولى فقط.'
	),
	'8' => array(
		'Title' => 'عشرة مغامرات',
		'Description' => 'إستمر في إرسال بطلك في المغامرات. بعد أن يخوض بطلك عشرة مغامرات، ستتمكن من دخول المزادات والمتاجرة بأدوات البطل مع بقية الاعبين.',
		'toDo' => array('خض عشرة مغامرات'),
		'reward' => '500 فضة',

		'completed' => 'تهانينا، تستطيع الأن الدخول فى المزادات. خذ مني هذه الفضة، وبهذا سيكون لديك بعض المال لشراء بعض الأدوات.'
	),
	'9' => array(
		'Title' => 'مزادات',
		'Description' => 'على يسار صورة بطلك تجد صورة مطرقة صغيرة لو ضغطت عليها تأخذك إلي قاعة المزادات؛ أنظر أي الأدوات تعرض هناك وبأي سعر! لعلك ترغي في بيع ما لا تحتاجه من مغانم البطل فتكسب بعض الفضة؟',
		'toDo' => array('إعرض شيئا ما أو شارك في أحد المزادات'),
		'reward' => '<i class="r1"></i> '.number_format(280*SPEED).' <i class="r2"></i> '.number_format(120*SPEED).' <i class="r3"></i> '.number_format(220*SPEED).' <i class="r4"></i> '.number_format(110*SPEED).'',

		'completed' => 'ممتاز، أنت تعرف الأن كيف تتاجر بأدوات البطل المختلفة في المزادات.'
	),
	'10' => array(
		'Title' => 'تطوير الثكنه',
		'Description' => 'لقد قمت بتشييد الثكنه، ولكن الأن يجب تطويرها لمستوي أعلي حتي تستطيع البحث عن وحدات أقوي، قم بتطوير الثكنه للمستوي 3',
		'toDo' => array('قم بتطوير الثكنه إلى المستوي 3'),
		'reward' => '<i class="r1"></i> '.number_format(240*SPEED).' <i class="r2"></i> '.number_format(290*SPEED).' <i class="r3"></i> '.number_format(430*SPEED).' <i class="r4"></i> '.number_format(240*SPEED).'',

		'completed' => 'جيد، تستطيع الأن تدريب ثواتك بشكل أسرع قليلا، إضافة إلى أنك تستطيع بناء الأكاديمية.'
	),
	'11' => array(
		'Title' => 'قم بتشييد الأكاديمية',
		'Description' => 'تستطيع عمل بحث لأنواع جديدة وقوية من القوات في الأكاديمية. بعض هذه الوحدات مكلف جدا، وبعضها يحتاج لبعض الشروط الخاصة قبل أن تتمكن من عمل بحث له!',
		'toDo' => array('قم بتشييد الأكاديمية الأن'),
		'reward' => '<i class="r1"></i> '.number_format(210*SPEED).' <i class="r2"></i> '.number_format(170*SPEED).' <i class="r3"></i> '.number_format(245*SPEED).' <i class="r4"></i> '.number_format(115*SPEED).'',

		'completed' => 'ممتاز. ستعرف المزيد عن وحدات قبيلتك قريبا.'
	),
	'12' => array(
		'Title' => 'البحث في الأكاديمية',
		'Description' => 'دقق في شروط البحث الأن جيدا. هناك مشاة وفرسان ووحدات حصار وتدمير. الوحدات القتالية موزعه بشكل عام في مجموعتين رئيسيتين: قوات دفاعية وقوات هجومية.',
		'toDo' => array('قم بالبحث عن أنواع أخري من الوحدات'),
		'reward' => '<i class="r1"></i> '.number_format(450*SPEED).' <i class="r2"></i> '.number_format(435*SPEED).' <i class="r3"></i> '.number_format(515*SPEED).' <i class="r4"></i> '.number_format(550*SPEED).'',

		'completed' => 'البحث عن وحدة واحده لا يكفي بالطبع؛ عليك أن تقوم بتدريب القوات الجديدة أيضا!'
	),
	'13' => array(
		'Title' => 'قم بتشييد أفران صهر الحديد',
		'Description' => 'في أفران صهر الحديد يتم تدريع وحداتك القتالية وتسليحها بشكل أفضل. عدا عن أن المبني بحد ذاته ضروري لإتاحة الفرصة لك لتشييد مبان عسكرية أخري.',
		'toDo' => array('قم بتشييد أفران صهر الحديد'),
		'reward' => '<i class="r1"></i> '.number_format(500*SPEED).' <i class="r2"></i> '.number_format(400*SPEED).' <i class="r3"></i> '.number_format(700*SPEED).' <i class="r4"></i> '.number_format(400*SPEED).'',

		'completed' => 'رائع. يمكنك الأن تقوية دروع وأسلحة وحداتك القتالية!'
	),
	'14' => array(
		'Title' => 'تحسين القوات',
		'Description' => 'إن تحسين القوات أمر مكلف جدا. كلما امتلكت وحدات قتالية أكثر، كانت مسألة تحسين القوات مجدية أكثر. في هذه الحال ستكون الفائدة عليك أضعاف التكلفة!',
		'toDo' => array('قم بتشييد أفران صهر الحديد'),
		'reward' => '<img src="img/x.gif" title="ضمادة" class="questRewardTypeItem item112"> <span class="questRewardValue">10</span>',

		'completed' => 'ممتاز، إن قدرة وحداتك القتالية على الدفاع والهجوم قد تحسنت الأن!'
	),
);

$lang['quests']['economy'] = array(
	'1' => array(
		'Title' => 'منجم حديد',
		'Description' => 'أعط أمر البناء لمنجم الحديد! هدفك الأولي هو إنتاجية عالية للموارد وبذا تستطيع توسيع إمبراطوريتك بسرعة.',
		'toDo' => array('أبدا بتشييد منجم الحديد'),
		'reward' => 'زيادة إنتاج بمقدار 25% على كل الموارد لمدة يوم واحد',

		'completed' => 'إنتاجية حديد أعلي لقريتك. ستساعدك الزيادة على الإنتاج بزيادة مواردك مهما كان مستوي حقول الموارد منخفضا.'
	),
	'2' => array(
		'Title' => 'موارد زيادة',
		'Description' => 'قم بتطوير حقل خشب، حقل حديد، حقل طين وحقل قمح؛ كلا للمستوي 1. تذكر أنه طالما كان "ترافيان بلاس" فعالا فبوسعك تطويرحقلين اثنيين في نفس الوقت.',
		'toDo' => array('قم بتطوير حقل إضافي من كل مورد إلي المستوي 1'),
		'reward' => '<i class="r1"></i> '.number_format(160*SPEED).' <i class="r2"></i> '.number_format(190*SPEED).' <i class="r3"></i> '.number_format(150*SPEED).' <i class="r4"></i> '.number_format(70*SPEED).'',

		'completed' => 'مبروك، قريتك تنمو وتزدهر بشكل كبير.'
	),
	'3' => array(
		'Title' => 'مخزن الحبوب',
		'Description' => 'لتتمكن من تخزين المزيد من القمح، تحتاج لمخزن حبوب. تستطيع معرفة المقدرة التخزينية لمخزن الحبوب الحالي بالنظر إلي شريط الموارد.',
		'toDo' => array('قد بتشييد مخزن حبوب'),
		'reward' => '<i class="r1"></i> '.number_format(250*SPEED).' <i class="r2"></i> '.number_format(290*SPEED).' <i class="r3"></i> '.number_format(100*SPEED).' <i class="r4"></i> '.number_format(130*SPEED).'',

		'completed' => 'عمل جيد! يستطيع مخزن الحبوب الأن استيعاب المزيد من القمح.'
	),
	'4' => array(
		'Title' => 'الكل دفعة واحدة',
		'Description' => 'لابد في البداية من التركيز على الموارد. قم رجاء بتطوير كل حقول الموارد لديك إلى المستوي 1.',
		'toDo' => array('قم رجاء بتطوير كل حقول الموارد لديك إلى المستوي 1'),
		'reward' => '<i class="r1"></i> '.number_format(400*SPEED).' <i class="r2"></i> '.number_format(460*SPEED).' <i class="r3"></i> '.number_format(330*SPEED).' <i class="r4"></i> '.number_format(270*SPEED).'',

		'completed' => 'تزداد إنتاجية قريتك من الموارد باطراد. قريبا سنبدأ بتشييد مبان أخرى في قريتك.'
	),
	'5' => array(
		'Title' => 'للمستوي 2!',
		'Description' => 'تابع رفع إنتاجية قريتك من الموارد. قم رجاء بتطوير حقل واحد من كل نوع للمستوي 2.',
		'toDo' => array('قم بتطوير حقل واحد من كل نوع للمستوي 2'),
		'reward' => '<i class="r1"></i> '.number_format(240*SPEED).' <i class="r2"></i> '.number_format(255*SPEED).' <i class="r3"></i> '.number_format(190*SPEED).' <i class="r4"></i> '.number_format(160*SPEED).'',

		'completed' => 'عمل جيد! إذا احتجت المزيد من المعلومات حول إنتاجي قريتك، اضغط على مستوي المخزن عندك.'
	),
	'6' => array(
		'Title' => 'السوق',
		'Description' => 'قد تواجه أحيانا نقصا في أحد الموارد لتشييد مبني ما، في هذه الحالة تستطيع مبادلة الفائض من الموارد الأخرى في السوق مع لاعبين أخرين مقابل هذا المورد. من أجل تشييد السوق، فإنك تحتاج أن ترفع مستوي المبني الرئيسي قليلا.',
		'toDo' => array('قد بتشييد السوق'),
		'reward' => '<i class="r1"></i> '.number_format(600*SPEED).'',

		'completed' => 'السوق جاهز في قريتك وتستطيع بيع وشراء الموارد فيه مع بقية الاعبين في السيرفر. لكن حذار من الوقوع في شرك العروض السيئة التي تستغل حاجتك للموارد!'
	),
	'7' => array(
		'Title' => 'تجارة',
		'Description' => 'تستطيع تصفح العروض الموجودة في السوق عن طريق الضغط على كلمة "شراء". قم بفحص "المدة" الازمة لانتقال التجار إليك ونسبة التبادل قبل الشراء. في حال لم تجد عرضا مغريا يلبي حاجاتك، إذهب إلي "بيع" وقم بإنشاء عرضك الخاص لهذا المورد.',
		'toDo' => array('قم بإنشاء عرض بيع مورد في السوق أو قم بقبول أحد عروض الاعبين'),
		'reward' => '<i class="r1"></i> '.number_format(100*SPEED).' <i class="r2"></i> '.number_format(99*SPEED).' <i class="r3"></i> '.number_format(99*SPEED).' <i class="r4"></i> '.number_format(99*SPEED).'',

		'completed' => 'جميل، لقد كانت هذه أولي خطواتك في عالم تجارة الموارد في ترافيان.'
	),
	'8' => array(
		'Title' => 'الكل للمستوي 2',
		'Description' => 'قبل أن نقوم بتشييد أبنية تستهلك الكثير من الموارد، ينبغي علينا رفع إنتاج قريتك من الموارد. قم رجاء بتطوير كل حقول الموارد لديك إلى المستوي 2.',
		'toDo' => array('قم رجاء بتطوير كل حقول الموارد لديك إلى المستوى 2'),
		'reward' => '<i class="r1"></i> '.number_format(400*SPEED).' <i class="r2"></i> '.number_format(400*SPEED).' <i class="r3"></i> '.number_format(400*SPEED).' <i class="r4"></i> '.number_format(200*SPEED).'',

		'completed' => 'ممتاز! إنتاجية قريتك من الموارد تزداد باطراد.'
	),
	'9' => array(
		'Title' => 'مخزن مستوى 3',
		'Description' => 'إنه الوقت لتحسين سعة استيعاب مخازن للموارد مقابل زيادة إنتاجية قريتك منها. قد يأتيك بطلك أحيانا ببعض الموارد غير المتوقع وصولها من إحدي مغامراته، وفي حال لم تكن سعة مخازنك كافية تضيع عليك هذه الموارد.',
		'toDo' => array('قم بترقية المخزن للمستوى 3'),
		'reward' => '<i class="r1"></i> '.number_format(620*SPEED).' <i class="r2"></i> '.number_format(730*SPEED).' <i class="r3"></i> '.number_format(560*SPEED).' <i class="r4"></i> '.number_format(230*SPEED).'',

		'completed' => 'جيد جدا، هكذا لن تهدر الموارد القيمة.'
	),
	'10' => array(
		'Title' => 'مخزن حبوب مستوى 3',
		'Description' => 'كلما ازدادت إنتاجية قريتك من الموارد، تمتلىء المخازن بسرعة أكبر. لذلك يتوجب عليك أن ترفع مستوى مخازن الحبوب أيضا.',
		'toDo' => array('قم بترقية مخزن الحبوب للمستوى 3'),
		'reward' => '<i class="r1"></i> '.number_format(880*SPEED).' <i class="r2"></i> '.number_format(1020*SPEED).' <i class="r3"></i> '.number_format(590*SPEED).' <i class="r4"></i> '.number_format(320*SPEED).'',

		'completed' => 'الأن هناك المزيد من المتسع لديك فى المخازن، حيث يمكن تخزين الموارد في غيابك أيضا.'
	),
	'11' => array(
		'Title' => 'المطاحن',
		'Description' => 'تحسن المطاحن إنتاجية كل حقول القمح في قريتك فتزيدها. وحتي تكون الزيادة واضحة ومؤثرة، يجب رفع مستويات حقول القمح أولا.',
		//'toDo' => array('قم بتطوير حقل قمح واحد للمستوي 5','قم بتشييد المطاحن للمستوى 1'),
		'toDo' => array('قم بتشييد المطاحن للمستوى 1'),
		'reward' => 'المطاحن المستوى 2',

		'completed' => 'الأن لديك المزيد من القمح الاستراتيجي لتشييد المزيد من المباني. هناك أيضا بعض المباني التي تزيد إنتاجية قريتك من الموارد الأخرى.'
	),
	'12' => array(
		'Title' => 'الكل للمستوى 5',
		'Description' => 'من أجل تجنب وقت انتظار طويل لتشييد المباني وتدريب المستوطنين الازمين لفتح قرية ثانية، أنت بحاجة لإنتاجية موارد أعلى بكثير من هذه التي تملكها الأن. قم رجاء برفع كل حقول الموارد للمستوى 5 في القرية.',
		'toDo' => array('قم رجاء برفع كل حقول الموارد للمستوى 5 في القرية'),
		'reward' => 'زياده انتاج كل المواد 25% لمده يوم واحد',

		'completed' => 'ممتاز! لديك إنتاج قوي سيساعدك على استخراج المستوطنين.'
	),
);
$lang['quests']['world'] = array(
	'1' => array(
		'Title' => 'إستعراض الإحصائيات',
		'Description' => 'في عالم ترافيان، تنافس الاف الاعبين الأخرين. استعرض الإحصائيات، لتعرف ترتيبك بين هؤلاء.',
		'toDo' => array('إفتح الإحصائيات وقارن نفسك بباقي الاعبين'),
		'reward' => '<i class="r1"></i> '.number_format(90*SPEED).' <i class="r2"></i> '.number_format(120*SPEED).' <i class="r3"></i> '.number_format(60*SPEED).' <i class="r4"></i> '.number_format(30*SPEED).'',

		'completed' => 'إضافة إلى ترتيب الاعبين من حيث السكان، هناك معلومات أخري مفيد، إذا فتحت "أفضل 10" تجد على سبيل المثال لا الحصر أقوي المهاجمين وأنجح الناهبين.'
	),
	'2' => array(
		'Title' => 'تغيير إسم القرية',
		'Description' => 'باختيارك إسما جميلا لقريتك، تعطي الإنطباع أمام بقية الاعبين أنك تدير إمبراطوريتك بنفسك وتهتم بها كما لو كانت جزءا منك.',
		'toDo' => array('قم بتغيير إسم القرية بالنقر مرتين على إشارة القرية على يمين وأعلى الشاشة'),
		'reward' => '100 نقطة حضارية',

		'completed' => 'جميل، لقد خطوت أولى خطواتك باتجاه ترك بصمتك في عالم ترافيان.'
	),
	'3' => array(
		'Title' => 'المبنى الرئيسي المستوي 3',
		'Description' => 'لنتمكن من تشييد بعض الأبنية، تحتاج لمستوى مبنى رئيسي أعلي؛ عدا أن مهندسي القرية سيتمكنون من إنجاز أعمالهم بسرعة أكبر كلما تم رفع مستوى المبنى الرئيسي أكثر. لكن الأمر الذي يتوجب عليك ألا تنساه: كل شيء يحتاج لموارد!',
		'toDo' => array('قم بترقية المبنى الرئيسي للمستوي 3'),
		'reward' => '<i class="r1"></i> '.number_format(170*SPEED).' <i class="r2"></i> '.number_format(100*SPEED).' <i class="r3"></i> '.number_format(130*SPEED).' <i class="r4"></i> '.number_format(70*SPEED).'',

		'completed' => 'عظيم، بترقيتك للمبنى الرئيسي تستطيع رؤية بعض الأبنية الجديدة التي يمكنك تشييدها الأن.'
	),
	'4' => array(
		'Title' => 'إبن سفارة',
		'Description' => 'ترافيان عالم خطير، عليك أن تكون قادرا فيه على الدفاع عن نفسك. في المقابل هناك بعض الميزات الرائعة، حيث يمكنك بناء الصداقات والتحالفات. قم بتشييد سفارة لتتمكن من إنشاء أو الإنضمام إلى تحالف في محيطك.',
		'toDo' => array('إبن سفارة'),
		'reward' => '<i class="r1"></i> '.number_format(215*SPEED).' <i class="r2"></i> '.number_format(145*SPEED).' <i class="r3"></i> '.number_format(195*SPEED).' <i class="r4"></i> '.number_format(50*SPEED).'',

		'completed' => 'ممتاز، يمكنك الأن قبول دعوات التحالفات المرسلة لك. تستطيع إيجاد هذه الدعوات في السفارة (إن كانت فعلا مرسلة لك).'
	),
	'5' => array(
		'Title' => 'إفتح الخارطة',
		'Description' => 'تريك الخارطة عالم ترافيان المحيط بك. تفحص جيرانك حولك؛ إبحث عن تحالفات متحملة، ولربما خصوم متوقعين!',
		'toDo' => array('إفتح الخارطة (الدائرة الثالثه من اليمين)'),
		'reward' => '<i class="r1"></i> '.number_format(90*SPEED).' <i class="r2"></i> '.number_format(160*SPEED).' <i class="r3"></i> '.number_format(90*SPEED).' <i class="r4"></i> '.number_format(95*SPEED).'',

		'completed' => 'هل وجدت بجوارك تحالفات أو لاعبين أقوياء؟ تتيح لك الخارطة أيضا إيجاد واحات وأودية تستطيع الإستيطان فيها وبناء قريتك الثانية لتوسيع إمبراطوريتك.'
	),
	'6' => array(
		'Title' => 'إقرا الرسالة',
		'Description' => 'قد أرسلت لك للتو رسالة، فيها الكثير من النصائح المفيدة. تستطيع تمييز الرسائل غير المقرووءة بوجود رقم يشير لعددها فوق بوابة الرسائل (الدائرة الأولى من اليسار).',
		'toDo' => array('إفتح بوابة الرسائل وإقرأ رسالة مدير المهمات!'),
		'reward' => '<i class="r1"></i> '.number_format(280*SPEED).' <i class="r2"></i> '.number_format(315*SPEED).' <i class="r3"></i> '.number_format(200*SPEED).' <i class="r4"></i> '.number_format(145*SPEED).'',

		'completed' => 'إستخدم الرسائل للتواصل مع بقية الاعبين. خذها مني نصيحة، أظهر أصالة نفسك وطيب معدنك حتىلو كنت في حرب: إدفع بالتي هي أحسن، فإذا الذي بينك وبينه عداوة كأنه ولي حميم.'
	),
	'7' => array(
		'Title' => 'ذهب مكافأة',
		'Description' => 'أثناء تنفيذك لأوامر مدير المهام، تستخدم الذهب لتسريع إنجاز عمليات تشييد الأبنية. تحت صفحة بلاس (أعلى  ومنتصف الشاشة) تستطيع التعرف على المزيد من الميزات التي يعطيك لها الذهب.',
		'toDo' => array('تعرف بنفسك على المزايا التي يمنحك لها الذهب'),
		'reward' => '<img src="img/x.gif" title="ذهب" class="gold"> 20',

		'completed' => 'لتتمكن من التمتع ببعض مزايا الذهب، سأمنحك الأن بعض الذهب لتنفقه وتستفيد منه كيفما تشاء.'
	),
	'8' => array(
		'Title' => 'تحالف',
		'Description' => 'إبحث عن التحالفات واطلب الإنضمام لأحدها. إن لم يكن عندك أي تواصل مع أعضاء هذه التحالفات، إبحث في تحالفات الاعبين بجوارك، أو تواصل مع بقية الاعبين في سيرفرك. حل أخير: إرفع السفارة للمستوي 3 وأنشا تحالفك الخاص وأدع بقية الاعبين إليه.',
		'toDo' => array('إنضم لأحد التحالفات'),
		'reward' => '<i class="r1"></i> '.number_format(295*SPEED).' <i class="r2"></i> '.number_format(210*SPEED).' <i class="r3"></i> '.number_format(235*SPEED).' <i class="r4"></i> '.number_format(185*SPEED).'',

		'completed' => 'نرجو أن تكون هذه بداية موفقة لنا جميعا. كلما كنت أكثر نشاطا  ستكون أكثر قوة، وسيقوي بك تحالفك أيضا. هل تعرف كيف تمرر للأخرين تقارير هجماتك؟ هل تعرف كيف تطلب التعزيز والمساندة من تحالفك؟'
	),
	'9' => array(
		'Title' => 'المبنى الرئيسي للمستوي 5',
		'Description' => 'حان الوقت لتقوم بتطوير المبنى الرئيسي في قريتك، بحيث  تفتح لك الأفاق لتشييد مبان جديدة فيها. رجاء إنتبه دوما لإنتاجية قريتك من الموارد أثناء التطوير.',
		'toDo' => array('قم بتطوير المبنى الرئيسي للمستوي 5'),
		'reward' => '<i class="r1"></i> '.number_format(570*SPEED).' <i class="r2"></i> '.number_format(470*SPEED).' <i class="r3"></i> '.number_format(560*SPEED).' <i class="r4"></i> '.number_format(265*SPEED).'',

		'completed' => 'عظيم، عند المبني الرئيسي مستوي 5 يمكنك بناء السكن. لقد تحسن أيضا أداء وسرعة مهندسي قريتك ليقوموا بهذا العمل بسرعة أفضل'
	),
	'10' => array(
		'Title' => 'مقر الإمبراطور',
		'Description' => 'قم بتشييد مقر للإمبراطور، بحيث تتمكن قريبا من التوسع وتقوم ببناء قريتك الثانية. إن لم تكن متأكدا من أن هذه القرية ستبقى عاصمتك دوما، لا بأس أن تبني السكن هنا؛ لكني أنصحك أن تبني القصر لتتمكن من استخراج 9 مستوطنين بدل 6 وبعدا تقوم بنقل العاصمة.',
		'toDo' => array('قم بتشييد سكن أو قصر'),
		'reward' => '<i class="r1"></i> '.number_format(525*SPEED).' <i class="r2"></i> '.number_format(420*SPEED).' <i class="r3"></i> '.number_format(620*SPEED).' <i class="r4"></i> '.number_format(335*SPEED).'',

		'completed' => 'من أجل التوسع وبناء أو احتلال قرية جديدة، تحتاج حتما لهذا المبنى. يمكنك السكن من التوسع في قريتين جديدتين: عند المستوى 10 والمستوى 20 فقط، بينما في القصر في ثلاث عند المستويات 10، 15 و 20.'
	),
	'11' => array(
		'Title' => 'نقاط حضارية',
		'Description' => 'لتتمكن من ضم قري جديدة لإمبراطوريتك، تحتاج للنقاط الحضارية.<br>تستطيع استعراض رصيدك من النقاط الحضارية: ما يلزمك لضم قرية جديدة وما بحوزتك منها تحت التصنيف "النقاط الحضارية" في السكن وفي القصر.',
		'toDo' => array('إفتح تصنيف "النقاط الحضارية" في السكن/القصر'),
		'reward' => '<i class="r1"></i> '.number_format(650*SPEED).' <i class="r2"></i> '.number_format(800*SPEED).' <i class="r3"></i> '.number_format(740*SPEED).' <i class="r4"></i> '.number_format(530*SPEED).'',

		'completed' => 'تحت صورة بطلك، تجد كلمة "القري" إن ضغطت عليها تفتح معك "خريطة القرى" وفيها نظرة عامة عن قراك وما فيها من موارد وقوات ونقاط حضارية (ميزة خاصة بترافيان بلاس فقط) وهناك تجد إن كان بإمكانك فتح قرية جديدة أو لا.'
	),
	'12' => array(
		'Title' => 'مخزن مستوى 7',
		'Description' => 'لتتمكن من ضم قري جديدة لإمبراطوريتك، تحتاج للنقاط قم بتطوير مخزن الموارد الخام في قريتك من أجل التحضير لتدريب المستوطنين والإستيطان. قريبا لن تكون سعة المخزن الحالية كافية للإيفاء بتطلبات التوسع، فحضر نفسك من الأن.',
		'toDo' => array('المخزن للمستوى 7'),
		'reward' => '<i class="r1"></i> '.number_format(2650*SPEED).' <i class="r2"></i> '.number_format(2150*SPEED).' <i class="r3"></i> '.number_format(1810*SPEED).' <i class="r4"></i> '.number_format(1320*SPEED).'',

		'completed' => 'رائع، إن سعة المخازن لديك ستكفيك لبعض الوقت الأن على طريق تطوير قريتك. لا تنس: الموارد سلعة قيمة في اللعبة قم دوما بحمايتها أو إخفائها عن عيون الخصوم!'
	),
	// Need to code 
	/*'13' => array(
		'Title' => 'تقارير القري المجاورة',
		'Description' => 'تقارير القري المحيطة تفيدك في معرفة أهم الأحداث والتغيرات الحاصلة على عضويات جيرانك.',
		'toDo' => array('إضغط على تصنيف "التقارير" وهي خامس دائرة من اليمين، وهناك إضغط على قائمة "القري المجاورة" لتقرأ تقاريرها'),
		'reward' => '<i class="r1"></i> '.number_format(800*SPEED).' <i class="r2"></i> '.number_format(700*SPEED).' <i class="r3"></i> '.number_format(750*SPEED).' <i class="r4"></i> '.number_format(600*SPEED).'',

		'completed' => 'تفاصيل عديدة: من تغيير الإسم إلى تقارير النهب، الإحتلالات ... كل ذلك يمكنك إيجاده في تقارير القري المجاورة. أمل أنك استمتعت واستفدت من قرائتها!'
	),*/
	'13' => array(
		'Title' => 'السكن أو القصر إلى المستوى 10',
		'Description' => 'يمكنك تدريب المستوطنين في السكن أو القصر. أدخل السكن/القصر، إختر قائمة "التدريب" وهناك ستجد رسالة تخبرك بمستوى البناء الذي يلزمك لتستطيع تدريب المستوطنين.',
		'toDo' => array('قم بتطوير السكن أو القصر إلى المستوى 10'),
		'reward' => '500 نقاط حضارية',

		'completed' => 'من كل قري يمكنك التوسع في قريتين إلى ثلاث قري بحسيما تبنيه؛ سكن أم قصر. كل ما يلزمك الأن للحصول على قريتك الثانية: ثلاثة مستوطنين والكثير من النقاط الحضارية!'
	),
	'14' => array(
		'Title' => 'قم بتدريب ثلاثة مستوطنين',
		'Description' => 'لتأسيس قرية جديدة يجب على المستوطنين الثلاثة أن ينطلقوا معا. لذلك عليك حماية هؤلاء من هجمات الخصوم أثناء وجودهم في القرية؛ وإرسالهم بأسرع وقت ممكن حالما تتهيأ الظروف لذلك.',
		'toDo' => array('قم بتدريب ثلاثة مستوطنين'),
		'reward' => '<i class="r1"></i> '.number_format(1050*SPEED).' <i class="r2"></i> '.number_format(800*SPEED).' <i class="r3"></i> '.number_format(900*SPEED).' <i class="r4"></i> '.number_format(750*SPEED).'',

		'completed' => 'جميل، يحمل المستوطنون بعض الموارد معهم ليمكنوا من وضع حجر أساس القرية الجديدة. حاول توفير ذلك لهم!'
	),
	'15' => array(
		'Title' => 'أسس قرية جديدة',
		'Description' => 'إفتح الخارطة وابحث عن بقعة مناسبة لتؤسس فيها قريتك الثانية.<br>الخيارات أمامك كثيرة؛ تريدها بجانب قريتك الأساسية، أم غنية بنوع معين من الموارد (قرية قمحية مثلا) أم تريدها مطلة على الكثير من الواحات .... أم تجمع كل هذه المواصفات؟ عليك بالبحث لتجد طلبك!',
		'toDo' => array('أسس قرية جديدة بإرسال المستوطنين الثلاثة'),
		'reward' => 'ترافيان بلاس 48 ساعة',

		'completed' => 'عمل رائع، سأعطيك يومين أخرين في ترافيان بلاس - عبر هذين اليومين ستتمكن من الوقوف جيدا على قدميك.'
	),
);

$lang['quests']['achievements'] = array(
	'1' => array(
		'Title' => 'انهاء مغامرة',
		'Description' => 'أرسل بطلك في مغامرة. تعتبر هذه المهمّة منجزة حالما يصل بطلك إلى مكان مغامرته، حتى لو فشل في العودة إلى القرية. لإرسال البطل في مغامرة، اضغط فقط على الأيقونة الظاهرة على الصورة. النقاط التي يمكنك كسبها في هذه المهمّة هي 1 مرّات في اليوم.',
		'toDo' => 'هذه المهمة يمكنك تحقيقها 1 مرات في اليوم',
		'questIn' => array('questGive' => 5, 'Hard' => 'معتدلة', 'needReq' => 'مغامرة متاحة')
	),
	'2' => array(
		'Title' => 'نهب واحة غير مملوكة',
		'Description' => 'أرسل قواتك للنهب من واحة غير محتلّة. تعتبر هذه المهمّة منجَزة، حالما تصل قواتك للواحة بغض النظر عن نجاتهم في هذه المهمّة وعودتهم للقرية أو لا. استخدام الأقفاص في هذه المهمّة لتجنّب القتال وفقدان القوّات سيؤدي إلى عدم منحك لأي نقطة في هذه المهمّة. يمكنك استخدام محاكي المعركة قبل إرسال القوات لمعركة نتيجة تقريبية للمعركة. تجد محاكي المعركة في نقطة التجمّع في مركز القرية. النقاط التي يمكنك كسبها في هذه المهمّة هي 3 مرّات في اليوم.',
		'toDo' => 'هذه المهمة يمكنك تحقيقها 3 مرات في اليوم',
		'questIn' => array('questGive' => 3, 'Hard' => 'صعبة', 'needReq' => 'بعض القوات')
	),
	'3' => array(
		'Title' => 'نهب/مهاجمة قرية نتار',
		'Description' => 'أرسل قواتك لنهب /لمهاجمة قرية نتارية. تعتبر هذه المهمّة منجَزة، حالما تصل قواتك للقرية بغض النظر عن نجاتهم في هذه المهمّة وعودتهم لقريتك أو لا لا تحاول ابداً نهب/مهاجمة قرية أعجوبة العالم أو عاصمة النتار. من أجل مهاجمة قرية أعجوبة العالم ينبغي عليك حشر ما لا يقلّ عن 100 ألف مقاتل! النقاط التي يمكنك كسبها في هذه المهمّة هي 3 مرّات في اليوم.',
		'toDo' => 'هذه المهمة يمكنك تحقيقها 3 مرات في اليوم',
		'questIn' => array('questGive' => 9, 'Hard' => 'تحدي', 'needReq' => 'بعض القوات')
	),
	'4' => array(
		'Title' => 'فُز بمزاد',
		'Description' => 'شارك في مزاد وفُز مرتين بشراء الغرض الذي تريده وبذلك تستطيع جمع المزيد من النقاط التي يمكنك إضافتها لرصيدك اليومي! يتم منحك النقاط فقط حين تستطيع كسب المزاد وشراء الغرض النقاط التي يمكنك كسبها في هذه المهمّة هي 1 مرّات في اليوم.',
		'toDo' => 'تستحق هذه المهة + 5 نقطة',
		'questIn' => array('questGive' => 9, 'Hard' => 'تحدي', 'needReq' => 'إنهاء 10 مغامرات')
	),
	'5' => array(
		'Title' => 'اكسب أو أنفق الذهب',
		'Description' => 'قم بكسب او إنفاق الذهب لإكمال هذه المهمة , يمكنك إنهاء 3 مهمات كل يوم.',
		'toDo' => 'تستحق هذه المهة + 2 نقطة',
		'questIn' => array('questGive' => 6, 'Hard' => 'معتدلة', 'needReq' => 'ذهب')
	),
	'6' => array(
		'Title' => 'قم بتطوير مبنى',
		'Description' => 'قم بتطوير او بناء 3 مباني , يمكنك إنهاء 3 مهمات كل يوم<br><br>هذه المهمة يمكنك تحقيقها 3 مرات في اليوم.',
		'toDo' => 'تستحق هذه المهة + 4 نقطة',
		'questIn' => array('questGive' => 12, 'Hard' => 'معتدلة', 'needReq' => 'موارد')
	),
	'7' => array(
		'Title' => 'قم بتطوير حقل موارد',
		'Description' => 'قم بتطوير او بناء 3 حقول من الموارد , يمكنك إنهاء 3 مهمات كل يوم<br><br>هذه المهمة يمكنك تحقيقها 3 مرات في اليوم.',
		'toDo' => 'تستحق هذه المهة + 5 نقطة',
		'questIn' => array('questGive' => 15, 'Hard' => 'معتدلة', 'needReq' => 'موارد')
	),
	'8' => array(
		'Title' => 'تدريب 20 وحدة من نوع المشاة',
		'Description' => 'قم بتدريب 20 وحدة من نوع المشاة دفعة واحدة , يمكنك إنهاء 3 مهمات كل يوم.',
		'toDo' => 'تستحق هذه المهة + 4 نقطة',
		'questIn' => array('questGive' => 12, 'Hard' => 'معتدلة', 'needReq' => 'ثكنة + موارد')
	),
	'9' => array(
		'Title' => 'تدريب 20 وحدة من نوع الفرسان',
		'Description' => 'قم بتدريب 20 وحدة من نوع الفرسان دفعة واحدة , يمكنك إنهاء 3 مهمات كل يوم.',
		'toDo' => 'تستحق هذه المهة + 4 نقطة',
		'questIn' => array('questGive' => 12, 'Hard' => 'معتدلة', 'needReq' => 'إسطبل + موارد')
	),
	'10' => array(
		'Title' => 'قم بعمل احتفال كبير أو احتفال صغير',
		'Description' => 'قم بعمل احتفال كبير أو احتفال صغير في البلدية. سيتم احتساب النقاط حالما تقوم بتفعيل أي احتفال في قريتك. الاحتفالات الجارية حالياً في القرية لا تحسب لك ولا تمنحك أي نقاط. النقاط التي يمكنك كسبها في هذه المهمّة هي 3 مرّات في اليوم<br>سيتم منحك النقاط فور بدء احتفال.',
		'toDo' => 'تستحق هذه المهة + 5 نقطة',
		'questIn' => array('questGive' => 15, 'Hard' => 'صعبة', 'needReq' => 'بلدية + موارد')
	),
);

$lang['quests']['monitor'] = array(
	'1' => array('بدء البرنامج التعليمي'),
	'2' => array('إغلاق المهمة','عرض التلميحات','تعطيل التلميحات'),
	'3' => array('فتح منطقة الحطاب','بناء الحطاب'),
	'4' => array('فتح المبنى','الحطاب 2'),
	'5' => array('فتح منطقة القمح','بناء القمح'),
	'6' => array('إضغط على صورة البطل','تغيير الإنتاج'),
	'7' => array('أدخل مركز القرية'),
	'8' => array('انقر على مكان فارغ','بناء مستودع الخام'),
	'9' => array('أنقر على موقع مبنى نقطة التجمع','بناء نقطة التجمع للمستوى 1'),
	'10' => array('انهاء البناء'),
	'11' => array('مغامرات البطل'),
	'12' => array('قائمة التقارير','قراءة التقرير الخاص بالمغامرة'),
	'13' => array('مخزن البطل','شفاء البطل'),
	'14' => array('مساعدة واجهة المستخدم'),
	'15' => array('نهاية البرنامج التعليمي')
);


$lang['quests']['monitor']['battle'] = array(
	'01' => 'المغامرة التالية',
	'02' => 'بناء مخبأ',
	'03' => 'بناء ثكنة',
	'04' => 'إنهاء 5 مغامرات',
	/*'15' => 'مستوى البطل',*/
	'05' => 'تدريب القوات',
	'06' => 'بناء السور',
	'07' => 'مهاجمة واحة',
	'08' => '10 مغامرات',
	'09' => 'المزاد',
	'10' => 'ترقية الثكنة',
	'11' => 'بناء الأكاديمية',
	'12' => 'البحث عن قوات',
	'13' => 'بناء افران صهر الحديد',
	'14' => 'تحسين القوات'
);

$lang['quests']['monitor']['economy'] = array(
	'01' => 'منجم حديد',
	'02' => 'موارد إضافية',
	'03' => 'مخزن الحبوب',
	'04' => 'الكل دفعة واحدة',
	'05' => 'للمستوي 2',
	'06' => 'بناء السوق',
	'07' => 'تجارة',
	'08' => 'الكل للمستوي 2',
	'09' => 'المخزن المستوي 3',
	'10' => 'مخزن الحبوب المستوي 3',
	'11' => 'بناء المطاحن',
	'12' => 'الكل للمستوي 5'
);

$lang['quests']['monitor']['world'] = array(
	'01' => 'عرض الإحصائيات',
	'02' => 'تغيير إسم القرية',
	'03' => 'المبنى الرئيسي للمستوى 3',
	'04' => 'بناء سفارة',
	'05' => 'فتح الخارطة',
	'06' => 'قراءة الرسالة',
	'07' => 'مكافأة الذهب',
	'08' => 'تحالف',
	'09' => 'المبنى الرئيسي للمستوى 5',
	'10' => 'السكن او القصر',
	'11' => 'النقاط الحضارية',
	'12' => 'مستودع الخام للمستوى 7',
	//'13' => 'تقارير القرى المجاورة',
	'13' => 'السكن او القصر للمستوى 10',
	'14' => 'تدريب ثلاثة مستوطنين',
	'15' => 'قرية جديدة',
);

$lang['quests']['Main'] = array(
	'QuestsList' => 'قائمة المهام',
	'Quest' => 'بحث',
	'Reward' => 'مكافأتك',
);

$lang['main']['options'] = array(
	'1' => 'اللعبة',
	'2' => 'إعدادات اللغة',
	'3' => 'اللغة',
	'4' => 'الإنجليزية',
	'5' => 'العربية',
	'6' => 'حفظ',
);

$lang['statistics'] = array(
	'general01' => 'تقدم العالم الحالي',
	'general02' => '',
	'general03' => '',
	'general04' => '',
	'general05' => '',
	'general06' => '',
	'general07' => '',
	'general08' => '',
	'general09' => '',
	'general10' => '',
	
);

$lang['links'] = array(
	'Farms' => 'قائمة المزارع',
	'Support' => 'اتصل بالدعم',
);

$lang['Report'] = array(
	'Silver' => 'فضة',
);



$lang['Msgs'] = array(
	'wMSGT' => 'رسالة من صياد المخالفين',
	'wMSGI' => 'هناك جائزة رائعة في إنتظارك.<br><br>هذه الرسالة تم توليدها تلقائيا لا حاجة للرد عليها.',
	'Arts' => '<div style="width:450px; height:830px; padding: 95px 60px
	60px 25px; background:
	url(img/Natars_Banner_gross.jpg)
	no-repeat;">
			<center>
				<h1>التحف</h1>
				<p style="font-size:85%; text-align:justify; width:400px">
					لقد ظهرت التحف وحان الوقت للإستحواذ على التحف المفيدة , سارع للحصول على تحفة قبل خطفها
					<br><br><img src="img/msg.jpg" alt="Artefacts" width="400" height="200" style="float:
	right">
					<br><br>
	التحف قطع أثرية ثمينة ومفيدة , ولكل تحفة تـأثير مميز , إن اللاعبون يودون الحصول على التحف الأثمن والأغلى مثل تدريب القوات بوقت اسرع واستهلاك القمح , والبعض الأخر يفضل تـأثيرات اخرى , ماذا تريد انت ؟ هيا سارع لإمتلاك تحفة , ولا تنسى أن إمتلاك التحفة وحدة لا يكفي وإنما انت بحاجة لدعم من تحالفك للدفاع عنها , ف جهز نفسك جيداً !             </p><br><br>
	<span style="font-size:60%; color: #666;">(كتبت بواسطة : الصياد)</span>
	</center>
	</div>',

	'WW' => 'وقد مرت ايام لا تعد ولا تحصى منذ المعارك الاولى على جدران النتار , العديد من الجيوش تم تدميرها على جدران النتار , والأن بدأ الإنتشار ورائحة الموت في هذا العالم قد بدأت للتو ! إحرص على التجييش للمستقبل !
	<br><br>
	لقد وصلو الكشافة مع حكايات وقصص ومشاهد رهيبة تقشعر لها الأبدان , جيوش خيفه لا يمر أحد من طريقها الا وانتهت حياته , قوة كبيرة جداً قوة قاسية ولا ترحم , إنها تسحق آمل الناس , السباق قد بدأ جهز دفاعك وجيشك للمقاومة والهجوم لا تكن أخر من يعلم !
	<br><br>
	ظهرت مخططات البناء , مخططات البناء تستطيع بواسطتها أن ترفع مستوى المعجزة , قم بخطف التحف قبل أن يخطفها الخصم
	<br><br>
	عشرات الاف من الكشافة تجول على الجميع وتبحث عن أي شيئ ولكن الاماكن القوية لن تقدر على الوصول لها ! ومع ذلك المشاكل قد بدأت وظهرت الأسرار لهذه الإمبراطورية ! 
	<br><br>
	الان بداية النهاية , عندما تصطدم أقوى الجيوش في ساحات القتال في هذا العالم لتقرير مصير جميع الأطراف , السيف ضد السيف , وهذه هي الحرب التي سوف تتكرر عبر الأزمان , هذه هي حربكم , يحب عليك حفر إسمك عبر التاريخ , هنا يمكنك أن تصبح أسطورة ...
	<br><br>
	<span style="font-size:60%; color: #666;">(كتبت بواسطة : الصياد)</span>
	<br><br>
	<br><br>
	<b>المتطلبات</b><i> : لسرقة مخطط بناء يجب توفر هذه الشروط </i><br>
	<li>إرسال هجوم كامل على قرية المخطط  </li>
	<li>أن ينجح الهجوم على قرية المخطط</li>
	<li>أن تدمر الخزنة</li>
	<li>مشاركة البطل بالهجوم واجبة</li>
	<li>يجب أن يكون مستوى الخزنة 10 </li>
	<br><br>
	من ثم تحصل على التحفة إذا نجح  الهجوم ويتم إختطاف التحفة , يجب إختيار هدف المقاليع ( الخزنة )
	<br><br>
	للبناء يجب على صاحب المعجزة الحصول على مخطط بناء واحد حتى مستوى 49 يجب على لاعب اخر من التحالف إمتلاك مخطط بناء آخر للإستمرار في رفع المعجزة لمستوى 100 ',
	);

$lang['Footer'] = array(
	'Homepage' => 'الصفحة الرئيسية',
	'Forum' => 'المنتدى',
	'Links' => 'الروابط',
	'FAQ' => 'المساعدة , الإجوبة',
	'Terms' => 'الشروط',
	'Imprint' => 'حقوق'
);

$lang['admin'] = array();

$lang['Hero'] = array(
	'status01' => 'البطل في المغامرة',
	'status02' => 'البطل في طريق العودة',
	'status03' => 'البطل ميت',
	'status04' => 'البطل يدافع في القرية',
	'status05' => 'البطل حالياً في القرية',

	'adv00' => 'مغامرة جديدة',
	'adv01' => 'وقت المغامرة',
	'adv02' => 'الوصول في',
	'adv03' => 'عودة في',
	'adv04' => 'ساعة',
	'adv05' => 'إذهب للمغامرة',
	'adv06' => 'عودة',

	'Speed' => 'السرعة',
	'Attributes' => 'السمات',
	'saveChanges' => 'يرجى حفظ التغييرات',

	'FStrength' => 'الكفائة الحربية',
	'FHero' => 'form hero',

	'OW01' => 'الوقت المتبقي',
	'OW02' => 'في',
	'OW03' => 'يمكنك رؤية مجريات المغامرة',
	'OW04' => 'نقطة التجمع',

	'Revive01' => 'موطن البطل',
	'Revive02' => 'سيتم تجديدة في',
	'Revive03' => 'لتغيير موطن البطل او تجديدة في قرية أخرى',
	'Revive04' => 'تكلفة التجديد',
	'Revive05' => 'يتم تجديد البطل في',
	'Revive06' => 'الوقت المتبقي',
);


$lang['Daily'] = array(
	'01' => 'انهاء مغامرة',
	'02' => 'نهب واحة غير مملوكة',
	'03' => 'نهب/مهاجمة قرية نتار',
	'04' => 'فُز بمزاد',
	'05' => 'اكسب أو أنفق الذهب',
	'06' => 'قم بتطوير مبنى',
	'07' => 'قم بتطوير حقل موارد',
	'08' => 'تدريب 20 وحدة من نوع المشاة',
	'09' => 'تدريب 20 وحدة من نوع الفرسان',
	'10' => 'قم بعمل احتفال كبير أو احتفال صغير',
	
	'Close' => 'إغلاق',
	'Overview' => 'نظرة عامة',
	'PG' => 'النقاط الممنوحة في هذه المهمة:',
	'Difficulty' => 'الصعوبة',
	'Requirement' => 'المتطلبات',
	'CRewards' => 'جمع المكافآت',

	'Congrats01' => 'تهانينا! لقد قمت بتجميع نقاط كافية للحصول على مكافأة',
	'Congrats02' => 'كونك قمت بتجميع',
	'Congrats03' => 'نقاط/نقطة اليوم، تحصل على ما يلي',
	'Congrats04' => 'يتم تحديد المكافأة اليومية بشكل عشوائي من هذه الخيارات',
	'Congrats05' => 'عند جمع',
	'Congrats06' => 'نقطة، يمكنك تلقّي واحدة من المكافآت التالية',

);

define('markASRead', 'تحديد كمقروء');
define('rMessage', 'اكتب رسالة');
define('Ignored', 'اللاعبين المتجاهلين');
define('Ignored01', 'لتجاهل الرسائل من لاعب معين، انتقل إلى ملفه الشخصي وانقر على "تجاهل"!');
define('Ignored02', 'تجاهل الاعب.');
define('Ignored03', 'سيتم تجاهل لاعب.');
define('Ignored04', 'توقف عن تجاهل هذا اللاعب.');
define('Ignored05', 'الموفقة على إستقبال رسائل من الاعب.');

define("herostatus9", "علي الطريق");
define("herostatus100", "في القرية");
define("herostatus101", "البطل ميت");
define("herostatus102", "البطل مأسور");
define("herostatus103", "البطل يدافع");

$lang['Profile'] = array(
	'00' => 'تعديل الملف الشخصي',
	'01' => 'التفاصيل',
	'02' => 'عيد الميلاد',
	'03' => 'الجنس',
	'04' => 'لا توجد بيانات',
	'05' => 'محارب',
	'06' => 'محاربه',
);

$lang['Alliance'] = array(
	'00' => 'لا تحالف',
);

$lang['Logout'] = array(
	'01' => 'العودة للعبة',
	'02' => 'اسم اللاعب او الإيميل',
	'03' => 'كلمة السر',
	'04' => 'دخول',
);

