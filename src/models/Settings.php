<?php

namespace humandirect\cookiebot\models;

use craft\base\Model;

/**
 * Class Settings
 *
 * @author    Balazs Csaba <csaba.balazs@humandirect.eu>
 * @copyright 2018 Human Direct
 */
class Settings extends Model
{
    /**
     * @var string
     */
    public $domainGroupID = '';

    /**
     * @var bool
     */
    public $defaultPreferences = false;

    /**
     * @var bool
     */
    public $defaultStatistics = false;

    /**
     * @var bool
     */
    public $defaultMarketing = false;

    /**
     * @inheritdoc
     */
    public function rules(): array
    {
        return [
            ['domainGroupID', 'string'],
            ['domainGroupID', 'default', 'value' => null],
            ['defaultPreferences', 'boolean'],
            ['defaultPreferences', 'default', 'value' => false],
            ['defaultStatistics', 'boolean'],
            ['defaultStatistics', 'default', 'value' => false],
            ['defaultMarketing', 'boolean'],
            ['defaultMarketing', 'default', 'value' => false],
        ];
    }
}
