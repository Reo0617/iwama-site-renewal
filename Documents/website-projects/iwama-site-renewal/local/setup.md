# ローカルWP環境の手順

WP環境アクセス未確認のため、ローカルで子テーマを検証できるようにする。

## 前提

親テーマ `nikunoiwama` のソースが必要。入手手段（いずれか）:

- クライアントから FTP/SFTP で `wp-content/themes/nikunoiwama/` を取得
- 管理画面 > 外観 > テーマファイルエディター から控える
- 本番のテーマアセット（公開CSS等）から構造を把握（最終手段）

> 親テーマが無い間は、子テーマの見た目検証は完全には行えない。
> その期間は段階1（監査・方向決定）に専念する。

## 推奨ツール

- Local（by WP Engine）または `wp-env`（Docker）
- どちらでもよい。チームで1つに統一する

## 手順（Local の例）

1. Local で新規サイト作成（PHP/WPは本番に近いバージョンで）
2. `wp-content/themes/nikunoiwama/`（親）を配置
3. このリポジトリの `theme/nikunoiwama-child/` を
   `wp-content/themes/nikunoiwama-child/` にシンボリックリンク or コピー
4. 管理画面 > 外観 > テーマ で「nikunoiwama Child」を有効化
5. 可能ならクライアントの記事データ（エクスポート）を取り込み表示確認

## 注意

- `local/wp/` 配下のWPコア・DBはGit追跡しない（.gitignore 済み）
- Git管理対象は `theme/nikunoiwama-child/` と docs/design のみ
