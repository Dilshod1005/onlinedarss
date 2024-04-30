<?php
namespace common\components;
use common\models\Category;
use common\models\CategoryChild;
class MenuWidgets extends \yii\base\Widget
{
    public function menu(){
        $model = Category::find()->all();
        foreach ($model as $row){
            echo '<li>';
            echo '<a href="#">'.$row->name.'</a>';
            $mod = CategoryChild::find()->where(['category_id'=>$row->id])->all();
            if (!empty($mod)) {
                echo '<ul>';
                foreach ($mod as $item){
                    echo '<li>';
                    echo '<a href="page-course-v1.html">'.$item->name.'</a>';
                    echo '</li>';
                }
                echo '</ul>';
            }
            echo '</li>';
        }
    }
}
