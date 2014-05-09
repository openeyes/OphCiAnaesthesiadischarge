<?php

class m140509_125023_module_name extends CDbMigration
{
	public function up()
	{
		$this->update('event_type',array('name' => 'Anesthesia patient discharge'),"class_name = 'OphCiAnaesthesiadischarge'");
	}

	public function down()
	{
		$this->update('event_type',array('name' => 'Anaesthesia Patient Discharge'),"class_name = 'OphCiAnaesthesiadischarge'");
	}
}
