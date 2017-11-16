<?php
namespace KoronaAuto\Type;
class CustomType {
    /**
     * Присвоить значения свойствам класса
     * @param array $data Массив значений
     */
    protected function set($data) {
        foreach ($data AS $key => $value) {
            $this->{$key} = $value;
        }        
        return $this;
    }    
}
