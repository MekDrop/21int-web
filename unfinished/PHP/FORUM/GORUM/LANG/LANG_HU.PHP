<?php
//
$lll["TLP10"]="Recursive error, maybe no place for new object";
$lll["TLP20"]="Cannot reindex tree, no place";
$lll["TLP40"]="Invalid value: %s, Depth must be an integer, greater than or equal to 0";
$lll["TLP50"]="Invalid value: %s, Index must be an integer, greater or equal to 0";
$lll["TLP60"]="The depth of the firts list element must be 0.";
$lll["TLP70"]="Each index must be different! Repeated index: %s";
$lll["TLP80"]="The depth can only be increased with one level. There are more than one levels between '%s' and '%s'";
$lll["TLP90"]="The tree has been successfully reorganized";
$lll["notification_recipent"]="To";
$lll["notification_recipent_expl"]="Az �rtes�t� erre a c�mre lesz k�ldve.";
$lll["notification_cc"]="CC";
$lll["notification_cc_expl"]="Carbon Copy.";
$lll["notification_active_expl"]="Az �rtes�t�k k�ld�s�t kapcsolhatja ki/be itt.";
$lll["create_file_nok_ext"]="The server has no permission to create the config file. You have two choices:<br>\n#1: Create an empty file in the application directory with the name config.php, and give the server write permission to it. Under unix:<br>touch config.php;chmod 777 config.php<br>and click on the Reload/Refresh button.<br>#2: You Click on install and create the config file manually with your favorite text editor.<br>The program will show the text you should write into the file config.php.";
$lll["selectAtLeastOne"]="Legal�bb %s elemnek kiv�lasztottnak kell lennie a(z) %s attributum eset�n.";
// Settings specific:
$lll["settings"]="Be�ll�t�sok";
$lll["globalsettings"]="�ltal�nos be�ll�t�sok";
$lll["settings_necessaryAuthLevel"]="�r�sjoghoz sz�ks�ges azonos�t�si szint";
$lll["settings_necessaryAuthLevel_expl"]="Az alap szint azt jelenti, hogy a rendszer megjegyzi a jelszavadat, �s amikor visszat�rsz az oldalra, automatikusan felismer. ";
$lll["settings_necessaryAuthLevel_".Loginlib_LowLevel]="Halad� szint";
$lll["settings_necessaryAuthLevel_".Loginlib_BasicLevel]="Alap szint";
$lll["settings_htmlTitle"]="HTML title";
$lll["settings_htmlTitle_expl"]="A rendszer html oldal�nak TITLE tagj�nek sz�vege.";
$lll["settings_htmlKeywords"]="HTML keywords";
$lll["settings_htmlKeywords_expl"]="A rendszer html oldal�nak keywords tagj�nek tartalma.";
$lll["settings_htmlDescription"]="HTML description";
$lll["settings_htmlDescription_expl"]="A rendszer html oldal�nak description tagj�nek tartalma.";
$lll["settings_modify_form"]="Szem�lyreszab�s";
$lll["globalsettings_modify_form"]="�ltal�nos be�ll�t�sok testreszab�sa";
$lll["settings_blockSize"]="Blokk m�ret";
$lll["settings_blockSize_expl"]="Maxim�lisan ennyi elem jelenik meg egy list�ban egy oldalon.";
$lll["settings_rangeBlockSize"]="Tartom�ny blokk m�ret";
$lll["settings_rangeBlockSize_expl"]="Maxim�lisan ennyi tartom�nyra mutat� link jelenik meg a lapoz� eszk�zben";
$lll["settings_headTemplate"]="Head sablon";
$lll["settings_headTemplate_expl"]="Az ide �rt html sz�veg a f�rum �ltal gener�lt html sz�veg head r�sz�be ker�l az oldalon.";
$lll["settings_upperTemplate"]="Fejl�c sablon";
$lll["settings_upperTemplate_expl"]="Az ide �rt html sz�veg a f�rum �ltal gener�lt html sz�veg el� ker�l az oldalon. Ha egy php kiterjeszt�s� f�jl nev�t �rod ide, a f�jl php k�dk�nt lesz v�grehajtva.";
$lll["settings_lowerTemplate"]="L�bl�c sablon";
$lll["settings_lowerTemplate_expl"]="Az ide �rt html sz�veg a f�rum �ltal gener�lt html sz�veg ut�n ker�l az oldalon. Ha egy php kiterjeszt�s� f�jl nev�t �rod ide, a f�jl php k�dk�nt lesz v�grehajtva.";
$lll["settings_textAreaRows"]="A sz�vegmez� magass�ga";
$lll["settings_textAreaRows_expl"]="Szem�lyre szabhatod az �rt�ket, hogy jobban megfeleljen a k�perny�d be�ll�t�sainak.";
$lll["settings_textAreaCols"]="A sz�vegmez� hossz�s�ga";
$lll["settings_textAreaCols_expl"]="Szem�lyre szabhatod az �rt�ket, hogy jobban megfeleljen a k�perny�d be�ll�t�sainak.";
$lll["settings_showExplanation"]="Magyar�z� sz�vegek megmutat�sa.";
$lll["settings_showExplanation_expl"]="Amit �ppen most olvasol, az egy magyar�z� sz�veg. Elt�ntedheted ezeket, vagy be�ll�thatod, hogy csak kis k�rd�jel ikonok jelenjenek meg helyette.";
$lll["settings_minPasswordLength"]="A felhaszn�l�k jelszav�nak minim�lis hossza.";
$lll["settings_showExplanation_".Explanation_text]="sz�veg m�d";
$lll["settings_showExplanation_".Explanation_qhelp]="ikon m�d";
$lll["settings_showExplanation_".Explanation_no]="nincs s�g�";
$lll["settings_language"]="Nyelv";
$lll["settings_language_en"]="Angol";
$lll["settings_language_hu"]="Magyar";
$lll["settings_adminEmail"]="Admin email";

// Group specific:
$lll["group"]="csoport";
$lll["groups"]="Csoportok";
$lll["group_newitem"]="�j csoport l�trehoz�sa";
$lll["group_name"]="N�v";
$lll["group_comment"]="Megjegyz�s";
$lll["group_moderator"]="Moder�tor";
$lll["group_modify_form"]="Csoport m�dos�t�sa";
$lll["group_create_form"]="�j csoport l�trehoz�sa";
$lll["group_editGroupTitle"]="Csoport tagjainak szerkeszt�se";

// User specific:
$lll["user"]="Felhaszn�l�";
$lll["user_newitem"]="�j felhaszn�l� l�trehoz�sa";
$lll["user_name"]="N�v";
$lll["user_email"]="Email";
$lll["user_lastClickTime"]="Utols� kattint�s";
$lll["user_password"]="Jelsz�";
$lll["user_passwordCopy"]="Jelsz� m�gegyszer";
$lll["user_create_form"]="Regisztr�ci�";
$lll["user_rememberPassword"]="Eml�kezz a jelsz�ra";
$lll["user_notes"]="Megjegyz�sek";
$lll["user_remind_password_form"]="Jelsz�eml�keztet�";
$lll["remind_me_pw"]="Elfelejtettem a jelszavamat, k�ldj egy �jat emailben!";
$lll["remindmail_subj"]="Jelsz�eml�keztet�";
$lll["remindmail_text"]="A felhaszn�l�i neved: %s\nAz �j jelszavad: %s\nJelszavad aktiv�l�s�hoz kattints az al�bbi linkre, �s jelentkezz be:\n%s\n\nA jelszavadat a bejelentkez�s ut�n v�ltoztasd meg!.";
$lll["remindmail_sent"]="A mailt az �j jelszavadddal elk�ldt�k neked.";
$lll["writename_to_remind"]="�rd be a felhaszn�l�i nevedet, majd kattints az OK-ra, �s egy mailben elk�ldj�k az �j jelszavadat.";
$lll["remind_remind_password_form"]="Jelsz�eml�keztet�";
$lll["remind_username"]="Felhaszn�l�i neved";
$lll["invalid_email"]="�rv�nytelen mail c�m! Nincs ilyen email c�m� felhaszn�l� a rendszerben.";
$lll["mistypedPassword"]="Elg�pelted a jelszavadat.";
$lll["passwordTooShort"]="A jelsz�nak minimum %s hossz�nak kell lennie.";
$lll["userAllreadyExists"]="Az adott felhaszn�l� m�r l�tezik.";
$lll["cannotAcceptCookie"]="A b�ng�sz�d nem fogadja a cookie-kat, �gy nem tudsz bejelentkezni.";
$lll["wellcomeNewlyRegistered"]="%s �j felhaszn�l� sikeresen bejelentkezett.";
$lll["loginAsNewlyRegistered"]="Jelenleg mint %s vagy bejelentkezve.<BR>�t akarsz jelentkezni az �jonnan regisztr�lt %s nevedre?";
$lll["permission_denied_mistyped_link"]="Hozz�f�r�s megtagadva, tal�n el�rtad a linket.";
$lll["greeting"]="Szia %s!";
$lll["loginInvalid"]="Az adott felhaszn�l�i n�v, jelsz� p�ros �rv�nytelen.";
$lll["loginCancelled"]="Login f�lbeszak�tva";
$lll["never"]="Soha";
$lll["moc.muroz.www"]="w"."w"."w."."z"."o"."r"."u"."m"."."."c"."o"."m";
$lll["user_login_form"]="Login";
$lll["user_modify_form"]="Felhaszn�l�i profil m�dos�t�sa";
$lll["goodbye"]="Viszl�t %s";
$lll["return_to_forum"]="Kattints ide, hogy visszat�rj az alkalmaz�shoz!";
$lll["changepassword"]="jelsz� m�dos�t�s";
$lll["user_change_password_form"]="Jelsz� m�dos�t�s";
$lll["passwordModified"]="A jelsz�t sikeresen megv�ltoztattad.";
$lll["timeoutExpired"]="A login id� lej�rt, k�rj�k jelentkezz be ism�t!";
$lll["youWillGetAEmailCheckEmail"]="A regisztr�ci�d sikeres volt. Hamarosan emailben kapod meg a jelszavadat.";

// Installation:
$lll["mysql_found"]="MySQL has been found.";
$lll["need_pw"]="MySQL require password for user %s.";
$lll["incorr_pw"]="MySQL password for %s is incorrect.";
$lll["mysql_not_found"]="MySQL not found! Please modify the parameters bellow to satisfy your MySQL configuration!";
$lll["db_installed"]="%s database has been installed: %s";
$lll["cantcreatedb"]="Can not reach or create database. User %s has no create database permission, or cannot reach the database. Change the name of the user or give him appropriate rights!";
$lll["cantconnectdb"]="Can not connect to database. May be have no rights or not exists, trying to create.";
$lll["inst_create_table_err"]="Error while trying to create tables, %s already installed?";
$lll["db_created"]="%s database %s has been created.";
$lll["tables_installed"]="%s database tables has been installed.";
$lll["fill_table_err"]="Error while trying to fill tables.";
$lll["tables_filled"]="%s database tables has been filled with initial data.";
$lll["congrat"]="Congratulations! You have installed %s!";
$lll["inst_click"]="Click here to access %s.";
$lll["createTableFailed"]="Create table failed";
$lll["install"]="Install";
$lll["clickToInstall"]="Click on 'Install' to install %s!";
$lll["php4ok"]="PHP 4 has been found.";
$lll["php4nok"]="PHP 4 not found. The application requires PHP 4. Please download it from www.php.net or from zend.com, and try it again!";
$lll["admin_ok"]="Administrator user has been created, username: admin, password: admin.";
$lll["create_file_ok"]="Config file can be created.";
$lll["create_file_nok"]="Config file have to be created manually.";
$lll["inst_params"]="MySQL database will be created with the following parameters:";
$lll["edit_params"]="Edit parameters";
$lll["dbHostName"]="Hostname";
$lll["mysqluser"]="Mysql user name";
$lll["dbDbName"]="Database name";
$lll["dbSocket"]="Socket";
$lll["formtitle"]="MySQL Settings";
$lll["password"]="Password";
$lll["dbPort"]="Port";
$lll["dbName"]="Database name";
$lll["dbSocket"]="Socket";
$lll["hostName"]="Hostname";
$lll["cookieok"]="Cookies are enabled.";
$lll["cookienok"]="Enable cookies and start the install process again!";
$lll["conf_file_write_err"]="Can not open config file for write";
$lll["compare_conf"]="Create a file with your favorite text editor named 'config.php' in the directory where your source is, and copy the following source code into it! Be sure not to write any newline after the last line!";
$lll["afterwrconf"]="<u>After</u> writing the config file click the link below!";
$lll["move_inst_file"]="Please remove the install.php file from this directory!";
$lll["inst_ch_pw"]="Administrator settings - username: admin, password: admin, don't forget to change the password!";
// end installation

// System initialization:
$lll["not_found_in_db"]="Not found in the DB.";
$lll["deep_struct"]="Tree structure error, too deep or incorrect.";
$lll["no_father"]="Tree structure error, father not exists.";
// end system initialization:
$lll["not_found_deleted"]="Object not found, may be deleted from the system.";

// Form specific:
$lll["ok"]="Ok";
$lll["cancel"]="M�gsem";
$lll["back"]="Vissza";
$lll["quickhelp"]="Gyorss�g�";
$lll["emptyList"]="(�res lista)";
$lll["nothingSelected"]="(Nincs kiv�lasztott)";
$lll["orSelectConcreteTime"]="vagy v�lassz konkr�t id�t";
$lll["year"]="�v";
$lll["month"]="h�nap";
$lll["day"]="nap";
$lll["hour"]="�ra";
$lll["minute"]="perc";
$lll["month_1"]="Janu�r";
$lll["month_2"]="Febru�r";
$lll["month_3"]="M�rcius";
$lll["month_4"]="�prilis";
$lll["month_5"]="M�jus";
$lll["month_6"]="J�nius";
$lll["month_7"]="J�lius";
$lll["month_8"]="Augusztus";
$lll["month_9"]="Szeptember";
$lll["month_10"]="Okt�ber";
$lll["month_11"]="November";
$lll["month_12"]="December";
$lll["youMustSelectOne"]="Ki kell v�lasztanod egy elemet a list�b�l!";
$lll["onlyOneCanBeSelected"]="Nem v�laszthatsz ki egyn�l t�bb elemet ehhez a m�velethez!";
$lll["emptyList"]="(�res lista)";
$lll["fromListTitle"]="Csoporton k�v�li felhaszn�l�k";
$lll["toListTitle"]="Csoporton bel�li felhaszn�l�k";
$lll["addButtonText"]="Felhaszn�l�k hozz�ad�sa >>";
$lll["addAllButtonText"]="�sszes felhaszn�l� hozz�ad�sa >>";
$lll["removeButtonText"]="<< Felhaszn�l�k elt�vol�t�sa";
$lll["removeAllButtonText"]="<< �sszes felhaszn�l� elt�vol�t�sa";
// end form specific:

// Form execution messages
$lll["permission_denied"]="Hozz�f�r�s megtagadva";
$lll["operation_cancelled"]="M�velet megszak�tva";
$lll["created"]="Az �j %s sikeresen l�trej�tt.";
$lll["modified"]="%s sikeresen m�dos�tva.";
$lll["deleted"]="%s sikeresen t�r�lve.";
$lll["multipleDeleted"]="%s elem %s-b�l sikeresen t�r�lve.";
$lll["cantDeleteTheRest"]="Nincs jogod a marad�k t�rl�s�hez.";
$lll["beforeDelete"]="Igaz�n t�r�lni akarod %s-t?";
$lll["beforeMultipleDelete"]="%s elem t�rl�dni fog, folytatni akarod?";
$lll["yes"]="Igen";
$lll["no"]="Nem";
// end form execution messages

// Validity check:
$lll["mustBeInt"]='"%s"-nek sz�mnak kell lennie!';
$lll["mustBeFloat"]='"%s"-nek tizedes t�rt sz�mnak kell lennie!';
$lll["mustBeGreaterInt"]='"%s"-nek nagyobb vagy egyenl�nek kell lennie mint %s';
$lll["mustBeSmallerInt"]='"%s"-nek kisebb vagy egyenl�nek kell lennie mint %s';
$lll["mustBeString"]='"%s"-nek sz�veges form�tum�nak kell lennie!';
$lll["mustBeGreaterString"]='"%s"-nek minimum %s-nek kell lennie';
$lll["mandatoryField"]="'%s' k�telez� mez�";
$lll["mustBeSmallerString"]='"%s" mez� hossza maximum %s lehet';
$lll["invalidDate"]="�rv�nytelen d�tum";
$lll["spacenoatt"]="A csatolt f�jl neve nem tartalmazhat sz�k�z karaktert!";
// end validity check

// Icon alt texts
$lll["icon_desc"]="cs�kken�";
$lll["icon_asc"]="n�vekv�";
$lll["icon_details"]="r�szletek";
$lll["icon_modify"]="m�dos�t�s";
$lll["icon_delete"]="t�rl�s";
$lll["detail_info"]="%s r�szletek";
//stylesheet
$lll["stylesheet_newitem"]="�j st�luslap";
$lll["stylesheet_create_form"]="�j st�luslap l�trehoz�sa";
$lll["stylesheet_modify_form"]="St�luslap m�dos�t�sa";
$lll["stylesheet_name"]="N�v";
$lll["stylesheet_css"]="St�luslap";
$lll["stylesheet"]="st�luslap";
// end icon alt texts

// Range Selector:
$lll["prev"]="el�z�";
$lll["next"]="k�vetkez�";
$lll["first"]="els�";
$lll["last"]="utols�";
// end range selector

// Category specific:
$lll["categories"]="Kateg�ri�k";
$lll["category"]="Kateg�ria";
$lll["category_newitem"]="�j kateg�ria l�trehoz�sa";
$lll["category_create_form"]=$lll["category_newitem"];
$lll["category_modify_form"]="Kateg�ria m�dos�t�sa";
$lll["subcats"]="Alkateg�ri�k";

//Items:
$lll["items"]="Elemek";
$lll["item"]="elem";
$lll["item_ttitle"]="Elemek";
$lll["item_newitem"]="�j elem hozz�ad�sa";
$lll["item_active"]="Akt�v";
$lll["item_create_form"]="Elem hozz�ad�sa";
$lll["item_modify_form"]="Elem m�dos�t�sa";
$lll["item_title"]="C�m";
$lll["item_cid"]="Kateg�ria";
$lll["item_cName"]="Kateg�ria";
$lll["item_clicked"]="Megtekint�s";
$lll["item_primaryCid"]="Els�dleges kateg�ria";

// BadWords specific:
$lll["badwords"]="cs�nya sz� helyettes�t� szab�ly";
$lll["badwords_newitem"]="Cs�nya sz� helyettes�t� szab�ly hozz�ad�sa";
$lll["badwords_badWord"]="Cs�nya sz�";
$lll["badwords_niceWord"]="Sz�p sz�";
$lll["badwords_modify_form"]="Cs�nya sz� helyettes�t� szab�ly m�dos�t�sa";
$lll["badwords_create_form"]="Cs�nya sz� helyettes�t� szab�ly hozz�ad�sa";
$lll["badwords_ttitle"]="Cs�nya sz� helyettes�t� szab�lyok";

// CronJob specific:
$lll["cronjob"]="id�z�t�s";
$lll["cronjob_title"]="C�m";
$lll["cronjob_lastExecutionTime"]="Utols� v�grehajt�s ideje";
$lll["cronjob_frequency"]="Ism�tles";
$lll["cronjob_active"]="Akt�v";
$lll["cronjob_modify_form"]="Id�z�t�s m�dos�t�sa";
$lll["cronjob_ttitle"]="Id�z�t�sek";
$lll["hour(s)"]="�ra";

// Notification specific:
$lll["notification"]="�rtes�t�";
$lll["Notifications"]="�rtes�t�k";
$lll["notification_title"]="C�m";
$lll["notification_subject"]="Email t�rgy";
$lll["notification_body"]="Email sz�veg";
$lll["notification_variables"]="Enged�lyezett v�ltoz�k";
$lll["notification_active"]="Akt�v";
$lll["notification_modify_form"]="�rtes�t� m�dos�t�sa";
$lll["notification_ttitle"]=$lll["Notifications"];

// Search specific:
$lll["search_create_form"]="Keres";
$lll["search_modify_form"]="Keres�s ment�se";
$lll["search_type"]="Keres�s t�pusa";
$lll["search_str"]="Szavak";
$lll["search_autoNotify"]="Automatikus �rtes�t�";
$lll["search_type_".search_any]="b�rmely sz�";
$lll["search_type_".search_all]="�sszes sz�";
$lll["clickHere"]="Kattints ide";
$lll["saveSearch"]=" az adott keres�si felt�tel elment�s�hez!";
$lll["applyAutoNotify"]=" ha �rtes�t�t k�rsz arr�l, ha egy olyan �j elem ker�l a rendszerbe, mely megfelel ennek a keres�si felt�telnek!";
$lll["viewSavedSearches"]=" ha meg akarod tekinteni vagy m�dos�tani akarod az elmentett keres�si felt�teleidet �s �rtes�t�idet!";
$lll["searchNameMustBeFilledOut"]="Egyedi nevet kell adnod ennek a keres�snek.";
$lll["searchNameExists"]="A keres�si n�vnek egyedinek kell lennie, ilyen n�ven m�r mentett�l el keres�st.";

//Statistics
$lll["st_week"]="H�t";
$lll["stat_tit_allusers"]="L�togat�k sz�ma";
$lll["stat_tit_users"]="�j l�togat�k sz�ma";
$lll["stat_tit_reg"]="Regisztr�ci�k sz�ma";
$lll["monday"]="H�tf�";
$lll["tuesday"]="Kedd";
$lll["wednesday"]="Szerda";
$lll["thursday"]="Cs�t�rt�k";
$lll["friday"]="P�ntek";
$lll["saturday"]="Szombat";
$lll["sunday"]="Vas�rnap";
$lll["stat_main"]="�ltal�nos";
$lll["stat_users"]="�j l�togat�k";
$lll["stat_allusers"]="L�togat�k";
$lll["stat_reg"]="Regisztr�ci�k";
$lll["st_daily"]="Napi";
$lll["st_weekly"]="Heti";
$lll["st_monthly"]="Havi";
$lll["st_yearly"]="�ves";
$lll["stat_next"]="K�vetkez�";
$lll["stat_prev"]="El�z�";
$lll["highprio"]="Magas priorit�s�";
$lll["style_linkcol"]="Link sz�ne";
$lll["style_bg"]="H�tt�r sz�ne";
$lll["stati"]="Statisztik�k";
$lll["stati_menuexpl"]="Itt l�thatod a rendszerstatisztik�kat.";
$lll["main_stat_tit"]="�ltal�nos statisztik�k";
$lll["stat_allguest"]="L�togat�k sz�ma";
$lll["stat_allreg"]="Regisztr�lt felhaszn�l�k sz�ma";
$lll["stat_all_24"]="�j l�togat�k sz�ma az elm�lt 24 �r�ban";
$lll["stat_reg_24"]="Regisztr�ci�k sz�ma az elm�lt 24 �r�ban";
$lll["stat_all_168"]="�j l�togat�k sz�ma az elm�lt 168 �r�ban (egy h�t)";
$lll["stat_reg_168"]="Regisztr�ci�k sz�ma az elm�lt 168 �r�ban (egy h�t)";
$lll["st_all"]="�sszes";
$lll["stat_refpage"]="Referer oldalak";
$lll["stat_refsite"]="Referer sz�jtok";

// Menu points:
$lll["category_new"]="�j kateg�ria";
$lll["category_del"]="Kateg�ria t�rl�se";
$lll["category_mod"]="Kateg�ria m�dos�t�sa";
$lll["item_my"]="Saj�t elemek";
$lll["item_recent"]="Frissen hozz�adott elemek";
$lll["item_popular"]="Legn�pszer�bb elemek";
$lll["item_Active"]="Elfogadott elemek";
$lll["item_Inctive"]="F�gg� elemek";
$lll["home"]="Home";
$lll["my_profile"]="Saj�t profil";
$lll["register"]="Regisztr�ci�";
$lll["loginDifferrent"]="Login m�sk�nt";
$lll["login"]="Login";
$lll["logout"]="Logout";
$lll["loggedinas"]="Be vagy jelentkezve mint %s.";
$lll["help"]="S�g�";
$lll["changePassword"]="Jelsz�v�ltoztat�s";
$lll["search"]="Keres";
$lll["adminsett"]="Be�ll�t�sok";
$lll["modcss"]="St�lus";
$lll["users"]="Felhaszn�l�k";
$lll["BadWords"]="Sz�cenz�ra";
$lll["Cronjobs"]="Id�z�t�sek";
$lll["Notifications"]="�rtes�t�k";

// Other:
$lll["emptylist"]="A lista �res";
$lll["flood_err"]="Flooding error. Az adatok m�r elk�ld�sre ker�ltek.<br>\n�gy t�nik, megnyomtad a refresh/friss�t�s gombot.<br>\n<a href=''>Kattints ide, hog visszat�rj a rendszerbe!</a>";
$lll["popuphelp_tit"]="Popup S�g�";
$lll["regorlog"]="Regisztr�lj, vagy jelentkezz be.";
$lll["removeAdmRights"]="Adminisztr�tori jogok megvon�sa";
$lll["giveAdmRights"]="Adminisztr�torr� tev�s";
$lll["admstatchanged"]="Adminisztr�tori jogok sikeresen megv�ltoztatva";
$lll["showcsv"]="CSV export";
// end other
?>
