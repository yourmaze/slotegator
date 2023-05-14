<?php

declare(strict_types=1);

namespace ticketsRepository;

interface TicketRepositoryInterface
{
    public function load(int $ticketID): Ticket;

    public function save(Ticket $ticket): TicketId;

    public function update(Ticket $ticket): TicketId;

    public function delete(Ticket $ticket): bool;
}
