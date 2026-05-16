# デザイン決定メモ

## 解析結果（2026-05-16）

### 既存サイト構成
- 親テーマ: `cocoon-master`（日本製WP人気テーマ）
- 子テーマ: `nikunoiwama`（Bootstrap + base.min.css）
- 本子テーマ: `nikunoiwama-child`（cocoon-masterの直接子、nikunoiwama置き換え）

### 既存 HTML 主要セレクター
| 箇所 | セレクター |
|---|---|
| ヘッダー | `header`, `header.kalbi`, `header.hormon` |
| ロゴ | `header .logo` |
| PCナビ | `.pc_nav` |
| スマホナビ | `.sp_nav` |
| 店舗セレクター | `.top_kalbi`, `.top_hormon` |
| ヒーロー画像 | `.col-12.top_image` |
| メインコンテンツ | `main`, `#main` |
| ボックス | `.card`, `.boxA`, `.boxB` |
| ボックス見出し | `.head`, `h2.titleA` |
| SNSセクション | `#sns`, `.sns.col-6` |
| LINEリンク | `a[href*="lin.ee"]` |
| IGリンク | `a[href*="instagram.com"]` |
| フッター | `footer#footer` |
| 店舗ボタン | `footer a[href*="/kalbi/"]`, `footer a[href*="/hormon/"]` |

### 既存サイトの課題（CSS解析で確認）
- `body { background: #FFF }` → 白地が古く安っぽい
- `#main { background: #f1f1f1 }` → グレー背景が野暮ったい
- `header.kalbi { background: #d10021 }`, `.hormon { background: #fcef42 }` → 粗い色使い
- `.top_image { height: 25vh }` → モバイルでヒーローが極端に小さい
- `a:hover { color: #00F }` → リンクhoverが青でブランド崩壊
- SNS はQRコード中心（スマホでタップ不可）
- GoogleMaps・電話 の `tel:` リンクがどこにも存在しない

## 確定デザイン方向

### カラー
| 用途 | 値 |
|---|---|
| 背景 | `#0a0a0a` |
| カード背景 | `#141414` |
| セクション背景 | `#111111` |
| メインテキスト | `#f0f0f0` |
| ミュートテキスト | `#999999` |
| アクセント赤 | `#c0202c` |
| アクセント金 | `#d4af37` |
| ボーダー | `#2a2a2a` |

### 主要変更点
1. **全体**: 黒背景 + 白文字 + 金/赤アクセント
2. **ヘッダー**: store-specific カラー廃止、統一黒、sticky
3. **ヒーロー**: 25vh → 58vw (スマホ) / 60vh (PC)
4. **SNS**: QR非表示、LINE/IG をタップ可能ボタンに
5. **固定CTA**: スマホ下部 地図/電話/LINE バー（JS注入）
6. **リンクhover**: 青 → 金
7. **セクション見出し**: 金ボーダーラインを追加して高級感

## 未確認事項（WPアクセス後に要確認）
- [ ] GoogleMaps URL（各店舗の正式リンク）
- [ ] LINE公式アカウントURL（現在: `https://lin.ee/YgdpePN`）
- [ ] Instagram URL（カルビ/ホルモン 各店あるか？）
- [ ] トップページで表示する電話番号（カルビ固定 or 選択UI）
- [ ] .top_image の background-image がCSSで設定されているか確認
  → 現在 `background-image: url(../images/top_iwama.jpg)` で設定済み
