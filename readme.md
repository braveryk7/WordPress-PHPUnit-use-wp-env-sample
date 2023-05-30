# このリポジトリについて
このリポジトリはWordPressのモダンテスト環境であるwp-envを使ったPHPUnitのサンプルです。

当リポジトリをgit cloneして以下の手順でコマンド実行すると実際にテストを試すことが可能です。

# 詳細説明
このリポジトリの詳細説明は以下の記事にあります。

[WordPress&PHPUnitのモダンユニットテスト環境をwp-envを使って構築する | L'7 Records](https://www.braveryk7.com/modern-wordpress-phpunit-use-wp-env/)

# 必須環境

* npm
* composer
* docker

# 使い方
```shell
$ git clone git@github.com:braveryk7/WordPress-PHPUnit-use-wp-env-sample.git

$ cd WordPress-PHPUnit-use-wp-env-sample

$ npm ci

$ composer install

$ npm run wp-env start

$ npm run test:env
```

テストが終わったら以下のコマンドでwp-envのdockerコンテナを終了します。

```shell
$ npm run wp-env stop

$ npm run wp-env destroy
```

ただしdocker imageが削除される訳ではないので不要であればdocker imageの削除は手動でお願いします。

# 免責事項
当プログラムを利用したいかなる不都合も製作者は責任を負いかねます。