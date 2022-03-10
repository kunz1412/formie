<?php
namespace verbb\formie\migrations;

use verbb\formie\fields\formfields\Date;

use craft\db\Migration;
use craft\db\Query;
use craft\db\Table;
use craft\helpers\Json;

class m200731_000000_date_default_value extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp(): bool
    {
        $fields = (new Query())
            ->select(['id', 'settings'])
            ->from([Table::FIELDS])
            ->where(['type' => Date::class])
            ->all($this->db);

        foreach ($fields as $field) {
            $settings = Json::decode($field['settings']);

            $settings['defaultOption'] = 'date';

            $this->update(Table::FIELDS, [
                'settings' => Json::encode($settings),
            ], ['id' => $field['id']], [], false);
        }

        return true;
    }

    /**
     * @inheritdoc
     */
    public function safeDown(): bool
    {
        echo "m200731_000000_date_default_value cannot be reverted.\n";
        return false;
    }
}

