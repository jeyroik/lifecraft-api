<?php
namespace lifecraft\components\api\routes\json;

use lifecraft\components\api\THasApiDescription;
use lifecraft\interfaces\api\IHaveApiDescription as api;
use lifecraft\interfaces\api\routes\IHaveRouteJson as jsonSchema;
use Psr\Http\Message\ResponseInterface;

trait THasInOutDescription
{
    use THasApiDescription;

    public function help(): ResponseInterface
    {
        $in = $this->getInputDescription(true);
        $out = $this->getOutputDescription(true);

        $this->setJsonData([
            jsonSchema::HELP__REQUEST => [
                jsonSchema::HELP__REQUEST_METHOD => $in[api::INPUT_FIELD__METHOD],
                jsonSchema::HELP__REQUEST_PARAMETERS => $in[api::INPUT_FIELD__PARAMETERS]
            ],
            jsonSchema::HELP__RESPONSE => $out[api::OUTPUT_FIELD__PARAMETERS]
        ]);

        return $this->response;
    }
}
