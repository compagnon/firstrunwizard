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
	
<div class="content content-values">
		<div class="image-center">
			<h1 class="hidden-visually">
				<?php p($theme->getName()); ?>
			</h1>
			<?php if(\OC::$server->getConfig()->getSystemValue('installed', false)
				&& \OC::$server->getConfig()->getAppValue('theming', 'logoMime', false)): ?>
			<img src="<?php p($theme->getLogo()); ?>"/>
			<?php endif; ?>
		</div>
<div class="description-block">
		<ul id="wizard-values-sagis">
			<li>
				<h3>Archivez <span>vos documents importants en ligne, dans votre coffre-fort</span></h3>
			</li>
			<li>				
				<h3>Consultez <span>vos documents où et quand vous voulez, depuis votre mobile et depuis n'importe quel ordinateur</span></h3>
			</li>
			<li>
				<h3>Bénéficiez <span>d'un niveau de sécurité supérieur à celui de votre boite emails</span></h3>
			</li>
		</ul>
</div>
	</div>
</div>
