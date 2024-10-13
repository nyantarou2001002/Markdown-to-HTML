# Markdown to HTML
Markdown から HTML への変換するウェブアプリケーションです。
このアプリケーションは、ユーザーが Markdown を入力できるようにし、送信すると、サーバが HTML に変換した Markdown を表示します。

## URL

## Demo
![スクリーンショット 2024-10-14 4 12 57](https://github.com/user-attachments/assets/9433481d-c5b7-4f95-ad77-4ec73ecd0ab6)


## 概要
エディターにMarkdownを入力して"HTMLを表示"か"HTMLをダウンロード"を選択して"変換"ボタンを押してください。
"HTMLを表示"を選択すると、MarkdownがHTMLに変換されたコードを表示できます。  
"HTMLをダウンロード"を選択すると変換されたコードをダウンロードできます。


## 使用技術
- フロントエンド
  - 使用言語： HTML, Javascript
  - コードエディタ: Monaco Editor

- バックエンド
  - 使用言語： PHP
  - マークダウン変換: Parsedown
  - パッケージ管理: Composer
