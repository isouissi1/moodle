<?php

// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'filter_poodll', language 'fr', branch 'MOODLE_37_STABLE'
 *
 * @package   filter_poodll
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activate'] = 'Activer Poodll ?';
$string['advancedsettings'] = 'Paramètres avancés';
$string['alwayshtml5'] = 'Toujours utiliser HTML5';
$string['audiotranscode'] = 'Conversion automatique en MP3';
$string['audiotranscodedetails'] = 'Conversion des fichiers audio enregistrés ou téléversés au format MP3 avant de les stocker dans Moodle. Fonctionne seulement lorsque vous utilisez le serveur tokyo.poodll.com, ou les enregistrements téléversés si vous utilisez FFMPEG.';
$string['autotryports'] = 'Essayez des ports différents si la connexion échoue';
$string['bandwidth'] = 'Connexion étudiant en octets par seconde. Affecte la qualité de la Webcam.';
$string['bgtranscode_audio'] = 'Convertir en MP3 en tâche de fond';
$string['bgtranscodedetails_audio'] = 'C\'est plus fiable qu\'exécuter la conversion alors que l\'utilisateur attend. Mais l\'utilisateur n\'obtiendra pas son audio tant que le cron n\'aura pas été exécuté après l\'enregistrement. Ne fonctionne que si vous utilisez FFMPEG et Moodle 2.7 ou supérieur. Pour les enregistrements en MP3 avec l\'enregistreur MP3, la conversion a lieu dans le navigateur, pas sur le serveur. Donc la conversion côté serveur (FFMPEG) ne sera pas utilisée.';
$string['bgtranscodedetails_video'] = 'C\'est plus fiable qu\'exécuter la conversion alors que l\'utilisateur attend. Mais l\'utilisateur n\'obtiendra pas son audio tant que le cron n\'aura pas été exécuté après l\'enregistrement. Ne fonctionne que si vous utilisez FFMPEG et Moodle 2.7 ou supérieur.';
$string['bgtranscode_video'] = 'Convertir en MP4 en tâche de fond';
$string['cancel'] = 'Annuler';
$string['capturefps'] = 'Enregistrement vidéo : images par seconde';
$string['captureheight'] = 'Enregistrement vidéo : hauteur';
$string['capturewidth'] = 'Enregistrement vidéo : largeur';
$string['defaultwhiteboard'] = 'Tableau blanc par défaut';
$string['exportdiagnostics'] = 'Exporter';
$string['ffmpeg'] = 'Convertir avec ffmpeg les fichiers multimédia déposés';
$string['ffmpeg_details'] = 'Le logiciel ffmpeg doit être installé sur votre serveur Moodle, et dans le chemin système. Il devra prendre en charge la conversion en MP3. Essayez d\'abord en ligne de commande. Par exemple : ffmpeg-i somefile.flv somefile.mp3 . C\'est encore « expérimental »';
$string['filtername'] = 'Filtre Poodll';
$string['filter_poodll_audioplayer_heading'] = 'Paramètres du lecteur audio';
$string['filter_poodll_camera_heading'] = 'Paramètres de la webcam (Flash seulement)';
$string['filter_poodll_html5recorder_heading'] = 'Paramètres de l\'enregistreur HTML5';
$string['filter_poodll_mic_heading'] = 'Paramètres du microphone (Flash seulement)';
$string['filter_poodll_mp3recorder_heading'] = 'Paramètres de l\'enregistreur MP3 (Flash seulement)';
$string['filter_poodll_network_heading'] = 'Paramètres du serveur Red5 Poodll';
$string['filter_poodll_registration_explanation'] = 'Depuis PoodLL version 2.8.0 vous devez obtenir et saisir une clé d\'enregistrement PoodLL. L\'enregistrement est actuellement gratuit, et vous pouvez obtenir facilement une clé depuis <a href=\'http://poodll.com/registration\'>http://poodll.com/registration</a>';
$string['filter_poodll_registration_heading'] = 'Enregistrer votre Poodll';
$string['filter_poodll_videogallery_heading'] = 'Paramètres de la galerie vidéo';
$string['filter_poodll_videoplayer_heading'] = 'Paramètres du lecteur vidéo';
$string['filter_poodll_whiteboard_heading'] = 'Paramètres du tableau blanc';
$string['generalsettings'] = 'Paramètres généraux';
$string['highquality'] = 'haute';
$string['insert'] = 'Insérer';
$string['jumpcat_heading'] = 'Paramètres du filtre Poodll';
$string['lowquality'] = 'basse';
$string['mediumquality'] = 'moyenne';
$string['miccanpause'] = 'Permettre la mise en pause (enregistreur MP3 uniquement)';
$string['micecho'] = 'Echo du micro';
$string['micgain'] = 'Gain du micro';
$string['micloopback'] = 'Bouclage du micro';
$string['micrate'] = 'Volume du micro';
$string['micsilencelevel'] = 'Niveau du silence micro';
$string['mobileandwebkit'] = 'Mobiles + navigateurs Webkit (Safari, Chrome, etc.)';
$string['mobile_audio_quality'] = 'Qualité audio';
$string['mobileonly'] = 'Seulement les appareils mobiles';
$string['mobile_os_version_warning'] = '<p>La version de votre système d\'exploitation est trop ancienne.</p>
<ul>
<li>Android : version 4 minimum</li>
<li>iOS : version 6 minimum</li>
</ul>';
$string['mobile_video_quality'] = 'Qualité vidéo';
$string['mp3opts'] = 'Options de conversion MP3 de FFmpeg';
$string['mp3opts_details'] = 'Laissez ceci vide si vous souhaitez laisser FFmpeg prendre les décisions. Tout ce que vous entrez ici apparaîtra entre [ffmpeg -i myfile.xx ] et [ myfile.mp3 ]';
$string['mp3skin'] = 'Habillage MP3';
$string['mp3skin_details'] = 'Si vous voulez utiliser un habillage de l\'enregistreur, entrez son nom ici. Sinon, saisissez : none.';
$string['mp4opts'] = 'Options de conversion MP4 de FFmpeg';
$string['mp4opts_details'] = 'Laissez ceci vide si vous souhaitez laisser FFmpeg prendre les décisions. Tout ce que vous entrez ici apparaîtra entre [ffmpeg -i myfile.xx ] et [ myfile.mp4 ]';
$string['neverhtml5'] = 'Ne jamais utiliser HTML5';
$string['normal'] = 'Normal';
$string['picqual'] = 'Cible webcam qual. 1 - 10';
$string['pluginname'] = 'Filtre Poodll';
$string['poodll:candownloadmedia'] = 'Peut télécharger des médias';
$string['poodlltemplatesadmin'] = 'Administration des modèles du filtre Poodll';
$string['recui_audiogain'] = 'Gain audio';
$string['recui_audiorate'] = 'Taux audio';
$string['recui_btnupload'] = 'Enregistrer ou choisir un fichier';
$string['recui_cancelsnapshot'] = 'Annuler';
$string['recui_close'] = 'Fermer';
$string['recui_continue'] = 'Continuer';
$string['recui_converting'] = 'conversion';
$string['recui_echo'] = 'Suppression d\'écho';
$string['recui_finished'] = 'Terminé';
$string['recui_inaudibleerror'] = 'Impossible de vous entendre. Veuillez vérifier les permissions Flash et celles du navigateur internet.';
$string['recui_loopback'] = 'Bouclage';
$string['recui_off'] = 'Désactivé';
$string['recui_ok'] = 'OK';
$string['recui_on'] = 'Activé';
$string['recui_pause'] = 'Pause';
$string['recui_play'] = 'Lecture';
$string['recui_ready'] = 'Prêt';
$string['recui_record'] = 'Enregistrer';
$string['recui_restart'] = 'Redémarrer';
$string['recui_silencelevel'] = 'Niveau de silence';
$string['recui_stop'] = 'Stop';
$string['recui_time'] = 'Temps :';
$string['recui_timeouterror'] = 'La demande a expiré. Désolé.';
$string['recui_uploaderror'] = 'Une erreur est survenue et votre fichier n\'a PAS été déposé.';
$string['recui_uploading'] = 'téléversement en cours';
$string['registrationkey'] = 'Clé d\'enregistrement';
$string['registrationkey_explanation'] = 'Saisissez votre clé d\'enregistrement PoodLL ici. C\'est gratuit, mais PoodLL ne fonctionnera pas sans cela. Vous pouvez obtenir une clé depuis <a href=\'http://poodll.com/registration\'>http://poodll.com/registration</a>';
$string['serverhttpport'] = 'Port du serveur Red5 Poodll (HTTP)';
$string['serverid'] = 'Identifiant du serveur Red5 Poodll';
$string['servername'] = 'Adresse du serveur Red5 Poodll';
$string['serverport'] = 'Port du serveur Red5 Poodll (RTMP)';
$string['settings'] = 'Paramètres du filtre Poodll';
$string['showdownloadicon'] = 'Afficher l\'icône de téléchargement sous les lecteurs';
$string['size'] = 'Taille';
$string['studentcam'] = 'Nom choisi pour l\'appareil photo';
$string['studentmic'] = 'Nom choisi pour le microphone';
$string['template'] = 'Le corps du modèle {$a}';
$string['templatealternate'] = 'Contenu alternatif (modèle {$a})';
$string['templatealternate_end'] = 'Fin du contenu alternatif (modèle {$a})';
$string['templatecount'] = 'Nombre de modèles';
$string['templatecount_desc'] = 'Le nombre de modèles que vous pouvez avoir ; 20 par défaut.';
$string['templateheading'] = 'Paramètres pour le modèle Poodll {$a}';
$string['templateinstructions'] = 'Instructions (modèle {$a})';
$string['templatekey'] = 'La clé qui identifie le modèle {$a}';
$string['templatename'] = 'Le nom qui s\'affiche pour le modèle {$a}';
$string['templatepageheading'] = '(T) : {$a}';
$string['templatepageplayerheading'] = '(P) : {$a}';
$string['templatepagewidgetheading'] = '(W) : {$a}';
$string['templaterequire_amd'] = 'Charger via AMD';
$string['templaterequire_css'] = 'Nécessite CSS (modèle {$a})';
$string['templaterequire_jquery'] = 'Nécessite JQuery (modèle {$a})';
$string['templaterequire_js'] = 'Nécessite JS (modèle {$a})';
$string['templates'] = 'Modèles';
$string['templatescript'] = 'JS personnalisé (modèle {$a})';
$string['template_showatto'] = 'Afficher dans Atto (modèle {$a})';
$string['templatestyle'] = 'CSS personnalisé (modèle {$a})';
$string['templateupdated'] = '{$a} modèles Poodll mis à jour.';
$string['templateversion'] = 'La version de ce modèle {$a}';
$string['tiny'] = 'Tout petit';
$string['transcode_heading'] = 'Paramètres de conversion audio/vidéo (FFMPEG)';
$string['type'] = 'Type';
$string['unregistered'] = 'PoodLL ne s\'affiche pas car il n\'a pas été enregistré/validé. L\'enregistrement est gratuit. Demandez à votre enseignant/administrateur de visiter les paramètres du filtre PoodLL et de terminer le processus d\'enregistrement.';
$string['value'] = 'valeur';
$string['videotranscode'] = 'Conversion automatique en MP4';
$string['videotranscodedetails'] = 'Convertir automatiquement au format MP4 les fichiers vidéo enregistrés ou déposés avant de les stocker dans Moodle. Fonctionne seulement lorsque vous utilisez le serveur tokyo.poodll.com, ou les enregistrements téléversés si vous utilisez FFMPEG.';
$string['wboardautosave'] = 'Enregistrement automatique (millisecondes)';
$string['wboardautosave_details'] = 'Enregistrer le dessin lorsque l\'utilisateur arrête de dessiner pendant au moins X millisecondes. 0 = pas d\'enregistrement automatique';
$string['wboardheight'] = 'Hauteur du tableau blanc';
$string['wboardwidth'] = 'Largeur du tableau blanc';
$string['whiteboardsave'] = 'Enregistrer l\'image';
