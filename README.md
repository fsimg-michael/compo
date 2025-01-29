# WordPress Basic Compo

## 📌 概要
wp/preprosのシンプルテーマファイル構成です。

## 📂 ディレクトリ構成
public/wp/wp-content/themes/compo/〜
```
assets/                  
  ├── css/               
  │   ├── common.css     # src/scss/common.scssから
  │   ├── home.css       # src/scss/home.scssから
  ├── fonts/             
  ├── images/            
  │   ├── cat.jpg        
  │   ├── cat.webp       
  ├── js/                
  │   ├── common.js      # src/js/common.jsから
  │   ├── home.js        # src/js/home.jsから

includes/                
  ├── enqueue.php        # Headのスクリプトとスタイル
  ├── head.php           # Head内容

parts/                   # 再利用可能なテンプレートパーツ
  ├── icons/             
  ├── navigation.php     

src/                     
  ├── js/                
  │   ├── common.js      # /assets/css/common.cssへ
  │   ├── home.js        # /assets/css/home.cssへ
  ├── scss/              
  │   ├── foundation/    
  │   ├── global/        
  │   ├── common.scss    # /assets/js/common.jsへ
  │   ├── home.scss      # /assets/js/home.jsへ

footer.php               
functions.php            
header.php               
index.php                
prepros.config           # Preprosの設定ファイル
screenshot.png           
style.css                
```

## 🚀 localセットアップ
1. wpをインストール
2. compoをthemeフォルダーに入れてアクティベートする
3. compoフォルダーをpreprosにdrag&drop

## prepros基本設定
### js/ts
Babel, watch, minify
### scss
Watch, minify, prefix

## Git ignore
/assets/css
/assets/js
node_modules etc.
