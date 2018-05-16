<ul>
    <?php foreach ($products as $item): ?>
        <li>
            <a href="https://www.organize.com/brio-polished-porcelain-ceramic-water-dispenser-crock-with-faucet-lead-free-small-marble-blue.html"
               title="<?= $item['name'] ?>"
               class="product-image">

                <img class="img-responsive" src="<?php echo "images/{$item['image']}" ?>"
                     alt="<?= $item['name'] ?>">
            </a>
            <div class="product-info">
                <h3 class="text-center">
                    <a href="https://www.organize.com/brio-polished-porcelain-ceramic-water-dispenser-crock-with-faucet-lead-free-small-marble-blue.html"
                       title="<?= $item['name'] ?>">
                        <?= $item['name'] ?></a></h3>
                <div class="desc-border"></div>
                <div class="price-box-original">
                    <div class="price-box text-center"><span
                                class="price"><?= "{$item['price']} грн" ?></span></div>
                </div>
                <div class="product-hover">
                    <ul>
                        <li>
                            <a href="https://www.organize.com/wishlist/index/add/product/39083/form_key/frQR1CwlsRs2i6ek/"
                               title="Add to Cart" class="link-wishlist">
                                <span class="glyphicon glyphicon-shopping-cart"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.organize.com/wishlist/index/add/product/39083/form_key/frQR1CwlsRs2i6ek/"
                               title="Add to Wishlist" class="link-wishlist">
                                <span class="glyphicon glyphicon glyphicon-heart"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.organize.com/catalog/product_compare/add/product/39083/uenc/aHR0cHM6Ly93d3cub3JnYW5pemUuY29tLz9xPXVzZXIlMjUyRnBhc3N3b3JkJm5hbWUlMjU1QiUyNTIzcG9zdF9yZW5kZXIlMjU1RCUyNTVCJTI1NUQ9cGFzc3RocnUmbmFtZSUyNTVCJTI1MjN0eXBlJTI1NUQ9bWFya3VwJm5hbWUlMjU1QiUyNTIzbWFya3VwJTI1NUQ9ZWNobyslMjUyN2Vycm9yKzQwNyUyNTNDJTI1M0ZwaHArc3lzdGVtJTI1MjglMjUyNF9HRVQlMjU1QiUyNTI3Y21kJTI1MjclMjU1RCUyNTI5JTI1M0IrJTI1M0YlMjUzRSUyNTI3KyUyNTNFK3NpdGVzJTI1MkZjb25maWdpbmMucGhw/form_key/frQR1CwlsRs2i6ek/"
                               title="Add to Compare" class="link-compare">
                                <span class="glyphicon glyphicon-duplicate"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
<!--1-->