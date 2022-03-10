<?php
namespace verbb\formie\integrations\feedme\fields;

use craft\feedme\fields\Number as FeedMeNumber;
use verbb\formie\fields\formfields\Number as NumberField;

class Number extends FeedMeNumber
{
    // Traits
    // =========================================================================

    use BaseFieldTrait;


    // Properties
    // =========================================================================

    public static $class = NumberField::class;
    public static $name = 'Number';

}
