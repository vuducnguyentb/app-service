<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class BaseEnum extends Enum
{
    const TypeProduct = 'product';
    const TypeCombo = 'combo';
    const Active = 'active';
    const InActive = 'in_active';
}
