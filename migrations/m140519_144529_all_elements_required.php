<?php

class m140519_144529_all_elements_required extends CDbMigration
{
	public function up()
	{
		$this->update('element_type',array('required'=>1),"class_name = 'Element_OphCiAnaesthesiadischarge_PatientDischargeCriteria'");
	}

	public function down()
	{
		$this->update('element_type',array('required'=>null),"class_name = 'Element_OphCiAnaesthesiadischarge_PatientDischargeCriteria'");
	}
}
