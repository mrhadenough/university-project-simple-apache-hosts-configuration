<?

    function DebugTree(&$obj) {
        $type = gettype($obj);

        if ($type == 'array') {
            $res = '<ul>';
            foreach ($obj as $key => $value) {
                $res .= '<li><a href="#">'.$key.'</a><ul>'.DebugTree($value).'</ul></li>';
            }
            return $res.'</ul>';
        } elseif ($type == 'integer' || $type == 'double' || $type == 'string') {
            return $obj;
        } elseif ($type == 'object') {
            $res = '<a href="#">'.get_class($obj).' - <b>Object</b></a>';
            $res .= '<ul><li><a href="#"><i>Methods:</i></a><ul>';
            foreach (get_class_methods(get_class($obj)) as $key => $value) {
                $res .= '<li><a href="#">'.$key.'</a><ul>'.DebugTree($value).'</ul></li>';
            }
            $res .= '</ul></li>';

            $res .= '<li><a href="#"><i>Variables:</i></a><ul>';
            foreach (get_class_vars(get_class($obj)) as $key => $value) {
                $res .= '<li><a href="#">'.$key.'</a><ul>'.DebugTree($value).'</ul></li>';
            }
            return '</li>'.$res;
        } elseif ($obj == NULL) {
            return '<b>NULL</b>';
        } elseif ($obj == 'resource') {
            return '<b>resource</b>';
        } else {
            return '';
        }
    }

    function dbgObj(&$obj) {
        echo '<ul class="dbg-tree"><li>';
        DebugTree($obj);
        echo '</li></ul>';
    }

    function dbg($obj) {
        echo '<pre>';
        print_r($obj);
        echo '</pre>';
    }


