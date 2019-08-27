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
 * Strings for component 'local_boostnavigation', language 'fr', branch 'MOODLE_37_STABLE'
 *
 * @package   local_boostnavigation
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Personnaliser le tiroir de navigation';
$string['privacy:metadata:preference:collapse'] = 'État (déplié/replié) d\'un nœud dépliable dans le tiroir de  navigation';
$string['privacy:request:preference:collapse'] = 'L\'état du nœud « {$a->nodename} » dans le tiroir de navigation est {$a->collapse}';
$string['setting_collapsemycoursesnodeperformancehint'] = 'Attention: ceci ne fonctionnera que si le paramètre <a href="/admin/search.php?query=navshowmycoursecategories">Afficher les catégories de cours</a> est désactivé. Dans le cas contraire, ce paramètre sera ignoré.';
$string['setting_collapsenodestechnicalhint'] = 'Aspect technique: du code JavaScript et CSS est ajouté à la page pour afficher/masquer les nœuds de second niveau lorsque l\'utilisateur clique sur ce nœud. L\'état (déplié/replié) du nœud est enregistré dans les préférences de l\'utilisateur. Ainsi, les nœuds ne seront masqués dans le tiroir de navigation qu\'à l\'exécution tout en restant dans l\'arbre de navigation et donc accessibles par d\'autres composants de Moodle.';
$string['setting_insertcoursesectionscoursenodecorehint'] = 'Attention: ceci ne fonctionnera que si le paramètre <a href="/admin/search.php?query=linkcoursesections">Toujours lier les sections de cours</a> est activé. Dans le cas contraire, ce paramètre sera ignoré.';
$string['setting_removecoursenodestechnicalhint'] = 'Aspect technique: le nœud est supprimé de l\'arbre de navigation. Par conséquent il n\'est plus accessible par d\'autres composants de Moodle. Dans des configurations classiques de Moodle, cela ne devrait pas poser de problèmes.';
$string['setting_removemycoursesnodeperformancehint'] = 'A noter : Si vous activez ce paramètre ainsi que <a href="/admin/search.php?query=navshowmycoursecategories">navshowmycoursecategories</a>, supprimer "Mes cours" prend plus de temps et vous devriez peut-être désactiver le paramètre navshowmycoursecategories.';
$string['settingspage_bottomnodes'] = 'Nœuds inférieurs';
$string['settingspage_coursenodes'] = 'Nœuds de cours';
$string['settingspage_rootnodes'] = 'Nœuds globaux';
