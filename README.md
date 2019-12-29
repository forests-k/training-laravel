# Laravel Training

## 開発環境
- Windows10 pro
- Docker for Windows
- Visual Studio Code

## 構成
```
training-laravel
├ docker/
    |       └ mysql/
    |              ├ conf.d/
    |              |       └ my.cnf
    |              ├ initdb.d/
    |              |         ├ schema.sql
    |              |         └ testdata.sql
    |              └ Dockerfile
    ├ nginx/
    |       ├ Dockerfile
    |       └ server.cnf
    ├ kiip_kotlin/
    └ docker-compose.yaml 

```

## PHP x Laravelについて
PHP/Laravelのソースコードは、ProxyServerとなるNginxのコンテナとは別のコンテナで扱います。

今回使用するのは、[PHP-FPM(FastCGI Proccess Manager)](https://www.php.net/manual/ja/install.fpm.php)を使用します。

現時点では、PHP7.4に対応するイメージが最新版であるため、[php/7.4-fpm](https://hub.docker.com/_/php)を選択します。

## imageの構築時のパッケージマネージャー
imageからコンテナを生成する際には、各ベンダーなどが提供するimageはごく軽量なLINUXベースのコンテナとなります。
これは、必要最低限の機能のみを搭載したBushBoxやmulsをベースとしたLiniuxDistributionにapkといったパッケージマネージャで構成されるAlpineLinuxに代表されます。

必要となるコマンド群は、パッケージマネージャであるapkを通じて各自で必要に応じてインストールすることで、
必要最低限の構成となり、軽量なコンテナを素早く構築することができるようにするためです。

## Laravelのインストール
LaravelはComposerを依存パッケージとして採用しています。
※他に利用しているのはあるのかな？
そのため、先ずComposerをインストールする。

1. Composerのインストール
    ```
    # curl -sS https://getcomposer.org/installer | php
    ```
2. ComposerからLaravelインストーラのダウンロード
    ```
    # composer global require laravel/installer
    ```
3. Laravelプロジェクトの作成
    ```
    # composer create-project --prefer-dist laravel/laravel tsundoku
    ```