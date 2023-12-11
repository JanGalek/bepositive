<?php declare(strict_types = 1);

namespace App\Domain\Customer;

use App\Model\Database\Entity\AbstractEntity;
use App\Model\Database\Entity\TCreatedAt;
use App\Model\Database\Entity\TId;
use App\Model\Database\Entity\TUpdatedAt;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="CustomerRepository")
 * @ORM\Table(name="`customer`")
 * @ORM\HasLifecycleCallbacks
 */
class Customer extends AbstractEntity
{
	use TId;
	use TCreatedAt;
	use TUpdatedAt;

	private string $firstName;
	private string $lastName;
	private string $email;
	private int $telephone;
}
