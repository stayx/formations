<?php

class BTS2BException extends \Exception
{
    public function __toString()
    {
        parent::__toString(); // TODO: Change the autogenerated stub
        return  'Error in ' . $this->getFile() . ', line :' . $this->getLine() . ' Trace: ' . $this->getTraceAsString();
    }
}


function inverse($x)
{
    if (!$x) {
        throw new BTS2BException('Division by zero');
    }

    throw new Exception('coucou');

    return 1 / $x;
}

try {
    inverse('trt');
} catch (BTS2BException $e) {
    echo $e;
}catch (Exception $e) {
    echo 'toto';
}



















