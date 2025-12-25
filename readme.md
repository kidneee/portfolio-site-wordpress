# Portfolio Site

このプロジェクトは、Web コーダー転職用のポートフォリオサイトです。WordPress テーマとして実装されています。

## 概要

- **目的**: Web コーダー転職用ポートフォリオ
- **技術構成**: WordPress / PHP / HTML5 / CSS3 / JavaScript
- **テーマ構成**: カスタムテーマ

## フォルダ構成
```
portfolio-theme/
├── index.php               ← デフォルトテンプレート（フォールバック用）
├── front-page.php          ← ホームページ用
├── header.php
├── footer.php
├── functions.php
├── style.css
├── template-parts/
│   ├── fv.php
│   ├── works.php
│   ├── skills.php
│   ├── introduction.php
│   ├── faq.php
│   └── contact.php
├── assets/
│   ├── css/
│   │   ├── reset.css
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   └── images/
└── screenshot.png
```

## 開発環境

- エディタ: VS Code
- ローカル環境: Local
- バージョン管理: Git
- PHP バージョン: 8.0 以上推奨

## テーマ機能

- レスポンシブデザイン
- カスタム投稿タイプ（制作実績）
- カスタムフィールド（スキル情報）
- お問い合わせフォーム対応
- SEO 最適化

## インストール方法

1. WordPress をインストール
2. `wp-content/themes/` に本テーマを配置
3. WordPress 管理画面からテーマを有効化
4. サイト設定をカスタマイズ

## 注記

このプロジェクトは学習目的で作成されています。
