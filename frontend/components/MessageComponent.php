<?php

namespace app\components;

use yii\base\Component;
use yii\helpers\Html;

class MessageComponent extends Component {

    public $content;

    /**
     * init - функция инициализации. Если данные не будут переданы в компонент,
     * то он выведет текст "Текст по умолчанию"
     */
    public function init() {
        parent::init();
        $this->content= 'Текст по умолчанию';
    }

    /**
     * display - функция отображения данных
     * @param null $content
     */
    public function display( $content = null ) {
        //проверка строки на пустоту
        if( $content != null ) {
            $this->content= $content;
        }
        // вывод данных
        echo Html::encode($this->content);
    }

}
