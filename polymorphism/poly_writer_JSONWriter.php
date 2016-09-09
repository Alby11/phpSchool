<?php

class poly_writer_JSONWriter implements poly_writer_Writer {
    public function write(poly_base_Article $obj): JsonSerializable {
        $array = array('article' => $obj);
        return json_encode($array);
    }
}

?>