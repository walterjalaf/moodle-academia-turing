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
 * Strings for component 'plagiarism_compilatio', language 'es', version '4.3'.
 *
 * @package     plagiarism_compilatio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate_compilatio'] = 'Activar el plugin Compilatio';
$string['activate_submissiondraft'] = 'Para que los alumnos puedan analizar sus borradores, debe activar la opción <b>{$a}</b> en la sección';
$string['admin_disabled_reports'] = 'El administrador no permite que los profesores muestren los informes de similitudes a los estudiantes.';
$string['admin_goto_helpcenter'] = 'Visite el centro de ayuda Compilatio para acceder a los artículos relativos a la administración del plugin en Moodle.';
$string['analysis_date'] = 'Fecha del análisis (sólo para el análisis programado)';
$string['analysis_started'] = '{$a} análisis solicitado(s).';
$string['analysistype_auto'] = 'Directo';
$string['analysistype_manual'] = 'Manual';
$string['analysistype_prog'] = 'Programada';
$string['api_key_not_tested'] = 'No se pudo verificar la clave API porque falló la conexión con el servicio Compilatio.net.';
$string['api_key_not_valid'] = 'La clave API registrada no es válida. Es propia a la plataforma utilizada. Se puede obtener una contactando con <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a>.';
$string['api_key_valid'] = 'La clave API registrada es válida.';
$string['auto_diagnosis_title'] = 'Auto-diagnóstico';
$string['average'] = 'Media';
$string['compilatio'] = 'Plugin de detección de plagio Compilatio';
$string['compilatio:enable'] = 'Autorizar al profesor para activar/desactivar Compilatio en una actividad';
$string['compilatio:triggeranalysis'] = 'Autorizar al profesor para activar el análisis manualmente';
$string['compilatio:viewreport'] = 'Autorizar al profesor para consultar el informe completo desde Compilatio';
$string['compilatio_help_assign'] = 'Obtener ayuda sobre el plugin Compilatio';
$string['compilatio_iddocument'] = 'Identificador del documento';
$string['compilatio_search'] = 'Buscar';
$string['compilatio_search_help'] = 'Puede encontrar el autor de un documento recuperando el identificador del documento en las fuentes del informe de análisis. Ejemplo: 1. Su documento: <b>1st5xfj2</b> -
Asignar_Nombre(30)Nombre_Copiado_Documento.odt.';
$string['compilatio_search_notfound'] = 'No se ha encontrado ningún documento para este identificador entre los documentos cargados en su plataforma Moodle.';
$string['compilatio_search_tab'] = 'Encontrar el autor de un documento.';
$string['compilatiodefaults'] = 'Valores predeterminados para Compilatio';
$string['compilatioexplain'] = 'Para obtener información adicional sobre este plugin vea: <a href="http://compilatio.net" target="_blank">compilatio.net</a>';
$string['cron_check'] = 'CRON se ejecutó por última vez el {$a}.';
$string['cron_check_never_called'] = 'CRON no ha sido ejecutado desde la activación del plugin. Puede que esté mal configurado.';
$string['cron_check_not_ok'] = 'No ha sido ejecutado en la última hora.';
$string['cron_frequency'] = 'Parece que se ejecuta cada {$a} minutos.';
$string['cron_recommandation'] = 'Recomendamos utilizar un plazo inferior a 15 minutos entre cada ejecución de CRON.';
$string['defaults_desc'] = 'Los parámetros siguientes son utilizados como valores por defecto en las actividades de Moodle que integran Compilatio.';
$string['defaultupdated'] = 'Los valores predeterminados han sido actualizados';
$string['disable_ssl_verification'] = 'Ignore la verificación del certificado SSL.';
$string['disable_ssl_verification_help'] = 'Active esta opción si tiene problemas para verificar los certificados SSL o si experimenta errores al enviar archivos a Compilatio.';
$string['disclaimer_data'] = 'Con la activación de Compilatio, acepta que información relativa a la configuración de su plataforma Moodle sea recogida con el fin de facilitar el soporte y mantenimiento del servicio.';
$string['display_notifications'] = 'Mostrar las notificaciones';
$string['display_stats'] = 'Mostrar estadísticas sobre esta actividad';
$string['document_deleting'] = 'Borrado de documentos';
$string['documents_number'] = 'Documentos analizados';
$string['enable_activities_title'] = 'Habilitar Compilatio para las actividades';
$string['enable_mod_assign'] = 'Habilitar Compilatio para las tareas';
$string['enable_mod_forum'] = 'Habilitar Compilatio para foros';
$string['enable_mod_quiz'] = 'Habilitar Compilatio para el cuestionario';
$string['enable_mod_workshop'] = 'Habilitar Compilatio para los talleres';
$string['enabledandworking'] = 'El plugin Compilatio está activado y funcionando.';
$string['errors'] = 'Errores :';
$string['export_csv'] = 'Exportar datos sobre esta actividad a un fichero CSV';
$string['export_global_csv'] = 'Haga clic aquí para exportar estos datos en formato CSV';
$string['export_raw_csv'] = 'Haga clic aquí para exportar los datos brutos en formato CSV';
$string['extraction_in_progress'] = 'extracción de documentos en curso, por favor inténtelo más tarde';
$string['failedanalysis'] = 'Compilatio falló al analizar su documento:';
$string['filename'] = 'Nombre del fichero';
$string['firstname'] = 'Nombre';
$string['get_scores'] = 'Recupera los grados de similitudes de Compilatio.net';
$string['global_statistics'] = 'Estadísticas globales';
$string['global_statistics_description'] = 'Todos los datos de los documentos se envían a Compilatio.';
$string['goto_compilatio_service_status'] = 'Ver estado de los servicios de Compilatio.';
$string['green_threshold'] = 'Verde hasta';
$string['help_compilatio_format_content'] = 'Compilatio.net es compatible con la mayoría de los formatos utilizados en procesadores de texto y en Internet. Se aceptan los formatos siguientes :';
$string['helpcenter'] = 'Acceda al Centro de Ayuda de Compilatio para el uso del plugin de Compilatio en Moodle.';
$string['helpcenter_error'] = 'No podemos conectarte automáticamente al centro de ayuda. Por favor, inténtalo más tarde o ve directamente a través del siguiente enlace:';
$string['immediately'] = 'Inmediatamente';
$string['indexed_document'] = 'Documento añadido a la base de datos de documentos de su institución. Su contenido puede utilizarse para detectar similitudes con otros documentos.';
$string['keep_docs_indexed'] = 'Conserve los documentos en la biblioteca de referencia';
$string['keep_docs_indexed_help'] = 'Al eliminar un curso, restablecer un curso o eliminar una actividad, puede elegir eliminar definitivamente los documentos enviados a Compilatio o conservarlos en la biblioteca de referencias (sólo se conservará el texto, que se utilizará como material de comparación en sus próximos análisis).';
$string['lastname'] = 'Apellido';
$string['manual_analysis'] = 'El análisis de este documento debe ser activado manualmente.';
$string['maximum'] = 'Tasa máxima';
$string['minimum'] = 'Tasa mínima';
$string['no_document_available_for_analysis'] = 'Ningún documento estaba disponible para el análisis.';
$string['no_statistics_yet'] = 'No se ha analizado ningún documento todavía.';
$string['not_analyzed'] = 'Los documentos siguientes no pueden ser analizados :';
$string['not_analyzed_extracting'] = 'Los siguientes documentos no pueden ser analizados porque están siendo extraídos, por favor inténtelo de nuevo más tarde';
$string['not_indexed_document'] = 'Documento no añadido a la base de datos de documentos de su institución. Su contenido no se utilizará para detectar similitudes con otros documentos.';
$string['numeric_threshold'] = 'El umbral debe ser un número.';
$string['orange_threshold'] = 'Naranja hasta';
$string['owner_file'] = 'RGPD y propiedad de la tarea';
$string['owner_file_school'] = 'El centro es el propietario de las tareas';
$string['owner_file_school_details'] = 'En caso de solicitud de supresión de los datos personales de un alumno, el contenido de las tareas e informes se conservará y estará disponible para una futura comparación con nuevas tareas. Al vencimiento del contrato con Compilatio, todos los datos personales de su centro, incluidas las tareas, se suprimen en los plazos previstos contractualmente.';
$string['owner_file_student'] = 'El alumno es el único propietario de su tarea';
$string['owner_file_student_details'] = 'En caso de solicitud de supresión de los datos personales de un alumno, sus tareas e informes se suprimirán de la plataforma Moodle y de la biblioteca de referencias Compilatio. Las tareas dejarán de estar disponibles para una comparación con nuevos documentos.';
$string['plugin_disabled'] = 'El plugin no está activado en la plataforma Moodle.';
$string['plugin_disabled_assign'] = 'El plugin no está activado para tareas.';
$string['plugin_disabled_forum'] = 'El plugin no está activado para foros.';
$string['plugin_disabled_quiz'] = 'El plugin no está habilitado para cuestionario.';
$string['plugin_disabled_workshop'] = 'El plugin no está activado para talleres.';
$string['plugin_enabled'] = 'El plugin está activado en la plataforma Moodle.';
$string['plugin_enabled_assign'] = 'El plugin está habilitado para tareas.';
$string['plugin_enabled_forum'] = 'El plugin está habilitado para foros.';
$string['plugin_enabled_quiz'] = 'El plugin está habilitado para cuestionario.';
$string['plugin_enabled_workshop'] = 'El plugin está habilitado para talleres.';
$string['pluginname'] = 'Plugin de detección de plagio Compilatio';
$string['privacy:metadata:core_files'] = 'Archivos almacenados o creados desde un campo de entrada de datos';
$string['privacy:metadata:core_plagiarism'] = 'Este plugin es operado por el subsistema de detección de plagio de Moodle';
$string['privacy:metadata:external_compilatio_document'] = 'Información en cuanto a documentos en la base de datos de Compilatio';
$string['privacy:metadata:external_compilatio_document:filename'] = 'El nombre del envío';
$string['privacy:metadata:plagiarism_compilatio_files'] = 'Información en cuanto a los archivos enviados a Compilatio en la base de datos del plugin';
$string['privacy:metadata:plagiarism_compilatio_files:filename'] = 'El nombre (posiblemente autogenerado) del envío';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'El identificador del usuario de Moodle que ha realizado el envío';
$string['programmed_analysis_future'] = 'Compilatio analizará los documentos el {$a}.';
$string['programmed_analysis_past'] = 'Los documentos se han enviado para su análisis a Compilatio en {$a}.';
$string['progress'] = 'Progreso :';
$string['quiz_help'] = 'Sólo se analizarán las preguntas de tipo ensayo cuya respuesta contenga al menos {$a} palabras.';
$string['red_threshold'] = 'de lo contrario rojo';
$string['redirect_report_failed'] = 'Se ha producido un error al recuperar el informe de análisis. Vuelva a intentarlo más tarde o póngase en contacto con el servicio de asistencia (support@compilatio.net) si el problema persiste.';
$string['results'] = 'Resultados :';
$string['saved_config_failed'] = '<strong>La combinación dirección - clave API es incorrecta. El plugin está desactivado, por favor inténtelo de nuevo.<br/> La página de <a href="autodiagnosis.php">auto-diagnóstico</a> le puede ayudar a configurar este plugin.';
$string['showwhenclosed'] = 'Cuando la actividad esté cerrada';
$string['similarities'] = 'Similitudes';
$string['similarities_disclaimer'] = 'Puede analizar las similitudes en los documentos de esta actividad con <a href=\'http://www.compilatio.net/en/\' target=\'_blank\'>Compilatio</a>.<br/> Tenga cuidado: las similitudes medidas durante el análisis no significan necesariamente plagio. El informe del análisis le ayuda a identificar si las similitudes corresponden a una cita adecuada o a un plagio.';
$string['similarity_percent'] = '% de similitudes';
$string['start_analysis_in_progress'] = 'Lanzamiento de los análisis en curso';
$string['stats_errors'] = 'Errores';
$string['student_help'] = 'Puede analizar su borrador con Compilatio Magister, para medir las similitudes en el texto de sus archivos.<br/>
El contenido de su borrador no será utilizado por Compilatio como material de comparación para futuros análisis.<br/>
Sin embargo, su profesor tendrá acceso a este informe de análisis.';
$string['studentdisclosuredefault'] = 'Todos los archivos cargados aquí serán enviados al servicio de detección de similitudes Compilatio';
$string['students_disclosure'] = 'Mensaje de prevención para los estudiantes';
$string['students_disclosure_help'] = 'Este texto será visible para todos los estudiantes en la página de carga de ficheros.';
$string['tabs_title_help'] = 'Ayuda';
$string['tabs_title_stats'] = 'Estadísticas';
$string['teacher'] = 'Profesor';
$string['teacher_features_title'] = 'Funciones habilitadas para los profesores';
$string['thresholds_description'] = 'Indique los umbrales que desea utilizar, para facilitar la localización de los informes de análisis (% de similitudes) :';
$string['thresholds_settings'] = 'Límites :';
$string['timesubmitted'] = 'Enviado a Compilatio el';
$string['trigger_analyses'] = 'Disparadores del análisis';
$string['update_meta'] = 'Realiza las tareas programadas de Compilatio.net';
$string['webservice_not_ok'] = 'El servidor no pudo conectar con el servicio web. Puede que su cortafuegos esté bloqueando la conexión.';
$string['webservice_ok'] = 'El servidor puede conectar con el servicio web.';
