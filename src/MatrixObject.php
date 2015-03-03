<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */
 

namespace PetrGrishin\MatrixObject;


interface MatrixObject {

    /**
     * @param array|MatrixObject $data
     */
    public function setArray($data);

    /**
     * @return array
     */
    public function getArray();
}