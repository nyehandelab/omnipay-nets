<?php
declare(strict_types=1);

namespace Nyehandel\Omnipay\Nets\Message;

use Omnipay\Common\Message\RedirectResponseInterface;

final class NetsEasyCancelOrderResponse extends AbstractResponse implements RedirectResponseInterface
{
    /**
     * @inheritDoc
     */
    public function isSuccessful(): bool
    {
        return $this->getCode() == 204;
    }
}

