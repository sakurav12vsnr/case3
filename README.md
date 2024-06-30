# coachtechフリマ
主に10~30代をターゲットとしたcoachtechブランドの商品が出品、購入できるフリマサイトです。
![image](https://github.com/sakurav12vsnr/case3/assets/138364593/a9dacf86-dd41-4be0-8b7a-d8dbc888589b)

## 作成目的
この度、自社ブランドの商品出品のため作成致しました。

## 機能一覧
・会員登録/ログイン/ログアウト

・商品の出品及び出品商品一覧取得

・商品詳細/一覧取得

・ユーザー情報取得

・プロフィール変更

・商品お気に入り追加・削除及びお気に入り商品一覧取得

・商品のコメント追加・削除

・商品検索及び購入機能

・配送先変更

・ユーザー購入商品一覧取得

## 使用技術
・PHP 8.2.8 

・Laravel 8.83.27

・Docker 24.0.2

・Mysql 8.0.37

## テーブル設計
![image](https://github.com/sakurav12vsnr/case3/assets/138364593/b8c70afc-5382-4e7e-980e-abad79d3f354)
![image](https://github.com/sakurav12vsnr/case3/assets/138364593/135e97f4-9660-43b0-bace-33ec86627b5c)
![image](https://github.com/sakurav12vsnr/case3/assets/138364593/03c24a6a-d7dc-4c02-a2ec-8dc1a0f2cde2)

## ER図
![image](https://github.com/sakurav12vsnr/case3/assets/138364593/9e4859de-c1c3-4436-bffd-187e08d1786e)

## 環境構築
・ターミナルで下記を入力し、ファイルを作成する

$ git clone git@github.com:sakurav12vsnr/case3.git

・docker-compose.yml があるディレクトリで下記のコマンドを実行する

$ docker-compose up -d --build

・PHPコンテナ内にログイン

$ docker-compose exec php bash

・下記コマンドを入力し、パッケージをインストール

$ composer install

・composer install 時は .env 環境変数ファイルは作成されないので、 .env.example を元にコピーして作成する

$ cp .env.example .env

・下記を入力し、アプリケーションを起動させる

$ php artisan key:generate

・マイグレーション実行

$ php artisan migrate

・画像ファイルの表示のため、シンボリックリンクをはる

$ php artisan storage:link

・カテゴリー及びコンディションシーダーを実行する

$ php artisan db:seed

## アカウント種類(テストユーザー)
(メール)　hanako@example.com　(パスワード)　hanako1357

(メール)　takeshi@example.com　(パスワード)　takeshi1357

(メール)　kazue@example.com　(パスワード)　kazue1357


