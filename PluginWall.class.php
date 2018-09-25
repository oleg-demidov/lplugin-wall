<?php
/**
 * @author Oleg Demidov
 *
 */

/**
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
    die('Hacking attempt!');
}

class PluginWall extends Plugin
{


    protected $aInherits = array(
       
    );

    public function Init()
    {
        
    }

    public function Activate()
    {
        return true;
    }

    public function Deactivate()
    {
        return true;
    }
    public function Remove()
    {
        return true;
    }
}