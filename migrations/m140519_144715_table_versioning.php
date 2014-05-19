<?php

class m140519_144715_table_versioning extends OEMigration
{
	public function up()
	{
		$this->versionExistingTable('et_ophcianaesthesiadischarge_patientdischarge');
	}

	public function down()
	{
		$this->dropTable('et_ophcianaesthesiadischarge_patientdischarge_version');
	}
}
