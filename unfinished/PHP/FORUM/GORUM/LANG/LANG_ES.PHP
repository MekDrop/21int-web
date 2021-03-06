<?php
//Translation: BankHacker, http://www.bankhacker.com/
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
$lll["settings"]="Configuraci�n";
$lll["globalsettings"]="Par�metros globales";
$lll["settings_necessaryAuthLevel"]="Nivel de autentificaci�n necesario para permiso de escritura";
$lll["settings_necessaryAuthLevel_expl"]="Nivel B�sico significa que el programa recuerda su clave y le autoriza autom�ticamente. Con el nivel Avanzado, debe identificarse primero.";
$lll["settings_necessaryAuthLevel_".Loginlib_LowLevel]="Nivel Advanzado";
$lll["settings_necessaryAuthLevel_".Loginlib_BasicLevel]="Nivel Basico";
$lll["settings_htmlTitle"]="T�tulo HTML";
$lll["settings_htmlTitle_expl"]="El contenido del tag TITLE en la cabecera HTML de las p�ginas del foro";
$lll["settings_htmlKeywords"]="Palabras clave del HTML";
$lll["settings_htmlKeywords_expl"]="El META tag 'keywords' en la cabecera HTML de las p�ginas del foro. Se usa principalmente para que los buscadores de Internet indexen las p�ginas.";
$lll["settings_htmlDescription"]="Descripci�n HTML";
$lll["settings_htmlDescription_expl"]="El META tag 'description' en la cabecera del HTML de las p�ginas del foro. Se usa principalmente para que los buscadores de Internet indexen las p�ginas.";
$lll["settings_modify_form"]="Personalizaci�n";
$lll["globalsettings_modify_form"]="Define los par�metros globales";
$lll["settings_blockSize"]="Tama�o de bloque";
$lll["settings_blockSize_expl"]="El n�mero m�ximo de elementos en un listado por p�gina. ";
$lll["settings_rangeBlockSize"]="Tama�o del rango de bloque";
$lll["settings_rangeBlockSize_expl"]="El n�mero m�ximo de bloques que se muestran en la paginaci�n. ";
$lll["settings_headTemplate"]="Plantilla de la cabecera";
$lll["settings_headTemplate_expl"]="El texto a escribir que aparecer� en la cabecera de las p�ginas HTML generadas";
$lll["settings_upperTemplate"]="Plantilla superior";
$lll["settings_upperTemplate_expl"]="Aqu� definir� la secci�n HTML que aparecer� sobre el contenido del foro, o bien, se puede indicar un fichero php que ser� invocado en su lugar. Esta funci�n es muy �til para integrar Zorum con cualquier portal. ";
$lll["settings_lowerTemplate"]="Plantilla inferior";
$lll["settings_lowerTemplate_expl"]="Aqu� definir� la secci�n HTML que aparecer� bajo el contenido del foro, o bien, se puede indicar un fichero php que ser� invocado en su lugar. Esta funci�n es muy �til para integrar Zorum con cualquier portal. ";
$lll["settings_textAreaRows"]="Altura del �rea de mensajes";
$lll["settings_textAreaRows_expl"]="Aqu� puede indicar el tama�o vertical de la celda de entrada de mensajes que se adapte mejor a su portal o navegador del cliente. ";
$lll["settings_textAreaCols"]="Longitud del campo de texto";
$lll["settings_textAreaCols_expl"]="Aqu� puede indicar el tama�o horizontal de la celda de entrada de mensajes que se adapte mejor a su portal o navegador del cliente. ";
$lll["settings_showExplanation"]="Mostrar mensajes explicativos";
$lll["settings_showExplanation_expl"]="Esto que lee usted ahora mismo es un mensaje explicativo. Puede esconderlos o mostrarlos como texto o iconos que ofrecen una peque�a ayuda";
$lll["settings_minPasswordLength"]="Longitud m�xima de la clave de los usuarios";
$lll["settings_showExplanation_".Explanation_text]="modo texto";
$lll["settings_showExplanation_".Explanation_qhelp]="modo de ayuda r�pida";
$lll["settings_showExplanation_".Explanation_no]="sin ayuda";
$lll["settings_language"]="Idioma";
$lll["settings_language_en"]="Ingl�s";
$lll["settings_language_hu"]="Hungaro";
$lll["settings_adminEmail"]="EMail del Administrador";

// Group specific:
$lll["group"]="grupo";
$lll["groups"]="Grupos";
$lll["group_newitem"]="A�adir nuevo grupo";
$lll["group_name"]="Nombre";
$lll["group_comment"]="Comentario";
$lll["group_moderator"]="Moderador";
$lll["group_modify_form"]="Modificar grupo";
$lll["group_create_form"]="Crear grupo";
$lll["group_editGroupTitle"]="Editar miembros del grupo";

// User specific:
$lll["user"]="usuario";
$lll["user_newitem"]="A�adir nuevo usuario";
$lll["user_name"]="Nombre";
$lll["user_email"]="Email";
$lll["user_lastClickTime"]="�ltimo click";
$lll["user_password"]="Clave";
$lll["user_passwordCopy"]="Repetir clave";
$lll["user_create_form"]="Registro";
$lll["user_rememberPassword"]="Recordar clave";
$lll["user_notes"]="Notas";
$lll["user_remind_password_form"]="Recordar clave";
$lll["remind_me_pw"]="He olvidado la clave, env�enme una nueva por email!";
$lll["remindmail_subj"]="Recordador de clave";
$lll["remindmail_text"]="Su nombre de usuario es: %s\nSu nueva clave es: %s\nPulse en el siguiente enlace para activar la nueva clave, y luego trate de identificarse en el foro nuevamente:\n%s\n\nSe recomienda que personalice su clave tras identificarse en el foro.";
$lll["remindmail_sent"]="Se le ha enviado un mensaje con la nueva clave";
$lll["writename_to_remind"]="Escriba su nombre de usuario, pulse ok, y se le enviar� un email con su nueva clave.";
$lll["remind_remind_password_form"]="Recordador de clave";
$lll["remind_username"]="Su nombre de usuario";
$lll["invalid_email"]="Direcci�n de email no v�lida! No hay ning�n usuario en el sistema con ese email.";
$lll["mistypedPassword"]="Ha tecleado mal la clave.";
$lll["passwordTooShort"]="La longitud de la clave debe ser al menos de %s caracteres.";
$lll["userAllreadyExists"]="El usuario indicado ya existe.";
$lll["cannotAcceptCookie"]="Su navegador no acepta cookies, por lo tanto, no puede registrarse.";
$lll["wellcomeNewlyRegistered"]="El nuevo usuario %s ya est� registrado correctamente.";
$lll["loginAsNewlyRegistered"]="Est� usted identificado como el usuario %s.<BR>Quiere de nuevo acceder al sistema con su nuevo nombre de usuario %s?";
$lll["permission_denied_mistyped_link"]="Permiso denegado, debe haber tecleado mal el enlace.";
$lll["greeting"]="Hola, %s!";
$lll["loginInvalid"]="El usuario o clave indicado no es correcto.";
$lll["loginCancelled"]="Acceso cancelado";
$lll["never"]="Nunca";
$lll["moc.muroz.www"]="w"."w"."w."."z"."o"."r"."u"."m"."."."c"."o"."m";
$lll["user_login_form"]="Identificaci�n";
$lll["user_modify_form"]="Modificar el perfil de usuario";
$lll["goodbye"]="Adios %s";
$lll["return_to_forum"]="Pulse aqu� para volver a la aplicaci�n!";
$lll["changepassword"]="cambiar clave";
$lll["user_change_password_form"]="Cambiar clave";
$lll["passwordModified"]="La clave ha sido modificada correctamente.";
$lll["timeoutExpired"]="Ha pasado el Timeout. Por favor, vuelva a identificarse!";
$lll["youWillGetAEmailCheckEmail"]="El registro se ha realizado correctamente. Pronto recibir� un email con su clave interna.";

// Installation:
$lll["mysql_found"]="Se ha encontrado MySQL.";
$lll["need_pw"]="MySQL requiere una clave para el usuario %s.";
$lll["incorr_pw"]="La clave de MySQL para el usuario %s es incorrecta.";
$lll["mysql_not_found"]="No se ha encontrado MySQL! Por favor, modifique los parametros de abajo para que coincidan con la configuraci�n de MySQL!";
$lll["db_installed"]="La base de datos %s se ha instalado correctamente: %s";
$lll["cantcreatedb"]="No se puede acceder o crear la base de datos. El usuario %s no dispone de permisos de creaci�n de bases de datos, o no dispone de acceso a la base de datos. Cambie el nombre de usuario o as�gnele los permisos necesarios!";
$lll["cantconnectdb"]="No se puede conectar con la base de datos. Quiz� no haya permisos o no exista, intentando crearla.";
$lll["inst_create_table_err"]="Error al intentar crear tablas, est� %s ya instalado?";
$lll["db_created"]="La base de datos %s %s ha sido creada.";
$lll["tables_installed"]="Las tablas de la base de datos %s se han instalado correctamente.";
$lll["fill_table_err"]="Error al tratar de rellenar las tablas.";
$lll["tables_filled"]="Las tablas de la base de datos %s se ha rellenado con los datos iniciales.";
$lll["congrat"]="Enhorabuena! Acaba de instalar %s!";
$lll["inst_click"]="Pulse aqu� para acceder a %s.";
$lll["createTableFailed"]="Fallo en la creaci�n de tabla";
$lll["install"]="Instalaci�n";
$lll["clickToInstall"]="Pulse sobre 'Instalaci�n' para instalar %s!";
$lll["php4ok"]="Se ha encontrado PHP 4.";
$lll["php4nok"]="PHP 4 no se ha encontrado. Esta aplicaci�n requiere PHP 4. Por favor, b�jeselo de www.php.net o de zend.com, e int�ntelo de nuevo!";
$lll["admin_ok"]="El usuario Administrador ha sido creado, nombre de usuario: admin, clave: admin.";
$lll["create_file_ok"]="El fichero de configuraci�n ha sido creado.";
$lll["create_file_nok"]="El fichero de configuraci�n ha sido creado manualmente.";
$lll["inst_params"]="La base de datos en MySQL se crear� con los siguientes par�metros:";
$lll["edit_params"]="Editar par�metros";
$lll["dbHostName"]="Nombre del Servidor";
$lll["mysqluser"]="Nombre de usuario en Mysql";
$lll["dbDbName"]="Nombre de la base de datos";
$lll["dbSocket"]="Socket";
$lll["formtitle"]="Configuraci�n de MySQL";
$lll["password"]="Clave";
$lll["dbPort"]="Puerto";
$lll["dbName"]="Nombre de la base de datos";
$lll["dbSocket"]="Socket";
$lll["hostName"]="Nombre del Servidor";
$lll["cookieok"]="Las Cookies est�n activadas.";
$lll["cookienok"]="Active las Cookies y realice de nuevo el proceso de instalaci�n!";
$lll["conf_file_write_err"]="No se puede abrir el fichero de configuraci�n en modo escritura";
$lll["compare_conf"]="Genere un fichero con su editor de texto favorito llamado 'config.php' en el directorio donde tenga las fuentes de esta aplicaci�n, y copie el siguiente c�digo en �l! Aseg�rese de NO poner ning�n cambio de l�nea al final del fichero!";
$lll["afterwrconf"]="<u>Despu�s</u> de escribir el fichero de configuraci�n pulse sobre el enlace de abajo!";
$lll["move_inst_file"]="Por favor, borre el fichero install.php del directorio de la aplicaci�n!";
$lll["inst_ch_pw"]="Par�metros del Administrador - nombre de usuario: admin, clave: admin, no olvide cambiar la clave!";
// end installation

// System initialization:
$lll["not_found_in_db"]="No se ha encontrado en la base de datos.";
$lll["deep_struct"]="Error en la estructura de �rbol, demasiado profundo o incorrecto.";
$lll["no_father"]="Error en la estructura de �rbol, el padre no existe.";
// end system initialization:
$lll["not_found_deleted"]="Objeto no encontrado, quiz� borrado por el sistema.";

// Form specific:
$lll["ok"]="Ok";
$lll["cancel"]="Cancelar";
$lll["back"]="Atr�s";
$lll["quickhelp"]="Ayuda r�pida";
$lll["emptyList"]="(lista vac�a)";
$lll["nothingSelected"]="(nada seleccionado)";
$lll["orSelectConcreteTime"]="o seleccione una hora concreta";
$lll["year"]="a�o";
$lll["month"]="mes";
$lll["day"]="d�a";
$lll["hour"]="hora";
$lll["minute"]="minuto";
$lll["month_1"]="Enero";
$lll["month_2"]="Febrero";
$lll["month_3"]="Marzo";
$lll["month_4"]="Abril";
$lll["month_5"]="Mayo";
$lll["month_6"]="Junio";
$lll["month_7"]="Julio";
$lll["month_8"]="Agosto";
$lll["month_9"]="Septiembre";
$lll["month_10"]="Octubre";
$lll["month_11"]="Noviembre";
$lll["month_12"]="Deciembre";
$lll["youMustSelectOne"]="Debe escoger un elemento de la lista";
$lll["onlyOneCanBeSelected"]="No puede seleccionar m�s de un elemento en esta operaci�n";
$lll["emptyList"]="(lista vac�a)";
$lll["fromListTitle"]="Usuarios fuera del grupo";
$lll["toListTitle"]="Usuarios dentro del grupo";
$lll["addButtonText"]="A�adir usuarios >>";
$lll["addAllButtonText"]="A�adir todos los usuarios >>";
$lll["removeButtonText"]="<< Borrar usuarios";
$lll["removeAllButtonText"]="<< Borrar todos los usuarios";
// end form specific:

// Form execution messages
$lll["permission_denied"]="Permiso denegado";
$lll["operation_cancelled"]="Operaci�n cancelada";
$lll["created"]="El nuevo %s se ha creado correctamente.";
$lll["modified"]="El %s se ha modificado correctamente.";
$lll["deleted"]="El %s se ha borrado correctamente.";
$lll["multipleDeleted"]="%s elemento de %s se han borrado correctamente.";
$lll["cantDeleteTheRest"]="No dispone de permisos para borrar el resto.";
$lll["beforeDelete"]="Est� seguro que quiere borrar el %s?";
$lll["beforeMultipleDelete"]="%s elementos ser�n borrados. Desea continuar?";
$lll["yes"]="S�";
$lll["no"]="No";
// end form execution messages

// Validity check:
$lll["mustBeInt"]='El campo "%s" debe ser un n�mero';
$lll["mustBeFloat"]='El campo "%s" debe ser un n�mero decimal';
$lll["mustBeGreaterInt"]='El campo "%s" debe ser mayor o igual que %s';
$lll["mustBeSmallerInt"]='El campo "%s" debe ser menor o igual que %s';
$lll["mustBeString"]='El campo "%s" debe ser una cadena';
$lll["mustBeGreaterString"]='La longitud del campo "%s" debe ser menor como m�nimo %s';
$lll["mandatoryField"]="'%s' es un campo obligatorio";
$lll["mustBeSmallerString"]='La longitud del campo "%s" debe ser como mucho %s';
$lll["invalidDate"]="La fecha indicada no es v�lida";
$lll["spacenoatt"]="El nombre del fichero adjunto no puede contener espacios.";
// end validity check

// Icon alt texts
$lll["icon_desc"]="descendiente";
$lll["icon_asc"]="ascendente";
$lll["icon_details"]="detalles";
$lll["icon_modify"]="modificar";
$lll["icon_delete"]="borrar";
$lll["detail_info"]="%s Detalles";
//stylesheet
$lll["stylesheet_newitem"]="Nueva hoja de estilos";
$lll["stylesheet_create_form"]="Crear Nueva hoja de estilos";
$lll["stylesheet_modify_form"]="Modificar hoja de estilos";
$lll["stylesheet_name"]="Nombre";
$lll["stylesheet_css"]="Hoja de estilos";
$lll["stylesheet"]="hoja de estilos";
// end icon alt texts

// Range Selector:
$lll["prev"]="anterior";
$lll["next"]="siguiente";
$lll["first"]="primero";
$lll["last"]="�ltimo";
// end range selector

// categor�a specific:
$lll["categories"]="Categorias";
$lll["category"]="Categor�a";
$lll["category_newitem"]="Crear Nueva Categor�a";
$lll["category_create_form"]=$lll["category_newitem"];
$lll["category_modify_form"]="Modificar Categor�a";
$lll["subcats"]="Subcategor�as";

//Items:
$lll["items"]="Elementos";
$lll["item"]="elemento";
$lll["item_ttitle"]="Elementos";
$lll["item_newitem"]="A�adir nuevo elemento";
$lll["item_active"]="Activar";
$lll["item_create_form"]="Crear elemento";
$lll["item_modify_form"]="Modificar elemento";
$lll["item_title"]="T�tulo";
$lll["item_cid"]="Categor�a";
$lll["item_cName"]="Categor�a";
$lll["item_clicked"]="Vistas";
$lll["item_primaryCid"]="Primary category";

// BadWords specific:
$lll["badwords"]="regla de sustituci�n de palabras prohibidas";
$lll["badwords_newitem"]="Add new regla de sustituci�n de palabras prohibidas";
$lll["badwords_badWord"]="Palabra prohibida";
$lll["badwords_niceWord"]="Palabra sustituta";
$lll["badwords_modify_form"]="Modificar regla de sustituci�n de palabras prohibidas";
$lll["badwords_create_form"]="Crear regla de sustituci�n de palabras prohibidas";
$lll["badwords_ttitle"]="reglas de sustituci�n de palabras prohibidas";

// CronJob specific:
$lll["cronjob"]="tareas de fondo";
$lll["cronjob_title"]="Titulo";
$lll["cronjob_lastExecutionTime"]="�ltima fecha de ejecuci�n";
$lll["cronjob_frequency"]="Frecuencia";
$lll["cronjob_active"]="Activar";
$lll["cronjob_modify_form"]="Modificar tareas de fondo";
$lll["cronjob_ttitle"]="Tareas de fondo";
$lll["hour(s)"]="hora(s)";

// Notification specific:
$lll["notification"]="notificaci�n";
$lll["Notifications"]="Notificaciones";
$lll["notification_title"]="Titulo";
$lll["notification_subject"]="T�tulo del Email";
$lll["notification_body"]="Cuerpo del Email";
$lll["notification_variables"]="Variables permitidas";
$lll["notification_active"]="Activar";
$lll["notification_modify_form"]="Modificar notificaci�n";
$lll["notification_ttitle"]=$lll["Notifications"];

// Search specific:
$lll["search_create_form"]="Buecar";
$lll["search_modify_form"]="Grabar b�squeda";
$lll["search_type"]="Tipo de b�squeda";
$lll["search_str"]="Palabras";
$lll["search_autoNotify"]="Auot notificaci�n";
$lll["search_type_".search_any]="cualquier palabra";
$lll["search_type_".search_all]="todas las palabras";
$lll["clickHere"]="Pulse aqu�";
$lll["saveSearch"]=" grabar esta consulta para uso posterior!";
$lll["applyAutoNotify"]=" si desea ser avisado de que un nuevo elemento conicide con esta condici�n de b�squeda!";
$lll["viewSavedSearches"]=" ver y editar la lista de b�squedas grabadas y notificaciones!";
$lll["searchNameMustBeFilledOut"]="Debe indicar un �nic nombre que defina esta b�squeda.";
$lll["searchNameExists"]="El nombre de la b�squeda debe ser �nico. Ya existe una b�squeda con este nombre.";

//Statistics
$lll["st_week"]="Semana";
$lll["stat_tit_allusers"]="N�mero de visitas";
$lll["stat_tit_users"]="N�mero de nuevas visitas";
$lll["stat_tit_reg"]="N�mero de nuevos registros";
$lll["monday"]="Lunes";
$lll["tuesday"]="Martes";
$lll["wednesday"]="Mi�rcoles";
$lll["thursday"]="Jueves";
$lll["friday"]="Viernes";
$lll["saturday"]="S�bado";
$lll["sunday"]="Domingo";
$lll["stat_main"]="Principal";
$lll["stat_users"]="Nuevas visitas";
$lll["stat_allusers"]="Visitas";
$lll["stat_reg"]="Registros";
$lll["st_daily"]="Diarios";
$lll["st_weekly"]="Semanales";
$lll["st_monthly"]="Mensuales";
$lll["st_yearly"]="Anuales";
$lll["stat_next"]="Siguiente";
$lll["stat_prev"]="Anterior";
$lll["highprio"]="Alta prioridad";
$lll["style_linkcol"]="Color del enlace";
$lll["style_bg"]="Color de fondo";
$lll["stati"]="Estad�sticas";
$lll["stati_menuexpl"]="Puede consultar las estad�sticas de su sistema aqu�.";
$lll["main_stat_tit"]="Estad�sticas principales";
$lll["stat_allguest"]="N�mero de visitas";
$lll["stat_allreg"]="N�mero de usuarios registrados";
$lll["stat_all_24"]="N�mero de nuevas visitas en las �ltimas 24 horas";
$lll["stat_reg_24"]="N�mero de registros en las �ltimas 24 horas";
$lll["stat_all_168"]="N�mero de nuevas visitas en las �ltimas 168 horas (una semana)";
$lll["stat_reg_168"]="N�mero de registros en las �ltimas 168 horas (una semana)";
$lll["st_all"]="Todo";
$lll["stat_refpage"]="Paginas de procendencia";
$lll["stat_refsite"]="Websites de procendencia";

// Menu points:
$lll["category_new"]="A�adir nueva categor�a";
$lll["category_del"]="Borrar categor�a";
$lll["category_mod"]="Modificar categor�a";
$lll["item_my"]="Mis elementos";
$lll["item_recent"]="Elementos recientemente incorporados";
$lll["item_popular"]="Elementos m�s populares";
$lll["item_Active"]="Elementos aprobados";
$lll["item_Inctive"]="Elementos pendientes";
$lll["home"]="Inicio";
$lll["my_profile"]="Mi perfil";
$lll["register"]="Registro";
$lll["loginDifferrent"]="Diferente identificaci�n";
$lll["login"]="Identif.";
$lll["logout"]="Fin";
$lll["loggedinas"]="Se ha identificado en el sistema como %s.";
$lll["help"]="Ayuda";
$lll["changePassword"]="Cambiar clave";
$lll["search"]="Buscar";
$lll["adminsett"]="Configuraciones";
$lll["modcss"]="Estilo";
$lll["users"]="Usuarios";
$lll["BadWords"]="Reglas de sustituci�n de palaras prohibidas";
$lll["Cronjobs"]="Tareas de fondo";
$lll["Notifications"]="Notificaciones";

// Other:
$lll["emptylist"]="El listado est� vac�o";
$lll["flood_err"]="Error de abuso. Esta informaci�n ya ha sido enviada.<br>\nParece que ha pulsado el bot�n de recarga del navegador tras enviar un mensaje al sistema.<br>\n<a href=''>Pulse aqu� para volver!</a>";
$lll["popuphelp_tit"]="Ayuda en Popup";
$lll["regorlog"]="Por favor, reg�strese o identif�quese.";
$lll["removeAdmRights"]="Eliminar los privilegios de administrador";
$lll["giveAdmRights"]="Otorgar privilegios de administrador";
$lll["admstatchanged"]="Los privilegios de administrador han sido modificados";
$lll["showcsv"]="CSV export";
// end other
?>
