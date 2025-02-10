# IMTesting_SAML

INTER-MediatorのSAML認証をチェックするためのアプリケーションです。
INTER-Mediatorのサイトに常設して、常にEnd-to-End Testができるようにするためのレポジトリです。

### SAML SP Web Root
- Root: /var/www/demo_im_com/IMTesting_SAML/vendor/simplesamlphp/simplesamlphp/public
- https://demo.inter-mediator.com/IMTesting_SAML/vendor/simplesamlphp/simplesamlphp/public
- Admin account of this sp: admin / samltest9341

### Setup
- INTER-Mediatorのサーバに、ide.inter-mediator.comを確保して、ここにIdPを構築している。
  - 管理ページ：https://idp.inter-mediator.com/simplesaml/module.php/core/frontpage_welcome.php
  - 管理ユーザ：admin / samltest6932

### テスト用アプリケーション
https://demo.inter-mediator.com/IMTesting_SAML/index.html

- なお、アプリケーションはグループ名を記録してレコードごとの認証に使用するもの。
- IdPに登録されている正しいユーザ：user01/user01pass user02/user02pass
- ログイン可能なネイティブユーザ：mig2/mig2
- ログインできないネイティブユーザ：user1/user1 ... 認証の設定は"2"にしているのでログインできないので正しい
