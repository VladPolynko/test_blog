<?php

namespace vlog\model;

interface ViewModelInterface
{
    /**
     * @param string $pageName
     * @return string
     */
    public function getPageWithoutData(string $pageName);

    /**
     * @param string $pageName
     * @param array $pageData
     * @return mixed
     */
    public function getPage(string $pageName, array $pageData);
}
