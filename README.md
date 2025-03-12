# WordPress Basic Compo

## 📌 概要
wp/preprosのシンプルテーマファイル構成です。

## 🚀 localセットアップ
1. wpをインストール
2. compoをthemeフォルダーに入れてアクティベートする
3. compoフォルダーをpreprosにdrag&drop
4. node packageをインストール

## 注意点
1. jsは自動的にwatchしていないため、「Process Automatically」をオンに
scssは自動的
2. jsファイルにimportすれば、「Bundle Imports and Requires」をオンに

## 画像について
npm run img というcommandを実行すると、src/imagesから、assets/imagesへoptimizeします。(+webpのコピー)

## wpについて
assetsのファイルは、themeの中にありますので、src=""は、get_template_directory_uri()等　にしてください。毎回書くの長いでので、function.phpにget_image($filename)等のようなfunctionを入れました。

## prepros基本設定
### output
/src/ から　/assets/ へ
### js
Babel, minify
### scss
minify, prefix

## Git ignore
/assets/css
/assets/js
/assets/images
node_modules etc.

## 📂 ディレクトリ構成
public/wp/wp-content/themes/compo/〜
```
assets/                  
  ├── css/               
  │   ├── common.css     # src/scss/common.scssから
  │   ├── home.css       # src/scss/home.scssから
  ├── fonts/             
  ├── images/            # src/imagesから      
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
  ├── images/            # /assets/imagesへ
footer.php               
functions.php            
header.php               
index.php                
prepros.config           # Preprosの設定ファイル
package.json             # nodeのパッケージファイル
screenshot.png           
style.css                
```

