#  SEPET21

Codeigniter Framework kullanarak yaptığım Web Tabanlı online sipariş sitesi.


## Önizleme




[Örnek web sitesi için buraya tıkla](http://orneksepetim.rf.gd/mavisepet/)




## Kurulum

#### Gereksinim: Php server

#### Adım 1:

    Ana dizinde bununan market.sql veritabanını kurunuz.
#### Adım 2:

    Application/config/database.php dosyasında 

        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
    Bölümünden veritabanı ayarlarını yapınız.


#### Adım 3 :

     Application/config/config.php dosyasında

          $config['base_url'] = 'http://localhost/mavisepet';

     değişkenine url adresini yapınız



    
#### Adım 4:

     Panel/application/database.php   dosyasında Adım2 'yi tekrarlayınız.

#### Adım 5:

    Panel/application/config.php      dosyasında url adresini url adresiniz/panel şeklinde değiştiniz






