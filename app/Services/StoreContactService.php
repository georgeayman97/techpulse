<?php

namespace App\Services;

use App\Models\Contact;

class StoreContactService
{
    private array $data;

    public function execute(): void
    {
        Contact::query()->create($this->data);
    }

    /**
     * @param array $data
     * @return StoreContactService
     */
    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }


}
