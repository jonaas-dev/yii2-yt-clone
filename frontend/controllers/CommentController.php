<?php
namespace frontend\controllers;

use common\models\Comment;
use yii\filters\ContentNegotiator;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\Response;


/**
 * Site controller
 */
class CommentController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
            'content' => [
                'class' => ContentNegotiator::class,
                'only' => ['create'],
                'formats' => [
                    'application/json' => Response::FORMAT_JSON
                ]
            ]
        ];
    }


    public function actionCreate()
    {
        $comment = new Comment();
        if($comment->load(\Yii::$app->request->post(), '') && $comment->save()){
            $commentData = $comment->toArray();
            unset($commentData['created_by']);
            unset($commentData['video_id']);
            return [
                'success' => true,
                'comment' => $this->renderPartial('@frontend/views/video/_comment_item', [
                    'model' => $comment
                ])
            ];
        }

        return [
            'success' => false,
            'errors' => $comment->errors
        ];
    }

}
