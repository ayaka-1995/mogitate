<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">mogitate</a>
        </div>
    </header>

    <main>
        <form class="form">
            <div class="form_products-grid">
                <div class="products">
                    <div class="products-header">
                        <h2 class="products-header__title">商品一覧</h2>
                        <button class="products-header__button">+商品を追加</button>
                    </div>

                    <div class="search-list">
                        <div class="list_input-textarea">
                            <textarea name="content" placeholder="商品で検索"></textarea>
                        </div>
                        <div class="search-list__button">
                            <button class="search-button_submit" type="submit">検索</button>
                        </div>

                        <div class="display-price">
                            <div class="display-price_title">
                                <h3>価格順で表示</h3>
                                <select class="display-price_select">
                                    <option value="">価格で並び替え</option>
                                    <option value="">安い順</option>
                                    <option value="">高い順</option>
                                </select>
                            </div>
                        </div>

                        <div class="products-list">
                            <div class="products-list_item">
                                <img class="products-list__img" src="kiwi.png" alt="キウイ">
                                <div class="products-list_name">キウイ</div>
                                <div class="products-list_price">¥800</div>
                            </div>
                        <div class="products-list_item">
                            <img class="products-list__img" src="strawberry.png" alt="ストロベリー">
                            <div class="products-list__name">ストロベリー</div>
                            <div class="products-list_price">¥1200</div>
                        </div>
                        <div class="products-list_item">
                            <img class="products-list__img" src="orange.png" alt="オレンジ">
                            <div class="products-list_name">オレンジ</div>
                            <div class="products-list_price">¥850</div>
                        </div>
                        <div class="products-list_item">
                            <img class="products-list_img" src="watermelon.png" alt="スイカ">
                            <div class="products-list_name">スイカ</div>
                            <div class="products-list_price">¥700</div>
                        </div>
                        <div class="products-list_item">
                            <img class="products-list_img" src="peach.png" alt="ピーチ">
                            <div class="products-list_name">ピーチ</div>
                            <div class="products-list_price">¥1000</div>
                        </div>
                        <div class="products-list_item">
                            <img class="products-list_img" src="grapes.png" alt="シャインマスカット">
                            <div class="products-list_name">シャインマスカット</div>
                            <div class="products-list_price">¥1400</div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>
</html>