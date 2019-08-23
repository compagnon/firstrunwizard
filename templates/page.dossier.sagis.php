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
		<p id="wizard-text-favicon">Dans le dossier partagé:<span class="favicon"></span>SAGIS</p>
		<ul id="wizard-values-sagis">
			<li>
				<h3>Partagez <span>certains documents avec votre gérant privé.</span></h3>
			</li>
			<li>
				<h3>Retrouvez <span>vos documents SAGIS en quelques clics.</span></h3>
			</li>
		</ul>
	</div>
</div>
