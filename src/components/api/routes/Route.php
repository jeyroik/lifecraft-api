<?php
namespace lifecraft\components\api\routes;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class Route
{
    protected ?RequestInterface $request = null;
    protected ?ResponseInterface $response = null;
    protected array $args = [];

    public function __construct($request, $response, $args)
    {
        $this->request = $request;
        $this->response = $response;
        $this->args = $args;
    }

    abstract public function execute(): ResponseInterface;
}
