<?php
namespace verbb\formie\integrations\feedme\fields;

use craft\feedme\fields\Date as FeedMeDate;
use verbb\formie\fields\formfields\Date as DateField;

class Date extends FeedMeDate
{
    // Traits
    // =========================================================================

    use BaseFieldTrait;


    // Properties
    // =========================================================================

    public static $class = DateField::class;
    public static $name = 'Date';

}
