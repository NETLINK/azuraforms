<?php
namespace AzuraForms\Field;

class TextArea extends Text
{
    public function configure(array $config = [])
    {
        parent::configure($config);

        if (!isset($this->attributes['rows'])) {
            $this->attributes['rows'] = 6;
        }

        if (!isset($this->attributes['cols'])) {
            $this->attributes['cols'] = 60;
        }
    }

    public function getField($form_name): ?string
    {
        list($attribute_string, $class) = $this->_attributeString();

        return sprintf('<textarea name="%1$s" id="%5$s_%1$s" class="%2$s" %4$s>%3$s</textarea>',
            $this->name,
            $class,
            $this->escape($this->value),
            $attribute_string,
            $form_name
        );
    }
}