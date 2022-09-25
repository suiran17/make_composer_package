<?php
/**
 * @node_name 导航权限节点描述
 * Desc: 功能描述
 * Created by PhpStorm.
 * User: 张攀 | <zhangpan@yundun.com>
 * Date: 2022/9/25 10:24 上午
 */

use Flower\Lily\Lily;
use Flower\Rose\Rose;

class FlowerTest extends \PHPUnit_Framework_TestCase {
    
    public $rose;
    public $lily;
    
    function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        
        $this->lily = new Lily();
        $this->rose = new Rose();
    }
    
    public  function testRose()
    {
        $this->rose->desc();
        
    }
}