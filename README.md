# Laravel 8 網站施工中

引入 larsjanssen6 的 underconstruction 套件來擴增網站暫時設置為網站施工中，讓網站在施工期間顯示維修中的頁面。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 設定可以通過施工中進入的六位數字代碼。
```sh
$ php artisan code:set 六位數字代碼
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/` 來進入頁面前跳到網站施工中，輸入正確的數字代碼就可以進入。

----

## 畫面截圖
![](https://i.imgur.com/elwFBnx.png)
> 輸入錯誤的數字代碼會提醒剩餘次數

![](https://i.imgur.com/u5PcTN9.png)
> 輸入正確的數字代碼就可以進入原本頁面
