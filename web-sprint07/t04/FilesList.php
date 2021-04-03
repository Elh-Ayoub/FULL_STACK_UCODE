<?php
    class FilesList{
        public $files;
        public $folder;
        public function __construct($folder)
        {
            $this->folder = $folder;
            $this->files = scandir($folder);
            // $this->files = scandir("./t04/".$folder);
        }
        public function toList(){
            $list = "<ul>";
            foreach((array)$this->files as $filename){
                if($filename == "." || $filename ==  ".." || $filename[0] == "."){
                    continue;
                }else{
                    $list .= "<li><a href = \"?file=" . $filename . "\">$filename</a></li>"; 
                }
            }
            $list .= "</ul>";
            return $list;
        }
    }

    // $list= new FilesList("tmp");
    // echo $list->toList() . "\n";
?>