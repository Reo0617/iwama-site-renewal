# iwama-site-renewal

焼肉店「肉のいわま」WordPress軽量リニューアル。詳細方針は `CLAUDE.md` を参照。

## 構成

```
CLAUDE.md                  案件ルール・方針
docs/                      strategy.md / scope.md / handover.md
design/                    current(before) / references / notes.md
theme/nikunoiwama-child/   ★成果物（WP子テーマ）
local/setup.md             ローカルWP環境の手順
```

## 開発の流れ

1. `docs/scope.md` の前提・リスクを確認（特にWP環境アクセス）
2. `local/setup.md` に従いローカルWPを用意（環境未確認のため先行可能）
3. 既存サイトと参考サイトを `design/` にキャプチャ、`design/notes.md` に方向決定
4. `theme/nikunoiwama-child/assets/css/` にオーバーレイCSSを実装
5. スマホQA → 納品（`docs/handover.md`）

ビルド工程なし（素のCSS/JS）。Node等の依存は持たない方針。

## 納品物

`theme/nikunoiwama-child/` 一式 + `docs/handover.md`。
