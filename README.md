# CRAS
以下の講義にて作成したシステムである．
>2022年度>広島工業大学大学院>工学系研究科>情報システム科学専攻>Webサービスシステム開発実践



## CRASの起動方法
1. 本リポジトリをクローンorダウンロード
2. ダウンロードしたディレクトリに移動　
```
$ cd CRAS
```
3. dockerイメージのビルド
```
$ docker-compose build
```
4. Dockerイメージができたか確認
```
$ docker images
```
5. コンテナの起動
```
$ dokcer-compose up -d
```

## CRASの動作確認
Apache:
ブラウザで「 http://localhost/index.html 」にアクセス

PHP:
ブラウザで「 http://localhost/info.php 」にアクセス

MySQL:
ターミナルで以下を実行 (注意：docker exec -it　~　では名称が異なる場合がある！)
```
$ docker-compose ps
$ docker exec -it cras_mysql_1 bash

# mysql -u root -p
password: password

mysql> select version();
```


## 編集場所
ウェブ表示：　ディレクトリ「 ./CRAS/htdocs 」

データベース：http://localhost:8080

    user:root   password:password


# 参考サイト
Docker Composeを使ってLAMP環境を作る：https://codeaid.jp/blog/docker-lamp/
