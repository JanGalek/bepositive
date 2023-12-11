<?php declare(strict_types = 1);

namespace App\Domain\Product;

use App\Model\Database\Entity\AbstractEntity;
use App\Model\Database\Entity\TCreatedAt;
use App\Model\Database\Entity\TId;
use App\Model\Database\Entity\TUpdatedAt;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="ProductRepository")
 * @ORM\Table(name="`product`")
 * @ORM\HasLifecycleCallbacks
 */
class Product extends AbstractEntity
{
	use TId;
	use TCreatedAt;
	use TUpdatedAt;

	private string $name;
	private float $value;
	private string $stockDesignation;
}
