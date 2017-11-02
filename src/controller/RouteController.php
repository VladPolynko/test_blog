<?php

namespace vlog\controller;

use Symfony\Component\HttpFoundation\Response;
use vlog\model\ViewModel;

class RouteController implements RouteControllerInterface
{
    protected $viewModel;

    public function __construct()
    {
        $this->viewModel = new ViewModel();
    }

    public function getMainInfo()
    {
        $page = $this->viewModel->getPage('index');
        return new Response($page);
    }

    public function getNewsInfo()
    {
        $page = $this->viewModel->getPage('news');
        return new Response($page);
    }

    public function getAdminPage()
    {
        $page = $this->viewModel->getPage('admin');
        return new Response($page);
    }
}
