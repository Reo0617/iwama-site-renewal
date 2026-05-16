# iwama-site-renewal

## Project Overview

この案件は飲食店ホームページの軽量リニューアル案件。

対象サイト:
https://m-iwama.com/

参考サイト:
https://kuidon.kisoji.co.jp/

報酬:
15万円前後

## Goal

既存サイトの古いUIや雑に見える部分を改善し、
今風で見やすく、導線が整理された飲食店サイトへ改善する。

ただしフルリニューアルではなく、
既存構成を活かした軽量リニューアルとする。

## Renewal Method（改修方式）

- 既存WordPress（カスタムテーマ `nikunoiwama`）を維持する
- 成果物は子テーマ `theme/nikunoiwama-child/`
- デザイン刷新は CSSオーバーレイ中心。PHP上書きは最小限（最大2〜3枚）
- 既存ブログ・投稿・プラグイン・DBには触れない
- 修正対応は2ラウンドまで（詳細 docs/scope.md）
- 店舗: 吉川カルビ / 吉川ホルモン + ブログ「肉語り」稼働中
- 連絡先（要再確認）: カルビ 048-940-7949 / ホルモン 048-940-7948

## Important

作り込みすぎ禁止。

この案件では、
短期間・低コストで「見やすく綺麗に整える」ことを重視する。

### 未確定の最重要事項

WP環境アクセス（管理画面 / FTP / 親テーマソース）が未確認。
これが無いと子テーマの実装・確認が進まない。着手前にクライアント確認が必要。
詳細は docs/strategy.md と docs/scope.md を参照。

## Priority

優先順位:

1. スマホUI改善
2. GoogleMap導線
3. LINE導線
4. Instagram導線
5. 写真の見せ方
6. CTA改善
7. 余白と視認性改善

## Design Direction

- 黒ベース
- 白文字
- 赤アクセント
- 金アクセント
- 高級感
- 清潔感
- 写真を大きく使う
- 余白を広く取る

## Do

実施してよいこと:

- CSS整理
- レイアウト改善
- CTA改善
- section整理
- スマホ最適化
- 軽量アニメーション
- component化
- 再利用しやすい構成化

## Don't

実施しないこと:

- フルスクラッチ開発
- 完全オリジナルテーマ制作
- 複雑アニメーション
- 大規模WordPress改修
- plugin大量追加
- 予約システム開発
- 本格SEO
- ロゴ制作
- 動画制作

## Development Rules

- まず解析してから編集する
- いきなり大量変更しない
- 編集対象ファイルを明示する
- 保守性を重視する
- 再利用しやすい設計にする
- 共通化できるものは共通化する

## Preferred Skills

以下skillsを積極的に活用:

- ui-review
- responsive-design
- wordpress-analysis
- restaurant-ui
- lp-optimization
- design-system

## UI Focus

飲食店サイトとして以下を重視:

- 美味しそう
- 行きやすい
- 情報が探しやすい
- スマホで迷わない
- CTAが分かりやすい
- GoogleMapへすぐ行ける
- LINE追加しやすい
- Instagramへ飛びやすい

## Notes

まず提案ベースで進める。

勝手に大量ファイル生成しない。

大規模変更前には必ず確認を行う。
