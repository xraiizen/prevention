<?php

namespace App\dtos;

class ClientDto extends CompanyDto implements interfaceDto
{
    public function toJson()
    {
        // TODO: Implement toJson() method.
    }

    public function toModel()
    {
        // TODO: Implement toModel() method.
    }

    public function toArray()
    {
        // TODO: Implement toArray() method.
    }

    /**
     * Defines the default values for the properties of the DTO.
     */
    protected function defaults(): array
    {
        return [];
    }

    /**
     * Maps the DTO properties before the DTO export.
     */
    protected function mapBeforeExport(): array
    {
        return [];
    }
}
