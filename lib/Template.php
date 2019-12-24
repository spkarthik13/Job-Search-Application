<?php 

class Template{
    //path to template
    protected $template;
    //vars passed in
    protected $vars = array();

    // constructor

    public function __construct($template){
        $this->template = $template;
    }

    public function __get($key){
        return $this->vars[$key];
    }

    public function __set($key, $value){
        $this->vars[$key] = $value;

    }

    public function __toString(){
        //extract variables to use a single variable instead of a key-value inside the template
        extract($this->vars);
        //Find pathname
        chdir(dirname($this->template));
        //output the template
        ob_start();
        //include the template path
        include basename($this->template);

        return ob_get_clean();
    }

}