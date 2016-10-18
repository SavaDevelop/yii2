<?php

/* @var $this yii\web\View */

$this->title = 'Castomers';
?>
    <div class="site-index">
        <div class="body-content">
            <div class="row">
                <div class="col-lg-4">
                    Меню 
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2>Castomer</h2>
                    
                    <table class="table table-striped">
                        <tr>
                            <td>Фио клиента</td>
                            <td>Последний заказ</td>
                            <td>Всего заказов</td>
                            <td>Сумма всех заказов</td>
                            <td>Статус клиента</td>
                            <td>Зарегистрирован</td>
                        </tr>
                        <? foreach ($model as $val){ ?>                       
                        <tr>
                            <td> <img src="/img/profile.png" class="img-circle"></td>
                            <td><?=$val->name;?></td>
                            <td><?=$val->id;?></td>
                            <td><?=$val->id;?></td>
                            <td><span class="label label-primary">&nbsp;</span><?=$status[$val->status-1]->attributes['name'];?></td>
                            <td><?=$formatter->asDate($val->data, 'long');?></td>
                        </tr> 
 
                        <?}?>
                    </table>
                      <?php //  echo @backend;//Html::img('@backend/web/'); ?>
                </div>
            </div>
        </div>
    </div>