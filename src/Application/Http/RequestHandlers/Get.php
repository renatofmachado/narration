<?php

declare(strict_types=1);

namespace Application\Http\RequestHandlers;

use Domain\Contracts\Repositories\TaskRepositoryInterface;
use Narration\Framework\Http\Message\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class Get implements RequestHandlerInterface
{
    /**
     * Handle the given request.
     *
     * @param  \Psr\Http\Message\ServerRequestInterface $request
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return Response::html(file_get_contents(__DIR__.'/../../../Presentation/index.html'));
    }
}