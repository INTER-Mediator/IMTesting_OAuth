# IMTesting_SAML

INTER-MediatorのSAML認証をチェックするためのアプリケーションです。
INTER-Mediatorのサイトに常設して、常にEnd-to-End Testができるようにするためのレポジトリです。

### IM Path
- /var/www/demo_im_com/saml-trial/lib/src/INTER-Mediator

### SAML Web Root
- /var/www/demo_im_com/IMTesting_SAML/vendor/simplesamlphp/simplesamlphp/www
- https://demo.inter-mediator.com/IMTesting_SAML/vendor/simplesamlphp/simplesamlphp/www

### Setup
- INTER-Mediatorのサーバに、ide.inter-mediator.comを確保して、ここにIdPを構築している。
-- 管理ページ：https://idp.inter-mediator.com/simplesaml/module.php/core/frontpage_welcome.php
-- 管理ユーザ：admin/samltest9341
- INTER-Mediatorのサーバーのdemoのところに、このsaml-trialディレクトリを配備。
- レポジトリのルートで、composer install すれば良い。

### テスト用アプリケーション
https://demo.inter-mediator.com/saml-IMTesting_SAML/index.html

- なお、アプリケーションはグループ名を記録してレコードごとの認証に使用するもの。
- IdPに登録されている正しいユーザ：user01/user01
- ログイン可能なネイティブユーザ：mig2/mig2
- ログインできないネイティブユーザ：user1/user1 ... 認証の設定は"2"にしているのでログインできないので正しい
