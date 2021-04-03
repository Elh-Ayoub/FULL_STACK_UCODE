<?php
    class File{
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
                $i = 2;
                $p = $path.".txt";
                while (true) {
                    if (!file_exists($p)){
                        $myfile = fopen($p, "w+");
                        $this->file = $myfile;
                        break;
                    }else{
                        $p = $path."$i.txt";
                        $i++;
                    }
                }
        }
        public function write($content){
            $this->content .= $content;
            fwrite($this->file, $content);
        }
        public function toList(){
           return file_get_contents($this->path.".txt"). "\n";
        }
    }
    // $file= new File( "tmp/tony_stark_characteristic");
    // $file->write("volatile, self-obsessed, don't play well with others.");
    // echo $file->toList();
?>