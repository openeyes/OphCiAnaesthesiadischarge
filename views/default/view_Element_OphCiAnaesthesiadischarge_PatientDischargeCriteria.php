<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>

<section class="element">
	<header class="element-header">
		<h3 class="element-title"><?php echo $element->elementType->name?></h3>
	</header>

		<div class="element-data">
				<div class="row data-row">
			<div class="large-2 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('pain_score_1_or_less'))?>:</div></div>
			<div class="large-10 column end"><div class="data-value"><?php echo $element->pain_score_1_or_less ? 'Yes' : 'No'?></div></div>
		</div>
		<div class="row data-row">
			<div class="large-2 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('apvu'))?>:</div></div>
			<div class="large-10 column end"><div class="data-value"><?php echo $element->apvu ? 'Yes' : 'No'?></div></div>
		</div>
		<div class="row data-row">
			<div class="large-2 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('mews_score_1_or_less'))?>:</div></div>
			<div class="large-10 column end"><div class="data-value"><?php echo $element->mews_score_1_or_less ? 'Yes' : 'No'?></div></div>
		</div>
		<div class="row data-row">
			<div class="large-2 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('nausea_vomiting_score_1_or_less'))?>:</div></div>
			<div class="large-10 column end"><div class="data-value"><?php echo $element->nausea_vomiting_score_1_or_less ? 'Yes' : 'No'?></div></div>
		</div>
		<div class="row data-row">
			<div class="large-2 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('blood_loss_score_1_or_less'))?>:</div></div>
			<div class="large-10 column end"><div class="data-value"><?php echo $element->blood_loss_score_1_or_less ? 'Yes' : 'No'?></div></div>
		</div>
		<div class="row data-row">
			<div class="large-2 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('diabetics_blood_sugar_range'))?>:</div></div>
			<div class="large-10 column end"><div class="data-value"><?php echo $element->diabetics_blood_sugar_range ? 'Yes' : 'No'?></div></div>
		</div>
		<div class="row data-row">
			<div class="large-2 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('anaesthesia_summary'))?></div></div>
			<div class="large-10 column end"><div class="data-value"><?php echo CHtml::encode($element->anaesthesia_summary)?></div></div>
		</div>
		<div class="row data-row">
			<div class="large-2 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('patient_reviewed_and_discharged'))?></div></div>
			<div class="large-10 column end"><div class="data-value"><?php echo $element->patient_reviewed_and_discharged ? 'Yes' : 'No'?></div></div>
		</div>
		</div>
</section>
