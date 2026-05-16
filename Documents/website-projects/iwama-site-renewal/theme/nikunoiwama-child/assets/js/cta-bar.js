/**
 * cta-bar.js — スマホ固定CTAバー（地図 / 電話 / LINE）
 * スタイルは overlay.css の #iwama-cta-bar で定義。
 *
 * 要確認 (WPアクセス取得後):
 *   MAP_URL — 店舗ページ別に正しいGoogleMapsリンクを設定
 *   TEL     — 店舗ページ別に電話番号を切り替える場合はここに条件分岐を追加
 */
(function () {
  'use strict';

  // PC では表示しない
  if (window.innerWidth >= 769) return;

  // ページパスに応じて店舗別設定を選択
  var path = window.location.pathname;
  var config;

  if (path.indexOf('/hormon') !== -1) {
    config = {
      mapUrl:  'https://maps.google.com/?q=〒342-0045+埼玉県吉川市木売3-2-4+カーサ戸部102',
      tel:     'tel:048-940-7948',
      telText: '048-940-7948',
    };
  } else {
    // トップ・カルビ・その他は全てカルビの情報（要確認）
    config = {
      mapUrl:  'https://maps.google.com/?q=〒342-0045+埼玉県吉川市木売3-1-1+戸張マンション102',
      tel:     'tel:048-940-7949',
      telText: '048-940-7949',
    };
  }

  var bar = document.createElement('div');
  bar.id = 'iwama-cta-bar';
  bar.setAttribute('role', 'navigation');
  bar.setAttribute('aria-label', '店舗への連絡導線');

  bar.innerHTML =
    '<a href="' + config.mapUrl + '" class="cta-map" target="_blank" rel="noopener noreferrer" aria-label="地図を開く">' +
    '  <i class="fas fa-map-marker-alt" aria-hidden="true"></i>' +
    '  地図' +
    '</a>' +
    '<a href="' + config.tel + '" class="cta-tel" aria-label="電話: ' + config.telText + '">' +
    '  <i class="fas fa-phone" aria-hidden="true"></i>' +
    '  電話' +
    '</a>' +
    '<a href="https://lin.ee/YgdpePN" class="cta-line" target="_blank" rel="noopener noreferrer" aria-label="LINEで友だち追加">' +
    '  <i class="fab fa-line" aria-hidden="true"></i>' +
    '  LINE' +
    '</a>';

  // DOM 構築後に追加
  if (document.body) {
    document.body.appendChild(bar);
  } else {
    document.addEventListener('DOMContentLoaded', function () {
      document.body.appendChild(bar);
    });
  }
}());
