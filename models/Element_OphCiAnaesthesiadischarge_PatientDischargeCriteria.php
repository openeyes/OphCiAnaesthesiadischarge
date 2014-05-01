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

/**
 * This is the model class for table "et_ophcianaesthesiadischarge_patientdischarge".
 *
 * The followings are the available columns in table:
 * @property string $id
 * @property integer $event_id
 * @property integer $pain_score_1_or_less
 * @property integer $apvu
 * @property integer $mews_score_1_or_less
 * @property integer $nausea_vomiting_score_1_or_less
 * @property integer $blood_loss_score_1_or_less
 * @property integer $diabetics_blood_sugar_range
 * @property string $anaesthesia_summary
 * @property integer $patient_reviewed_and_discharged
 * @property string $anesthesiologist
 * @property string $electronic_signature
 *
 * The followings are the available model relations:
 *
 * @property ElementType $element_type
 * @property EventType $eventType
 * @property Event $event
 * @property User $user
 * @property User $usermodified
 */

class Element_OphCiAnaesthesiadischarge_PatientDischargeCriteria  extends  BaseEventTypeElement
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return the static model class
	 */
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'et_ophcianaesthesiadischarge_patientdischarge';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('event_id, pain_score_1_or_less, apvu, mews_score_1_or_less, nausea_vomiting_score_1_or_less, blood_loss_score_1_or_less, diabetics_blood_sugar_range, anaesthesia_summary, patient_reviewed_and_discharged,  ', 'safe'),
			array('pain_score_1_or_less, apvu, mews_score_1_or_less, nausea_vomiting_score_1_or_less, blood_loss_score_1_or_less, diabetics_blood_sugar_range, anaesthesia_summary, patient_reviewed_and_discharged,  ', 'required'),
			array('id, event_id, pain_score_1_or_less, apvu, mews_score_1_or_less, nausea_vomiting_score_1_or_less, blood_loss_score_1_or_less, diabetics_blood_sugar_range, anaesthesia_summary, patient_reviewed_and_discharged, ', 'safe', 'on' => 'search'),
			array('pain_score_1_or_less, apvu, mews_score_1_or_less, nausea_vomiting_score_1_or_less, blood_loss_score_1_or_less, diabetics_blood_sugar_range','compare','compareValue'=>1)
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'element_type' => array(self::HAS_ONE, 'ElementType', 'id','on' => "element_type.class_name='".get_class($this)."'"),
			'eventType' => array(self::BELONGS_TO, 'EventType', 'event_type_id'),
			'event' => array(self::BELONGS_TO, 'Event', 'event_id'),
			'user' => array(self::BELONGS_TO, 'User', 'created_user_id'),
			'usermodified' => array(self::BELONGS_TO, 'User', 'last_modified_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'event_id' => 'Event',
			'pain_score_1_or_less' => 'Pain score 1 or less',
			'apvu' => 'APVU = A',
			'mews_score_1_or_less' => 'MEWS score 1 or less',
			'nausea_vomiting_score_1_or_less' => 'Nausea/vomiting score 1 or less',
			'blood_loss_score_1_or_less' => 'Blood loss score 1 or less',
			'diabetics_blood_sugar_range' => 'Diabetics blood sugar range 4-17mmol/l or 70-30mg/dl',
			'anaesthesia_summary' => 'Anaesthesia summary',
			'patient_reviewed_and_discharged' => 'Patient reviewed and discharged',
			'anesthesiologist' => 'Anesthesiologist ',
			'electronic_signature' => 'Electronic signature',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('event_id', $this->event_id, true);
		$criteria->compare('pain_score_1_or_less', $this->pain_score_1_or_less);
		$criteria->compare('apvu', $this->apvu);
		$criteria->compare('mews_score_1_or_less', $this->mews_score_1_or_less);
		$criteria->compare('nausea_vomiting_score_1_or_less', $this->nausea_vomiting_score_1_or_less);
		$criteria->compare('blood_loss_score_1_or_less', $this->blood_loss_score_1_or_less);
		$criteria->compare('diabetics_blood_sugar_range', $this->diabetics_blood_sugar_range);
		$criteria->compare('anaesthesia_summary', $this->anaesthesia_summary);
		$criteria->compare('patient_reviewed_and_discharged', $this->patient_reviewed_and_discharged);
		$criteria->compare('anesthesiologist', $this->anesthesiologist);
		$criteria->compare('electronic_signature', $this->electronic_signature);

		return new CActiveDataProvider(get_class($this), array(
			'criteria' => $criteria,
		));
	}

	public function getCriteriaMet()
	{
		foreach (array('pain_score_1_or_less','apvu','mews_score_1_or_less','nausea_vomiting_score_1_or_less','blood_loss_score_1_or_less','diabetics_blood_sugar_range') as $field) {
			if (!$this->$field) {
				return false;
			}
		}

		return true;
	}
}
?>
