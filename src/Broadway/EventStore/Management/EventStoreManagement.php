<?php

/*
 * This file is part of the broadway/broadway package.
 *
 * (c) Qandidate.com <opensource@qandidate.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Broadway\EventStore\Management;

use Broadway\EventStore\EventVisitor;

interface EventStoreManagement
{
    public function visitEvents(Criteria $criteria, EventVisitor $eventVisitor): void;

    /**
     * @param $id
     */
    public function replay($id, int $fromPlayhead, ?int $toPlayhead = null): void;
}
