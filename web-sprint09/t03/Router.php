<?php 

class Router {
    public $params = array();
    function url_to_array($full_url){
        if(strpos($full_url,'='))
            if(strpos($full_url,'?')!==false) {
                $q = parse_url($full_url);
                $full_url = $q['query'];
            }
        else
            return false;

        foreach (explode('&', $full_url) as $data) {
                list($key, $d) = explode('=', $data);
                $this->params[$key] = $d;
        }
        $this->params = empty($this->params) ? false : $this->params;
        return $this->params;
    }
    public function printParams(){
        $res = "{";
        foreach ($this->params as $key => $d){
            $res .= "'$key': '$d' , ";
        }
        $res = substr_replace($res, "}", strlen($res)-3, 2);
        echo $res;
    }
}

?>