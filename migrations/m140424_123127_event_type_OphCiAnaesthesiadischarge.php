<?php 
class m140424_123127_event_type_OphCiAnaesthesiadischarge extends CDbMigration
{
	public function up()
	{
		if (!$this->dbConnection->createCommand()->select('id')->from('event_type')->where('class_name=:class_name', array(':class_name'=>'OphCiAnaesthesiadischarge'))->queryRow()) {
			$group = $this->dbConnection->createCommand()->select('id')->from('event_group')->where('name=:name',array(':name'=>'Clinical events'))->queryRow();
			$this->insert('event_type', array('class_name' => 'OphCiAnaesthesiadischarge', 'name' => 'Anaesthesia Patient Discharge','event_group_id' => $group['id']));
		}

		$event_type = $this->dbConnection->createCommand()->select('id')->from('event_type')->where('class_name=:class_name', array(':class_name'=>'OphCiAnaesthesiadischarge'))->queryRow();

		if (!$this->dbConnection->createCommand()->select('id')->from('element_type')->where('name=:name and event_type_id=:eventTypeId', array(':name'=>'Patient Discharge Criteria',':eventTypeId'=>$event_type['id']))->queryRow()) {
			$this->insert('element_type', array('name' => 'Patient Discharge Criteria','class_name' => 'Element_OphCiAnaesthesiadischarge_PatientDischargeCriteria', 'event_type_id' => $event_type['id'], 'display_order' => 1));
		}

		$element_type = $this->dbConnection->createCommand()->select('id')->from('element_type')->where('event_type_id=:eventTypeId and name=:name', array(':eventTypeId'=>$event_type['id'],':name'=>'Patient Discharge Criteria'))->queryRow();



		$this->createTable('et_ophcianaesthesiadischarge_patientdischarge', array(
				'id' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
				'event_id' => 'int(10) unsigned NOT NULL',
				'pain_score_1_or_less' => 'tinyint(1) unsigned NOT NULL',

				'apvu' => 'tinyint(1) unsigned NOT NULL',

				'mews_score_1_or_less' => 'tinyint(1) unsigned NOT NULL',

				'nausea_vomiting_score_1_or_less' => 'tinyint(1) unsigned NOT NULL',

				'blood_loss_score_1_or_less' => 'tinyint(1) unsigned NOT NULL',

				'diabetics_blood_sugar_range' => 'tinyint(1) unsigned NOT NULL',

				'anaesthesia_summary' => 'text COLLATE utf8_bin DEFAULT \'\'',

				'patient_reviewed_and_discharged' => 'tinyint(1) unsigned NOT NULL',

				'last_modified_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'last_modified_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'created_user_id' => 'int(10) unsigned NOT NULL DEFAULT 1',
				'created_date' => 'datetime NOT NULL DEFAULT \'1901-01-01 00:00:00\'',
				'PRIMARY KEY (`id`)',
				'KEY `et_ophcianaesthesiadischarge_patientdischarge_lmui_fk` (`last_modified_user_id`)',
				'KEY `et_ophcianaesthesiadischarge_patientdischarge_cui_fk` (`created_user_id`)',
				'KEY `et_ophcianaesthesiadischarge_patientdischarge_ev_fk` (`event_id`)',
				'CONSTRAINT `et_ophcianaesthesiadischarge_patientdischarge_lmui_fk` FOREIGN KEY (`last_modified_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `et_ophcianaesthesiadischarge_patientdischarge_cui_fk` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`)',
				'CONSTRAINT `et_ophcianaesthesiadischarge_patientdischarge_ev_fk` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`)',
			), 'ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin');

	}

	public function down()
	{
		$this->dropTable('et_ophcianaesthesiadischarge_patientdischarge');




		$event_type = $this->dbConnection->createCommand()->select('id')->from('event_type')->where('class_name=:class_name', array(':class_name'=>'OphCiAnaesthesiadischarge'))->queryRow();

		foreach ($this->dbConnection->createCommand()->select('id')->from('event')->where('event_type_id=:event_type_id', array(':event_type_id'=>$event_type['id']))->queryAll() as $row) {
			$this->delete('audit', 'event_id='.$row['id']);
			$this->delete('event', 'id='.$row['id']);
		}

		$this->delete('element_type', 'event_type_id='.$event_type['id']);
		$this->delete('event_type', 'id='.$event_type['id']);
	}
}

