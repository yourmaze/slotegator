<?php

declare(strict_types=1);

namespace ticketsRepository;

final class GetTicketService
{
    private TicketRepositoryInterface $repo;

    /**
     * В сервис прокидываем уже готовый экземпляр репозитория.
     * new TicketRepository() или
     * new TicketFromApiRepository('https://externalApi.com')
     *
     * @param GetTicketCommand $command
     * @param TicketRepositoryInterface $repo
     */
    public function __construct(GetTicketCommand $command, TicketRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function handle(): Ticket
    {
        return $this->repo->load($this->command->id);
    }
}
