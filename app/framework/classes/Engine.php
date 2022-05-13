<?php
namespace app\framework\classes;

use Exception;
use ReflectionClass;

class Engine
{
    private ?string $layout;
    private string $content;
    private array $data;
    private array $dependencies;

    private function load()
    {
        return !empty($this->content) ? $this->content : '';
    }

    private function extends(string $layout, array $data = [])
    {
        $this->layout = $layout;
        $this->data = $data;
    }

    public function dependencies(array $dependencies)
    {
        foreach ($dependencies as $dependency) {
            $className = strtolower((new ReflectionClass($dependency))->getShortName());
            $this->dependencies[$className] = $dependency;
        }
    }

    public function __call(string $name, array $params)
    {
        if (!method_exists($this->dependencies['macros'], $name)) {
            throw new Exception("Macro {$name} does not exist");
        }
        
        if (empty($params)) {
            throw new Exception("Method {$name} need one parameters");
        }

        return $this->dependencies['macros']->$name($params[0]);
    }

    public function render(string $view, array $data)
    {
        $view = dirname(__FILE__, 2)."/resources/views/{$view}.php";

        if (!file_exists($view)) {
            throw new Exception("View {$view} not found");
        }

        ob_start();

        extract($data);

        require $view;

        $content = ob_get_contents();

        ob_end_clean();

        if (!empty($this->layout)) {
            $this->content = $content;
            $data = array_merge($this->data, $data);
            $layout = $this->layout;
            $this->layout = null;
            return $this->render($layout, $this->data);
        }

        return $content;
    }
}
