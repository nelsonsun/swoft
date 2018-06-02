<?php
/**
 * Created by PhpStorm.
 * User: Yxg
 * Date: 2018/6/2
 * Time: 14:04
 */

namespace App\Controllers\Api;

use Swoft\Http\Server\Bean\Annotation\RequestMethod;
use Swoft\Console\Bean\Annotation\Mapping;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;

/**
 * RSTFull get category message
 * Class CategoryController
 *
 *
 * @Controller(prefix="/api/category")
 * @package App\Controllers\Api
 */
class CategoryController
{
    /**
     * has method : index,view,create,delete,update
     */

    /**
     * @RequestMapping(method={RequestMethod::GET}, route="/api/category")
     */
    public function index()
    {
        return ['index' => 'index'];
    }
    /**
     * @RequestMapping(route="/api/category", method={RequestMethod::POST})
     * @Mapping()
     */
    public function create()
    {
        return ['create'];
    }

    public function view()
    {
        
    }
}