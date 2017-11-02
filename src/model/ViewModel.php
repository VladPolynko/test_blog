<?php

namespace vlog\model;

use Twig_Loader_Filesystem;
use Twig_Environment;

class ViewModel implements ViewModelInterface
{
    protected $loader;
    protected $twig;
    
    public function __construct()
    {
        $this->loader = new Twig_Loader_Filesystem(__DIR__.'/../templates');
        $this->twig   = new Twig_Environment($this->loader);
    }
    
    public function getPage(string $pageName)
    {
        return $this->twig->render($pageName.'.html');
    }
}
