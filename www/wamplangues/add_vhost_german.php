<?php
//3.1.1 - NotwwwDir
//3.1.3 - VirtualHostPortNone
//3.1.4 - txtTLDdev
//3.1.9 - VirtualHostName modified - Accept diacritical characters (IDN)
//3.2.6 - HoweverWamp
//3.2.8 - phpNotExists - VirtualHostPhpFCGI - modifyForm - modifyVhost - modAliasForm
//      - modifyAlias - StartAlias - ModifiedAlias - NoModifyAlias - HoweverAlias
//  modified: VirtualHostPort (%s replaced by below ) - Start - VirtualCreated - However - HoweverWamp
//  array $langues_help added.
//3.3.0 - Modification of lines FcgidInitialEnv
//3.3.2 - Suppress $langues[''VirtualSubMenuOn']

$langues = array(
	'langue' => 'Deutsch',
	'locale' => 'german',
	'addVirtual' => 'VirtualHost hinzufügen',
	'backHome' => 'Zurück zur Homepage',
	'UncommentInclude' => 'Uncomment <small>(Suppress #)</small> the line <code>#Include conf/extra/httpd-vhosts.conf</code><br>in file %s',
	'FileNotExists' => 'Die Datei <code>%s</code> existiert nicht',
	'txtTLDdev' => 'Server-Name %s nutzt TLD %s die von Webbrowsern monopolisiert wird. Anderen TLD nutzen (.test z. B.)',
	'FileNotWritable' => 'Die Datei <code>%s</code> ist nicht beschreibbar',
	'DirNotExists' => '<code>%s</code> existiert nicht oder ist kein Ordner',
	'NotwwwDir' => 'Der Ordner <code>%s</code> ist für "localhost" reserviert. Bitte anderen Ordner nutzen.',
	'NotCleaned' => 'Die Datei %s wurde nicht bereinigt. Es verbleiben Beispieldateien wie: dummy-host.example.com',
	'NoVirtualHost' => 'Kein VirtualHost in <code>%s</code> definiert<br>Es sollte zumindest der VirtualHost für localhost vorhanden sein.',
	'NoFirst' => 'Der erste VirtualHost muss <code>localhost</code> sein in der Datei <code>%s</code>',
	'ServerNameInvalid' => 'Der Server-Name <code>%s</code> ist ungültig.',
	'LocalIpInvalid' => 'Die locale IP <code>%s</code> ist ungültig.',
	'VirtualHostName' => 'Name des <code>VirtualHost</code> Kein Leerzeichen (Space) - Kein Unterstrich (_) ',
	'VirtualHostFolder' => 'Kompletter absoluter <code>Pfad</code> des VirtualHost-<code>Ordners</code> <i>Bsp: C:/wamp64/www/project/ oderr E:/www/site1/</i> ',
	'VirtualHostIP' => '<code class="option">Wenn</code> der VirtualHost per IP genutzt wird: <code class="option">Lokale IP</code> 127.x.y.z ',
	'VirtualHostPhpFCGI' => '<code class="option">Wenn</code> PHP in FCGI-Modus genutzt wird: <code class="option">Akzeptierte Versionen</code> hierunter ',
	'VirtualHostPort' => '<code class="option">Wenn</code> ein anderer statt des Standard Ports genutzt werden soll: <code class="option">Akzeptierte Ports</code> hierunter ',
	'VirtualHostPortNone' => 'Wenn andere als der Standard-Port genutzt werden sollen, müssen sie per Rechtsklick-Menü zu Apache hinzugefügt werden. ',
	'VirtualAlreadyExist' => 'Der Server-Name <code>%s</code> existiert bereits',
	'VirtualIpAlreadyUsed' => 'Die Lokale IP <code>%s</code> existiert bereits',
	'VirtualPortNotExist' => 'The port <code>%s</code> is not a "Listen port" Apache',
	'VirtualPortExist' => 'The port <code>%s</code> is default "Listen port" Apache and should not be mentioned',
	'VirtualHostExists' => 'VirtualHost already defined:',
	'Start' => 'Starte Erstellung/Änderung des VirtualHost (Könnte etwas dauern …)',
	'StartAlias' => 'Alias-Änderungen starten',
	'GreenErrors' => 'Die grün umrahmten Fehler können automatisch korrigiert werden.',
	'Correct' => 'Starte automatische Korrektur der Fehler innerhalb der grün umrahmten Felder',
	'NoModify' => 'Unmöglich die Datei <code>httpd-vhosts.conf</code> oder <code>hosts</code> zu ändern',
	'NoModifyAlias' => 'Alias wurde nicht geändert',
	'VirtualCreated' => 'Die Dateien wurden geändert. VirtualHost <code>%s</code> wurde erstellt/geändert',
	'ModifiedAlias' => 'Der Alias <code>%s</code> wurde geändert',
	'CommandMessage' => 'Nachricht der Konsole zur DNS-Aktualisierung:',
	'However' => 'You may add/modify another VirtualHost by validate "Add a VirtualHost".<br>However, for these new VirtualHost are taken into account by Wampmanager (Apache), you must run item<br><code>Restart DNS</code><br>from Right-Click Tools menu of Wampmanager icon.</i>',
	'HoweverAlias' => 'You may modify another Alias by validate "Add a VirtualHost".<br>However, for these modified Alias is taken into account by Wampmanager (Apache), you must run item<br><code>Restart DNS</code><br>from Right-Click Tools menu of Wampmanager icon.</i>',
	'HoweverWamp' => 'The created/modified VirtualHost has been taken into account by Apache.<br>You may add/modify another VirtualHost by validate "Add a VirtualHost".<br>You can start working on this new VirtualHost<br>But in order for these new VirtualHosts to be taken into account by the Wampmanager menus, you must launch the item<br><code>Refresh</code><br>from Right-Click menu of Wampmanager icon.</i>',
	'suppForm' => 'Formular VirtualHost löschen',
	'suppVhost' => 'VirtualHost löschen',
	'modifyForm' => 'Formular VirtualHost ändern',
	'modifyVhost' => 'VirtualHost ändern',
	'modAliasForm' => 'Formular Alias ändern',
	'modifyAlias' => 'Alias ändern',
	'Required' => 'Erforderlich',
	'Optional' => 'Optional',
	'phpNotExists' => 'PHP-Version existiert nicht',
	);


?>