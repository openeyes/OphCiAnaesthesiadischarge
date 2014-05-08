<?php

class m140508_073246_nullable_fields extends CDbMigration
{
	public function up()
	{
		foreach (array('pain_score_1_or_less','apvu','mews_score_1_or_less','nausea_vomiting_score_1_or_less','blood_loss_score_1_or_less','diabetics_blood_sugar_range') as $field) {
			$this->alterColumn('et_ophcianaesthesiadischarge_patientdischarge',$field,'tinyint(1) unsigned null');
		}
	}

	public function down()
	{
		foreach (array('pain_score_1_or_less','apvu','mews_score_1_or_less','nausea_vomiting_score_1_or_less','blood_loss_score_1_or_less','diabetics_blood_sugar_range') as $field) {
			$this->alterColumn('et_ophcianaesthesiadischarge_patientdischarge',$field,'tinyint(1) unsigned not null');
		}
	}
}
