## Laravel-Elasticsearch

首先先集成`Java`环境 具体参考[这篇文章](https://www.digitalocean.com/community/tutorials/how-to-install-java-with-apt-get-on-debian-8)

安装过`java`环境后可以 可以执行`java --version`
```
java version "1.8.0_171"
Java(TM) SE Runtime Environment (build 1.8.0_171-b11)
Java HotSpot(TM) 64-Bit Server VM (build 25.171-b11, mixed mode)
```
下载`es`压缩包
```
wget https://artifacts.elastic.co/downloads/elasticsearch/elasticsearch-6.2.3.zip
```
解压后 进入解压后文件夹
```
./bin/elasticsearch
```
安装完毕后 使用`thinker`生成`post`测试数据

使用`scout`导入集群
```
php artisan scout:import "App\Post"
```

访问`http://es-scout.example/search`

![1.gif](/public/screenshot/1.gif)