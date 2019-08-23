<?php
/**
 * @author Guillaume Compagnon <gcompagnon@outlook.com>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * @var array $_
 * @var \OCP\IL10N $l
 * @var \OCP\Defaults $theme
 */
?>

<div class="page" data-title="<?php p($l->t('A safe home for all your data')); ?>" data-subtitle="">
	<div class="image"><img src="<?php p(image_path('firstrunwizard', 'sagis1.png')); ?>" /></div>
	<div class="description">
	<ul id="wizard-values">
			<li>
				<h3>Créez vos dossiers d'archivage</h3>
			</li>
			<li>
				<h3>et archivez vos documents importants</h3>
			</li>
			<li>
				<h3>en cliquant sur l'icone +</h3>
			</li>
	</ul>
	</div>
</div>