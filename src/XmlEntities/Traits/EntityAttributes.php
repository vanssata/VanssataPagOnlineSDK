<?php

namespace VanssataPagOnlineSDK\XmlEntities\Traits;

use VanssataPagOnlineSDK\XmlEntities\XmlEntityInterface;

/**
 * Trait EntityAttributes.
 */
trait EntityAttributes
{
    /**
     * Attributes that are classes
     * array['attributeName']['type'] = 'scalar|array'
     * array['attributeName']['namespace'] = \VanssataPagOnlineSDK\XmlEntities\Class::class.
     *
     * @var array
     */
    protected $entityAttributes = [];

    /**
     * @param string $attribute
     *
     * @return bool
     */
    public function isEntityAttribute(string $attribute): bool
    {
        return \array_key_exists($attribute, $this->entityAttributes);
    }

    /**
     * @param string $attribute
     *
     * @return null|string
     */
    public function getCustomAttributeXml(string $attribute): ?string
    {
        if (empty($this->{$attribute})) {
            return null;
        }
        $xmlContent = '';
        if ($this->entityAttributes[$attribute]['type'] == 'array') {
            foreach ($this->{$attribute} as $item) {
                /* @var \VanssataPagOnlineSDK\XmlEntities\XmlEntityInterface $item */
                $xmlContent .= $item instanceof XmlEntityInterface ? $item->toXml($attribute) : '';
            }
        } else {
            $xmlContent .= $this->{$attribute} instanceof XmlEntityInterface ? $this->{$attribute}->toXml($attribute) : '';
        }

        return $xmlContent;
    }
}
