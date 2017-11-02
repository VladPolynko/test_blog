<?php

namespace vlog\controller;

interface RouteControllerInterface
{
    /**
     * @return $response
     */
    public function getMainInfo();

    /**
     * @return $response
     */
    public function getNewsInfo();

    /**
     * @return $response
     */
    public function getAdminPage();
}
