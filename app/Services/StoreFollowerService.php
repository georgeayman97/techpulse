<?php

namespace App\Services;

use App\Models\Follower;

class StoreFollowerService
{
    private array $data;

    public function execute(): void
    {
        Follower::query()->create($this->data);
    }
    /**
     * @param array $data
     * @return StoreFollowerService
     */
    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }


}
