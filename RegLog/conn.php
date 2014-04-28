<?php
//数据库类
class opmysql{
    private $host = 'localhost';
    private $name = 'root';
    private $pwd = 'liyong';
    private $dBase = 'db_reglog';
    private $conn = '';    //连接资源
    private $result = '';  //结果集
    private $msg = '';     //返回结果
    private $fields;       //返回字段
    private $fieldsNum = 0;   //返回字段数
    private $rowsNum = 0;     //返回结果数
    private $rowsRst = '';    //返回单条记录的结果数
    private $filesArray = array();   //返回字段数组
    private $rowsArray = array();    //返回结果数组

    function __construct($host='',$name='',$pwd='',$dBase=''){
        if($host != '')
            $this->host = $host;
        if($name != '')
            $this->name = $name;
        if($pwd != '')
            $this->pwd = $pwd;
        if($dBase != '')
            $this->dBase = $dBase;
        $this->init_conn();
    }

    function init_conn(){
        $this->conn = @ mysql_connect($this->host,$this->name,$this->pwd);
        @ mysql_select_db($dBase,$this->conn);
        mysql_query("set names gb2312");    //设置编码
    }

    //操作函数
    
    //查询结果
    function mysql_query_rst($sql){
        if($this->conn == ''){
            $this->init_conn()
        }
        $this->result = @ mysql_query($sql,$this->conn);
    }
    
    //返回查询记录数函数
    function getRowsNum($sql){
        $this->mysql_query_rst($sql);
        if(mysql_errno() == 0){
            return @ mysql_num_rows($this->result);
