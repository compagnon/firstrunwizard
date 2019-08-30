<?php
/**
 * @copyright Copyright (c) 2018 Julius Härtl <jus@bitgrid.net>
 *
 * @author Julius Härtl <jus@bitgrid.net>
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

<div class="page" data-title="<?php p($l->t('Stay in sync')); ?>" data-subtitle="">
	<div class="content content-clients">
		<div class="description-block">
			<ul id="wizard-values-sagis">
				<li>
					<h3><span>En quelques clics, obtenez les</span> applications <span>permettant:</span></h3>
				</li>
				<li>
					<h3><span>-L'installation de votre coffre-fort directement sur votre mobile.</span></h3>
				</li>
				<li>
					<h3><span>-Le téléchargement de tous vos documents importants depuis votre ordinateur, <br />directement dans votre coffre-fort</span></h3>
				</li>
			</ul>
		</div>
		<div class="description-block">
			<a target="_blank" href="<?php p($_['desktop']); ?>" rel="noreferrer noopener">
				<img src="<?php p(image_path('core', 'desktopapp.svg')); ?>"
					 alt="<?php p($l->t('Desktop client')); ?>"/>
			</a>
			<a target="_blank" href="<?php p($_['android']); ?>" rel="noreferrer noopener">
				<img src="<?php p(image_path('core', 'googleplay.svg')); ?>"
					 alt="<?php p($l->t('Android app')); ?>"
					 style="height:60px"/>
			</a>
			<a target="_blank" href="<?php p($_['ios']); ?>" rel="noreferrer noopener">
				<img src="<?php p(image_path('core', 'appstore.svg')); ?>"
					 alt="<?php p($l->t('iOS app')); ?>" style="height:60px"/>
			</a>
		</div>
	</div>
</div>
