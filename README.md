
## ダウンロード方法
git clone 
git clone https://github.com/zuoboo/laravel_ec

git clone ブランチを指定してダウンロードする場合
git clone -b ブランチ名 https://github.com/zuoboo/laravel_ec

もしくはzipファイルでダウンロードしてください

## インストール方法

- cd laravel_umarche
- composer install
- npm install
- npm run dev

.env.example をコピーして .env ファイルを作成

.envファイルの中の下記をご利用の環境に合わせて変更してください。

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_umarche
DB_USERNAME=umarche
DB_PASSWORD=password123

XAMPP/MAMPまたは他の開発環境でDBを起動した後に

php artisan migrate:fresh --seed

と実行してください。(データベーステーブルとダミーデータが追加されればOK)


最後に
Php artisan key:generate
と入力してキーを生成後、

Php artisan serve
で簡易サーバーを立ち上げ、表示確認してください。


画像のダミーデータを扱う場合は
php artisan storage:link でリンク作成し

public/images内の画像ファイルを
storage/app/public内に
shopsフォルダと productsフォルダを作成し
それぞれに画像をコピーしてください。

画像コピー後

php artisan migrate:fresh --seed
と実施してください。


## インストール後の実施事項

画像のダミーデータは
public/imagesフォルダ内に
sample1.jpg ~ sample6.jpg として
保存しています。

php artisan storage:link で
storageフォルダにリンク後、

storage/app/public/productフォルダ内に
保存すると表示されます。
（productフォルダがない場合は作成してください。）

ショップの画像も表示する場合は、
storage/app/public/shopsフォルダを作成し
画像を保存してください。


## section7の補足
決済のテストとしてstripeを利用しています。
必要な場合は、.envにstripeの情報を追記してください。

## section8の補足
メールのテストとしてmailtrapを利用しています。
必要な場合は、.envにmailtrapの情報を追記してください。

メール処理には時間がかかるので、
キューを使用しています。

必要な場合は php artisan queue:workで
ワーカーを立ち上げて動作確認するようにしてください。

