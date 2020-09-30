<?php

use ravesoft\db\TranslatedMessagesMigration;

class m160419_235120_i18n_ru_rave_settings extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru-RU';
    }

    public function getCategory()
    {
        return 'rave/settings';
    }

    public function getTranslations()
    {
        return [
            'General Settings' => 'Общие Настройки',
            'Reading Settings' => 'Настройки Чтения',
            'Site Title' => 'Название Сайт',
            'Site Description' => 'Описание Сайта',
            'Admin Email' => 'E-mail Администратора',
            'Timezone' => 'Часовой Пояс',
            'Date Format' => 'Формат Даты',
            'Time Format' => 'Формат Времени',
            'Page Size' => 'Записей на странице',
        ];
    }
}