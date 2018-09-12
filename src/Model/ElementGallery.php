<?php
/**
 * Class: ElementGallery
 * Summary
 * Description
 * @author: richardrudy
 * @package thezenmonkey\ElementalGallery\Model  * @version:
 */


namespace thezenmonkey\ElementalGallery\Model;


use Bummzack\SortableFile\Forms\SortableUploadField;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;

class ElementGallery extends BaseElement
{
    private static $table_name = 'ElementGallery';

    private static $icon = 'font-icon-block-form';

    private static $singular_name = 'gallery';

    private static $plural_name = 'galleries';

    private static $many_many = [
        'Images' => Image::class
    ];

    private static $owns = [
        'Images'
    ];

    private static $many_many_extraFields = [
        'Images' => ['SortOrder' => 'Int']
    ];


    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(function (FieldList $fields) {
            $fields->addFieldToTab('Root.Main', SortableUploadField::create(
                'Images', $this->fieldLabel('Images')
            ));
        });

        return parent::getCMSFields();
    }

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Gallery');
    }
}