## Laravel-Elasticsearch
`Laravel`集成`Elasticsearch6`进行全文搜索并配合高亮结果显示

首先先集成`Java`环境 具体参考[这篇文章](https://www.digitalocean.com/community/tutorials/how-to-install-java-with-apt-get-on-debian-8)

安装过`java`环境后可以 执行`java --version`查看
```
java version "1.8.0_171"
Java(TM) SE Runtime Environment (build 1.8.0_171-b11)
Java HotSpot(TM) 64-Bit Server VM (build 25.171-b11, mixed mode)
```
下载`es`压缩包
```
$ wget https://artifacts.elastic.co/downloads/elasticsearch/elasticsearch-6.2.3.zip
```
解压后 进入解压后文件夹启动
```
$ ./bin/elasticsearch
```
安装完毕后 配置并迁移数据库

使用`thinker`生成`post`测试数据

使用`scout`导入集群
```
php artisan scout:import "App\Post"
```
查看`ES`索引情况
```
$ curl -X GET 'localhost:9200/_cat/indices?v&pretty'
```
高亮配置参考请求方式(具体配置在`App/Libraries/EsEngine` 可自定义)
```
curl -X POST 'localhost:9200/scout/_search?pretty' -H 'Content-Type: application/json' -d'
{
  "query": { "match": { "title" : "your key" } },
  "highlight" : {
        "pre_tags" : ["<tag1>", "<tag2>"],
        "post_tags" : ["</tag1>", "</tag2>"],
        "fields" : {
          "title": {}
        }
    }
}'
```
访问`http://es-scout.example/search`

![1.gif](/public/screenshot/1.gif)