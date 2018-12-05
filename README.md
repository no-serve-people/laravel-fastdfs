这是分布式文件存储系统fastDFS的laravel-composer发行包 （注意：需要编译fastdfs的php_client，相关的PHP API才能正常使用 ） 
    配置文件和一般composer包类似  
    具体使用方法  
        在项目根目录下新建packages目录，将此项目clone到该目录，最后执行composer install 即可正常使用    
         操作示例    
              命名空间引入    
             `use Ixingjue\Fastdfs\FastDFS;`           
              代码编写     
             `$dfs = new FastDFS();`  
              获取下载链接    
             `$tmp['icon'] = $dfs->createDownUrl('group1', $icon);`  
              上传文件    
             `$ret = $dfs->upload($file->getRealPath(), $file->guessExtension());`  
              etc.    
    有任何问题欢迎issue或者pr  