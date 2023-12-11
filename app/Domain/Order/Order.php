<?php declare(strict_types = 1);

namespace App\Domain\Order;

use App\Domain\Customer\Customer;
use App\Domain\Product\Product;
use App\Model\Database\Entity\AbstractEntity;
use App\Model\Database\Entity\TCreatedAt;
use App\Model\Database\Entity\TId;
use App\Model\Database\Entity\TUpdatedAt;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="OrderRepository")
 * @ORM\Table(name="`orders`")
 * @ORM\HasLifecycleCallbacks
 */
class Order extends AbstractEntity
{
	use TId;
	use TCreatedAt;
	use TUpdatedAt;

	private Customer $customer;

	private Product $product;

	private string $orderState;

	private float $price = 0.0;

}
