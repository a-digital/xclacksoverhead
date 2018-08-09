<?php
/**
 * X-Clacks-Overhead plugin for Craft CMS 3.x
 *
 * X-Clacks-Overhead is a non-standardised HTTP header based upon the fictional work of the late, great, Sir Terry Pratchett. This plugin enables you to add the pre-requisite 'GNU Terry Pratchett' as well as other custom X-Clacks-Overhead headers to Craft.
 *
 * @link      https://adigital.agency/
 * @copyright Copyright (c) 2018 Laura & Mark
 */

namespace adigital\xclacksoverhead\models;

use adigital\xclacksoverhead\XClacksOverhead;

use Craft;
use craft\base\Model;

/**
 * XClacksOverhead Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Laura & Mark
 * @package   XClacksOverhead
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $clacks = '';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['clacks', 'default'],
        ];
    }
}
