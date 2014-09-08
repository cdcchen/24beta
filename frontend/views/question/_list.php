<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $pages yii\widgets\LinkPager */
/* @var $models common\models\Question[] */
?>

<div class="questions">
<?php foreach ($models as $q):?>
    <div class="question-item clearfix">
        <div class="question-stats">
            <div class="q-stats">
                <div class="votes">
                    <strong><?= $q->vote_up ?></strong>votes
                </div>
                <div class="answers answered">
                    <strong><?= $q->answer_count ?></strong>answers
                </div>
            </div>
            <div class="q-views"><?= $q->getViews() ?>&nbsp;views</div>
        </div>
        <div class="question-summary">
            <h3><?= a($q->title, Url::toRoute(['question/show', 'id' => $q->id])) ?></h3>
            <p class="q-excerpt"><?= $q->content ?></p>
            <div class="q-tags"><?= $q->tags_text ?></div>
            <div class="q-userinfo">
                <div class="asked-time">asked：<?= $q->createdAt ?></div>
                <a class="gravatar gravatar32 pull-left" href="<?= $q->user->getHomeUrl() ?>" target="_blank">
                    <?= $q->user->profile->getGavatarImg(32) ?>
                </a>
                <div class="detail">
                    <a href="<?= $q->user->getHomeUrl() ?>" target="_blank">
                        <?=$q->user->getDisplayName() ?>
                    </a>
                    <br />
                    <span>10</span>
                    <span>20</span>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>
</div>