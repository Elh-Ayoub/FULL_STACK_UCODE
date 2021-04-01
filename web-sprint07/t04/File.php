<?php
    class File extends FilesList{
        public $path;
        public $name;
        public $content = "";
        public $file;
        public function __construct($path){
            $this->path = $path;
            $this->name = substr($path, strpos($path, "/")+1, strlen($path));
            $this->create($this->path);
        }
        public function create($path){
            $myfile = fopen("./t04/".$path.".txt", "w+");
            $this->file = $myfile;
        }
        public function write($content){
            $this->content .= $content;
            fwrite($this->file, $content);
        }
        public function read(){
           return $this->content;
        }
    }
    $file= new File( "tmp/tony_stark_characteristic");
    $file->write("volatile, self-obsessed, don't play well with others.");
    echo $file->read();
?>