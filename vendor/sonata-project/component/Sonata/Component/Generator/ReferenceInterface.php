<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Component\Generator;

use Sonata\Component\Invoice\InvoiceInterface;
use Sonata\Component\Order\OrderInterface;

interface ReferenceInterface
{
    /**
     * Append a valid reference number to the invoice, the order must be persisted first.
     *
     * @throws \RuntimeException
     *
     * @param \Sonata\Component\Invoice\InvoiceInterface $invoice
     */
    public function invoice(InvoiceInterface $invoice);

    /**
     * Append a valid reference number to the order, the order must be persisted first.
     *
     * @throws \RuntimeException
     *
     * @param \Sonata\Component\Order\OrderInterface $order
     */
    public function order(OrderInterface $order);
}
