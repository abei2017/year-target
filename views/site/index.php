<div class="page-header">
    <h1>Year Target <small>write your targets of year.</small></h1>
</div>
<p class="lead">设定并跟踪我今天的目标。</p>
<div class="row">
    <div class="generator col-lg-4">
        <h3>新建一个目标</h3>
        <p>通过这里我可以建立一个目标并进入到跟踪流程。</p>
        <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['/target/create']);?>">Start »</a></p>
    </div>
    <div class="generator col-lg-4">
        <h3>跟踪目标</h3>
        <p>在这里可以填写每一次目标的跟踪记录。</p>
        <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['/target/log']);?>">Start »</a></p>
    </div>
    <div class="generator col-lg-4">
        <h3>今天报表</h3>
        <p>图表形式展示今天目标完成情况。</p>
        <p><a class="btn btn-default" href="<?= \yii\helpers\Url::to(['/target/report']);?>">Start »</a></p>
    </div>
</div>