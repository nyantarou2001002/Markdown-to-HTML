# Markdown to HTML
Markdown から HTML への変換するウェブアプリケーションです。
このアプリケーションは、ユーザーが Markdown を入力できるようにし、送信すると、サーバが HTML に変換した Markdown を表示します。

## URL

## Demo
<img width="1440" alt="スクリーンショット 2024-10-05 15 46 40" src="https://github.com/user-attachments/assets/e9ba8c02-c345-4bc0-9ff6-f833c861ee26">
<img width="1440" alt="スクリーンショット 2024-10-05 15 46 58" src="https://github.com/user-attachments/assets/6f5c04a2-f470-4cad-afaa-d1f1b0ee470b">

## 概要
エディターにMarkdownを入力して"HTMLを表示"か"HTMLをダウンロード"を選択して"変換"ボタンを押してください。
"HTMLを表示"を選択すると、MarkdownがHTMLに変換されたコードを表示できます。  
"HTMLをダウンロード"を選択すると変換されたコードをダウンロードできます。


## 使用技術
- フロントエンド
  - 使用言語： HTML
  - コードエディタ: Monaco Editor

- バックエンド
  - 使用言語： PHP
  - マークダウン変換: Parsedown
  - パッケージ管理: Composer
