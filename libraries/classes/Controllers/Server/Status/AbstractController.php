<?php
/**
 * Holds the PhpMyAdmin\Controllers\Server\Status\AbstractController
 */

declare(strict_types=1);

namespace PhpMyAdmin\Controllers\Server\Status;

use PhpMyAdmin\Controllers\AbstractController as Controller;
use PhpMyAdmin\DatabaseInterface;
use PhpMyAdmin\Response;
use PhpMyAdmin\Server\Status\Data;
use PhpMyAdmin\Template;

/**
 * Abstract class Controller
 */
abstract class AbstractController extends Controller
{
    /** @var Data */
    protected $data;

    /** @var DatabaseInterface */
    protected $dbi;

    /**
     * @param Response          $response Response object
     * @param DatabaseInterface $dbi      DatabaseInterface object
     * @param Template          $template Template object
     * @param Data              $data     Data object
     */
    public function __construct($response, $dbi, Template $template, $data)
    {
        parent::__construct($response, $template);
        $this->data = $data;
        $this->dbi = $dbi;
    }
}
