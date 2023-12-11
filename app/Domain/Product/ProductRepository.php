<?php declare(strict_types=1);

namespace App\Domain\Product;

use App\Model\Database\Repository\AbstractRepository;

/**
 * @method Order|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Order|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Order[] findAll()
 * @method Order[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Order>
 */
class ProductRepository extends AbstractRepository
{

}
