<?php
/*
 * LiveStreet CMS
 * Copyright © 2013 OOO "ЛС-СОФТ"
 *
 * ------------------------------------------------------
 *
 * Official site: www.livestreetcms.com
 * Contact e-mail: office@livestreetcms.com
 *
 * GNU General Public License, version 2:
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * ------------------------------------------------------
 *
 * @link http://www.livestreetcms.com
 * @copyright 2013 OOO "ЛС-СОФТ"
 * @author Oleg Demodov <boxmilo@gmail.com>
 *
 */

/**
 * Евент обработки ajax запросов плагина Wall
 *
 * @author oleg
 */
class PluginWall_ActionWall_EventAjax extends Event{
    
    /**
     * Инициализация
     */
    public function Init()
    {
        /**
         * Устанавливаем формат ответа
         */
        $this->Viewer_SetResponseAjax('json');
        /**
         * Получаем текущего пользователя
         */
        $this->oUserCurrent = $this->User_GetUserCurrent();
    }
    
    /**
     * Регистрация евентов
     */
    protected function RegisterEvent()
    {
        // Добавление поста/комментария
        $this->AddEventPreg('/^wall$/i', '/^add$/', 'EventWallAdd');
        // Удаление поста/комментария
        $this->AddEventPreg('/^wall$/i', '/^remove$/', 'EventWallRemove');
        // Подгрузка постов
        $this->AddEventPreg('/^wall$/i', '/^load$/', 'EventWallLoad');
        // Подгрузка комментариев
        $this->AddEventPreg('/^wall$/i', '/^load-comments$/', 'EventWallLoadComments');
    }
}
