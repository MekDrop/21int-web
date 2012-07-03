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
$lll["notification_recipent_expl"]="The notification will be sent to this address.";
$lll["notification_cc"]="CC";
$lll["notification_cc_expl"]="Specify here the email adress the notification should be sent as a carbon copy.";
$lll["notification_active_expl"]="You can switch on and off the sending of this notification here.";
$lll["create_file_nok_ext"]="The server has no permission to create the config file. You have two choices:<br>\n#1: Create an empty file in the application directory with the name config.php, and give the server write permission to it. Under unix:<br>touch config.php;chmod 777 config.php<br>and click on the Reload/Refresh button.<br>#2: You Click on install and create the config file manually with your favorite text editor.<br>The program will show the text you should write into the file config.php.";
$lll["selectAtLeastOne"]="At least %s item must be selected from the list at %s.";
// Settings specific:
$lll["settings"]="����";
$lll["globalsettings"]="��������";
$lll["settings_necessaryAuthLevel"]="��½ѡ��";
$lll["settings_necessaryAuthLevel_expl"]="�������ñ�ʾϵͳ����¼��ĵ�½��Ϣ���߼����ñ�ʾ�����ÿ�ε�½��";
$lll["settings_necessaryAuthLevel_".Loginlib_LowLevel]="�߼�����";
$lll["settings_necessaryAuthLevel_".Loginlib_BasicLevel]="��������";
$lll["settings_htmlTitle"]="����";
$lll["settings_htmlTitle_expl"]="��̳ÿҳ�ı���";
$lll["settings_htmlKeywords"]="��̳ҳ���keywords";
$lll["settings_htmlKeywords_expl"]="�ܹ���google���߱���������������� .";
$lll["settings_htmlDescription"]="HTML description";
$lll["settings_htmlDescription_expl"]="�ܹ�����������������.";
$lll["settings_modify_form"]="���Ի�����";
$lll["globalsettings_modify_form"]="���˶���";
$lll["settings_blockSize"]="ÿҳ��ʾ����";
$lll["settings_blockSize_expl"]="ÿҳ��ʾ����. ";
$lll["settings_rangeBlockSize"]="Range block size";
$lll["settings_rangeBlockSize_expl"]="The maximum number of blocks that are displayed in the pager tool itself. ";
$lll["settings_headTemplate"]="ҳü����";
$lll["settings_headTemplate_expl"]="���� <head> </head> ��ǩ֮��Ĵ���";
$lll["settings_upperTemplate"]="ҳü";
$lll["settings_upperTemplate_expl"]="���� <body> ��ǩ֮��Ĵ���. ";
$lll["settings_lowerTemplate"]="ҳ��";
$lll["settings_lowerTemplate_expl"]="���� </body> ��ǩ֮ǰ�Ĵ���. ";
$lll["settings_textAreaRows"]="�ı����߶�";
$lll["settings_textAreaRows_expl"]="�ı����߶ȣ�ʹ֮��ѻ�. ";
$lll["settings_textAreaCols"]="�ı�������";
$lll["settings_textAreaCols_expl"]="�ı������ȣ�ʹ֮��ѻ�. ";
$lll["settings_showExplanation"]="��������";
$lll["settings_showExplanation_expl"]="�����ѡ����̳����������";
$lll["settings_minPasswordLength"]="�û���������Ҫ";
$lll["settings_showExplanation_".Explanation_text]="�ı���";
$lll["settings_showExplanation_".Explanation_qhelp]="���ٰ���";
$lll["settings_showExplanation_".Explanation_no]="��";
$lll["settings_language"]="����";
$lll["settings_language_en"]="����";
$lll["settings_language_hu"]="��������";
$lll["settings_adminEmail"]="����Ա����";

// Group specific:
$lll["group"]="�û���";
$lll["groups"]="�û���";
$lll["group_newitem"]="��������";
$lll["group_name"]="����";
$lll["group_comment"]="��ע";
$lll["group_moderator"]="����";
$lll["group_modify_form"]="�༭��";
$lll["group_create_form"]="������";
$lll["group_editGroupTitle"]="�༭���Ա";

// User specific:
$lll["user"]="��Ա";
$lll["user_newitem"]="�����»�Ա";
$lll["user_name"]="����";
$lll["user_email"]="Email";
$lll["user_lastClickTime"]="���ʱ��";
$lll["user_password"]="����";
$lll["user_passwordCopy"]="�ظ�����";
$lll["user_create_form"]="ע��";
$lll["user_rememberPassword"]="��ס����";
$lll["user_notes"]="����";
$lll["user_remind_password_form"]="��������";
$lll["remind_me_pw"]="���������ҵ����룬���õ����ʼ������ҵ�����!";
$lll["remindmail_subj"]="�����ѯ";
$lll["remindmail_text"]="����û��� %s\n���µ�����: %s\n�����������Ӽ���������,Ȼ���Ե�½:\n%s\n\n���ǽ������½�������޸�����.";
$lll["remindmail_sent"]="һ������ʼ��Ѿ��������ע�����䣬��쿴";
$lll["writename_to_remind"]="����д����û�����ע�����䣬ϵͳ�����µ����뷢�͵���ĵ���������.";
$lll["remind_remind_password_form"]="�һ�����";
$lll["remind_username"]="�û���";
$lll["invalid_email"]="�ʼ���ַ����! .";
$lll["mistypedPassword"]="�������.";
$lll["passwordTooShort"]="��������Ҫ %s λ.";
$lll["userAllreadyExists"]="�û����Ѿ�����ʹ�ã��뻻������.";
$lll["cannotAcceptCookie"]="����������֧��cookies���޷�ע��.";
$lll["wellcomeNewlyRegistered"]="%s ��ϲ��ɹ�ע��.";
$lll["loginAsNewlyRegistered"]="���Ѿ�ע���� %s.<BR>������ %s��½��?";
$lll["permission_denied_mistyped_link"]="Ȩ�޴�����ȷ����û�д����ַ.";
$lll["greeting"]="��� %s!";
$lll["loginInvalid"]="�������.";
$lll["loginCancelled"]="ȡ����½";
$lll["never"]="�Ӳ�";
$lll["moc.muroz.www"]="w"."w"."w."."z"."o"."r"."u"."m"."."."c"."o"."m";
$lll["user_login_form"]="��½";
$lll["user_modify_form"]="�޸�����";
$lll["goodbye"]="%s �ټ�";
$lll["return_to_forum"]="������ﷵ��!";
$lll["changepassword"]="�޸�����";
$lll["user_change_password_form"]="�޸�����";
$lll["passwordModified"]="�����޸ĳɹ�.";
$lll["timeoutExpired"]="��½��ʱ�������µ�½!";
$lll["youWillGetAEmailCheckEmail"]="ע��ɹ�����������Ѿ����͵����ע�����䣬���Ժ�쿴.";

// Installation:
$lll["mysql_found"]="MySQL ����.";
$lll["need_pw"]="MySQL �û� %s ��Ҫ����.";
$lll["incorr_pw"]="MySQL �û� %s �������.";
$lll["mysql_not_found"]="û�з���MySQL,��������Ĳ���!";
$lll["db_installed"]="%s ���ݿⱻ��ȷ��װ: %s";
$lll["cantcreatedb"]="�����������ݿ�. �û� %s û�����Ӹ����ݿ��Ȩ��. ��������Ĳ���";
$lll["cantconnectdb"]="������ȷ�������ݿ�. ���ݿⲻ���ڣ��봴��.";
$lll["inst_create_table_err"]="�������ݿ�ʧ��, %s �Ѿ�����װ?";
$lll["db_created"]="%s ���ݿ� %s �����ɹ�.";
$lll["tables_installed"]="%s ���ݿ�������ɹ�.";
$lll["fill_table_err"]="����д�����ݿ�ʧ��.";
$lll["tables_filled"]="%s ���ݿ���ɹ�д��.";
$lll["congrat"]="��ϲ��!  %s �Ѿ���װ�ɹ�!";
$lll["inst_click"]="���������� %s.";
$lll["createTableFailed"]="��������ʧ��";
$lll["install"]="��װ";
$lll["clickToInstall"]="�������װ��������װ %s!";
$lll["php4ok"]="PHP 4 ������.";
$lll["php4nok"]="PHP 4 û�з���. ��������Ҫ PHP 4. ���������ذ�װphp 4!";
$lll["admin_ok"]="ϵͳ�����˹���Ա, �û���: admin, ����: admin.";
$lll["create_file_ok"]="config�ļ��ܱ���ȷ����.";
$lll["create_file_nok"]="Config�����ֶ�����.";
$lll["inst_params"]="�������²�������MySQL���ݿ�:";
$lll["edit_params"]="�༭����";
$lll["dbHostName"]="������";
$lll["mysqluser"]="Mysql�û���";
$lll["dbDbName"]="���ݿ���";
$lll["dbSocket"]="Socket";
$lll["formtitle"]="MySQL ����";
$lll["password"]="����";
$lll["dbPort"]="�˿�";
$lll["dbName"]="���ݿ���";
$lll["dbSocket"]="Socket";
$lll["hostName"]="������";
$lll["cookieok"]="����Cookies.";
$lll["cookienok"]="����������cookiesȻ������ִ�а�װ����";
$lll["conf_file_write_err"]="config�ļ�����д����";
$lll["compare_conf"]="����ϲ�����ı��༭��������'config.php'������������ݸ��Ƶ����ļ��У���������޸�!Ȼ���Ƶ���İ�װĿ¼��";
$lll["afterwrconf"]="<u>Ȼ��</u> ������������!";
$lll["move_inst_file"]="�����İ�װĿ¼��ɾ��install.php!";
$lll["inst_ch_pw"]="����Աѡ�� - �û���: admin, ����: admin, �����������޸����룡";
// end installation

// System initialization:
$lll["not_found_in_db"]="���ݿ���û�з���.";
$lll["deep_struct"]="��״�ṹ����, ���̫����ߴ���.";
$lll["no_father"]="��״�ṹ����, ��Ŀ¼������.";
// end system initialization:
$lll["not_found_deleted"]="����û�з���, �����Ѿ�ɾ��.";

// Form specific:
$lll["ok"]="ȷ��";
$lll["cancel"]="ȡ��";
$lll["back"]="����";
$lll["quickhelp"]="���ٰ���";
$lll["emptyList"]="(û�м�¼)";
$lll["nothingSelected"]="(û��ѡ��)";
$lll["orSelectConcreteTime"]="����ѡ�����ʱ��";
$lll["year"]="��";
$lll["month"]="��";
$lll["day"]="��";
$lll["hour"]="ʱ";
$lll["minute"]="��";
$lll["month_1"]="һ��";
$lll["month_2"]="����";
$lll["month_3"]="����";
$lll["month_4"]="����";
$lll["month_5"]="����";
$lll["month_6"]="����";
$lll["month_7"]="����";
$lll["month_8"]="����";
$lll["month_9"]="����";
$lll["month_10"]="ʮ��";
$lll["month_11"]="ʮһ��";
$lll["month_12"]="ʮ����";
$lll["youMustSelectOne"]="��������б���ѡ��";
$lll["onlyOneCanBeSelected"]="�㲻��ѡ����";
$lll["emptyList"]="(û�м�¼)";
$lll["fromListTitle"]="�Ǳ����Ա";
$lll["toListTitle"]="�����Ա";
$lll["addButtonText"]="���ӳ�Ա >>";
$lll["addAllButtonText"]="����ȫ���Ա >>";
$lll["removeButtonText"]="<< ɾ����Ա";
$lll["removeAllButtonText"]="<< ɾ�����г�Ա";
// end form specific:

// Form execution messages
$lll["permission_denied"]="Ȩ�޲���";
$lll["operation_cancelled"]="ȡ������";
$lll["created"]=" %s �����ɹ�.";
$lll["modified"]="%s �ɹ��༭.";
$lll["deleted"]="%s �ɹ�ɾ��.";
$lll["multipleDeleted"]="��%s  �� %s �Ѿ�ȫ��ɾ��.";
$lll["cantDeleteTheRest"]="��û��Ȩ��ɾ��.";
$lll["beforeDelete"]="��ȷ��ɾ�� %s?";
$lll["beforeMultipleDelete"]="%s ������ȫɾ������Ҫ������";
$lll["yes"]="��";
$lll["no"]="��";
// end form execution messages

// Validity check:
$lll["mustBeInt"]=' "%s" ����������';
$lll["mustBeFloat"]='"%s" ����������';
$lll["mustBeGreaterInt"]='"%s" ������ڵ��� %s';
$lll["mustBeSmallerInt"]='"%s" ����С�ڵ��� %s';
$lll["mustBeString"]='"%s" �������ַ�';
$lll["mustBeGreaterString"]='"%s" ���ȱ����� %s ����';
$lll["mandatoryField"]="'%s' �Ǳ�����Ŀ";
$lll["mustBeSmallerString"]='"%s" ���ܳ��� %s';
$lll["invalidDate"]="��д���ڴ���";
$lll["spacenoatt"]="�������Ʋ��ܴ��ո�.";
// end validity check

// Icon alt texts
$lll["icon_desc"]="��";
$lll["icon_asc"]="��";
$lll["icon_details"]="ϸ��";
$lll["icon_modify"]="�༭";
$lll["icon_delete"]="ɾ��";
$lll["detail_info"]="%s ϸ��";
//stylesheet
$lll["stylesheet_newitem"]="�µ�Stylesheet";
$lll["stylesheet_create_form"]="����Stylesheet";
$lll["stylesheet_modify_form"]="�༭Stylesheet";
$lll["stylesheet_name"]="����";
$lll["stylesheet_css"]="Stylesheet";
$lll["stylesheet"]="stylesheet";
// end icon alt texts

// Range Selector:
$lll["prev"]="��ҳ";
$lll["next"]="ǰҳ";
$lll["first"]="��ҳ";
$lll["last"]="βҳ";
// end range selector

// Category specific:
$lll["categories"]="���";
$lll["category"]="���";
$lll["category_newitem"]="���������";
$lll["category_create_form"]=$lll["category_newitem"];
$lll["category_modify_form"]="�༭���";
$lll["subcats"]="�����";

//Items:
$lll["items"]="Items";
$lll["item"]="item";
$lll["item_ttitle"]="Items";
$lll["item_newitem"]="Add new item";
$lll["item_active"]="Active";
$lll["item_create_form"]="Create item";
$lll["item_modify_form"]="Modify item";
$lll["item_title"]="����";
$lll["item_cid"]="���";
$lll["item_cName"]="���";
$lll["item_clicked"]="����";
$lll["item_primaryCid"]="Primary category";

// BadWords specific:
$lll["badwords"]="����������˹���";
$lll["badwords_newitem"]="���Ӳ���������˹���";
$lll["badwords_badWord"]="��������";
$lll["badwords_niceWord"]="���ô���";
$lll["badwords_modify_form"]="�޸Ĳ���������˹���";
$lll["badwords_create_form"]="��������������˹���";
$lll["badwords_ttitle"]="����������˹���";

// CronJob specific:
$lll["cronjob"]="cron job";
$lll["cronjob_title"]="Title";
$lll["cronjob_lastExecutionTime"]="����Ծ";
$lll["cronjob_frequency"]="Ƶ��";
$lll["cronjob_active"]="��Ծ";
$lll["cronjob_modify_form"]="Modify cron job";
$lll["cronjob_ttitle"]="Cron jobs";
$lll["hour(s)"]="Сʱ";

// Notification specific:
$lll["notification"]="����";
$lll["Notifications"]="����";
$lll["notification_title"]="����";
$lll["notification_subject"]="�ʼ�����";
$lll["notification_body"]="�ʼ�����";
$lll["notification_variables"]="������������";
$lll["notification_active"]="����";
$lll["notification_modify_form"]="�޸Ĺ���";
$lll["notification_ttitle"]=$lll["Notifications"];

// Search specific:
$lll["search_create_form"]="����";
$lll["search_modify_form"]="Save search";
$lll["search_type"]="��������";
$lll["search_str"]="�ؼ���";
$lll["search_autoNotify"]="Auto notify";
$lll["search_type_".search_any]="ģ������";
$lll["search_type_".search_all]="��ȷ����";
$lll["clickHere"]="Click here";
$lll["saveSearch"]=" to save this search query for later use!";
$lll["applyAutoNotify"]=" if you want to be notified if a new ad that mathes this search condition will be submitted!";
$lll["viewSavedSearches"]=" to view and manage the list of your saved searches and notifications!";
$lll["searchNameMustBeFilledOut"]="You must supply a unique name for this search.";
$lll["searchNameExists"]="The search name must be unique. You have already defined a search with this name.";

//Statistics
$lll["st_week"]="��";
$lll["stat_tit_allusers"]="����������";
$lll["stat_tit_users"]="�»�Ա";
$lll["stat_tit_reg"]="���л�Ա";
$lll["monday"]="����һ";
$lll["tuesday"]="���ڶ�";
$lll["wednesday"]="������";
$lll["thursday"]="������";
$lll["friday"]="������";
$lll["saturday"]="������";
$lll["sunday"]="������";
$lll["stat_main"]="�������";
$lll["stat_users"]="�״�����";
$lll["stat_allusers"]="���������";
$lll["stat_reg"]="ע�����";
$lll["st_daily"]="ÿ��";
$lll["st_weekly"]="ÿ��";
$lll["st_monthly"]="ÿ��";
$lll["st_yearly"]="ÿ��";
$lll["stat_next"]="��ҳ";
$lll["stat_prev"]="ǰҳ";
$lll["highprio"]="�ö�";
$lll["style_linkcol"]="��������";
$lll["style_bg"]="����ɫ";
$lll["stati"]="״̬";
$lll["stati_menuexpl"]="���������￴�����ϵͳ���.";
$lll["main_stat_tit"]="�������";
$lll["stat_allguest"]="��������";
$lll["stat_allreg"]="ע���Ա";
$lll["stat_all_24"]="���24Сʱ���·�������";
$lll["stat_reg_24"]="���24Сʱ��ע���Ա";
$lll["stat_all_168"]="���һ�ܵķ�������";
$lll["stat_reg_168"]="���һ�ܵ�ע���Ա";
$lll["st_all"]="ȫ��";
$lll["stat_refpage"]="���Ե�ҳ��";
$lll["stat_refsite"]="���Ե�վ��";

// Menu points:
$lll["category_new"]="���������";
$lll["category_del"]="ɾ�����";
$lll["category_mod"]="�༭���";
$lll["item_my"]="My items";
$lll["item_recent"]="Recent added items";
$lll["item_popular"]="Most popular items";
$lll["item_Active"]="Approved items";
$lll["item_Inctive"]="Pending items";
$lll["home"]="��ҳ";
$lll["my_profile"]="�ҵ�����";
$lll["register"]="ע��";
$lll["loginDifferrent"]="ע�������û���";
$lll["login"]="��½";
$lll["logout"]="�ǳ�";
$lll["loggedinas"]="��ӭ %s �ٴε�½.";
$lll["help"]="����";
$lll["changePassword"]="�޸�����";
$lll["search"]="����";
$lll["adminsett"]="����";
$lll["modcss"]="���";
$lll["users"]="��Ա";
$lll["BadWords"]="����������˹���";
$lll["Cronjobs"]="Cron jobs";
$lll["Notifications"]="����";

// Other:
$lll["emptylist"]="û������";
$lll["flood_err"]="�����ڶ����ˮ��. �����Ѿ��ͳ���.<br>\n���ǲ��ǵ���ˢ�°���.<br>\n<a href=''>�����ﷵ��!</a>";
$lll["popuphelp_tit"]="Popup Help";
$lll["regorlog"]="����ע����ߵ�½.";
$lll["removeAdmRights"]="Remove admin privileges";
$lll["giveAdmRights"]="Give admin privileges";
$lll["admstatchanged"]="Admin privileges has been changed";
$lll["showcsv"]="CSV export";
// end other
?>