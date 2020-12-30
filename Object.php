<?php
    declare(strict_types=1);
    class get_include_contents {
        private string $file;
        private string $content;

        public function __construct(string $file) {
            $this->file = $file;
        }

        public function parse():void {
            if(is_file($this->file) !== TRUE) {
                die("The requested file is not available");
                
            }
            ob_start();
            include $this->file;
            $this->content = ob_get_clean();
        }

        public function return():string {
            return $this->content;
        }
    }
