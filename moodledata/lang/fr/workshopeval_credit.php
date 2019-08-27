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
 * Strings for component 'workshopeval_credit', language 'fr', branch 'MOODLE_36_STABLE'
 *
 * @package   workshopeval_credit
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['mode'] = 'Mode d\'évaluation';
$string['modeall'] = 'Tout ou rien';
$string['mode_desc'] = 'Le mode d\'évaluation par défaut utilisé par la méthode _Crédit de participation_.';
$string['mode_help'] = 'Le mode d\'évaluation détermine comment les notes seront calculées pour le processus d\'évaluation.

* Tout ou rien - L\'évaluateur doit évaluer tous les remises qui lui sont allouées pour obtenir la note maximale ; sinon il reçoit la note de zéro.
* Proportionnel - La note obtenue est proportionnelle au nombre d\'évaluation. Si tous les remises allouées sont évaluées, l\'évaluateur recevra la note maximale ; si la moitié des remises allouées sont évaluées, l\'évaluateur recevra 50% de la note maximale.
* Au moins une - L\'évaluateur doit évaluer au moins une remise qui lui est allouées pour obtenir la note maximale.';
$string['modeone'] = 'Au moins une';
$string['modeproportional'] = 'Proportionnel';
$string['pluginname'] = 'Crédit de participation';
