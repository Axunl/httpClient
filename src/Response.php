<?php


namespace axunl\httpClient;

/**
 * Class Response
 * @package axunl\httpClient
 */
class Response
{
    /**
     * @var string
     */
    public $url;

    /**
     * @var array
     */
    public $header;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $data;

    /**
     * Response constructor.
     * @param string $url
     * @param array $header
     * @param int $code
     * @param string $data
     */
    public function __construct($url, $header, $code, $data)
    {
        $this->url = $url;
        $this->header = $header;
        $this->code = $code;
        $this->data = $data;
    }
}