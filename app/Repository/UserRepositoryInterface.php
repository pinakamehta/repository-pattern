<?php
namespace App\Repository;

use Illuminate\Support\Collection;

/**
 * Interface UserRepositoryInterface
 * @package App\Repository
 */
interface UserRepositoryInterface {
    /**
     * @return Collection
     */
    public function all(): Collection;
}
