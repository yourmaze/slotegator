<?php

declare(strict_types=1);

namespace ticketsRepository;

final class TicketFromApiRepository implements TicketRepositoryInterface
{
    private string $apiUrl;

    /**
     * Также более правильно передавать не ссылку на api
     * а какой-нибудь класс TicketApi который за собой скрывает уже и ссылки по типу "/load",
     * занимается обработкой ошибок и исключений и отдает уже массив ответа, а в репозитории мы работаем уже
     * только с успешным ответом и обрабатываем его.
     *
     * @param string $apiUrl
     */
    public function __construct(string $apiUrl)
    {
        $this->apiUrl = $apiUrl;
    }

    public function load(int $ticketID): Ticket
    {
        $url = $this->apiUrl . '/load/' . $ticketID;
        $response = file_get_contents($url);
        $data = json_decode(file_get_contents($url), true);

        /**
         * В зависимости от того какой ответ получаем тут из него
         * формируем нашу модель Ticket или сущность Ticket или что нам надо
         */

        /*...*/
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