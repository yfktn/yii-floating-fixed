<?php

/**
 * Description of floatingFixed
 *
 * @author Toshiba M500
 */
class FloatingFixed extends CWidget {
    public $target = '.float-fixed';
    public $padding = 5;
    public function run() {
        $assets = Yii::app()->getAssetManager()->publish( 
                dirname(__FILE__). DIRECTORY_SEPARATOR . 'vendor' );
        $cs = Yii::app()->getClientScript();
        $cs->registerScriptFile( $assets . '/jquery.floatingFixed.js' );
        
        $cs->registerScript( 'floating-fixed',
          "$( '{$this->target}' ).floatingFixed({padding: {$this->padding}});" );
    }
}

?>
