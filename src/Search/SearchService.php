<?php

namespace Holmang\Tradera\Search;

use Holmang\Tradera\BaseService;
use Holmang\Tradera\Exceptions\InvalidCredentialsException;
use SoapFault;

class SearchService extends BaseService
{
    public function __construct(array $config = [])
    {
        parent::__construct('https://api.tradera.com/v3/searchservice.asmx', $config);
    }

    /**
     * @param SearchAdvancedRequest $request
     * @return SearchAdvancedResult
     */
    public function searchAdvanced(SearchAdvancedRequest $request)
    {
        $client = new \SoapClient($this->url . "?WSDL", array(
            'location' => $this->buildLocation(),
            'trace' => 1,
            'exception' => 1,
        ));

        try {
            $response = $client->SearchAdvanced(['request' => $request]);
        } catch (SoapFault $e) {

            if ($e->faultstring === 'Forbidden') {
                throw new InvalidCredentialsException();
            } else {
                throw new \RuntimeException($e);
            }
        }

        if (!isset($response->SearchAdvancedResult)) {
            var_dump($response);
            die('ok!');
        }

        return new SearchAdvancedResult($response);
    }
}
