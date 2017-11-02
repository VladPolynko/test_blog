<?php

namespace vlog\model;

interface ViewModelInterface
{
    /**
     * @param string $pageName
     * @return string
     */
    public function getPage(string $pageName);
}
