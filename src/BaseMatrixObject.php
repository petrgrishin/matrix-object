<?php
/**
 * @author Petr Grishin <petr.grishin@grishini.ru>
 */
 

namespace PetrGrishin\MatrixObject;


class BaseMatrixObject implements MatrixObject {

    /** @var array|MatrixObject */
    private $data;
    /**
     * @param array|MatrixObject $data
     * @return $this
     */
    public function setArray($data) {
        if ($this->isMatrixObject()) {
            $this->data->setArray($data);
        } else {
            $this->data = $data;
        }
        return $this;
    }
    /**
     * @return array
     */
    public function getArray() {
        if ($this->isMatrixObject()) {
            return $this->data->getArray();
        }
        return $this->data;
    }
    /**
     * @return boolean
     */
    protected function isMatrixObject() {
        return is_object($this->data) && $this->data instanceof MatrixObject;
    }
}