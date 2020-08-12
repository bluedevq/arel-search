<?php

namespace Bluedevq\Database;

class Model extends \Illuminate\Database\Eloquent\Model
{
    public function search($query = array(), $columns = array())
    {
        return $this->get();
    }
}
