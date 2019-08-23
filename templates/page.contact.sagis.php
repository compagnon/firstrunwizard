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
	<div class="description">
	<ul id="wizard-values">
			<li>
				<h3>En cas de besoin,</h3>
			</li>
			<li>
				<h3>contactez notre équipe</h3>
			</li>
			<li>
				<h3>de <A href="mailto:coffre@sagis-am.com?subject=contact support technique"> support technique.</A></h3>
			</li>
	</ul>
	</div>	
	<div class="image"><A href="mailto:coffre@sagis-am.com?subject=contact support technique"><img src="<?php p(image_path('firstrunwizard', 'Carte de visite_Support technique.png')); ?>" /></a></div>
</div>
