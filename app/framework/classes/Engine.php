<?php
namespace app\framework\classes;

use Exception;

class Engine
{
    private function teste()
    {
        return 'teste';
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

        return $content;
    }
}
