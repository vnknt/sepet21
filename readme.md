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


# Ekran Görüntüleri :


#### Ana Sayfa(Mobil)

<img src="../master/screenshots/home-mobil.png" width="40%"></img> 

#### Urunler (Mobil)


<img src="../master/screenshots/urunler-mobil2.png" width="40%"></img> 

#### Sidebar (Mobil)

<img src="../master/screenshots/sidebar.png" width="40%"></img> 

#### Sepet (Mobil)

<img src="../master/screenshots/cart.png" width="40%"></img> 



#### Ana sayfa(Desktop)
<img src="../master/screenshots/home.png" width="40%"></img> 

#### Urunler(Desktop)
<img src="../master/screenshots/urunler.png" width="40%"></img> 


#### Admin Panel
<img src="../master/screenshots/panel.png" width="40%"></img> 


#### Siparis Detaylari
<img src="../master/screenshots/siparis-detay.png" width="40%"></img> 


#### Siparişler


<img src="../master/screenshots/siparisler.png" width="40%"></img> 



 




