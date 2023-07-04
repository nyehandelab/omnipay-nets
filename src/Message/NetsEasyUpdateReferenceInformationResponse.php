<?php
declare(strict_types=1);

namespace Nyehandel\Omnipay\Nets\Message;

use Omnipay\Common\Message\RedirectResponseInterface;
use Omnipay\Common\Message\RequestInterface;

final class NetsEasyUpdateReferenceInformationResponse extends AbstractResponse implements RedirectResponseInterface
{

    /**
     * @inheritDoc
     */
    public function __construct(private RequestInterface $request, private $data)
    {
        parent::__construct($request, $data);
    }

    /**
     * @inheritDoc
     */
    public function isSuccessful(): bool
    {
        return $this->getCode() == 204;
    }
}

