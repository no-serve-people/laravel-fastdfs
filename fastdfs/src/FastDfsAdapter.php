<?php

namespace Ixingjue\Fastdfs;

use League\Flysystem\Adapter\AbstractAdapter;
use League\Flysystem\Config;

class FastDfsAdapter extends AbstractAdapter
{
    /**
     * 获取下载Url
     * @param $path
     * @return string
     */
    public function getUrl($path)
    {
        $dfs = new FastDFS();
        return $dfs->createDownUrl('group1', $path);
    }
}