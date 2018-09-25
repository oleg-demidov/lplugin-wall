<?php


/**
 * Description of CreateTable
 *
 * @author oleg
 */

class PluginWall_Update_CreateTable extends ModulePluginManager_EntityUpdate {
    /**
     * Выполняется при обновлении версии
     */   


    public function up() {  
        /*
         * Меняем ключ email
         */
        $this->exportSQL(Plugin::GetPath(__CLASS__).'update/1.0.0/dump.sql');
                
	return true;
    }
    
    /**
     * Выполняется при откате версии
     */
    public function down() {
         //$this->exportSQL(Plugin::GetPath(__CLASS__).'update/2.0.0/dump_rename_down.sql');
    }
}