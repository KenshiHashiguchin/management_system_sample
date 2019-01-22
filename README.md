# management_system_sample
塾管理システムのサンプルになります。

システムの操作動画はこちらから閲覧できます。  
https://drive.google.com/open?id=1E0S6C5OORXwjtxCe8rdC5RF8h04xCmoD


基本的な機能だけ実装しています。
このリポジトリで実装した機能  
- 追加
- 削除
- 編集
- 検索
- ソート
- ページング
- メニュー


## ローカルで試す場合
プロジェクトディレクトリ内で以下の操作が必要です。

```
composer install
npm install
```

app/config直下に.envファイルを追加  
設定は自身の環境に合わせてください。
dumpファイルはapp直下にあります。
```
RUN_ENV="develop"
DATABASE_URL="mysql://hoge:hogehoge@localhost/mms?encoding=utf8&timezone=UTC&cacheMetadata=true&persistent=true"
DATABASE_TEST_URL="mysql://hoge:hogehoge@localhost/mms_test?encoding=utf8&timezone=UTC&cacheMetadata=true&persistent=true"
SECURITY_SALT="0138e2e1dbe2296eace55b3bc390cfba256b7644f234420eb84507f8e013ba21"
WEB_USER="hoge"
DEBUG_ONETIME_URL=1

REDIS_HOST="127.0.0.1:6379"
CACHE_DEFAULT_URL="redis://${REDIS_HOST}/?database=2&prefix=tf_default_&duration=3600"
CACHE_SHORT_URL="redis://${REDIS_HOST}/?database=2&prefix=tf_short_&duration=86400"
CACHE_LONG_URL="redis://${REDIS_HOST}/?database=2&prefix=tf_long_&duration=2592000"
CACHE_SESSION_URL="redis://${REDIS_HOST}/?database=2&prefix=tf_session_&duration=86400"
CACHE_CAKECORE_URL="redis://${REDIS_HOST}/?database=2&prefix=tf_core_&duration=31536000"
CACHE_CAKEMODEL_URL="redis://${REDIS_HOST}/?database=2&prefix=tf_model_&duration=31536000"
REDIS_DEFAULT_URL="redis://${REDIS_HOST}/?database=0"
REDIS_TEST_URL="redis://${REDIS_HOST}/?database=1"
SCHEME="http"
```
