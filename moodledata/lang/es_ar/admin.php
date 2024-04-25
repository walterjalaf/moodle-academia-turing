<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'admin', language 'es_ar', version '4.3'.
 *
 * @package     admin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acceso denegado';
$string['accountlocked'] = 'Su cuenta está bloqueada. Se enviará por correo electrónico un enlace para desbloqueo.';
$string['accounts'] = 'Cuentas';
$string['accountunlocked'] = 'Su cuenta fue desbloqueada. Puede acceder al sistema.';
$string['addcategory'] = 'Agregar una categoría';
$string['additionalhtml'] = 'HTML adicional';
$string['additionalhtml_desc'] = 'Estas opciones permiten especificar el código HTML a agregar en todas las páginas. Puede establecer el código HTML que se añadirá dentro de la etiqueta HEAD de la página, inmediatamente después de que se haya abierto la etiqueta BODY o inmediatamente antes de que  la etiqueta BODY se cierre. <br /> Hacer esto le permite agregar encabezados o pies de página personalizados en cada página o añadir fácilmente, con independencia del tema elegido, soporte para servicios como Google Analytics.';
$string['additionalhtml_heading'] = 'Acceso denegado';
$string['additionalhtmlfooter'] = 'BODY anterior esta cerrado';
$string['additionalhtmlfooter_desc'] = 'Este contenido se agregará a cada página justo antes de que se cierre la etiqueta body.';
$string['additionalhtmlhead'] = 'Dentro de HEAD';
$string['additionalhtmlhead_desc'] = 'El contenido aquí se agregará a cada página justo antes de que se cierre la etiqueta body.';
$string['additionalhtmltopofbody'] = 'Cuando BODY es abierto';
$string['additionalhtmltopofbody_desc'] = 'Este contenido se agregará a cada página inmediatamente después de la apertura de la etiqueta body.';
$string['admincategory'] = 'Categoría: {$a}';
$string['adminseesall'] = 'Los/las Administradores/as ven todo';
$string['adminseesallevents'] = 'Los/las Administradores/as ven todos los eventos';
$string['adminseesownevents'] = 'Los/las Administradores/as son los/las demás usuarios/as';
$string['advancedfeatures'] = 'Características avanzadas';
$string['agedigitalconsentverification'] = 'Verificación de la edad de consentimiento digital.';
$string['agedigitalconsentverification_desc'] = 'Habilita la verificación de la edad digital de consentimiento antes de mostrar la página de alta para auto-registrar usuarios. Esto protege a su sitio de menores de edad que se podrían anotar sin el consentimiento de sus madres, padres o tutores/as. Los detalles del <a target="_blank" href="{$a}">Contacto para soporte</a> son proporcionados a menores de edad para más asistencia.';
$string['ageofdigitalconsentmap'] = 'Edad digital de consentimiento';
$string['ageofdigitalconsentmap_desc'] = 'Aquí se puede especificar la edad digital de consentimiento predeterminada y la edad en cualquier país en el que difiera de la predeterminada. Ingrese cada edad en una nueva línea con formato: código de país, edad (separados por una coma). La edad predeterminada se indica con * en lugar del código de país. Los códigos de país son los especificados en ISO 3166-2.';
$string['allcountrycodes'] = 'Todos los códigos de país';
$string['allowattachments'] = 'Permitir adjuntos';
$string['allowbeforeblock'] = 'La lista de permitidos se procesará primero';
$string['allowbeforeblockdesc'] = 'Por defecto, las entradas de las IPs bloqueadas se procesan primero. Pero si esta opción se activa, las entradas de la lista de IPs permitidas se procesarán antes que la lista bloqueada.';
$string['allowcategorythemes'] = 'Permitir temas de categoría';
$string['allowcohortthemes'] = 'Permitir temas de cohorte';
$string['allowcoursethemes'] = 'Permitir temas de curso';
$string['allowedemaildomains'] = 'Dominios de email permitidos';
$string['allowediplist'] = 'Lista de IP permitidas';
$string['allowemailaddresses'] = 'Dominios de email permitidos';
$string['allowemojipicker'] = 'Selector de emoji';
$string['allowframembedding'] = 'Permitir incrustación de marcos';
$string['allowframembedding_help'] = 'Si está habilitado, este sitio puede estar incrustado en un marco en un sistema remoto, como se recomienda cuando se usa el complemento de inscripción \'Publicar como herramienta LTI\'. De lo contrario, se recomienda dejar la incrustación de marcos deshabilitada por razones de seguridad. Tenga en cuenta que para la aplicación móvil, esta configuración se ignora y siempre se permite la incrustación de marcos.';
$string['allowguestmymoodle'] = 'Permitir el acceso de invitados/as al Área Personal';
$string['allowindexing'] = 'Permitir la indexación por motores de búsqueda';
$string['allowindexing_desc'] = 'Esto determina si se va a permitir que los motores de búsqueda indexen su sitio. "En todas partes" permitirá que los motores de búsqueda busquen en todas partes, incluidas las páginas de inicio de sesión y registro, lo que significa que los sitios con Forzar inicio de sesión activado todavía están indexados. Para evitar el riesgo de spam relacionado con la búsqueda de la página de registro, use "En todas partes excepto en las páginas de inicio de sesión y registro". "Nowhere" le dirá a los motores de búsqueda que no indexen ninguna página. Tenga en cuenta que esto es solo una etiqueta en el encabezado del sitio. Depende del motor de búsqueda respetar la etiqueta.';
$string['allowindexingeverywhere'] = 'En todas partes';
$string['allowindexingexceptlogin'] = 'En todas partes excepto en las páginas de inicio de sesión y registro';
$string['allowindexingnowhere'] = 'En ninguna parte';
$string['allowobjectembed'] = 'Permitir etiquetas EMBED y OBJECT';
$string['allowthemechangeonurl'] = 'Permitir cambios de tema en el enlace (URL)';
$string['allowuserblockhiding'] = 'Permitir el acceso a bloques ocultos';
$string['allowusermailcharset'] = 'Permitir cambiar el conjunto de caracteres';
$string['allowuserswitchrolestheycantassign'] = 'Permitir a usuarios/as sin el permiso para asignar roles cambiar de rol.';
$string['allowuserthemes'] = 'Permitir estilos a usuario/a';
$string['alternativefullnameformat'] = 'Formato alternativo de nombre completo';
$string['alternativefullnameformat_desc'] = 'Define como se muestran los nombres a usuarios/as que tienen activada la capacidad "viewfullnames" (por defecto, disponible en cuentas con roles de gestor, docente o docente sin permisos de edición). Los marcadores que pueden ser usados vienen determinados por el parámetro \'Formato de nombre completo\'.';
$string['always'] = 'Siempre';
$string['appearance'] = 'Apariencia';
$string['aspellpath'] = 'Ruta de aspell';
$string['authentication'] = 'Autenticación';
$string['authpreventaccountcreation'] = 'Prevenir creación de cuentas al autenticarse';
$string['authpreventaccountcreation_help'] = 'Cuando una persona se identifica, si aún no existe su cuenta, se crea una en el sitio de forma automática. Si se utiliza una base de datos externa para la identificación, por ejemplo LDAP, pero se desea restringir el acceso al sitio solo a usuarios/as con una cuenta existente, esta opción debe estar habilitada. Las nuevas cuentas tendrán que ser creadas manualmente o mediante la función de carga de usuarios/as. Tenga en cuenta que este ajuste no se aplica a la identificación MNet.';
$string['authsettings'] = 'Gestionar autenticación';
$string['autolang'] = 'Autodetectar lenguaje';
$string['autolangusercreation'] = 'Al crear la cuenta, configure el idioma del navegador como su idioma preferido';
$string['autologinguests'] = 'Acceso automático de personas invitadas';
$string['availableto'] = 'Disponible para';
$string['availabletoanyone'] = 'Disponible para cualquier persona visitante del sitio';
$string['availabletoauthenticated'] = 'Limitado a personas autenticadas';
$string['backgroundcolour'] = 'Color transparente';
$string['backup_shortname'] = 'Usar el nombre del curso en las copias de seguridad';
$string['backup_shortnamehelp'] = 'Usar el nombre del curso como parte del nombre de archivo de la copia de seguridad';
$string['backups'] = 'Copias de seguridad';
$string['badwordsconfig'] = 'Ingrese su lista de malas palabras, separadas por coma.';
$string['badwordsdefault'] = 'Si la lista personalizada está vacía, se utilizará una lista por defecto tomada del paquete de idioma';
$string['badwordslist'] = 'Lista personalizada de malas palabras';
$string['blockediplist'] = 'Lista de IP bloqueadas';
$string['blockinstances'] = 'Instancias';
$string['blockmultiple'] = 'Múltiple';
$string['blockprotect'] = 'Proteger instancias';
$string['blockprotect_help'] = 'Si bloquea un tipo particular de bloque, entonces nadie podrá agregar ni eliminar instancias. (Por supuesto, puede desbloquearlo nuevamente si necesita editar instancias).

Esto tiene como objetivo proteger bloques como la navegación y la configuración que son muy difíciles de recuperar si se eliminan accidentalmente.';
$string['blockprotectblock'] = 'Proteger instancias de {$a}';
$string['blockprotected'] = '{$a} instancias de bloque están protegidas.';
$string['blocksettings'] = 'Administrar bloques';
$string['blockunprotect'] = 'Desproteger';
$string['blockunprotectblock'] = 'Desproteger instancias de {$a}';
$string['blockunprotected'] = '{$a} instancias de bloque están desprotegidas.';
$string['bloglevel'] = 'Visibilidad del blog.';
$string['bookmarkadded'] = 'Marcador agregado.';
$string['bookmarkalreadyexists'] = 'Ya has marcado esta página como favorita.';
$string['bookmarkdeleted'] = 'Favorita borrada.';
$string['bookmarkthispage'] = 'Marcar como favorita esta página';
$string['cacheapplication'] = 'Caché de la aplicación';
$string['cacheapplicationhelp'] = 'Los ítems almacenados en caché se comparten entre todas las cuentas y expiran en un tiempo de vida determinado (ttl).';
$string['cachejs'] = 'Javascript caché';
$string['cachejs_help'] = 'El almacenamiento en caché y la compresión de Javascript mejoran enormemente el rendimiento de carga de la página. Se recomienda encarecidamente para sitios de producción. Los/las desarrolladores/as probablemente quieran desactivar esta característica.';
$string['cacherequest'] = 'Solicitar caché';
$string['cacherequesthelp'] = 'Caché específica de usuario/a que caduca cuando se completa la solicitud. Diseñada para remplazar áreas en donde estamos usando los almacenamientos estáticos.';
$string['cachesession'] = 'Caché de la sesión';
$string['cachesessionhelp'] = 'Caché específica del usuario/a que caduca cuando termina la sesión de la persona. Diseñada para aliviar la sobrecarga de la sesión.';
$string['cachesettings'] = 'Configuración de caché';
$string['cachetemplates'] = 'Plantillas de caché';
$string['cachetemplates_help'] = 'La caché de plantillas mejorará el rendimiento de carga y es altamente recomendado para sitios en producción. Los desarrolladores probablemente deseen mantener esta característica desactivada.';
$string['caching'] = 'Almacenamiento en caché';
$string['calendar_weekend'] = 'Días de fin de semana';
$string['calendarexportsalt'] = 'Sal de exportación de calendario';
$string['calendarsettings'] = 'Calendario';
$string['calendartype'] = 'Tipo de calendario';
$string['calendartype_desc'] = 'Elija un tipo de calendario por defecto para todo el sitio. Este ajuste se puede sobrescribir por los ajustes de la configuración del curso o por los del perfil personal de usuario/a';
$string['campaign'] = 'Campaña';
$string['cannotdeletemodfilter'] = 'No es posible desinstalar el \'{$a->filter}\' porque no es parte del módulo \'{$a->module}\'.';
$string['cannotuninstall'] = '{$a} no se puede desinstalar.';
$string['categoryemail'] = 'Correo';
$string['cfgwwwrootslashwarning'] = '$CFG->wwwroot definido de manera incorrecta en el archivo config.php. Incluye el caracter \'/\' al final, el cual debe ser removido.';
$string['cfgwwwrootwarning'] = '$CFG->wwwroot definido incorrectamente en el archivo config.php. El mismo debe coincidir con la URL que se está usando para acceder a esta página.';
$string['change'] = 'cambio';
$string['checkboxno'] = 'No';
$string['checkboxyes'] = 'Sí';
$string['checkupgradepending'] = 'Actualización';
$string['choosefiletoedit'] = 'Seleccione archivo para editar';
$string['cleanup'] = 'Limpieza';
$string['clianswerno'] = 'n';
$string['cliansweryes'] = 's';
$string['cliexitgraceful'] = 'Saliendo con gracia, por favor espere...';
$string['cliexitnow'] = 'Saliendo ahora mismo';
$string['cliincorrectvalueerror'] = 'Error, valor incorrecto "{$a->value}" para "{$a->option}"';
$string['cliincorrectvalueretry'] = 'Valor incorrecto, por favor reintentar';
$string['configallcountrycodes'] = 'Esta es la lista de países que pueden ser seleccionadas en varios lugares, por ejemplo, en el perfil de una persona. Si está en blanco (por defecto) se utilizará la lista de \'countries.php\' en el paquete de idioma Inglés estándar. Esta es la lista de la norma ISO 3166-1. De lo contrario, puede especificar una lista separada por comas de los códigos, por ejemplo, "GB, FR, ES. Si se agregan nuevos códigos, no estándar aquí, tendrá que agregarlos a countries.php en \'en\' y su paquete de idioma.';
$string['configallowcohortthemes'] = 'Si activa esto, se podrán asignar temas a nivel de cohorte. Esto afecta a todas las personas con solo una cohorte o con varias cohortes que usen el mismo tema.';
$string['cronerrorclionly'] = 'Lamentablemente el acceso a esta página a través de Internet fue deshabilitado por quienes administran.';
