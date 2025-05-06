<?php
namespace App\Infrastructure\Persistence\Repositories;

interface BaseRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id);

    /**
     * @param int $id
     * @param array $attributes
     * @return mixed
     */
    public function update(int $id, array $attributes);

    /**
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);
}