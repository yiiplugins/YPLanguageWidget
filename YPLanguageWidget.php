<?php
/**
 * YPLanguageWidget
 *
 * @author YiiPlugins.com
 * @link http://yiiplugins.com/plugin/language-widget
 * @license http://www.opensource.org/licenses/bsd-license.php
 */
class YPLanguageWidget extends CWidget
{
	public $languages = array(
		"en_us"=>"English",
		"fr"=>"French",
		"dt"=>"German",
		"es"=>"Spanish",
		"pt"=>"Portuguese",
	);
		
    public function run()
    {
        if (isset($_POST['_lang']))
        {
            Yii::app()->language = $_POST['_lang'];
            Yii::app()->session['_lang'] = Yii::app()->language;
        }
        else if (isset(Yii::app()->session['_lang']))
        {
           Yii::app()->language = Yii::app()->session['_lang'];
        }
		
        $currentLang = Yii::app()->language;
        $languages 	 = $this->languages;
        $this->render('YPLanguageWidget', 
		array('currentLang' => $currentLang, 'languages'=>$languages));
    }
}