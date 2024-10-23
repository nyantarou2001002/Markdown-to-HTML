# Markdown to HTML
Markdown から HTML への変換するウェブアプリケーションです。
このアプリケーションは、ユーザーが Markdown を入力できリアルタイムでHTMLで表示できるようにし、送信すると、サーバが HTML に変換した Markdown を表示します。

## URL
[https://mdtohtml.mdtohtml.com
](https://mdtohtml.mdtohtml.com)

## Demo
![スクリーンショット 2024-10-23 14 51 00 1](https://github.com/user-attachments/assets/f0ef2d0e-3649-4e43-8eac-c92429adfbc5)




## 概要
左側のエディターにMarkdownを入力してください。また出力形式を選択することもできます。
"HTMLを表示"を選択すると、MarkdownがHTMLに変換されたコードを全画面に表示できます。  
"HTMLをダウンロード"を選択すると変換されたコードをダウンロードできます。


## 使用技術
- フロントエンド
  - 使用言語： HTML, Javascript
  - コードエディタ: Monaco Editor

- バックエンド
  - 使用言語： PHP
  - マークダウン変換: Parsedown
  - パッケージ管理: Composer
