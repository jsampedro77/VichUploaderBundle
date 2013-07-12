<?php

namespace Vich\UploaderBundle\Mapping\Annotation;

/**
 * UploadableField.
 *
 * @Annotation
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
class UploadableField
{
    /**
     * @var string $mapping
     */
    protected $mapping;

    /**
     * @var string $name
     */
    protected $propertyName;

    /**
     * @var string $fileNameProperty
     */
    protected $fileNameProperty;

    /**
     * @var string $filePathProperty
     */
    protected $filePathProperty;

    /**
     * @var string $fileBase64Property
     */
    protected $fileBase64Property;

    /**
     * Constructs a new instance of UploadableField.
     *
     * @param array $options The options.
     */
    public function __construct(array $options)
    {
        if (isset($options['mapping'])) {
            $this->mapping = $options['mapping'];
        } else {
            throw new \InvalidArgumentException('The "mapping" attribute of UploadableField is required.');
        }

        if (isset($options['fileNameProperty'])) {
            $this->fileNameProperty = $options['fileNameProperty'];
        } else {
            throw new \InvalidArgumentException('The "fileNameProperty" attribute of UploadableField is required.');
        }

        if (isset($options['filePathProperty'])) {
            $this->filePathProperty = $options['filePathProperty'];
        } 

        if (isset($options['fileBase64Property'])) {
            $this->fileBase64Property = $options['fileBase64Property'];
        } 
    }

    /**
     * Gets the mapping name.
     *
     * @return string The mapping name.
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * Sets the mapping name.
     *
     * @param $mapping The mapping name.
     */
    public function setMapping($mapping)
    {
        $this->mapping = $mapping;
    }

    /**
     * Gets the property name.
     *
     * @return string The property name.
     */
    public function getPropertyName()
    {
        return $this->propertyName;
    }

    /**
     * Sets the property name.
     *
     * @param $propertyName The property name.
     */
    public function setPropertyName($propertyName)
    {
        $this->propertyName = $propertyName;
    }

    /**
     * Gets the file name property.
     *
     * @return string The file name property.
     */
    public function getFileNameProperty()
    {
        return $this->fileNameProperty;
    }

    /**
     * Sets the file name property.
     *
     * @param $fileNameProperty The file name property.
     */
    public function setFileNameProperty($fileNameProperty)
    {
        $this->fileNameProperty = $fileNameProperty;
    }

    /**
     * Gets the file path property.
     *
     * @return string The path name property.
     */
    public function getFilePathProperty()
    {
        return $this->filePathProperty;
    }

    /**
     * Sets the file path property.
     *
     * @param $fileNameProperty The file path property.
     */
    public function setFilePathProperty($filePathProperty)
    {
        $this->filePathProperty = $filePathProperty;
    }

    /**
     * Gets the file base64 property.
     *
     * @return string The base64 name property.
     */
    public function getFileBase64Property()
    {
        return $this->fileBase64Property;
    }

    /**
     * Sets the file base64 property.
     *
     * @param $fileNameProperty The file base64 property.
     */
    public function setFileBase64Property($fileBase64Property)
    {
        $this->fileBase64Property = $fileBase64Property;
    }
}
