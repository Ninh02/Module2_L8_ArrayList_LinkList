<?php
class ArrList
{
    public int $size;
    public array $elements;

    public function __construct($elements=[],$size=0,)
    {
        if (is_array($elements)) {
            $this->elements= $elements;
        } else {
            $this->elements = [];
        }
        $this->size=$size;
    }
    public function add($obj): void
    {
        if(!$this->isFull()) {
            array_push($this->elements, $obj);
        }else{
            echo "danh sach day";
        }
    }
    public function isFull(): bool
    {
         return count($this->elements)==$this->size;
    }
    public function insert($index,$obj):void
    {

        if (!$this->isFull()) {
            array_splice($this->elements,$index,0,$obj);
        }else{
            echo "danh sach day";
        }
    }
    public function remove($index):void
    {
            array_splice($this->arrList,$index,1);
    }
    public function get($index):object
    {
        return $this->elements[$index];
    }
    public function clear():void
    {
         $this->elements=[];
    }
    public function addAll($arr):array
    {
        array_splice($this->elements,count($this->elements),count($arr),$arr);
    }
    public function indexOf($obj):int
    {
        for ($i = 0; $i < count($this->elements); $i++) {
            if ($this->elements[$i] == $obj) {
                return $i;
            }
        }
    }
    public function isEmpty():bool
    {
          return $this->size==0;
    }
    public function sort():array
    {
         sort($this->elements);
    }
    public function reset():void
    {
         $this->elements=[];
         $this->size=0;
    }
    public function size():int
    {
        return $this->size;
    }
}