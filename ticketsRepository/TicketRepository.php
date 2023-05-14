<?php

declare(strict_types=1);

namespace ticketsRepository;

final class TicketRepository implements TicketRepositoryInterface
{
    public function load(int $ticketID): Ticket
    {
        return Ticket::find()->where(['id' => $ticketID])->one();
    }

    public function save(Ticket $ticket): TicketId
    {
        /*...*/
    }

    public function update(Ticket $ticket): TicketId
    {
        /*...*/
    }

    public function delete(Ticket $ticket): bool
    {
        /*...*/
    }
}