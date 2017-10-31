<?php
class unit{
    function __construct()
    {
        $this->str='';
    }
    /*
     * cateTree(0,$mysql,'category',0)
     * 父id      那个表  标记
     * */
    function cateTree($pid,$db,$table,$flag){
        $sql="select * from {$table} where pid={$pid}";
        $data=$db->query($sql);
        $flag++;
        while($row=$data->fetch_assoc()){
            $this->str .="
            <option value={$row['fid']}>$flag {$row['cname']}</option>
            ";
            $this->cateTree($row['fid'],$db,$table,$flag);
        }
        return $this->str;
    }
}