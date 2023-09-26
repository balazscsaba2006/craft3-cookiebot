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
    public string $domainGroupID = '';
    public bool $defaultPreferences = false;
    public bool $defaultStatistics = false;
    public bool $defaultMarketing = false;
    public bool $autoBlockingMode = false;
    public bool $europeanCDN = false;

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
            ['autoBlockingMode', 'boolean'],
            ['autoBlockingMode', 'default', 'value' => false],
            ['europeanCDN', 'boolean'],
            ['europeanCDN', 'default', 'value' => false],
        ];
    }
}
