<?php

use ravesoft\db\TranslatedMessagesMigration;

class m151121_235120_i18n_uk_rave_settings extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'uk-UK';
    }

    public function getCategory()
    {
        return 'rave/settings';
    }

    public function getTranslations()
    {
        return [
            'General Settings' => 'Загальні Налаштування',
            'Reading Settings' => 'Налаштування Читання',
            'Site Title' => 'Назва Сайту',
            'Site Description' => 'Опис Сайту',
            'Admin Email' => 'E-mail Адміністратора',
            'Timezone' => 'Часовий Пояс',
            'Date Format' => 'Формат Дати',
            'Time Format' => 'Формат Часу',
            'Page Size' => 'Записів на сторінці',
        ];
    }
}